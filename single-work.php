<div class="container-fluid wrap-sm">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<div class="row center-xs">
			<?php if( get_field( "project_url" ) ): ?>
				<a class="color-box color-targeting text-center p3 mb3" style="min-width:0" href="<?php the_field('project_url'); ?>">
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
	<?php get_template_part( 'templates/project', 'pagination' ); ?>
</div>