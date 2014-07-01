<div class="sidebar">
	<h3 id="category">Categories</h3>
	<ul class="category-links">
		<?php wp_list_categories('hide_empty=0&title_li='); ?> 
	</ul>
	<div class="newsletter">
		<h3>Newsletter</h3>
		<p>Good wholesome stuff, once a month or there abouts.</p>
		<form action="" class="contact-form" >
			<div>
				<label for="name">Name</label>
				<input type="text" class="text" name="NAME" id="name">
			</div>
			<div>
				<label for="email">Email</label>
				<input type="text" class="text" name="EMAIL" id="email">
			</div>
			<input type="submit" class="button" name="subscribe" id="sub" value="Sign Me Up">
		</form>
	</div>
</div>