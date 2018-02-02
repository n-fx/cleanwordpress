 

$( document ).ready(function() {
  console.log("loaded");
});



window.onload = function() {

};

/* 

$(window).scroll(function(){
  if ($(window).scrollTop() >= 100) {
    $(".header").addClass("shrink");
    $("ul.menu-sub_menu").addClass("shrink");
    $(".logo").addClass("shrink");
    $("ul.menu").addClass("shrink");

     
  }
  else {
    $(".header").removeClass("shrink");
    $("ul.menu-sub_menu").removeClass("shrink");
    $(".logo").removeClass("shrink");
    $("ul.menu").removeClass("shrink");
  }
});
*/


// Find all iframes
var $iframes = $( "iframe" );
 
// Find &#x26; save the aspect ratio for all iframes
$iframes.each(function () {
  $( this ).data( "ratio", this.height / this.width )
    // Remove the hardcoded width &#x26; height attributes
    .removeAttr( "width" )
    .removeAttr( "height" );
});
 
// Resize the iframes when the window is resized
$( window ).resize( function () {
  $iframes.each( function() {
    // Get the parent container&#x27;s width
    var width = $( this ).parent().width();
    $( this ).width( width ).height( width * $( this ).data( "ratio" ) );
  });
// Resize to fix all iframes on page load.
}).resize();

/*
 
$(".quickmenu_btn").click(function() {
  $('.quickmenu').toggleClass( "quickmenu_open" );
  $('.quickmenu_icon').toggleClass( "quickmenu_icon_open" ); 
});
*/