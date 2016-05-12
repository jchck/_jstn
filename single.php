<?php

use Jchck\Excerpt;
use Jchck\Category

/**
 *
 * @see http://tachyons.io/components/articles/left-title-top-border/index.html
 *
 */


?>

<?php while ( have_posts() ): the_post(); ?>
	<div class="clearfix">
		<header class="col sm-col-6 sm-pr3">
			<?php get_template_part( 'templates/page', 'title' ); ?>
			<?= Excerpt\excerpt(); ?>
			<time datetime="<?= get_post_time('c', true); ?>">
				<?= get_the_date(); ?>
			</time>
			<ul class="list-reset">
				<?= Category\categories(); ?>
			</ul>
		</header>
		<article class="col sm-col-6">
			<?php get_template_part( 'templates/content', 'page' ); ?>
		</article>
	</div>
<?php endwhile; ?>