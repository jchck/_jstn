<div class="container-fluid wrap-12-launches">
	<h1 class="mt0 text-center h1-md">12 Launches</h1>
	<p>Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar.</p>
	<div class="row center-sm">
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class('col-md-3 col-sm-6 col-xs-12 pb3-md pl2-md pr2-md pb4 pl3 pr3 flex'); ?>>
				<a href="<?php the_permalink(); ?>" class="post-card border-radius img-size p3 flex flex-center ie10-width100">
					<div class="text-center center-block ie-max-width100">
						<header class="ie10-width100">
							<h2 class="mt0">01</h2>
							<h3 class="h3 mb0 mt0"><?php the_title(); ?></h3>
						</header>
					</div>
					<div class="post-img ie10-width100" style="background: url('<?php the_field('main_image'); ?>'); background-size: cover;"></div>
				</a>
			</article>
		<?php endwhile; ?>
		<!-- Static -->
		<article <?php post_class('col-md-3 col-sm-6 col-xs-12 pb3-md pl2-md pr2-md pb4 pl3 pr3 flex'); ?>>
			<div class="post-card border-radius img-size p3 flex flex-center ie10-width100">
				<div class="text-center center-block ie-max-width100">
					<header class="ie10-width100">
						<h2 class="mt0">02</h2>
						<h3 class="h3 mb0 mt0">Upcomming</h3>
					</header>
				</div>
				<div class="post-img ie10-width100" style="background: url('<?php the_field('main_image'); ?>'); background-size: cover;"></div>
			</div>
		</article>

	</div>
</div>