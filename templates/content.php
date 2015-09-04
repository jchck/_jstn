<article <?php post_class('col-md-4 col-sm-6 col-xs-12 pb3-md pl2-md pr2-md pb4-xs pl3-xs pr3-xs flex'); ?>>
	<a href="<?php the_permalink(); ?>" class="post-card p3 flex flex-center">
		<div class="text-center center-block">
			<header>
				<h2 class="h3 mt0"><?php the_title(); ?></h2>
			</header>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
		</div>
		<div class="card-img" style="background: url('<?php the_field('main_image'); ?>'); background-size: cover;"></div>
	</a>
</article>
