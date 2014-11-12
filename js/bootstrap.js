$(window).on('scroll', function() {
	// Opacity for the header on project pages
	var hero_height = $('.hero-picture').height(),
	header = $('.project header');

	if ($(window).scrollTop() > hero_height) {
		header.addClass('visible');
	}
	else{
		header.removeClass('visible');
	}
});

// $(window).scroll(function() {
// 	if ( $(window).outerWidth() >= 900 ) {
// 		var scrolledY = $(window).scrollTop();
// 		$('.hero-picture').css('transform', 'translateY(' + ((scrolledY)) + 'px)');
// 	}
// });

$('.blog-video').on('click', function(){ 
	var videoSource = $(this).children('.play').data('video');
	$(this).children('img').fadeOut(750);
	if ( $(this).children('.iframe-wrapper').length > 0 ) {
		return;
	} else {
		$(this).prepend('<div class="iframe-wrapper"><iframe src="' + videoSource + '" frameborder="0" autoplay="true" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>');
	}
	$(this).children('.iframe-wrapper').fadeIn();
	$(this).children('img').addClass('video-playing');
	$(this).children('.play').hide();
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


