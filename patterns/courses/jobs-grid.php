<?php
/**
 * Title: Jobs Listing (Dropdown Filters + Search)
 * Slug: svlti/jobs-grid
 * Categories: featured, jobs
 */

const SVLTI_JOB_POST_TYPE = 'job';          
const SVLTI_TAX_FUNCTION  = 'job-function';
const SVLTI_TAX_TYPE      = 'job-type';    
const SVLTI_TAX_LOCATION  = 'job-location';

function svlti_get_qs($key, $default = '') {
  return isset($_GET[$key]) ? sanitize_text_field(wp_unslash($_GET[$key])) : $default;
}

$keyword   = svlti_get_qs('q', '');
$function  = svlti_get_qs('function', '');
$type      = svlti_get_qs('type', '');
$location  = svlti_get_qs('location', '');

// Dropdown options
$function_terms = get_terms(['taxonomy' => SVLTI_TAX_FUNCTION, 'hide_empty' => false]);
$type_terms     = get_terms(['taxonomy' => SVLTI_TAX_TYPE, 'hide_empty' => false]);
$loc_terms      = get_terms(['taxonomy' => SVLTI_TAX_LOCATION, 'hide_empty' => false]);

// Build tax_query
$tax_query = [];
if ($function) {
  $tax_query[] = ['taxonomy' => SVLTI_TAX_FUNCTION, 'field' => 'slug', 'terms' => [$function]];
}
if ($type) {
  $tax_query[] = ['taxonomy' => SVLTI_TAX_TYPE, 'field' => 'slug', 'terms' => [$type]];
}
if ($location) {
  $tax_query[] = ['taxonomy' => SVLTI_TAX_LOCATION, 'field' => 'slug', 'terms' => [$location]];
}
if (!empty($tax_query)) {
  $tax_query['relation'] = 'AND';
}

// WP Query
$args = [
  'post_type'      => SVLTI_JOB_POST_TYPE,
  'post_status'    => 'publish',
  'posts_per_page' => 9,
  's'              => $keyword ?: '',     // keyword search (title/content)
  'tax_query'      => $tax_query,
];

$jobs_q = new WP_Query($args);
?>

<!-- wp:group {"className":"w-full py-10"} -->
<div class="wp-block-group w-full py-10">

  <h2 class="text-4xl font-bold text-[#2b8c77] mb-6">Internships and Job Opportunities</h2>

  <!-- FILTER BAR -->
  <div class="bg-white border border-gray-200 rounded-xl p-6 mb-10">
    <form method="get" class="space-y-4">

      <div class="text-lg font-semibold">Looking for …</div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <select name="function" class="w-full border border-gray-300 rounded-lg px-4 py-3">
          <option value="">All Functions</option>
          <?php foreach ($function_terms as $t) : ?>
            <option value="<?= esc_attr($t->slug) ?>" <?= selected($function, $t->slug, false) ?>>
              <?= esc_html($t->name) ?>
            </option>
          <?php endforeach; ?>
        </select>

        <select name="type" class="w-full border border-gray-300 rounded-lg px-4 py-3">
          <option value="">All Types</option>
          <?php foreach ($type_terms as $t) : ?>
            <option value="<?= esc_attr($t->slug) ?>" <?= selected($type, $t->slug, false) ?>>
              <?= esc_html($t->name) ?>
            </option>
          <?php endforeach; ?>
        </select>

        <select name="location" class="w-full border border-gray-300 rounded-lg px-4 py-3">
          <option value="">All Locations</option>
          <?php foreach ($loc_terms as $t) : ?>
            <option value="<?= esc_attr($t->slug) ?>" <?= selected($location, $t->slug, false) ?>>
              <?= esc_html($t->name) ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
        <input
          type="search"
          name="q"
          value="<?= esc_attr($keyword) ?>"
          placeholder="Search jobs..."
          class="md:col-span-2 w-full border border-gray-300 rounded-lg px-4 py-3"
        />

        <div class="flex gap-3">
          <button type="submit" class="px-8 py-3 rounded-full bg-[#2b8c77] text-white font-medium">
            Search
          </button>

          <!-- wp:buttons -->
          <div>
          <!-- wp:button {"className":"bg-[#2b8c77] text-white hover:bg-[#237a66]"} -->
                  <div class="wp-block-button">
                    <a href="/courses/create-listing"
                      class="wp-block-button__link wp-element-button bg-[#2b8c77] text-white hover:bg-[#237a66]"
                    >I'm an Employer</a>
                  </div>
                  <!-- /wp:button -->
                  </div>
                <!-- /wp:buttons -->

          <!-- <a href="<?= esc_url(remove_query_arg(['function','type','location','q'])) ?>"
             class="px-8 py-3 rounded-full bg-[#2b8c77] text-white font-medium">
            Reset
          </a> -->
        </div>
      </div>

    </form>
  </div>

  <!-- RESULTS GRID -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <?php if ($jobs_q->have_posts()) : ?>
      <?php while ($jobs_q->have_posts()) : $jobs_q->the_post();
        $id = get_the_ID();

        // ACF fields for card
        $company   = get_field('company_name', $id);
        $dur_val   = get_field('duration_pt_1', $id);
        $dur_unit  = get_field('duration_pt_2', $id);
        $duration  = trim((string) $dur_val . ' ' . (string) $dur_unit); // combine
        $salary    = get_field('salary', $id);
        $location  = get_field('location', $id);
        $loc_terms = get_the_terms($id, SVLTI_TAX_LOCATION);
        $loc_name  = (!is_wp_error($loc_terms) && !empty($loc_terms)) ? $loc_terms[0]->name : '';
      ?>
        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden flex flex-col p-6">
          <div class="flex items-start gap-4 mb-4">
            <div class="w-10 h-10 rounded-lg bg-gray-100 overflow-hidden flex items-center justify-center">
              <?php if (has_post_thumbnail($id)) : ?>
                <?= get_the_post_thumbnail($id, 'thumbnail', ['class' => 'w-full h-full object-cover']) ?>
              <?php else : ?>
                <span class="text-xs text-gray-400">Logo</span>
              <?php endif; ?>
            </div>

            <h3 class="text-xl font-bold leading-snug">
              <?= esc_html(get_the_title($id)) ?>
            </h3>
          </div>

          <p class="text-sm text-gray-600 mb-5">
            <?= esc_html(wp_trim_words(get_the_excerpt($id), 28)) ?>
          </p>

          <!-- wp:group {"className":"grid grid-cols-2 gap-4"} -->
          <div class="wp-block-group grid grid-cols-2 gap-4">
            <!-- wp:group {"className":"flex items-center gap-2 text-sm text-gray-600"} -->
            <div class="wp-block-group flex items-center gap-2 text-sm text-gray-600">
              <!-- wp:html -->
              <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <!-- /wp:html -->
              <!-- wp:paragraph {"className":"m-0"} -->
              <p class="m-0"><?= esc_html($company) ?></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            
            <!-- wp:group {"className":"flex items-center gap-2 text-sm text-gray-600"} -->
            <div class="wp-block-group flex items-center gap-2 text-sm text-gray-600">
              <!-- wp:html -->
              <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
              <!-- /wp:html -->
              <!-- wp:paragraph {"className":"m-0"} -->
              <p class="m-0"><?= esc_html($location) ?></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            
            <!-- wp:group {"className":"flex items-center gap-2 text-sm text-gray-600"} -->
            <div class="wp-block-group flex items-center gap-2 text-sm text-gray-600">
              <!-- wp:html -->
              <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <!-- /wp:html -->
              <!-- wp:paragraph {"className":"m-0"} -->
              <p class="m-0"><?= esc_html($duration) ?></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            
            <!-- wp:group {"className":"flex items-center gap-2 text-sm text-gray-600"} -->
            <div class="wp-block-group flex items-center gap-2 text-sm text-gray-600">
              <!-- wp:html -->
              <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <!-- /wp:html -->
              <!-- wp:paragraph {"className":"m-0"} -->
              <p class="m-0"><?= esc_html($salary) ?></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->

          <a href="<?= esc_url(get_permalink($id)) ?>"
             class="mt-6 block text-center px-6 py-3 rounded-full bg-[#2b8c77] text-white font-medium">
            Learn More
          </a>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
      <p class="text-sm text-gray-600">No jobs found.</p>
    <?php endif; ?>
  </div>

</div>
<!-- /wp:group -->
