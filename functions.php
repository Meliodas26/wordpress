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
	}
	add_action('after_setup_theme','add_support');
	
// Add title
function init_template(){

	//add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag');
	register_nav_menus(
			array(
					'main-menu' => 'Menú Principal',
					'socialNetworks-menu' => 'Redes sociales'
			)
	);
	
}
add_action('init', 'init_template');

	function add_Assets() {
	  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', 'all');
		wp_enqueue_script( 'navbar-fixed', get_template_directory_uri().'/assets/js/navbar-fixed.js', 1.1, true);
		//wp_enqueue_script( 'icons', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', false);
	}
	add_action( 'wp_enqueue_scripts', 'add_Assets' );
	
?>