<?php

/**
 * Title: Announcement  Page
 * Slug: svlti/announcementsToParents
 * Categories: page
 */
?>


<!-- wp:group {"className":"relative w-full","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group relative flex flex-col w-full">

    <!-- wp:heading {"level":1,"className":"text-[64px] font-bold text-eucalyptus-110 mb-8 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"} -->
    <h1 class="wp-block-heading text-header-xxxl font-bold text-eucalyptus-100 mb-8 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
        Announcements to Parents
    </h1>
    <!-- /wp:heading -->

    <?php
    $announcements = [
        [
            'title' => 'Parent–Teacher Conferences (Years 1–6) — 17 July',
            'content' => 'Payments can be made via bank transfer, cheque, or through the school\'s online payment portal.'
        ],
        [
            'title' => 'School Closed for Pchum Ben - 24 May',
            'content' => 'The school will be closed on 24 September for Pchum Ben. Normal lessons will resume on the next scheduled school day. Please contact the office if you need assistance with childcare arrangements.'
        ],
        [
            'title' => 'Annual Sports Day Reminder — 7 April',
            'content' => 'Payments can be made via bank transfer, cheque, or through the school\'s online payment portal.'
        ],
        [
            'title' => 'Payment Reminder: Term 2 Fees - 1 Jan',
            'content' => 'Payments can be made via bank transfer, cheque, or through the school\'s online payment portal.'
        ]
    ];
    ?>
    <!-- wp:html -->
    <div class="accordion-container space-y-4 w-full flex flex-col items-start">

        <?php foreach ($announcements as $announcement): ?>
            <div class="accordion-item border-b-2 border-eucalyptus-120 overflow-hidden w-full transition-colors duration-300">
                <button class="accordion-toggle w-full text-left font-semibold text-lg py-4 px-6 flex justify-between items-center text-black">
                    <?php echo esc_html($announcement['title']); ?>
                    <span class="icon text-2xl leading-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <path d="M18 23.1L9 14.1L11.1 12L18 18.9L24.9 12L27 14.1L18 23.1Z" fill="#1D1B20" />
                        </svg>
                    </span>
                </button>
                <div class="accordion-content hidden px-6 py-5 text-eucalyptus-120">
                    <?php echo esc_html($announcement['content']); ?>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <!-- /wp:html -->

</div>
<!-- /wp:column -->



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
                document.querySelectorAll(".icon").forEach(i => i.classList.remove("rotate-180"));
                document.querySelectorAll(".accordion-toggle").forEach(t => t.classList.remove("text-white"));

                // Expand current accordion
                if (!expanded) {
                    content.classList.remove("hidden");
                    btn.classList.add("text-black");
                    icon.classList.add("rotate-180")
                }
            });
        });
    });
</script>