<?php
/*
Template Name: About Page
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  Im page-about.php
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
