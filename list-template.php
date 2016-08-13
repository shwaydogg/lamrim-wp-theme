<?php
/**
 * Template Name: List Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  HEY HO o

  <?php get_template_part('templates/content', 'page'); ?>

<?php

// check if the repeater field has rows of data
if( have_rows('list') ):

  // loop through the rows of data
    while ( have_rows('list') ) : the_row();

        // display a sub field value
?>
  <h2><?php the_sub_field('name'); ?></h2>
  <?php the_sub_field('top_content'); ?>
<?php

    endwhile;

else :

    // no rows found

endif;

?>


<?php endwhile; ?>
