<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
function enqueue_child_theme_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');
function foce_child_enqueue_scripts() {
    // Enqueue your JavaScript file
    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/assets/js/fadin.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'foce_child_enqueue_scripts');
