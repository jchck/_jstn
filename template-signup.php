<?php
/**
 * Template Name: Signup Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap signup-form">
		<div class="row center-xs">
			<div class="col-sm-12 col-xs">
				<?php get_template_part( 'templates/the', 'map' ); ?>
				<p class="mt3 mb0">If you answered yes <span class="hidden-xs">to any of those,</span> I've got two more questions for you:</p>
				<?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>