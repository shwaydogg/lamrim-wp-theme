<?php
/**
 * Template Name: List Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php

// check if the repeater field has rows of data
if( have_rows('list') ):
  while ( have_rows('list') ) : the_row();
?>

  <h2><?php the_sub_field('title'); ?></h2>
  <?php the_sub_field('top_content'); ?>

<?php 
    if( have_rows('sub_list') ):
      while ( have_rows('sub_list') ) : the_row();
?>
    <h3><?php the_sub_field('title'); ?></h3>
    <?php the_sub_field('content'); ?>

<?php
      endwhile;
    endif;
  endwhile;
endif;
?>
<?php endwhile; ?>
