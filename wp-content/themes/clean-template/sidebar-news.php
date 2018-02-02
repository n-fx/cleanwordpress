<div class="space-xs"><p></p></div>
<h3>Nieuws</h3>
<div class="space-xs"><p></p></div>
<?php $loop_first = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) ); ?> 

  	<?php while ( $loop_first->have_posts() ) : $loop_first->the_post(); ?> 
      	<?php $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );  ?> 

      	<a href="<?php the_permalink(); ?>" class="">
			 <h5 class="text-uppercase text-grey truncate news_href">
			 	<span><strong ><?php the_title(); ?></strong></span>
			 </h5>
		</a>
		<p><small><i class="fa fa-clock-o" aria-hidden="true"></i>  <?php the_time( get_option( 'date_format' ) ); ?></small></p>
		<hr>
      	<?php endwhile; ?>
<?php wp_reset_query(); ?> 

 

<div class="space-xs"><p></p></div>
		<div class="col-sm-0 col-md-7"></div>
		<div class="col-sm-12 col-md-5">
			<a href="<?php bloginfo('home'); ?>/nieuws">
				<button class="btn"  style="float:right;"> overzicht</button>
			</a>
			<div class="space-xs"><p></p></div>
		</div>

<?php wp_reset_query(); ?> 