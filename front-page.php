<?php while (have_posts()) : the_post(); ?>	
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

	<div class="container-fluid wrap">
		<div class="row center-xs">
			<ul class="list-inline">
				<li>i design</li>
				<li>i develop</li>
				<li>i podcast</li>
				<li>i travel</li>
			</ul>
		</div>

		<div class="row">
			<div class="col-sm-4 col-xs-10">
				<img src="<?php echo get_template_directory_uri() . '/dist/images/jchck.jpg'; ?>">
			</div>
			<div class="col-sm-8 col-xs-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus sem ac accumsan dictum. In vehicula augue lorem, id ultricies quam pharetra molestie. Donec sem metus, scelerisque a justo sit amet, commodo lobortis lectus. Suspendisse sit amet erat neque. Quisque in arcu enim. Quisque facilisis dolor auctor, viverra massa ac, dictum ante. Nullam in venenatis orci. Vestibulum viverra, nisi ut efficitur commodo, metus ligula iaculis nisl, id elementum libero sem ut augue. Maecenas sagittis nisl at ligula feugiat vehicula.</p>
				<p>Curabitur tincidunt erat porta lorem semper, faucibus fermentum erat dictum. Sed vel consectetur magna. In sit amet lectus egestas, ultricies justo non, vestibulum nibh. Aenean molestie, augue id bibendum tincidunt, sem velit rutrum dolor, a rutrum lorem erat ac arcu. Etiam facilisis mollis ex, non varius augue blandit dapibus. Maecenas eu diam mattis magna dictum tincidunt nec elementum dolor. Nulla facilisi. Ut tincidunt dapibus sapien eu porttitor. Donec lacinia euismod condimentum. Nullam egestas tincidunt leo, sed fringilla tellus luctus ac.</p>
				<p>Suspendisse sapien erat, suscipit vel porta et, imperdiet eget massa. Phasellus scelerisque dolor vitae velit posuere, cursus egestas quam sollicitudin. Mauris varius, eros ut lacinia tempus, lacus turpis fermentum metus, in sollicitudin velit sapien eu dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus turpis ante, mattis euismod est rhoncus id. Aenean efficitur aliquet urna, ac dignissim lacus tincidunt nec. Mauris facilisis interdum nisl. Curabitur eu elit quis nibh facilisis pretium. Sed eu ipsum pharetra, ornare enim vitae, vestibulum elit. Etiam vitae nisl at nulla luctus fermentum. Integer facilisis auctor odio, et suscipit arcu viverra non. Nullam sodales eget felis nec euismod. Donec posuere tristique sem. Aliquam sodales libero diam, et congue erat faucibus et.</p>
			</div>
		</div>
	</div>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
