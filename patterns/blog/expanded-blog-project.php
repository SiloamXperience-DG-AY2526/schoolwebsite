<?php

/**
 * Title: Expanded Blog Project Page
 * Slug: svlti/expanded-blog-project
 * Categories: page
 */
?>


<!-- wp:group {"className":"relative w-full","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group relative flex flex-col w-full">

    <!-- wp:heading {"level":1,"className":"text-header-xxxl font-bold text-eucalyptus-110 mb-8 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"} -->
    <h1 class="wp-block-heading text-header-xxxl font-bold text-eucalyptus-110 mb-8 drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
        Highlights of Student Projects
    </h1>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"w-full pt-8"} -->
    <div class="wp-block-group w-full pt-8">
        <!-- wp:pattern {"slug":"svlti/highlight-buttons"} /-->
    </div>
    <!-- /wp:group -->


    <!-- wp:group {"className":"bg-white w-full rounded-lg p-12 relative"} -->
    <div class="wp-block-group bg-white w-full rounded-lg p-12 relative">

        <!-- wp:image {"className":"w-[22px] absolute left-4 top-4"} -->
        <figure class="wp-block-image w-[22px] absolute left-4 top-4">
            <a href="/blog/highlights">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/abstract/chevron.png" alt="chevron" />
            </a>
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"flex gap-10"} -->
        <div class="wp-block-group flex gap-10">

            <!-- wp:group {"className":"w-3/5"} -->
            <div class="wp-block-group w-3/5">

                <!-- wp:heading {"level":2,"className":"text-header-xl text-eucalyptus-110 mb-8 py-3"} -->
                <h2 class="wp-block-heading text-header-xl text-eucalyptus-110 mb-8 py-3 2xl:text-6xl">
                    Empowering Teachers in Phnom Penh
                </h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"mb-4"} -->
                <p class="mb-4 2xl:text-2xl">
                    A Fruitful Train-the-Trainer- learning that transfers, and transforms.
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"mb-4"} -->
                <p class="mb-4 2xl:text-2xl">
                    2 years ago, I stood in a small classroom in Phnom Penh, surrounded by eager faces
                    ready to learn how to use a computer for the first time. Together with a team from
                    Siloam Xperience Singapore, we ran a 4-day Computer Literacy for the Workplace course.
                    It was basic—but it was a start. We left hoping something would take root but we didn't
                    expect what happened next.
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"mb-4"} -->
                <p class="mb-4 2xl:text-2xl">
                    Months later, we recruited the same trainees to train others. They initiated a 3-month
                    course in Khmer and basic English for their peers. As they kept going, their confidence grew.
                    The real fruit wasn't in the replication but in the ownership.
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"mb-4"} -->
                <p class="mb-4 2xl:text-2xl">
                    It taught me a hard truth. In any learning initiative, no idea—no matter how
                    innovative—will ever lead to lasting transformation unless one question is answered:
                    Are there people willing to journey with the learner?
                    And in Cambodia, this hits harder. Are there Cambodians in senior leadership roles
                    willing to come alongside their own people as mentors?
                    In Singapore—those of us with access and expertise—are we willing to walk longer with
                    those just beginning?
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"mb-4"} -->
                <p class="mb-4 2xl:text-2xl">
                    This experience affirms one belief I hold dearly: Beyond certificates,
                    fluency or background, a learning disposition enables anyone to grow and perform—when
                    supported with the right relationships.
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p class="2xl:text-2xl">
                    Let's co-create something that doesn't just teach—but transforms lives.
                </p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:image {"className":"w-2/5 h-full object-cover rounded-lg"} -->
            <figure class="wp-block-image w-2/5 h-full object-cover rounded-lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/expanded/teaching.png" alt="teaching" />
            </figure>
            <!-- /wp:image -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->