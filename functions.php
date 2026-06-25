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
    
    // Localize script for AJAX
    wp_localize_script( 'trust-habbits-customjs', 'trustHabbitAjaxUrl', admin_url( 'admin-ajax.php' ) );
}
add_action( 'wp_enqueue_scripts', 'trust_habbits_scripts' );

// Add defer attribute to scripts
function trust_habbits_defer_scripts( $tag, $handle, $src ) {
    $defer_scripts = array( 'gsap', 'gsap-scrolltrigger', 'gsap-splittext', 'lenis', 'swiper-js', 'trust-habbits-customjs' );
    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer="defer"></script>' . "\n";
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'trust_habbits_defer_scripts', 10, 3 );

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
    $to = 'contact@trusthabit.com';
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

    // Send email
    $sent = wp_mail( $to, $email_subject, $message, $headers );

    // Redirect back with status
    $redirect_url = get_permalink( get_page_by_path( 'contact' ) ); 
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

// ==========================================
// FAQ Native Meta Box & Editor Setup
// ==========================================

function trust_habbits_remove_editor_from_faq() {
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    } else {
        return;
    }

    $template_file = get_post_meta( $post_id, '_wp_page_template', true );

    if ( $template_file == 'faq.php' ) {
        remove_post_type_support( 'page', 'editor' );
    }
}
add_action( 'admin_init', 'trust_habbits_remove_editor_from_faq' );

function trust_habbits_add_faq_meta_box() {
    add_meta_box(
        'trust_habbits_faq_meta_box',
        'FAQ Groups & Questions',
        'trust_habbits_faq_meta_box_html',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'trust_habbits_add_faq_meta_box' );

function trust_habbits_faq_meta_box_visibility() {
    $screen = get_current_screen();
    if ( ! $screen || $screen->id !== 'page' ) return;
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const metabox = document.getElementById('trust_habbits_faq_meta_box');
        if (!metabox) return;

        metabox.style.display = 'none'; // Hide by default

        // Check if Gutenberg is active
        if ( typeof wp !== 'undefined' && wp.data && wp.data.select('core/editor') ) {
            const updateVisibility = () => {
                const template = wp.data.select('core/editor').getEditedPostAttribute('template');
                if (template === 'faq.php') {
                    metabox.style.display = 'block';
                } else {
                    metabox.style.display = 'none';
                }
            };
            
            // Wait a moment for Gutenberg to initialize fully
            setTimeout(updateVisibility, 500);

            // Subscribe to any changes
            wp.data.subscribe(function() {
                setTimeout(updateVisibility, 50);
            });
        } else {
            // Classic Editor Fallback
            const templateSelect = document.getElementById('page_template');
            if (templateSelect) {
                const updateVisibility = () => {
                    if (templateSelect.value === 'faq.php') {
                        metabox.style.display = 'block';
                    } else {
                        metabox.style.display = 'none';
                    }
                };
                updateVisibility();
                templateSelect.addEventListener('change', updateVisibility);
            }
        }
    });
    </script>
    <?php
}
add_action('admin_footer', 'trust_habbits_faq_meta_box_visibility');

function trust_habbits_faq_meta_box_html( $post ) {
    wp_nonce_field( 'trust_habbits_faq_nonce', 'trust_habbits_faq_nonce' );
    $faq_data = get_post_meta( $post->ID, '_faq_data', true );
    if ( ! is_array( $faq_data ) ) {
        $faq_data = array();
    }
    ?>
    <style>
        .faq-admin-wrap { max-width: 800px; }
        .faq-group-box { border: 1px solid #ccd0d4; background: #fff; margin-bottom: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.04); }
        .faq-group-header { padding: 10px 15px; border-bottom: 1px solid #ccd0d4; background: #f9f9f9; display: flex; justify-content: space-between; align-items: center; }
        .faq-group-header input { font-size: 16px; width: 60%; font-weight: bold; }
        .faq-group-body { padding: 15px; }
        .faq-question-box { border: 1px solid #e2e4e7; background: #fafafa; padding: 15px; margin-bottom: 10px; position: relative; }
        .faq-question-box input { width: 100%; margin-bottom: 10px; font-weight: bold; }
        .faq-question-box textarea { width: 100%; min-height: 80px; }
        .remove-btn { color: #d63638; cursor: pointer; text-decoration: underline; font-size: 13px; }
        .remove-btn:hover { color: #d63638; text-decoration: none; }
        .faq-question-remove { position: absolute; top: 15px; right: 15px; }
    </style>

    <div class="faq-admin-wrap" id="faq-admin-wrap">
        <div id="faq-groups-container">
            <?php 
            $group_index = 0;
            foreach ( $faq_data as $group ) : 
                $group_title = isset( $group['title'] ) ? esc_attr( $group['title'] ) : '';
                $questions = isset( $group['questions'] ) && is_array( $group['questions'] ) ? $group['questions'] : array();
            ?>
                <div class="faq-group-box" data-group-index="<?php echo $group_index; ?>">
                    <div class="faq-group-header">
                        <input type="text" name="faq_data[<?php echo $group_index; ?>][title]" value="<?php echo $group_title; ?>" placeholder="Group Title (e.g. General Questions)">
                        <span class="remove-btn remove-group">Remove Group</span>
                    </div>
                    <div class="faq-group-body">
                        <div class="faq-questions-container">
                            <?php 
                            $q_index = 0;
                            foreach ( $questions as $q ) : 
                                $question_text = isset( $q['q'] ) ? esc_attr( $q['q'] ) : '';
                                $answer_text = isset( $q['a'] ) ? esc_textarea( $q['a'] ) : '';
                            ?>
                                <div class="faq-question-box" data-q-index="<?php echo $q_index; ?>">
                                    <span class="remove-btn remove-question faq-question-remove">Remove</span>
                                    <label>Question</label>
                                    <input type="text" name="faq_data[<?php echo $group_index; ?>][questions][<?php echo $q_index; ?>][q]" value="<?php echo $question_text; ?>">
                                    <label>Answer</label>
                                    <textarea name="faq_data[<?php echo $group_index; ?>][questions][<?php echo $q_index; ?>][a]"><?php echo $answer_text; ?></textarea>
                                </div>
                            <?php 
                            $q_index++;
                            endforeach; 
                            ?>
                        </div>
                        <button type="button" class="button add-question-btn">Add Question to this Group</button>
                    </div>
                </div>
            <?php 
            $group_index++;
            endforeach; 
            ?>
        </div>
        <button type="button" class="button button-primary button-large" id="add-group-btn" style="margin-top: 10px;">Add New Group</button>
    </div>

    <script>
    jQuery(document).ready(function($) {
        var groupIndex = <?php echo max( 0, $group_index ); ?>;

        // Add Group
        $('#add-group-btn').on('click', function() {
            var html = '<div class="faq-group-box" data-group-index="' + groupIndex + '">' +
                '<div class="faq-group-header">' +
                    '<input type="text" name="faq_data[' + groupIndex + '][title]" value="" placeholder="Group Title (e.g. General Questions)">' +
                    '<span class="remove-btn remove-group">Remove Group</span>' +
                '</div>' +
                '<div class="faq-group-body">' +
                    '<div class="faq-questions-container"></div>' +
                    '<button type="button" class="button add-question-btn">Add Question to this Group</button>' +
                '</div>' +
            '</div>';
            $('#faq-groups-container').append(html);
            groupIndex++;
        });

        // Add Question
        $(document).on('click', '.add-question-btn', function() {
            var $group = $(this).closest('.faq-group-box');
            var gIdx = $group.data('group-index');
            var $container = $group.find('.faq-questions-container');
            var qIdx = $container.find('.faq-question-box').length;
            
            // To ensure unique indexes if they delete some
            qIdx = qIdx + Math.floor(Math.random() * 1000);

            var html = '<div class="faq-question-box" data-q-index="' + qIdx + '">' +
                '<span class="remove-btn remove-question faq-question-remove">Remove</span>' +
                '<label>Question</label>' +
                '<input type="text" name="faq_data[' + gIdx + '][questions][' + qIdx + '][q]" value="">' +
                '<label>Answer</label>' +
                '<textarea name="faq_data[' + gIdx + '][questions][' + qIdx + '][a]"></textarea>' +
            '</div>';
            $container.append(html);
        });

        // Remove Group
        $(document).on('click', '.remove-group', function() {
            if ( confirm('Are you sure you want to remove this entire group?') ) {
                $(this).closest('.faq-group-box').remove();
            }
        });

        // Remove Question
        $(document).on('click', '.remove-question', function() {
            if ( confirm('Remove this question?') ) {
                $(this).closest('.faq-question-box').remove();
            }
        });
    });
    </script>
    <?php
}

function trust_habbits_save_faq_meta_box( $post_id ) {
    if ( ! isset( $_POST['trust_habbits_faq_nonce'] ) || ! wp_verify_nonce( $_POST['trust_habbits_faq_nonce'], 'trust_habbits_faq_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['faq_data'] ) && is_array( $_POST['faq_data'] ) ) {
        $sanitized_data = array();
        
        // Re-index numerically and sanitize
        foreach ( $_POST['faq_data'] as $group ) {
            $sanitized_group = array(
                'title' => sanitize_text_field( $group['title'] ?? '' ),
                'questions' => array()
            );

            if ( isset( $group['questions'] ) && is_array( $group['questions'] ) ) {
                foreach ( $group['questions'] as $q ) {
                    $sanitized_group['questions'][] = array(
                        'q' => sanitize_text_field( $q['q'] ?? '' ),
                        'a' => wp_kses_post( $q['a'] ?? '' ), // Allow basic HTML in answers
                    );
                }
            }

            // Only save group if it has a title or questions
            if ( ! empty( $sanitized_group['title'] ) || ! empty( $sanitized_group['questions'] ) ) {
                $sanitized_data[] = $sanitized_group;
            }
        }
        update_post_meta( $post_id, '_faq_data', $sanitized_data );
    } else {
        delete_post_meta( $post_id, '_faq_data' );
    }
}
add_action( 'save_post', 'trust_habbits_save_faq_meta_box' );

// ==========================================
// Register 'Blog' Custom Post Type
// ==========================================
function trust_habbits_register_blog_cpt() {
    $labels = array(
        'name'               => _x( 'Blogs', 'post type general name', 'trust-habbits' ),
        'singular_name'      => _x( 'Blog', 'post type singular name', 'trust-habbits' ),
        'menu_name'          => _x( 'Blogs', 'admin menu', 'trust-habbits' ),
        'name_admin_bar'     => _x( 'Blog', 'add new on admin bar', 'trust-habbits' ),
        'add_new'            => _x( 'Add New', 'blog', 'trust-habbits' ),
        'add_new_item'       => __( 'Add New Blog', 'trust-habbits' ),
        'new_item'           => __( 'New Blog', 'trust-habbits' ),
        'edit_item'          => __( 'Edit Blog', 'trust-habbits' ),
        'view_item'          => __( 'View Blog', 'trust-habbits' ),
        'all_items'          => __( 'All Blogs', 'trust-habbits' ),
        'search_items'       => __( 'Search Blogs', 'trust-habbits' ),
        'not_found'          => __( 'No blogs found.', 'trust-habbits' ),
        'not_found_in_trash' => __( 'No blogs found in Trash.', 'trust-habbits' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'blog' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-admin-post',
        'show_in_rest'       => true, // Enables Gutenberg Editor
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'taxonomies'         => array( 'blog_tag' )
    );

    register_post_type( 'blog', $args );
    
    // Register custom taxonomy for blog tags
    $tag_labels = array(
        'name'                       => _x( 'Blog Tags', 'taxonomy general name', 'trust-habbits' ),
        'singular_name'              => _x( 'Blog Tag', 'taxonomy singular name', 'trust-habbits' ),
        'search_items'               => __( 'Search Blog Tags', 'trust-habbits' ),
        'popular_items'              => __( 'Popular Blog Tags', 'trust-habbits' ),
        'all_items'                  => __( 'All Blog Tags', 'trust-habbits' ),
        'edit_item'                  => __( 'Edit Blog Tag', 'trust-habbits' ),
        'update_item'                => __( 'Update Blog Tag', 'trust-habbits' ),
        'add_new_item'               => __( 'Add New Blog Tag', 'trust-habbits' ),
        'new_item_name'              => __( 'New Blog Tag Name', 'trust-habbits' ),
        'separate_items_with_commas' => __( 'Separate tags with commas', 'trust-habbits' ),
        'add_or_remove_items'        => __( 'Add or remove tags', 'trust-habbits' ),
        'choose_from_most_used'      => __( 'Choose from the most used tags', 'trust-habbits' ),
        'not_found'                  => __( 'No tags found.', 'trust-habbits' ),
        'menu_name'                  => __( 'Tags', 'trust-habbits' ),
    );

    $tag_args = array(
        'hierarchical'          => false, // False acts like tags
        'labels'                => $tag_labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'blog-tag' ),
        'show_in_rest'          => true, // Essential for Gutenberg
    );

    register_taxonomy( 'blog_tag', 'blog', $tag_args );
}
add_action( 'init', 'trust_habbits_register_blog_cpt' );

// Filter posts per page for blog archive
function trust_habbits_blog_posts_per_page( $query ) {
    if ( !is_admin() && $query->is_main_query() && ( is_post_type_archive( 'blog' ) || is_tax('blog_tag') ) ) {
        $query->set( 'posts_per_page', 10 );
    }
}
add_action( 'pre_get_posts', 'trust_habbits_blog_posts_per_page' );

// ==========================================
// Blog Archive AJAX Handler
// ==========================================
function trust_habbits_filter_blogs_ajax() {
    $search = isset($_POST['s']) ? sanitize_text_field($_POST['s']) : '';
    $tag    = isset($_POST['tag']) ? sanitize_text_field($_POST['tag']) : '';
    $paged  = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    $args = array(
        'post_type'      => 'blog',
        'posts_per_page' => 10,
        'paged'          => $paged,
        's'              => $search,
    );

    if ( ! empty( $tag ) ) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'blog_tag',
                'field'    => 'slug',
                'terms'    => $tag,
            ),
        );
    }

    $query = new WP_Query( $args );

    ob_start();
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'template-parts/blog-loop-item' );
        }
    } else {
        echo '<p class="font-body text-muted" style="grid-column: 1 / -1;">No blogs found matching your criteria.</p>';
    }
    $html = ob_get_clean();

    ob_start();
    echo paginate_links( array(
        'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, $paged ),
        'total'     => $query->max_num_pages,
        'prev_text' => __( 'PREVIOUS' ),
        'next_text' => __( 'NEXT' ),
        'type'      => 'list',
    ) );
    $pagination = ob_get_clean();

    wp_send_json_success( array(
        'html'       => $html,
        'pagination' => $pagination,
    ) );
}
add_action( 'wp_ajax_filter_blogs', 'trust_habbits_filter_blogs_ajax' );
add_action( 'wp_ajax_nopriv_filter_blogs', 'trust_habbits_filter_blogs_ajax' );

