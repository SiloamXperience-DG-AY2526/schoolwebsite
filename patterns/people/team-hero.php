<?php
/**
 * Title: Hero - Our People
 * Slug: svlti/team-hero
 */
?>

<!-- wp:group {"className":"py-12 sm:py-16 lg:py-20","layout":{"type":"constrained"}} -->
<div class="wp-block-group py-12 sm:py-16 lg:py-20">
    <!-- wp:group {"className":"max-w-7xl mx-auto px-4 sm:px-6","layout":{"type":"constrained"}} -->
    <div class="wp-block-group max-w-7xl mx-auto px-4 sm:px-6">
        <!-- wp:group {"className":"grid lg:grid-cols-2 gap-8 lg:gap-20 items-center","layout":{"type":"constrained"}} -->
        <div class="wp-block-group grid lg:grid-cols-2 gap-8 lg:gap-20 items-center">

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"level":1,"className":"text-3xl sm:text-4xl lg:text-header-xxl bg-gradient-to-b from-eucalyptus-110 to-elm-100 bg-clip-text mb-4 text-transparent leading-tight"} -->
                <h1 class="wp-block-heading text-3xl sm:text-4xl 2xl:text-7xl lg:text-header-xxl bg-gradient-to-b from-eucalyptus-110 to-elm-100 bg-clip-text mb-4 text-transparent leading-tight">
                    Our People,<br>
                    <span class="relative inline-block bg-gradient-to-b from-eucalyptus-110 to-elm-100 bg-clip-text text-transparent">
                        Our Heart
                        <!-- wp:image {"sizeSlug":"full","className":"absolute -top-4 left-3/4 -translate-x-1/2 w-24 sm:w-32 lg:w-[159px] h-auto"} -->
                        <figure class="wp-block-image size-full absolute -top-4 left-3/4 -translate-x-1/2 w-24 sm:w-32 lg:w-[159px] 2xl:w-[180px] h-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/abstract/circle.png" alt="circle" />
                        </figure>
                        <!-- /wp:image -->

                    </span>
                </h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"text-neutral-700 text-base sm:text-lg mb-6 sm:mb-8 leading-relaxed"} -->
                <p class="text-neutral-700 text-base sm:text-lg mb-6 sm:mb-8 2xl:text-2xl leading-relaxed">
                    Meet the volunteers, mentors, and friends who bring our school's spirit to life.
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"join-button"} -->
                    <div class="wp-block-button join-button cursor-pointer 2xl:text-xl">
                        <a href="/projects" class="wp-block-button__link">
                            Join us
                        </a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

            </div>
            <!-- /wp:group -->

            <!-- wp:image {"sizeSlug":"full","className":"pl-10 w-full h-full object-cover"} -->
            <figure class="wp-block-image size-full pl-10 w-full h-full 2xl:w-[150%] object-cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/group.png" alt="Group" />
            </figure>
            <!-- /wp:image -->


        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->