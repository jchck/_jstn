<?php

namespace Roots\Sage\Pics;

function zoomjs($html, $id, $caption, $title, $align, $url){
	$img = "<img src='$url' alt='$title' class='$align' data-action='zoom' />";

	return $img;
}
add_action('image_send_to_editor', __NAMESPACE__ . '\\zoomjs', 10, 9);