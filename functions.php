<?php
function theme_setup() {

	function register_siviero_menu() {

		register_nav_menu('menuPrincipal',__('Menu Primario'));
		register_nav_menu('menu-rodape',__('Menu Rodape'));
	  
	}
	
	add_action( 'init', 'register_siviero_menu' );

}

add_action( 'after_setup_theme', 'theme_setup' );




function siviero_scripts() {
	
	wp_enqueue_style('css-siviero', get_template_directory_uri() . '/assets/css/style.min.css', wp_get_theme()->get( 'Version'));


}

add_action( 'wp_enqueue_scripts', 'siviero_scripts' );






