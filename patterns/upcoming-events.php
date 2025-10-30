<?php

/**
 * Title: Upcoming Events
 * Slug: svlti/upcoming-events
 */
?>

<div class="wp-block-group flex-1 p-6 md:p-10">

    <h2 class="text-3xl font-bold text-[#2CA585] mb-8">Upcoming Events</h2>
    <!-- dynamic event data -->
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
    //mapping months to numerical for sorting purposes
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

    foreach ($event_sections as $section_title => &$events) {
        foreach ($events as &$e) {
            $ts = strtotime("{$e['date']}-{$months[$e['month']]}-" . date('Y'));
            if ($ts < $today) $ts = strtotime("{$e['date']}-{$months[$e['month']]}-" . (date('Y') + 1));
            $e['timestamp'] = $ts;
        }
        unset($e);

        // sorting date by ascending order to give nearest date
        usort($events, fn($a, $b) => $a['timestamp'] <=> $b['timestamp']);

        // checking which date is closer to today date
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

    <style>
        /* tailwind css had issues so used css directly */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 36px;
        }

        /* responsive */
        @media(min-width: 640px) {
            .events-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(min-width: 1024px) {
            .events-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* easier to edit styling from event-card instead of inline */
        .event-card {
            width: 230px;
            height: 278px;
            padding: 16px 21px;
            gap: 22px;
            border-radius: 12px;
            border: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            justify-content: start;
            transition: all 0.3s ease;
            background-color: #fff;
        }

        .event-card:hover {
            background-color: #7EDDC3 !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        .event-card.closest {
            background-color: #7EDDC3;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 16px;
            padding-bottom: 6px;
            border-bottom: 1px solid #ccc;
        }
    </style>

    <?php foreach ($event_sections as $section_title => $events) : ?>
        <div class="wp-block-group mb-12">
            <h3 class="section-title" style="color: <?= $section_title === 'All Events' ? '#2CA585' : '#207860' ?>">
                <?= esc_html($section_title) ?>
            </h3>

            <div class="events-grid">
                <?php foreach ($events as $event) :
                    $closest_class = $event['closest'] ?? false ? 'closest' : '';
                ?>
                    <div class="event-card <?= $closest_class ?>">
                        <div class="text-3xl font-bold text-black mb-3"><?= esc_html($event['date']) ?></div>
                        <div class="text-lg font-semibold text-black mb-2"><?= esc_html($event['month']) ?></div>
                        <h4 class="text-sm font-bold mb-2"><?= esc_html($event['title']) ?></h4>
                        <p class="text-sm opacity-80 mb-1"><?= esc_html($event['time']) ?></p>
                        <p class="text-sm opacity-80"><?= esc_html($event['location']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>