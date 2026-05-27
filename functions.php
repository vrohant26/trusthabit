<?php
/**
 * Trust Habbit Custom Theme functions and definitions
 */

if ( ! function_exists( 'trust_habbits_setup' ) ) :
    function trust_habbits_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'trust-habbits' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'trust_habbits_setup' );

function trust_habbits_scripts() {
    // Theme stylesheet
    wp_enqueue_style( 'trust-habbits-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue GSAP
    wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.15/dist/gsap.min.js', array(), null, true );

    // Enqueue GSAP ScrollTrigger
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.15/dist/ScrollTrigger.min.js', array('gsap'), null, true );

    // Enqueue GSAP SplitText
    wp_enqueue_script( 'gsap-splittext', 'https://cdn.jsdelivr.net/npm/gsap@3.15/dist/SplitText.min.js', array('gsap'), null, true );

    // Enqueue Lenis for smooth scroll
    wp_enqueue_script( 'lenis', 'https://unpkg.com/lenis@1.1.0/dist/lenis.min.js', array(), null, true );

    // Enqueue Swiper.js
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );

    // Custom JS file
    wp_enqueue_script( 'trust-habbits-customjs', get_template_directory_uri() . '/js/custom.js', array('gsap', 'gsap-scrolltrigger', 'gsap-splittext', 'lenis', 'swiper-js'), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'trust_habbits_scripts' );

// ==========================================
// Register 'Team' Custom Post Type
// ==========================================
function trust_habbits_register_team_cpt() {
    $labels = array(
        'name'               => _x( 'Team Members', 'post type general name', 'trust-habbits' ),
        'singular_name'      => _x( 'Team Member', 'post type singular name', 'trust-habbits' ),
        'menu_name'          => _x( 'Team', 'admin menu', 'trust-habbits' ),
        'name_admin_bar'     => _x( 'Team Member', 'add new on admin bar', 'trust-habbits' ),
        'add_new'            => _x( 'Add New', 'team member', 'trust-habbits' ),
        'add_new_item'       => __( 'Add New Team Member', 'trust-habbits' ),
        'new_item'           => __( 'New Team Member', 'trust-habbits' ),
        'edit_item'          => __( 'Edit Team Member', 'trust-habbits' ),
        'view_item'          => __( 'View Team Member', 'trust-habbits' ),
        'all_items'          => __( 'All Team Members', 'trust-habbits' ),
        'search_items'       => __( 'Search Team Members', 'trust-habbits' ),
        'not_found'          => __( 'No team members found.', 'trust-habbits' ),
        'not_found_in_trash' => __( 'No team members found in Trash.', 'trust-habbits' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'thumbnail' ) // Title = Name, Thumbnail = Image
    );

    register_post_type( 'team', $args );
}
add_action( 'init', 'trust_habbits_register_team_cpt' );

// ==========================================
// Add Meta Boxes for Team CPT
// ==========================================
function trust_habbits_add_team_meta_boxes() {
    add_meta_box(
        'team_member_details',
        __( 'Team Member Details', 'trust-habbits' ),
        'trust_habbits_render_team_meta_box',
        'team',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'trust_habbits_add_team_meta_boxes' );

function trust_habbits_render_team_meta_box( $post ) {
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'trust_habbits_save_team_meta_box_data', 'trust_habbits_team_meta_box_nonce' );

    // Retrieve existing values
    $designation = get_post_meta( $post->ID, '_team_designation', true );
    $linkedin    = get_post_meta( $post->ID, '_team_linkedin', true );

    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="team_designation">' . __( 'Designation', 'trust-habbits' ) . '</label></th>';
    echo '<td><input type="text" id="team_designation" name="team_designation" value="' . esc_attr( $designation ) . '" size="25" style="width:100%;" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="team_linkedin">' . __( 'LinkedIn URL', 'trust-habbits' ) . '</label></th>';
    echo '<td><input type="url" id="team_linkedin" name="team_linkedin" value="' . esc_attr( $linkedin ) . '" size="25" style="width:100%;" /></td>';
    echo '</tr>';
    echo '</table>';
}

function trust_habbits_save_team_meta_box_data( $post_id ) {
    // Check if our nonce is set.
    if ( ! isset( $_POST['trust_habbits_team_meta_box_nonce'] ) ) {
        return;
    }
    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['trust_habbits_team_meta_box_nonce'], 'trust_habbits_save_team_meta_box_data' ) ) {
        return;
    }
    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'team' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    // Sanitize user input and save
    if ( isset( $_POST['team_designation'] ) ) {
        $designation = sanitize_text_field( $_POST['team_designation'] );
        update_post_meta( $post_id, '_team_designation', $designation );
    }
    if ( isset( $_POST['team_linkedin'] ) ) {
        $linkedin = esc_url_raw( $_POST['team_linkedin'] );
        update_post_meta( $post_id, '_team_linkedin', $linkedin );
    }
}
add_action( 'save_post', 'trust_habbits_save_team_meta_box_data' );

// ==========================================
// Contact Form Handler
// ==========================================
function trust_habbits_submit_contact_form() {
    // Verify nonce
    if ( ! isset( $_POST['contact_nonce'] ) || ! wp_verify_nonce( $_POST['contact_nonce'], 'contact_form_nonce' ) ) {
        wp_die( 'Security check failed.' );
    }

    // Check Honeypot for spam protection
    if ( ! empty( $_POST['user_website'] ) ) {
        // A bot filled out the hidden field. Fail silently.
        $redirect_url = get_permalink( get_page_by_path( 'contact' ) ) ?: home_url( '/contact' );
        wp_redirect( add_query_arg( 'success', '1', $redirect_url ) );
        exit;
    }

    // Sanitize input
    $first_name  = sanitize_text_field( $_POST['first_name'] ?? '' );
    $last_name   = sanitize_text_field( $_POST['last_name'] ?? '' );
    $email       = sanitize_email( $_POST['email'] ?? '' );
    $subject     = sanitize_text_field( $_POST['subject'] ?? '' );
    $description = sanitize_textarea_field( $_POST['description'] ?? '' );
    $country     = sanitize_text_field( $_POST['country'] ?? '' );

    // Build email
    $to = 'villarosarohant@gmail.com';
    $email_subject = 'New Contact Form Submission: ' . $subject;
    
    $message = "You have received a new contact message.\n\n";
    $message .= "Name: $first_name $last_name\n";
    $message .= "Email: $email\n";
    $message .= "Country: $country\n";
    $message .= "Subject: $subject\n";
    $message .= "Description:\n$description\n";

    $site_title = get_bloginfo( 'name' );
    $headers = array(
        'From: ' . $site_title . ' Contact Form <wordpress@' . parse_url( home_url(), PHP_URL_HOST ) . '>',
        'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>',
    );

    $attachments = array();

    // Handle attachment
    if ( isset( $_FILES['attachment'] ) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK ) {
        $uploaded_file = $_FILES['attachment'];
        
        // Basic file upload handling for email attachment
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }

        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploaded_file, $upload_overrides );

        if ( $movefile && ! isset( $movefile['error'] ) ) {
            $attachments[] = $movefile['file'];
        }
    }

    // Send email
    $sent = wp_mail( $to, $email_subject, $message, $headers, $attachments );

    // Optional: Clean up uploaded file after sending if it was attached
    if ( ! empty( $attachments ) ) {
        foreach ( $attachments as $attachment ) {
            @unlink( $attachment );
        }
    }

    // Redirect back with status
    $redirect_url = get_permalink( get_page_by_path( 'contact' ) ); // Assuming slug is 'contact'
    if ( ! $redirect_url ) {
        $redirect_url = home_url( '/contact' );
    }

    if ( $sent ) {
        wp_redirect( add_query_arg( 'success', '1', $redirect_url ) );
    } else {
        wp_redirect( add_query_arg( 'error', '1', $redirect_url ) );
    }
    exit;
}
add_action( 'admin_post_nopriv_submit_contact_form', 'trust_habbits_submit_contact_form' );
add_action( 'admin_post_submit_contact_form', 'trust_habbits_submit_contact_form' );
