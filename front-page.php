<?php while (have_posts()) : the_post(); ?>	

	<div class="container-fluid wrap">

		<div class="row middle-xs center-xs">
			<div class="col-sm-6 col-xs-12">
				<p class="m0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus sem ac accumsan dictum. In vehicula augue lorem, id ultricies quam pharetra molestie. Donec sem metus, scelerisque a justo sit amet, commodo lobortis lectus.</p>
			</div>
			<div class="col-sm-6 col-xs-10 first-xs last-sm last-md last-lg">
				<img src="<?php echo get_template_directory_uri() . '/dist/images/hat.jpg'; ?>">
			</div>
		</div>

		<div class="row center-xs mt4 mb4">
			<div class="col-xs-12">
				<h2 class="m0 text-center">Organizations I've Worked With</h2>
			</div>
		</div>
		<div class="row center-sm">
			<div class="col-sm-4">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
			<div class="col-sm-4">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
			<div class="col-sm-4">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
		</div>

		<div class="row center-xs">
			<div class="col-sm-4">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
			<div class="col-sm-4">
				<img class="thumbnail center-block" src="<?php echo get_template_directory_uri() . '/dist/images/square.jpg'; ?>">
			</div>
		</div>

		<div class="row center-xs mt4">
			<div class="col-sm-10 col-xs-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus sem ac accumsan dictum. In vehicula augue lorem, id ultricies quam pharetra molestie. Donec sem metus, scelerisque a justo sit amet, commodo lobortis lectus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus sem ac accumsan dictum. In vehicula augue lorem, id ultricies quam pharetra molestie. Donec sem metus, scelerisque a justo sit amet, commodo lobortis lectus.</p>
				<p class="mb0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus sem ac accumsan dictum. In vehicula augue lorem, id ultricies quam pharetra molestie. Donec sem metus, scelerisque a justo sit amet, commodo lobortis lectus.</p>
			</div>
		</div>

		

	</div>

<?php endwhile; ?>
