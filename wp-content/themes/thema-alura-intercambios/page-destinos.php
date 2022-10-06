<?php
/*
    main -> page-destinos
        ul -> lista-destinos container-alura
            li -> col-md-3 destinos
                h2 -> titulo-destino
*/

$estiloPagina = 'destinos.css';
require_once 'header.php';

$args = array( 'post_type' => 'destinos' );
$query = new WP_Query( $args );

if( $query -> have_posts() ):
    _e( ' <main class="page-destinos"> ' );
        _e( ' <ul class="lista-destinos container-alura"> ' );
            while( $query -> have_posts() ): $query -> the_post();
                _e( ' <li class="col-md-3 destinos"> ' );
                    the_post_thumbnail();
                    the_title( '<h3>', '</h3>'  );
                    the_content();
                _e( ' </li> ' );
            endwhile;
        _e( ' </ul> ' );
    _e( ' </main> ' );
endif;

require_once 'footer.php';