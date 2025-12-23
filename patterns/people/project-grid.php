<?php
/**
 * Title: Volunteer Project Card
 * Slug: svlti/project-grid
 */

const SVLTI_PROJECT_POST_TYPE = 'volunteer-project'; 
const SVLTI_PROJECT_TAXONOMY  = 'project-category';

// Helpers
if (!function_exists('svlti_projects_build_url')) {
  function svlti_projects_build_url(array $overrides = []): string {
    $current = [];
    foreach ($_GET as $k => $v) {
      $current[$k] = is_array($v)
        ? array_map('sanitize_text_field', wp_unslash($v))
        : sanitize_text_field(wp_unslash($v));
    }

    // Apply overrides (support null to remove param)
    foreach ($overrides as $k => $v) {
      if ($v === null) {
        unset($current[$k]);
      } else {
        $current[$k] = $v;
      }
    }

    // reset pagination if filter changes
    if (isset($overrides['cat'])) {
      $current['paged'] = 1;
    }

    return esc_url(add_query_arg($current));
  }
}

if (!function_exists('svlti_get_projects_query')) {
  function svlti_get_projects_query(string $cat_slug = 'all', int $per_page = 9): WP_Query {
    $args = [
      'post_type'      => SVLTI_PROJECT_POST_TYPE,
      'post_status'    => 'publish',
      'posts_per_page' => $per_page,
      'paged'          => max(1, (int) get_query_var('paged', 1)),
    ];

    if ($cat_slug !== '' && $cat_slug !== 'all') {
      $args['tax_query'] = [
        [
          'taxonomy' => SVLTI_PROJECT_TAXONOMY,
          'field'    => 'slug',
          'terms'    => [$cat_slug],
        ],
      ];
    }

    return new WP_Query($args);
  }
}

if (!function_exists('svlti_project_card_data')) {
  function svlti_project_card_data(int $post_id): array {
    $title = get_the_title($post_id);

    // Prefer an ACF excerpt field if you have one; fallback to WP excerpt / trimmed content
    $acf_excerpt = function_exists('get_field') ? get_field('excerpt', $post_id) : '';
    $excerpt = $acf_excerpt ?: get_the_excerpt($post_id);
    if (!$excerpt) {
      $excerpt = wp_trim_words(wp_strip_all_tags(get_post_field('post_content', $post_id)), 22);
    }

    // Category badge: first assigned term
    $terms = get_the_terms($post_id, SVLTI_PROJECT_TAXONOMY);
    $badge = null;
    if (is_array($terms) && !is_wp_error($terms) && !empty($terms)) {
      // pick the first term
      $badge = [
        'name' => $terms[0]->name,
        'slug' => $terms[0]->slug,
      ];
    }

    return [
      'title'      => $title,
      'excerpt'    => $excerpt,
      'badge'      => $badge,
      'permalink'  => get_permalink($post_id),
      'has_thumb'  => has_post_thumbnail($post_id),
      'thumb_html' => get_the_post_thumbnail($post_id, 'large', [
        'alt'   => esc_attr($title),
        'class' => 'w-full h-[220px] object-cover', // matches screenshot proportions
      ]),
    ];
  }
}

// ---------- Current filter ----------
$current_cat = isset($_GET['cat']) ? sanitize_title(wp_unslash($_GET['cat'])) : 'all';

// Get terms for pills
$cat_terms = get_terms([
  'taxonomy'   => SVLTI_PROJECT_TAXONOMY,
  'hide_empty' => false,
]);

// Query projects
$projects_q = svlti_get_projects_query($current_cat, 9);
?>

<!-- wp:group {"className":"w-full"} -->
<div class="wp-block-group w-full">

  <!-- Pills -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 place-items-center mb-10">
    <a href="<?= svlti_projects_build_url(['cat' => 'all']) ?>"
       class="w-full max-w-[420px] text-center
           px-8 py-4 rounded-full text-base font-medium
           border-2
           <?= ($current_cat === 'all' ? 'bg-[#2b8c77] text-white' : 'bg-transparent border-gray-300 text-gray-600 hover:bg-white/50 transition') ?>">
      All
    </a>

    <?php if (!is_wp_error($cat_terms) && !empty($cat_terms)) : ?>
      <?php foreach ($cat_terms as $term) :
        $active = ($current_cat === $term->slug);
      ?>
        <a href="<?= svlti_projects_build_url(['cat' => $term->slug]) ?>"
           class="w-full max-w-[420px] text-center
           px-8 py-4 rounded-full text-base font-medium
           border-2
           <?= $active ? 'bg-[#2b8c77] text-white' : 'bg-transparent border-gray-300 text-gray-600 hover:bg-white/50 transition' ?>
           transition">
          <?= esc_html($term->name) ?>
        </a>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <!-- /wp:html -->

  <!-- Grid -->
  <!-- wp:group {"className":"grid grid-cols-1 md:grid-cols-3 gap-6"} -->
  <div class="wp-block-group grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- wp:html -->
    <?php if ($projects_q->have_posts()) : ?>
      <?php while ($projects_q->have_posts()) : $projects_q->the_post();
        $post_id = get_the_ID();
        $p = svlti_project_card_data($post_id);
      ?>
        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden flex flex-col shadow-sm hover:shadow-md transition-shadow">

          <figure>
            <?php if ($p['has_thumb']) : ?>
              <?= $p['thumb_html']; ?>
            <?php else : ?>
              <div class="w-full h-[220px]" style="background:#e5e7eb;"></div>
            <?php endif; ?>
          </figure>

          <div class="p-6 flex flex-col h-full">

            <h3 class="text-lg font-bold text-gray-900 mb-3">
              <?= esc_html($p['title']) ?>
            </h3>

            <p class="text-sm text-gray-600 mb-4">
              <?= esc_html($p['excerpt']) ?>
            </p>

            <?php if (!empty($p['badge'])) : ?>
              <div class="mb-5">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-[#CFEFE8] text-[#207860]">
                  <?= esc_html($p['badge']['name']) ?>
                </span>
              </div>
            <?php endif; ?>

            <div class="mt-auto flex justify-end">
              <a href="<?= esc_url($p['permalink']) ?>"
                 class="inline-flex items-center justify-center px-5 py-2 rounded-md text-sm font-medium bg-[#9EC7D6] text-white hover:opacity-80 transition">
                I’m interested
              </a>
            </div>

          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
      <p class="text-sm opacity-70">No projects found.</p>
    <?php endif; ?>
    <!-- /wp:html -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->
