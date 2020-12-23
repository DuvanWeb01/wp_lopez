<?php
/**
 * Template part for Search Input Bar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */
global $geniorama;
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <div class="form-group row">
        <div class="col-12 col-md-10 p-0">
            <input type="search" placeholder="<?php echo ($geniorama['opt-text-placeholder-searchbar']) ? $geniorama['opt-text-placeholder-searchbar'] : "Buscar" ?>" class="form-control search-input" value="<?php echo get_search_query(); ?>" name="s">
        </div>
        <div class="col-12 col-md-2 p-0">
            <button type="submit" class="button-master principal-button m-0 p-0 w-100"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </div>
</form>