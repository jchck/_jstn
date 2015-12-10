<?php use Roots\Sage\Category; ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="text-center">
      <h1 data-heading><?php the_title(); ?></h1>
      
        <div class="pt3-md pb3-md pt4 pb4 img-holder center-block">
          <div class="position-relative post-card circle img-size flex flex-center">
            <div class="center-block">
              <ul class="m0 list-inline h4 category-icons"><?= Category\permalink(); ?></ul>
              <?php get_template_part( 'templates/entry', 'meta' ); ?>
            </div>
            <div class="post-img circle" style="background: url('<?php the_field('main_image'); ?>'); background-size: cover;"></div>
          </div>
        </div>
    </header>
    <div class="entry-content">
      <?php
        get_template_part( 'templates/video' );
        the_content();
      ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    
  </article>
<?php endwhile; ?>
