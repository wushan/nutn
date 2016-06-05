<?php
/*
 Template Name: Home
*/
?>
<?php

get_header();

?>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
	<section class='page-cover'>
		<div class='background' style='background-image: url(<?php the_post_thumbnail_url();?>);'></div>
		<div class='page-cover-item restrict'>
			<?php
				$args = array( 'numberposts' => 1 );
				$lastposts = get_posts( $args );
				
				foreach($lastposts as $post) : setup_postdata($post); ?>
					
			
			<article id="post-<?php the_ID(); ?>" role="article">
				<header class="article-header">
					<div class="meta">
						<div class='category'><?php the_category()?></div>
					</div>
					<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</header>

				<section class="entry-content">
					<?php the_excerpt(); ?>
				</section>

				<footer class="article-footer">
				</footer>

			</article>
			<?php endforeach; ?>

		</div>
	</section>
	<section class='page-container masonry-wrapper'>
		<div class='masonry-inner'>
			<div class='masonry-list'>
				<div class='masonry-sizer'></div>
				<div class='gutter-sizer'></div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" role="article" class='masonry-item'>
					<header class="article-header">
						<div class='entry-thumbnail'>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail();?></a>
						</div>
						<div class="entry-meta">
							<?php echo 'Poseted on '.get_the_time('Y-m-d'); ?>
						</div>
						<div class="entry-title">
							<h3>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h3>
							</div>
						
					</header>

					<section class="entry-content">
						<!-- <?php the_excerpt(); ?> -->
					</section>

					<footer class="article-footer">
					</footer>

				</article>
			<?php endwhile; ?>
			</div>
		</div>
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
