<?php

/**
 * Title: Upcoming Events
 * Slug: svlti/upcoming-events
 * Description: Dynamically displays upcoming events, grouped by category.
 * Categories: featured, events
 */
?>

<!-- wp:group {"className":"p-6 md:p-10"} -->
<div class="wp-block-group p-6 md:p-10">

    <!-- wp:heading {"level":2,"className":"upcoming-events-title"} -->
    <h2 class="upcoming-events-title">Upcoming Events</h2>
    <!-- /wp:heading -->

    <?php
    $event_sections = [
        'All Events' => [
            ['date' => 12, 'month' => 'December', 'title' => 'Khmer Heritage Week', 'time' => '09:00 AM – 11:00 AM', 'location' => 'School Auditorium'],
            ['date' => 25, 'month' => 'November', 'title' => 'Angkor Art Exhibition', 'time' => '12:00 PM – 1:30 PM', 'location' => 'Art Room'],
            ['date' => 7, 'month' => 'April', 'title' => 'Annual Sports Carnival', 'time' => '07:30 AM – 10:30 AM', 'location' => 'Sports Field'],
            ['date' => 15, 'month' => 'April', 'title' => 'Student Charity Bazaar', 'time' => '1:00 PM – 5:00 PM', 'location' => 'School Courtyard'],
        ],
        'For Students' => [
            ['date' => 12, 'month' => 'July', 'title' => 'Khmer Heritage Week', 'time' => '09:00 AM – 11:00 AM', 'location' => 'School Auditorium'],
            ['date' => 25, 'month' => 'March', 'title' => 'Angkor Art Exhibition', 'time' => '12:00 PM – 1:30 PM', 'location' => 'Art Room'],
            ['date' => 7, 'month' => 'April', 'title' => 'Annual Sports Carnival', 'time' => '07:30 AM – 10:30 AM', 'location' => 'Sports Field'],
            ['date' => 15, 'month' => 'April', 'title' => 'Student Charity Bazaar', 'time' => '1:00 PM – 5:00 PM', 'location' => 'School Courtyard'],
        ],
        'For Parents' => [
            ['date' => 27, 'month' => 'April', 'title' => 'Parent Welcome Coffee', 'time' => '09:00 AM – 11:00 AM', 'location' => 'School Hall'],
            ['date' => 5, 'month' => 'May', 'title' => 'Digital Safety for Families', 'time' => '2:00 PM – 3:30 PM', 'location' => 'ICT Lab'],
            ['date' => 30, 'month' => 'June', 'title' => 'Mental Wellbeing Talk', 'time' => '08:30 AM – 9:30 AM', 'location' => 'School Auditorium'],
            ['date' => 15, 'month' => 'July', 'title' => 'Family Volunteer Day', 'time' => '9:00 AM – 1:00 PM', 'location' => 'School Grounds'],
        ],
    ];

    $months = [
        'January' => 1,
        'February' => 2,
        'March' => 3,
        'April' => 4,
        'May' => 5,
        'June' => 6,
        'July' => 7,
        'August' => 8,
        'September' => 9,
        'October' => 10,
        'November' => 11,
        'December' => 12
    ];

    $today = time();

    // Sort and find nearest date
    foreach ($event_sections as $section_title => &$events) {
        foreach ($events as &$e) {
            $ts = strtotime("{$e['date']}-{$months[$e['month']]}-" . date('Y'));
            if ($ts < $today) $ts = strtotime("{$e['date']}-{$months[$e['month']]}-" . (date('Y') + 1));
            $e['timestamp'] = $ts;
        }
        unset($e);

        usort($events, fn($a, $b) => $a['timestamp'] <=> $b['timestamp']);

        $closest_idx = null;
        $min_diff = PHP_INT_MAX;
        foreach ($events as $idx => $ev) {
            $diff = $ev['timestamp'] - $today;
            if ($diff >= 0 && $diff < $min_diff) {
                $min_diff = $diff;
                $closest_idx = $idx;
            }
        }
        if ($closest_idx !== null) $events[$closest_idx]['closest'] = true;
    }
    unset($events);
    ?>

    <!-- wp:html -->
    <?php foreach ($event_sections as $section_title => $events) : ?>
        <div class="wp-block-group mb-12">
            <h3 class="mb-6 section-title" style="color: <?= $section_title === 'All Events' ? '#2CA585' : '#207860' ?>">
                <?= esc_html($section_title) ?>
            </h3>

            <div class="events-grid grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($events as $event) :
                    $closest_class = !empty($event['closest']) ? 'closest' : '';
                ?>
                    <div class="wp-block-column">
                        <div class="event-card <?= esc_attr($closest_class) ?> p-4 rounded-lg shadow-sm border border-gray-100 bg-white hover:shadow-md transition-shadow">
                            <div class="text-3xl font-bold text-black mb-2"><?= esc_html($event['date']) ?></div>
                            <div class="text-lg font-semibold text-black mb-2"><?= esc_html($event['month']) ?></div>
                            <h4 class="text-sm font-bold mb-2"><?= esc_html($event['title']) ?></h4>
                            <p class="text-sm opacity-80 mb-1"><?= esc_html($event['time']) ?></p>
                            <p class="text-sm opacity-80"><?= esc_html($event['location']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- /wp:html -->


</div>
<!-- /wp:group -->