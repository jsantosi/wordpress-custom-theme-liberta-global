<?php

function liberta_global_theme_setup() {
    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'primary' => __( 'Menu Principal', 'liberta-global-theme' ),
            'footer'  => __( 'Menu Rodapé', 'liberta-global-theme' ),
        )
    );
}
add_action( 'after_setup_theme', 'liberta_global_theme_setup' );

function liberta_global_enqueue_styles() {
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );

    wp_enqueue_style( 'font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' );

    wp_enqueue_style( 'bootstrap-icons-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');

    wp_enqueue_style( 'liberta-global-style', get_stylesheet_uri(), array('bootstrap-css') );
}
add_action( 'wp_enqueue_scripts', 'liberta_global_enqueue_styles' );

function liberta_global_enqueue_scripts() {
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'liberta_global_enqueue_scripts' );

;