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
	<div class="clearfix">
		<?php if ( get_adjacent_post( false, '', true ) ): ?>
			<span class="btn btn-blue btn-sm pull-left">
				<?php previous_post_link('%link', 'Previous'); ?>
			</span>
		<?php endif; ?>

		<?php if ( get_adjacent_post( false, '', false ) ): ?>
			<span class="btn btn-blue btn-sm pull-right">
				<?php next_post_link('%link', 'Next'); ?>
			</span>
		<?php endif; ?>
	</div>
</div>