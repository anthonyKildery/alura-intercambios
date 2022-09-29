<?php

function alura_intercambios_registrando_menu() {
    register_nav_menu(
        'menu-principal',
        'Menu Principal',
    );
}
add_action( 'init', 'alura_intercambios_registrando_menu' );

function alura_intercambios_adicionando_suporte_ao_tema(){
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'alura_intercambios_adicionando_suporte_ao_tema' );