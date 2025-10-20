<?php
function svlti_setup() {
  add_theme_support('title-tag');
  add_theme_support('align-wide');
  add_theme_support('editor-styles');
  add_editor_style([
    'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap',
    'assets/css/main.css',
    'assets/css/custom.css',
    'assets/css/editor.css',
  ]);
}
add_action('after_setup_theme', 'svlti_setup');


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
}
add_action('wp_enqueue_scripts', 'svlti_scripts');

