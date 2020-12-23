<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Master_Template_Woo
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */



function master_template_woo_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'master_template_woo_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */


function master_template_woo_woocommerce_scripts() {
	wp_enqueue_style( 'master-template-woo-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'master_template_woo_woocommerce_scripts' );



/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */

function master_template_woo_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'master_template_woo_woocommerce_active_body_class' );


/**
 * Products per page.
 *
 * @return integer number of products.
 */

function master_template_woo_woocommerce_products_per_page() {
	global $geniorama;
	return $geniorama['wc-prod-per-page'];
}
add_filter( 'loop_shop_per_page', 'master_template_woo_woocommerce_products_per_page' );


/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function master_template_woo_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'master_template_woo_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function master_template_woo_woocommerce_loop_columns() {
	global $geniorama;

	if ($geniorama['wc-num-cols'] == 1) {
		$cols = 3;
	} else {
		$cols = 4;
	}
	return $cols;
}
add_filter( 'loop_shop_columns', 'master_template_woo_woocommerce_loop_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function master_template_woo_woocommerce_related_products_args( $args ) {
	global $geniorama;
	
	if ($geniorama['wc-num-releated-cols'] == 1) {
		$cols_releated = 3;
	} else {
		$cols_releated = 4;
	}

	$defaults = array(
		'posts_per_page' => $geniorama['wc-prod-releated-per-page'],
		'columns'        => $cols_releated,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'master_template_woo_woocommerce_related_products_args' );

if ( ! function_exists( 'master_template_woo_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function master_template_woo_woocommerce_product_columns_wrapper() {
		$columns = master_template_woo_woocommerce_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', 'master_template_woo_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'master_template_woo_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function master_template_woo_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'master_template_woo_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'master_template_woo_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function master_template_woo_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php if(get_post_type() == "product"){
				global $geniorama;
				if($geniorama['woo-subheader-on-off']){
				  get_template_part('template-parts/subheader');
				}
			} ?>
				<div class="container" id="container-page">
			<?php
	}
}
add_action( 'woocommerce_before_main_content', 'master_template_woo_woocommerce_wrapper_before' );

if ( ! function_exists( 'master_template_woo_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function master_template_woo_woocommerce_wrapper_after() {
			?>
				</div><!-- #container-page -->
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'master_template_woo_woocommerce_wrapper_after' );

//Breadcrumbs de woocommerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'master_template_woo_woocommerce_header_cart' ) ) {
			master_template_woo_woocommerce_header_cart();
		}
	?>
 */



// Add Shortcode
function custom_mini_cart() {

	echo '<a href="#" class="dropdown-back" data-toggle="dropdown"> ';
	    echo '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
	    echo '<div class="basket-item-count" style="display: inline;">';
	        echo '<span class="cart-items-count count">';
	            echo WC()->cart->get_cart_contents_count();
	        echo '</span>';
	    echo '</div>';
	echo '</a>';
	echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
	        echo '<li> <div class="widget_shopping_cart_content">';
	                  woocommerce_mini_cart();
	            echo '</div></li></ul>';

}
add_shortcode( 'custom-mini-cart', 'custom_mini_cart' );


if ( ! function_exists( 'master_template_woo_woocommerce_cart_link_fragment' ) ) {
	
	function master_template_woo_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		master_template_woo_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'master_template_woo_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'master_template_woo_woocommerce_cart_link' ) ) {

	function master_template_woo_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'master-template-woo' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'master-template-woo' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'master_template_woo_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function master_template_woo_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php master_template_woo_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}
