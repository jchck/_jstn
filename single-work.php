<div class="container-fluid wrap">
	<?php while (have_posts()) : the_post();

		$field = get_field_object('device_on_left_or_right');
		$value = get_field('device_on_left_or_right');
		$label = $field['choices'][$value];
	?>
		<?php get_template_part('templates/page', 'header'); ?>
		<div class="row middle-sm">
			<div class="col-sm-6 col-xs-12">
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
			<div class="col-sm-6 <?php echo $label; ?> col-xs-12 first-xs">
				<div>
					<div class="ipad">
						<?php get_template_part( 'templates/ipad' ); ?>
						<div class="ipad-screen" style="background: url('<?php the_field('ipad_screen'); ?>') center center; background-size: cover"></div>
					</div>
					<?php if( get_field( "project_url" ) ): ?>
						<p class="mt3 mb3 text-center"><a target="_blank" href="<?php the_field('project_url'); ?>" class="btn btn-blue">View Project</a></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>