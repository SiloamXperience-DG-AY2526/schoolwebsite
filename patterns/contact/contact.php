<?php

/**
 * Title: Contact Us Page
 * Slug: svlti/contact
 * Categories: page
 */
?>

<!-- wp:group {"className":"bg-gradient-to-b from-white to-elm-60 min-h-screen font-sans","layout":{"type":"constrained"}} -->
<div class="wp-block-group bg-gradient-to-b from-white to-elm-60 min-h-screen font-sans">

    <!-- wp:group {"className":"max-w-screen mx-auto pl-8 pr-16 py-12","layout":{"type":"constrained"}} -->
    <div class="wp-block-group max-w-screen mx-auto pl-8 pr-16 py-12">

        <!-- wp:columns {"className":"flex gap-12"} -->
        <div class="wp-block-columns flex gap-12">

        <!-- wp:template-part {"slug":"side-menu-contact"} /-->


            <!-- wp:column {"className":"flex-1"} -->
            <div class="wp-block-column flex-1">

                <!-- wp:heading {"level":2,"className":"text-header-xxl text-eucalyptus-100 mb-6"} -->
                <h2 class="wp-block-heading text-header-xxl text-eucalyptus-100 mb-6">Contact Us</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"text-neutral-120 text-paragraph-lg mb-8 max-w-3xl"} -->
                <p class="text-neutral-120 text-paragraph-lg mb-8 max-w-3xl">
                    We'd love to hear from you! Whether you're a parent, student, partner, or volunteer, please use the form below and our team will get back to you within 2–3 business days.
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"bg-neutral-0 rounded-2xl shadow-lg p-10","layout":{"type":"constrained"}} -->
                <div class="wp-block-group bg-neutral-0 rounded-2xl shadow-lg p-10">

                    <!-- wp:html -->
                    <form class="space-y-6" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <?php wp_nonce_field('svlti_contact_form', 'svlti_contact_nonce'); ?>
                        <input type="hidden" name="action" value="svlti_contact_form">


                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-paragraph-sm font-semibold text-neutral-200 mb-2">
                                    Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Your Name"
                                    class="w-full px-4 py-3 border border-neutral-40 rounded-lg focus:outline-none focus:ring-2 focus:ring-eucalyptus-100 focus:border-transparent placeholder:text-neutral-80 text-paragraph-normal"
                                    required>
                            </div>
                            <div>
                                <label for="email" class="block text-paragraph-sm font-semibold text-neutral-200 mb-2">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="Your Email"
                                    class="w-full px-4 py-3 border border-neutral-40 rounded-lg focus:outline-none focus:ring-2 focus:ring-eucalyptus-100 focus:border-transparent placeholder:text-neutral-80 text-paragraph-normal"
                                    required>
                            </div>
                        </div>


                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="inquiry-type" class="block text-paragraph-sm font-semibold text-neutral-200 mb-2">
                                    Inquiry Type <span class="text-red-500">*</span>
                                </label>
                                <select
                                    id="inquiry-type"
                                    name="inquiry_type"
                                    class="w-full px-4 py-3 border border-neutral-40 rounded-lg focus:outline-none focus:ring-2 focus:ring-eucalyptus-100 focus:border-transparent text-paragraph-normal text-neutral-80 bg-neutral-0"
                                    required>
                                    <option value="">Select an option</option>
                                    <option value="General Enquiry">General Enquiry</option>
                                    <option value="Admissions & Enrolment">Admissions & Enrolment</option>
                                    <option value="Academic Programmes">Academic Programmes</option>
                                    <option value="Events & Activities">Events & Activities</option>
                                    <option value="Fees & Payment">Fees & Payment</option>
                                    <option value="Volunteering & Community Service">Volunteering & Community Service</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div>
                                <label for="specify" class="block text-paragraph-sm font-semibold text-neutral-200 mb-2">
                                    If others, please specify. <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="specify"
                                    name="specify"
                                    placeholder="Specify"
                                    class="w-full px-4 py-3 border border-neutral-40 rounded-lg focus:outline-none focus:ring-2 focus:ring-eucalyptus-100 focus:border-transparent placeholder:text-neutral-80 text-paragraph-normal">
                            </div>
                        </div>


                        <div>
                            <label for="message" class="block text-paragraph-sm font-semibold text-neutral-200 mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Tell us more..."
                                class="w-full px-4 py-3 border border-neutral-40 rounded-lg focus:outline-none focus:ring-2 focus:ring-eucalyptus-100 focus:border-transparent placeholder:text-neutral-80 resize-none text-paragraph-normal"
                                required></textarea>
                        </div>


                        <div class="flex justify-end mt-8">
                            <button
                                type="submit"
                                class="bg-eucalyptus-100 hover:bg-eucalyptus-110 text-neutral-0 text-button-lg px-16 py-4 rounded-lg transition-colors shadow-md">
                                Submit
                            </button>
                        </div>
                    </form>
                    <!-- /wp:html -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->