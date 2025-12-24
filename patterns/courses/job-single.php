<?php
/**
 * Title: Job Single Card
 * Slug: svlti/job-single
 */

$post_id = get_queried_object_id();
if (!$post_id) {
  return;
}

$job_title    = get_the_title($post_id);
$job_content  = apply_filters('the_content', get_post_field('post_content', $post_id));

$excerpt      = get_field('excerpt', $post_id);
$location     = get_field('location', $post_id);
$salary       = get_field('salary', $post_id);

$dur1         = get_field('duration_pt_1', $post_id);
$dur2         = get_field('duration_pt_2', $post_id);
$duration     = trim((string) $dur1 . ' ' . (string) $dur2);

$company_name = get_field('company_name', $post_id);
$company_logo = function_exists('get_field') ? get_field('company_logo', $post_id) : null;

// optional (if you add it later)
$apply_url = '#';
if (function_exists('get_field')) {
  $apply_url = (string) (get_field('apply_url', $post_id) ?: get_field('application_link', $post_id) ?: '#');
}

$logo_html = '';
if (is_array($company_logo) && !empty($company_logo['ID'])) {
  $logo_html = wp_get_attachment_image(
    (int) $company_logo['ID'],
    'medium',
    false,
    ['class' => 'w-20 h-20 object-contain']
  );
} elseif (is_numeric($company_logo)) {
  $logo_html = wp_get_attachment_image(
    (int) $company_logo,
    'medium',
    false,
    ['class' => 'w-20 h-20 object-contain']
  );
}

function svlti_icon($name) {
  // tiny inline SVGs (no dependencies)
  if ($name === 'briefcase') {
    return '<svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 6h4"/><path d="M10 6a2 2 0 0 0-2 2v1h8V8a2 2 0 0 0-2-2"/><path d="M4 10h16v9a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-9Z"/></svg>';
  }
  if ($name === 'pin') {
    return '<svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11Z"/><path d="M12 10.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/></svg>';
  }
  if ($name === 'money') {
    return '<svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7h18v10H3z"/><path d="M7 7v10"/><path d="M17 7v10"/><path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/></svg>';
  }
  if ($name === 'clock') {
    return '<svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22a10 10 0 1 0-10-10 10 10 0 0 0 10 10Z"/><path d="M12 6v6l4 2"/></svg>';
  }
  return '';
}
?>

<!-- wp:html -->
<div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm p-8">
  <!-- Back arrow -->
  <div class="wp-block-group absolute left-4 top-4 w-[22px] z-20">
    <a href="/courses/jobs" class="block" aria-label="Back to courses">
      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
        <path d="M8 15L1 8L8 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
  </div>
  <div class="flex items-start justify-between gap-8">

    <!-- Left content -->
    <div class="min-w-0">
      <div class="flex items-center gap-4 mb-4">
        <?php if ($logo_html) : ?>
          <div class="shrink-0">
            <?= $logo_html ?>
          </div>
        <?php endif; ?>

        <div class="min-w-0">
          <?php if ($company_name) : ?>
            <p class="text-sm text-gray-500 mb-1"><?= esc_html($company_name) ?></p>
          <?php endif; ?>
          <h1 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight">
            <?= esc_html($job_title) ?>
          </h1>
        </div>
      </div>

      <?php if ($excerpt) : ?>
        <p class="text-gray-700 mb-5">
          <?= nl2br(esc_html($excerpt)) ?>
        </p>
      <?php endif; ?>

      <div class="space-y-3 text-sm text-gray-700">
        <?php if ($company_name) : ?>
          <div class="flex items-center gap-3">
            <span class="text-gray-500"><?= svlti_icon('briefcase') ?></span>
            <span><?= esc_html($company_name) ?></span>
          </div>
        <?php endif; ?>

        <?php if ($location) : ?>
          <div class="flex items-center gap-3">
            <span class="text-gray-500"><?= svlti_icon('pin') ?></span>
            <span><?= esc_html($location) ?></span>
          </div>
        <?php endif; ?>

        <?php if ($salary) : ?>
          <div class="flex items-center gap-3">
            <span class="text-gray-500"><?= svlti_icon('money') ?></span>
            <span><?= esc_html($salary) ?></span>
          </div>
        <?php endif; ?>

        <?php if ($duration) : ?>
          <div class="flex items-center gap-3">
            <span class="text-gray-500"><?= svlti_icon('clock') ?></span>
            <span><?= esc_html($duration) ?></span>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Right button -->
    <div class="shrink-0 self-end">
      <a href="<?= esc_url($apply_url) ?>"
         class="inline-flex items-center justify-center px-8 py-3 rounded-lg text-sm font-semibold text-white bg-emerald-600 hover:bg-emerald-700 transition">
        Apply
      </a>
    </div>

  </div>
</div>
<!-- /wp:html -->
