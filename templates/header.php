<div class="navbar-fixed">
<nav class="" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="<?= esc_url(home_url('/')); ?>" class="brand-logo"><?php bloginfo('name'); ?></a>
    <ul class="right hide-on-med-and-down">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </ul>


    <ul id="nav-mobile" class="side-nav fixed <?php if(!is_page_template("list-template.php" )){ echo "hide-on-large-only"; } ?>" style="width: 240px;">
  
      <div class="hide-on-large-only" id="main-mobile-nav">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
        <hr/>
      </div>
  <?php if(is_page_template("list-template.php" )) { ?>
  <?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); $i = get_sub_field("uid"); ?>
    <?php if( get_sub_field("super_level") ){ ?>
      <li class="no-padding super-nav-item" id="nav-<?="$i"?>">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="active" href="#list-item-<?="$i"?>-super" name="<?php the_sub_field('super_level'); ?>"><?php the_sub_field('super_level'); ?></a>
          </li>
        </ul>
      </li>
    <?php } ?>
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
                <?php if( have_rows('sub_list') ): while ( have_rows('sub_list') ) : the_row(); $j = get_sub_field("uid");?>
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
  <?php }?>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
</div>
 
