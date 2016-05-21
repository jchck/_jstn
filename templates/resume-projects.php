<?php 

use Jchck\Excerpt;

?>

<div class="col-12 sm-col-6 sm-pr3">
	<h3 class="h1 border-top mt0 pt2 bold">Project Highlights</h3>
</div>
<article class="col-12 sm-col-6 pb4">

	<?php 
			/**
			 * The WordPress Query class.
			 * @link http://codex.wordpress.org/Function_Reference/WP_Query
			 *
			 */
			$args = array(
				'post_type' => 'work',
				'posts_per_page' => 2,
				'tax_query' => array(
					array(
						'taxonomy' => 'featured-work',
						'field' => 'slug',
						'terms' => 'highlight',
					),
				),
			);
		
		$query = new WP_Query( $args );
		
	 ?>

	 <?php while ( $query->have_posts() ) : $query->the_post(); ?>
	 	<h3 class="h2 bold mt0"><?php the_title(); ?></h3>
	 	<p class="measure caps m0"><a href="<?php the_permalink(); ?>">Case Study</a></p>
	 	<?= Excerpt\excerpt(); ?>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</article>