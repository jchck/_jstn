<?php

namespace Jchck\Excerpt;

function excerpt(){
	/**
	 *
	 * Check to see if current post has an excerpt and if so get it
	 * @see https://codex.wordpress.org/Function_Reference/has_excerpt
	 * @see https://developer.wordpress.org/reference/functions/the_excerpt
	 *
	 */
	
	if (has_excerpt( )) {
		$excerpt = the_excerpt();
	} else {
		$excerpt = null;
	}
	return $excerpt;
}

function page_excerpt(){
	if (class_exists( 'acf' )) {
		if (get_field( 'page_excerpt' )) {
			the_field( 'page_excerpt' );
		}
	}
}

function clean(){
	/**
	 *
	 * This removes default [...] from end of the_excerpt()
	 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_more
	 *
	 */
	
	return '';
}

add_filter('excerpt_more', __NAMESPACE__ . '\\clean');

function classes($excerpt){
	/**
	 *
	 * Add classes to the exerpt
	 * @see http://php.net/manual/en/function.str-replace.php
	 * @see https://developer.wordpress.org/reference/functions/the_excerpt
	 *
	 */

	if (is_home() || is_archive() || is_search() || is_page( 'one-thing' )) {
		$classes = str_replace('<p', '<p class="h3 measure"', $excerpt);
	} elseif(is_single()){
		$classes = str_replace('<p', '<p class="h2 xs-hide"', $excerpt);
	} elseif(is_page( 'resume' )){
		$classes = str_replace('<p', '<p class="measure mt0"', $excerpt);
	} else {
		$classes = str_replace('<p', '<p class="h2"', $excerpt);
	}

	return $classes;
}
add_filter('the_excerpt', __NAMESPACE__ . '\\classes');