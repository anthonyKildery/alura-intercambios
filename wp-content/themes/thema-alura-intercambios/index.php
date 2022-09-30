<?php 
    require_once "header.php"; 

    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_post_thumbnail();
            the_title();
            the_content();
        endwhile;
    else :
        _e( 'Não foi encontrado nenhum contéudo dessa pagina' );
    endif;
?>

<?php 
    require_once "footer.php";
