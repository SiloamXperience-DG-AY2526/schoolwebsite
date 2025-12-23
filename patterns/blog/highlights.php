<?php

/**
 * Title: Blog Highlights Page
 * Slug: svlti/blog-highlights
 * Categories: page
 */

// Blog posts data
$blog_posts = [
    [
        'title' => 'The Heart Behind Cherish & Nourish',
        'category' => 'Community Service',
        'image' => 'cherish.png',
        'type' => 'vertical',
        'span' => 'col-span-1',
    ],
    [
        'title' => 'From Learners to Leaders: Youth Health Ambassadors',
        'category' => 'Community Service',
        'image' => 'speaker.png',
        'type' => 'horizontal',
        'span' => 'lg:col-span-2',
    ],
    [
        'title' => 'When Teamwork Meets Technology with the Rover Team',
        'category' => 'Student Projects',
        'image' => 'build.png',
        'type' => 'horizontal',
        'span' => 'lg:col-span-2',
    ],
    [
        'title' => "Caring for Cambodia's Children and Elderly with Health Hygiene Wellness",
        'category' => 'Community Service',
        'image' => 'teach.png',
        'type' => 'tall',
        'span' => 'lg:row-span-2',
    ],
    [
        'title' => 'Empowering Teachers in Phnom Penh',
        'category' => 'Reflections',
        'image' => 'group.png',
        'type' => 'vertical',
        'span' => 'col-span-1',
    ],
    [
        'title' => 'Where Learning Meets the Land at Battambang',
        'category' => 'Learning Journeys',
        'image' => 'farm.png',
        'type' => 'vertical',
        'span' => 'col-span-1',
    ],
];
?>

<!-- wp:group {"className":"min-h-screen bg-gradient-to-b from-white to-elm-60","layout":{"type":"constrained"}} -->
<div class="wp-block-group min-h-screen bg-gradient-to-b from-white to-elm-60">

    <!-- wp:group {"className":"flex gap-6 py-8 mx-auto","layout":{"type":"constrained"}} -->
    <div class="wp-block-group flex gap-6 py-8 max-w-[90vw] mx-auto">

        <!-- wp:columns {"className":"flex gap-6"} -->
        <div class="wp-block-columns flex gap-6">

            <!-- wp:template-part {"slug":"side-menu-blog"} /-->

            <div class="wp-block-group min-h-screen bg-gradient-to-b from-white to-elm-60">

                <div class=" mx-auto px-4 ">

                    <!-- wp:heading {"level":1,"className":"text-[64px] font-bold text-eucalyptus-110 mb-8 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"} -->
                    <h1 class="wp-block-heading text-[64px] font-bold text-eucalyptus-110 mb-8 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
                        Highlights of Student Projects
                    </h1>
                    <!-- /wp:heading -->

                    <!-- wp:pattern {"slug":"svlti/highlight-buttons"} /-->

                    <!-- wp:group {"className":"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 auto-rows-auto","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 auto-rows-auto">

                        <?php foreach ($blog_posts as $post): ?>
                            <?php if ($post['type'] === 'vertical'): ?>
                                <!-- wp:group {"className":"bg-white rounded-[10px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] overflow-hidden flex flex-col h-full <?php echo $post['span']; ?>","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group bg-white rounded-[10px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] flex flex-col justify-evenly h-full <?php echo esc_attr($post['span']); ?>">

                                    <!-- wp:image {"sizeSlug":"large","className":"w-full h-64 overflow-hidden flex-shrink-0"} -->
                                    <figure class="wp-block-image size-large w-full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/<?php echo esc_attr($post['image']); ?>" alt="<?php echo esc_attr($post['title']); ?>" />
                                    </figure>
                                    <!-- /wp:image -->

                                    <!-- wp:group {"className":"p-3 -mt-16 flex flex-col justify-between flex-1","layout":{"type":"default"}} -->
                                    <div class="wp-block-group p-3 flex flex-col justify-center flex-1">

                                        <!-- wp:heading {"level":2,"className":"text-header-lg text-black leading-tight line-clamp-7"} -->
                                        <h2 class="wp-block-heading text-header-lg text-black 2xl:text-5xl leading-tight">
                                            <?php echo esc_html($post['title']); ?>
                                        </h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:group {"className":"mt-6","layout":{"type":"default"}} -->
                                        <div class="wp-block-group mt-6">
                                            <!-- wp:paragraph {"className":"inline-block px-6 py-1.5 text-xs font-medium text-eucalyptus-120 border border-eucalyptus-120 rounded-3xl"} -->
                                            <p class="inline-block px-6 py-1.5 2xl:text-lg text-xs font-medium text-eucalyptus-120 border border-eucalyptus-120 rounded-3xl">
                                                <a href="/blog/highlights/expanded"><?php echo esc_html($post['category']); ?></a>
                                            </p>
                                            <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->

                                    </div>
                                    <!-- /wp:group -->

                                </div>
                                <!-- /wp:group -->

                            <?php elseif ($post['type'] === 'horizontal'): ?>

                                <!-- wp:group {"className":"bg-white rounded-[10px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] overflow-hidden <?php echo $post['span']; ?> flex flex-col md:flex-row","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group bg-white rounded-[10px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] overflow-hidden <?php echo esc_attr($post['span']); ?> flex flex-col md:flex-row">

                                    <!-- wp:image {"className":"w-full md:w-1/2 h-64 md:h-auto object-cover"} -->
                                    <figure class="wp-block-image w-full md:w-1/2 h-64 md:h-auto object-cover">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/<?php echo esc_attr($post['image']); ?>" alt="<?php echo esc_attr($post['title']); ?>" />
                                    </figure>
                                    <!-- /wp:image -->

                                    <!-- wp:group {"className":"flex flex-col justify-center p-6 md:w-1/2","layout":{"type":"default"}} -->
                                    <div class="wp-block-group flex flex-col justify-center p-6 md:w-1/2">

                                        <!-- wp:heading {"level":2,"className":"text-header-lg text-black leading-tight"} -->
                                        <h2 class="wp-block-heading text-header-lg text-black 2xl:text-5xl leading-tight">
                                            <?php echo esc_html($post['title']); ?>
                                        </h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:group {"className":"mt-6","layout":{"type":"default"}} -->
                                        <div class="wp-block-group mt-6">
                                            <!-- wp:paragraph {"className":"inline-block px-6 py-1.5 text-xs font-medium text-eucalyptus-120 border border-eucalyptus-120 rounded-3xl"} -->
                                            <p class="inline-block px-6 py-1.5 2xl:text-lg text-xs font-medium text-eucalyptus-120 border border-eucalyptus-120 rounded-3xl">
                                                <a href="/blog/highlights/expanded"><?php echo esc_html($post['category']); ?></a>
                                            </p>
                                            <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->

                                    </div>
                                    <!-- /wp:group -->

                                </div>
                                <!-- /wp:group -->

                            <?php elseif ($post['type'] === 'tall'): ?>

                                <!-- wp:group {"className":"bg-white rounded-[10px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] overflow-hidden <?php echo $post['span']; ?>","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group bg-white rounded-[10px] shadow-[0_4px_4px_rgba(0,0,0,0.25)] flex flex-col justify-evenly <?php echo esc_attr($post['span']); ?>">

                                    <!-- wp:image {"className":"w-full object-cover rounded-t-[10px] h-[357px]"} -->
                                    <figure class="wp-block-image w-full object-cover rounded-t-[10px]">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/<?php echo esc_attr($post['image']); ?>" alt="<?php echo esc_attr($post['title']); ?>" />
                                    </figure>
                                    <!-- /wp:image -->

                                    <!-- wp:group {"className":"px-8 py-16 flex flex-col justify-between flex-1","layout":{"type":"default"}} -->
                                    <div class="wp-block-group px-8 py-16 flex flex-col justify-between flex-1">

                                        <!-- wp:heading {"level":2,"className":"text-[32px] font-bold text-black leading-tight line-clamp-7"} -->
                                        <h2 class="wp-block-heading text-[32px] font-bold text-black 2xl:text-5xl leading-tight line-clamp-7">
                                            <?php echo esc_html($post['title']); ?>
                                        </h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:group {"className":"mt-6","layout":{"type":"default"}} -->
                                        <div class="wp-block-group mt-6">
                                            <!-- wp:paragraph {"className":"inline-block px-6 py-1.5 text-xs font-medium text-eucalyptus-120 border border-eucalyptus-120 rounded-3xl"} -->
                                            <p class="inline-block px-6 py-1.5 text-xs 2xl:text-lg font-medium text-eucalyptus-120 border border-eucalyptus-120 rounded-3xl">
                                                <a href="/blog/highlights/expanded"><?php echo esc_html($post['category']); ?></a>
                                            </p>
                                            <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->

                                    </div>
                                    <!-- /wp:group -->

                                </div>
                                <!-- /wp:group -->

                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                    <!-- /wp:group -->

                </div>
            </div>
            <!-- /wp:group -->


        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->