<?php

use Jchck\Work;

?>

<?php while ( have_posts() ): the_post(); ?>
	<header class="col-12">
		<?php get_template_part( 'templates/page', 'title' ); ?>
	</header>
	<article class="col-12 sm-col-8 md-col-6">
		<?php get_template_part( 'templates/content', 'page' ); ?>
	</article>
<?php endwhile; ?>