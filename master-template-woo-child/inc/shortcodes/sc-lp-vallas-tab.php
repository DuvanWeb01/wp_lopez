<?php

if(!function_exists('lp_vallas_tab_func')){
    function lp_vallas_tab_func(){
        $args = array(
            'post_type' => 'lp_vallas',
        );

        $vallas_query = new WP_Query($args);

        if($vallas_query->have_posts()){
            ob_start();
            ?>
            <ul class="mt-menu-tab nav justify-content-center my-3">
            <?php while($vallas_query->have_posts()): $vallas_query->the_post(); $info_post = get_post(); ?>
                <li class="mt-menu-tab__item nav-item"><a href="#" class="mt-menu-tab__link nav-link" data-target="<?php echo $info_post->post_name; ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>

            <div class="mt-collapse p-4">
                <?php while($vallas_query->have_posts()): $vallas_query->the_post(); $info_post = get_post();?>
                    <?php 
                        $galeria_vallas = get_field('galeria_vallas');
                        $galeria_vallas_explode = explode(',', $galeria_vallas);
                    ?>
                    <div class="mt-collapse-item row align-items-center" id="<?php echo $info_post->post_name; ?>">
                            <div class="col-12 col-md-7 mt-collapse-item__gallery p-5">
                            <div class="mt-collapse-item__carousel slick-theme">
                                <?php foreach($galeria_vallas_explode as $item_galeria): ?>
                                    <div class="item">
                                        <?php echo wp_get_attachment_image( $item_galeria, 'full', false, array('class' => 'img-fluid') ); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            </div>
                            <div class="col-12 col-md-5 mt-collapse-item__content p-5 shadow">
                            <h4 class="mt-collapse-item__content__title"><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php
            wp_reset_postdata();
            return ob_get_clean();
        }
    }

    add_shortcode( 'lp_vallas_tab', 'lp_vallas_tab_func' );
}