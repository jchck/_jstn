<div class="container-fluid wrap">

	<?php get_template_part('templates/page', 'header'); ?>

	<?php if (!have_posts()) : ?>
		<div class="alert alert-warning text-center">
			<?php _e('Whoops! Nothing here.', 'sage'); ?>
		</div>
		<?php get_search_form(); ?>
	<?php endif; ?>
	<div class="row center-sm">
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>
	</div>

	<div class="clearfix mt4 mb4">
		<?php the_posts_navigation(); ?>
	</div>

</div>
