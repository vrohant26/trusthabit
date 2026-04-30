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

    // Custom JS file
    wp_enqueue_script( 'trust-habbits-customjs', get_template_directory_uri() . '/js/custom.js', array('gsap', 'gsap-scrolltrigger', 'gsap-splittext', 'lenis'), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'trust_habbits_scripts' );
