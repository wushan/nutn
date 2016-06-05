<?php
/**
 * Index File
 */

get_header();

?>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class='page-cover'>
			<div class='background' style='background-image: url(<?php the_post_thumbnail_url();?>);'></div>
			<div class='page-cover-item restrict'>
				<header class="article-header">
					<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</header>

			</div>
		</section>
		<section class='page-container'>
			<div class='restrict-large'>
				
					<article id="post-<?php the_ID(); ?>" role="article">

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

					</article>
				
			</div>
			
		</section>
	<?php endwhile; endif; ?>
</main>

<!-- <?php get_sidebar(); ?> -->



<?php get_footer(); ?>
