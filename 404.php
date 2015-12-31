<div class="container-fluid wrap">

<?php get_template_part('templates/page', 'header'); ?>

<div class="row middle-sm center-xs">
	<div class="col-sm-6 col-xs-9">
		<img class="center-block mr2-sm width-100" src="<?php echo get_template_directory_uri() . '/dist/images/kid-confused.gif'; ?>">
	</div>
	<div class="col-sm-6 col-xs-9">
		<p class="ml2-sm">Are you as confused as this kid right now?</p>
		<p class="ml2-sm">It'll be alright, maybe this search form can help?</p>
		<p class="ml2-sm"><?php get_search_form(); ?></p>
	</div>
</div>