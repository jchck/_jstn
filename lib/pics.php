<?php

namespace Roots\Sage\Pics;

function zoomjs($html, $id, $caption, $title, $align, $url){
	$img = "<img src='$url' alt='$title' class='$align' data-action='zoom' />";

	return $img;
}
add_action('image_send_to_editor', __NAMESPACE__ . '\\zoomjs', 10, 9);



function gallery($output = '', $atts, $instance){
	$return = $output;

	$clean_gallery = clean_gallery( $atts );

	if (!empty($clean_gallery)) {
		$return = $clean_gallery;
	}
	return $return;
}

add_filter('post_gallery', __NAMESPACE__ . '\\gallery', 10, 3);