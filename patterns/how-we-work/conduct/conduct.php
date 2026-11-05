<?php

/**
 * Title: Conduct Details Section
 * Slug: svlti/conduct-details
 */

$minor_offences = [
    ['Disruptive behaviour', 'When a child talks out of turn or interrupts learning time, it can disturb others. Addressing this helps the child learn self-control and understand the importance of giving others space to focus.'],
    ['Lateness', 'Arriving late to class or activities can affect group progress. By noticing this, the child learns to value time, plan ahead, and respect the schedule of the community.'],
    ['Disrespect', 'Using unkind words, gestures, or tone toward peers or teachers can hurt feelings. Guiding the child here helps them practice empathy and choose more caring ways to express themselves.'],
    ['Neglect of responsibility', 'Forgetting homework, tasks, or group duties can let others down. Supporting the child to improve builds reliability and shows how each person’s contribution matters.'],
];

$restorative = [
    ['Reflective conversation', 'The child talks with a teacher or peer about what happened, why it happened, and how to improve. This helps them build self-awareness and problem-solving skills.'],
    ['Apology and acknowledgement', 'The child practices saying sorry in a sincere and respectful way. This helps them take responsibility for their actions and rebuild trust with others.'],
    ['Community service', 'The child contributes by helping the class or school community, like organizing materials or tidying shared spaces. This nurtures a sense of responsibility and belonging.'],
];
?>


<!-- wp:group {"className":"relative w-full","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group relative flex w-full">

    <!-- wp:heading {"className":"text-4xl font-semibold mb-6 gap-3"} -->
    <h2 class="wp-block-heading flex flex-col text-[28px] md:text-[36px] 2xl:text-[66px] text-left font-semibold mb-6 gap-3">

        <span class="drop-shadow text-[#333333]">Building <span class="text-dark-green">Respectful</span> And</span>
        <span class="text-dark-green drop-shadow">Caring Relationships</span>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"gap-5","layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group flex flex-col gap-5">

        <!-- wp:heading {"className":"text-2xl font-semibold text-[#1a3b5d]"} -->
        <h2 class="text-[20px] md:text-[24px] 2xl:text-[40px] font-semibold text-[#1a3b5d]">Minor Offences</h2>
        <!-- /wp:heading -->

        <?php svlti_accordion($minor_offences, 'svlti-minor-offences'); ?>

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"gap-5","layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group flex flex-col gap-5">

        <!-- wp:heading {"className":"text-2xl font-semibold text-[#1a3b5d]"} -->
        <h2 class="text-[20px] md:text-[24px] 2xl:text-[40px] font-semibold text-[#1a3b5d]">Restorative Practices</h2>
        <!-- /wp:heading -->

        <?php svlti_accordion($restorative, 'svlti-restorative'); ?>
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->