<?php while (have_posts()) : the_post(); ?>	

	<div class="container-fluid wrap">

		<div class="row middle-xs center-xs">
			<div class="col-sm-6 col-xs-12">
				<p class="lead">Hi, I'm Justin. I'm a designer, developer, traveler, comicbook reader. You can hire me.</p>
				<p>I create beautiful websites for amazing organizations so they can do more of what they do best.</p>
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
			<div class="col-sm-3 col-xs-6">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
			<div class="col-sm-3 col-xs-6">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
			<div class="col-sm-3 col-xs-6">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
			<div class="col-sm-3 col-xs-6">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
		</div>

		
		<div class="row center-xs mt4">
			<div class="col-sm-10 col-xs-12">
				<p>Designer, developer, consultant.</p>
				<p>WordPress consultant, designer, developer, project manager. I specialize in building custom websites that are visually appealing and infused with each client’s unique personality. My work is driven by ongoing collaboration, a passion for positive causes, and personal innovation.</p>
				<p>With a keen eye for user experience, social media strategy, search optimization, and how all these play together I bring a valuable perspective to every project I take on.</p>
				<p class="mb0">I’m also a devout cyclist, amateur photographer, social justice advocate, vegetarian, and avid DC Comics fan (Detective Comics 27, anyone?). You can usually find me rolling around St. Louis on my bike, reading at 2 Schae Cafe, or enjoying the day in Forest Park.</p>
			</div>
		</div>

		

	</div>

<?php endwhile; ?>
