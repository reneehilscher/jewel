<article <?php post_class(); ?>>
  <header class="home-page">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
  </header>
  <div class="entry-summary">
  	<div class="right">
    <?php the_content(); ?>
    <div>
  </div>
</article>
