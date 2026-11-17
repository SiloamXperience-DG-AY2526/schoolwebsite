<?php
/**
 * Title: Milestones Timeline
 * Slug: svlti/milestones-timeline
 */

$ms_status_labels = [
    'completed'   => 'Completed',
    'in_progress' => 'In progress',
    'disruption'  => 'Period of disruption',
    'planned'     => 'Planned',
];

$ms_field = function ($name, $post_id) {
    return function_exists('get_field') ? get_field($name, $post_id) : get_post_meta($post_id, $name, true);
};

$ms_query = new WP_Query([
    'post_type'      => 'milestone',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_key'       => 'start_year',
    'orderby'        => ['meta_value_num' => 'ASC', 'menu_order' => 'ASC'],
]);
$ms_ids = wp_list_pluck($ms_query->posts, 'ID');

// "What's Next" link only shows when the Events page exists.
$ms_events_page = get_page_by_path('blog/upcoming-events');
?>

<!-- wp:html -->
<section class="ms" aria-labelledby="ms-title">
    <div class="ms-intro">
        <h1 id="ms-title" class="ms-title">Timeline and milestones</h1>
        <p class="ms-lede">A look at how SVLTI has grown, one milestone at a time. <strong>Hover to preview, click to open</strong> each milestone.</p>
    </div>

    <?php if ($ms_ids) : ?>
    <div class="ms-scroll" role="region" aria-label="Milestones timeline, scrolls sideways" tabindex="0">
        <ol class="ms-track">
            <?php
            $ms_dialogs = '';
            foreach ($ms_ids as $ms_i => $ms_id) :
                $ms_title   = get_the_title($ms_id);
                $ms_period  = $ms_field('period_label', $ms_id);
                $ms_state   = $ms_field('status', $ms_id);
                $ms_state   = isset($ms_status_labels[$ms_state]) ? $ms_state : 'planned';
                $ms_summary = $ms_field('summary', $ms_id);
                $ms_high    = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', (string) $ms_field('highlights', $ms_id))));
                $ms_thumb   = get_post_thumbnail_id($ms_id);
                $ms_alt     = $ms_thumb ? get_post_meta($ms_thumb, '_wp_attachment_image_alt', true) : '';
                if ($ms_thumb && $ms_alt === '') {
                    $ms_alt = $ms_title;
                }
                $ms_body    = trim((string) get_post_field('post_content', $ms_id));
                $ms_dlg     = 'ms-dialog-' . $ms_id;
                $ms_prev    = $ms_i > 0 ? $ms_ids[$ms_i - 1] : 0;
                $ms_next    = $ms_i < count($ms_ids) - 1 ? $ms_ids[$ms_i + 1] : 0;
            ?>
            <li class="ms-item ms-<?php echo esc_attr($ms_state); ?>">
                <span class="ms-marker" aria-hidden="true"></span>
                <button type="button" class="ms-card" data-ms-open="<?php echo esc_attr($ms_dlg); ?>" aria-haspopup="dialog">
                    <span class="ms-period"><?php echo esc_html($ms_period); ?></span>
                    <span class="ms-name"><?php echo esc_html($ms_title); ?></span>
                    <span class="ms-status"><?php echo esc_html($ms_status_labels[$ms_state]); ?></span>
                    <?php if ($ms_thumb) : ?>
                    <span class="ms-thumb"><?php echo wp_get_attachment_image($ms_thumb, 'medium', false, ['alt' => $ms_alt, 'loading' => 'lazy']); ?></span>
                    <?php else : ?>
                    <span class="ms-thumb ms-thumb--empty">Photo coming soon</span>
                    <?php endif; ?>
                    <span class="ms-summary"><?php echo esc_html($ms_summary); ?></span>
                </button>
            </li>
            <?php ob_start(); ?>
            <dialog id="<?php echo esc_attr($ms_dlg); ?>" class="ms-dialog ms-<?php echo esc_attr($ms_state); ?>" aria-labelledby="<?php echo esc_attr($ms_dlg); ?>-title">
                <div class="ms-dialog__inner">
                    <button type="button" class="ms-dialog__close" data-ms-close aria-label="Close milestone">&times;</button>
                    <p class="ms-dialog__period"><?php echo esc_html($ms_period); ?></p>
                    <h2 id="<?php echo esc_attr($ms_dlg); ?>-title" class="ms-dialog__title"><?php echo esc_html($ms_title); ?></h2>
                    <p class="ms-status"><?php echo esc_html($ms_status_labels[$ms_state]); ?></p>
                    <?php if ($ms_thumb) : ?>
                    <div class="ms-dialog__photo"><?php echo wp_get_attachment_image($ms_thumb, 'large', false, ['alt' => $ms_alt, 'loading' => 'lazy']); ?></div>
                    <?php endif; ?>
                    <div class="ms-dialog__body">
                        <?php echo $ms_body !== '' ? wpautop(wp_kses_post($ms_body)) : '<p>' . esc_html($ms_summary) . '</p>'; ?>
                    </div>
                    <?php if ($ms_high) : ?>
                    <ul class="ms-dialog__highlights">
                        <?php foreach ($ms_high as $ms_line) : ?>
                        <li><?php echo esc_html($ms_line); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <nav class="ms-dialog__nav" aria-label="More milestones">
                        <?php if ($ms_prev) : ?>
                        <button type="button" class="ms-dialog__step" data-ms-go="ms-dialog-<?php echo (int) $ms_prev; ?>">Previous: <?php echo esc_html(get_the_title($ms_prev)); ?></button>
                        <?php else : ?><span></span><?php endif; ?>
                        <?php if ($ms_next) : ?>
                        <button type="button" class="ms-dialog__step" data-ms-go="ms-dialog-<?php echo (int) $ms_next; ?>">Next: <?php echo esc_html(get_the_title($ms_next)); ?></button>
                        <?php endif; ?>
                    </nav>
                </div>
            </dialog>
            <?php $ms_dialogs .= ob_get_clean(); ?>
            <?php endforeach; ?>
        </ol>
    </div>
    <?php echo $ms_dialogs; ?>
    <?php else : ?>
    <p class="ms-empty">Our milestones will appear here soon.</p>
    <?php endif; wp_reset_postdata(); ?>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="ms-next" aria-labelledby="ms-next-title">
    <p class="ms-next-eyebrow">What's next</p>
    <h2 id="ms-next-title" class="ms-next-title">Building the full campus</h2>
    <p class="ms-next-text">Classrooms, dormitories, a multipurpose hall and training workshops, a permanent home for hundreds of learners each year.</p>
    <?php if ($ms_events_page) : ?>
    <a class="ms-next-btn" href="<?php echo esc_url(get_permalink($ms_events_page)); ?>">See upcoming events</a>
    <?php endif; ?>
</section>
<!-- /wp:html -->
