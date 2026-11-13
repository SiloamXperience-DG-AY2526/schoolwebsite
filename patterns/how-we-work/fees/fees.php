<?php
/**
 * Title: Fees Section
 * Slug: svlti/fees
 */

// [Placeholder] Real fees, schedule and funding details to come from SVLTI (content due 20 Nov).
$fee_rows = [
    ['[Course name]', '[TBC]', '[Tuition, materials, certification]'],
    ['[Course name]', '[TBC]', '[Tuition, materials, certification]'],
];

$schedule_rows = [
    ['[First instalment]', '[Start of term, TBC]'],
    ['[Second instalment]', '[Mid-term, TBC]'],
];

$fee_faqs = [
    ['How can I make a payment?', 'Payments can be made via bank transfer, cheque, or through the school’s online payment portal.'],
    ['Can fees be paid in instalments?', 'Yes, instalment plans are available upon request. Please contact our administration office to arrange a schedule that suits your family.'],
    ['When are school fees due?', 'School fees are usually due at the start of each term. Paying on time helps the school plan for resources and activities for all children.'],
    ['What should I do if I have difficulty paying on time?', 'Please contact the school’s finance team as soon as possible. We aim to support families by finding flexible arrangements where needed.'],
    ['Are there additional costs besides school fees?', 'Additional costs may include uniforms, field trips, and optional extracurricular activities. These will be communicated in advance.'],
];
?>

<!-- wp:group {"className":"relative w-full","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group relative flex flex-col w-full">

  <!-- wp:heading {"className":"text-[56px] font-semibold"} -->
  <h2 class="wp-block-heading text-[56px] text-left font-semibold">
    <span class="drop-shadow text-dark-green">Fees</span>
    <span class="text-black drop-shadow">&amp; </span>
    <span class="text-dark-green drop-shadow"> Payment Procedure</span>
  </h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"className":"text-gray-800 leading-relaxed pb-5"} -->
  <p class="text-gray-800 font-medium leading-relaxed pb-5">
    We value openness and partnership with families. Our payment process is designed to be transparent, flexible, 
    and supportive, so every child’s learning journey can continue without stress.
  </p>
  <!-- /wp:paragraph -->

  <!-- wp:html -->
  <div class="flex flex-col gap-10 w-full">

    <section aria-labelledby="fees-breakdown">
      <h3 id="fees-breakdown" class="text-[20px] md:text-[24px] font-semibold text-[#1a3b5d] mb-4">Fee breakdown</h3>
      <div class="svlti-table-wrap">
        <table class="svlti-table">
          <caption class="sr-only">Fees per course</caption>
          <thead>
            <tr><th scope="col">Course</th><th scope="col">Fee</th><th scope="col">What it covers</th></tr>
          </thead>
          <tbody>
            <?php foreach ($fee_rows as [$course, $fee, $covers]) : ?>
            <tr><td><?= esc_html($course) ?></td><td><?= esc_html($fee) ?></td><td><?= esc_html($covers) ?></td></tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>

    <section aria-labelledby="fees-schedule">
      <h3 id="fees-schedule" class="text-[20px] md:text-[24px] font-semibold text-[#1a3b5d] mb-4">Payment schedule</h3>
      <div class="svlti-table-wrap">
        <table class="svlti-table">
          <caption class="sr-only">When payments are due</caption>
          <thead>
            <tr><th scope="col">Instalment</th><th scope="col">Due</th></tr>
          </thead>
          <tbody>
            <?php foreach ($schedule_rows as [$instalment, $due]) : ?>
            <tr><td><?= esc_html($instalment) ?></td><td><?= esc_html($due) ?></td></tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>

    <section aria-labelledby="fees-faq">
      <h3 id="fees-faq" class="text-[20px] md:text-[24px] font-semibold text-[#1a3b5d] mb-4">Payments and financial help</h3>
      <?php svlti_accordion($fee_faqs, 'svlti-fee-faqs', 4); ?>
    </section>

  </div>
  <!-- /wp:html -->

</div>
<!-- /wp:group -->
