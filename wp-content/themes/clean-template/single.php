
<?php
/**
 * The template for displaying all single posts.
 *
 * @package Say Yeah Motion Media
 */

get_header(); ?>


<?php get_sidebar('header-single'); ?>


<div class="col-md-12">  
    <div class="container np bg-white">
    	<div class="space-xs bg-white"><p></p></div>



<div class="col-md-9">

 	<?php get_sidebar('breadcrumbs'); ?>

	<?php while ( have_posts() ) : the_post(); ?> 

	 	<?php if ( is_user_logged_in() ) { ?> 
    		<div class="col-md-12 text-red">
		 		<div class="space-xs bg-white"><p></p></div>
		 		<button class="bg-white"><?php edit_post_link(); ?></button>
		 		<div class="space-xs bg-white"><p></p></div>
		 	</div>
	 	<?php } ?>

		<h1><?php the_title(); ?></h1>  
			 <?php //the_field('video_hashed_id'); ?>

			<?php if(is_singular( 'post' )) { ?> 
				<strong><?php the_date(); ?></strong><br/>
 			<?php } ?>

			
			<?php if(get_field('video_hashed_id')) { ?>

			<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
				<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
					<iframe src="//fast.wistia.net/embed/iframe/<?php the_field('video_hashed_id'); ?>?videoFoam=true" 
						allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" 
						allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen 
						width="100%" height="100%">
					</iframe>
				</div>
			</div>

			<?php } ?>
			<br/>
			<?php the_content(); ?>
<!-- 
			<a href="<?php the_permalink(); ?>">Link</a> -->

		<div class="space-sm"><p></p></div>
		<div id="socialbar">
			<div id="share"></div> 
		</div>	
		<script src="<?php bloginfo('template_url'); ?>/js/jssocials.min.js"></script> 
		<script>
		    jQuery("#share").jsSocials({
		    	shareIn: "popup",
		    	showCount: true,
				showLabel: false,
		        shares: ["facebook", "twitter", "googleplus", "pinterest", "linkedin"]
		    });
		</script> 
	    
	<?php endwhile; ?>
	<div class="space-md bg-white"><p></p></div>
</div>

<div class="col-md-3 np">
	<?php get_sidebar(); ?> 
</div>


	</div>
</div>


<?php get_footer(); ?>
