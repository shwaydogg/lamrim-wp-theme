<?php
/**
 * Template Name: List Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php $i=0; if( have_rows('list') ): while ( have_rows('list') ) : the_row(); $i++;?>

    <div id="list-item-<?="$i"?>" name="<?="$i"?>">
    <h2><?php the_sub_field('title'); ?></h2>
    <?php the_sub_field('top_content'); ?>

    <?php $j=0; if( have_rows('sub_list') ): while ( have_rows('sub_list') ) : the_row(); $j++;?>
      <div id="list-item-<?="$i-$j"?>" name="<?="$i-$j"?>">
      <h3><?php the_sub_field('title'); ?></h3>
      <?php the_sub_field('content'); ?>
      </div>
    <?php endwhile; endif;?>
    </div>
  <?php endwhile; endif;?>
<?php endwhile; ?>
