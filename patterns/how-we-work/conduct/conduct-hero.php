<?php

/**
 * Title: Our Conduct Hero Section
 * Slug: svlti/conduct-hero
 */
?>

<!-- wp:group {"className":"relative max-w-7xl min-h-[90vh]","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group relative flex flex-wrap min-h-[90vh] w-full">

    <!-- wp:group {"className":"items-start justify-center h-[75vh] bg-light-blue","layout":{"type":"flex","orientation":"horizontal"}} -->
    <div class="wp-block-group flex flex-col items-start justify-center h-[75vh] bg-light-blue flex-1">

        <!-- wp:group {"className":"md:w-[52%]","layout":{"type":"flex"}} -->
        <div class="wp-block-group flex-col items-start p-12 max-w-3xl">

            <!-- wp:heading {"level":2,"align":"left","className":"text-[56px] font-semibold"} -->
            <h2 class="wp-block-heading text-[34px] 2xl:text-[56px] font-semibold">
                <span class="text-dark-green drop-shadow">Conduct</span> <span class="drop-shadow text-black">&amp;</span> <span class="text-dark-green drop-shadow">Discipline</span>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-gray-800 leading-relaxed"} -->
            <p class="text-gray-800 font-medium text-[18px] 2xl:text-[30px] leading-relaxed">
                Our approach to conduct and discipline is about learning and restoration.
                We encourage everyone to take responsibility for their actions, repair harm, and grow together as a community.
            </p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image {"sizeSlug":"large","className":"shadow-lg z-10"} -->
    <figure class="wp-block-image size-large absolute -top-4 right-4 w-[10rem] lg:w-[18rem] xl:w-[22rem] 2xl:w-[38rem] shadow-lg z-10">
        <img class="w-full h-auto object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/how-we-work/conduct.png" alt="Children in classroom" />
    </figure>
    <!-- /wp:image -->

</div>
<!-- /wp:group -->