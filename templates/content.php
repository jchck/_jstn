<?php 
/* 
	Used in the_post(); loop
	Served via index.php, rather than via home.php

	When Reading Settings :
		Front Page = null
		Posts Page = Articles
*/	
?>
<article <?php post_class('col-xs-12 pb4'); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>