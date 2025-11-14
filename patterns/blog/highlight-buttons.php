<?php

/**
 * Title: Highlight Buttons
 * Slug: svlti/highlight-buttons
 */
?>

<!-- wp:buttons {"className":"!grid grid-cols-5 gap-4 mb-12 w-full"} -->
<div class="wp-block-buttons !grid grid-cols-5 gap-4 mb-12 w-full">

    <?php
    $buttons = [
        ['title' => 'All', 'url' => '/blog'],
        ['title' => 'Reflections', 'url' => '/blog/highlights/reflections'],
        ['title' => 'Student Projects', 'url' => '/blog/highlights/student-projects'],
        ['title' => 'Community Service', 'url' => '/blog/highlights/community-service'],
        ['title' => 'Learning Journeys', 'url' => '/blog/highlights/learning-journeys'],
    ];
    ?>

    <?php foreach ($buttons as $button): ?>
        <!-- wp:button {"className":"filter-button w-full"} -->
        <div class="wp-block-button filter-button w-full">
            <a class="wp-block-button__link wp-element-button" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?></a>
        </div>
        <!-- /wp:button -->
    <?php endforeach; ?>

</div>
<!-- /wp:buttons -->