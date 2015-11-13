<?php
/**
 * Template Name: Signup Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap signup-form">
		<div class="row center-xs">
			<div class="col-sm-12 col-xs">
				<h1 class="mt0 lead">Did you know I'm traveling the globe, living out of a backpack, and working where I please?</h1>
				<p class="mb0">The map below shows every place I've lived as a digital nomad since beginning this adventure on September 23, 2015.</p>
				<?php get_template_part( 'templates/the', 'map' ); ?>
				<p class="mt1 mb0">Do you want to join the others following along and get stories, inspiration, and pictures every Wednesday? </p>
				<?php echo do_shortcode( '[gravityform id="5" title="false" description="false"]' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>