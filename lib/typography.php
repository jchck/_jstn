<?php

namespace Jchck\Typography;

function measure($content){
	/**
	 *
	 * Add's .measure to all <p>'s inside of the_content()
	 * @see http://php.net/manual/en/function.preg-replace.php
	 * @see https://developer.wordpress.org/reference/functions/the_content/
	 * @see http://wordpress.stackexchange.com/a/51682
	 * @see https://pippinsplugins.com/playing-nice-with-the-content-filter/
	 *
	 */
	
	if(is_singular() && is_main_query()){
		return preg_replace('/<p([^>]+)?>/', '<p$1 class="measure">', $content, -1);
	}
}

add_filter('the_content', __NAMESPACE__ . '\\measure');