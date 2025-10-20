<?php
/**
 * Title: History Section
 * Slug: svlti/history
 * Categories: featured
 */
?>

<!-- wp:group {"className":"flex flex-col items-center justify-center px-6 py-24 min-h-screen","layout":{"type":"constrained"}} -->
<div class="wp-block-group flex flex-col items-center justify-center px-6 py-24 min-h-screen">
  <!-- wp:heading {"className":"text-3xl md:text-4xl font-bold text-brand text-center mb-12"} -->
  <h2 class="wp-block-heading text-3xl md:text-4xl font-bold text-brand text-center mb-12">
    Our History
  </h2>
  <!-- /wp:heading -->

  <!-- wp:group {"className":"grid grid-cols-1 md:grid-cols-2 w-fit max-w-6xl gap-4 items-stretch relative min-h-[80vh]","layout":{"type":"constrained"}} -->
  <div class="wp-block-group grid grid-cols-1 md:grid-cols-2 w-fit max-w-6xl gap-4 items-stretch relative min-h-[80vh]">

    <!-- wp:html -->
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-[0.15rem] h-full bg-[#3C8163] opacity-80 z-0 hidden md:block"></div>
    <!-- /wp:html -->

    <!-- wp:group {"className":"flex flex-col justify-start items-start gap-6","layout":{"type":"constrained"}} -->
    <div class="wp-block-group flex flex-col justify-start items-start gap-6">

      <!-- wp:paragraph {"className":"inline-block bg-[#3C8163] text-white text-sm font-semibold px-4 py-1 rounded-full"} -->
      <p class="inline-block bg-[#3C8163] text-white text-sm font-semibold px-4 py-1 rounded-full">
        2025
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"className":"text-gray-700 max-w-sm text-center"} -->
      <p class="text-gray-700 max-w-sm text-center">
        Introduced computer literacy and digital design classes, equipping students with the skills
        needed for future job opportunities.
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:group {"className":"relative","layout":{"type":"constrained"}} -->
      <div class="wp-block-group relative">

        <!-- wp:html -->
        <div class="wp-html absolute -left-5 top-8 w-[95%] h-[95%] bg-[#A6DCCB] z-10"></div>
        <!-- /wp:html --> 
                
        <!-- wp:image {"sizeSlug":"large","className":"relative overflow-hidden shadow-md h-auto z-20"} -->
        <figure class="wp-block-image size-large relative overflow-hidden shadow-md h-auto z-20">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/home/history-1.png"
            alt="Students learning computers"
          />
        </figure>
        <!-- /wp:image -->

      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"flex flex-col justify-end items-end gap-6 relative","layout":{"type":"constrained"}} -->
    <div class="wp-block-group flex flex-col justify-end items-end gap-6 relative">

      <!-- wp:paragraph {"className":"inline-block bg-[#3C8163] text-white text-sm font-semibold px-4 py-1 rounded-full"} -->
      <p class="inline-block bg-[#3C8163] text-white text-sm font-semibold px-4 py-1 rounded-full">
        2022
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"className":"text-gray-700 max-w-sm text-center"} -->
      <p class="text-gray-700 max-w-sm text-center">
        The institute partnered with local NGOs to provide evening literacy programs for parents,
        strengthening family and community ties.
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:group {"className":"relative","layout":{"type":"constrained"}} -->
      <div class="wp-block-group relative ">

        <!-- wp:html -->
        <div class="wp-html absolute -right-5 top-8 w-[95%] h-[95%] bg-[#7EC7DD] z-10"></div>
        <!-- /wp:html -->
      
        <!-- wp:image {"sizeSlug":"large","className":"relative shadow-md h-auto z-20"} -->
        <figure class="wp-block-image size-large relative shadow-md h-auto z-20">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/home/history-2.png"
            alt="Community engagement"
          />
        </figure>
        <!-- /wp:image -->


      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
