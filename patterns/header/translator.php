<?php 
/**
 * Title: Translate Button
 * Slug: svlti/translate-button
 */
?>

<?php
// Show the switcher only once its plugin has registered the shortcode (plugin due 27 Nov).
if ( shortcode_exists( 'language-switcher' ) ) : ?>
<!-- wp:shortcode -->
<?php echo do_shortcode('[language-switcher]'); ?>
<!-- /wp:shortcode -->
<?php endif; ?>
