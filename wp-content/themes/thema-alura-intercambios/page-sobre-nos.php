<?php
$estiloPagina = 'sobre_nos.css';
require_once 'header.php';

if ( have_posts() ):
    _e( '<main class="main-sobre-nos">' );
        while ( have_posts() ): 
            the_post();
            the_post_thumbnail(
                'post-thumbnail', array( 'class' => 'imagem-sobre-nos' ) 
            );
            
        _e( ' <div class="conteudo container-alura"> ' );
            the_title( '<h2>', '</h2>' );
            the_content();
        _e( ' </div> ' );
        endwhile;

    _e( ' </main> ' );
endif;

require_once 'footer.php';
