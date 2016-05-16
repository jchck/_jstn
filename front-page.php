<?php

use Jchck\Excerpt;

?>

<?php while ( have_posts() ): the_post(); ?>
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
		<article class="col-12 sm-col-6 my2 sm-my4">
			<h2 class="mt0 pt2 bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="measure"><?= Excerpt\excerpt(); ?></p>
		</article>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Open Source Projects</p>
	</div>

	<article class="col-12 my4">

		<p style="margin-top: 2rem" class="caps my3">CSS</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jframe" target="_blank">jFrame.css</a></h2>
		<p class="measure">Delightfully simple & scalable css.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jchck-btn" target="_blank">jchck btn</a></h2>
		<p class="measure">A button css module writen in sass, makes use of Bootstrap's default variables.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jchck-spacing" target="_blank">jchck spacing</a></h2>
		<p class="measure">A whitespace css module writen in sass, makes use of Bootstrap's default variables.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jchck-type" target="_blank">jchck type</a></h2>
		<p class="measure">A base typography css module writen in sass, makes use of Bootstrap's default variables.</p>
		<h2 class="my2 bold"><a href="https://github.com/our-collective/bootstrap-center-navbar" target="_blank">Bootstrap center navbar</a></h2>
		<p class="measure">A SASS mixin to center the default Bootstrap navbar, makes use of Bootstraps screen width variable.</p>
		<h2 class="my2 bold"><a href="https://github.com/our-collective/oc-styles" target="_blank">Our Collective Styles</a></h2>
		<p class="measure">Our Collective’s Base LESS Styles & Style Guide</p>

		<p class="caps my3">WordPress</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jchck_" target="_blank">jchck_</a></h2>
		<p class="measure">My current site.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/modern-wordpress" target="_blank">Modern WordPress</a></h2>
		<p class="measure">It's 2016, let's WordPress like it. Part of an ongoing tutorial series.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/wp-pesticide" target="_blank">WordPress + Pesticide</a></h2>
		<p class="measure">Lorem ipsum and such, etc.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/bow-tie" target="_blank">Bow Tie</a></h2>
		<p class="measure">A WordPress theme that is so fresh and so clean.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/sagebox" target="_blank">Sagebox</a></h2>
		<p class="measure">Just the stuff needed to Sage + Flexboxgrid + have a happy day.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/here-now" target="_blank">Here Now</a></h2>
		<p class="measure">A plugin to use WordPress for managing/hosting/etc a podcast</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/jaechicks-site" target="_blank">Jaechick's Site</a></h2>
		<p class="measure">My previous WordPress site built on Roots.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/wp-bower-theme" target="_blank">WP Bower</a></h2>
		<p class="measure">Just a simple theme to share using Bower in WordPress. Part of a tutorial.</p>
		<h2 class="my2 bold"><a href="https://github.com/jchck/wp-recursion" target="_blank">WP Recursion</a></h2>
		<p class="measure">A theme for those times when you really gotta show a client that you really did do something.</p>
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