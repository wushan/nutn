<form action="/" method="get">
    <label for="search">search</label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/assets/img/svgicons/icon-search.svg" />
</form>