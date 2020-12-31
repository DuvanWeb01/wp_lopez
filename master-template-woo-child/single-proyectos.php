<?php
get_header();

echo do_shortcode('[lp_breadcrumbs]');
?>
<div class="container lp-proyects">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="lp-gallery-grid">
                <div class="lp-gallery-grid__item">
                    <a href="https://picsum.photos/1920/1280" data-lightbox="image-1" data-title="My caption">
                        <figure>
                            <img src="https://picsum.photos/1920/1280" alt="">
                            <figcaption>
                                <i class="far fa-eye"></i>
                            </figcaption>
                        </figure>
                    </a>
                </div>
  
                <div class="lp-gallery-grid__item">
                    <a href="https://picsum.photos/1920/1280" data-lightbox="image-1" data-title="My caption">
                        <figure>
                            <img src="https://picsum.photos/1920/1280" alt="">
                            <figcaption>
                                <i class="far fa-eye"></i>
                            </figcaption>
                        </figure>
                    </a>
                </div>
  
                <div class="lp-gallery-grid__item">
                    <a href="https://picsum.photos/1920/1280" data-lightbox="image-1" data-title="My caption">
                        <figure>
                            <img src="https://picsum.photos/1920/1280" alt="">
                            <figcaption>
                                <i class="far fa-eye"></i>
                            </figcaption>
                        </figure>
                    </a>
                </div>
  
                <div class="lp-gallery-grid__item">
                    <a href="https://picsum.photos/1920/1280" data-lightbox="image-1" data-title="My caption">
                        <figure>
                            <img src="https://picsum.photos/1920/1280" alt="">
                            <figcaption>
                                <i class="far fa-eye"></i>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-md-6 lp-proyects__info">
            <h1 class="lp-proyects__title"><?php echo get_the_title(); ?></h1>
            <h5 class="lp-proyects__client"><?php echo get_field('field_5fece3c043bd5'); ?></h5>
            <span class="lp-proyects__line"></span>
            <div class="lp-proyects__date"><?php echo get_field('field_5fecdfc680076'); ?></div>
            <p class="lp-proyects__desc"><?php echo get_the_content(); ?></p>
            <img src="<?php echo get_field('field_5fece3ea43bd6'); ?>" alt="">
        </div>
    </div>
    <div class="lp-proyects__related">
        <h2 class="lp-proyects__title-related text-center">Otros proyectos</h2>
        <div class="lp-proyects__carousel">
        
        <?php
            $exclude = get_the_ID();
            $loop = new WP_Query( array(
                'post_type' => 'Proyectos', 
                'post__not_in' => array($exclude),
                'posts_per_page' => 6
                )
            );
        ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="item-proyects">
            <a href="<?php echo get_the_permalink(); ?>" class="item-proyects__cont">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                <div class="item-proyects__caption">
                    <div class="item-proyects__info">
                        <img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/image-9-2.png" alt="" class="item-proyects__img">
                        <h3 class="item-proyects__title"><?php echo get_the_title(); ?></h3>
                        <button class="button-master principal-button button-rounded normal-button">Ver proyecto</button>
                    </div>
                </div>
            </a>
        </div>

        <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>
<?php

get_footer();

