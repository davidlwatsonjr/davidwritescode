<form class="search-form" method="get" action="<?php echo home_url(); ?>/">
    <input class="field" type="text" name="s" value="<?php the_search_query(); ?>" />
    <button class="btn search-btn dwc-search-btn" type="submit" title="Search"></button>
</form>
