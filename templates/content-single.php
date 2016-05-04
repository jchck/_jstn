<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="mt0 mb4"><?php the_title(); ?></h1>
      <?php get_template_part( 'templates/entry', 'meta' ); ?>
    </header>
      <?php
        the_content();
      ?>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    
  </article>
<?php endwhile; ?>
