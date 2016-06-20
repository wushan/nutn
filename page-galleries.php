<?php
/*
 Template Name: Galleries
*/
?>

<?php
get_header();

?>
<header id='header'>
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

			<nav class='main-navigation'>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<a href='javascript:;' class='search-trigger js-search-trigger'><img src='<?php echo get_template_directory_uri()?>/assets/img/svgicons/icon-search.svg'></a>
			</nav>
			<a class="js-mobile-trigger mobile-trigger icons-mobile-btn sb-toggle-left" href="javascript:;"></a>
			<?php get_search_form()?>
			

		</div>
	</div>
	<div class="header-cover" style='background-image: url("<?php the_post_thumbnail_url() ?>");'>
		<div class='header-cover-inner restrict-large'>
			<h1><?php echo the_title()?></h1>
		</div>
	</div>
	
</header>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog" class='single-gallery-wrapper'>
	<section class='page-container'>
		<div class='separator'>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<div class='restrict-large'>
				<div class='breadcrumbs-inner'>
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
			</div>
		</div>
		<div class='page-wrapper container'>
			<div class='page-inner restrict-large'>
				<div id='content' role='main'>
					<h2><?php echo the_title()?></h2>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" role="article">
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
						
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
				</div>
			</div>
		</div>
	</section>
</main>

<!-- <?php get_sidebar(); ?> -->



<?php get_footer(); ?>
