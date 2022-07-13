<?php
/**
 * Create custom post type for esport
 */

function my_custom_post_esports() {
    $labels = array(
        'name'               => __( 'Esports'),
        'singular_name'      => __( 'Esport',),
        'add_new'            => __( 'Añadir nuevo'),
        'add_new_item'       => __( 'Añadir un nuevo artículo de Esports' ),
        'edit_item'          => __( 'Editar Esports' ),
        'new_item'           => __( 'Nuevo artículo de Esports' ),
        'all_items'          => __( 'Esports' ),
        'view_item'          => __( 'Ver' ),
        'search_items'       => __( 'Buscar' ),
        'not_found'          => __( 'No se encontraon resultados' ),
        'not_found_in_trash' => __( 'No se encontaron resultados en la papelera' ),
        'menu_name'          => 'Esports'
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Contiene todos nuestros post de Esports',
        'public'             => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'custom-fields','comments','excerpt'),
        'has_archive'        => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-games',
        //'rewrite'            => array('slug' => 'esports'),
        'taxonomies'         => array( 'cat_esports' ),
        //'capability_type'    => ['opinion', 'opiniones'],
        'map_meta_cap'       => true,
    );
    register_post_type( 'esports', $args );
}
add_action( 'init', 'my_custom_post_esports' );