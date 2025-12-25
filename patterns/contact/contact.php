<?php

/**
 * Title: Contact Us Page
 * Slug: svlti/contact
 * Categories: page
 */
?>

<!-- wp:group {"className":"bg-gradient-to-b from-white to-elm-60 min-h-screen font-sans","layout":{"type":"constrained"}} -->
<div class="wp-block-group bg-gradient-to-b from-white to-elm-60 min-h-screen font-sans">

    <!-- wp:group {"className":"max-w-screen mx-auto pl-8 pr-16 py-12","layout":{"type":"constrained"}} -->
    <div class="wp-block-group max-w-screen mx-auto pl-8 pr-16 py-12">

        <!-- wp:columns {"className":"flex gap-12"} -->
        <div class="wp-block-columns flex gap-12">

        <!-- wp:template-part {"slug":"side-menu-contact"} /-->


            <!-- wp:column {"className":"flex-1"} -->
            <div class="wp-block-column flex-1">


                <!-- wp:heading {"level":2,"className":"text-header-xxl text-eucalyptus-100 mb-6"} -->
                <h2 class="wp-block-heading text-header-xxl text-eucalyptus-100 mb-6">Contact Us</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"text-neutral-120 text-paragraph-lg mb-8 max-w-3xl"} -->
                <p class="text-neutral-120 text-paragraph-lg mb-8 max-w-3xl">
                    We'd love to hear from you! Whether you're a parent, student, partner, or volunteer, please use the form below and our team will get back to you within 2–3 business days.
                </p>
                <!-- /wp:paragraph -->
                <?php echo do_shortcode('[wpforms id="13" title="false" description="false"]'); ?>
                

            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->