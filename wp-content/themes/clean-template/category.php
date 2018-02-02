<?php
/**
* A Simple Category Template
*/

get_header(); ?> 



<?php get_sidebar('header-single'); ?>


<div class="col-md-12" style="margin-top:-260px; z-index:99999">  
    <div class="container bg-white" style=" z-index:99999">
    	<div class="space-xs bg-white"><p></p></div>

  
    


 	<div class="container">
 			<h1 class="page-title">
				Categorie:  <?php single_cat_title( '', true ); ?>
			</h1>

    	<div class="col-lg-8">
			<?php if ( have_posts() ) : ?> 
				 
				<?php while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
					</a>		



<?php if ( has_post_thumbnail() ) { ?>
    <div class="col-xs-12 col-md-4 col-lg-4 np">
    	<?php $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id()); ?>  
    	<a href="<?php the_permalink(); ?>">
    		<div class="itembox_bg np"  style="background-image: url(<?php echo $feat_image_url; ?>); "></div>
    	</a>
	</div>
	<div class="col-xs-12 col-md-8 col-lg-8"> 
		<div class="space-xs"><p></p></div>
		<?php the_excerpt(); ?>  

		<div class="col-xs-12 col-md-12 col-lg-12 np">
			<p class="small">
				<strong> 
				<?php the_time( get_option( 'date_format' ) ); ?> &nbsp;|&nbsp; 
				gepubliceerd in 
				<?php the_category(', '); 
				?>
				</strong>
			</p>
				<hr>
			<div class="col-md-8 col-lg-10"></div> 
			<div class="col-md-8 col-lg-2"> 
				<a class="btn btn-primary btn-sm"  style="float:right;" href="<?php the_permalink(); ?>">
					Lees meer 
				</a>
			</div> 
		</div> 


	</div>
<?php } else { ?>  
   
	<div class="col-xs-12 col-md-12 col-lg-12 np"> 
		<div class="space-xs"><p></p></div>
		<?php the_excerpt(); ?>  

		<div class="col-xs-12 col-md-12 col-lg-12 np">
			<p class="small">
				<strong> 
				<?php the_time( get_option( 'date_format' ) ); ?> &nbsp;|&nbsp; 
				gepubliceerd in 
				<?php the_category(', '); 
				?>
				</strong>
			</p>
				<hr>
			<div class="col-md-8 col-lg-10"></div> 
			<div class="col-md-8 col-lg-2"> 
				<a class="btn btn-primary btn-sm"  style="float:right;" href="<?php the_permalink(); ?>">
					Lees meer 
				</a>
			</div> 
		</div> 


	</div>
<?php } ?>



<div class="space-sm"><p></p></div>
				
				<?php endwhile; ?>

				<?php  else : ?>
	
	 		<?php endif; ?> 
		</div>
		<div class="col-lg-4 ">
			<?php get_sidebar(); ?>
		</div> 
	</div>





		</div>  
 	</div> <!-- end container -->
</div> <!-- end container-fluid -->


<?php get_footer(); ?>