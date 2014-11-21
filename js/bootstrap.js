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




