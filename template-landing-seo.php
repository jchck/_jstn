<?php

/*
	Template Name: Landing SEO
*/

use Jchck\Excerpt;
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

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Services</p>
	</div>

	<div class="col-10">
		<div class="flex flex-wrap">
			<div class="col-4 my2 sm-my4 sm-px3">
			<h3 class="mt0">Level up your website</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-4 my2 sm-my4 sm-px3">
			<h3 class="mt0">Simple, one stop service</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-4 my2 sm-my4 sm-px3">
			<h3 class="mt0">Creativity + Experience</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Latest WordPress Articles</p>
	</div>

	<?php 
			/**
			 * The WordPress Query class.
			 * @link http://codex.wordpress.org/Function_Reference/WP_Query
			 *
			 */
			$args = array(
				'category_name' => 'wordpress',
				'post_type' => 'post',
				'posts_per_page' => 2
			);
		
		$query = new WP_Query( $args );
		
	 ?>

	 <?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<article class="col-12 sm-col-6 my2 sm-my4 sm-pr2 pr0">
			<h2 class="mt0 pt2 bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?= Excerpt\excerpt(); ?>
		</article>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>


<?php endwhile; ?>