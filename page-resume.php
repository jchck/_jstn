<?php while ( have_posts() ) : the_post(); ?>
	<header class="col-12 sm-col-6 sm-pr3">
		<?php get_template_part( 'templates/page', 'title' ); ?>
		<p class="h2">I’m a freelance front-end developer with over 6 years experience in the WordPress ecosystem.</p>
		<p class="h3">Currently seeking fulltime employment.</p>
		<p class="m0 caps"><a href="#" target="_blank">Download PDF Resume</a></p>
	</header>
	<article class="col-12 sm-col-6 pb4">
		<p class="measure">I believe in simplicity and that the web should be easy to use for everyone.</p>
		<p class="measure">My work is driven by collaboration, an inquisitive nature, and some good old fashioned elbow grease. With these three pillars, I'm able to create thoughtful, holistic design solutions that get out of the way to allow people to accomplish what they need to.</p>
	</article>

	<div class="col-12 sm-col-6 sm-pr3">
		<h2 class="h1 border-top mt0 pt2 bold">Professional Overview</h2>
	</div>
	<article class="col-12 sm-col-6 pb4">
		<h3 class="h2 bold mt0">Fulltime Freelance</h3>
		<time class="caps">March 2010 - Current</time>
		<p class="measure">I oversee projects with organizations like <a href="#">Washington University Med School</a> and <a href="#">The Dashtaki Law Firm</a> (and many amazing folks in between) to craft custom WordPress solutions so they can achieve their goals.</p>
		<h3 class="h2 bold">Development Lead & Partner - Our Collective</h3>
		<time class="caps">Dec 2014 - Sep 2015</time>
		<p class="mt0 measure">Our Collective was a design consultancy I co-founded early in 2015. I oversaw client strategy and development. Nearly all of our projects included a custom WordPress build.</p>
		<h3 class="h2 bold">PR Firestarter - Eureka Interactive</h3>
		<time class="caps">Aug 2010 - Jan 2011</time>
		<p class="mt0 measure">I established Eureka Interactive’s online marketing offerings, oversaw strategy development and process implementation of client search marketing and social media campaigns.</p>
	</article>
	<div class="col-12 sm-col-6 sm-pr3">
		<h3 class="h1 border-top mt0 pt2 bold">Skills Overview</h3>
	</div>
	<article class="col-12 sm-col-6 pb4">
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
				<li>Gulp</li>
				<li>Grunt</li>
			</ul>
			<li class="mb2">MySQL</li>
			<li class="mb2">git</li>
			<li class="mb2">Bower</li>
			<li class="mb2">npm</li>
		</ul>
	</article>
	<div class="col-12 sm-col-6 sm-pr3">
		<h3 class="h1 border-top mt0 pt2 bold">Project Highlights</h3>
	</div>
	<article class="col-12 sm-col-6 pb4">
		<h3 class="h2 bold mt0">The Chapel Law Group</h3>
		<p class="measure caps m0"><a href="#">Case Study</a></p>
		<p class="measure mt0">It was an honor and a privilege to oversee the Chapel Law Group’s branding and identity process. With an identity in place, I then developed a WordPress site tailor fit to the firm’s exact needs.</p>
		<h3 class="h2 bold">Wash U Med School</h3>
		<p class="measure caps m0"><a href="#">Case Study</a></p>
		<p class="measure mt0">I had the privilege of revamping the site for the Office of Faculty Affairs for the nationally renowned medical school. Unfortunately, a majority of the heavy lifting of the project rests behind a secure login.</p>
		<h3 class="h2 bold">Dashtaki Law Firm</h3>
		<p class="measure caps m0"><a href="#">Case Study</a></p>
		<p class="measure mt0">Although the Dashtaki Law Firm is on of my oldest active clients the current version of the firm’s site launched August of 2015. I provided creative direction of the law firm’s brand identity and took the firm through two complete site builds.</p>
		<h3 class="h2 bold">Our Collective</h3>
		<p class="measure caps m0"><a href="#">Case Study</a></p>
		<p class="measure mt0">Though in operation for just under a year, I helped co- found Our Collective to share in the making of a kind, humble, and just view of interaction design.</p>

	</article>
<?php endwhile; ?>