<article <?php post_class('col-md-4 col-sm-6 col-xs-12'); ?>>
	<a href="<?php the_permalink(); ?>" class="post-card p3">
		<header>
			<h2 class="m0"><?php the_title(); ?></h2>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</a>
</article>
