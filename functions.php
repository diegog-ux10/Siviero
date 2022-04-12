<?php

// CREATE POSTS
//--------------------------------------

include_once('functions-create-post.php');


// SETUP INITIAL
//--------------------------------------
function theme_setup() {

	//Registrar menus

	function register_siviero_menu() {

		register_nav_menu('menuPrincipal',__('Menu Primario'));
		register_nav_menu('menu-rodape',__('Menu Rodape'));
	  
	}
	
	add_action( 'init', 'register_siviero_menu' );

	function siviero_scripts() {
	
		

		wp_enqueue_style('css-siviero', get_template_directory_uri() . '/assets/css/style.min.css', wp_get_theme()->get( 'Version'));
	
	
	}
	
	add_action( 'wp_enqueue_scripts', 'siviero_scripts' );

	//Background

	$defaults = array(
		'default-color'          => 'ffffff',
		'default-repeat'         => 'no-repeat',
		'default-position-x'     => 'center',
		'default-attachment'     => 'fixed',
	);
	
	//
	add_theme_support( 'custom-background', $defaults );

	// ADD SUPPORT FOR RESPONSIVE EMBEDDED CONTENT
	add_theme_support( 'responsive-embeds' );


	// ADD THUMBNAIL TO POST THEME
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'post-thumb', 320, 190, true );
	add_image_size( 'blog-thumb', 370, 250, true );

}

add_action( 'after_setup_theme', 'theme_setup' );











