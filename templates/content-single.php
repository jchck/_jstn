<?php use Roots\Sage\Category; ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="text-center">
      <h1 class="m0"><?php the_title(); ?></h1>
      <?php get_template_part( 'templates/entry', 'meta' ); ?>
      <img class="img-circle center-block" src="<?php the_field('main_image'); ?>">
      <ul class="m0 list-inline h4 category-icons"><?= Category\permalink(); ?></ul>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    
  </article>
<?php endwhile; ?>
