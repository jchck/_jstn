<div class="container-fluid wrap">

	<div class="row middle-xs center-xs between-sm">
		<div class="col-sm-6 col-xs-12">
			<h1 class="lead m0">Hi, I'm Justin Chick.<br />Designer, front-end developer, and digital nomad.</h1>
			<h2 class="lead mb2-sm mb3-md mt0"><a class="highlight" title="Hire freelance web designer Justin Chick" href="<?= esc_url(home_url('hire-justin')); ?>">You can hire me.</a></h2>
			<p class="m0">I believe in simplicity and that the web should be easy to use for everyone.</p>
		</div>
		<div class="col-sm-5 col-xs-10 first-xs last-sm last-md last-lg">
			<img src="<?php echo get_template_directory_uri() . '/dist/images/hat.jpg'; ?>">
		</div>
	</div>

	<div class="row middle-xs border-top-gray border-bottom-gray pt3 mt4 pb3 mb4">
		<div class="col-sm-6 col-xs-12 p0">
			<a href="<?= esc_url(home_url('work')); ?>" class="color-box middle-xs p2 flex">
				<?php get_template_part( 'templates/imac' ); ?>
				<div class="col-xs">
					<div class="card-text">
						<h2 data-heading>Work Portfolio</h2>
						<p class="m0">Selected collection of client projects</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-6 col-xs-12 p0">
			<a href="<?= esc_url(home_url('12-launches')); ?>" class="color-box middle-xs p2 flex">
				<?php get_template_part( 'templates/launches', 'launching' ); ?>
				<div class="col-xs">
					<div class="card-text">
						<h2 data-heading>12 Launches</h2>
						<p class="m0">1 project per month for an entire year</p>
					</div>
				</div>
			</a>
		</div>
	</div>

</div>

<div class="container-fluid wrap">
			
	<div class="row center-xs mt4">
		<div class="col-sm-10 col-xs-12">
			<div class="bg-off-white border-radius p4">
				<p>Yes, the web should be easy to use for <em>everyone</em>.</p>
				<p>It's people of all walks of life who use the web every day, and I keep this at the forefront of every decision I make. How will this feature, design, experience affect the people who'll be using this site? Who are those people and what do we know about them?</p>
				<p>My work is driven by collaboration, an inquisitive nature, and some good ol’ fashioned elbow grease. With these three pillars (and over five years full-time freelance experience), I'm able to create thoughtful, holistic design solutions that get out of the way to allow people to accomplish what they need to.</p>
				<p>I’m also a devout cyclist, <a href="<?= esc_url(home_url('category/photography/')); ?>" title="Photography of Justin Chick | @jchck_">amateur photographer</a>, social justice advocate, vegetarian, and avid DC Comics fan (Detective Comics 27, anyone?). Right now you can <a href="<?= esc_url(home_url('/follow-along')); ?>" tltle="">follow me treking around the globe</a>, reading under a tree, or enjoying the day in a new cafe.</p>
				<p class="m0">Want to find out what we can do together? <a title="Hire Justin Chick freelance web designer" class="highlight" href="<?= esc_url(home_url('hire-justin')); ?>">This is a good first step.</a></p>
			</div>
		</div>
	</div>

</div>

