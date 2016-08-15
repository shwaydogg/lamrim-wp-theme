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

    <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;">
      
        
          <li class="no-padding active" name="aaa">
            <ul class="collapsible collapsible-accordion">
              <li>
                <!--
                <a class="collapsible-header" name="aaa">aaa<i class="mdi-navigation-arrow-drop-down"></i></a>
                -->
                <a class="active" href="#aaa" name="aaa">aaa</a>
                <div class="collapsible-body" style="display: block;">
                  <ul>
                    
                      <li name="a1"><a href="#a1">a1</a></li>
                    
                      <li name="a2"><a href="#a2">a2</a></li>
                    
                      <li name="a3"><a href="#a3">a3</a></li>
                    
                      <li name="a4"><a href="#a4">a4</a></li>
                    
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        
      
        
          <li class="no-padding" name="bbb">
            <ul class="collapsible collapsible-accordion">
              <li>
                <!--
                <a class="collapsible-header" name="bbb">bbb<i class="mdi-navigation-arrow-drop-down"></i></a>
                -->
                <a class="" href="#bbb" name="bbb">bbb</a>
                <div class="collapsible-body">
                  <ul>
                    
                      <li name="bbbb1"><a href="#bbbb1">bbbb1</a></li>
                    
                      <li name="bbbb2"><a href="#bbbb2">bbbb2</a></li>
                    
                      <li name="bbbb3"><a href="#bbbb3">bbbb3</a></li>
                    
                      <li name="bbbb4"><a href="#bbbb4">bbbb4</a></li>
                    
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        
      
        
          <li class="no-padding" name="ccc">
            <ul class="collapsible collapsible-accordion">
              <li>
                <!--
                <a class="collapsible-header" name="ccc">ccc<i class="mdi-navigation-arrow-drop-down"></i></a>
                -->
                <a class="" href="#ccc" name="ccc">ccc</a>
                <div class="collapsible-body">
                  <ul>
                    
                      <li name="cccc1"><a href="#cccc1">cccc1</a></li>
                    
                      <li name="cccc2"><a href="#cccc2">cccc2</a></li>
                    
                      <li name="cccc3"><a href="#cccc3">cccc3</a></li>
                    
                      <li name="cccc4"><a href="#cccc4">cccc4</a></li>
                    
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        
      
        
          <li class="no-padding" name="ddd">
            <ul class="collapsible collapsible-accordion">
              <li>
                <!--
                <a class="collapsible-header" name="ddd">ddd<i class="mdi-navigation-arrow-drop-down"></i></a>
                -->
                <a class="" href="#ddd" name="ddd">ddd</a>
                <div class="collapsible-body">
                  <ul>
                    
                      <li name="dddd1"><a href="#dddd1">dddd1</a></li>
                    
                      <li name="dddd2"><a href="#dddd2">dddd2</a></li>
                    
                      <li name="dddd3"><a href="#dddd3">dddd3</a></li>
                    
                      <li name="dddd4"><a href="#dddd4">dddd4</a></li>
                    
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        
      
        
          <li class="no-padding" name="eee">
            <ul class="collapsible collapsible-accordion">
              <li>
                <!--
                <a class="collapsible-header" name="eee">eee<i class="mdi-navigation-arrow-drop-down"></i></a>
                -->
                <a class="" href="#eee" name="eee">eee</a>
                <div class="collapsible-body">
                  <ul>
                    
                      <li name="eee1"><a href="#eee1">eee1</a></li>
                    
                      <li name="eee2"><a href="#eee2">eee2</a></li>
                    
                      <li name="eee3"><a href="#eee3">eee3</a></li>
                    
                      <li name="eee4"><a href="#eee4">eee4</a></li>
                    
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        
      
        
          <li class="no-padding" name="fff">
            <ul class="collapsible collapsible-accordion">
              <li>
                <!--
                <a class="collapsible-header" name="fff">fff<i class="mdi-navigation-arrow-drop-down"></i></a>
                -->
                <a class="" href="#fff" name="fff">fff</a>
                <div class="collapsible-body">
                  <ul>
                    
                      <li name="ffff1"><a href="#ffff1">ffff1</a></li>
                    
                      <li name="ffff2"><a href="#ffff2">ffff2</a></li>
                    
                      <li name="ffff3"><a href="#ffff3">ffff3</a></li>
                    
                      <li name="ffff4"><a href="#ffff4">ffff4</a></li>
                    
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        
      
        
          <li class="no-padding" name="ggg">
            <ul class="collapsible collapsible-accordion">
              <li>
                <!--
                <a class="collapsible-header" name="ggg">ggg<i class="mdi-navigation-arrow-drop-down"></i></a>
                -->
                <a class="" href="#ggg" name="ggg">ggg</a>
                <div class="collapsible-body">
                  <ul>
                    
                      <li name="gggg1"><a href="#gggg1">gggg1</a></li>
                    
                      <li name="gggg2"><a href="#gggg2">gggg2</a></li>
                    
                      <li name="gggg3"><a href="#gggg3">gggg3</a></li>
                    
                      <li name="gggg4"><a href="#gggg4">gggg4</a></li>
                    
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        
      
    </ul>

    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
</div>
 
