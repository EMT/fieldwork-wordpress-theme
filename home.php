
<?php get_header(); ?>

<div class="banner">
	<h1>Experiments in Making Things</h1>
</div>

<div class="main-content">
	<ul class="post-list">
		
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
			<article class="post<?php the_category_unlinked(' '); ?>">
				<a href="<?php the_permalink() ?>">
					<div class="post-image">
						<?php 
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} 
						?>
						<h5 class="category">Custom Category - Damn this will be 'fun' to impliment</h5>
						<p><?php the_excerpt(); ?></p>
					</div>
				</a>
				<div class="post-meta-data">
					<span class="date">June 5</span>
					<span class="title"><?php the_title(); ?> - <span class="title-long">Over The Rainbow</span></span>
					<span class="go-to"><a href="/blog-post/"></a></span>
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
	<div class="pagination">
	<span class="next"><?php next_posts_link('next'); ?></span>
	<span class="prev"><?php previous_posts_link('previous'); ?></span>
	</div>
	<?php endif; ?> 
	</ul>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>