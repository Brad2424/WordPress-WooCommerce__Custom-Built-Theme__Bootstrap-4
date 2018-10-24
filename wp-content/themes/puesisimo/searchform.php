<form role="search" method="get" class="search-form" action=<?php echo home_url( '/' ); ?> >
    <label>
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="form-control" placeholder="Search &hellip;" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <input type="submit" class="search-submit" value="Search" />
</form>            
