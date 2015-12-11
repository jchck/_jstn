<?php if (is_front_page() || is_page() || is_category() || is_post_type_archive( 'work' ) ) {
	$wrap = 'wrap';
} else {
	$wrap = 'wrap-sm';
}
?>

<header class="banner canvas container-fluid <?php echo $wrap; ?>" role="banner">
  <div class="row pt4 pb4">
  	<div class="col-xs">
		<a class="logo" href="<?= esc_url(home_url('/ck')); ?>"><?php get_template_part( 'templates/logo', 'sm' ); ?></a>
	</div>
	<div class="flex">
	  	<div class="col-xs end-xs">
		  	<?php if ( !is_page( array('Hire Justin', 'Follow Along', 'Hire Justin Step 2', 'Planner') ) ) { ?>
				<a href="<?= esc_url(home_url('hire-justin')); ?>" class="btn btn-blue mr2 hidden-xs">Hire Me</a>
			<? } ?>
		    <a href="#" id="toggle-nav" class="btn btn-default"><i class="i-menu"></i></a>
		</div>
	</div>
  </div>
</header>