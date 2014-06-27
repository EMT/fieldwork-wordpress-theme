<?php get_header(); ?>

<div class="banner">
	<h1>Experiments in Making Things</h1>
</div>

<div class="main-content">
	<ul class="post-list">
		
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
						<h5 class="category">Out And About</h5>
						<p>I'm hidden, Eeep - you can use me as a backup incase images don't load.</p>
						
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