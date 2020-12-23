<?php


// Subheader pages
function add_banner_subheader(){
	global $geniorama;

        if (get_post_type() == 'page') {
            if (get_field('field_5e019b2ef3c6a')) {
                //Banner páginas
                $urlImagen = get_field('field_5e019b2ef3c6a');
            } else {
                $urlImagen = $geniorama['opt-content-image-subheaders']['url'];
            }
         } elseif (get_post_type() == 'product') {
			if ($geniorama['woo-select-product-subheader'] == '1') {
                //Banner productos
                $urlImagen = $geniorama['woo-img-product']['url'];
            } else {
                $thumbID = get_post_thumbnail_id(get_the_ID());
                $urlImagen = wp_get_attachment_url( $thumbID );
            }
		 } elseif (get_post_type() == 'post') {
			if (get_field('field_5e741a0edc25c')) {
                //Banner blogs
                $urlImagen = get_field('field_5e741a0edc25c');
            } else {
                if (get_post_thumbnail_id( get_the_ID() )) {
					$thumbID = get_post_thumbnail_id(  get_the_ID());
					$urlImagen = wp_get_attachment_url( $thumbID );
				} else {
					$urlImagen = $geniorama['opt-content-image-subheaders']['url'];
				}
            }
		 } else{
			if (get_post_thumbnail_id( get_the_ID() )) {
				$thumbID = get_post_thumbnail_id( get_the_ID() );
				$urlImagen = wp_get_attachment_url( $thumbID );
			} else {
				$urlImagen = $geniorama['opt-content-image-subheaders']['url'];
			}
		 }
		 
	return $urlImagen;
}

// Logo
function show_logo($option){
	global $geniorama;

	if($option == 1){
		$url_logo_dark = $geniorama['img-logo-dark']['url'];
		$tagImg = "<img src='$url_logo_dark' class='img-brand'>";

		return $tagImg; 
	} elseif ($option == 2){
		$url_logo_light = $geniorama['img-logo-light']['url'];
		$tagImg = "<img src='$url_logo_light' class='img-brand'>";

		return $tagImg;
	}
}


// Social buttons
function show_social_buttons($classButtons){
	global $geniorama;
	?>
		<?php if ($geniorama['float-fb-button']): ?>
		<!-- Facebook -->
			<li class="nav-item">
				<a href="<?php echo $geniorama['social-fb'];?>" class="float-link link-facebook <?php add_class_button($classButtons); ?>" target="_blank">
					<i class="fab fa-facebook-f"></i>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($geniorama['float-ins-button']): ?>
		<!-- Instagram -->
			<li class="nav-item">
				<a href="<?php echo $geniorama['social-ins']; ?>" class="float-link link-instagram <?php add_class_button($classButtons); ?>" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($geniorama['float-yt-button'] == '1'): ?>
		<!-- YouTube -->
			<li class="nav-item">
				<a href="<?php echo $geniorama['social-yt']; ?>" class="float-link link-youtube <?php add_class_button($classButtons); ?>" target="_blank">
					<i class="fab fa-youtube"></i>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($geniorama['float-tw-button']): ?>
		<!-- Twitter -->
		<li class="nav-item">
			<a href="<?php echo $geniorama['social-tw']; ?>" class="float-link link-twitter <?php add_class_button($classButtons); ?>" target="_blank">
				<i class="fab fa-twitter"></i>
			</a>
		</li>
		<?php endif; ?>

		<?php if ($geniorama['float-li-button']): ?>
			<!-- Linked In -->
			<li class="nav-item">
				<a href="<?php echo $geniorama['social-li']; ?>" class="float-link link-linkedin <?php add_class_button($classButtons); ?>" target="_blank">
					<i class="fab fa-linkedin-in"></i>
				</a>
			</li>
		<?php endif; ?>

		<?php if ($geniorama['float-pt-button']): ?>
			<!-- Pinterest -->
			<li class="nav-item">
				<a href="<?php echo $geniorama['social-pt']; ?>" class="float-link link-pinterest <?php add_class_button($classButtons); ?>" target="_blank">
					<i class="fab fa-pinterest-p"></i>
				</a>
            </li>
        <?php endif; ?>

		<?php if(isset($geniorama['opt-whp']) && strlen($geniorama['opt-whp']) && $geniorama['float-what-button']): ?>
			<!-- Whatsapp -->
			<li class="nav-item">
				<a href="<?php echo api_whatsapp(); ?>" class="<?php add_class_button($classButtons); ?>" target="_blank">
					<i class="fab fa-whatsapp"></i>
				</a>
			</li>
		<?php endif; ?>
	<?php
}


// Search Button
function show_search_button($classButton){
	global $geniorama;
	?>
	<!-- Search button -->
	<li class="nav-item">
		<a href="#" class="search-button <?php add_class_button($classButton); ?>"  data-toggle="modal" data-target="#modalSearch">
			<i class="fas fa-search"></i>
		</a>
	</li>
	<?php
}

// Back to top Button
function show_btt_button($classButtons){
	global $geniorama;
	?>
		<!-- Back-to-top -->
		<li class="nav-item">
			<a href="#page" class="float-link link-backtop <?php add_class_button('float-buttons'); ?>" id="back-to-top">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</a>
		</li>
	<?php
}