<?php
/**
 * Template Name: Call Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap step2">
		<h1 data-heading>Want to talk?</h1>
		<p>That’s it. No gimmicky sales pitch or “let’s see if we can work together” type stuff. You’ve got ideas, I’ve got ideas, none of these ideas do much all alone.</p>
		<ul class="timeline">
			<li>Maybe you’re thinking about going nomad but don’t know where to start</li>
			<li>Maybe your freelance business isn't what it could be</li>
			<li>Maybe you just want to talk about your side project</li>
		</ul>
		<p class="m0">If you're like me solid ideas and the support to pursue them every day is what gets you up in the morning.</p>

		<div class="row center-xs mt4 mb4">
			<div class="flex col-sm-8 col-xs-12 mr2-sm ml2-sm mb3 mb0-sm center-xs">
				<a href="#lets-go" class="p3 work-box hire-cta flex flex-center border">
					<div class="ie10-width100">
						<p class="h4 strong m0">What do you say?</p>
					</div>
				</a>
			</div>
		</div>
		<div class="bg-off-white border-radius">
			<div class="row middle-xs center-xs">
				<div class="col-sm col-xs-10">
					<img style="margin-top:0;" class="pr2 border-radius-top-left" data-action="zoom" src="<?php echo get_template_directory_uri() . '/dist/images/smile-pic.jpg'; ?>">
				</div>
				<div class="col-sm col-xs-10">
					<p class="lead pl2 mb0">Hi, I'm Justin Chick and I’ve been a full-time freelancer for the past 5 years.</p> 
				</div>
			</div>
			<div class="row center-xs">
				<div class="col-sm-9 col-xs-10">
					<p class="mt4">During undergrad, I took an internship at a digital agency and I worked for that agency for about 6 months.</p>
					<p>It was a fantastic experience and I'm grateful to have had it. I learned a tremendous amount while there including that working for someone else wasn't for me. My path went a different way.</p>
					<p>I’ve been running my own business ever since.</p>
					<p>With the help of friends I've launched a <a href="http://livenowstl.com/" target="_blank">live streaming network</a> a <a href="http://hereandnow.io/" target="_blank">podcast</a>, a <a href="<?= esc_url(home_url('work/our-collective')); ?>" target="_blank">second business</a>, and more side projects than I can remember. Right now I'm living as a digital nomad.</p>
					<p>That doesn’t include all the client sites and projects I’ve been a part of either. Every one of them a learning experience.</p>
					<ol class="timeline">
						<li>I learned to code because I needed to.</li>
						<li>I learned how to keep my books and file taxes because I needed to.</li>
						<li>I learned how to negotiate rates, talk to lawyers, and say 'no' (but not actually at the same time) because these were all things I needed to do to keep the business on track and my life balanced.</li>
					</ol>
					<p>That doesn't mean I didn't get help or input from others because I did and still do constantly. That's why I think we should talk sometime too.</p>
				</div>
			</div>
		</div>
		<div class="mt3 mb3">
			<h3 data-heading>It's All a Learning Experience Anyway</h3>
		</div>

		

		<div id="lets-go" class="hire-form">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://calendly.com/justinchick/new-project/"></iframe>
			</div>
		</div>
	</div>
<?php endwhile; ?>