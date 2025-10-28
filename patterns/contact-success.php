<?php

/**
 * Title: Contact Success Message
 * Slug: svlti/contactSuccess
 * Categories: featured
 */
?>

<!-- wp:group {"className":"flex items-center justify-center px-6 py-12","layout":{"type":"constrained"}} -->
<div class="wp-block-group flex items-center justify-center px-6 py-12">

    <!-- wp:group {"className":"text-center max-w-2xl","layout":{"type":"constrained"}} -->
    <div class="wp-block-group text-center max-w-2xl">

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">

            <!-- wp:html -->
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/abstract/hour-glass.png"
                alt="Hour Glass"
                class="mx-auto mb-8 w-24 h-24 object-contain drop-shadow-lg">
            <!-- /wp:html -->

            <!-- wp:heading {"level":2,"className":"text-header-lg text-black mb-6"} -->
            <h2 class="wp-block-heading text-header-lg text-black my-6">We got your inquiry.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-paragraph-lg"} -->
            <p class="text-paragraph-lg">
                We've received your message and our team will get back to you shortly if needed. We appreciate you taking the time to contact us.
            </p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex"}} -->
        <div class="wp-block-buttons justify-center mt-10">
            <!-- wp:button {"className":"text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]"} -->
            <div class="wp-block-button hero-button text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]">
                <a class="wp-block-button__link wp-element-button">Back to main page</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->