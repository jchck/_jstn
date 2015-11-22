<h5 class="text-center mt0 mb1 ad-title">Ad</h5>
	<div class="row center-xs">
<?php
    $args = array(
		//Type & Status Parameters
		'post_type'   => 'ads',
		'post_status' => 'publish',
		
		//Order & Orderby Parameters
		'order'               => 'RAND',
		'orderby'             => 'date',
		
		//Pagination Parameters
		'posts_per_page'         => 1
			
		);

    $query = new WP_Query( $args );
?>

<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

	<a href="<?php echo the_field('ad_url'); ?>" target="_blank" class="ad">

		<img class="center-block" src="<?php the_field('ad_image'); ?>">

	</a>

<?php endwhile; endif; wp_reset_postdata(); ?>

</div>