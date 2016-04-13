<?php use Roots\Sage\Category; ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="text-center">
      <h1><?php the_title(); ?></h1>
      
        <div class="center-block">
          <div class="position-relative post-card circle img-size flex flex-center">
            <div style="background: url('<?php the_field('main_image'); ?>'); background-size: cover;"></div>
          </div>
        </div>

    </header>
    <div class="the-content link">
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
