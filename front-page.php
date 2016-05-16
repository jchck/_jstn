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
<?php endwhile; ?>