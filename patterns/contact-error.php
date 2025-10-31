<?php

/**
 * Title: Contact Error Message
 * Slug: svlti/contactError
 * Categories: featured
 */
?>

<!-- wp:group {"className":"flex items-center justify-center px-6 py-12","layout":{"type":"constrained"}} -->
<div class="wp-block-group flex items-center justify-center px-6 py-12">

    <!-- wp:group {"className":"text-center max-w-2xl","layout":{"type":"constrained"}} -->
    <div class="wp-block-group text-center max-w-2xl">

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            
            <!-- wp:image {"sizeSlug":"full","className":"mx-auto mb-8 w-24 h-24 object-contain drop-shadow-lg"} -->
            <figure class="wp-block-image size-full mx-auto mb-8 w-24 h-24 object-contain drop-shadow-lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/abstract/cross.png" alt="Cross" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":2,"className":"text-header-lg text-black mb-6"} -->
            <h2 class="wp-block-heading text-header-lg text-black mb-6">Submission unsuccessful.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-paragraph-lg"} -->
            <p class="text-paragraph-lg">
                We were unable to process your submission at this time. Please check your details and try again.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"text-paragraph-lg mt-5"} -->
            <p class="text-paragraph-lg mt-5">
                If the issue persists, contact our team for assistance at siloamcambodia@gmail.com
            </p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex"}} -->
        <div class="wp-block-buttons justify-center mt-10">
            <!-- wp:button {"className":"text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]"} -->
            <div class="wp-block-button error-button text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]">
                <a class="wp-block-button__link wp-element-button">Try again</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->