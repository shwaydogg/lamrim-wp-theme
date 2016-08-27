<div class="navbar-fixed">
<nav class="light-blue lighten-1" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="<?= esc_url(home_url('/')); ?>" class="brand-logo"><?php bloginfo('name'); ?></a>
    <ul class="right hide-on-med-and-down">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </ul>


  <?php if(is_page_template("list-template.php" )) { ?>
    <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;">
  <?php $i=0; if( have_rows('list') ): while ( have_rows('list') ) : the_row(); $i++;?>
      <li class="no-padding" id="nav-<?="$i"?>">
        <ul class="collapsible collapsible-accordion">
          <li>
            <?php 
              if(get_sub_field('nav_title')){
                $title = get_sub_field('nav_title'); 
              }else{
                $title = get_sub_field('title'); 
              }
            ?>
            <a class="active" href="#list-item-<?="$i"?>" name="<?php echo $title ?>"><?php echo $title ?></a>
            <div class="collapsible-body">
              <ul>
                <?php $j=0; if( have_rows('sub_list') ): while ( have_rows('sub_list') ) : the_row(); $j++;?>
                  <?php 
                    if(get_sub_field('nav_title')){
                      $title = get_sub_field('nav_title'); 
                    }else{
                      $title = get_sub_field('title'); 
                    }
                  ?>
                  <li id="nav-<?="$i-$j"?>" class="list-sub-nav" name="<?php echo $title ?>"><a href="#list-item-<?="$i-$j"?>"><?php echo $title ?></a></li>
                <?php endwhile; endif;?>
              </ul>
            </div>
          </li>
        </ul>
      </li>
  <?php endwhile; endif;?>
    </ul>
  <?php }?>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
</div>
 
