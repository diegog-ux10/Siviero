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
