<?php while (have_posts()) : the_post(); ?>
	<div class="latest-post text-center">
		<div class="container-fluid wrap">
			<?php 
				$blog       = $wp_query;
				$wp_query   = null;
				$wp_query   = new WP_Query(); $wp_query->query('posts_per_page=1');
				while ($wp_query->have_posts()) : $wp_query->the_post();
		    ?>
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>

	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
