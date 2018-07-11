<?php

if ( ! function_exists( 'ap_core_setup' ) ) {
	function ap_core_setup() {
		require_once( get_template_directory() . '/inc/hooks.php' );
	}
}

ap_core_setup();


if ( ! function_exists( 'ap_core_load_scripts' ) ) {
	function ap_core_load_scripts() {
		wp_enqueue_script('jquery');
		wp_enqueue_script('ap_boostrap', get_template_directory_uri() . '/inc/bootstrap-4.1.1/dist/js/bootstrap.js', array('jquery'),'4.1.1', true);
		wp_enqueue_style('ap_boostrap', get_template_directory_uri() . '/inc/bootstrap-4.1.1/dist/css/bootstrap.css');
		wp_enqueue_style('ap_style', get_stylesheet_uri() );
		wp_enqueue_style('fonts_google', "https://fonts.googleapis.com/css?family=Fjalla+One|Gaegu|Source+Sans+Pro" );
	}
}

add_action('wp_enqueue_scripts', 'ap_core_load_scripts');