<?php get_header(); ?>

<div class="banner">
	<h1>Experiments in Making Things</h1>
</div>

<div class="main-content">
	<ul class="post-list">
		
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 3, 'paged' => $paged );
query_posts($args); ?>
		 <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?> 
			
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
						<li class="studio"><a class="tag" href="#"></a></li>
						<li class="people"><a class="tag" href="#"></a></li>
					</ul>
				</div>
			</article>
		</li>

		<?php endwhile; ?>
     <?php endif; ?>

	</ul>
	<div class="pagination">
		<a class="prev" href="#">previous</a>
		<a class="next" href="#">next</a>
	</div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>