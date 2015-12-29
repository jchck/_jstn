<div class="container-fluid wrap">

<?php get_template_part('templates/page', 'header'); ?>

<div class="row middle-sm center-xs">
	<div class="col-sm-6 col-xs-9">
		<img class="center-block mr2-sm kid-confused" src="<?php echo get_template_directory_uri() . '/dist/images/kid-confused.gif'; ?>">
	</div>
	<div class="col-sm-6 col-xs-9">
		<p class="ml2-sm">Are you as confused as this kid right now?</p>
		<p class="ml2-sm">Don't worry about it, not everything lines up the way you think it should.</p>
		<p class="ml2-sm"><a href="<?= esc_url(home_url('/ck')); ?>">It'll be alright</a></p>
	</div>
</div>

<div class="row">
	<div class="col-sm">
		<div class="m4 text-center">
			<?php get_search_form(); ?>
		</div>
	</div>
</div>