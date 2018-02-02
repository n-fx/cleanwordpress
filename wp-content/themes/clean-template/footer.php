 

<div class="row np"></div>
	<div class="col-md-12  bd-footer np">
	  	<div class="container text-left ">
	    	    
	    	<div class="space-md"><p></p></div> 

	    		<div class="col-sm-6 col-md-3">
					<h4><b>Contact</b></h4> 
					<br/>
					<p><b>Postadres:</b></p>
					<p>Postbus 1100</p>
					<p>7550 BC Hengelo</p> 
					<br/>
					<p><b>Bezoekadres:</b></p>
					<p>Bevrijderslaantje 2,</p>
					<p>7551 KT Hengelo</p>
					<br/>
					<p>RSIN nummer: 856349999</p>
					<a href="mailto:rewiel@gmail.com"> 
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i> info@stichtinghumit.nl</p>
					</a>
					<p><i class="fa fa-phone" aria-hidden="true"></i>088 119 8800</p>
					<div class="space-xs"><p></p></div> 
				</div>
				<div class="col-sm-6 col-md-5"> 
					<h4><b>Pagina's</b></h4>
					 
					<div class="footer-menu">
						<?php wp_nav_menu( array('menu' => 'footer_menu') ); ?> 
					</div>
					<div class="space-xs"><p></p></div> 
				</div>

				 
				<div class="col-sm-12 col-md-4"> 
					<h4><b>Zoeken</b></h4>
					<br/>
					<div class="contactbox np bg3" style="height:32px;"> 
						<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						    <div>
						        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
						        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" /> 
						        <button type="submit" class="search-button" id="searchsubmit">
						            <i class="fa fa-search" aria-hidden="true"></i>
						        </button> 
						    </div>
						</form>
					</div> 
					<br/> 
				</div> 

				<div class="space-md"><p></p></div> 

	  	</div> 


	  	<div class="col-md-12 row footercredits bg4">
			<div class="space-md"><p></p></div>  
				<div class="col-md-12"> 
					<p class="credits text-right text-white">&copy; Stichting Humit - Humanitas | <?php echo date( 'Y' ); ?> | REALISATIE DOOR: SAY YEAH MOTION MEDIA</p>  
				</div> 
			<div class="space-sm"><p></p></div> 
		</div>


	  	
</div>
