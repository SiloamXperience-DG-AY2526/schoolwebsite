<?php
/**
 * Title: Fees Section
 * Slug: svlti/feedback-form
 */

if ( ! function_exists('render_wpform_by_title') ) {
  function render_wpform_by_title( string $title, bool $show_title = false, bool $show_desc = false ): void {
      if ( ! function_exists('wpforms_display') ) return;

      $form = get_page_by_title( $title, OBJECT, 'wpforms' );
      if ( ! $form || $form->post_status === 'trash' ) return;

      wpforms_display( (int) $form->ID, $show_title, $show_desc );
  }
}
?>


<!-- wp:group {"className":"flex flex-col justify-center"} -->
<div class="wp-block-group flex flex-col justify-center">

  <!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl font-bold text-dark-green mb-6 drop-shadow"} -->
  <h2 class="wp-block-heading text-3xl md:text-4xl font-bold text-dark-green mb-6 drop-shadow">
    Feedback Form
  </h2>
  <!-- /wp:heading -->


  <?php render_wpform_by_title('Feedback Form'); ?>


</div>
<!-- /wp:group -->

