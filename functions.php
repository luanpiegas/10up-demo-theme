<?php

require_once __DIR__ . '/inc/TenupLatestPosts.php';

function tenup_theme_setup() {
    wp_enqueue_style( 'tenup-style', get_stylesheet_uri() );

    wp_enqueue_script( 'tenup-gsap', 'https://unpkg.co/gsap@3/dist/gsap.min.js');
    wp_enqueue_script( 'tenup-gsap-scrolltrigger', 'https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js');
    wp_enqueue_script( 'tenup-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'tenup_theme_setup' );