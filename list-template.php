<?php
/**
 * Template Name: List Template
 */
?>


  
<?php 
    $firstClass = "first";
    while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <div class="section flow-text top-list-div">
    <ul class="top-list-ul">
      <?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); $i = get_sub_field("uid"); ?>
        <?php if( get_sub_field("super_level") ){ ?>
        <li id="list-item-<?="$i"?>-super" class="list-item super <?="$firstClass"?>  name="<?="$i"?>">
         <?php  $firstClass = ""; ?>
          <img class="list-item-img" src="<?=get_sub_field("super_level_image")?>">
          <h2>
            <div class="container">
              <a class="copy-link" href="#list-item-<?="$i"?>-super"><i class="link material-icons endless-knot"></i><?php the_sub_field('super_level'); ?></a>
            </div>
          </h2>
        </li>        
        <?php } ?>
        <li id="list-item-<?="$i"?>" class="list-item container"  name="<?="$i"?>">
          <h2><a class="copy-link" href="#list-item-<?="$i"?>"><i class="link material-icons endless-knot"></i><?php the_sub_field('title'); ?></a></h2>
          <hr/>
          <?php the_sub_field('top_content'); ?>
          <ul>
            <?php if( have_rows('sub_list') ): while ( have_rows('sub_list') ) : the_row(); $j = get_sub_field("uid");?>
              <li id="list-item-<?="$i-$j"?>" class="list-item sub" name="<?="$i-$j"?>">
              <h3><a class="copy-link" href="#list-item-<?="$i-$j"?>"><i class="link material-icons endless-knot"></i><?php the_sub_field('title'); ?></a></h3>
              <?php the_sub_field('content'); ?>
              </li>
            <?php endwhile; endif;?>
          </ul>
        </li>
      <?php endwhile; endif;?>
    </ul>
  </div>
<?php endwhile; ?>
