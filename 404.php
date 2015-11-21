<div class="container-fluid wrap">

<?php get_template_part('templates/page', 'header'); ?>

<div class="row middle-sm center-xs">
	<div class="col-sm-6 col-xs-9">
		<img class="center-block mr2-sm kid-confused" src="<?php echo get_template_directory_uri() . '/dist/images/kid-confused.gif'; ?>">
	</div>
	<div class="col-sm-6 col-xs-9">
		<p class="ml2-sm">Are you as confused as this kid right now?</p>
		<p class="ml2-sm">Don't worry about it, not everything lines up the way you think it should.</p>
		<p class="ml2-sm"><a href="<?= esc_url(home_url('/ck')); ?>">You can either go home</a></p>
	</div>
</div>

<h2 class="text-center mt4 mb4">Or Read An Article or Two</h2>

<div class="row">
	<?php
    	$args = array(
			//Type & Status Parameters
			'post_type'   => 'post',
			'post_status' => 'publish',
			
			//Order & Orderby Parameters
			'order'               => 'DESC',
			'orderby'             => 'date',
			
			//Pagination Parameters
			'posts_per_page'         => 3
				
			);

	    $query = new WP_Query( $args );
	?>

	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
		<?php get_template_part( 'templates/content' ); ?>
	<?php endwhile; endif; wp_reset_postdata(); ?>

</div>