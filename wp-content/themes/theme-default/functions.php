<?php

	/* Register Custom Navigation Walker */
	
	require_once('wp-bootstrap-navwalker.php');

	register_nav_menus( array(
	    'primary' => __( 'Menu Top', 'Theme Default' ),
	    'secondary' => __( 'Menu Footer', 'Theme Default' ),
	) );

	/* Hide Updates */

	function filter_plugin_updates( $value ) {

		unset( $value->response['advanced-custom-fields-pro/acf.php'] );

		return $value;

	}

	add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

	remove_filter('acf_the_content', 'wpautop');

	/* Add Theme Thumbnail Suport */

	add_theme_support( 'post-thumbnails' ); 

	function arphabet_widgets_init() {

		register_sidebar( array(
			'name'          => 'Home',
			'id'            => 'home',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );




?>