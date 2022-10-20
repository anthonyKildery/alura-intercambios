<?php
/*
    main
    div imagem-banner
    div texto-banner-dinamico
    span id texto-banner
*/

$estiloPagina = 'home.css';
$args = array(
    'post_type' => 'banners',
    'post_status' => 'publish',
    'post_per_page' => 1
);

$query = new WP_Query( $args );

require 'header.php';

if( $query -> have_posts() ):
    while( $query -> have_posts() ) : $query -> the_post();
        _e( ' <main> ' );        
            _e( ' <div class="imagem-banner"> ' );     
                the_post_thumbnail();
            _e( ' </div> ' );

            _e( ' <div class="texto-banner-dinamico"> ' );
                _e( ' <span id="texto-banner"></span> ' );
            _e( ' </div> ' );

        _e( ' </main> ' );
    endwhile;
endif;

require_once 'footer.php';
