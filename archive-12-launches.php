<?php
    $args = array(
		//Type & Status Parameters
		'post_type'   => '12-launches',
		'post_status' => 'publish',
		
		//Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',
		
		//Pagination Parameters
		'posts_per_page'         => 12
			
		);

    $query = new WP_Query( $args );
?>

<div class="container-fluid wrap">
	<h1 data-heading>12 Launches</h1>
	<p class="mt4 mb4 pb4 border-bottom-gray">Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar.</p>
	<div class="row">
		<!-- Static Row 1 -->
		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/test')); ?>" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'jframe' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>jFrame</h3>
						<p class="m0">A CSS Styleguide</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching Febuary</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching March</p>
					</div>
				</div>
			</a>
		</article>

		<!-- Static Row 2 -->
		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching April</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching May</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching June</p>
					</div>
				</div>
			</a>
		</article>

		<!-- Static Row 3 -->
		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching July</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching August</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching September</p>
					</div>
				</div>
			</a>
		</article>

		<!-- Static Row 4 -->
		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching October</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching November</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="#" class="launch-card flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching December</p>
					</div>
				</div>
			</a>
		</article>
	</div>
</div>