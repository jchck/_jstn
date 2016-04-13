<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('mt3'); ?>>
    <header class="text-center">
      <h1 class="mt0"><?php the_title(); ?></h1>
    </header>
      <?php
        get_template_part( 'templates/video' );
        the_content();
      ?>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    
  </article>
<?php endwhile; ?>
