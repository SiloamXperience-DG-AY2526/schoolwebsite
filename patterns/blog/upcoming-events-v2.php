<?php
/**
 * Title: Upcoming Events
 * Slug: svlti/upcoming-events-v2
 * Categories: featured, events
 */
?>

<!-- wp:group {"className":"w-full p-6"} -->
<div class="wp-block-group w-full p-6">

    <!-- wp:heading {"level":2,"className":"upcoming-events-title"} -->
    <h2 class="upcoming-events-title">Upcoming Events</h2>
    <!-- /wp:heading -->

    <?php
        function svlti_get_events_for_section($audience_slug = null, $limit = 10) {
            // ACF date_time_picker stored as "Y-m-d H:i:s"
            $now = current_time('mysql'); // "Y-m-d H:i:s" format
        
            $args = [
              'post_type'      => 'upcoming-events',
              'posts_per_page' => $limit,
              'post_status'    => 'publish',
        
              // Sort by event_start (meta)
              'meta_key'       => 'event_start',
              'orderby'        => 'meta_value',
              'order'          => 'ASC',
        
              // Only future events queried
              'meta_query'     => [
                [
                  'key'     => 'event_start',
                  'value'   => $now,
                  'compare' => '>=',
                  'type'    => 'DATETIME',
                ],
              ],
            ];

            // Additional taxonomy (all/ students/ parents)
            if (!empty($audience_slug)) {
                $args['tax_query'] = [
                [
                    'taxonomy' => 'event-audience',
                    'field'    => 'slug',
                    'terms'    => [$audience_slug],
                ],
                ];
            }

            return new WP_Query($args);
        }

        function svlti_format_event_card_data($post_id) {
            // Get raw stored values from ACF
            $start_raw = get_field('event_start', $post_id, false); // "Y-m-d H:i:s"
            $end_raw   = get_field('event_end', $post_id, false);
            $loc       = get_field('event_location', $post_id);
        
            $start_ts = $start_raw ? strtotime($start_raw) : 0;
            $end_ts   = $end_raw ? strtotime($end_raw) : 0;
        
            return [
              'date'     => $start_ts ? date('j', $start_ts) : '',
              'month'    => $start_ts ? date('F', $start_ts) : '',
              'title'    => get_the_title($post_id),
              'time'     => ($start_ts && $end_ts)
                ? (date('g:i A', $start_ts) . ' – ' . date('g:i A', $end_ts))
                : ($start_ts ? date('g:i A', $start_ts) : ''),
              'location' => $loc ?: '',
              'start_ts' => $start_ts,
            ];
        }

        // Build sections
        $event_sections = [
        'All Events'    => svlti_get_events_for_section('all', 10),
        'For Students'  => svlti_get_events_for_section('students', 10),
        'For Parents'   => svlti_get_events_for_section('parents', 10),
        ];
    ?>


    <!-- wp:html -->
    <?php foreach ($event_sections as $section_title => $query) : ?>
        <div class="wp-block-group mb-12">
            <h3 class="mb-6 section-title" style="color: <?= $section_title === 'All Events' ? '#2CA585' : '#207860' ?>">
                <?= esc_html($section_title) ?>
            </h3>
        
            <div class="events-grid grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <?php if ($query->have_posts()) : ?>
                <?php
                    $idx = 0; // first upcoming event
                    while ($query->have_posts()) : $query->the_post();
                    $post_id = get_the_ID();
                    $data = svlti_format_event_card_data($post_id);
        
                    $closest_class = ($idx === 0) ? 'closest' : '';
                    $idx++;
                ?>
                    <div class="wp-block-column">
                    <div class="event-card <?= esc_attr($closest_class) ?> p-4 rounded-lg shadow-sm border border-gray-100 bg-white hover:shadow-md transition-shadow">
                        <div class="text-3xl font-bold text-black mb-2"><?= esc_html($data['date']) ?></div>
                        <div class="text-lg font-semibold text-black mb-2"><?= esc_html($data['month']) ?></div>
                        <h4 class="text-sm font-bold mb-2"><?= esc_html($data['title']) ?></h4>
                        <p class="text-sm opacity-80 mb-1"><?= esc_html($data['time']) ?></p>
                        <p class="text-sm opacity-80">@ <?= esc_html($data['location']) ?></p>
                    </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php else : ?>
                <p class="text-sm opacity-70">No upcoming events.</p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
  
    <!-- /wp:html -->


</div>
<!-- /wp:group -->