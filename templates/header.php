<header class="banner container-fluid" role="banner">
  <div class="row center-xs">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php get_template_part( 'templates/logo' ); ?></a>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
