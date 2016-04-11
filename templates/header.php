<?php if (is_front_page() || is_page() || is_category() || is_post_type_archive( 'work' ) || is_post_type_archive( '12-launches' ) || is_404() || is_home() ) {
	$wrap = 'wrap';
} else {
	$wrap = 'wrap-sm';
}
?>

<header class="banner canvas container-fluid <?php echo $wrap; ?>">
  <div class="row pt4 pb4">
  	<div class="col-xs">
		<a class="logo" href="<?= esc_url(home_url('/ck')); ?>"><?php get_template_part( 'templates/logo', 'jc' ); ?></a>
	</div>
	
  </div>
</header>