<?php while ( have_posts() ) : the_post(); ?>
	<header class="sm-col-6 sm-pr3">
		<?php get_template_part( 'templates/page', 'title' ); ?>
		<p class="h2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum condimentum elementum.</p>
	</header>
	<article class="sm-col-6">
		<p class="measure">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</article>

	<div class="sm-col-6 sm-pr3">
		<h2 class="h1 border-top mt0 pt2 bold">Professional Overview</h2>
	</div>
	<article class="sm-col-6">
		<h3 class="h2 bold mt0">Fulltime Freelance</h3>
		<time class="caps">March 2010 - Current</time>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h3 class="h2 bold">Development Lead & Partner - Our Collective</h3>
		<time class="caps">Dec 2014 - Sep 2015</time>
		<p class="mt0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h3 class="h2 bold">PR Firestarter - Eureka Interactive</h3>
		<time class="caps">Aug 2010 - Jan 2011</time>
		<p class="mt0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</article>
	<div class="sm-col-6 sm-pr3">
		<h3 class="h1 border-top mt0 pt2 bold">Skills Overview</h3>
	</div>
	<article class="sm-col-6">
		<ul class="list-reset mt0">
			<li class="mb2">HTML</li>
			<li>CSS</li>
			<ul class="list-reset mt0 pl2">
				<li>Sass</li>
				<li>Less</li>
				<li>PostCss</li>
			</ul>
			<li>PHP</li>
			<ul class="list-reset mt0 pl2">
				<li>Liquid Templating</li>
			</ul>
			<li>JavaScript</li>
			<ul class="list-reset mt0 pl2">
				<li>jQuery</li>
			</ul>
		</ul>
	</article>
<?php endwhile; ?>