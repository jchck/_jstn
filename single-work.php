<?php

use Jchck\Work;

/**
 *
 * @see http://tachyons.io/components/articles/left-title-top-border/index.html
 *
 */


?>

<?php while ( have_posts() ): the_post(); ?>
	<header class="col-12">
		<?php get_template_part( 'templates/page', 'title' ); ?>
	</header>
	<article class="sm-col-6">
		<?php get_template_part( 'templates/content', 'page' ); ?>
	</article>
<?php endwhile; ?>