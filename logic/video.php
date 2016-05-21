<?php

namespace Jchck\Video;

function video(){
	if (get_field('video')) {
		echo '<div class="r-iframe">';
			the_field('video');
		echo '</div>';
	}
}