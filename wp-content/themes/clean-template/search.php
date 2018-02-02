<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

 
 <?php get_sidebar('header-single'); ?>


 
    <div class="container">
    	<div class="col-lg-9">
			<?php if ( have_posts() ) : ?>
					<h1 class="page-title">
						<?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
					</h1>
				 
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-12 bg-light">
					<?php get_template_part( 'template-parts/content', 'search' ); ?>
					<div class="space-xxs"><p></p></div>
					</div>
					<div class="space-sm"><p></p></div>
				<?php endwhile; ?>

				<?php  else : ?>
		 
				<h3>Niets gevonden</h3>
				<p>Helaas er is niets gevonden met de zoekterm <?php printf( __( ': %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></p>
	 		<?php endif; ?> 
		</div>

		<div class="col-lg-3 np">
			<?php get_sidebar(); ?>
		</div> 
	</div>
		

<?php get_footer(); ?>
