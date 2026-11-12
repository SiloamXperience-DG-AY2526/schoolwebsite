<?php
/**
 * Title: Course Page Feature Info
 * Slug: svlti/course
 */
?>

<?php

$post_id = get_queried_object_id();
if (!$post_id) {
  echo '<p>No course found.</p>';
  return;
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
$courses_page = get_page_by_path('courses');
$courses_index_url = $courses_page ? get_permalink($courses_page) : home_url('/courses');
$summary = [
  'Registration status' => get_field('course_registration_status', $post_id),
  'Schedule' => get_field('course_schedule', $post_id),
  'Location' => get_field('course_location', $post_id),
  'Availability' => get_field('course_availability', $post_id),
  'Fees' => get_field('course_fees', $post_id),
];
$tabs = [
  'about' => ['About', $content ? apply_filters('the_content', $content) : ''],
  'topics' => ['Course Topics', get_field('course_topics', $post_id)],
  'assessment' => ['Assessment', get_field('course_assessment_details', $post_id)],
  'resources' => ['Learning Resources', get_field('course_resources', $post_id)],
];
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

      <?php if ($excerpt) : ?>
        <p class="text-white text-base mt-4 mb-6"><?php echo esc_html($excerpt); ?></p>
      <?php endif; ?>

      <?php if (array_filter($summary)) : ?>
        <dl class="text-white flex flex-wrap gap-6 mt-6">
          <?php foreach (array_filter($summary) as $label => $value) : ?>
            <div><dt><?php echo esc_html($label); ?></dt><dd><strong><?php echo esc_html($value); ?></strong></dd></div>
          <?php endforeach; ?>
        </dl>
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

<section class="max-w-6xl mx-auto px-8 py-8" id="svlti-course-tabs" aria-label="Course information">
  <div class="mb-6" data-tab-list hidden>
    <?php foreach ($tabs as $id => [$label, $body]) : ?>
      <button type="button" id="course-tab-<?php echo esc_attr($id); ?>" class="px-2 py-2 border-b-2"
        data-panel="course-panel-<?php echo esc_attr($id); ?>"><?php echo esc_html($label); ?></button>
    <?php endforeach; ?>
  </div>
  <?php foreach ($tabs as $id => [$label, $body]) : ?>
    <section class="p-6 mb-4 bg-gray-100 rounded-lg" id="course-panel-<?php echo esc_attr($id); ?>">
      <h2 class="text-xl font-bold mb-3"><?php echo esc_html($label); ?></h2>
      <?php if ($body) : ?>
        <?php echo $id === 'about' ? $body : wpautop(esc_html($body)); ?>
      <?php endif; ?>
      <?php if ($id === 'about') : ?>
        <?php foreach (['course_outcomes' => 'What You’ll Learn', 'course_skills' => 'Skills You’ll Gain'] as $field => $heading) :
          $value = get_field($field, $post_id);
          if (!$value) continue; ?>
          <h3 class="font-bold mt-4"><?php echo esc_html($heading); ?></h3>
          <?php echo wpautop(esc_html($value)); ?>
        <?php endforeach; ?>
      <?php elseif ($id === 'assessment' && !$body && $assessment) : ?>
        <p><?php echo esc_html($assessment); ?></p>
      <?php elseif ($id === 'resources' && $brochure_url) : ?>
        <a href="<?php echo esc_url($brochure_url); ?>">Download brochure</a>
      <?php elseif (!$body) : ?>
        <p>Details to be confirmed.</p>
      <?php endif; ?>
    </section>
  <?php endforeach; ?>
</section>
<script>
(function () {
  const list = document.querySelector('#svlti-course-tabs [data-tab-list]');
  const tabs = Array.from(list.querySelectorAll('button'));
  list.setAttribute('role', 'tablist');
  list.setAttribute('aria-label', 'Course information');
  list.hidden = false;
  function activate(index, focus = false) {
    tabs.forEach((tab, i) => {
      const panel = document.getElementById(tab.dataset.panel);
      const active = i === index;
      tab.setAttribute('aria-selected', String(active));
      tab.tabIndex = active ? 0 : -1;
      tab.style.borderColor = active ? '#2b8c77' : 'transparent';
      panel.hidden = !active;
    });
    if (focus) tabs[index].focus();
  }
  tabs.forEach((tab, index) => {
    const panel = document.getElementById(tab.dataset.panel);
    tab.setAttribute('role', 'tab');
    tab.setAttribute('aria-controls', panel.id);
    panel.setAttribute('role', 'tabpanel');
    panel.setAttribute('aria-labelledby', tab.id);
    panel.tabIndex = 0;
    tab.addEventListener('click', () => activate(index));
    tab.addEventListener('keydown', (event) => {
      const last = tabs.length - 1;
      const next = {ArrowLeft: index ? index - 1 : last, ArrowRight: index === last ? 0 : index + 1, Home: 0, End: last}[event.key];
      if (next === undefined) return;
      event.preventDefault();
      activate(next, true);
    });
  });
  activate(0);
})();
</script>
