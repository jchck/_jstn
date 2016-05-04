<?php use Roots\Sage\Wrap; ?>

<header class="banner canvas container-fluid <?= Wrap\wrap(); ?>">
  <div class="row center-xs middle-xs pt4 pb4">
  	<div class="col-xs-12 col-sm-6">
  		<div class="flex center-xs flex-off-sm">
			<a class="logo" href="<?= esc_url(home_url('/ck')); ?>"><?php get_template_part( 'templates/logo', 'jc' ); ?></a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6">
		<nav id="nav" class="flex end-sm center-xs">
			<?php
			if (has_nav_menu('primary_navigation')) :
			  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-inline mb0 small']);
			endif;
			?>
		</nav>
	</div>
  </div>
</header>