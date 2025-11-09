<?php
/**
 * Title: Fees Section
 * Slug: svlti/feedback-form
 */
?>


<!-- wp:group {"className":"flex flex-col justify-center"} -->
<div class="wp-block-group flex flex-col justify-center">

  <!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl font-bold text-dark-green mb-6 drop-shadow"} -->
  <h2 class="wp-block-heading text-3xl md:text-4xl font-bold text-dark-green mb-6 drop-shadow">
    Feedback Form
  </h2>
  <!-- /wp:heading -->


  <!-- wp:group {"className":"w-full max-w-5xl bg-white rounded-3xl shadow-lg px-6 md:px-10 lg:px-12 py-8 md:py-10","layout":{"type":"constrained"}} -->
  <div class="wp-block-group w-full max-w-5xl bg-white rounded-3xl shadow-lg px-6 md:px-10 lg:px-12 py-8 md:py-10">

    <!-- wp:html -->
    <form class="space-y-6">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="flex flex-col gap-2">
          <label class="text-sm font-semibold text-gray-800">
            Name <span class="text-[#24A47A]">*</span>
          </label>
          <input
            type="text"
            name="name"
            required
            placeholder="Your Name"
            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm md:text-base placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#24A47A] focus:border-[#24A47A]"
          />
        </div>

        <div class="flex flex-col gap-2">
          <label class="text-sm font-semibold text-gray-800">
            Email <span class="text-[#24A47A]">*</span>
          </label>
          <input
            type="email"
            name="email"
            required
            placeholder="Your Email"
            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm md:text-base placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#24A47A] focus:border-[#24A47A]"
          />
        </div>
      </div>

      <div class="flex flex-col gap-2">
        <label class="text-sm font-semibold text-gray-800">
          Feedback Type <span class="text-[#24A47A]">*</span>
        </label>
        <div class="relative inline-block w-full max-w-xl">
        <select
          name="feedback_type"
          required
          class="appearance-none w-full rounded-xl border border-gray-300 px-4 py-3 text-sm md:text-base text-gray-400 bg-white focus:outline-none focus:ring-1 focus:ring-[#24A47A] focus:border-[#24A47A]"
        >
          <option value="">Select an option</option>
          <option value="compliment">Teaching and Learning</option>
          <option value="concern">Student Experience and Wellbeing</option>
          <option value="suggestion">Facilities and Learning Environment</option>
          <option value="suggestion">Programmes and Opportunities</option>
          <option value="suggestion">Overall Satisfaction and Suggestions</option>
          <option value="other">Others</option>
        </select>

        <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M6 9L12 15L18 9" stroke="#1E1E1E" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>

      </div>

      <div class="flex flex-col gap-2">
        <label class="text-sm font-semibold text-gray-800">
          Description <span class="text-[#24A47A]">*</span>
        </label>
        <textarea
          name="description"
          required
          rows="4"
          placeholder="Tell us more..."
          class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm md:text-base placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#24A47A] focus:border-[#24A47A] resize-y"
        ></textarea>
      </div>

      <!-- wp:buttons {"className":"flex justify-end pt-2","layout":{"type":"flex","justifyContent":"end"}} -->
      <div class="wp-block-buttons flex justify-end pt-2">
      <!-- wp:button {"className":"text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]"} -->
      <div class="wp-block-button hero-button text-white font-semibold rounded-md bg-gradient-to-r from-[#2CA585] to-[#2C89A5]">
        <a class="wp-block-button__link wp-element-button"> Submit </a>
      </div>
      <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->

    </form>
    <!-- /wp:html -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->

