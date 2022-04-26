<?php

    //Bootstrap_CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"');

    //Bootstrap_JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

    //Cargar el tema CSS
    function load_assets(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'load_assets');

    //Soporte para imagenes destacadas en páginas
    add_theme_support('post-thumbnails');

?>