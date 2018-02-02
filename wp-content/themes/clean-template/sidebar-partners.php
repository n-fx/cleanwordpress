<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean_template
 */ 
?>
 
<div class="col-xs-2 col-sm-2 col-md-1 np"> 
  <div class="bg-shadow-left prev_carousel">
      <i class="fa fa-angle-left"></i>
  </div> 
</div>

<div class="col-xs-8 col-sm-8 col-md-10 np">
    <div id="partners-owl">  
        <?php $loop = new WP_Query( array( 'post_type' => 'partner', 'posts_per_page' => -1 ) ); ?> 

          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
              <?php $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );  ?> 
                    <div class="item">
                      <div class="itembox_bg_partners np" style="background-image: url(<?php echo $feat_image_url; ?>); opacity:1;"></div>
                    </div>
              <?php endwhile; ?>
        <?php wp_reset_query(); ?> 
    </div>  
</div>
 
<div class="col-xs-2 col-sm-2 col-md-1 np">  
  <div class="bg-shadow-right next_carousel">
      <i class="fa fa-angle-right"></i>
  </div> 
</div>


<script type="text/javascript">

$(document).ready(function() {
 
  var owl = $("#partners-owl");

   owl.owlCarousel({
      pagination: false,
      items : 6,
      itemsDesktop : [1000,5],
      itemsDesktopSmall : [900,3],
      itemsTablet: [600,2],
      itemsMobile : false
  });

  $(".next_carousel").click(function(){
    owl.trigger('owl.next');
    event.preventDefault();
  });

  $(".prev_carousel").click(function(){
    owl.trigger('owl.prev');
    event.preventDefault();
  });

 
});

</script>
