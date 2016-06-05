<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header id='header' class='headroom'>
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
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
		</header>
