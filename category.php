<?php
   /**
   * A Simple Category Template
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
	<div class="header-cover" style='background-image: url("<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>");'>
		<div class='header-cover-inner restrict-large'>
			<h1><?php echo single_cat_title()?></h1>
		</div>
	</div>
	
</header>

<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
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
		<div class='category-wrapper container'>
			<div class='category-inner restrict-large'>
				<div class='sidebar'>
					<ul>

						<?php wp_list_categories('title_li=&exclude=1&order=DESC');?>
					</ul>
				</div>
				<div id="content" role="main">
			      <?php 
			         // Check if there are any posts to display
			         if ( have_posts() ) : ?>
			      <div class='category-list'>
				      <ul>
				      <?php
				         // The Loop
				         while ( have_posts() ) : the_post(); ?>
				      
				         <li>
								<div class='meta'>
									<div class='type'>
										<?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
										<?php if( $attachments->exist() ) : ?>
											<img src='<?php echo get_template_directory_uri()?>/assets/img/svgicons/icon-attachment.svg'>
										<?php else: ?>
											<img src='<?php echo get_template_directory_uri()?>/assets/img/svgicons/icon-info.svg'>
										<?php endif; ?>
										
									</div>
									<time><?php the_time( 'Y/m/d' ); ?></time>
								</div>
								<div class='category'>
									<?php
									    $category = get_the_category();

									    $the_category_id = $category[0]->cat_ID;
										
									    if(function_exists('rl_color')){
									        $rl_category_color = rl_color($the_category_id);
									        
									    }
									?>
									<div class='category-tag' style='background-color: <?php echo $rl_category_color; ?>'><?php echo the_category('single')?></div>
								</div>
								<div class='post-title'>
									<a href='<?php echo the_permalink();?>'><?php echo the_title()?></a>
								</div>
							</li>
				      <?php endwhile; ?>
				      </ul>
				         <?php else: ?>
				      <p>Sorry, no posts matched your criteria.</p>
				      
				      <?php endif; ?>
			     		<div id='pagination'>
							<?php the_posts_pagination()?>
						</div>
			     	</div>
			     	
			   </div>
			 </div>
		</div>
	</section>	
</main>



<?php get_footer(); ?>