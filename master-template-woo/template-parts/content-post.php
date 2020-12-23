<?php
 //Template para mostrar post
global $geniorama;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('template-parts/subheader') ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-row align-items-center justify-content-between share-date-bar">
                    <span class="date-post">
                        <i class="fas fa-history"></i> <?php the_date(); ?>
                    </span>

                     <!--Share Links-->
                     <?php if(get_field('field_5e0f7f166bbf1')): ?>
                        <div class="share-links d-flex flex-row align-items-center">
                            <span class="text-share">Compartir en:</span>
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="button-icon" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="https://twitter.com/home?status=<?php the_permalink(); ?>"  class="button-icon" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a></li>
                                <li class="nav-item"><a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=&description=" class="button-icon" target="_blank"><i class="fab fa-pinterest" target="_blank"></i></a></li>
                                <li class="nav-item"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source=" class="button-icon" target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
                                <li class="nav-item"><a href="mailto:info@example.com?&subject=&body=<?php the_permalink(); ?> " class="button-icon" target="_blank"><i class="fas fa-envelope" target="_blank"></i></a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <!--end share links-->
                </div>
            </div>
            <div class="col-12 <?php 
                if (get_field('field_5e0f670f0f320')) {
                    echo "col-md-9";
                }
            ?> post-col">
                <div class="post-content">
                    <div class="entry-content">
                        <?php
                        the_content( sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'master-template-woo' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ) );

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'master-template-woo' ),
                            'after'  => '</div>',
                        ) );
                        ?>

                        <?php

                            if ($geniorama['on-off-links-post']) {
                                if ($geniorama['opt-text-links-post'] == 1) {
                                    the_post_navigation(array(
                                        'prev_text'                  => __( '%title' ),
                                        'next_text'                  => __( '%title' ),
                                        'screen_reader_text' => __( 'Continuar leyendo', 'master-template-woo' )
                                    ));
                                } else {
                                    the_post_navigation(array(
                                        'prev_text'                  => __($geniorama['prev-title-post']),
                                        'next_text'                  => __($geniorama['next-title-post']),
                                        'screen_reader_text' => __( 'Continuar leyendo', 'master-template-woo' )
                                    ));
                                }
                            }
                        ?>
                    </div><!-- .entry-content -->

                   

                    <!-- Comments section -->
                    <?php 
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (get_field('field_5e0f69707844b')) {
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        }
                    ?>
                </div>

                
            </div>
            <?php if(get_field('field_5e0f670f0f320')): ?>
                <div class="col-12 col-md-3 sidebar-col">
                    <div class="sidebar-single">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>