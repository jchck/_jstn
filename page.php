<?php
	while ( have_posts() ): the_post();
		get_template_part( 'templates/page', 'title' );
		get_template_part( 'templates/content', 'page' );
	endwhile;
?>