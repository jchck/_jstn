<?php

namespace Jchck\Category;

function categories(){
	$array = [
		'post',
		'uncategorized'
	];
	
	if(!has_category($array)){
		$categories = get_the_category();
		foreach ($categories as $category) {
			$link = get_category_link( $category );
			echo '<li class="inline-block mr1"><a href="' . $link . '">' . $category->name . '</a></li>';
		}
	}
}