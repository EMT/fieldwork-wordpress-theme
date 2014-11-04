// Swipe detection for the sidebar reveal.

// $(window).on('resize load', function() {
// 	if ($(window).innerWidth()  <= 900) {
// 		$("body").swipe("enable");
// 		$("body").swipe( {
// 				swipeLeft:function(event, fingerData, distance, duration) { 
// 						$('html').addClass('open');
// 						setTimeout(function(){
// 							$('.sidebar').addClass('active');
// 						},600);
// 				},
// 				swipeRight:function(event, fingerData, distance, duration) { 
// 						$('html').removeClass('open');
// 						setTimeout(function(){
// 							$('.sidebar').removeClass('active');
// 						},600);
// 				},
// 			 threshold:50,
// 			 fingers:1,
// 			 excludedElements:$.fn.swipe.defaults.excludedElements+", .gist"
// 		});
// 	} else {
// 		$("body").swipe("disable");
// 	}
// });

// Close the sidebar if its open and you click back on the main content.

$('.main-content').on('click', function() {
	if ($('.sidebar').hasClass('active')) {
		$('html').removeClass('open');
		$('.sidebar').removeClass('active');
	}
});

// Fix for the sidebar showing on mobile (looking into a css only version)
// Sets the height of the main content to the height of the window if its too short.

$(window).on('resize load', function(){

	var contentHeight = $('.main-content').height();
	var windowHeight = $(window).innerHeight();

	if ( windowHeight > contentHeight ) {
		$('.main-content').height(windowHeight);
	}
});

// Disable main content scrolling when sidebar is open.

$('.main-content').on('touchmove', function(e) {
	if ( $('html').hasClass('open') ) {
		e.preventDefault();
	}
});



// Magic fix for ios bounce scrolling on sidebar.
// - http://stackoverflow.com/a/17979071

var elements = {};
$('.sidebar').on('touchstart',elements,function(e){
	e.data.max = this.scrollHeight - this.offsetHeight;
	e.data.y = e.originalEvent.pageY;
}).on('touchmove',elements,function(e){
  	var dy = e.data.y - e.originalEvent.pageY;
  	// if scrolling up and at the top, or down and at the bottom
  	if((dy < 0 && this.scrollTop < 1)||(dy > 0 && this.scrollTop >= e.data.max)){
    	e.preventDefault();
  	};
});


