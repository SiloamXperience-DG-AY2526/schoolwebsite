<?php
/**
 * Title: Meet the Team Grid
 * Slug: svlti/meet-the-team-v2
 */
?>

<!-- wp:group {"className":"py-12 sm:py-16 lg:py-20","layout":{"type":"constrained"}} -->
<div class="wp-block-group py-12 sm:py-16 lg:py-20">

    <!-- wp:group {"className":"max-w-6xl mx-auto px-4 sm:px-6","layout":{"type":"constrained"}} -->
    <div class="wp-block-group max-w-6xl mx-auto px-4 sm:px-6">

        <!-- wp:group {"className":"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 sm:gap-14 lg:gap-16 justify-items-center w-fit mx-auto"} -->
        <div class="wp-block-group grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 sm:gap-14 lg:gap-16 justify-items-center w-fit mx-auto">

            <?php
            $team_query = new WP_Query([
                'post_type'      => 'team-member',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                ]);

            if ($team_query->have_posts()) :
            while ($team_query->have_posts()) : $team_query->the_post();
                $post_id = get_the_ID();

                $name  = get_field('name', $post_id) ?: get_the_title($post_id);
                $role  = get_field('role', $post_id);
                $image = get_field('profile_image', $post_id); // image return format is Array
                $img_url = '';
                $img_alt = $name;

                if (is_array($image) && !empty($image['url'])) {
                $img_url = $image['url'];
                $img_alt = !empty($image['alt']) ? $image['alt'] : $name;
                } elseif (is_int($image)) {
                // if return format = Image ID
                $img_url = wp_get_attachment_image_url($image, 'full');
                $img_alt = get_post_meta($image, '_wp_attachment_image_alt', true) ?: $name;
                }
            ?>
            <div class="wp-block-group text-left w-50">
                <div class="wp-block-group mb-8 inline-block relative">
                <div class="absolute -bottom-5 -right-5 w-48 h-56 bg-elm-120 z-0"></div>

                <figure class="wp-block-image size-full relative z-10 overflow-hidden bg-white w-48 h-56">
                    <?php if ($img_url) : ?>
                    <img src="<?= esc_url($img_url) ?>" alt="<?= esc_attr($img_alt) ?>" />
                    <?php else : ?>
                    <div class="w-48 h-56 flex items-center justify-center text-sm opacity-60">
                        No image
                    </div>
                    <?php endif; ?>
                </figure>
                </div>

                <h3 class="text-header-normal text-eucalyptus-110 mb-1">
                <?= esc_html($name) ?>
                </h3>

                <?php if ($role) : ?>
                <p class="text-black text-paragraph-normal">
                    <?= esc_html($role) ?>
                </p>
                <?php endif; ?>
            </div>

            <?php
            endwhile;
            wp_reset_postdata();
            else :
            echo '<p class="text-sm opacity-70">No team members found.</p>';
            endif;
            ?>


        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->