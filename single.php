<?php
get_header();

?>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
	<section class='page-cover'>
		<div class='background' style='background-image: url(<?php the_post_thumbnail_url();?>);'></div>
		<div class='page-cover-item restrict'>
			
			<article id="post-<?php the_ID(); ?>" role="article">
				<header class="article-header">
					<div class="meta">
						<div class='category'><?php the_category()?></div>
					</div>
					<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</header>
			</article>

		</div>
	</section>
	<section class='page-container'>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" role="article">
				<div class="entry-meta">
					<?php echo 'Poseted on '.get_the_time('Y-m-d'); ?>
				</div>
				<div class='restrict'>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
			<?php comments_template(); ?>
		<?php endwhile; ?>
		<?php else : ?>
			<div class='restrict'>
				<article id="post-not-found" class="hentry">
					<header class="article-header">
						<h1>Oops, Post Not Found!</h1>
					</header>
						<section class="entry-content">
						<p>Uh Oh. Something is missing. Try double checking things.</p>
					</section>
					<footer class="article-footer">
						<p>This is the error message in the index.php template.</p>
					</footer>
				</article>
			</div>

		<?php endif; ?>
	</section>
</main>

<!-- <?php get_sidebar(); ?> -->



<?php get_footer(); ?>
