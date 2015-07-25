<?php while (have_posts()) : the_post(); ?>	
	<?php 
		$blog       = $wp_query;
		$wp_query   = null;
		$wp_query   = new WP_Query(); $wp_query->query('posts_per_page=1');
		while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
    <div class="latest-post text-center" style="background-image: url(<?php the_field('featured_image') ?>)">
    	<div class="container-fluid wrap">
			<h3 data-fitter-happier-text class="text-uppercase"><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>

	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
