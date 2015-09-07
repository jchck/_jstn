<?php

namespace Roots\Sage\Notebook;

function banner(){
	if (is_single() && !is_singular('work')) {
		$image = get_field('main_image');
		$style = "background: url(' $image '); background-size: cover";
		return $style;
	}
}