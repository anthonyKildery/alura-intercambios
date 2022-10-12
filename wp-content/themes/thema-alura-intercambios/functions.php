<?php

function alura_intercambios_registrando_taxinomias() {
    register_taxonomy(
        'paises',
        'destinos',
        array(
            'labels' => array( 'name' => 'Países' ),
            'hierarchical' => true,
        ),
    );
}
add_action( 'init', 'alura_intercambios_registrando_taxinomias' );

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

function alura_intercambios_registrando_post_costumizado_banner() {
    register_post_type(
        'banners',
        array(
            'labels'            =>      array( 'name' => 'Banner' ),
            'public'            =>      true,
            'menu_position'     =>      3,
            'menu_icon'         =>      'dashicons-edit',
            'supports'          =>      array( 'title', 'thumbanail' ),
        )
    );
}
add_action( 'init', 'alura_intercambios_registrando_post_costumizado_banner' );

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

function alura_intercambios_registrando_metabox() {
    add_meta_box(
        'ai_registrando_metabox',
        'Texto para o banner da home',
        'ai_funcao_callback',
        'banners',
    );
}
add_action( 'add_meta_boxes', 'alura_intercambios_registrando_metabox' );

function ai_funcao_callback( $post ) {
    ?>
    <label for="texto_home_1">1 - Texto</label>
    <input type="text" name="texto_home_1" style="width: 100%">
    <br>
    <br>
    <label for="texto_home_2">2 - Texto</label>
    <input type="text" name="texto_home_2" style="width: 100%">
    <?php
}
