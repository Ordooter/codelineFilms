<?php
function my_theme_enqueue_styles() {

    $parent_style = 'unite-style'; 
	
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css', false, NULL, 'all');	
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
