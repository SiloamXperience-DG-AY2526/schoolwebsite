<?php

/**
 * Title: Life Skills Section
 * Slug: svlti/life-skills
 */

// Life skills courses data
$life_skills = [
    [
        'title' => 'Effective Communication Skills',
        'description' => 'Learn how to express ideas clearly, listen actively, and adapt your communication style to different audiences. This course equips you with tools to improve workplace interactions and strengthen personal relationships.',
        'image' => 'communication.png',
        'image_position' => 'right', // left or right
    ],
    [
        'title' => 'Time Management & Productivity',
        'description' => 'Master practical techniques to prioritize tasks, manage deadlines, and overcome procrastination. This course helps you create a balanced schedule that boosts efficiency without burnout.',
        'image' => 'productivity.png',
        'image_position' => 'left',
    ],
    [
        'title' => 'Emotional Intelligence & Resilience',
        'description' => 'Build awareness of your emotions and learn how to manage stress, empathy, and relationships effectively. This course strengthens your ability to adapt and thrive in both personal and professional settings.',
        'image' => 'resilience.png',
        'image_position' => 'right',
    ],
    [
        'title' => 'Critical Thinking & Problem Solving',
        'description' => 'Develop analytical thinking, decision-making, and creative problem-solving strategies. Through real-world scenarios, you\'ll learn to evaluate situations, identify solutions, and take confident action.',
        'image' => 'critical-thinking.png',
        'image_position' => 'left',
    ],
];
?>

<!-- wp:group {"className":"w-full","layout":{"type":"constrained"}} -->
<div class="wp-block-group flex flex-col w-full gap-6">


    <?php foreach ($life_skills as $skill): ?>

        <?php if ($skill['image_position'] === 'right'): ?>
            <!-- Image on Right Layout -->
            <!-- wp:group {"className":"policies-row flex flex-col md:flex-row items-center flex-nowrap gap-12 max-w-6xl 2xl:max-w-7xl mx-auto","layout":{"type":"flex","orientation":"horizontal"}} -->
            <div class="wp-block-group policies-row flex flex-col md:flex-row items-center flex-nowrap gap-12 max-w-6xl 2xl:max-w-7xl mx-auto">

                <!-- wp:group {"className":"flex flex-col md:w-1/2 gap-3","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group flex flex-col md:w-1/2 gap-3">

                    <!-- wp:heading {"level":2,"className":"text-2xl md:text-3xl 2xl:text-4xl font-semibold"} -->
                    <h2 class="wp-block-heading text-2xl md:text-3xl 2xl:text-4xl font-semibold">
                        <?php echo esc_html($skill['title']); ?>
                    </h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"text-gray-800 leading-relaxed 2xl:text-lg"} -->
                    <p class="text-gray-800 leading-relaxed 2xl:text-lg">
                        <?php echo esc_html($skill['description']); ?>
                    </p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
                <!-- wp:group {"className":"relative","layout":{"type":"constrained"}} -->
                <div class="wp-block-group relative">

                    <!-- wp:html -->
                    <div class="wp-html absolute -left-5 top-8 w-[95%] h-[95%] bg-[#36A7C9] z-10"></div>
                    <!-- /wp:html -->

                    <!-- wp:image {"sizeSlug":"large","className":"relative overflow-hidden shadow-md h-auto w-full z-20"} -->
                    <figure class="wp-block-image size-large relative corner-images overflow-hidden shadow-md h-auto w-full z-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/courses/<?php echo esc_attr($skill['image']); ?>" alt="<?php echo esc_attr($skill['title']); ?>" />
                    </figure>
                    <!-- /wp:image -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        <?php else: ?>
            <!-- Image on Left Layout -->
            <!-- wp:group {"className":"policies-row flex flex-col md:flex-row items-center flex-nowrap gap-12 max-w-6xl 2xl:max-w-7xl mx-auto","layout":{"type":"flex","orientation":"horizontal"}} -->
            <div class="wp-block-group policies-row flex flex-col md:flex-row items-center flex-nowrap gap-12 max-w-6xl 2xl:max-w-7xl mx-auto">


                <!-- wp:group {"className":"relative","layout":{"type":"constrained"}} -->
                <div class="wp-block-group relative">

                    <!-- wp:html -->
                    <div class="wp-html absolute -right-5 top-8 w-[95%] h-[95%] bg-[#A6DCCB] z-10"></div>
                    <!-- /wp:html -->

                    <!-- wp:image {"sizeSlug":"large","className":"relative overflow-hidden shadow-md h-auto w-full z-20"} -->
                    <figure class="wp-block-image size-large relative corner-images overflow-hidden shadow-md h-auto w-full z-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/courses/<?php echo esc_attr($skill['image']); ?>" alt="<?php echo esc_attr($skill['title']); ?>" />
                    </figure>
                    <!-- /wp:image -->

                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"flex flex-col md:w-1/2 gap-3","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group flex flex-col md:w-1/2 gap-3">

                    <!-- wp:heading {"level":2,"className":"text-2xl md:text-3xl 2xl:text-4xl font-semibold"} -->
                    <h2 class="wp-block-heading text-2xl md:text-3xl 2xl:text-4xl font-semibold">
                        <?php echo esc_html($skill['title']); ?>
                    </h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"text-gray-800 leading-relaxed 2xl:text-lg"} -->
                    <p class="text-gray-800 leading-relaxed 2xl:text-lg">
                        <?php echo esc_html($skill['description']); ?>
                    </p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        <?php endif; ?>

    <?php endforeach; ?>

</div>
<!-- /wp:group -->