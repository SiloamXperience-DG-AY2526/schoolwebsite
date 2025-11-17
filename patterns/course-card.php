<?php
/**
 * Title: Course Card
 * Slug: svlti/course-card
 */
?>

<!-- wp:group {"className":"course-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow duration-300 flex flex-col h-full","layout":{"type":"constrained"}} -->
<div class="wp-block-group course-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
  
  <!-- wp:image {"sizeSlug":"full","className":"w-full h-48 object-cover"} -->
  <figure class="wp-block-image size-full w-full h-48 object-cover">
    <img src="https://via.placeholder.com/400x200?text=COURSE+IMAGE" alt="Course Image" />
  </figure>
  <!-- /wp:image -->
  
  <!-- wp:group {"className":"p-6 flex flex-col flex-grow","layout":{"type":"constrained"}} -->
  <div class="wp-block-group p-6 flex flex-col flex-grow">
    
    <!-- wp:heading {"level":3,"className":"text-xl font-bold text-gray-900 mb-2"} -->
    <h3 class="wp-block-heading text-xl font-bold text-gray-900 mb-2">[COURSE_TITLE]</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"text-sm text-gray-600 mb-1"} -->
    <p class="text-sm text-gray-600 mb-1"><strong>Pillars:</strong> <span class="truncate inline-block max-w-full">[PILLARS_TEXT]</span></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"className":"text-sm text-gray-600 mb-3"} -->
    <p class="text-sm text-gray-600 mb-3"><strong>Certificate:</strong> [CERTIFICATE_NAME]</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"className":"text-gray-700 mb-3 flex-grow text-sm"} -->
    <p class="text-gray-700 mb-3 flex-grow text-sm">[COURSE_DESCRIPTION]</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"className":"text-sm text-gray-600 mb-3"} -->
    <p class="text-sm text-gray-600 mb-3"><strong>Prerequisites:</strong> [PREREQUISITES]</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"className":"flex flex-col gap-2 mb-4 text-sm text-gray-600","layout":{"type":"constrained"}} -->
    <div class="wp-block-group flex flex-col gap-2 mb-4 text-sm text-gray-600">
      
      <!-- wp:group {"className":"flex items-center gap-2","layout":{"type":"constrained"}} -->
      <div class="wp-block-group flex items-center gap-2">
        <!-- wp:paragraph {"className":"m-0 flex items-center gap-2"} -->
        <p class="m-0 flex items-center gap-2">
          <!-- wp:html -->
          <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <!-- /wp:html -->
          Duration: [DURATION]
        </p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group {"className":"flex items-center gap-2","layout":{"type":"constrained"}} -->
      <div class="wp-block-group flex items-center gap-2">
        <!-- wp:paragraph {"className":"m-0 flex items-center gap-2"} -->
        <p class="m-0 flex items-center gap-2">
          <!-- wp:html -->
          <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
          <!-- /wp:html -->
          Mode of learning: [MODE_OF_LEARNING]
        </p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group {"className":"flex items-center gap-2","layout":{"type":"constrained"}} -->
      <div class="wp-block-group flex items-center gap-2">
        <!-- wp:paragraph {"className":"m-0 flex items-center gap-2"} -->
        <p class="m-0 flex items-center gap-2">
          <!-- wp:html -->
          <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
          </svg>
          <!-- /wp:html -->
          Assessment type: [ASSESSMENT_TYPE]
        </p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
    </div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"className":"mt-auto"} -->
    <div class="wp-block-buttons mt-auto">
      <!-- wp:button {"className":"is-style-fill bg-gradient-to-r from-[#2CA585] to-[#2C89A5] text-white font-semibold rounded-md w-full text-center"} -->
      <div class="wp-block-button is-style-fill bg-gradient-to-r from-[#2CA585] to-[#2C89A5] text-white font-semibold rounded-md w-full text-center">
        <a class="wp-block-button__link wp-element-button w-full">Enroll</a>
      </div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
    
  </div>
  <!-- /wp:group -->
  
</div>
<!-- /wp:group -->
