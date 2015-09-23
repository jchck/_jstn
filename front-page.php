<?php
    $args = array(
		//Type & Status Parameters
		'post_type'   => 'work',
		'post_status' => 'publish',
		
		//Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',
		
		//Pagination Parameters
		'posts_per_page'         => 3
			
		);

    $query = new WP_Query( $args );
?>	

	<div class="container-fluid wrap">

		<div class="row middle-xs center-xs">
			<div class="col-sm-6 col-xs-12">
				<h1 class="lead m0">Hi, I'm Justin Chick. I'm a designer, developer, traveler, and comicbook reader.</h1>
				<h2 class="lead mb2-sm mb3-md mt0"><a class="highlight" title="Hire freelance web designer Justin Chick" href="<?= esc_url(home_url('hire-justin')); ?>">You can hire me.</a></h2>
				<p>I believe in simplicity and that the web should be easy to use for everyone.</p>
			</div>
			<div class="col-sm-6 col-xs-10 first-xs last-sm last-md last-lg">
				<img src="<?php echo get_template_directory_uri() . '/dist/images/hat.jpg'; ?>">
			</div>
		</div>

		<div class="row center-xs mt4 mb4">
			<div class="col-xs-12">
				<h2 class="m0 text-center">Projects I've Been A Part Of</h2>
			</div>
		</div>
		<div class="row center-xs">
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<div class="col-sm-4 col-xs-10 flex pl2 pr2">
					<a href="<?php the_permalink(); ?>" class="ipad">
						<?php get_template_part( 'templates/ipad' ); ?>
						<div class="ipad-screen" style="background: url('<?php the_field('ipad_screen'); ?>') center center; background-size: cover"></div>
					</a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>

		
		<div class="row center-xs mt4">
			<div class="col-sm-10 col-xs-12">
				<p>Yes, the web should be easy to use for <em>everyone</em>.</p>
				<p>It's people of all walks of life who ues the web everyday and I keep this at the forefront of every decision I make. How will this feature/design/experience effect the people who'll be using this site? Who are those people and what do we know about them?</p>
				<p>My work is driven by collaboration, an inquisitive nature, and some good `ol fashioned elbow greese. With these three pillars (and over 5 years full-time freelance experience) I'm able to create thoughtful, holistic design solutions that get out of the way to allow people to accomplish what they need to.</p>
				<p>I’m also a devout cyclist, <a href="https://instagram.com/jchck_/" title="Justin Chick on Instagram | @jchck_" target="_blank">amateur photographer</a>, social justice advocate, vegetarian, and avid DC Comics fan (<a href="<?= esc_url(home_url('dc-27')); ?>">Detective Comics 27, anyone?</a>). Right now, you can find me rolling around the western half of the United States by train, reading under a tree, or enjoying the day in a new cafe.</p>
				<p>Want to find out what we can do together? <a title="Hire Justin Chick freelance web designer" class="highlight" href="<?= esc_url(home_url('hire-justin')); ?>">This is a good first step.</a></p>
			</div>
		</div>

		

	</div>
