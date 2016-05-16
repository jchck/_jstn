<?php while ( have_posts() ): the_post(); ?>
	<header class="col-8">
		<?php get_template_part( 'templates/page', 'title' ); ?>
	</header>

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Featured Articles</p>
	</div>

	<article class="col-6 my4">
		<h2 class="mt0 pt2 bold"><a href="#">The Title</a></h2>
		<p class="measure">The positioning of text within the page margins. Alignment can be flush left, flush right, justified, or centered. Flush left and flush right are sometimes referred to as left justified and right justified.</p>
	</article>
	<article class="col-6 my4">
		<h2 class="mt0 pt2 bold"><a href="#">Another Title</a></h2>
		<p class="measure">The part of lowercase letters (such as k, b, and d) that ascends above the x-height of the other lowercase letters in a face.</p>
	</article>

	<div class="col-12 border-top border-width-skinny">
		<p class="caps mb0">Open Source</p>
	</div>

	<article class="col-12 my4">
		<p class="mb0 caps">WordPress</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/jchck_" target="_blank">jchck_</a></h2>
		<p class="measure">My current site.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/modern-wordpress" target="_blank">Modern WordPress</a></h2>
		<p class="measure">It's 2016, let's WordPress like it. Part of an ongoing tutorial series.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/wp-pesticide" target="_blank">WordPress + Pesticide</a></h2>
		<p class="measure">Lorem ipsum and such, etc.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/bow-tie" target="_blank">Bow Tie</a></h2>
		<p class="measure">A WordPress theme that is so fresh and so clean.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/sagebox" target="_blank">Sagebox</a></h2>
		<p class="measure">Just the stuff needed to Sage + Flexboxgrid + have a happy day.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/here-now" target="_blank">Here Now</a></h2>
		<p class="measure">A plugin to use WordPress for managing/hosting/etc a podcast</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/jaechicks-site" target="_blank">Jaechick's Site</a></h2>
		<p class="measure">My previous WordPress site built on Roots.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/wp-bower-theme" target="_blank">WP Bower</a></h2>
		<p class="measure">Just a simple theme to share using Bower in WordPress. Part of a tutorial.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/wp-recursion" target="_blank">WP Recursion</a></h2>
		<p class="measure">A theme for those times when you really gotta show a client that you really did do something.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/lorem-oberst" target="_blank">Lorem Oberst</a></h2>
		<p class="measure">A plugin for all your Conor Oberst dummy text needs.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/tweet-it" target="_blank">Tweet It</a></h2>
		<p class="measure">A plugin to make it easier for your readers to tweet your content.</p>
		<h2 class="mt0 pt2 bold"><a href="https://github.com/jchck/wp-modern-business" target="_blank">Modern Business</a></h2>
		<p class="measure">A Roots WordPress template.</p>

	</article>
<?php endwhile; ?>