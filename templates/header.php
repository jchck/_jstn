<header class="banner wrap container-fluid" role="banner">
  <div class="row center-xs">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php get_template_part( 'templates/logo' ); ?></a>
  </div>
  <?php if (is_front_page()) { ?>
    <div class="row center-xs">
      <h2>Blandit varius ut praesent nascetur eu penatibus nisi risus.</h2>
    </div>
  <?} ?>
  <nav class="row center-xs" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills']);
      endif;
      ?>
    </nav>
</header>
