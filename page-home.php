<?php
/*
 Template Name: Home
*/
?>
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

			<nav class='main-navigation'>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<a href='javascript:;' class='search-trigger js-search-trigger'><img src='<?php echo get_template_directory_uri()?>/assets/img/svgicons/icon-search.svg'></a>
			</nav>
			
				<?php get_search_form()?>
			

		</div>
	</div>
</header>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<section class='page-container'>
		<div class='news-wrapper'>
			<div class='news-latest block'>
				<div class='title'>最新消息</div>
				<ul>
					<?php $my_query = new WP_Query( array(
			            'post_type' => 'post',
			            'category_name' => 'important-news, activities-news, admission-news, student-association',
			            'posts_per_page' => 6
			        ) );
					while ( $my_query->have_posts() ) : $my_query->the_post();
					$do_not_duplicate[] = $post->ID; ?>
					
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
			</div>
			<div class='news-others block'>
				<div class='title'>校內外其他學術活動、徵稿、徵才、獎學金</div>
				<ul>
					<?php query_posts( array ( 'category_name' => 'other-news', 'posts_per_page' => 6 ) );
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
							
							<li>
								<div class='meta'>
									<time><?php the_time( 'Y/m/d' ); ?></time>
								</div>
								
								<div class='post-title'>
									<a href='<?php echo the_permalink();?>'><?php echo the_title()?></a>

								</div>
							</li>
							
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
		<div class='separator'>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		
		<?php wp_reset_query(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class='restrict-large'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; endif; ?>
			<div class='gallery-wrapper'>
				<div class='title restrict-large'>
					<h2>本系精彩戶外教學活動</h2>
				</div>
				<div class='separator'>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<?php
					//https://www.imagely.com/docs/nextgen-gallery-shortcodes/
					// echo do_shortcode( '[ngg_images album_ids=0 display_type=photocrati-nextgen_basic_compact_album galleries_per_page=6 pagination=0]' );
				echo do_shortcode( '[ngg_images gallery_ids="1" display_type="photocrati-nextgen_basic_thumbnails" images_per_page=8]' );
				?>
			</div>
		
	</section>
</main>

<!-- <?php get_sidebar(); ?> -->



<?php get_footer(); ?>
