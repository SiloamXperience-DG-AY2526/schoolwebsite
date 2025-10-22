<?php

/**
 * Title: Join Us Detail Card
 * Slug: svlti/join-us
 * Categories: featured
 */
?>

<!-- wp:group {"className":"max-w-7xl mx-auto px-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group max-w-7xl mx-auto px-6">

    <!-- Project Detail Card -->
    <!-- wp:group {"className":"bg-white rounded-2xl shadow-2xl p-8 relative","layout":{"type":"constrained"}} -->
    <div class="wp-block-group bg-white rounded-2xl shadow-2xl p-8 relative">

        <!-- Close Button -->
        <!-- wp:html -->
        <button class="absolute top-6 right-6 z-10 text-gray-400 hover:text-gray-600 transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <!-- /wp:html -->

        <!-- wp:group {"className":"grid grid-cols-2 gap-8","layout":{"type":"constrained"}} -->
        <div class="wp-block-group grid grid-cols-2 gap-8">

            <!-- Left Column - Text Content -->
            <!-- wp:group {"className":"space-y-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group space-y-6">

                <!-- wp:heading {"level":2,"className":"text-header-sm text-black"} -->
                <h2 class="wp-block-heading text-header-sm text-black">Project 'Teach & Empower'</h2>
                <!-- /wp:heading -->

                <!-- About the opportunity -->
                <!-- wp:group {"className":"space-y-2","layout":{"type":"constrained"}} -->
                <div class="wp-block-group space-y-2">
                    <!-- wp:heading {"level":3,"className":"text-paragraph-normal text-elm-120 mb-2"} -->
                    <h3 class="wp-block-heading text-paragraph-normal text-elm-120 mb-2">About the opportunity</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"text-paragraph-normal text-neutral-120"} -->
                    <p class="text-paragraph-normal text-neutral-120">
                        We are looking for volunteers to teach, interpret and/or co-ordinate our programmes.
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- Task 1 -->
                <!-- wp:group {"className":"space-y-2","layout":{"type":"constrained"}} -->
                <div class="wp-block-group space-y-2">
                    <!-- wp:heading {"level":3,"className":"text-elm-120 text-paragraph-normal mb-2"} -->
                    <h3 class="wp-block-heading text-elm-120 text-paragraph-normal mb-2">Tasks</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"text-neutral-120 text-paragraph-sm"} -->
                    <p class="text-neutral-120 text-paragraph-sm">Teach English and basic computer skills to students of all ages</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- Task 2 -->
                <!-- wp:group {"className":"space-y-2","layout":{"type":"constrained"}} -->
                <div class="wp-block-group space-y-2">
                    <!-- wp:heading {"level":3,"className":"text-elm-120 text-paragraph-normal mb-2"} -->
                    <h3 class="wp-block-heading text-elm-120 text-paragraph-normal mb-2">Requirements</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"text-neutral-120 text-paragraph-sm"} -->
                    <p class="text-neutral-120 text-paragraph-sm">Basic English proficiency and patience with learners</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- Task 3 -->
                <!-- wp:group {"className":"space-y-2","layout":{"type":"constrained"}} -->
                <div class="wp-block-group space-y-2">
                    <!-- wp:heading {"level":3,"className":"text-elm-120 text-paragraph-normal mb-2"} -->
                    <h3 class="wp-block-heading text-elm-120 text-paragraph-normal mb-2">Time Commitment</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"text-neutral-120 text-paragraph-sm"} -->
                    <p class="text-neutral-120 text-paragraph-sm">2-4 hours per week, flexible scheduling available</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- Tags -->
                <!-- wp:html -->
                <div class="flex gap-3 pt-4">
                    <span class="px-4 py-2 rounded-full bg-eucalyptus-70 text-neutral-100 text-paragraph-xsm">Teaching</span>
                    <span class="px-4 py-2 rounded-full bg-eucalyptus-70 text-neutral-100 text-paragraph-xsm">Admin</span>
                </div>
                <!-- /wp:html -->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"flex flex-col","layout":{"type":"constrained"}} -->
            <div class="wp-block-group flex flex-col">

                <!-- wp:image {"sizeSlug":"large","className":"w-full h-96 overflow-hidden rounded-2xl mb-6"} -->
                <figure class="wp-block-image size-large w-full h-96 overflow-hidden rounded-2xl mb-6">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/listing/students.png"
                        alt="Volunteer teaching students"
                        class="w-full h-full object-cover" />
                </figure>
                <!-- /wp:image -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"flex-end"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"ml-auto px-6 py-2 bg-gradient-to-r from-eucalyptus-100 to-elm-100 text-white text-button-normal rounded-lg shadow-md"} -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link ml-auto px-6 py-2 bg-gradient-to-r from-eucalyptus-100 to-elm-100 text-white text-button-normal rounded-lg shadow-md hover:opacity-90 transition">
                            I want to volunteer
                        </a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

            </div>

            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->