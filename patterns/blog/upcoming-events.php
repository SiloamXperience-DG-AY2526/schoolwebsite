<?php

/**
 * Title: Upcoming Events
 * Slug: svlti/upcoming-events
 * Categories: featured, events
 */
?>

<!-- wp:group {"className":"w-full p-6"} -->
<div class="wp-block-group w-full p-6">

    <!-- wp:heading {"level":2,"className":"upcoming-events-title"} -->
    <h2 class="upcoming-events-title">Upcoming Events</h2>
    <!-- /wp:heading -->

    <?php

    // Getting the time and date 
    $today = current_time('Y-m-d');

    // Get all future events from the event post type 
    $args = array(
        'post_type'      => 'event',
        'post_status'    => 'publish',
        'posts_per_page' => -1, // Get all events
        'meta_key'       => 'event_date',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
        'meta_query'     => array( // Filtering the events by date, making sure that they are events after today
            array(
                'key'     => 'event_date',
                'value'   => $today,
                'compare' => '>=',
                'type'    => 'DATE'
            )
        )
    );

    $events_query = new WP_Query($args); // Query the events

    // Organize events by audience
    $event_sections = array(
        'All Events' => array(),
        'For Students' => array(),
        'For Parents' => array(),
    );

    if ($events_query->have_posts()) { // If there are events after calling the query
        while ($events_query->have_posts()) {
            $events_query->the_post();  // Get the event post
            $post_id = get_the_ID(); // Get the event post id

            // Get event meta
            $event_date = get_post_meta($post_id, 'event_date', true);
            $event_time_start = get_post_meta($post_id, 'event_time_start', true);
            $event_time_end = get_post_meta($post_id, 'event_time_end', true);
            $event_location = get_post_meta($post_id, 'event_location', true);

            // Format date
            $date_obj = DateTime::createFromFormat('Y-m-d', $event_date);
            $date_num = $date_obj->format('j');
            $month_name = $date_obj->format('F');

            // Format time
            $time_start_formatted = date('h:i A', strtotime($event_time_start));
            $time_end_formatted = date('h:i A', strtotime($event_time_end));
            $time_range = $time_start_formatted . ' – ' . $time_end_formatted;

            // Build event array
            $event_data = array(
                'date'      => $date_num,
                'month'     => $month_name,
                'title'     => get_the_title(),
                'time'      => $time_range,
                'location'  => $event_location,
                'timestamp' => strtotime($event_date)
            );

            // Add to "All Events"
            $event_sections['All Events'][] = $event_data;

            // Get event audiences
            $audiences = wp_get_post_terms($post_id, 'event_audience', array('fields' => 'names'));

            // Add to specific audience sections - This is from the audiences that we built thorugh taxonomy
            foreach ($audiences as $audience) {
                if ($audience === 'Students') {
                    $event_sections['For Students'][] = $event_data; // Add to the students section
                } elseif ($audience === 'Parents') {
                    $event_sections['For Parents'][] = $event_data; // Add to the parents section
                }
            }
        }
        wp_reset_postdata(); // Reset the post data for next query 
    }

    // Find closest upcoming event for each section
    $today_timestamp = current_time('timestamp');

    foreach ($event_sections as $section_title => &$events) { // Loop through the event sections
        if (empty($events)) continue; // Moves forward to the next section if none in the current section 

        $closest_idx = null;
        $min_diff = PHP_INT_MAX;

        foreach ($events as $idx => $event) {
            $diff = $event['timestamp'] - $today_timestamp; // Calculate the difference between the event date and today's date
            if ($diff >= 0 && $diff < $min_diff) { // If the difference is greater than 0 and less than the minimum difference, set the minimum difference to the difference
                $min_diff = $diff;
                $closest_idx = $idx;
            }
        }

        if ($closest_idx !== null) {
            $events[$closest_idx]['closest'] = true;
        }
    }
    unset($events);
    ?>

    <!-- wp:html -->
    <?php foreach ($event_sections as $section_title => $events) : ?>
        <?php if (!empty($events)) : ?>
            <!-- wp:group {"className":"mb-12"} -->
            <div class="wp-block-group mb-12">
                <!-- wp:heading {"className":"mb-6 section-title","style":{"color":"#2CA585"}} -->
                <h3 class="mb-6 section-title" style="color: <?= $section_title === 'All Events' ? '#2CA585' : '#207860' ?>">
                    <?= esc_html($section_title) ?>
                </h3>
                <!-- /wp:heading -->

                <!-- wp:group {"className":"events-grid grid gap-6 md:grid-cols-2 lg:grid-cols-3"} -->
                <div class="events-grid grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($events as $event) :
                        $closest_class = !empty($event['closest']) ? 'closest' : '';
                    ?>
                        <!-- wp:column {"className":"wp-block-column"} -->
                        <div class="wp-block-column">
                            <!-- wp:group {"className":"event-card <?= esc_attr($closest_class) ?> p-4 rounded-lg shadow-sm border border-gray-100 bg-white hover:shadow-md transition-shadow"} -->
                            <div class="event-card <?= esc_attr($closest_class) ?> p-4 rounded-lg shadow-sm border border-gray-100 bg-white hover:shadow-md transition-shadow">
                                <div class="text-3xl font-bold text-black mb-2"><?= esc_html($event['date']) ?></div>
                                <div class="text-lg font-semibold text-black mb-2"><?= esc_html($event['month']) ?></div>
                                <h4 class="text-sm font-bold mb-2"><?= esc_html($event['title']) ?></h4>
                                <p class="text-sm opacity-80 mb-1"><?= esc_html($event['time']) ?></p>
                                <p class="text-sm opacity-80"><?= esc_html($event['location']) ?></p>
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    <?php endforeach; ?>
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        <?php endif; ?>
    <?php endforeach; ?>

    <?php if (empty($event_sections['All Events'])) : ?>
        <!-- wp:group {"className":"mb-12"} -->
        <div class="wp-block-group mb-12">
            <!-- wp:paragraph {"className":"text-center text-gray-500"} -->
            <p class="text-center text-gray-500">No upcoming events at this time. Check back soon!</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    <?php endif; ?>
    <!-- /wp:html -->

</div>
<!-- /wp:group -->