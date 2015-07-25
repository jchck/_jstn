<div class="latest-post text-center">
	<div class="container-fluid wrap">
		<h3>latest post title</h3>
	<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare adipiscing nunc adipiscing. Condimentum turpis massa.</p>
	</div>
</div>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
