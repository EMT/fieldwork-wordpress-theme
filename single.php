<?php get_header(); ?>
<div class="page-section">

<?php while (have_posts()) : the_post(); ?>
	<section class="hero">
		<div class="text">
			<div class="wrapper">
				<div class="section-title">
					<h1 class="cat-highlight"><?php the_title(); ?></h1>
					<div class="section-runner blog-meta-data">
						<p>Posted on <?php the_time('j F Y'); ?></p>
						<p class="post-author">Posted by <span class="author-link"><?php the_author_posts_link(); ?></span></p>
					</div>
					<div class="project-social">
						<ul>
							<li><a href="#" target="_blank">Tweet</a></li>
							<li><a href="#" target="_blank">Share</a></li>
							<li><a href="#" target="_blank">Pin</a></li>
							<li><a href="#" target="_blank">Tumbl</a></li>
						</ul>
					</div>
				</div>
				<div class="section-text section-text--large blog-content">
					<?php the_content(); ?>
				</div>
				<div class="related-posts">
					<?php next_post_link('<p class="link-title">Next Post</p> %link'); ?> 
					<?php previous_post_link('<p class="link-title">Previous Post</p> %link'); ?> 
				</div>
			</div>	
		</div>
	</section>
<?php endwhile ?>
</div>
<?php get_footer(); ?>