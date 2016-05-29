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

	<div class="col-6 my2 sm-my4 pr0 sm-pr2">
		<h2 class="h1 mt0">Title Here</h2>
		<p class="h2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
	</div>

	<div class="col-6 my2 sm-my4">
		<img class="<?= Pics\img_css(); ?>" src="<?php echo get_template_directory_uri() . '/dest/pics/WordPress-Developer-Justin-Chick.jpg'; ?>">
	</div>

<?php endwhile; ?>