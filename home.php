
<?php get_header(); ?>
<div class="wrapper">
	<ul class="post-list grid">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li class="grid-item">
				<article class="post<?php the_category_unlinked(' '); ?>">
					<a href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<div style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); background-size: cover;" class="post-image"></div>
						<?php } else { ?>
							<div class="post-image no-image"></div>
						<?php } ?>
					</a>
					<ul class="category-icons">
						<?php 
						foreach((get_the_category()) as $category) { 
							echo "<li data-tooltip='" . $category->slug . "' class='" . $category->slug . "'><a class='tag' href='" . get_category_link($category->term_id ) . "'></a></li>";
						} 
						?>
					</ul>
					<div class="post-meta-data">
						<a href="<?php the_permalink() ?>"><h2 class="title"><?php the_title(); ?></h2></a>
						<span class="date"><?php the_time('j F Y'); ?></span>
						<span class="author">Posted by <span class="author-link"><?php the_author_posts_link(); ?></span></span>
					</div>
				</article>
			</li>
		<?php endwhile;?>
		<div class="pagination">
			<span class="next"><?php next_posts_link('next'); ?></span>
			<span class="prev"><?php previous_posts_link('previous'); ?></span>
		</div>
	<?php endif; ?> 
</ul>
</div>
<?php get_footer(); ?>