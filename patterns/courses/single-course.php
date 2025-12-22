<?php
/**
 * Title: Course Page Feature Info
 * Slug: svlti/single-course
 */
?>

<?php

$post_id = get_queried_object_id();
if (!$post_id) {
  echo '<p>No course found.</p>';
  exit;
}

// ACF & WP fields
$title = get_field('course_title', $post_id) ?: get_the_title($post_id); // unused
$post_title = get_the_title($post_id);


$cert    = get_field('certification', $post_id);
$excerpt = get_field('excerpt', $post_id); // unused
$content = get_post_field('post_content', $post_id);
$prereq  = get_field('prerequisites', $post_id);

$dur1 = get_field('duration_pt_1', $post_id);
$dur2 = get_field('duration_pt_2', $post_id);
$duration = trim((string)$dur1 . ' ' . (string)$dur2);

$learning_mode = get_field('learning_mode', $post_id);
$assessment    = get_field('assessment_type', $post_id);

// Optional button fields (recommended)
$enroll_url = get_field('enroll_url', $post_id);
if (!$enroll_url) $enroll_url = '#';

// ACF file field can return array OR URL depending on your setting
$brochure_file = get_field('brochure_file', $post_id);
$brochure_url = '';
if (is_array($brochure_file) && !empty($brochure_file['url'])) {
  $brochure_url = $brochure_file['url'];
} elseif (is_string($brochure_file)) {
  $brochure_url = $brochure_file;
}

// Featured image
$cover_url = '';
if (has_post_thumbnail($post_id)) {
  $cover_url = get_the_post_thumbnail_url($post_id, 'full');
}
if (!$cover_url) {
  $cover_url = get_template_directory_uri() . '/assets/images/courses/company-logo.png';
}

// If excerpt empty, fall back to trimmed post content (plain text)
if (!$excerpt) {
  $raw = get_post_field('post_content', $post_id);
  $excerpt = wp_trim_words(wp_strip_all_tags($raw), 40);
}

// Courses index link (adjust if needed)
$courses_index_url = home_url('/courses');
?>


<!-- wp:cover -->
<div class="wp-block-cover w-full min-h-[500px] relative"
      style="background-image:url('<?php echo esc_url($cover_url); ?>'); background-size:cover; background-position:center;">

  <span aria-hidden="true" class="wp-block-cover__background absolute inset-0 bg-black opacity-50"></span>

  <!-- Back arrow -->
  <div class="wp-block-group absolute left-4 top-4 w-[22px] z-20">
    <a href="<?php echo esc_url($courses_index_url); ?>" class="block" aria-label="Back to courses">
      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
        <path d="M8 15L1 8L8 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
  </div>

  <div class="wp-block-cover__inner-container relative z-10">
    <div class="wp-block-group py-12 px-8 max-w-6xl mx-auto">

      <h1 class="wp-block-heading text-white text-5xl font-bold">
        <?php echo esc_html($post_title); ?>
      </h1>

      <?php if ($cert) : ?>
        <p class="text-white text-sm">
          ⭐ <strong><?php echo esc_html($cert); ?></strong>
        </p>
      <?php endif; ?>

      <?php if ($content) : ?>
        <p class="text-white text-base mt-4 mb-6">
          <?php echo apply_filters('the_content', $content); ?>
        </p>
      <?php endif; ?>

      <?php if ($prereq) : ?>
        <p class="text-white text-sm">
          <strong>Prerequisites:</strong> <?php echo esc_html($prereq); ?>
        </p>
      <?php endif; ?>

      <div class="wp-block-group flex flex-wrap gap-6 mt-6">
        <?php if ($duration) : ?>
          <p class="text-white text-sm">🕐 <strong><?php echo esc_html($duration); ?></strong></p>
        <?php endif; ?>

        <?php if ($learning_mode) : ?>
          <p class="text-white text-sm">🏫 <strong><?php echo esc_html($learning_mode); ?></strong></p>
        <?php endif; ?>

        <?php if ($assessment) : ?>
          <p class="text-white text-sm">📝 <strong><?php echo esc_html($assessment); ?></strong></p>
        <?php endif; ?>
      </div>

      <div class="wp-block-buttons flex gap-4 mt-8">

        <div class="wp-block-button">
          <a class="wp-block-button__link inline-block bg-blue-600 text-white px-6 py-2 rounded-full font-medium no-underline hover:bg-blue-700 transition-colors"
              href="<?php echo esc_url($enroll_url); ?>">
            Enroll
          </a>
        </div>

          <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link inline-block border-2 border-white text-white px-6 py-2 rounded-full font-medium no-underline hover:bg-white hover:text-gray-900 transition-all"
                href="<?php echo esc_url($brochure_url); ?>" target="_blank" rel="noopener">
              Download Brochure
            </a>
          </div>

      </div>

    </div>
  </div>
</div>
<!-- /wp:cover -->
