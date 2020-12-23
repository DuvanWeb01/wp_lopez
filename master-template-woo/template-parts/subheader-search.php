<?php
/**
 * Template part for displaying subheaders
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama;
?>


<?php if(get_post_type() == 'post'): ?>
    <section class="sub-heading-section <?php echo add_class_subheader('banner');?> mb-5"<?php if($geniorama['opt-bg-subheaders'] === '1'):?> style="background-image: url('<?php echo add_banner_subheader(); ?>')" <?php endif; ?>>
        <div class="container">
            <div class="position-relative content-box <?php echo add_class_subheader('alignment'); ?>">
                <h1><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Resultados de búsqueda: "%s"', 'master-template-woo' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
                <?php if($geniorama['breadcrumbs-on-off']): ?>
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <?php 
                            if (function_exists('bcn_display')) {
                                bcn_display();
                            }
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

