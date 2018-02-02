   	<div class="bg-shadow">

    <div class="space-xs bg-red"><p></p></div>


<div class="container bg-red np">
	<div class="col-md-12 bg-red">  
				<!-- <h3 class="text-uppercase text-white"><strong>Activiteiten</strong></h3>
					<div class="space-sm"><p></p></div>	-->
			<div class="space-xs bg-red"><p></p></div>

			<div class="news_item">	 
				<?php if( have_rows('uitgelicht') ): while ( have_rows('uitgelicht') ) : the_row(); ?> 
			    	<!-- <div class="col-xs-4 col-sm-3 col-md-2 np"> 
				 		<a href="<?php echo the_sub_field('page_link'); ?>">
				 			<img src="<?php the_sub_field('thumbnail'); ?>" width="100%" height="auto">
				 		</a>
				 	</div>  -->
				 	<a href="<?php echo the_sub_field('page_link'); ?>">
					 	<div class="col-xs-12 col-sm-12 col-md-4">
					 		<div class="col-xs-12 col-sm-12 col-md-12 intro_box">
						 		<h2 class="text-white text-center"><strong><?php the_sub_field('title'); ?></strong></h2> 
								<p class="text-white text-center"><?php the_sub_field('text'); ?></p>
								<div class="space-md"><p></p></div>
							</div> 
					 	</div>
				 	</a>
		  				<div class="hidden-md hidden-lg">
		  					<div class="space-sm"><p></p></div>
		  				</div> 
			    <?php endwhile; endif; ?> 
 			</div>
 		<div class="space-xs bg-red"><p></p></div>
	</div>
</div>



<div class="space-xs bg-red"><p></p></div>


</div> <!-- end shadow --> 

<div class="space-md bg-trans"><p></p></div>