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
	<p class="mt4 mb4 pb4 border-bottom-gray">1 project launch per month for an entire year.</p>
	<div class="row">
		<!-- Static Row 1 -->
		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/test')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'jframe' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>jFrame</h3>
						<p class="m0">A CSS Styleguide</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching Febuary</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching March</p>
					</div>
				</div>
			</a>
		</article>

		<!-- Static Row 2 -->
		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching April</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching May</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching June</p>
					</div>
				</div>
			</a>
		</article>

		<!-- Static Row 3 -->
		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching July</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching August</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching September</p>
					</div>
				</div>
			</a>
		</article>

		<!-- Static Row 4 -->
		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching October</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching November</p>
					</div>
				</div>
			</a>
		</article>

		<article <?php post_class('col-md-4 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?= esc_url(home_url('12-launches/')); ?>" class="color-box flex middle-xs p2">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="width-100 ml2 mr2">
						<h3 data-heading>Coming Soon</h3>
						<p class="m0">Launching December</p>
					</div>
				</div>
			</a>
		</article>
	</div>
</div>