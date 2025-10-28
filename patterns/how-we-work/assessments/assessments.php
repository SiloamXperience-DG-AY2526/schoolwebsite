<?php
/**
 * Title: Assessments Section
 * Slug: svlti/assessments
 */
?>

<!-- wp:group {"className":"relative flex flex-wrap items-center justify-between gap-10 px-6 py-24 max-w-7xl mx-auto","layout":{"type":"constrained"}} -->
<div class="wp-block-group relative flex flex-wrap items-center justify-between gap-10 px-6 py-24 max-w-7xl mx-auto">

  <!-- Background block -->
  <!-- wp:html -->
  <div class="wp-html absolute top-0 left-0 w-[65%] h-full bg-light-blue z-0 rounded-md"></div>
  <!-- /wp:html -->

  <!-- Text column -->
  <!-- wp:group {"className":"flex-1 min-w-[280px] md:w-[50%] z-10 p-10","layout":{"type":"constrained"}} -->
  <div class="wp-block-group flex-1 min-w-[280px] md:w-[50%] z-10 p-10">
    <!-- wp:heading {"className":"text-4xl font-bold mb-6"} -->
    <h2 class="wp-block-heading text-4xl font-bold mb-6">
      <span class="text-dark-green drop-shadow">Our</span>
      <span class="text-brand"> Assessments</span>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"text-gray-800 leading-relaxed"} -->
    <p class="text-gray-800 leading-relaxed">
      We care for children and support families by keeping our school safe, welcoming, and fair.
      These guidelines show what we value and how we work together for every child’s best.
    </p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- Image column -->
  <!-- wp:group {"className":"flex justify-center items-center flex-1 min-w-[280px] md:w-[45%] z-10","layout":{"type":"constrained"}} -->
  <div class="wp-block-group flex justify-center items-center flex-1 min-w-[280px] md:w-[45%] z-10">
    <!-- wp:image {"sizeSlug":"large","className":"rounded-lg shadow-lg w-[25rem]"} -->
    <figure class="wp-block-image size-large rounded-lg shadow-lg w-[25rem] overflow-hidden">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mission-1.png"
        alt="Children smiling together outdoors"
        class="object-cover w-full h-full"
      />
    </figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->
