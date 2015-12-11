<div class="container-fluid wrap-sm">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>
		<?php if( get_field( "project_url" ) ): ?>
			<p class="mb3 text-center"><a target="_blank" href="<?php the_field('project_url'); ?>" class="btn btn-blue">View Project</a></p>
		<?php endif; ?>
		
	<?php endwhile; ?>
</div>