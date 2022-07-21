<?php

    //Bootstrap_CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"');

    //Bootstrap_JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets(){
        //Cargar el tema CSS
        wp_enqueue_style('style', get_stylesheet_uri());

        //Cargar main JS
        wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js');
    }

    add_action('wp_enqueue_scripts', 'load_assets');

    //Soporte para imagenes destacadas en páginas
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

	add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
	/**
	 * Use namespaced data attribute for Bootstrap's dropdown toggles.
	 *
	 * @param array    $atts HTML attributes applied to the item's `<a>` element.
	 * @param WP_Post  $item The current menu item.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 * @return array
	 */
	function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
		if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
			if ( array_key_exists( 'data-toggle', $atts ) ) {
				unset( $atts['data-toggle'] );
				$atts['data-bs-toggle'] = 'dropdown';
			}
		}
		return $atts;
	}

	//Configuracion para el menu
	register_nav_menus( array(
		'primary' => __( 'Primary Menu'),
	) );

?>