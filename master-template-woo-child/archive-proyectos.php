<?php

get_header();
echo do_shortcode('[lp_breadcrumbs]');
?>

<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="title-section mb-4">NUESTRO PORTAFOLIO</h1>
           
            <div class="row lp-gallery-archive">
                <?php 
                    if (have_posts()) :
                        while (have_posts()) :
                        the_post();
                            ?>
                            <div class="col-12 col-md-4">
                                <?php
                                    // $image = get_field("imagen_destacada", "lp_customer");
                                    // var_dump($image);
                                    $terms = get_the_terms( get_the_ID(), 'lp_customer' );

                                ?>
                                <div class="lp-gallery-archive__item shadow">
                                    <figure>
                                        <?php the_post_thumbnail( "medium" ); ?>
                                        <figcaption>
                                            <?php if($terms): ?>
                                                <?php foreach($terms as $term): ?>
                                                
                                                <?php $image = get_field("imagen_destacada", $term); ?>


                                                <h5 class="lp-gallery-archive__item__name">
                                                    <?php echo $term->name;?>
                                                </h5>
                                                
                                                <?php if($image): ?>
                                                    <img src="<?php echo $image["url"]; ?>" alt="" class="lp-gallery-archive__item__brand">
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                            <a href="<?php the_permalink(); ?>" class="button-master principal-button button-rounded">VER PROYECTO</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();