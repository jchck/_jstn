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
 * @link https://wordpress.org/support/topic/getting-category-slug-from-posts-in-the-loop
 *
 */
function slug(){
	foreach (get_the_category() as $category) {
		echo $category->slug . ' ';
	}
}