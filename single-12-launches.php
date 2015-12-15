<div class="container-fluid wrap-sm">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<div class="row center-xs">
			<?php if( get_field( "project_url" ) ): ?>
				<a class="project-svg" href="<?php the_field('project_url'); ?>">
					<?php if (get_field('project_svg_logo')) {
						the_field('project_svg_logo');
					} else {
						get_template_part( 'templates/launches', 'jframe' );
					} ?>
					<p>View Project</p>
				</a>
			<?php endif; ?>
		</div>
		<?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>
</div>