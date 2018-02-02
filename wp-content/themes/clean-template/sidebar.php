 

	<div class="col-md-12">
		 <?php if( have_rows('bijlagen') ): ?>
		<div class="space-sm bg-white"><p></p></div>
			<div class="col-md-12 bg-light"><?php get_sidebar('attachements'); ?></div>
		<?php endif; ?>

		<div class="space-sm"><p></p></div> 
<!-- 
		<div class="space-sm bg-white"><p></p></div>
			<div class="col-md-12 bg-light"><?php get_sidebar('news'); ?></div>
		<div class="space-sm bg-white"><p></p></div>
 -->
		<div class="col-xs-4 col-sm-4 col-md-6">
			<a href="http://anbi.nl" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/anbi.jpg" width="100%" /> 
			</a>
		</div> 
		<!-- <div class="col-xs-4 col-sm-4 col-md-6">
			<a href="http://anbi.nl" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/anbi.jpg" width="100%" /> 
			</a>
		</div>
 -->
		<div class="space-sm"><p></p></div> 
	</div>
