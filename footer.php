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
	<?php wp_footer(); ?>

<script>

$('#category').on('click', function() {
if($('body').innerWidth() <= 650) {
 if ( $( ".category-links" ).is( ':hidden' ) ) {
    $( ".category-links" ).slideDown( 'slow' );
  } else {
    $( ".category-links" ).slideUp('slow');
  }
}
});

</script>

</body>
</html>