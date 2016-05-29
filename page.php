<?php

use Jchck\Excerpt;

;?>
<?php while ( have_posts() ): the_post(); ?>
	<header class ="col-12 sm-col-6 sm-pr3">
		<?php get_template_part( 'templates/page', 'title' ); ?>
		<p class="h2"><?= Excerpt\page_excerpt(); ?></p>
	</header>
	<article class="col-12 sm-col-6">
		<?php get_template_part( 'templates/content', 'page' ); ?>
	</article>
<?php endwhile; ?>