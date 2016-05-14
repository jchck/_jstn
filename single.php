<?php

use Jchck\Category;
use Jchck\Excerpt;

/**
 *
 * @see http://tachyons.io/components/articles/left-title-top-border/index.html
 *
 */


?>

<?php while ( have_posts() ): the_post(); ?>
	<header class="sm-col-6 sm-pr3">
		<?php get_template_part( 'templates/page', 'title' ); ?>
		<?= Excerpt\excerpt(); ?>
		<time class="caps" datetime="<?= get_post_time('c', true); ?>">
			<?= get_the_date('F j, Y'); ?>
		</time>
		<?= Category\categories(); ?>
	</header>
	<article class="sm-col-6">
		<?php get_template_part( 'templates/content', 'page' ); ?>
	</article>
<?php endwhile; ?>