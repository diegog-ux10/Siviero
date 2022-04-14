<?php

function register_events_post_types() {

    $labels = array(
        'name' => __( 'Evento' ),
        'singular_name' => __( 'Evento' ),
        'add_new' => __( 'Adicionar Novo Evento' ),
        'add_new_item' => __( 'Adicionar Novo Evento' ),
        'edit_item' => __( 'Editar Evento' ),
        'new_item' => __( 'Novo Evento' ),
        'all_items' => __( 'Listar Todos os Eventos' ),
        'view_item' => __( 'Ver Evento Anterior' ),
        'search_items' => __( 'Buscar' ),
        'featured_image' => 'Imagem Destacada',
        'set_featured_image' => 'Adicionar Imagem',
    );


    $arg = array(
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'eventos'),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 30,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-megaphone',
    );

    register_post_type('event', $arg);

}

add_action( 'init', 'register_events_post_types');



function register_produtos_post_types() {

    $labels2 = array(
        'name' => __( 'Produtos' ),
        'singular_name' => __( 'Produtos' ),
        'add_new' => __( 'Adicionar Novo Produtos' ),
        'add_new_item' => __( 'Adicionar Novo Produtos' ),
        'edit_item' => __( 'Editar Produtos' ),
        'new_item' => __( 'Novo Produtos' ),
        'all_items' => __( 'Listar Todos os Produtoss' ),
        'view_item' => __( 'Ver Produtos Anterior' ),
        'search_items' => __( 'Buscar' ),
        'featured_image' => __('Imagem Destacada'),
        'set_featured_image' => __('Adicionar Imagem'),
    );

    $arg2 = array(
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'produtos'),
        'labels' => $labels2,
        'description' => '',
        'public' => true,
        'menu_position' => 30,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => '',
    );



    register_post_type( 'produto', $arg2 );

}

add_action( 'init', 'register_produtos_post_types');
