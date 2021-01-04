<?php
get_header();

echo do_shortcode('[lp_breadcrumbs]');

// Información clientes
$terms = get_the_terms( $post->ID, "lp_customer" ); 

if($terms){
    $clientes = false;
    $logo_clientes = false;

    foreach($terms as $term){
        $clientes = $clientes . $term->name;
        $logo_clientes = get_field("imagen_destacada", $term);
        // var_dump($term);
    }
}
?>
<div class="container lp-proyects">
    <div class="row">
        <div class="col-12 col-md-6">
            <?php 
                // Obteniendo ID's de imágenes
                $galeria = get_field('galeria');
            ?>

            <?php if($galeria || get_the_post_thumbnail($post->ID)): $galeria_explode = explode(',', $galeria); ?>
                <div class="lp-gallery-grid">
                    <!-- Imagen destacada -->
                    <div class="lp-gallery-grid__item">
                        <a href="<?php echo get_the_post_thumbnail_url($post->ID); ?>" data-lightbox="<?php the_title(); ?>" data-title="<?php the_title(); ?>">
                            <figure>
                                <?php echo get_the_post_thumbnail( $post->ID, 'full'); ?>
                                <figcaption>
                                    <i class="far fa-eye"></i>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <!-- Imágenes galería -->
                    <?php if($galeria): ?>
                        <?php foreach($galeria_explode as $item_galeria): ?>
                        <?php
                            $src_image = wp_get_attachment_image_src( $item_galeria, 'full');
                            $src_image = $src_image[0];                    
                        ?>
                        <div class="lp-gallery-grid__item">
                            <a href="<?php echo $src_image; ?>" data-lightbox="<?php the_title(); ?>" data-title="<?php the_title(); ?>">
                                <figure>
                                    <?php echo wp_get_attachment_image( $item_galeria, 'medium', false); ?>
                                    <figcaption>
                                        <i class="far fa-eye"></i>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="col-12 col-md-6 lp-proyects__info">
            <h1 class="lp-proyects__title"><?php echo get_the_title(); ?></h1>
            <?php if($clientes): ?>
                <h5 class="lp-proyects__client"><?php echo $clientes; ?></h5>
            <?php endif; ?>
            <span class="lp-proyects__line"></span>
            <div class="lp-proyects__date"><?php 
                // Load field value and convert to numeric timestamp.
                $unixtimestamp = strtotime( get_field('fecha_proyecto') );

                // Display date in the format "l d F, Y".
                echo date_i18n( "d F, Y", $unixtimestamp );
             ?></div>
            <p class="lp-proyects__desc"><?php echo get_the_content(); ?></p>
            
            <?php if($logo_clientes): ?>
                <img src="<?php echo $logo_clientes['url']; ?>" alt="" class="lp-proyects__customer-logo">
            <?php endif; ?>

            
        </div>
    </div>

    <?php
        $exclude = get_the_ID();
        $loop = new WP_Query( array(
            'post_type' => 'Proyectos', 
            'post__not_in' => array($exclude),
            'posts_per_page' => 6
            )
        );
    ?>

    <?php if($loop->have_posts()): ?>
        <div class="lp-proyects__related">
            <h2 class="lp-proyects__title-related text-center">Otros proyectos</h2>
            <div class="lp-proyects__carousel">

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <?php
                $terms_releated = get_the_terms($loop->get_the_ID(),'lp_customer');
            ?>

            <div class="item-proyects">
                <a href="<?php echo get_the_permalink(); ?>" class="item-proyects__cont">
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                    <div class="item-proyects__caption">
                        <div class="item-proyects__info">
                            <?php 
                                if($terms_releated){
                                    foreach($terms_releated as $cliente){
                                        $cliente_nombre = $cliente->name;
                                        $logo_clientes_releated = get_field("imagen_destacada", $cliente);
                                        
                                        // Mostrando logo cliente
                                        if($logo_clientes_releated){
                                            echo "<img src=".$logo_clientes_releated['url']." class='item-proyects__img'>";
                                        } else {
                                             // Mostrando nombre cliente
                                            echo "<h5>$cliente_nombre</h5>";
                                        }
                                    }
                                }
                            ?>

                            <h3 class="item-proyects__title"><?php echo get_the_title(); ?></h3>
                            <button class="button-master principal-button button-rounded normal-button">Ver proyecto</button>
                        </div>
                    </div>
                </a>
            </div>

            <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php

get_footer();

