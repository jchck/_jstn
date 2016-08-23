<?php /* (just) one thing */ ?>

<?php while ( have_posts()) : the_post(); ?>

	<div class="flex  flex-column justify-center">
		<div class="col-12 sm-col-10 md-col-8">
			<h1 class="h1-fp center">(just) 1 thing</h1>
			<p class="h2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<form class="one-thing">
			<div class="relative mb3">
				<input class="block h3 p1 border-bottom border-width-skinny" type="text" required>
				<span class="highlight absolute col-12 left-0"></span>
				<span class="bar relative block"></span>
				<label class="h4 absolute">Name</label>
			</div>
			<div class="relative mb3">
				<input class="block h3 p1 border-bottom border-width-skinny" type="text" required>
				<span class="highlight absolute col-12 left-0"></span>
				<span class="bar relative block"></span>
				<label class="h4 absolute">Email</label>
			</div>
		</form>
	</div>

<?php endwhile; ?>