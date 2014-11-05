
<?php get_header(); ?>

<div class="wrapper">
	<ul class="post-list">
		
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
			<article class="post<?php the_category_unlinked(' '); ?>">
				<a href="<?php the_permalink() ?>">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post-image">
					<?php the_post_thumbnail(); ?>
					</div>
				<?php } else { ?>
					<div class="post-image no-image">
						<h5 class="category"><?php echo get_cat_name( get_post_meta($post->ID, 'mob_category_prefered', true) ) ?></h5>
					</div>
				<?php } ?>
				</a>
				<div class="post-meta-data">
					<span class="date"><?php the_time('F j'); ?></span>
					<a href="<?php the_permalink() ?>"><h2 class="title"><?php the_title(); ?></h2></a>
					<ul class="category-icons">
						<?php 
						foreach((get_the_category()) as $category) { 
						    echo "<li class='" . $category->slug . "'><a class='tag' href='" . get_category_link($category->term_id ) . "'></a></li>";
						} 
						?>
					</ul>
				</div>
			</article>
		</li>
	<?php endwhile;?>
<!-- 	<div class="pagination">
	<span class="next"><?php next_posts_link('next'); ?></span>
	<span class="prev"><?php previous_posts_link('previous'); ?></span>
	</div> -->
	<?php endif; ?> 
	</ul>
</div>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>