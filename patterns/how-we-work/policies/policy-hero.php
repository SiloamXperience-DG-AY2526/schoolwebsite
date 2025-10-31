<?php
/**
 * Title: Our Policies Hero Section
 * Slug: svlti/policy-hero
 */
?>

<!-- wp:group {"className":"relative max-w-7xl min-h-[90vh]","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group relative flex flex-wrap max-w-7xl min-h-[90vh] w-full">

  <!-- wp:group {"className":"items-start justify-center h-[75vh] bg-light-blue","layout":{"type":"flex","orientation":"horizontal"}} -->
  <div class="wp-block-group flex flex-col items-start justify-center h-[75vh] bg-light-blue">

  <!-- wp:group {"className":"md:w-[52%]","layout":{"type":"flex"}} -->
  <div class="wp-block-group flex-col items-start p-12 md:w-[52%]"> 

    <!-- wp:heading {"className":"text-[56px] font-semibold mb-6"} -->
    <h2 class="wp-block-heading text-[56px] text-left font-semibold mb-6">
      <span class="drop-shadow text-[#333333]">Our</span>
      <span class="text-dark-green drop-shadow"> Policies</span>
    </h2>
    <!-- /wp:heading -->
  
    <!-- wp:paragraph {"className":"text-gray-800 leading-relaxed"} -->
    <p class="text-gray-800 font-medium leading-relaxed">
      We care for children and support families by keeping our school safe, welcoming, and fair.
      These guidelines show what we value and how we work together for every child’s best.
    </p>
    <!-- /wp:paragraph -->

    </div>
  <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:image {"sizeSlug":"large","className":"shadow-lg z-10"} -->
  <figure class="wp-block-image size-large absolute -top-4 right-4 w-[28rem] shadow-lg z-10">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/how-we-work/policy.png" alt="Children in classroom" />
  </figure>
  <!-- /wp:image -->

</div>
<!-- /wp:group -->
