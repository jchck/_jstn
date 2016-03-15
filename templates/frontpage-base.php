<div class="container-fluid wrap frontpage-base">

	<div class="row middle-xs center-xs between-sm link pb3">
		<div class="col-sm-6 col-xs-12">
			<h1 class="lead mt2 mb0 m0-xs mb2-sm mb3-md">Hi, I'm Justin Chick.<br />I'm a digital nomad and freelance front-end developer.</h1>
			<p class="m0">I live out of a backpack, take risks every day, and help other freelancers do the same.</p>
		</div>
		<div class="col-sm-5 col-xs-12 first-xs last-sm last-md last-lg">
			<img style="width: 100%" src="<?php echo get_template_directory_uri() . '/dist/images/hat.jpg'; ?>">
		</div>
	</div>

	<div class="border-top-gray border-bottom-gray pt4 mt4 pb4 mb4">

		<h3 class="text-center m0">Signup to get inspired every week.</h3>
		
		<?php echo do_shortcode( '[gravityform id="4" title="false" description="false"]' ); ?>

	</div>

</div>