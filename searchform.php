<div class='search-form-wrapper'>
	<div class='search-form-inner'>
		<form action="/" method="get">
			<label for="search"><h1>Search</h1></label>
			<div class='controlgroup'>
			    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
			    <button type='submit' class='btn basic compact full'>Search</button>
		    </div>
		    <!-- <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/assets/img/svgicons/icon-search.svg" /> -->
		</form>
	</div>
	<a href='javascript:;' class='js-close close-btn'>
		<img src='<?php echo get_template_directory_uri()?>/assets/img/svgicons/icon-close-large.svg'>
	</a>
</div>