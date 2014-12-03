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




$('.js-reveal').click( function(e){
	e.preventDefault();
	$('.black-overlay').addClass('shown');
	$('.page-content').addClass('moved');
	$('header').addClass('moved');
	$('.sidebar').addClass('moved');
	$('.hero-picture').addClass('moved');
	if ( $(window).outerWidth() <= 800 ) {
		$('.sidebar-reveal').addClass('moved');
	}
});

$('.js-sidebar-close').click(function(e){
	e.preventDefault();
	$('.black-overlay').addClass('fade-out');
	setTimeout(function(){
		$('.black-overlay').removeClass('shown');
		$('.black-overlay').removeClass('fade-out');
	},300);
	$('.page-content').removeClass('moved');
	$('header').removeClass('moved');
	$('.sidebar').removeClass('moved');
	$('.hero-picture').removeClass('moved');
	$('.sidebar-reveal').removeClass('moved');
});

$(document).ready(function () {
     $("a").has("img").addClass("img-link");
});

$(document).on('ready', function() {
	 headerPadding();
});

$(window).on('resize', function(){
	 headerPadding();
})

function headerPadding() {
	var headerHeight = $('header').outerHeight();
	if ( $(window).outerWidth() <= 800 ) {
		$('body').css('padding-top',headerHeight);
	} else {
		$('body').css('padding-top','');
	}
}