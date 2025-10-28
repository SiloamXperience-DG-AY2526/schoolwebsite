<?php
/**
 * Title: Vision Section
 * Slug: svlti/vision
 */
?>

<!-- wp:group {"className":"relative flex flex-wrap items-center justify-between gap-10 px-6 py-24 min-h-screen","layout":{"type":"constrained"}} -->
<div class="wp-block-group relative flex flex-wrap items-center justify-between gap-10 px-6 py-24 min-h-screen">
  
  <!-- wp:html -->
  <div class="wp-html absolute top-[5%] left-[20%] w-[85%] h-[85%] bg-light-green z-10"></div>
  <!-- /wp:html -->

  <!-- wp:group {"className":"flex justify-center items-center flex-1 min-w-[280px] md:w-[45%] z-20","layout":{"type":"constrained"}} -->
  <div class="wp-block-group flex justify-center items-center flex-1 min-w-[280px] md:w-[45%] z-20">
    <!-- wp:image {"sizeSlug":"large","className":"w-[40rem] shadow-lg"} -->
    <figure class="wp-block-image size-large w-[25rem] shadow-lg">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/home/vision.png" 
        alt="Children at The Learners’ Village"
      />
    </figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:group -->


  <!-- wp:group {"className":"flex-1 min-w-[280px] md:w-[50%] z-20","layout":{"type":"constrained"}} -->
  <div class="wp-block-group flex-1 min-w-[280px] md:w-[50%] z-20">
    <!-- wp:heading {"className":"text-3xl md:text-4xl font-bold text-brand mb-6"} -->
    <h2 class="wp-block-heading text-3xl md:text-4xl font-bold text-brand mb-6">Our Vision</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"text-gray-800 mb-4"} -->
    <p class="text-gray-800 mb-4">
      We dream of a world where every person can live with dignity, respect, and reach their full potential.
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"text-gray-800 mb-8"} -->
    <p class="text-gray-800 mb-8">
      We're building an inclusive community at The Learners’ Village in rural Cambodia. Here, people learn job skills and life skills that help them create better futures for themselves and their families.
    </p>
    <!-- /wp:paragraph -->


    <!-- wp:group {"className":"bg-light-blue rounded-2xl p-6","layout":{"type":"constrained"}} -->
    <div class="wp-block-group bg-light-blue rounded-2xl p-6">  
      <!-- wp:paragraph {"className":"font-semibold text-gray-700 mb-4"} -->
      <p class="font-semibold text-gray-700 mb-4">Core Values</p>
      <!-- /wp:paragraph -->

      <!-- wp:group {"className":"flex flex-col gap-3","layout":{"type":"flex","orientation":"vertical"}} -->
      <div class="wp-block-group flex flex-col gap-3">
        <?php
        $values = [
          'Service-oriented',
          'Integrity',
          'Learner’s Posture',
          'Open-Mindedness',
          'Appreciation',
          'Mindfulness and Mission-focused'
        ];
        foreach ( $values as $value ) : ?>
          <!-- wp:paragraph {"className":"text-center bg-white rounded-full w-full py-2 px-3 font-medium"} -->
          <p class="text-center bg-white rounded-full w-full py-2 px-3 font-medium transition-transform duration-500 ease-in-out hover:scale-105">
            <?php echo esc_html( $value ); ?>
          </p>
          <!-- /wp:paragraph -->
        <?php endforeach; ?>
      </div>

      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
