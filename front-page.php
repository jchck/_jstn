<?php while (have_posts()) : the_post(); ?>	
	<?php 
		$blog       = $wp_query;
		$wp_query   = null;
		$wp_query   = new WP_Query(); $wp_query->query('posts_per_page=1');
		while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
    <div class="latest-post text-center" style="color: <?php the_field('heading_color') ?>; background-image: url(<?php the_field('featured_image') ?>)">
    	<div class="container-fluid wrap">
			<a href="<?php echo the_permalink(); ?>"><h2 data-heading class="text-capitalize"><?php the_title(); ?></h2 ></a>
			<?php the_excerpt(); ?>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>

	<div class="container-fluid wrap">
		<div class="row center-xs">
			<ul class="list-inline">
				<li>i design</li>
				<li>i develop</li>
				<li>i podcast</li>
				<li>i travel</li>
			</ul>
		</div>
	</div>

	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
