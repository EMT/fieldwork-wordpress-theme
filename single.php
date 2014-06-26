<?php get_header(); ?>

	
<div class="banner">
	<h1>Experiments in Making Things</h1>
</div>

<div class="main-content">
	<article class="post-content out-and-about">
		<div class="post-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/fw-blog-post-image-4.png" alt="">
			<h5 class="category">Out And About</h5>
			<p>I'm hidden, Eeep - you can use me as a backup incase images don't load.</p>
		</div>
		<div class="meta-data">
			<div class="date">June 13</div>
			<div class="tags">
				<ul class="category-icons">
					<li class="out-and-about"><a class="tag" href="#"></a></li>
					<li class="people"><a class="tag" href="#"></a></li>
				</ul>
			</div>
		</div>
		<div class="text">
			<span class="title">Title</span><span class="title-long"> - 10 x 10</span>
			<p>
				<a href="#">Design Manchester</a> is a two day creative festival taking place in October. It was kicked off last week 
				with 10 ×10, an exhibition bringing together 17 designers, artists, illustrators and makers. I was chuffed 
				to be asked to take part in this and even more excited when I was paired with the amazingly talented 
				<a href="#">Helen Musselwhite.</a>
			</p>
			<p>
				The brief was simple, create something inspired by the word Longevity. After a phone conversation and a morning’s brain storming at our studio we came up with an idea to create body parts to help preserve and extend someone’s life. With me being a designer and Helen’s immense papery talents we wanted to try and meet in the middle. It was pretty clear from the start that we were both happy to get our hands dirty and for me it was a chance to escape the computer screen for a few days.
			</p>
		</div>
		<!-- Swap with spans ? OR swap with figure tags-->
		<div class="images">
			<div class="image-col-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/fw-blog-post-image-1.png" alt="">
				<p class="caption">- Caption Title</p>
				<p class="caption-alt">- Created</p>
			</div>
			<div class="image-col-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/fw-blog-post-image-2.png" alt="">
				<p class="caption">- Caption Title</p>
				<p class="caption-alt">- Created</p>
			</div>
			<div class="image-col-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/fw-blog-post-image-3.png" alt="">
				<p class="caption">- Caption Title</p>
				<p class="caption-alt">- Created</p>
			</div>
		</div>
		<div class="text">
			<p>
				The opening night was so much fun and we were surrounded by some brilliant projects by some awesome people. Dave Sedgewick and Tim Denton’s piece Don’t sit still. Keep going. was absolutely fantastic and had people stamping away all night, Darren Newman and Liam Hopkin’s Zoetrope was beautifully crafted, John Owens produced a laser etched piece from a John Cooper Clarke poem and Matt Booth worked with Zelig sound on a digital installation piece.
			</p>
			<ul>
				<li>- Featured Designers &amp; Artists</li>
				<li>- Dave Sedgewick &amp; Tim Denton</li>
				<li>- Loz Ives &amp; Helen Musselwhite</li>
				<li>- Darren Newman &amp; Liam Hopkin</li>
				<li>- Matt Booth &amp; Zelig</li>
				<li>- John Owens </li>
			</ul>
		</div>
		<div class="image-col-1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/fw-blog-post-image-5.png" alt="">
			<p class="caption">- Photography from the exhibition</p>
			<p class="caption-alt">- By Sebastian Matthes</p>
		</div>
		<div class="text">
			<p>
				All in all it was a great night and I’m chuffed to have been part of it. The exhibition is on till 28th August 
				at the Bench Self Made Gallery in the Northern Quarter so get yourself down there and have a look.
			</p>
			<p>
				A final special thanks goes to John and Fiona from <a href="#">Instruct</a> for organising the whole thing! It’s been 
				a pleasure.
			</p>
			<span>Posted by <a href="#">Loz</a></span>
		</div>
	</article>
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