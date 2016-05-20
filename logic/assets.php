<?php

namespace Jchck\Assets;

function assets(){
	wp_enqueue_style('css', get_template_directory_uri() . '/dest/jchck_.css', false, null);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);


if (class_exists( 'acf' )) {

	function prism_js(){
		if (get_field('is_code')) {
			$prism_js = locate_template( 'templates/prism-js.php' );
			require_once $prism_js;
		}
	}

	function prism_css(){
		if (get_field('is_code')) {
			wp_enqueue_style( 'prism_css', get_template_directory_uri() . '/dest/prism.css', false, null );
		}
	}
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\prism_css', 100 );
}