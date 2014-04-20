<form class="search-form" role="search" method="get" action="<?php echo home_url(); ?>/">
    <input class="field" type="search" name="s" value="<?php the_search_query(); ?>" placeholder="Search..." title="Search For:" />
    <button class="btn search-btn dwc-search-btn" type="submit" title="Search"></button>
</form>
