<?php

/**
 * Title: Our Story Section
 * Slug: svlti/our-story
 * Categories: featured
 */
?>

<!-- wp:group {"className":"flex flex-col w-full gap-12"} -->
<div class="wp-block-group flex flex-col w-full gap-12">

    <!-- wp:group {"className":"bg-light-blue rounded-2xl p-12"} -->
    <div class="wp-block-group bg-light-blue rounded-2xl p-12">
        <!-- wp:heading {"level":1,"className":"text-[36px] xl:text-[48px] 2xl:text-[60px] font-bold text-dark-green mb-6"} -->
        <h1 class="wp-block-heading text-[36px] xl:text-[48px] 2xl:text-[60px] font-bold text-dark-green mb-6">Our Story</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"text-gray-800 max-w-3xl 2xl:text-xl"} -->
        <p class="text-gray-800 max-w-3xl 2xl:text-xl">
            [Placeholder] A short introduction to how Siloam Vocational and Life Training Institute began,
            who it serves and why. Final copy to come from SVLTI.
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex flex-wrap items-center gap-12"} -->
    <div class="wp-block-group flex flex-wrap items-center gap-12">

        <!-- wp:group {"className":"flex-1 min-w-[280px]"} -->
        <div class="wp-block-group flex-1 min-w-[280px]">
            <!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand mb-6"} -->
            <h2 class="wp-block-heading text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand mb-6">How It Started</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-gray-800 mb-4 2xl:text-xl"} -->
            <p class="text-gray-800 mb-4 2xl:text-xl">
                [Placeholder] The founding story: the need the founders saw in rural Cambodia, the first
                students, and the first classes.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"text-gray-800 2xl:text-xl"} -->
            <p class="text-gray-800 2xl:text-xl">
                [Placeholder] How the institute grew into The Learners' Village, and who it serves today.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"relative min-w-[280px] md:w-[45%]"} -->
        <div class="wp-block-group relative min-w-[280px] md:w-[45%]">
            <!-- wp:html -->
            <div class="wp-html absolute -left-5 top-8 w-[95%] h-[95%] bg-[#A6DCCB] z-10"></div>
            <!-- /wp:html -->

            <!-- wp:image {"sizeSlug":"large","className":"relative overflow-hidden shadow-md h-auto w-full z-20"} -->
            <figure class="wp-block-image size-large relative corner-images overflow-hidden shadow-md h-auto w-full z-20">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/history-1.png" alt="Students learning computers" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex flex-col gap-3 text-center"} -->
    <div id="milestones" class="wp-block-group flex flex-col gap-3 text-center">
        <!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand"} -->
        <h2 class="wp-block-heading text-3xl md:text-4xl 2xl:text-5xl font-bold text-brand">Our Journey</h2>
        <!-- /wp:heading -->
        <!-- Milestone timeline pattern (Theo) goes here once it is merged. -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
