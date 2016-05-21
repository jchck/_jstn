<?php

namespace Jchck\Video;

/**
 *
 * Responsive iFrame's
 * Credit to Bootstrap
 * @link http://getbootstrap.com/components/#responsive-embed
 *
 */


function video(){
	if (get_field('video')) {
		echo '<div class="r-iframe pt0 px0 relative block overflow-hidden">';
			the_field('video');
		echo '</div>';
	}
}