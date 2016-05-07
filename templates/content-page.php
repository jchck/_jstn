<?php 
	the_content( ); 
	wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'jchck'), 'after' => '</p></nav>']);
?>