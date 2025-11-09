<?php
/**
 * Title: Fees Section
 * Slug: svlti/fees
 */
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
  <div class="accordion-container space-y-4 w-full flex flex-col items-start">

    <div class="accordion-item bg-eucalyptus-70 rounded-lg overflow-hidden w-full transition-colors duration-300">
      <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
        How can I make a payment?
        <span class="icon text-2xl leading-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20"/>
          </svg>
        </span>
      </button>
      <div class="accordion-content hidden px-6 py-5 bg-[#F6F7F8] text-gray-800">
        Payments can be made via bank transfer, cheque, or through the school’s online payment portal.
      </div>
    </div>

    <div class="accordion-item bg-eucalyptus-70 rounded-lg overflow-hidden w-full transition-colors duration-300">
      <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
        Can fees be paid in instalments?
        <span class="icon text-2xl leading-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20"/>
          </svg>
        </span>
      </button>
      <div class="accordion-content hidden px-6 py-5 bg-[#F6F7F8] text-gray-800">
        Yes, instalment plans are available upon request. Please contact our administration office to arrange a schedule that suits your family.
      </div>
    </div>

    <div class="accordion-item bg-eucalyptus-70 rounded-lg overflow-hidden w-full transition-colors duration-300">
      <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
        When are school fees due?
        <span class="icon text-2xl leading-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20"/>
          </svg>
        </span>
      </button>
      <div class="accordion-content hidden px-6 py-5 bg-[#F6F7F8] text-gray-800">
        School fees are usually due at the start of each term. Paying on time helps the school plan for resources and activities for all children.
      </div>
    </div>

    <div class="accordion-item bg-eucalyptus-70 rounded-lg overflow-hidden w-full transition-colors duration-300">
      <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
        What should I do if I have difficulty paying on time?
        <span class="icon text-2xl leading-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20"/>
          </svg>
        </span>
      </button>
      <div class="accordion-content hidden px-6 py-5 bg-[#F6F7F8] text-gray-800">
        Please contact the school’s finance team as soon as possible. We aim to support families by finding flexible arrangements where needed.
      </div>
    </div>

    <div class="accordion-item bg-eucalyptus-70 rounded-lg overflow-hidden w-full transition-colors duration-300">
      <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
        Are there additional costs besides school fees?
        <span class="icon text-2xl leading-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20"/>
          </svg>
        </span>
      </button>
      <div class="accordion-content hidden px-6 py-5 bg-[#F6F7F8] text-gray-800">
        Additional costs may include uniforms, field trips, and optional extracurricular activities. These will be communicated in advance.
      </div>
    </div>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const accordions = document.querySelectorAll(".accordion-toggle");

      accordions.forEach(btn => {
        btn.addEventListener("click", () => {
          const content = btn.nextElementSibling;
          const parent = btn.parentElement;
          const icon = btn.querySelector(".icon");
          const expanded = !content.classList.contains("hidden");

          // Reset all accordions
          document.querySelectorAll(".accordion-content").forEach(el => el.classList.add("hidden"));
          document.querySelectorAll(".accordion-item").forEach(item => {
            item.classList.remove("bg-eucalyptus-100");
            item.classList.add("bg-eucalyptus-70");
          });
          document.querySelectorAll(".icon").forEach(i => i.classList.remove("rotate-180"));
          document.querySelectorAll(".accordion-toggle").forEach(t => t.classList.remove("text-white"));

          // Expand current accordion
          if (!expanded) {
            content.classList.remove("hidden");
            parent.classList.remove("bg-eucalyptus-70");
            parent.classList.add("bg-eucalyptus-100");
            btn.classList.add("text-white");
            icon.classList.add("rotate-180")          
          }
        });
      });
    });
  </script>
  <!-- /wp:html -->

</div>
<!-- /wp:group -->
