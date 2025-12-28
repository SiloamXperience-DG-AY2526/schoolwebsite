<?php

/**
 * Title: Create Listing Section
 * Slug: svlti/create-listing-v2
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

<!-- wp:group {"className":"relative w-full","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group relative flex flex-col w-full">

    <!-- wp:heading {"className":"text-[56px] font-semibold"} -->
    <h2 class="wp-block-heading text-header-xxl text-left font-semibold">
        <span class="drop-shadow">Add a New Listing</span>

    </h2>
    <!-- /wp:heading -->
    <!-- wp:group {"className":"flex items-center gap-2 mb-8 flex-wrap","layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group flex justify-center items-center gap-2 mb-8 py-8 flex-wrap w-full">

        <div class="flex items-center gap-2.5">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none">
                <circle cx="17.5" cy="17.5" r="17" stroke="#5AD3B3" />
                <path d="M26.5 11.41L14.5 23.41L9 17.91L10.41 16.5L14.5 20.58L25.09 10L26.5 11.41Z" fill="#5AD3B3" />
            </svg>
            <span class="text-slate-700 text-base font-semibold">Company Details</span>
        </div>

        <div class="flex items-center gap-2.5">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none">
                <circle cx="17.5" cy="17.5" r="17" stroke="#5AD3B3" />
                <path d="M26.5 11.41L14.5 23.41L9 17.91L10.41 16.5L14.5 20.58L25.09 10L26.5 11.41Z" fill="#5AD3B3" />
            </svg>
            <span class="text-slate-700 text-base font-semibold">Internship Information</span>
        </div>

        <div class="flex items-center gap-2.5">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none">
                <circle cx="17.5" cy="17.5" r="17" stroke="#5AD3B3" />
                <path d="M26.5 11.41L14.5 23.41L9 17.91L10.41 16.5L14.5 20.58L25.09 10L26.5 11.41Z" fill="#5AD3B3" />
            </svg>
            <span class="text-slate-700 text-base font-semibold">Description & Responsibilities</span>
        </div>

        <div class="flex items-center gap-2.5">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none">
                <circle cx="17.5" cy="17.5" r="17" stroke="#5AD3B3" />
                <path d="M26.5 11.41L14.5 23.41L9 17.91L10.41 16.5L14.5 20.58L25.09 10L26.5 11.41Z" fill="#5AD3B3" />
            </svg>
            <span class="text-slate-700 text-base font-semibold">Preview and Submission</span>
        </div>

    </div>
    <!-- /wp:group -->

    <!-- Actual WP Form -->
    <div class="wpforms-hidden">    
        <?php render_wpform_by_title('Job Listing Form'); ?>
    </div>  

    <!-- Submission status -->
    <div id="job-status" style="display:none; padding:16px; border-radius:12px; background:#f3f4f6;">
        <div data-state="loading" style="display:none;">Submitting…</div>
        <div data-state="success" style="display:none;">✅ Submitted successfully!</div>
        <div data-state="error" style="display:none;">
            ❌ <span id="job-status-error">Submission failed. Please try again.</span>
        </div>
    </div>


    <!-- UI Form -->
    <div id="job-ui" class="accordion-container space-y-4 w-full flex flex-col items-start">

        <div class="accordion-item bg-eucalyptus-70 rounded-2xl overflow-hidden w-full transition-colors duration-300">
            <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
                Company Details
                <span class="icon text-2xl leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20" />
                    </svg>
                </span>
            </button>
            <div class="accordion-content bg-white rounded-b-2xl shadow-lg p-7">

                <h2 class="text-eucalyptus-120 text-xl font-bold mb-6">
                    Company Details
                </h2>


                <div class="space-y-[18px] mb-10">


                    <div class="flex gap-[72px] flex-wrap">
                        <div class="flex-1 min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Company Name <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Your Company Name"
                                name="company_name"
                                class="w-full h-[57px] px-6 py-5 border border-eucalyptus-120 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Company Address <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Your Company Address"
                                name="company_address"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>
                    </div>


                    <div class="flex gap-[72px] flex-wrap">
                        <div class="flex-1 min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Industry / Sector <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Your Industry"
                                name="industry"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Company Email
                            </label>
                            <input
                                type="text"
                                placeholder="Your Company Email"
                                name="company_email"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>
                    </div>


                    <div>
                        <label class="block text-sm font-bold mb-1">
                            Brief Description about the Company
                        </label>
                        <textarea
                            placeholder="Tell us more..."
                            name="company_description"
                            class="w-full h-[94px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm resize-none placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none"></textarea>
                    </div>

                </div>


                <h2 class="text-eucalyptus-120 text-xl font-bold mb-6">
                    PoC Details
                </h2>

                <div class="space-y-[18px]">

                    <div class="flex gap-[72px] flex-wrap">
                        <div class="flex-1 min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                PoC Name <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Your PoC Name"
                                name="poc_name"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                PoC Email Address <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="email"
                                placeholder="Your PoC Email Address"
                                name="poc_email"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>
                    </div>

                    <div class="flex gap-[72px] flex-wrap">
                        <div class="flex-1 min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                PoC Contact Number <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="tel"
                                placeholder="Your PoC Contact Number"
                                name="poc_contact"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-1 min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                PoC Designation <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Your PoC Designation"
                                name="poc_designation"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="accordion-item bg-eucalyptus-70 rounded-2xl overflow-hidden w-full transition-colors duration-300">
            <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
                Internship Details
                <span class="icon text-2xl leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20" />
                    </svg>
                </span>
            </button>
            <div class="accordion-content bg-white rounded-b-2xl shadow-lg p-7">

                <h2 class="text-eucalyptus-120 text-xl font-bold mb-6">
                    Administrative Internship Details
                </h2>

                <div class="space-y-[18px] mb-10">


                    <div class="flex gap-[72px] flex-wrap">
                        <div class="flex-1 min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Internship Title <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Internship Title"
                                name="internship_title"
                                class="w-full h-[57px] px-6 py-5 border border-eucalyptus-120 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Location <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Location"
                                name="internship_location"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>
                    </div>


                    <div class="flex gap-[72px] flex-wrap">
                        <div class="flex-1 min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Internship Mode <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Internship Mode"
                                name="internship_mode"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Allowance <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="$"
                                name="internship_allowance"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>
                    </div>


                    <div>
                        <label class="block text-sm font-bold mb-1">
                            Duration <span class="text-eucalyptus-100">*</span>
                        </label>
                        <input
                            type="text"
                            placeholder="1 month/ 3 months / 6 months"
                            name="internship_duration"
                            class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                    </div>

                </div>

            </div>

        </div>

        <div class="accordion-item bg-eucalyptus-70 rounded-2xl overflow-hidden w-full transition-colors duration-300">
            <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
                Description & Responsibilities
                <span class="icon text-2xl leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20" />
                    </svg>
                </span>
            </button>
            <div class="accordion-content bg-white rounded-b-2xl shadow-lg p-7">

                <h2 class="text-eucalyptus-120 text-xl font-bold mb-6">
                    Further Internship Details
                </h2>


                <div class="space-y-[18px] mb-10">


                    <div>
                        <label class="block text-sm font-bold mb-1">
                            Job Description <span class="text-eucalyptus-100">*</span>
                        </label>
                        <input
                            type="text"
                            placeholder="Tell us more..."
                            name="job_description"
                            class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                    </div>


                    <div>
                        <label class="block text-sm font-bold mb-1">
                            Key Responsibilities <span class="text-eucalyptus-100">*</span>
                        </label>
                        <input
                            type="text"
                            placeholder="Tell us more (in point form)"
                            name="key_responsibilities"
                            class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                    </div>


                    <div>
                        <label class="block text-sm font-bold mb-1">
                            Requirements <span class="text-eucalyptus-100">*</span>
                        </label>
                        <input
                            type="text"
                            placeholder="Tell us more..."
                            name="requirements"
                            class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                    </div>

                </div>

            </div>

        </div>
        <div class="accordion-item bg-eucalyptus-70 rounded-2xl overflow-hidden w-full transition-colors duration-300">
            <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
                Preview and Submission
                <span class="icon text-2xl leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20" />
                    </svg>
                </span>
            </button>
            <div class="accordion-content bg-white rounded-b-2xl shadow-lg p-7">

            </div>
        </div>

    </div>

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons flex justify-end pt-8">
        <!-- wp:button {"className":"join-button"} -->
        <div class="wp-block-button submit-button cursor-pointer 2xl:text-xl">
            <a id="job-submit" href="#" class="wp-block-button__link">
                Submit
            </a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->


</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const wpform = document.querySelector('form.wpforms-form');
  if (!wpform) return;

  function setStatus(state, message) {
    const box = document.getElementById('job-status');
    if (!box) return;

    box.style.display = 'block';
    box.querySelectorAll('[data-state]').forEach(el => (el.style.display = 'none'));

    const panel = box.querySelector(`[data-state="${state}"]`);
    if (panel) panel.style.display = 'block';

    if (state === 'error') {
      const msgEl = document.getElementById('job-status-error');
      if (msgEl) msgEl.textContent = message || 'Submission failed. Please check your inputs.';
    }

  }

  function clearWpformsErrors(formEl) {
    // remove field error labels/messages
    formEl.querySelectorAll(
      'label.wpforms-error, em.wpforms-error, span.wpforms-error, .wpforms-error-msg'
    ).forEach(el => el.remove());

    // remove error wrapper classes (WPForms commonly uses these)
    formEl.querySelectorAll('.wpforms-has-error').forEach(el => el.classList.remove('wpforms-has-error'));

    // also clear any top/general error blocks if present
    formEl.querySelectorAll('.wpforms-error-container, .wpforms-error').forEach(el => {
      // avoid nuking structural elements; safest is to empty text
      // (comment out if it breaks your form)
      // el.textContent = '';
    });
  }

  function getFirstWpformsFieldErrorInfo(formEl) {
    // Prefer errors inside a field wrapper
    const errEl = formEl.querySelector(
      '.wpforms-field label.wpforms-error,' +
      '.wpforms-field em.wpforms-error,' +
      '.wpforms-field span.wpforms-error,' +
      '.wpforms-field .wpforms-error-msg'
    );

    if (!errEl) return null;

    const msg = (errEl.textContent || '').trim();
    if (!msg) return null;

    const fieldWrap = errEl.closest('.wpforms-field');
    if (!fieldWrap) return { label: null, msg };

    const labelEl = fieldWrap.querySelector('.wpforms-field-label');
    const label = labelEl ? labelEl.textContent.replace(/\*/g, '').trim() : null;

    return { label, msg };
  }

    let runId = 0;
    let obs = null;
    let timeoutId = null;

    function cleanup() {
    if (obs) { obs.disconnect(); obs = null; }
    if (timeoutId) { clearTimeout(timeoutId); timeoutId = null; }
    }

    function finish(myRunId, state, message) {
        if (myRunId !== runId) return; // ignore stale callbacks
        cleanup();
        setStatus(state, message);
    }

    function startWatchingForResult() {
        const myRunId = ++runId;
        cleanup();

        const check = () => {
            // success
            if (wpform.querySelector('.wpforms-confirmation-container, .wpforms-confirmation-scroll')) {
                if (myRunId !== runId) return;
                cleanup();
                setStatus('success');
                return true;
            }

            // error
            const info = getFirstWpformsFieldErrorInfo(wpform);
            if (info) {
                finish(myRunId, 'error', info.label ? `${info.label}: ${info.msg}` : info.msg);
                return true;
            }

            return false;
        };

        // observe DOM
        obs = new MutationObserver(check);
        obs.observe(wpform, { subtree: true, childList: true, characterData: true });

        // timeout fallback
        timeoutId = setTimeout(() => {
            if (!check()) finish(myRunId, 'error', 'Submission failed. Please try again.');
        }, 6000);

        // run once immediately
        check();

        return myRunId;
    }


  // Use jQuery events (WPForms often triggers these)
  if (window.jQuery) {
    jQuery(document).on('wpformsAjaxSubmitSuccess', function () {
        finish(runId, 'success');
    });

    jQuery(document).on('wpformsAjaxSubmitFailed wpformsAjaxSubmitError', function () {
        setTimeout(() => {
            const info = getFirstWpformsFieldErrorInfo(wpform);
            finish(runId, 'error', info ? (info.label ? `${info.label}: ${info.msg}` : info.msg) : 'Submission failed.');
        }, 50);
    });

  }

  // map slug with WP Field
  const map = {
    company_name: 2,
    industry: 3,
    company_address: 4,
    company_email: 5,
    company_description: 9,
    poc_name: 10,
    poc_email: 11,
    poc_designation: 12,
    poc_contact: 13,
    internship_title: 14,
    internship_mode: 15,
    internship_location: 16,
    internship_allowance: 17,
    internship_duration: 18,
    job_description: 19,
    key_responsibilities: 20,
    requirements: 21,
  };

  function setWpField(fieldId, value) {
    const wrap = wpform.querySelector(`.wpforms-field[data-field-id="${fieldId}"]`);
    if (!wrap) return;
    const el = wrap.querySelector('input, textarea, select');
    if (!el) return;

    el.value = value ?? '';
    el.dispatchEvent(new Event('input', { bubbles: true }));
    el.dispatchEvent(new Event('change', { bubbles: true }));
  }

  document.getElementById('job-submit')?.addEventListener('click', (e) => {
    e.preventDefault();
    clearWpformsErrors(wpform);
    setStatus('loading');

    Object.entries(map).forEach(([name, fieldId]) => {
      const src = document.querySelector(`#job-ui [name="${name}"]`);
      if (src) setWpField(fieldId, src.value);
    });

    // start watcher before submitting to watch for DOM updates
    startWatchingForResult();

    wpform.requestSubmit ? wpform.requestSubmit() : wpform.submit();
  });
});
</script>



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


<style>
  .wpforms-hidden {
    position: absolute !important;
    left: -99999px !important;
    top: auto !important;
    width: 1px !important;
    height: 1px !important;
    overflow: hidden !important;
    opacity: 0 !important;
    pointer-events: none !important;
  }
</style>
<!-- /wp:html -->

</div>
<!-- /wp:group -->