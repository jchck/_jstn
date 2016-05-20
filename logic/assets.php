<?php

namespace Jchck\Assets;

function assets(){
	wp_enqueue_style('css', get_template_directory_uri() . '/dest/jchck_.css', false, null);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);



function code(){
	if (class_exists( 'acf')) {
		
		if (get_field('is_code')) {
			$prism = locate_template( 'templates/prism-js.php' );
			//$prism = get_template_part( 'templates/prism', 'js' );
			require_once $prism;
		}

	}
	add_action( 'wp_footer', __NAMESPACE__ . '\\code' );
}