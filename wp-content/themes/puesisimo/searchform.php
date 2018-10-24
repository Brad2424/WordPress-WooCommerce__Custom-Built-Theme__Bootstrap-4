<form role="search" method="get" class="form-inline m-2" action=<?php echo home_url( '/' ); ?> >
    <span class="screen-reader-text">Search for:</span>
    <input class="form-control mr-sm-2" type="search" placeholder="" value="<?php echo get_search_query(); ?>" name="s" title="Search" aria-label="Search">
    <button id="search-submit"class="btn btn-info font-weight-bold m-auto my-2 my-sm-0" type="submit">Search</button>
</form>            
