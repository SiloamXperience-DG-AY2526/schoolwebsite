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

// These home-page pattern images sit below the hero and bypass content image optimisation.
function svlti_lazy_load_home_images($block_content) {
  if (!is_front_page()) {
    return $block_content;
  }

  $image = new WP_HTML_Tag_Processor($block_content);
  if (!$image->next_tag('IMG')) {
    return $block_content;
  }

  $base = get_template_directory_uri() . '/assets/images/home/';
  $sources = array('mission-1.png', 'mission-1.webp', 'mission-2.png', 'vision.png', 'vision.webp');
  $src = $image->get_attribute('src');
  if (!in_array($src, array_map(static function ($name) use ($base) {
    return $base . $name;
  }, $sources), true) || $image->get_attribute('loading') !== null || $image->get_attribute('fetchpriority') === 'high') {
    return $block_content;
  }

  $image->set_attribute('loading', 'lazy');
  if ($image->get_attribute('decoding') === null) {
    $image->set_attribute('decoding', 'async');
  }
  return $image->get_updated_html();
}
add_filter('render_block_core/image', 'svlti_lazy_load_home_images');


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

