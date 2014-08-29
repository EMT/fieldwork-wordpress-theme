</div>
	<footer id="footer">
		<div>
			<ul class="social">
				<li><a class="" href="http://twitter.com/madebyfieldwork">Twitter</a></li>
				<li><a class="" href="http://facebook.com/madebyfieldwork">Facebook</a></li>
				<li><a class="" href="http://flickr.com/photos/madebyfieldwork">Flickr</a></li>
				<li><a class="" href="https://github.com/EMT">Github</a></li>
				<li><a class="" href="http://vimeo.com/madebyfieldwork">Vimeo</a></li>
			</ul>
			<p>22 Lever St Manchester M1 1EA | hello@madebyfieldwork.com | 0161 235 5318</p>
		</div>
	</footer>


<script>

	$(window).on('resize load', function() {
		if ($(window).innerWidth()  <= 600) {
			$("body").swipe("enable");
			$("body").swipe( {
					swipeLeft:function(event, fingerData, distance, duration) { 
							$('html').addClass('open');
							setTimeout(function(){
								$('.sidebar').addClass('active');
							},600);
					},
					swipeRight:function(event, fingerData, distance, duration) { 
							$('html').removeClass('open');
							setTimeout(function(){
								$('.sidebar').removeClass('active');
							},600);
					},
				 threshold:75
			});
		} else {
			$("body").swipe("disable");
		}
	});

	$('.main-content').on('click', function() {
		if ($('.sidebar').hasClass('active')) {
			$('html').removeClass('open');
			$('.sidebar').removeClass('active');
		}
	});


</script>
<?php wp_footer(); ?>
</body>
</html>