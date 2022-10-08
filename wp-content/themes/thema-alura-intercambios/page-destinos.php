<?php
/*
    container-alura formulario-pesquisa-paises
    main -> page-destinos
        ul -> lista-destinos container-alura
            li -> col-md-3 destinos
                h2 -> titulo-destino
*/

$estiloPagina = 'destinos.css';
require_once 'header.php';
$paises = get_terms( array( 'taxonomy' => 'paises' ) );

$paisSelecionadoURL = [array(
    'taxonomy' => 'paises',
    'field' => 'name',
    'terms' => $_GET['paises'],
) ];

$args = array(
    'post_type' => 'destinos',
    'tax_query' => $paisSelecionadoURL,
);
$query = new WP_Query( $args );

_e( ' <form action="#" class="container-alura formulario-pesquisa-paises"> ');
    _e( ' <h2>Pesquise os nossos destinos</h2> ');
    _e( ' <select name="paises" id="paises"> ');
        _e( ' <option value="">Todos</option> ');
        foreach( $paises as $pais ):    ?>
            <option value="<?= $pais -> name ?>"><?= $pais -> name ?></option>
<?php   endforeach;
    _e( ' </select> ');
    _e( ' <input type="submit" value="Pesquisar"> ');
_e( ' </form> ');

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