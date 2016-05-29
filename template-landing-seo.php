<?php

/*
	Template Name: Landing SEO
*/

use Jchck\Pics;

?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'templates/header', 'landing' ); ?>

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Section Title</p>
	</div>

	<div class="col-6 my2 sm-my4 pr0 sm-pr3">
		<h2 class="h1 mt0">Title Here</h2>
		<p class="h2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
	</div>

	<div class="col-6 my2 sm-my4 pl0 sm-pl3">
		<img class="<?= Pics\img_css(); ?>" src="<?php echo get_template_directory_uri() . '/dest/pics/WordPress-Developer-Justin-Chick.jpg'; ?>">
	</div>

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Section Title</p>
	</div>

	<div class="col-6 my2 sm-my4 pr0 sm-pr3">
		<img class="<?= Pics\img_css(); ?>" src="<?php echo get_template_directory_uri() . '/dest/pics/custom-wordpress-project.jpg'; ?>">
	</div>

	<div class="col-6 my2 sm-my4 pl0 sm-pl3">
		<h2 class="h1 mt0">Title Here</h2>
		<p class="h2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
	</div>

	<div class="col-12 border-top border-width-skinny">
		<a href="mailto:hey@justinchick.com" style="height:25vh" class="flex items-center justify-center cta">
			<p class="m0 h2 caps">Let's Work Together</p>
		</a>
	</div>


<?php endwhile; ?>