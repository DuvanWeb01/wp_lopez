<?php
/*
Template Name: Search Input
*/

global $geniorama;
?>

<?php


    


switch ($geniorama['opt-type-searchbar']) {
    case 1:
        get_template_part('template-parts/search/searchform-none-button');
        break;
    
    case 2:
        get_template_part('template-parts/search/searchform-inline');
        break;
    
    case 3:
        get_template_part('template-parts/search/searchform-full-width');
        break;

}

