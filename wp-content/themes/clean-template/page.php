<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Say Yeah Motion Media
 */

get_header(); ?>


<?php get_sidebar('header-single'); ?>

<div class="col-md-12">  
    <div class="container np bg-white">
    	<div class="space-xs bg-white"><p></p></div>
    	<!-- 
    		<?php if ( is_user_logged_in() ) { ?> 
	    		<div class="col-md-12">
			 		<div class="space-xs bg-white"><p></p></div>
			 		<button class="bg-white"><?php edit_post_link(); ?></button>
			 		<div class="space-xs bg-white"><p></p></div>
			 	</div>
		 	<?php } ?> -->

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'pages/content', 'page' ); ?> 
			<?php endwhile; ?>
 
 	</div> <!-- end container -->
</div> <!-- end container-fluid -->

<?php get_footer(); ?>
