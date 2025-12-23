<?php
/**
 * Title: Project Page Feature Info
 * Slug: svlti/volunteer-project
 */
?>

<?php
$post_id = get_queried_object_id();
if (!$post_id) {
  echo '<p>No project found.</p>';
  return;
}

// --- WP fields ---
$post_title = get_the_title($post_id);
$content_raw = get_post_field('post_content', $post_id);

// --- ACF fields ---
$excerpt  = get_field('excerpt', $post_id);
$tasks    = get_field('tasks', $post_id);
$slots    = get_field('slots', $post_id);
$location = get_field('location', $post_id);

// Optional CTA
$enroll_url = get_field('enroll_url', $post_id);
if (!$enroll_url) $enroll_url = '#';

// Featured image (fallback)
$cover_url = '';
if (has_post_thumbnail($post_id)) {
  $cover_url = get_the_post_thumbnail_url($post_id, 'large');
}
if (!$cover_url) {
  $cover_url = get_template_directory_uri() . '/assets/images/listing/students.png';
}

// About text fallback
if (!$excerpt) {
  $excerpt = wp_trim_words(wp_strip_all_tags($content_raw), 28);
}

// Taxonomy pills
$project_tax = 'project-category';
$project_terms = taxonomy_exists($project_tax) ? get_the_terms($post_id, $project_tax) : [];
?>

<!-- wp:group {"className":"max-w-7xl mx-auto px-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group max-w-7xl mx-auto px-6">

  <!-- wp:group {"className":"bg-white rounded-2xl shadow-2xl p-8 relative","layout":{"type":"constrained"}} -->
  <div class="wp-block-group bg-white rounded-2xl shadow-2xl p-8 relative">

    <!-- wp:group {"className":"grid grid-cols-1 lg:grid-cols-2 gap-8","layout":{"type":"constrained"}} -->
    <div class="wp-block-group grid grid-cols-1 lg:grid-cols-2 gap-8">

      <!-- LEFT -->
      <!-- wp:group {"className":"space-y-6","layout":{"type":"constrained"}} -->
      <div class="wp-block-group space-y-6">

        <!-- wp:heading {"level":2,"className":"text-header-sm text-black"} -->
        <h2 class="wp-block-heading text-header-sm text-black">
          <?php echo esc_html($post_title); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- About -->
        <div class="wp-block-group space-y-2">
          <h3 class="wp-block-heading text-paragraph-normal text-elm-120 mb-2">About the opportunity</h3>
          <p class="text-paragraph-normal text-neutral-120">
            <?php echo esc_html($excerpt); ?>
          </p>
        </div>

        <!-- Tasks -->
        <?php if (!empty($tasks)) : ?>
          <div class="wp-block-group space-y-2">
            <h3 class="wp-block-heading text-elm-120 text-paragraph-normal mb-2">Tasks</h3>
            <p class="text-neutral-120 text-paragraph-sm">
              <?php echo esc_html($tasks); ?>
            </p>
          </div>
        <?php endif; ?>

        <!-- Time Commitment -->
        <?php if (!empty($slots)) : ?>
          <div class="wp-block-group space-y-2">
            <h3 class="wp-block-heading text-elm-120 text-paragraph-normal mb-2">Time Commitment</h3>
            <p class="text-neutral-120 text-paragraph-sm">
              <?php echo esc_html($slots); ?>
            </p>
          </div>
        <?php endif; ?>

        <!-- Taxonomy pills -->
        <div class="wp-block-group flex flex-wrap gap-3 pt-4">
          <?php if (is_array($project_terms) && !is_wp_error($project_terms) && !empty($project_terms)) : ?>
            <?php foreach ($project_terms as $t) : ?>
              <span class="px-4 py-2 rounded-full bg-eucalyptus-70 text-neutral-100 text-paragraph-xsm">
                <?php echo esc_html($t->name); ?>
              </span>
            <?php endforeach; ?>
          <?php else : ?>
            <span class="px-4 py-2 rounded-full bg-eucalyptus-70 text-neutral-100 text-paragraph-xsm">
              Uncategorized
            </span>
          <?php endif; ?>
        </div>

      </div>
      <!-- /LEFT -->

      <!-- RIGHT -->
      <div class="wp-block-group flex flex-col gap-5">

        <figure class="wp-block-image size-large w-full h-96 rounded-xl overflow-hidden">
          <img
            src="<?php echo esc_url($cover_url); ?>"
            alt="<?php echo esc_attr($post_title); ?>"
            class="w-full h-full object-cover"
          />
        </figure>

        <!-- wp:buttons {"className":"self-end"} -->
        <div class="wp-block-buttons self-end">
            <!-- wp:button {"className":"text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]"} -->
            <div class="wp-block-button hero-button text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]">
                <a class="wp-block-button__link wp-element-button">I want to Volunteer</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

      </div>
      <!-- /RIGHT -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->

