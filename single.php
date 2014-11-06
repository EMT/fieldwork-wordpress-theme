<?php get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
	<div <?php if ( has_post_thumbnail() ) { ?>style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); background-size: cover;" class="hero-picture"<?php } else { ?> class="hero-picture no-image" <?php } ?>></div>
	<section class="hero">
		<div class="text">
			<div class="wrapper">
				<div class="project-title">
					<h1 class="cat-highlight"><?php the_title(); ?></h1>
					<p>Posted on <?php the_time('j F Y'); ?></p>
					<p class="post-author">Posted by <span class="author-link"><?php the_author_posts_link(); ?></span></p>
					<div class="project-social">
						<ul>
							<li><a href="#" target="_blank">Tweet</a></li>
							<li><a href="#" target="_blank">Share</a></li>
							<li><a href="#" target="_blank">Pin</a></li>
							<li><a href="#" target="_blank">Tumbl</a></li>
						</ul>
					</div>
				</div>
				<div class="content-section-body blog-content">
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
<?php get_footer(); ?>