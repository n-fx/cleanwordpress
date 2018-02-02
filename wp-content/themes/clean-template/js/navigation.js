 
	menuTop = document.getElementById( 'smart-menu' ),
	body = document.body;


	// classie.toggle( menuTop, 'cbp-spmenu-open' );

showTop.onclick = function() { 
	classie.toggle( this, 'active' );
	classie.toggle( menuTop, 'cbp-spmenu-open' );
	disableOther( 'showTop' );
};


hideTop.onclick = function() { 
	classie.toggle( this, 'active' );
	classie.toggle( menuTop, 'cbp-spmenu-open' );
	disableOther( 'showTop' );
};





function disableOther( button ) {

	if( button !== 'showTop' ) {
		classie.toggle( showTop, 'disabled' );
	}
	
}