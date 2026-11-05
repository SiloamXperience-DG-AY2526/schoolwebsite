<?php

/**
 * Title: Mission, Vision & Values Section
 * Slug: svlti/mission-vision-values
 * Categories: featured
 */

// Same six values as the home page Vision section (patterns/home/vision.php), with a short meaning for each.
$values = [
    'Service-oriented'                => 'We look for ways to help, putting the needs of students, families and our community first.',
    'Integrity'                       => 'We are honest and fair, and we do what we say we will do.',
    "Learner's Posture"               => 'Staff and students alike stay curious, ask questions and keep growing.',
    'Open-Mindedness'                 => 'We welcome new ideas and respect people whose backgrounds and views differ from ours.',
    'Appreciation'                    => 'We notice the efforts of others and say thank you, big and small.',
    'Mindfulness and Mission-focused' => 'We act with care and keep our purpose in view: helping people build better lives.',
];
?>

<!-- wp:group {"className":"flex flex-col w-full gap-12"} -->
<div class="wp-block-group flex flex-col w-full gap-12">

    <!-- wp:group {"className":"flex flex-col gap-3 text-center"} -->
    <div class="wp-block-group flex flex-col gap-3 text-center">
        <!-- wp:heading {"level":1,"className":"text-[36px] xl:text-[48px] 2xl:text-[60px] font-bold text-[#333333]"} -->
        <h1 class="wp-block-heading text-[36px] xl:text-[48px] 2xl:text-[60px] font-bold text-[#333333]">
            Mission, Vision <span class="text-dark-green">&amp; Values</span>
        </h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex flex-wrap items-center gap-12"} -->
    <div class="wp-block-group flex flex-wrap items-center gap-12">
        <!-- wp:group {"className":"flex-1 min-w-[280px]"} -->
        <div class="wp-block-group flex-1 min-w-[280px]">
            <!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand mb-6"} -->
            <h2 class="wp-block-heading text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand mb-6">Our Mission</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-gray-800 mb-4 2xl:text-xl"} -->
            <p class="text-gray-800 mb-4 2xl:text-xl">
                We partner with communities in Cambodia to break the cycle of poverty. Through quality education,
                skills training, and hands-on support, we help people build better lives for themselves and their families.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"text-gray-800 2xl:text-xl"} -->
            <p class="text-gray-800 2xl:text-xl">
                Every person deserves the chance to succeed, no matter how difficult their situation.
                We believe that when individuals grow stronger, entire communities transform.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:image {"sizeSlug":"large","className":"min-w-[280px] md:w-[45%] shadow-lg"} -->
        <figure class="wp-block-image size-large corner-images min-w-[280px] md:w-[45%] shadow-lg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mission-1.png" alt="Students smiling" />
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex flex-wrap items-center gap-12"} -->
    <div class="wp-block-group flex flex-wrap items-center gap-12">
        <!-- wp:image {"sizeSlug":"large","className":"min-w-[280px] md:w-[45%] shadow-lg"} -->
        <figure class="wp-block-image size-large corner-images min-w-[280px] md:w-[45%] shadow-lg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/vision.png" alt="Children at The Learners' Village" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"flex-1 min-w-[280px]"} -->
        <div class="wp-block-group flex-1 min-w-[280px]">
            <!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand mb-6"} -->
            <h2 class="wp-block-heading text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand mb-6">Our Vision</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-gray-800 mb-4 2xl:text-xl"} -->
            <p class="text-gray-800 mb-4 2xl:text-xl">
                We dream of a world where every person can live with dignity, respect, and reach their full potential.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"text-gray-800 2xl:text-xl"} -->
            <p class="text-gray-800 2xl:text-xl">
                We're building an inclusive community at The Learners' Village in rural Cambodia. Here, people learn
                job skills and life skills that help them create better futures for themselves and their families.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"bg-light-blue rounded-2xl p-6 2xl:p-8"} -->
    <div class="wp-block-group bg-light-blue rounded-2xl p-6 2xl:p-8">
        <!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand mb-6 text-center"} -->
        <h2 class="wp-block-heading text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand mb-6 text-center">Our Values</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"} -->
        <div class="wp-block-group grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($values as $value => $meaning) : ?>
                <!-- wp:group {"className":"bg-white rounded-2xl p-6 shadow-md"} -->
                <div class="wp-block-group bg-white rounded-2xl p-6 shadow-md">
                    <h3 class="text-xl font-semibold text-dark-green mb-2"><?php echo esc_html($value); ?></h3>
                    <p class="text-gray-800 2xl:text-xl"><?php echo esc_html($meaning); ?></p>
                </div>
                <!-- /wp:group -->
            <?php endforeach; ?>
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
