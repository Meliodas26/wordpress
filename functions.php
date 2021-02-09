<?php 

function add_support(){
	$defaults = array (
		'height' => 100,
		'width' => 400,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);

	$args = array(
		'default-image'      => get_template_directory_uri() . 'assets/images/header.jpg',
		'default-text-color' => '000',
		'height'             => 720,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support('custom-header',$args);
}
add_action('after_setup_theme','add_support');

	
// Add title
function init_template(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag');
	register_nav_menus(
			array(
					'main' => 'Menú Principal',
					'social-networks' => 'Redes sociales',
					'contact' => 'Contacto',
					'interest-sites' => 'Sitios de interés'
			)
	);
}
add_action('init', 'init_template');

function add_Assets() {
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', 'all');
	wp_enqueue_script( 'navbar-fixed', get_template_directory_uri().'/assets/js/navbar-fixed.js', 1.1, true);
	wp_enqueue_script( 'icons', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', false);
}
add_action( 'wp_enqueue_scripts', 'add_Assets' );

// Custom post types

//Featured sites
function featured_sites(){
	$labels = array(
			'name' => 'Sitios destacados',
			'singular_name' => 'featured-sites',
			'manu_name' => 'Sitios destacados',
	);

	$args = array(
			'label'  => 'featured-sites', 
			'description' => 'Sitios destacados de la página',
			'labels'       => $labels,
			'supports'   => array('title','excerpt','thumbnail'),
			'public'    => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-book',
			'can_export' => true,
			'publicly_queryable' => true,
			'rewrite'       => true,
			'show_in_rest' => true
	);  
	//Nombre de post types en singular es recomendado  
	register_post_type('featured-sites', $args);
}

add_action('init', 'featured_sites');

?>