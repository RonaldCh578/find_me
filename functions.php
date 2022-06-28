<?php

    //Bootstrap_CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"');

    //Bootstrap_JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

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

    // custom post type function
	function create_jobs_detail() {
		$args = array(
			'labels' => array(
				'name' => __( 'Jobs' ),
				'singular_name' => __( 'Job' ),
				'menu_name' => __( 'Jobs' ),
				'name_admin_bar' => __( 'Job' ),
				'add_new' => __('Add job'),
				'add_new_item' => __('Add new job'),
				'new_item' => __('New job'),
				'edit_item' => __('Edit job'),
				'view_item' => __('Show job'),
				'all_items' => __('All jobs'),
				'search_items' => __('Search jobs'),
				'parent_item_color' => __('Jobs parent:'),
				'not_found' => __('There are no jobs registered.'),
				'not_found_in_trash' => __('No jobs to delete')
			),
			'public' => true,
			'menu_icon' => 'dashicons-portfolio',
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'menu_position' => 5,
			'capability_type' => 'post',
			'rewrite' => array("slug" => "jobs"), // Permalinks format
			'taxonomies' => array("category")
		);
		
		register_post_type('jobs', $args);
	}
	// Hooking up our function to theme setup
	add_action( 'init', 'create_jobs_detail' );

?>