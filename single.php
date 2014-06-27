<?php get_header(); ?>

	
<div class="banner">
	<h1>Experiments in Making Things</h1>
</div>

<div class="main-content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<article class="post-content">
		<div class="post-image">
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
			?>
			<h5 class="category"><?php echo get_cat_name( get_post_meta($post->ID, 'mob_category_prefered', true) ) ?></h5>
			<p><?php the_excerpt(); ?></p>
		</div>
		<div class="inner-content">
			<div class="meta-data">
				<div class="date"><?php the_time('F j'); ?></div>
				<div class="tags">
					<ul class="category-icons">
					<?php 
						foreach((get_the_category()) as $category) { 
						    echo "<li class='" . $category->slug . "'><a class='tag' href='" . get_category_link($category->term_id ) . "'></a></li>";
						} 
					?>
					</ul>
				</div>
			</div>
			<h2 class="title"><?php the_title(); ?></h2><span class="title-long"><?php if ( get_post_meta($post->ID, 'title_long', true) ) : ?> - <?php echo get_post_meta($post->ID, 'title_long', true); ?><?php endif; ?></span>
			<?php the_content(); ?>
			<span class="author">Posted by <?php the_author_posts_link(); ?> </a></span>
		</div>
	</article>
	<div class="pagination">
		<span class="next"><?php next_post_link('%link', 'next'); ?></span>
		<span class="prev"><?php previous_post_link('%link', 'previous'); ?></span>
	</div>
</div>

<?php endwhile ?>

<?php endif ?>



<?php get_sidebar(); ?>

<?php get_footer(); ?>