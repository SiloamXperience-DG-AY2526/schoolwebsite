<?php

/**
 * Title: Assessments Hero Section
 * Slug: svlti/assessments
 */
?>

<!-- wp:group {"className":"relative w-full min-h-[90vh]","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group relative flex flex-wrap w-full min-h-[90vh]">

    <!-- wp:group {"className":"items-start justify-center h-[75vh] bg-[#7EDDC3]/60 flex-1","layout":{"type":"flex","orientation":"horizontal"}} -->
    <div class="wp-block-group flex flex-col items-end justify-center h-[75vh] bg-[#7EDDC3]/60 flex-1">

        <!-- wp:group {"className":"max-w-3xl","layout":{"type":"flex"}} -->
        <div class="wp-block-group flex-col items-end p-12 w-2/3 2xl:w-1/2 ml-auto">

            <!-- wp:heading {"className":"text-[34px] md:text-[38px] lg:text-[42px] 2xl:text-[56px] font-semibold mb-6"} -->
            <h2 class="wp-block-heading text-[34px] md:text-[38px] lg:text-[42px] 2xl:text-[56px] text-right font-semibold mb-6">
                <span class="text-dark-green drop-shadow">Assessments</span>
                <span class="drop-shadow text-white">&amp;</span>
                <span class="text-dark-green drop-shadow"> Progression</span>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-gray-800 leading-relaxed"} -->
            <p class="text-gray-800 font-medium text-[16px] md:text-[16px] lg:text-[18px] 2xl:text-[20px] text-right leading-relaxed">
                We care for children and support families by keeping our school safe, welcoming, and fair.
                These guidelines show what we value and how we work together for every child’s best.
            </p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image {"sizeSlug":"large","className":"absolute -top-4 left-4 w-[10rem] lg:w-[18rem] xl:w-[22rem] 2xl:w-[30rem] shadow-lg z-10"} -->
    <figure class="wp-block-image corner-images size-medium absolute -top-4 left-4 w-[10rem] lg:w-[18rem] xl:w-[22rem] 2xl:w-[30rem] shadow-lg z-10">
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/how-we-work/assessment.png"
            alt="Children in classroom" />
    </figure>
    <!-- /wp:image -->

</div>
<!-- /wp:group -->