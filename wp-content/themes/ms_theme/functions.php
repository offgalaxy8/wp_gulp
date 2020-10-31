<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/ms.css' );
    wp_enqueue_style( 'parent-style-resp', get_template_directory_uri() . '/ms-responsive.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
