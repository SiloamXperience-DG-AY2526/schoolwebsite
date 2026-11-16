<?php
// Register block pattern categories
function svlti_register_pattern_categories() {
    register_block_pattern_category(
        'internship',
        array( 'label' => __( 'Internship Cards', 'svlti' ) )
    );
}
add_action( 'init', 'svlti_register_pattern_categories' );

function svlti_setup() {
  add_theme_support('title-tag');
  add_theme_support('align-wide');
  add_theme_support('editor-styles');
  add_theme_support('block-template-parts');
  add_editor_style([
    'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap',
    'assets/css/main.css',
    'assets/css/custom.css',
    'assets/css/editor.css',
  ]);
}
add_action('after_setup_theme', 'svlti_setup');

// Block templates already render a title; Rank Math must not render a second one.
function svlti_avoid_duplicate_block_title() {
  if (false !== has_action('wp_head', '_block_template_render_title_tag')) {
    remove_action('rank_math/head', '_wp_render_title_tag', 1);
  }
}
add_action('wp_head', 'svlti_avoid_duplicate_block_title', 0);


function svlti_scripts() {
  // Google Fonts import
  wp_enqueue_style(
    'svlti-fonts',
    'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap',
    array(),
    null
  );

  // Enqueue Tailwind and custom CSS on frontend
  wp_enqueue_style(
    'svlti-main',
    get_template_directory_uri() . '/assets/css/main.css',
    array(),
    filemtime(get_template_directory() . '/assets/css/main.css')
  );

  wp_enqueue_style(
    'custom-styles',
    get_template_directory_uri() . '/assets/css/custom.css',
    array(),
    filemtime(get_template_directory() . '/assets/css/custom.css')
  );

  // Header phone menu: tap-to-expand groups and Tab looping (see the file's header comment).
  wp_enqueue_script(
    'svlti-header-menu',
    get_template_directory_uri() . '/assets/js/header-menu.js',
    array(),
    filemtime(get_template_directory() . '/assets/js/header-menu.js'),
    array('in_footer' => true, 'strategy' => 'defer')
  );
}
add_action('wp_enqueue_scripts', 'svlti_scripts');

// Register default terms for all taxonomies
function svlti_seed_tax() {
  // Seed event-audience
  $tax = 'event-audience';
  if (taxonomy_exists($tax)) {
    $terms = [
      'All'      => 'all',
      'Parents'  => 'parents',
      'Students' => 'students',
    ];

    foreach ($terms as $name => $slug) {
      if (!term_exists($slug, $tax)) {
        wp_insert_term($name, $tax, ['slug' => $slug]);
      }
    }
  }

  // Seed course-pillar
  $tax = 'course-pillar';
  if (taxonomy_exists($tax)) {
    $terms = [
      'Computer'             => 'computer',
      'Empathy & Community'  => 'empathy-community',
      'English Competencies' => 'english-competencies',
      'Tourism & Hospitality'=> 'tourism-hospitality',
    ];

    foreach ($terms as $name => $slug) {
      if (!term_exists($slug, $tax)) {
        wp_insert_term($name, $tax, ['slug' => $slug]);
      }
    }
  }

  // Seed project-categories
  $tax = 'project-category';
  if (taxonomy_exists($tax)) {
    $terms = [
      'Teaching'             => 'teaching',
      'Training & Programmes'=> 'training-programmes',
      'Farming'              => 'farming',
      'Admin'                => 'admin',
      'Social Media'         => 'social-media',
    ];

    foreach ($terms as $name => $slug) {
      if (!term_exists($slug, $tax)) {
        wp_insert_term($name, $tax, ['slug' => $slug]);
      }
    }
  }

  // Job Function
  $tax = 'job-function';
  if (taxonomy_exists($tax)) {
    $terms = [
      'Accounting'                 => 'accounting',
      'Banks'                      => 'banks',
      'Chemicals'                  => 'chemicals',
      'Consulting'                 => 'consulting',
      'Distribution and Logistics' => 'distribution-and-logistics',
      'Education'                  => 'education',
    ];

  foreach ($terms as $name => $slug) {
      if (!term_exists($slug, $tax)) {
        wp_insert_term($name, $tax, ['slug' => $slug]);
      }
    }
  }

  // Job Type
  $tax = 'job-type';
  if (taxonomy_exists($tax)) {
    $terms = [
      'Part-time Intern'        => 'part-time-intern',
      'Full-time Intern'        => 'full-time-intern',
      'Fresh Graduate Jobs'     => 'fresh-graduate-jobs',
    ];

    foreach ($terms as $name => $slug) {
      if (!term_exists($slug, $tax)) {
        wp_insert_term($name, $tax, ['slug' => $slug]);
      }
    }
  }

  // Blog Categories 
  $tax = 'blog-category';
  if (taxonomy_exists($tax)) {
    $terms = [
      'Reflections'        => 'reflections',
      'Student Projects'   => 'student-projects',
      'Community Service'  => 'community-service',
      'Learning Journeys'  => 'learning-journeys',
    ];

    foreach ($terms as $name => $slug) {
      if (!term_exists($slug, $tax)) {
        wp_insert_term($name, $tax, ['slug' => $slug]);
      }
    }
  }
}
add_action('init', 'svlti_seed_tax');


// Accordion script (Policies, Conduct, Assessments, Fees)
function svlti_accordion_script() {
  wp_enqueue_script(
    'svlti-accordion',
    get_template_directory_uri() . '/assets/js/accordion.js',
    array(),
    filemtime(get_template_directory() . '/assets/js/accordion.js'),
    array('in_footer' => true, 'strategy' => 'defer')
  );
}
add_action('wp_enqueue_scripts', 'svlti_accordion_script');

/**
 * Print an accessible accordion.
 *
 * @param array  $items         List of [title, body]. Body may contain basic HTML.
 * @param string $id            Unique id for this accordion on the page.
 * @param int    $heading_level Heading level wrapping each toggle button.
 */
function svlti_accordion(array $items, string $id, int $heading_level = 3) {
  $h = max(2, min(6, $heading_level));
  echo '<div class="svlti-acc" id="' . esc_attr($id) . '" data-svlti-accordion>';
  foreach (array_values($items) as $i => $item) {
    [$title, $body] = $item;
    $item_id = $id . '-' . ($i + 1);
    echo '<div class="svlti-acc__item" data-svlti-acc-item>';
    printf(
      '<h%1$d class="svlti-acc__heading"><button type="button" class="svlti-acc__toggle" id="%2$s-button" aria-expanded="false" aria-controls="%2$s-panel"><span>%3$s</span>'
      . '<svg class="svlti-acc__icon" aria-hidden="true" focusable="false" width="28" height="28" viewBox="0 0 36 36"><path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="currentColor"/></svg>'
      . '</button></h%1$d>',
      $h,
      esc_attr($item_id),
      esc_html($title)
    );
    printf(
      '<div class="svlti-acc__panel" id="%1$s-panel" role="region" aria-labelledby="%1$s-button" hidden>%2$s</div>',
      esc_attr($item_id),
      wp_kses_post(wpautop($body))
    );
    echo '</div>';
  }
  echo '</div>';
}

/**
 * Print a search box that filters the accordion with the given id.
 */
function svlti_accordion_search(string $target_id, string $label) {
  printf(
    '<div class="svlti-acc-search"><label for="%1$s-search">%2$s</label>'
    . '<input type="search" id="%1$s-search" data-svlti-acc-search="%1$s" autocomplete="off" />'
    . '<p class="svlti-acc-search__status" id="%1$s-status" role="status" aria-live="polite"></p></div>',
    esc_attr($target_id),
    esc_html($label)
  );
}
