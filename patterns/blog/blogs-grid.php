<?php
/**
 * Title: Blogs Listing
 * Slug: svlti/blogs-grid
 */

const SVLTI_BLOG_POST_TYPE = 'blogs';          
const SVLTI_BLOG_CATEGORY  = 'blog-category';

// Helpers
if (!function_exists('svlti_blogs_build_url')) {
  function svlti_blogs_build_url(array $overrides = []): string {
    $current = [];
    foreach ($_GET as $k => $v) {
      $current[$k] = is_array($v)
        ? array_map('sanitize_text_field', wp_unslash($v))
        : sanitize_text_field(wp_unslash($v));
    }

    $merged = array_merge($current, $overrides);

    // reset pagination if filter changes
    if (isset($overrides['category'])) {
      $merged['paged'] = 1;
    }

    return esc_url(add_query_arg($merged));
  }
}

if (!function_exists('svlti_get_blogs_query')) {
  function svlti_get_blogs_query(string $category_slug = 'all', int $per_page = 9) {
    $args = [
      'post_type'      => SVLTI_BLOG_POST_TYPE,
      'post_status'    => 'publish',
      'posts_per_page' => $per_page,
      'paged'          => max(1, (int) get_query_var('paged', 1)),
    ];

    if ($category_slug !== '' && $category_slug !== 'all') {
      $args['tax_query'] = [
        [
          'taxonomy' => SVLTI_BLOG_CATEGORY,
          'field'    => 'slug',
          'terms'    => [$category_slug],
        ],
      ];
    }

    return new WP_Query($args);
  }
}

if (!function_exists('svlti_blog_card_data')) {
  function svlti_blog_card_data(int $post_id): array {
    // ACF fields
    $blog_title  = get_the_title($post_id);
    $blog_content  = get_the_content($post_id);
    

    // blog categories
    $categories = get_the_terms($post_id, SVLTI_BLOG_CATEGORY);
    $categories_text = '';
    if (!is_array($categories) || is_wp_error($categories)) {
      $categories = [];
    }


    return [
      'title'         => $blog_title,
      'content'       => $blog_content,
      'categories'    => $categories,
      'permalink'     => get_permalink($post_id),
      'has_thumb'     => has_post_thumbnail($post_id),
      'thumb_html'    => get_the_post_thumbnail($post_id, 'large', [
        'alt'   => esc_attr($blog_title),
        'class' => 'w-full h-auto object-cover',
      ]),
    ];
  }
}

// Current filter
$current_category = isset($_GET['category']) ? sanitize_title(wp_unslash($_GET['category'])) : 'all';

// Pill terms for pills
$category_terms = get_terms([
  'taxonomy'   => SVLTI_BLOG_CATEGORY,
  'hide_empty' => false,
]);

// blogs query
$blogs_q = svlti_get_blogs_query($current_category, 9);
?>

<!-- wp:group {"className":"w-full py-8"} -->
<div class="wp-block-group w-full py-8">

  <!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl font-bold text-[#2b8c77] mb-5"} -->
  <h2 class="wp-block-heading text-3xl md:text-4xl font-bold text-[#2b8c77] mb-5">Blog</h2>
  <!-- /wp:heading -->

  <!-- wp:html -->
  <div class="flex flex-wrap items-center gap-2 mb-8">
    <a href="<?= svlti_blogs_build_url(['category' => 'all']) ?>"
       class="px-4 py-2 rounded-full text-sm font-medium <?= ($current_category === 'all' ? 'bg-[#2b8c77] text-white' : 'bg-white border border-gray-300 hover:bg-gray-50') ?>">
      All
    </a>

    <?php if (!is_wp_error($category_terms) && !empty($category_terms)) : ?>
      <?php foreach ($category_terms as $term) :
        $active = ($current_category === $term->slug);
      ?>
        <a href="<?= svlti_blogs_build_url(['category' => $term->slug]) ?>"
           class="px-4 py-2 rounded-full text-sm font-medium <?= ($active ? 'bg-[#2b8c77] text-white' : 'bg-white border border-gray-300 hover:bg-gray-50') ?>">
          <?= esc_html($term->name) ?>
        </a>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <!-- /wp:html -->

  <!-- wp:group {"className":"grid grid-cols-1 md:grid-cols-3 gap-6"} -->
  <div class="wp-block-group grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- wp:html -->
    <?php if ($blogs_q->have_posts()) : ?>
      <?php while ($blogs_q->have_posts()) : $blogs_q->the_post();
        $post_id = get_the_ID();
        $c = svlti_blog_card_data($post_id);
      ?>
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden flex flex-col h-full">

          <figure class="wp-block-image size-large">
            <?php if ($c['has_thumb']) : ?>
              <?= $c['thumb_html']; ?>
            <?php else : ?>
              <div class="w-full" style="height:220px; background:#f3f4f6;"></div>
            <?php endif; ?>
          </figure>

          <div class="p-6 flex flex-col h-full">

            <h3 class="text-xl font-bold text-gray-900 mb-3">
              <?= esc_html($c['title']) ?>
            </h3>

            <?php if (!empty($c['categories'])) : ?>
              <div class="flex flex-wrap gap-2 mb-3">
                <?php foreach ($c['categories'] as $term) : ?>
                  <span class="inline-flex items-center px-3 py-1 rounded-full text-xs text-dark-green font-medium border border-dark-green">
                    <?= esc_html($term->name) ?>
                  </span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>


            <div class="mt-auto">
              <a href="<?= esc_url($c['permalink']) ?>"
                 class="block text-center bg-[#2b8c77] text-white text-sm font-medium rounded-md py-2 hover:bg-[#247565] transition-colors">
                Read ->
              </a>
            </div>

          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
      <p class="text-sm opacity-70">No blogs found.</p>
    <?php endif; ?>
    <!-- /wp:html -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->
