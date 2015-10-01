<?php
/**
 * Template Name: Hire Step 2 Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap step2">
		<h1 class="mt0 text-center h1-md">Boom! First Step Done</h1>
		<p>That wasn't so hard, right? I can smell something awesome in the works here. Now, on to the next step...</p>
		<?php get_template_part( 'templates/preproject', 'timeline' ); ?>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://calendly.com/justinchick/new-project-intake/"></iframe>
		</div>
	</div>
<?php endwhile; ?>