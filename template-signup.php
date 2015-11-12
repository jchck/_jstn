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
				<p class="mb0">The map below has every place I've been since I started in St. Louis, Missouri on September 23, 2015.</p>
				<?php get_template_part( 'templates/the', 'map' ); ?>
				<p class="mt0 mb0">You should sign up to follow along and find out how I'm doing it. I send a newsletter every Wednesday morning with stories, inspiration, and pictures.</p>
				<?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>