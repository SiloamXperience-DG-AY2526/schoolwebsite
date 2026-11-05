<?php

/**
 * Title: Policies Section
 * Slug: svlti/policies
 */

$policies = [
    ['Safeguarding', "Your child's safety comes first. Our staff are trained to protect children, listen carefully, and act quickly if there is a concern. We always put wellbeing at the heart of what we do."],
    ['Uniform', "Uniform helps children feel part of the school family. We ask families to support our dress code. If you have difficulties, please talk to us — we're here to help."],
    ['Inclusion', 'Every child belongs here. We celebrate differences and support every learner. Our goal is for each child to feel valued and succeed.'],
    ['Behaviour & Respect', 'We believe in kindness, respect, and responsibility. Good choices are celebrated. When mistakes happen, we guide children to make things right.'],
    ['Homework', 'Homework gives children a chance to practice and share learning at home. It should be clear, useful, and not overwhelming. We encourage families to take part when possible.'],
];
?>

<!-- wp:group {"className":"w-full","layout":{"flex","orientation":"horizontal"}} -->
<div class="wp-block-group flex flex-col w-full gap-6">

    <!-- wp:group {"className":"text-center","layout":{"type":"flex","orientation":"horizontal"}} -->
    <div class="wp-block-group flex flex-col gap-3 text-center">
        <!-- wp:heading {"className":"text-4xl font-bold text-gray-900"} -->
        <h2 class="wp-block-heading text-[36px] xl:text-[48px] 2xl:text-[60px] font-bold text-[#333333]">
            Policies That Put
        </h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"className":"text-4xl font-bold text-dark-green"} -->
        <h2 class="wp-block-heading text-[36px] xl:text-[48px] 2xl:text-[60px] font-bold text-dark-green">
            Students First
        </h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:html -->
    <div class="flex flex-col gap-6 w-full px-4">
        <?php svlti_accordion_search('svlti-policies', 'Search policies'); ?>
        <?php svlti_accordion($policies, 'svlti-policies'); ?>
    </div>
    <!-- /wp:html -->

</div>
<!-- /wp:group -->
