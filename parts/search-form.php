<form method="get" class="searchform" role="search" action="<?php echo home_url(); ?>/">
    <fieldset>
        <input type="submit" class="search-submit" value=" " />
        <input name="s" type="text" class="s search-input" value="<?php the_search_query(); ?>" placeholder="Search">
    </fieldset>
</form>