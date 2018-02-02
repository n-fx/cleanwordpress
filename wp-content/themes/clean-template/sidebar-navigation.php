    <a class="navbar-brand" href="<?php bloginfo('home'); ?>">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/humit_logo.png"  class="logo" alt="Stichting vrienden van Humanitas">
    </a> 

<div class="container">
 
  <div id="hamburger"><i class="hidden-sm hidden-md hidden-lg fa fa-bars" aria-hidden="true"></i></div>

  <div class="hidden-sm hidden-md hidden-lg"> 
     <?php 
        wp_nav_menu( array(
        'menu' => 'hamburger_menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'hamburger_menu',
        'walker' => new wp_bootstrap_navwalker())
        );
      ?>    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="hidden-xs   navbar-center">
        <?php 
          wp_nav_menu( array(
          'menu' => 'hoofd_menu',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'menu',
          'walker' => new wp_bootstrap_navwalker())
          );
        ?>   
    </div><!-- /.navbar-collapse -->
     <div class="hidden-xs  ">
     <?php 
          wp_nav_menu( array(
          'menu' => 'sub_menu',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'menu sub_menu menu_center',
          'walker' => new wp_bootstrap_navwalker())
          );
        ?>   
    </div>    
</div>   

<script>

  $('.hamburger_menu').addClass( 'opend' ); 
   $('.hamburger_menu').toggle( 'opend' ); 

  $('#hamburger').click(function() {
    $('.hamburger_menu').toggle( 'opend' ); 
    console.log('egsgs');
  });

</script>