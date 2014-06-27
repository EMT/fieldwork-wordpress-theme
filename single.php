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
			<h5 class="category">Out And About</h5>
			<p><?php the_excerpt(); ?></p>
		</div>
		<div class="inner-content">
			<div class="meta-data">
				<div class="date"><?php the_date('F j'); ?></div>
				<div class="tags">
					<ul class="category-icons">
						<li class="out-and-about"><a class="tag" href="#"></a></li>
						<li class="people"><a class="tag" href="#"></a></li>
					</ul>
				</div>
			</div>
			<?php the_content(); ?>
			<span class="author">Posted by <?php the_author_posts_link(); ?> </a></span>
		</div>
	</article>
	<div class="pagination">a
		<a class="prev" href="#">previous</a>
		<a class="next" href="#">next</a>
	</div>
</div>
<?php endwhile ?>
<?php endif ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>