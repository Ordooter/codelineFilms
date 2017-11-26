<?php

/**
*Functions file for unite child theme
*
*@author Butu Ordooter
*
**/

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

/*Custom post type film*/

function create_post_type() {
  register_post_type( 'codeline_films',
    array(
      'labels' => array(
        'name' => __( 'Films' ),
        'singular_name' => __( 'Film' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'custom-fields', 'page-layout' )
    )
  );
}
add_action( 'init', 'create_post_type' );

/* Taxonomies for codeline_films*/

function actors_init() {
	// create a new taxonomy actor
	register_taxonomy(
		'actors',
		'codeline_films',
		array(
			'label' => __( 'Actors' ),
			'rewrite' => array( 'slug' => 'actor' ),
		)
	);
}
add_action( 'init', 'actors_init' );

function genre_init() {
	// create a new taxonomy genre
	register_taxonomy(
		'genre',
		'codeline_films',
		array(
			'label' => __( 'Genre' ),
			'rewrite' => array( 'slug' => 'genre' ),
		)
	);
}
add_action( 'init', 'genre_init' );

function year_init() {
	// create a new taxonomy year
	register_taxonomy(
		'year',
		'codeline_films',
		array(
			'label' => __( 'Year' ),
			'rewrite' => array( 'slug' => 'year' ),
		)
	);
}
add_action( 'init', 'year_init' );

function country_init() {
	// create a new taxonomy country
	register_taxonomy(
		'country',
		'codeline_films',
		array(
			'label' => __( 'Country' ),
			'rewrite' => array( 'slug' => 'country' ),
		)
	);
}
add_action( 'init', 'country_init' );

function films_shortcode($atts) {
	//function to add last 5 films
	ob_start();
	$query = new WP_Query( array(
		'post_type' => 'codeline_films',
		'posts-per-page' => 5,
		'orderby' => 'title',
	) );
	if ($query->have_posts() ) return $query;
	}
add_shortcode('list-films', 'films_shortcode');
?>

