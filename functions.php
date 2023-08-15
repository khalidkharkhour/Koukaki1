<?php
// Ajouter le style du thème parent
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    

    wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.css' ); 
    wp_enqueue_script( 'swiper-element-bundle.min', get_theme_file_uri( '/assets/js/swiper-bundle.min.js'), array(), '10.1.0', false );
    wp_enqueue_script( 'order-custom-scripts', get_theme_file_uri( '/assets/js/custom.js' ), array('jquery'), '1.0.0', false ); 
    
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

    if ( !function_exists('jquery_include') ) {
        function jquery_include() {
            $jquery_url = 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js';
            echo '<script src="' . $jquery_url . '"></script>';
        }
    }


