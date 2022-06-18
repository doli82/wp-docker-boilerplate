<?php

add_action( 'wp_enqueue_scripts', 'example_theme_enqueue_styles' );
function example_theme_enqueue_styles() {
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( $parenthandle ));
}