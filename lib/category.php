<?php
namespace Roots\Sage\Category;

/**
 *
 * Return the category name, in plain text, no link
 *
 */
function title(){
	$category = get_the_category();
	echo $category[0]->cat_name;
}

/**
 *
 * Return as many category slugs are associated with the post
 * And then slaps that baby into an <li> class
 * 
 * @link https://wordpress.org/support/topic/getting-category-slug-from-posts-in-the-loop
 *
 */
function slug(){
	foreach (get_the_category() as $category) {
		echo '<li class="' . $category->slug . '"></li>';
	}
}

/**
 *
 * Then we take that concept a step further to get icon  links too
 *
 */
function permalink(){
	foreach (get_the_category() as $category){
		$link = get_category_link( $category );
		echo '<li class="no-icon ' . $category->slug . '"><a href="' . $link . '" class="' . $category->slug . '"></a></li>';
	}
}