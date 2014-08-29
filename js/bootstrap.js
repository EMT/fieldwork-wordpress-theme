
// $('html').on('click', function() {

// 	$(this).toggleClass('open');

// });

	$("body").swipe( {
		swipeLeft:function(event, fingerData, distance, duration) { 
			if ($(window).innerWidth()) {
				$('html').addClass('open');
			}
		},
		swipeRight:function(event, fingerData, distance, duration) { 
			if ($(window).innerWidth()) {
				$('html').removeClass('open');
			}
		},
	 threshold:75
	});

