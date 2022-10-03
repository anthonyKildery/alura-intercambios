<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/header.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/bootstrap.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/normalize.css' ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/' . $estiloPagina ?> ">
    <link rel="stylesheet" href=" <?= get_template_directory_uri() . '/css/footer.css' ?> ">
    <title> <?php bloginfo( 'name' ); ?> </title>
    <?= wp_head(); ?>
</head>
<body <?= body_class(); ?> >
    <?php 
    _e( ' <header class="site-header"> ' );
        _e( ' <div class="container-alura"> ' );
            the_custom_logo();

            _e( ' <nav> ' );
                wp_nav_menu(
                    array(
                        'menu'      => 'menu-navegacao',
                        'menu_id'   => 'menu-principal',
                    )
                );
            _e( ' </nav> ' );
        _e( ' </div> ' );
    _e( ' </header> ' );
