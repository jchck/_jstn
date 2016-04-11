<?php if (is_front_page() || is_page() || is_category() || is_post_type_archive( 'work' ) || is_post_type_archive( '12-launches' ) || is_404() || is_home() ) {
	$wrap = 'wrap';
} else {
	$wrap = 'wrap-sm';
}
?>

<header class="banner canvas container-fluid <?php echo $wrap; ?>">
  <div class="row center-xs pt4 pb4">
  	<div class="col-xs">
		<a class="logo" href="<?= esc_url(home_url('/ck')); ?>"><?php get_template_part( 'templates/logo', 'jc' ); ?></a>
	</div>
	<div class="col-xs">
		<nav id="nav">
			<?php
			if (has_nav_menu('primary_navigation')) :
			  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-inline mb0']);
			endif;
			?>
		</nav>
	</div>
  </div>
</header>