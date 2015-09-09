<?php get_header(); ?>
<div class="page-section">

<?php while (have_posts()) : the_post(); ?>
	<section class="hero">
		<div class="text">
			<div class="wrapper">
				<div class="section-title">
					<h1 class="cat-highlight"><?php the_title(); ?></h1>
					<div class="section-runner blog-meta-data">
						<p>Posted by <span class="author-link"><?php the_author_posts_link(); ?></span> on <?php the_time('j F Y'); ?></p>
					</div>
					<div class="project-social">
						<ul>
							<li><a href="http://twitter.com/share?text=Check out this article on Fieldwork's blog...&url=<?php the_permalink(); ?>" target="_blank">Tweet</a></li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Share</a></li>
							<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" target="_blank">Pin</a></li>
							<li><a href="http://www.tumblr.com/share/photo?source=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&caption=<?php the_excerpt(); ?>&clickthru=" target="_blank">Tumbl</a></li>
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