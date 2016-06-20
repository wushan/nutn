<?php
/**
 * The template for displaying the footer.
 */
?>
	<div class='separator'>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	<footer>
		<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	
		<?php if ( get_theme_mod( 'custom_logo_footer' ) ) : ?>
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo-footer" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		 
		        <img src="<?php echo get_theme_mod( 'custom_logo_footer' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		 
		    </a>
	    <?php endif; ?>

	    <div class='footer-inner'>
	    	<div class='row restrict-large'>
		    	<div class='block'>
		    		<img src='<?php echo get_template_directory_uri()?>/assets/img/nutn-eco-logo-s.png'>
		    	</div>
		    	<div class='block'>
		    		<h3>國立台南大學 | <strong>生態科學與技術學系</strong></h3>
		    		<div class='contact'>
			    		系辦地址：70167 臺南市東區榮譽街67號（E-107室）/  寄件地址：70005 臺南市中西區樹林街二段33號<br>電話：06-2601779 / 傳真：06-2601797<br>電子郵件：<a href='mailto:danin0325@mail.nutn.edu.tw'>danin0325@mail.nutn.edu.tw</a>
			    		
		    		</div>
		    	</div>
		    	<div class='block'>
			    	<a href='http://www.facebook.com/EcologyEcoscience' target='_blank'>
			    		<img src='<?php echo get_template_directory_uri()?>/assets/img/social-facebook-circular-button.png'>
		    		</a>
		    	</div>
		    </div>
	    </div>
	    <div class='copyrights'>Copyrights by <u>NUTN Department of Ecoscience and Ecotechnology.</u> All Rights Reserved.</div>
	</footer>

	<!-- Slidebar menu -->

<div class="slidemenu-wrapper">
	<div class="slidemenu-inner">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
