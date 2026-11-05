<?php
/**
 * Title: Meet the Team Grid
 * Slug: svlti/meet-the-team-v2
 */
?>

<!-- wp:group {"className":"py-12 sm:py-16 lg:py-20","layout":{"type":"constrained"}} -->
<div class="wp-block-group py-12 sm:py-16 lg:py-20">

    <!-- wp:group {"className":"max-w-6xl mx-auto px-4 sm:px-6","layout":{"type":"constrained"}} -->
    <div class="wp-block-group max-w-6xl mx-auto px-4 sm:px-6">

        <?php
        // Tiers come from the Team "Level" field (team_level). Anyone without one is a team member.
        $tiers = [
            'head'   => 'Head',
            'deputy' => 'Deputy',
            'member' => 'Team members',
        ];
        $grouped = array_fill_keys(array_keys($tiers), []);

        $team_query = new WP_Query([
            'post_type'      => 'team-member',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ]);

        foreach ($team_query->posts as $member) {
            $level = get_field('team_level', $member->ID);
            $grouped[isset($tiers[$level]) ? $level : 'member'][] = $member->ID;
        }
        wp_reset_postdata();

        if (!$team_query->have_posts()) :
            echo '<p class="text-sm opacity-70 text-center">No team members found.</p>';
        endif;

        foreach ($tiers as $level => $tier_label) :
            if (empty($grouped[$level])) continue;
        ?>
        <section class="mb-12" aria-labelledby="team-tier-<?= esc_attr($level) ?>">
            <h2 id="team-tier-<?= esc_attr($level) ?>" class="text-2xl sm:text-3xl text-eucalyptus-110 font-bold text-center mb-8">
                <?= esc_html($tier_label) ?>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 sm:gap-14 lg:gap-16 justify-items-center w-fit mx-auto">
            <?php foreach ($grouped[$level] as $post_id) :
                $name  = get_field('name', $post_id) ?: get_the_title($post_id);
                $role  = get_field('role', $post_id);
                $image = get_field('profile_image', $post_id); // image return format is Array
                $img_url = '';
                $img_alt = $name;

                if (is_array($image) && !empty($image['url'])) {
                    $img_url = $image['url'];
                    $img_alt = !empty($image['alt']) ? $image['alt'] : $name;
                } elseif (is_int($image)) {
                    // if return format = Image ID
                    $img_url = wp_get_attachment_image_url($image, 'full');
                    $img_alt = get_post_meta($image, '_wp_attachment_image_alt', true) ?: $name;
                }
            ?>
                <div class="wp-block-group text-left w-50">
                    <div class="wp-block-group mb-8 inline-block relative">
                        <div class="absolute -bottom-5 -right-5 w-48 h-56 bg-elm-120 z-0"></div>

                        <figure class="wp-block-image size-full relative z-10 overflow-hidden bg-white w-48 h-56">
                            <?php if ($img_url) : ?>
                            <img src="<?= esc_url($img_url) ?>" alt="<?= esc_attr($img_alt) ?>" />
                            <?php else : ?>
                            <div class="w-48 h-56 flex items-center justify-center text-sm opacity-60">
                                No image
                            </div>
                            <?php endif; ?>
                        </figure>
                    </div>

                    <h3 class="text-header-normal text-eucalyptus-110 mb-1">
                        <?= esc_html($name) ?>
                    </h3>

                    <?php if ($role) : ?>
                    <p class="text-black text-paragraph-normal">
                        <?= esc_html($role) ?>
                    </p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
            </div>
        </section>
        <?php endforeach; ?>

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->