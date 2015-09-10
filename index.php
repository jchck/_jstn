<div class="container-fluid wrap">

	<i class="i-code"></i>
	<i class="i-train"></i>
	<i class="i-music"></i>
	<i class="i-photos"></i>

	<?php get_template_part('templates/page', 'header'); ?>

	<?php if (!have_posts()) : ?>
		<div class="alert alert-warning">
			<?php _e('Sorry, no results were found.', 'sage'); ?>
		</div>
		<?php get_search_form(); ?>
	<?php endif; ?>
	<div class="row center-sm">
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>
	</div>

	<?php the_posts_navigation(); ?>

</div>
