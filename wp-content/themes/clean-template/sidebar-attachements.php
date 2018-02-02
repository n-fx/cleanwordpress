<div class="col-md-12 np"> 
	<h3>Bijlagen</h3>
	<?php $file = get_sub_field('bestand'); while ( have_rows('bijlagen') ) : the_row();  ?>
 		<a href="<?php the_sub_field('bestand'); ?>"><?php the_sub_field('titel_bijlage'); ?></a>
    <?php endwhile; ?>
	<div class="space-sm"><p></p></div>
</div>
    