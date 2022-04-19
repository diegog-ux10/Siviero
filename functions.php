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
	  
	}
	
	add_action( 'init', 'register_siviero_menu' );

	function siviero_scripts() {
		//Jquery
		wp_enqueue_script('jquery-main', get_template_directory_uri() . '/assets/vendor/jquery/jquery-1.11.0.min.js', '1.0', true);

		//BOOTSTRAP

		wp_enqueue_style('css-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", ' ', true);
		wp_enqueue_script('js-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", 'jquery-main', ' ', true);
		
		//Theme

		wp_enqueue_style('css-siviero', get_template_directory_uri() . '/assets/css/style.min.css', wp_get_theme()->get( 'Version'));
		
		// FORMS

		if(is_page() == 'fale-conosco'){
			wp_enqueue_script('js-mask', get_template_directory_uri() . '/assets/vendor/jquery/jquery.mask.min.js', '1.0', true );
			wp_enqueue_script('js-forms', get_template_directory_uri() . '/assets/js/forms.min.js', wp_get_theme()->get( 'Version'));
		}
		
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

	if(function_exists('acf_add_options_page')){
		acf_add_options_page(array(
			'page_title' => 'Siviero opções',
			'menu_title' => 'Siviero opções',
			'menu_slug'  => 'siviero_opcoes',
			'capability' => 'manage_options',
			'post_id'    => 'options',
			'position'   => 3,
			'redirect'	 => false
		));
	}

}

add_action( 'after_setup_theme', 'theme_setup' );


 // // MENU PRINCIPAL
    //--------------------------------------

    function register_navwalker() {
        require_once(__DIR__ . '/class-wp-bootstrap-navwalker.php');
    }

    add_action( 'after_setup_theme', 'register_navwalker' );


    function MenuPrincipal() {
        
        $menu = wp_nav_menu(array(
            'theme_location'  => 'menu-principal',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ));
    }






