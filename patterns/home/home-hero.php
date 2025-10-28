<?php
/**
 * Title: Hero Section
 * Slug: svlti/home-hero
 */
?>

<!-- wp:group {"className":"hero-section flex flex-col items-center justify-center min-h-screen text-center px-5 pt-20","layout":{"type":"constrained"}} -->
<div class="wp-block-group hero-section flex flex-col items-center justify-center min-h-screen text-center px-5 pt-20">
  <!-- wp:heading {"textAlign":"center","level":1,"className":"text-4xl md:text-5xl font-bold text-accent mb-4"} -->
  <h1 class="wp-block-heading has-text-align-center text-4xl md:text-5xl font-bold text-accent mb-4 leading-tight">
    Shaping Tomorrow’s<br>

    <span class="relative inline-block align-bottom mt-3">
      Leaders

      <!-- wp:image {"sizeSlug":"full","className":"absolute left-1/2 -translate-x-1/2 pointer-events-none select-none max-w-full"} -->
      <figure class="wp-block-image size-full absolute left-1/2 -translate-x-1/2 pointer-events-none select-none max-w-full">
        <img src="http://localhost/mywordpress/wp-content/themes/svlti-theme-v1/assets/images/home/underline.png" alt="underline" />
      </figure>
      <!-- /wp:image -->

    </span>
  </h1>
  <!-- /wp:heading -->


  <!-- wp:paragraph {"align":"center","className":"text-brand max-w-2xl mx-auto text-lg mb-8"} -->
  <p class="has-text-align-center text-brand max-w-2xl mx-auto text-lg mb-8">
      Learn more about the Siloam Vocational &amp; Life Skills Training Institute,
      where excellence in education shapes well-rounded global citizens.
    </p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons">
  <!-- wp:button {"className":"text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]"} -->
  <div class="wp-block-button hero-button text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]">
    <a class="wp-block-button__link wp-element-button"> Learn more </a>
  </div>
  <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->

  <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
  <figure class="wp-block-image size-large is-style-default">
  <img 
    src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero.png" 
    alt="SVLTI Students"
  />
  </figure>
  <!-- /wp:image -->
</div>
<!-- /wp:group -->