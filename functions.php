<?php
// Ajouter le style du thème parent
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Copier les options de personnalisation du thème parent vers le thème enfant
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // empêche la mise à jour des modifications du thème enfant
    }, 10, 2 );

    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function enqueue_custom_scripts() {
    // Enqueue video.js script
    wp_enqueue_script('video-script', get_theme_file_uri() . '/assets/js/video.js', array('jquery'), null, true);
}


  