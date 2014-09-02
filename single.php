<?php get_header(); ?>

	
<!-- <div class="banner">
	<h1>Experiments in Making Things</h1>
</div> -->
<?php get_sidebar(); ?>
<div class="main-content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<article class="post-content <?php if (get_field('no_header') == '1' ) { ?>title-spacing<?php } ?>">
	<?php if (get_field('no_header') == false ) { ?>
		<?php if ( get_field('header_image') ) { ?>
			<div class="post-image">
				<img src="<?php the_field('header_image'); ?>">
			</div>
		<?php } else if ( has_post_thumbnail() ) { ?>
			<div class="post-image">
			<?php the_post_thumbnail(); ?>
			</div>
		<?php } else { ?>
			<div class="post-image no-image">
				<h5 class="category"><?php echo get_cat_name( get_post_meta($post->ID, 'mob_category_prefered', true) ) ?></h5>
				<p><?php the_excerpt(); ?></p>
			</div>
		<?php } ?>
	<?php } ?>
		<div class="title"><h1><?php the_title(); ?></h1><span class="title-long"><?php if ( get_post_meta($post->ID, 'title_long', true) ) : ?> - <?php echo get_post_meta($post->ID, 'title_long', true); ?><?php endif; ?></span></div>
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
		<div class="inner-content">
			<?php the_content(); ?>
			<span class="author">Posted by <?php the_author_posts_link(); ?></span>
		</div>
	</article>
	<div class="pagination">
		<span class="next"><?php next_post_link('%link', 'next'); ?></span>
		<span class="prev"><?php previous_post_link('%link', 'previous'); ?></span>
	</div>
</div>

<?php endwhile ?>

<?php endif ?>

<?php get_footer(); ?>