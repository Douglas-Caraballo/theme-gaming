<?php
/**
 * Restro de la taxonomia para las secciones de la pagina
 */
function register_taxonomy_section(){
    $label = [
        'name'              => __('Sección'),
        'singular_name'     => __('Seccion'),
        'search_items'      => __('Buscar'),
        'all_items'         => __('Todas'),
        'parent_item'       => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item'         => __('Editar'),
        'update_item'       => __('Actualizar'),
        'add_new_item'      => __('Agregar nueva'),
        'new_item_name'     => __('Nuevo nombre'),
        'menu_name'         => __('Sección'),
    ];

    $args = [
        'hierarchical'      => true,
        'labels'            => $label,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'Sección'],
    ];

    register_taxonomy('section', ['post'],$args);
}
add_action('init', 'register_taxonomy_section');

/**
 * Registro de la taxonomia de categorias para los esport
 */

function register_taxonomy_cat_esports(){
    $label = [
        'name'              => __('Categorias'),
        'singular_name'     => __('Categoria'),
        'search_items'      => __('Buscar'),
        'all_items'         => __('Todas'),
        'parent_item'       => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item'         => __('Editar'),
        'update_item'       => __('Actualizar'),
        'add_new_item'      => __('Agregar nueva'),
        'new_item_name'     => __('Nuevo nombre'),
        'menu_name'         => __('Categorias'),
    ];

    $args = [
        'hierarchical'      => true,
        'labels'            => $label,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'cat_esports'],
    ];

    register_taxonomy('cat_esports', ['esports'],$args);
}
add_action('init', 'register_taxonomy_cat_esports');

/**
 * Registro de la taxonomia para la transmisiones
 */

function register_taxonomy_transmision(){
    $label = [
        'name'              => __('Transmision'),
        'singular_name'     => __('Categoria'),
        'search_items'      => __('Buscar'),
        'all_items'         => __('Todas'),
        'parent_item'       => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item'         => __('Editar'),
        'update_item'       => __('Actualizar'),
        'add_new_item'      => __('Agregar nueva'),
        'new_item_name'     => __('Nuevo nombre'),
        'menu_name'         => __('Transmisiones'),
    ];

    $args = [
        'hierarchical'      => true,
        'labels'            => $label,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        //'rewrite'           => ['slug' => 'cat_esports'],
    ];

    register_taxonomy('transmision', ['esports'],$args);
}
add_action('init', 'register_taxonomy_transmision');