<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean_template
 */ 
?>

<div id="owl-slideshow" class="hidden-xs hidden-sm owl-carousel"> 
    <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?> 
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
            <?php if( get_field('slider_afbeelding') ): ?>
                <div class="slide" style="background-image: url('<?php the_field('slider_afbeelding'); ?>');"> 
                    <!-- <div class="slide_glow"> </div> -->
                    <div class="container np">  
                        <div class="space-lg"><p></p></div>
                        <div class="space-lg"><p></p></div>
                        <div class="space-lg"><p></p></div>
                        <div class="space-md"><p></p></div> 
                        
                        <!--     <a href="<?php the_permalink(); ?>" class="slide_box">
                            <div class="col-sm-12 col-md-11 col-lg-9 slider-text bg-dark-trans np">
                                
                                <div class="col-xs-3 col-sm-2 col-md-1 bg-dark-trans">
                                    <h4 class="arrow text-white text-center"><i class="fa fa-play" aria-hidden="true"></i></h4> 
                                </div> 

                                <div class="col-xs-9 col-sm-10 col-md-11"> 
                                    <h4><strong><?php the_date(); ?></strong></h4>
                                </div> 
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">  
                                    <h1><strong><?php the_title(); ?></strong></h1>
                                      <h4><?php the_field('slider_tekst'); ?> <i class="arrow fa fa-arrow-right" aria-hidden="true"></i></h4>
                                      <div class="space-sm"><p></p></div>
                                    </div>

                                    <div class="underrow"></div>
                                </div> 


                                
                        <div class="hidden-sm col-md-1 col-lg-3"></div>
                        </a> -->
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>



<script type="text/javascript"> 
    $(document).ready(function() { 
        $("#owl-slideshow").owlCarousel({ 
            navigation : false, 
            pagination : false,
            slideSpeed : 3200,
            autoPlay: false,  
            paginationSpeed : 400,
            lazyLoad : true,
            lazyFollow : true,
            lazyEffect : "fade",
            transitionStyle : "fade",
            singleItem:true,
            smartSpeed:450
        }); 
    });
</script> 

 
