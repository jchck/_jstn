<?php

namespace Jchck\Menu;

/**
 *
 * Add class' into nav menu <li>'s
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/nav_menu_css_class
 *
 */
function nav_menu($class){
	$class[] = 'inline-block mr1';
	return $class;
}

add_filter('nav_menu_css_class', __NAMESPACE__ . '\\nav_menu');