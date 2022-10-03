<?php

function alura_intercambios_registrando_post_costumizado() {
    register_post_type(
        'destinos',
        array(
            'labels'            =>      array( 'name' => 'Destinos' ),
            'public'            =>      true,
            'menu_position'     =>      2,
            'menu_icon'         =>      'dashicons-admin-site',
            'supports'          =>      array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
        )
    );
}
add_action( 'init', 'alura_intercambios_registrando_post_costumizado' );

/*
    add_theme_support:  adiciona fuções para o admin por imagems no site
*/
function alura_intercambios_registrando_menu() {
    register_nav_menu(
        'menu-navegacao',
        'Menu Principal',
    );
}
add_action( 'init', 'alura_intercambios_registrando_menu' );

function alura_intercambios_adicionando_suporte_ao_tema() {
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'alura_intercambios_adicionando_suporte_ao_tema' );