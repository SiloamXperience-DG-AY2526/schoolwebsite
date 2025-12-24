<?php

/**
 * Title: Create Listing Section
 * Slug: svlti/create-listing
 */
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


    <!-- wp:html -->
    <div class="accordion-container space-y-4 w-full flex flex-col items-start">

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
                                class="w-full h-[57px] px-6 py-5 border border-eucalyptus-120 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Company Address <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Your Company Address"
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
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Company Website
                            </label>
                            <input
                                type="text"
                                placeholder="Your Company Website"
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>
                    </div>


                    <div>
                        <label class="block text-sm font-bold mb-1">
                            Brief Description about the Company
                        </label>
                        <textarea
                            placeholder="Tell us more..."
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
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                PoC Email Address <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="email"
                                placeholder="Your PoC Email Address"
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
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-1 min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                PoC Designation <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Your PoC Designation"
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
                                class="w-full h-[57px] px-6 py-5 border border-eucalyptus-120 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Location <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Location"
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
                                class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                        </div>

                        <div class="flex-[1.7] min-w-[313px]">
                            <label class="block text-sm font-bold mb-1">
                                Allowance <span class="text-eucalyptus-100">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="$"
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
                            class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                    </div>


                    <div>
                        <label class="block text-sm font-bold mb-1">
                            Key Responsibilities <span class="text-eucalyptus-100">*</span>
                        </label>
                        <input
                            type="text"
                            placeholder="Tell us more (in point form)."
                            class="w-full h-[57px] px-6 py-5 border border-neutral-80/50 rounded-xl text-sm placeholder:text-neutral-20 focus:ring-2 focus:ring-eucalyptus-100 focus:outline-none" />
                    </div>


                    <div>
                        <label class="block text-sm font-bold mb-1">
                            Requirements <span class="text-eucalyptus-100">*</span>
                        </label>
                        <input
                            type="text"
                            placeholder="Tell us more..."
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
            <a href="/" class="wp-block-button__link">
                Submit
            </a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->


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