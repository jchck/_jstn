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
				//'category_name' => 'featured',
				'post_type' => 'work',
				'posts_per_page' => 4
			);
		
		$query = new WP_Query( $args );
		
	 ?>

	 <?php while ( $query->have_posts() ) : $query->the_post(); ?>
	 	<h3 class="h2 bold mt0"><?php the_title(); ?></h3>
	 	<p class="measure caps m0"><a href="<?php the_permalink(); ?>">Case Study</a></p>
	 	<?= Excerpt\excerpt(); ?>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

	<h3 class="h2 bold mt0">The Chapel Law Group</h3>
	<p class="measure caps m0"><a href="<?= esc_url(home_url('/case-studies/chapel-law-group')); ?>">Case Study</a></p>
	<p class="measure mt0">It was an honor and a privilege to oversee the Chapel Law Group’s branding and identity process. With an identity in place, I then developed a WordPress site tailor fit to the firm’s exact needs.</p>
	<h3 class="h2 bold">Wash U Med School</h3>
	<p class="measure caps m0"><a href="<?= esc_url(home_url('/case-studies/wash-u-med-school')); ?>">Case Study</a></p>
	<p class="measure mt0">I had the privilege of revamping the site for the Office of Faculty Affairs for the nationally renowned medical school. Unfortunately, a majority of the heavy lifting of the project rests behind a secure login.</p>
	<h3 class="h2 bold">Dashtaki Law Firm</h3>
	<p class="measure caps m0"><a href="<?= esc_url(home_url('/case-studies/dashtaki-law-firm')); ?>">Case Study</a></p>
	<p class="measure mt0">Although the Dashtaki Law Firm is on of my oldest active clients the current version of the firm’s site launched August of 2015. I provided creative direction of the law firm’s brand identity and took the firm through two complete site builds.</p>
	<h3 class="h2 bold">Our Collective</h3>
	<p class="measure caps m0"><a href="<?= esc_url(home_url('/case-studies/our-collective')); ?>">Case Study</a></p>
	<p class="measure mt0">Though in operation for just under a year, I helped co-found Our Collective to share in the making of a kind, humble, and just view of interaction design.</p>

</article>