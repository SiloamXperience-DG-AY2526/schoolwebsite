<?php
/**
 * Title: Volunteer Project Listing
 * Slug: svlti/volunteer-project-listing
 * Categories: featured
 */
?>

<!-- Projects Grid -->
    <!-- wp:group {"className":"grid grid-cols-1 md:grid-cols-3 gap-6 mb-12","layout":{"type":"constrained"}} -->
    <div class="wp-block-group grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      
      <!-- Project Card 1 -->
      <!-- wp:group {"className":"bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col","layout":{"type":"constrained"}} -->
      <div class="wp-block-group bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
        
        <!-- wp:image {"sizeSlug":"large","className":"w-full h-64 object-cover"} -->
        <figure class="wp-block-image size-large w-full h-64 object-cover">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/listing/students.png" alt="Back to School Drive" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"p-6 flex-1 flex flex-col","layout":{"type":"constrained"}} -->
        <div class="wp-block-group p-6 flex-1 flex flex-col">
          
          <!-- wp:heading {"level":3,"className":"text-header-sm mb-4"} -->
          <h3 class="wp-block-heading text-header-sm mb-4">Back to School Drive</h3>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"className":"text-neutral-120 text-paragraph-normal mb-4 flex-1 leading-relaxed"} -->
          <p class="text-neutral-120 text-paragraph-normal mb-4 flex-1 leading-relaxed">
            Help every child start school ready to learn. Donate now to provide bags, stationery, and uniforms.
          </p>
          <!-- /wp:paragraph -->

          <!-- wp:html -->
          <span class="inline-block px-4 py-1 rounded-full bg-eucalyptus-70 text-neutral-100 text-paragraph-xsm mb-6 self-start">
            Fundraising
          </span>
          <!-- /wp:html -->

          <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"flex-end"}} -->
          <div class="wp-block-buttons flex justify-end">
            <!-- wp:button {"className":"w-1/2 py-3 rounded-lg bg-elm-70 text-white text-button-normal"} -->
            <div class="wp-block-button w-1/2">
              <a class="wp-block-button__link bg-elm-70 text-white text-button-normal rounded-lg py-3 block text-center hover:bg-elm-80 transition-colors">
                I'm interested
              </a>
            </div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

      </div>
      <!-- /wp:group -->

      <!-- Project Card 2 (repeat structure) -->
      <!-- wp:group {"className":"bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col","layout":{"type":"constrained"}} -->
      <div class="wp-block-group bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
        
        <!-- wp:image {"sizeSlug":"large","className":"w-full h-64 object-cover"} -->
        <figure class="wp-block-image size-large w-full h-64 object-cover">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/listing/kids.png" alt="Mentoring Program" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"p-6 flex-1 flex flex-col","layout":{"type":"constrained"}} -->
        <div class="wp-block-group p-6 flex-1 flex flex-col">
          
          <!-- wp:heading {"level":3,"className":"text-header-sm mb-4"} -->
          <h3 class="wp-block-heading text-header-sm mb-4">Mentoring Program</h3>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"className":"text-neutral-120 text-paragraph-normal mb-4 flex-1 leading-relaxed"} -->
          <p class="text-neutral-120 text-paragraph-normal mb-4 flex-1 leading-relaxed">
            Guide and inspire students through personalized mentorship and support for academic and personal growth.
          </p>
          <!-- /wp:paragraph -->

          <!-- wp:html -->
          <span class="inline-block px-4 py-1 rounded-full bg-eucalyptus-70 text-neutral-100 text-paragraph-xsm mb-6 self-start">
            Mentoring
          </span>
          <!-- /wp:html -->

          <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"flex-end"}} -->
          <div class="wp-block-buttons flex justify-end">
            <!-- wp:button {"className":"w-1/2 py-3 rounded-lg bg-elm-70 text-white text-button-normal"} -->
            <div class="wp-block-button w-1/2">
              <a class="wp-block-button__link bg-elm-70 text-white text-button-normal rounded-lg py-3 block text-center hover:bg-elm-80 transition-colors">
                I'm interested
              </a>
            </div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

      </div>
      <!-- /wp:group -->

      <!-- Project Card 3 (repeat structure) -->
      <!-- wp:group {"className":"bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col","layout":{"type":"constrained"}} -->
      <div class="wp-block-group bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
        
        <!-- wp:image {"sizeSlug":"large","className":"w-full h-64 object-cover"} -->
        <figure class="wp-block-image size-large w-full h-64 object-cover">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/listing/kids-2.png" alt="Admin Support" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"p-6 flex-1 flex flex-col","layout":{"type":"constrained"}} -->
        <div class="wp-block-group p-6 flex-1 flex flex-col">
          
          <!-- wp:heading {"level":3,"className":"text-header-sm mb-4"} -->
          <h3 class="wp-block-heading text-header-sm mb-4">Admin Support</h3>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"className":"text-neutral-120 text-paragraph-normal mb-4 flex-1 leading-relaxed"} -->
          <p class="text-neutral-120 text-paragraph-normal mb-4 flex-1 leading-relaxed">
            Help us organize events, manage communications, and support our operations to run smoothly.
          </p>
          <!-- /wp:paragraph -->

          <!-- wp:html -->
          <span class="inline-block px-4 py-1 rounded-full bg-eucalyptus-70 text-neutral-100 text-paragraph-xsm mb-6 self-start">
            Admin
          </span>
          <!-- /wp:html -->

          <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"flex-end"}} -->
          <div class="wp-block-buttons flex justify-end">
            <!-- wp:button {"className":"w-1/2 py-3 rounded-lg bg-elm-70 text-white text-button-normal"} -->
            <div class="wp-block-button w-1/2">
              <a class="wp-block-button__link bg-elm-70 text-white text-button-normal rounded-lg py-3 block text-center hover:bg-elm-80 transition-colors">
                I'm interested
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