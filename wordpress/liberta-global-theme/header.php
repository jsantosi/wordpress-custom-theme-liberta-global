<!DOCTYPE html>

<html lang="pt-br">



<head>

    <meta charset="utf-8">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <meta name="description" content="Alcance sua independência financeira.">

    <meta property="og:type" content="website" />

    <meta property="og:title" content="Liberta Global - Educação financeira" />

    <meta property="og:description" content="Alcance sua independência financeira." />

    <meta property="og:url" content="https://project.dgin.com.br" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

    <header class="header">

        <div class="container">

            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">

                    <img src="<?php echo esc_url('https://project.dgin.com.br/wp-content/uploads/2025/03/logo.png'); ?>" alt="Liberta Global">

                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>

                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                    <?php

                    wp_nav_menu( array(

                        'theme_location' => 'primary', 

                        'menu_class'     => 'navbar-nav',

                        'container'      => false, 

                    ) );

                    ?>

                </div>

            </nav>

        </div>

    </header>

    <main>