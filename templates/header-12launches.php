<header class="banner canvas container-fluid wrap-12-launches" role="banner">
  <div class="row pr0-md pr3-xs  pt2">
  	<div class="col-sm">
		<a class="logo" href="<?= esc_url(home_url('/ck')); ?>"><?php get_template_part( 'templates/logo' ); ?></a>
	</div>
	<div class="flex">
	  	<div class="col-sm end-xs">
		  	<?php if ( !is_page( array('Hire Justin', 'Follow Along', 'Hire Justin Step 2', 'Planner') ) ) { ?>
				<a href="<?= esc_url(home_url('hire-justin')); ?>" class="btn btn-blue mr2 hidden-xs">Hire Me</a>
			<? } ?>
		    <a href="#" id="toggle-nav" class="btn btn-default"><i class="i-menu"></i></a>
		</div>
	</div>
  </div>
</header>