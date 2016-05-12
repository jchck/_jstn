<?php while ( have_posts() ): the_post(); ?>
	<div class="clearfix">
		<header class="col sm-col-6 sm-pr3">
			<?php get_template_part( 'templates/page', 'title' ); ?>
		</header>
		<article class="col sm-col-6">
			<?php get_template_part( 'templates/content', 'page' ); ?>
		</article>
	</div>
<?php endwhile; ?>