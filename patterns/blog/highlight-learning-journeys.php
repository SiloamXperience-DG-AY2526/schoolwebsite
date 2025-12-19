<?php

/**
 * Title: Highlight Student Projects Page
 * Slug: svlti/highlightLearningJourneys
 * Categories: page
 */
?>


<!-- wp:group {"className":"relative w-full","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group relative flex flex-col w-full">

    <!-- wp:heading {"level":1,"className":"text-header-xxxl font-bold text-eucalyptus-110 mb-8 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"} -->
    <h1 class="wp-block-heading text-header-xxxl font-bold text-eucalyptus-110 mb-8 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
        Highlights of Student Projects
    </h1>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"w-full pt-8"} -->
    <div class="wp-block-group w-full pt-8">
        <!-- wp:pattern {"slug":"svlti/highlight-buttons"} /-->
    </div>
    <!-- /wp:group -->


    <!-- wp:group {"className":"bg-white w-full rounded-xl flex"} -->
    <div class="wp-block-group bg-white w-full rounded-xl flex justify-between">

        <!-- wp:group {"className":"p-12 flex items-center"} -->
        <div class="wp-block-group p-12 flex items-center">

            <!-- wp:group {"className":"w-4/5 justify-center"} -->
            <div class="wp-block-group w-4/5 justify-center">

                <!-- wp:heading {"level":2,"className":"text-header-xl text-black mb-8 py-3"} -->
                <h2 class="wp-block-heading text-header-xl 2xl:text-6xl text-black mb-8 py-3">
                    Where Learning Meets the Land at Battambang
                </h2>
                <!-- /wp:heading -->

                <!-- wp:group {"className":"mt-6","layout":{"type":"default"}} -->
                <div class="wp-block-group mt-6">
                    <!-- wp:paragraph {"className":"inline-block px-6 py-1.5 text-xs font-medium text-eucalyptus-120 border border-eucalyptus-120 rounded-3xl"} -->
                    <p class="inline-block px-6 py-1.5 text-xs 2xl:text-xl font-medium text-eucalyptus-120 border border-eucalyptus-120 rounded-3xl">
                        <a href="/blog/highlights/expanded">Learning Journeys</a>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:image {"className":"w-2/3 h-full object-cover rounded-xl"} -->
        <figure class="wp-block-image h-full object-cover rounded-xl">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/farm.png" alt="Farm" />
        </figure>
        <!-- /wp:image -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->