<?php 

// include parent style
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// include kirki toolkit
include_once( dirname( __FILE__ ) . '/kirki/kirki.php' );
// add themes customizer options
include_once( dirname( __FILE__ ) . '/kirki-customizer-options.php' );



