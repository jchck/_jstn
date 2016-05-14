<?php

namespace Jchck\Category;

function categories(){
	/**
	 *
	 * This checks if the current post has any attached categories
	 * not including those defined in $not_these array and if passing,
	 * loops thru and echo's the attached categories
	 * @see https://developer.wordpress.org/reference/functions/get_the_category
	 * @see https://codex.wordpress.org/Function_Reference/get_category_link
	 *
	 */
	
	$not_these = [
		'post',
		'uncategorized'
	];
	
	if(!has_category($not_these)){
		$categories = get_the_category();

		echo '<ul class="list-reset slash">';

		foreach ($categories as $category) {
			$link = get_category_link( $category );
			echo '<li class="inline-block mr1"><a href="' . $link . '">' . $category->name . '</a></li>';
		}

		echo '</ul>';
	}
}