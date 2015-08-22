<?php 
	$blog       = $wp_query;
	$wp_query   = null;
	$wp_query   = new WP_Query(); $wp_query->query('posts_per_page=1');
	while ($wp_query->have_posts()) : $wp_query->the_post();
?>
<div class="latest-post text-center" style="color: <?php the_field('heading_text_color') ?>; background-image: url(<?php the_field('banner_image') ?>)">
	<div class="container-fluid wrap">
		<a href="<?php echo the_permalink(); ?>"><h2 data-heading class="text-capitalize"><?php the_title(); ?></h2 ></a>
		<p><a href="<?php echo the_permalink(); ?>" class="btn btn-default">Continue</a></p>
	</div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>