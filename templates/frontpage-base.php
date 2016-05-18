<?php

use Jchck\Excerpt;

?>

<?php while ( have_posts() ): the_post(); ?>
	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Justin Chick</p>
	</div>

	<header class="col-12 sm-col-10 md-col-8 sm-py3">
		<?php get_template_part( 'templates/page', 'title' ); ?>
	</header>

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Featured Articles</p>
	</div>

	<?php 
			/**
			 * The WordPress Query class.
			 * @link http://codex.wordpress.org/Function_Reference/WP_Query
			 *
			 */
			$args = array(
				'category_name' => 'featured',
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

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Open Source Projects</p>
	</div>

	<article class="col-12 my4">

		<p style="margin-top: 2rem" class="caps my3">CSS</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jframe" target="_blank">jFrame.css</a></h2>
		<p class="measure">Object oriented CSS toolkit designed to help you and your team write easier to maintain and understand CSS.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jchck-btn" target="_blank">jchck btn</a></h2>
		<p class="measure">A button module written in Sass making use of Bootstrap v3's default variables.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jchck-spacing" target="_blank">jchck spacing</a></h2>
		<p class="measure">A whitespace module written in Sass making use of Bootstrap v3's default variables.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jchck-type" target="_blank">jchck type</a></h2>
		<p class="measure">A base typography CSS module written in Sass making use of Bootstrap v3's default variables.</p>
		<h2 class="my2 bold"><a href="https://github.com/our-collective/bootstrap-center-navbar" target="_blank">Center Bootstrap's Navbar</a></h2>
		<p class="measure">A Sass mixin to center the default Bootstrap v3's default navbar.</p>
		<h2 class="my2 bold"><a href="https://github.com/our-collective/oc-styles" target="_blank">Our Collective Styles</a></h2>
		<p class="measure">Our Collective’s Base Styles & Style Guide written in Less.</p>

		<p class="caps my3">WordPress</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jchck_" target="_blank">jchck_</a></h2>
		<p class="measure">Underpinnings of my current site.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/modern-wordpress" target="_blank">Modern WordPress</a></h2>
		<p class="measure">A WordPress theme built with a modern development process. Part of an ongoing tutorial.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/wp-pesticide" target="_blank">WordPress + Pesticide</a></h2>
		<p class="measure">A plugin to add pesticide.css to your WordPress site for faster CSS debugging.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/bow-tie" target="_blank">Bow Tie</a></h2>
		<p class="measure">A WordPress theme that is so fresh and so clean. Built with the Sage starter theme.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/sagebox" target="_blank">Sagebox</a></h2>
		<p class="measure">Just the stuff needed to Sage + Flexboxgrid + have a happy day.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/here-now" target="_blank">Here Now</a></h2>
		<p class="measure">A plugin to use WordPress as a podcast host and manager.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jaechicks-site" target="_blank">Jaechick's Site</a></h2>
		<p class="measure">A previous personal site built on the Roots starter theme.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/wp-bower-theme" target="_blank">WP Bower</a></h2>
		<p class="measure">Just a simple theme to share how to use Bower with WordPress.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/wp-recursion" target="_blank">WP Recursion</a></h2>
		<p class="measure">A theme for those times that just seem to keep repeating themselves.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/lorem-oberst" target="_blank">Lorem Oberst</a></h2>
		<p class="measure">A plugin for all your Conor Oberst dummy text needs.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/tweet-it" target="_blank">Tweet It</a></h2>
		<p class="measure">A plugin to make it easier for your readers to tweet your content.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/wp-modern-business" target="_blank">Modern Business</a></h2>
		<p class="measure">A Roots WordPress template.</p>
		<h2 class="my2 bold"><a href="https://github.com/our-collective/oc-base" target="_blank">Our Collective Base</a></h2>
		<p class="measure">The Roots starter WordPress theme with some Our Collective customs.</p>

	</article>
<?php endwhile; ?>