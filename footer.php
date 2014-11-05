
<footer id="footer">
	<div class="wrapper">
		<div class="our-info">
			<h3>Contact</h3>
			<p class="address">22 Lever St</p>
			<p class="address">Manchester</p> 
			<p class="address">M1 1EA</p> 
			<p class="tel"><a href="tel:01612355318">+44 (0)161 235 5318</a></p>
			<p class="email"><a href="mailto:hello@madebyfieldwork.com">hello@madebyfieldwork.com</a></p>
		</div>
		<div class="project-planner">
			<h3>Plan a Project</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur.</p>
			<a href="#">Submit</a>
		</div>
		<div class="join-newsletter">
			<h3>Subscribe to our Newsletter</h3>
			<p>Good wholesome stuff, once a month or thereabouts.</p>
			<form action="#">
				<input type="email" placeholder="Enter your email">
				<input type="submit">
			</form>
		</div>
		<div class="social-wrapper">
			<ul class="social">
				<li><a class="" href="http://twitter.com/madebyfieldwork">Twitter</a></li>
				<li><a class="" href="http://facebook.com/madebyfieldwork">Facebook</a></li>
				<li><a class="" href="http://flickr.com/photos/madebyfieldwork">Flickr</a></li>
				<li><a class="" href="https://github.com/EMT">Github</a></li>
				<li><a class="" href="http://vimeo.com/madebyfieldwork">Vimeo</a></li>
			</ul>
		</div>
	</div>
</footer>


<script>
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

	$(window).scroll(function() {
		if ( $(window).outerWidth() >= 900 ) {
			var scrolledY = $(window).scrollTop();
			$('.hero-picture').css('background-position', '50%' + ((scrolledY)) + 'px');
		}
	});

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


</script>
</div>
<?php wp_footer(); ?>
</body>
</html>