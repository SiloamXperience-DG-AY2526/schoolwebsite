<?php
// Register block pattern categories
function svlti_register_pattern_categories()
{
    register_block_pattern_category(
        'internship',
        array('label' => __('Internship Cards', 'svlti'))
    );
}
add_action('init', 'svlti_register_pattern_categories');

function svlti_setup()
{
    add_theme_support('title-tag');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('block-template-parts');
    add_editor_style([
        'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap',
        'assets/css/main.css',
        'assets/css/custom.css',
        'assets/css/editor.css',
    ]);
}
add_action('after_setup_theme', 'svlti_setup');


function svlti_scripts()
{
    // Google Fonts import
    wp_enqueue_style(
        'svlti-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap',
        array(),
        null
    );

    // Enqueue Tailwind and custom CSS on frontend
    wp_enqueue_style(
        'svlti-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    wp_enqueue_style(
        'custom-styles',
        get_template_directory_uri() . '/assets/css/custom.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/custom.css')
    );
}
add_action('wp_enqueue_scripts', 'svlti_scripts');



// Register Events Custom Post Type 
// To use it, first save changes in settings/permalink 
// Then go to event and audience and add what ever audience you want (student/parent)
// Then not sure why but have to go directly in the event page and add the event by clicking the plus button during preview 
// Later once the event is published, you can assign it to the target audience
function svlti_register_events_cpt()
{
    // Define all the text labels that appear in the WordPress admin for this post type
    $labels = array(
        'name'                  => _x('Events', 'Post type general name', 'svlti'), // Plural name
        'singular_name'         => _x('Event', 'Post type singular name', 'svlti'), // Singular name
        'menu_name'             => _x('Events', 'Admin Menu text', 'svlti'), // Text in admin sidebar menu
        'add_new'               => __('Add New', 'svlti'), // Button text
        'add_new_item'          => __('Add New Event', 'svlti'), // Page title when creating new
        'new_item'              => __('New Event', 'svlti'), // Submenu text
        'edit_item'             => __('Edit Event', 'svlti'), // Page title when editing
        'view_item'             => __('View Event', 'svlti'), // Link text to view on frontend
        'all_items'             => __('All Events', 'svlti'), // Submenu for viewing all
        'search_items'          => __('Search Events', 'svlti'), // Search button text
        'not_found'             => __('No events found.', 'svlti'), // Message when no events exist
        'not_found_in_trash'    => __('No events found in Trash.', 'svlti'), // Message when trash is empty
    );

    // Define the behavior and features of this post type
    $args = array(
        'labels'             => $labels, // Use the labels we defined above
        'public'             => true, // Make it visible on the frontend and in admin
        'publicly_queryable' => true, // Allow queries 
        'show_ui'            => true, // Show the admin interface
        'show_in_menu'       => true, // Show in the admin sidebar menu
        'query_var'          => true, // Allow query variables
        'rewrite'            => array('slug' => 'events'), // URL structure
        'capability_type'    => 'post', // Use same permissions as regular posts
        'has_archive'        => true,
        'hierarchical'       => false, // Not hierarchical like pages 
        'menu_position'      => 5, // Position in admin menu
        'menu_icon'          => 'dashicons-calendar-alt', // Calendar icon in admin menu
        'supports'           => array('title', 'editor', 'thumbnail'), // What features this post type has
        'show_in_rest'       => true, // Enable block editor and REST API
    );

    register_post_type('event', $args); // 'event' is the internal name of the post type on wordpress
}
// Run when WordPress initializes
add_action('init', 'svlti_register_events_cpt');



//  Register Event Audience Taxonomy
//  Creates categories for events 
//  Think of it like post categories, but specifically for events
//  Important because events can be under parent, student or both 
function svlti_register_event_audience_taxonomy()
{
    // Define all the text labels for this taxonomy in the admin
    $labels = array(
        'name'              => _x('Event Audiences', 'taxonomy general name', 'svlti'), // Plural name
        'singular_name'     => _x('Event Audience', 'taxonomy singular name', 'svlti'), // Singular name
        'search_items'      => __('Search Audiences', 'svlti'), // Search button text
        'all_items'         => __('All Audiences', 'svlti'), // Link to view all
        'edit_item'         => __('Edit Audience', 'svlti'), // Page title when editing
        'update_item'       => __('Update Audience', 'svlti'), // Button text when updating
        'add_new_item'      => __('Add New Audience', 'svlti'), // Link text to add new
        'new_item_name'     => __('New Audience Name', 'svlti'), // Label for name field
        'menu_name'         => __('Audiences', 'svlti'), // Submenu text under Events
    );

    // Defines the way it works 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels, // Use the labels we defined above
        'show_ui'           => true, // Show the admin interface
        'show_admin_column' => true, // Show as a column in the events list table
        'query_var'         => true, // Allow query variables
        'rewrite'           => array('slug' => 'event-audience'), // URL structure
        'show_in_rest'      => true, // Enable in block editor and REST API
    );

    // Register and connect it to the 'event' post type
    register_taxonomy('event_audience', array('event'), $args);
}
// Run when WordPress initializes
add_action('init', 'svlti_register_event_audience_taxonomy');


//  Add Event Meta Fields
//  Meta fields store extra data about events 
//  This registers them so they can be used 
//  We need details about the event like dat time location 

function svlti_register_event_meta_fields()
{
    // Register the event date field 
    register_post_meta('event', 'event_date', array(
        'type'         => 'string', 
        'single'       => true, 
        'show_in_rest' => true, 
    ));

    // Register the event start time field
    register_post_meta('event', 'event_time_start', array(
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
    ));

    // Register the event end time field 
    register_post_meta('event', 'event_time_end', array(
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
    ));

    // Register the event location field 
    register_post_meta('event', 'event_location', array(
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
    ));
}
// Run when WordPress initializes
add_action('init', 'svlti_register_event_meta_fields');

// Create meta boxes 
// Easier for users to understand and use 
function svlti_add_event_meta_box()
{
    // Add a meta box (admin panel) for event details
    add_meta_box(
        'event_details', 
        __('Event Details', 'svlti'), 
        'svlti_event_meta_box_callback', 
        'event', // Which post type to show 
        'normal', 
        'high' // Prioirty on the screen
    );
}
// Run when meta boxes are being added
add_action('add_meta_boxes', 'svlti_add_event_meta_box');


// Call back function that runs when the meta box is opened
// Displays the actual form fields in the Event Details box
function svlti_event_meta_box_callback($post)
{
    // Add a security field to prevent CSRF attacks
    wp_nonce_field('svlti_save_event_meta', 'svlti_event_meta_nonce');

    // Get the current values from the database 
    $event_date = get_post_meta($post->ID, 'event_date', true); 
    $event_time_start = get_post_meta($post->ID, 'event_time_start', true); 
    $event_time_end = get_post_meta($post->ID, 'event_time_end', true); 
    $event_location = get_post_meta($post->ID, 'event_location', true); 
?>
    <!-- HTML form  -->
    <table class="form-table">
        <tr>

            <th><label for="event_date"><?php _e('Event Date', 'svlti'); ?></label></th>
            <td>
                
                <input type="date" id="event_date" name="event_date" value="<?php echo esc_attr($event_date); ?>" class="regular-text" required>
                <p class="description"><?php _e('Select the date of the event', 'svlti'); ?></p>
            </td>
        </tr>
        <tr>

            <th><label for="event_time_start"><?php _e('Start Time', 'svlti'); ?></label></th>
            <td>

                <input type="time" id="event_time_start" name="event_time_start" value="<?php echo esc_attr($event_time_start); ?>" class="regular-text" required>
                <p class="description"><?php _e('Event start time', 'svlti'); ?></p>
            </td>
        </tr>
        <tr>

            <th><label for="event_time_end"><?php _e('End Time', 'svlti'); ?></label></th>
            <td>

                <input type="time" id="event_time_end" name="event_time_end" value="<?php echo esc_attr($event_time_end); ?>" class="regular-text" required>
                <p class="description"><?php _e('Event end time', 'svlti'); ?></p>
            </td>
        </tr>
        <tr>

            <th><label for="event_location"><?php _e('Location', 'svlti'); ?></label></th>
            <td>

                <input type="text" id="event_location" name="event_location" value="<?php echo esc_attr($event_location); ?>" class="regular-text" placeholder="School Auditorium" required>
                <p class="description"><?php _e('Where the event takes place', 'svlti'); ?></p>
            </td>
        </tr>
    </table>
<?php
}

// Save event meta 
// Takes the data and publishes or drafts 
function svlti_save_event_meta($post_id)
{

    if (
        !isset($_POST['svlti_event_meta_nonce']) ||
        !wp_verify_nonce($_POST['svlti_event_meta_nonce'], 'svlti_save_event_meta')
    ) {
        return; // Stop if security check fails
    }


    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return; // Stop if this is an autosave
    }

    if (!current_user_can('edit_post', $post_id)) {
        return; // Stop if user doesn't have permission
    }


    // If event date was submitted, save it to the database
    if (isset($_POST['event_date'])) {
        update_post_meta($post_id, 'event_date', sanitize_text_field($_POST['event_date']));
    }

    if (isset($_POST['event_time_start'])) {
        update_post_meta($post_id, 'event_time_start', sanitize_text_field($_POST['event_time_start']));
    }

    if (isset($_POST['event_time_end'])) {
        update_post_meta($post_id, 'event_time_end', sanitize_text_field($_POST['event_time_end']));
    }

    if (isset($_POST['event_location'])) {
        update_post_meta($post_id, 'event_location', sanitize_text_field($_POST['event_location']));
    }
}
// Run when an event post is being saved
add_action('save_post_event', 'svlti_save_event_meta');
?>