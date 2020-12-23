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
    <input type="search" placeholder="<?php if ($geniorama['opt-text-placeholder-searchbar']) {
        echo $geniorama['opt-text-placeholder-searchbar'];
    } ?>" class="form-control" value="<?php echo get_search_query(); ?>" name="s">

    <input type="submit" value="Buscar" class="button-master principal-button w-100">
</form>