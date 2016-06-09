<?php

get_header();

?>
<header id='header'>
	<div class="meteor-slideshow-wrapper">
		<?php masterslider(1); ?>
		<div class='overlay'>
			<img src='<?php echo get_template_directory_uri()?>/assets/img/nutn-ee-logo.png'>
		</div>
	</div>
	<div id='navigation'>
		<div class="navigation-inner sticky">
			<div id='brand'>
				<div class='brand-title'>
					<?php if ( get_theme_mod( 'custom_logo_header' ) ) : ?>
					    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					 
					        <img src="<?php echo get_theme_mod( 'custom_logo_header' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					    </a>
					 
					    <?php else : ?>
					    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				    <?php endif; ?>

				</div>
			</div>

			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<a href='javascript:;' class='search-trigger js-search-trigger'><img src='<?php echo get_template_directory_uri()?>/assets/img/svgicons/icon-search.svg'></a>
			</nav>
			
				<?php get_search_form()?>
			

		</div>
	</div>
</header>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<section class='page-container'>
	<h3>this is sidebar here</h3>
	<?php wp_list_categories(); ?>
	<h3>And posts in this Category</h3>
	<?php
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;
		echo $category_id;
		$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 15;

$my_query = new WP_Query('post_type=post&cat='.$category_id);
if($my_query->have_posts()) {
  echo '<h1 class="widget-title">Last '.$how_many_last_posts.' Posts <i class="fa fa-bullhorn" style="vertical-align: baseline;"></i></h1>&nbsp;';
  echo '<div class="archives-latest-section"><ol>';
  $counter = 1;
  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
    $my_query->the_post(); 
    ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><?php the_category(); ?></li>
    <?php
    $counter++;
  }
  echo '</ol></div>';
  echo the_posts_pagination();
  wp_reset_postdata();
}
?>
	</section>
</main>

<?php get_sidebar(); ?>



<?php get_footer(); ?>