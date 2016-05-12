<?php

namespace Jchck\Excerpt;

function excerpt(){
	/**
	 *
	 * Check to see if current post has an excerpt and if so get it
	 *
	 */
	
	if (has_excerpt( )) {
		$excerpt = the_excerpt();
	} else {
		$excerpt = null;
	}
	return $excerpt;
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