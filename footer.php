<?php
/**
 * The template for displaying the footer.
 */
?>

					<?php if ( get_theme_mod( 'custom_logo_footer' ) ) : ?>
					    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo-footer" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					 
					        <img src="<?php echo get_theme_mod( 'custom_logo_footer' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					 
					    </a>
				    <?php endif; ?>


<?php wp_footer(); ?>

</body>
</html>
