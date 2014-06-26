<?php get_header(); ?>

<div class="banner">
	<h1>Experiments in Making Things</h1>
</div>

<div class="main-content">
	<ul class="post-list">
			<li>
			<article class="post studio">
				<a href="/code/temp">
					<div class="post-image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/fw-blog-test-post-2.png" alt="">
						<h5 class="category">Out And About</h5>
						<p>I'm hidden, Eeep - you can use me as a backup incase images don't load.</p>
					</div>
				</a>
				<div class="post-meta-data">
					<span class="date">June 5</span>
					<span class="title">Someplace - <span class="title-long">Over The Rainbow</span></span>
					<span class="go-to"><a href="/blog-post/"></a></span>
					<ul class="category-icons">
						<li class="studio"><a class="tag" href="#"></a></li>
						<li class="people"><a class="tag" href="#"></a></li>
					</ul>
				</div>
			</article>
		</li>
		<li>
			<article class="post ideas">
				<a href="/blog-post-basic/">
					<div class="post-image">
						<h5 class="category">Ideas</h5>
						<p>Something We Thought Of</p>
					</div>
				</a>
				<div class="post-meta-data">
					<span class="date">June 5</span>
					<span class="title">Playlist - <span class="title-long">In The Mix</span></span>
					<span class="go-to"><a href="/blog-post-basic/"></a></span>
					<ul class="category-icons">
						<li class="ideas"><a class="tag" href="#"></a></li>
						<li class="studio"><a class="tag" href="#"></a></li>
					</ul>
				</div>
			</article>
		</li>
		<li>
			<article class="post found">
				<div class="post-image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/fw-blog-test-post-3.png" alt="">
					<h5 class="category">Things we Found</h5>
					<p>No. 4</p>
				</div>
				<div class="post-meta-data">
					<span class="date">June 13</span>
					<span class="title">Animating a Virtual Journey<span class="title-long under">Quite a long title underneath the shorter one.</span></span>
					<span class="go-to"><a href="/blog-post/"></a></span>
					<ul class="category-icons">
						<li class="code"><a class="tag" href="#"></a></li>
						<li class="inspiring"><a class="tag" href="#"></a></li>
					</ul>
				</div>
			</article>
		</li>
		<li>
			<article class="post code">
				<div class="post-image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/fw-blog-test-post.png" alt="">
				<span class="category">Code</span>
				<p>Animating a Virtual Journey</p>
				</div>
				<div class="post-meta-data">
					<span class="date">June 13</span>
					<span class="title">Animating a Virtual Journey<span class="title-long under">More of a title!</span></span>
					<span class="go-to"><a href="#"></a></span>
					<ul class="category-icons">
						<li class="code"><a class="tag active" href="#"></a></li>
						<li class="inspiring"><a class="tag" href="#"></a></li>
					</ul>
				</div>
			</article>
		</li>
	</ul>
	<div class="pagination">
		<a class="prev" href="#">previous</a>
		<a class="next" href="#">next</a>
	</div>
</div>

<div class="sidebar">
	<h3>Categories</h3>
	<ul class="category-links">
		<li class="code"><a href="#">Code</a></li>
		<li class="inspiring"><a href="#">Inspiring Stuff</a></li>
		<li class="made"><a href="#">Made</a></li>
		<li class="out-and-about active"><a href="#">Out and About</a></li>
		<li class="people"><a href="#">People</a></li>
		<li class="process"><a href="#">Process</a></li>
		<li class="ideas"><a href="#">Project Ideas</a></li>
		<li class="found"><a href="#">Things We Found</a></li>
		<li class="present"><a href="#">The Present</a></li>
		<li class="studio"><a href="#">Studio</a></li>
		<li class="uncategorized"><a href="#">Uncategorized</a></li>
	</ul>
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

<?php get_footer(); ?>