<div class="space-xs"><p></p></div>

<div class="breadcrumbs" style="background: rgba(242,242,242,1);
background: -moz-linear-gradient(left, rgba(242,242,242,1) 0%, rgba(255,255,255,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(242,242,242,1)), color-stop(100%, rgba(255,255,255,1)));
background: -webkit-linear-gradient(left, rgba(242,242,242,1) 0%, rgba(255,255,255,1) 100%);
background: -o-linear-gradient(left, rgba(242,242,242,1) 0%, rgba(255,255,255,1) 100%);
background: -ms-linear-gradient(left, rgba(242,242,242,1) 0%, rgba(255,255,255,1) 100%);
background: linear-gradient(to right, rgba(242,242,242,1) 0%, rgba(255,255,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f2f2', endColorstr='#ffffff', GradientType=1 );">
	<?php if(is_singular( 'post' )) { ?> 
 		<li>
 			<a href="<?php bloginfo('home'); ?>/nieuws">Nieuws</a>
 		</li>
 		<i class="fa fa-caret-right" aria-hidden="true"></i>
 	<?php } ?>

 	<?php if(is_singular( 'aflevering' )) { ?> 
 		<li>
 			<a href="<?php bloginfo('home'); ?>/uitzendingen">Uitzendingen</a>
 		</li>
 		<i class="fa fa-caret-right" aria-hidden="true"></i>
 	<?php } ?>

 	<?php if(is_singular( 'agenda' )) { ?> 
 		<li>
 			<a href="<?php bloginfo('home'); ?>/agenda">Agenda</a>
 		</li>
 		<i class="fa fa-caret-right" aria-hidden="true"></i>
 	<?php } ?>

 		<li>
			<?php the_title(); ?>
		</li> 
</div>

