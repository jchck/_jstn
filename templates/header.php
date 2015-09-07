<header class="banner canvas container-fluid wrap mt2" style="background: url('<?php the_field('main_image'); ?>'); background-size: cover;" role="banner">
  <div class="row end-xs pr0-md pr3-xs">
  	<a href="#" class="btn btn-blue mr2 hidden-xs">Hire Me</a>
    <a href="#" id="toggle-nav" class="btn btn-default"><i class="i-menu"></i></a>
  </div>
  <div class="row center-xs">
    <a class="logo" href="<?= esc_url(home_url('/')); ?>"><?php get_template_part( 'templates/logo' ); ?></a>
  </div>
</header>