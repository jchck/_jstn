<?php

namespace Jchck\Menu;

/**
 *
 * Add class' into nav menu <li>'s
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/nav_menu_css_class
 *
 */
function nav_class($classes, $item){
	if ($item->title == 'Articles' || $item->title == 'Tutorials') {
		$classes[] = 'inline-block mr1';
	} else {
		$classes[] = 'inline-block';
	}
	return $classes;
}

add_filter('nav_menu_css_class', __NAMESPACE__ . '\\nav_class', 10, 2);