<?php

namespace Jchck\Video;

function video(){
	if (get_field('video')) {
		echo '<div class="r-iframe pt0 px0 relative block overflow-hidden">';
			the_field('video');
		echo '</div>';
	}
}