<?php
/**
 * Template Name: List Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <div class="section flow-text">
    <ul>
      <?php $i=0; if( have_rows('list') ): while ( have_rows('list') ) : the_row(); $i++;?>
        <li id="list-item-<?="$i"?>" class="list-item"  name="<?="$i"?>">
          <h2><?php the_sub_field('title'); ?></h2>
          <?php the_sub_field('top_content'); ?>
          <ul>
            <?php $j=0; if( have_rows('sub_list') ): while ( have_rows('sub_list') ) : the_row(); $j++;?>
              <li id="list-item-<?="$i-$j"?>" class="list-item sub" name="<?="$i-$j"?>">
              <h3><?php the_sub_field('title'); ?></h3>
              <?php the_sub_field('content'); ?>
              </li>
            <?php endwhile; endif;?>
          </ul>
        </li>
      <?php endwhile; endif;?>
    </ul>
  </div>
<?php endwhile; ?>
