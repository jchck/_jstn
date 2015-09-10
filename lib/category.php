<?php
namespace Roots\Sage\Category;

function no_link(){
	$category = get_the_category();
	echo $category[0]->cat_name;
}