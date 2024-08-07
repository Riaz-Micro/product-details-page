<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public
 * @author     Pluginic
 */
class GPSC_Product_Slider_Carousel_Cross_Sell {


	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of the plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	public function gpsc_remove_default_crossell_product_display() {
		// Remove cross sell products.
		remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
	}

	public function gpsc_add_custom_product_gallery_display() {
		// Get options.
		$wpgpsc_crossell_slider_show            = wpgpsc_get_options( 'wpgpsc_crossell_slider_show' );
		$wpgpsc_crossell_on_single_page         = wpgpsc_get_options( 'wpgpsc_crossell_on_single_page' );
		$wpgpsc_crossell_section_title_show     = wpgpsc_get_options( 'wpgpsc_crossell_section_title_show' );
		$wpgpsc_crossell_section_title_text     = wpgpsc_get_options( 'wpgpsc_crossell_section_title_text' );
		$wpgpsc_crossell_slider_speed           = wpgpsc_get_options( 'wpgpsc_crossell_slider_speed' );
		$wpgpsc_crossell_slider_autoplay_on     = wpgpsc_get_options( 'wpgpsc_crossell_slider_autoplay' );
		$wpgpsc_crossell_slider_autoplay_delay  = wpgpsc_get_options( 'wpgpsc_crossell_slider_autoplay_delay' );
		$wpgpsc_crossell_slider_autoplay        = $wpgpsc_crossell_slider_autoplay_on ? 'autoplay: {delay: ' . $wpgpsc_crossell_slider_autoplay_delay . ',},' : '';
		$wpgpsc_crossell_slider_loop            = wpgpsc_get_options( 'wpgpsc_crossell_slider_loop' ) ? 'true' : 'false';
		$wpgpsc_crossell_slides_per_view        = wpgpsc_get_options( 'wpgpsc_crossell_slides_per_view' );
		$wpgpsc_crossell_slides_space_between   = wpgpsc_get_options( 'wpgpsc_crossell_slides_space_between' );
		$wpgpsc_crossell_slider_navigation      = wpgpsc_get_options( 'wpgpsc_crossell_slider_navigation' );
		$wpgpsc_crossell_slider_nav_icon        = wpgpsc_get_options( 'wpgpsc_crossell_slider_nav_icon' );
		$wpgpsc_crossell_slider_pagination      = wpgpsc_get_options( 'wpgpsc_crossell_slider_pagination' );
		$wpgpsc_crossell_slider_pagination_type = wpgpsc_get_options( 'wpgpsc_crossell_slider_pagination_type' );

		// Visibilities.
		$wpgpsc_crossell_section_title_show   = wpgpsc_get_options( 'wpgpsc_crossell_section_title_show' );
		$wpgpsc_crossell_section_title_text   = wpgpsc_get_options( 'wpgpsc_crossell_section_title_text' );
		$wpgpsc_crossell_product_img_show     = wpgpsc_get_options( 'wpgpsc_crossell_product_img_show' );
		$wpgpsc_crossell_product_name_show    = wpgpsc_get_options( 'wpgpsc_crossell_product_name_show' );
		$wpgpsc_crossell_product_excerpt_show = wpgpsc_get_options( 'wpgpsc_crossell_product_excerpt_show' );
		$wpgpsc_crossell_product_cat_show     = wpgpsc_get_options( 'wpgpsc_crossell_product_cat_show' );
		$wpgpsc_crossell_product_rating_show  = wpgpsc_get_options( 'wpgpsc_crossell_product_rating_show' );
		$wpgpsc_crossell_product_stack_show   = wpgpsc_get_options( 'wpgpsc_crossell_product_stack_show' );
		$wpgpsc_crossell_product_price_show   = wpgpsc_get_options( 'wpgpsc_crossell_product_price_show' );
		$wpgpsc_crossell_product_btn_show     = wpgpsc_get_options( 'wpgpsc_crossell_product_btn_show' );

		// Color.
		$gpsc_global_typography_brand_color = wpgpsc_get_options( 'gpsc_global_typography_brand_color' );

		// Typography.
		$gpsc_load_global_google_fonts  = wpgpsc_get_options( 'gpsc_load_global_google_fonts' );
		$gpsc_global_typography_content = wpgpsc_get_options( 'gpsc_global_typography_content' );
		$gpsc_global_typography_ff      = ! empty( $gpsc_global_typography_content['font-family'] ) ? 'font-family:' . $gpsc_global_typography_content['font-family'] . ';' : '';
		$gpsc_global_typography_ff_url  = '';
		if ( $gpsc_load_global_google_fonts ) {

			$gpsc_global_typography_ff_url  = '@import url("https://fonts.googleapis.com/css2?family=' . str_replace( ' ', '+', $gpsc_global_typography_content['font-family'] ) . '&display=swap");';
		}

		/**
		 * Nav Icon Generate.
		 */
		$wpgpsc_cross_slider_nav_svg = '';
		switch ( $wpgpsc_crossell_slider_nav_icon ) {
			case 'ico-1':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/></svg>';
				break;
			case 'ico-2':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"/></svg>';
				break;
			case 'ico-3':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"/></svg>';
				break;
			case 'ico-4':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"/></svg>';
				break;
			case 'ico-5':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 96c0-8.8-7.2-16-16-16L64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320zM384 32c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32l320 0zM320 256c0 6.7-2.8 13-7.7 17.6l-112 104c-7 6.5-17.2 8.2-25.9 4.4s-14.4-12.5-14.4-22l0-208c0-9.5 5.7-18.2 14.4-22s18.9-2.1 25.9 4.4l112 104c4.9 4.5 7.7 10.9 7.7 17.6z"/></svg>';
				break;
			case 'ico-6':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z"/></svg>';
				break;
			case 'ico-7':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M48 32h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48zm140.485 355.515l123.029-123.029c4.686-4.686 4.686-12.284 0-16.971l-123.029-123.03c-7.56-7.56-20.485-2.206-20.485 8.485v246.059c0 10.691 12.926 16.045 20.485 8.486z"/></svg>';
				break;
			case 'ico-8':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"/></svg>';
				break;
			case 'ico-9':
				$wpgpsc_cross_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480 96c17.7 0 32 14.3 32 32s-14.3 32-32 32l-208 0 0-64 208 0zM320 288c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32s14.3-32 32-32h64zm64-64c0 17.7-14.3 32-32 32H304c-17.7 0-32-14.3-32-32s14.3-32 32-32h48c17.7 0 32 14.3 32 32zM288 384c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32s14.3-32 32-32h64zm-88-96l.6 0c-5.4 9.4-8.6 20.3-8.6 32c0 13.2 4 25.4 10.8 35.6C177.9 364.3 160 388.1 160 416c0 11.7 3.1 22.6 8.6 32H160C71.6 448 0 376.4 0 288l0-61.7c0-42.4 16.9-83.1 46.9-113.1l11.6-11.6C82.5 77.5 115.1 64 149 64l27 0c35.3 0 64 28.7 64 64v88c0 22.1-17.9 40-40 40s-40-17.9-40-40V160c0-8.8-7.2-16-16-16s-16 7.2-16 16v56c0 39.8 32.2 72 72 72z"/></svg>';
				break;
		}

		$cart = WC()->cart->get_cart();
		if ( ! empty( $cart ) ) {

			$gpsc_cross_sell_ids_merged = array();
			foreach ( $cart as $cart_item_key => $cart_item ) {

				$_product                   = wc_get_product( $cart_item['product_id'] );
				$gpsc_cross_sell_ids        = $_product->get_cross_sell_ids();
				$gpsc_cross_sell_ids_merged = array_merge( $gpsc_cross_sell_ids_merged, $_product->get_cross_sell_ids() );
			}
			$gpsc_cross_sell_ids_no_duplicate = array_unique( $gpsc_cross_sell_ids_merged );

			if ( ! empty( $gpsc_cross_sell_ids_no_duplicate ) ) {

				// Get cross-sell products query.
				$gpsc_cross_sell_args     = array(
					'include'    => $gpsc_cross_sell_ids_no_duplicate,
					'status'     => 'publish',
					'visibility' => 'visible',
				);
				$gpsc_cross_sell_products = wc_get_products( $gpsc_cross_sell_args );

				// Enqueueing.
				wp_enqueue_style( $this->plugin_name . 'swiper' );
				wp_enqueue_script( $this->plugin_name . 'swiper' );

				echo '<style>
				.swiper {
					width: 100%;
					height: 100%;
				}
				.gpsc-cross-swiper-slide {
					text-align: center;
					font-size: 18px;
					background: #fff;
					display: flex;
					justify-content: center;
					align-items: center;
					height: auto !important;
				}
				.swiper-slide img {
					display: block;
					width: 100%;
					height: 100%;
					object-fit: cover;
				}
				.gpsc-cross-main--wrapper {
					margin-bottom: 10px;
				}
				.gpsc-cross-single-slide {
					background: #ffffff;
					border-radius: 5px;
					width: 100%;
					height: 100%;
					border: 1px solid ' . $gpsc_global_typography_brand_color . ';
					overflow: hidden;
				}
				.gpsc-cross-product-name a {
					text-align: center;
					font-size: 20px !important;
					line-height: 28px;
					font-weight: bold;
					text-decoration: none !important;
					color: #000;
					display: block;
					word-spacing: 1px;
					text-transform: capitalize;
				}
				bdi.gpsc-single-cross-product-price {
					font-size: 20px;
					line-height: 22px;
					font-weight: bold;
					text-align: center;
					color: ' . $gpsc_global_typography_brand_color . ' !important;
				}
				.gpsc-single-cross-product-price del {
					color: #9e9e9e !important;
					font-size: 85%;
				}
				.gpsc-single-cross-product-price .amount {
					color: ' . $gpsc_global_typography_brand_color . ' !important;
				}
				.gpsc-single-cross-product-price del .amount{
					color: #9e9e9e !important;
					font-weight: normal;
					opacity: .9;
					font-size: 85%;
				}
				.gpsc-cross-product-btn .product.woocommerce.add_to_cart_inline {
					margin-bottom: 0 !important;
				}
				.gpsc-cross-product-btn .product.woocommerce.add_to_cart_inline > a.button {
					display: inline-block;
					margin: 0;
					text-align: center;
					background: ' . $gpsc_global_typography_brand_color . ';
					font-size: 16px;
					line-height: 20px;
					color: #fff;
					padding: 12px 20px;
					border-radius: 5px;
					box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
					text-transform: capitalize;
					font-weight: 600;
					border: none;
					transition: 0.5s;
					min-height: auto;
					outline: none;
				}
				.gpsc-cross-product-btn .product.woocommerce.add_to_cart_inline > a.button:hover {
					cursor: pointer;
					box-shadow: 0 0;
					background: #2b6cb0;
					transform: translateY(-1px);
					color: #fff !important;
				}
				.gpsc-cross-product-desc {
					font-size: 16px;
					line-height: 20px;
					color: #646363;
				}
				.gpsc-cross-product-stock {
					margin-bottom: 10px;
				}
				.gpsc-crosssell-product-content-wrapper {
					display: flex;
					flex-direction: column;
					align-items: center;
					gap: 10px;
					padding: 15px 15px 20px;
				}
				.gpsc-cross-product-stock-content {
					display: flex;
					flex-direction: row;
					align-items: center;
					justify-content: center;
					gap: 5px;
					text-transform: capitalize;
					font-size: 18px;
					font-weight: 400;
					line-height: 18px;
				}
				.gpsc-cross-product-stock svg {
					height: 18px;
					width: 18px;
				}
				.gpsc-cross-product-category {
					font-size: 18px;
					line-height: 18px;
					font-weight: normal;
					color: ' . $gpsc_global_typography_brand_color . ';
				}
				.gpsc-cross-product-category a {
					color: ' . $gpsc_global_typography_brand_color . ';
				}
				.gpsc-cross-product-details {
					margin-top: 10px;
				}
				.gpsc-cross-product-star-rating {
					position: relative;
					line-height: 1.618;
					font-size: 1em;
				}
				.gpsc-cross-product-star-rating span {
					overflow: hidden;
					float: left;
					top: 0;
					left: 0;
					position: absolute;
					padding-top: 1.5em;
					color: #2c2d33;
				}
				.gpsc-cross-product-rating-wrapper:before,
				.gpsc-cross-product-star-rating:after {
					position: absolute;
					top: 0;
					left: 0;
					content: "";
					height: 20px;
					background-size: cover;
					background-repeat: no-repeat;
					background-position: left center;
				}
				.gpsc-cross-product-rating-wrapper:before {
					width: 100%;
					z-index: 1;
					background-image: url("data:image/svg+xml,%3Csvg viewBox=\'0 0 304 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'m181.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 7-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 0.9 2.7 2.3z\' fill=\'%23dfdfdf\'/%3E%3Cpath d=\'m121 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0 2.4 0.9 2.8 2.2z\' fill=\'%23dfdfdf\'/%3E%3Cpath d=\'m303 26.4-13.2 11.6 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 1 2.8 2.2s0.1 2.6-0.8 3.3z\' fill=\'%23dfdfdf\'/%3E%3Cpath d=\'m242.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.5 0.1 2.5 0.9 2.9 2.3z\' fill=\'%23dfdfdf\'/%3E%3Cpath d=\'m60.1 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3s-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0.1 2.5 1 2.8 2.3z\' fill=\'%23dfdfdf\'/%3E%3C/svg%3E");
					filter: drop-shadow(0px 1px 0px gray);
				}
				.gpsc-cross-product-star-rating:after {
					width: 100%;
					z-index: 2;
					background-image: url("data:image/svg+xml,%3Csvg viewBox=\'0 0 304 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'m181.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 7-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 0.9 2.7 2.3z\' fill=\'%23FFC107\'/%3E%3Cpath d=\'m121 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0 2.4 0.9 2.8 2.2z\' fill=\'%23FFC107\'/%3E%3Cpath d=\'m303 26.4-13.2 11.6 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 1 2.8 2.2s0.1 2.6-0.8 3.3z\' fill=\'%23FFC107\'/%3E%3Cpath d=\'m242.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.5 0.1 2.5 0.9 2.9 2.3z\' fill=\'%23FFC107\'/%3E%3Cpath d=\'m60.1 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3s-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0.1 2.5 1 2.8 2.3z\' fill=\'%23FFC107\'/%3E%3C/svg%3E");
				}
				.gpsc-cross-product-rating-wrapper {
					width: 102px;
					height: 20px;
					overflow: hidden;
					position: relative;
					margin: auto;
					margin-bottom: 10px;
				}
				.gpsc-cross-product-carousel {
					padding: 50px 10px 0px 10px !important;
					position: relative !important;
					margin-bottom: 30px;
					' . $gpsc_global_typography_ff . ';
				}
				h4.gpsc-cross-slider-title {
					position: absolute;
					top: 0;
					left: 10px;
					color: ' . $gpsc_global_typography_brand_color . ';
				}';
				if ( $wpgpsc_crossell_slider_navigation ) {
					echo '.gpsc-slider-btn-next::after, .gpsc-slider-btn-prev::after, .swiper-button-next::after, .swiper-button-prev::after {
						display: none !important;
					}
					.gpsc-slider-btn-next:hover svg, .gpsc-slider-btn-prev:hover svg {
						fill: #fff;
					}
					.gpsc-slider-btn-next:hover,
					.gpsc-slider-btn-prev:hover {
						border: 1px solid #fff;
						opacity: 1 !important;
					}
					.gpsc-slider-btn .gpsc-slider-btn-next,
					.gpsc-slider-btn .gpsc-slider-btn-prev {
						height: 35px !important;
						width: 35px !important;
						border: 1px solid #fff;
						transition: .3s;
						background: ' . $gpsc_global_typography_brand_color . ';
						outline: none;
						margin: 0 !important;
						right: 0 !important;
						box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    					border-radius: 2px;
						opacity: .8;
					}
					.gpsc-slider-btn {
						position: absolute;
						top: 0;
						right: 10px;
					}
					.gpsc-slider-btn-prev {
						left: -80px !important;
						right: auto !important;
						transform: rotate(180deg);
					}
					.gpsc-slider-btn-next svg,
					.gpsc-slider-btn-prev svg {
						height: 20px;
						width: 20px;
						fill: #fff;
						transition: .3s;
					}
					.gpsc-cross-product-carousel {
						padding-top: 50px !important;
					}';
				}
				if ( $wpgpsc_crossell_slider_pagination ) {
					echo '.gpsc-cross-product-pagination .swiper-pagination-bullet-active {
						background: ' . $gpsc_global_typography_brand_color . ' !important;
					}
					.swiper-pagination-bullets .swiper-pagination-bullet:before {
						border: none;
					}
					.swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active:after {
						border-top: none;
					}
					.swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet, .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						margin: 0 5px;
					}
					.gpsc-cross-product-pagination {
						bottom: 0 !important;
						top: auto !important;
					}
					.gpsc-cross-product-carousel {
						padding-bottom: 50px !important;
					}';
				}
				if ( 'progressbar' == $wpgpsc_crossell_slider_pagination_type ) {
					echo '.gpsc-cross-product-carousel {
						padding-bottom: 0 !important;
					}
					.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
						background: ' . $gpsc_global_typography_brand_color . ' !important;
					}';
				}
				echo '</style>
				<div class="swiper gpsc-cross-product-carousel">';
				if ( $wpgpsc_crossell_section_title_show ) {

					echo '<h4 class="gpsc-cross-slider-title">' . $wpgpsc_crossell_section_title_text . '</h4>';
				}
				if ( $wpgpsc_crossell_slider_navigation ) {
					echo '<div class="gpsc-slider-btn">
					<div class="gpsc-slider-btn-prev swiper-button-prev">' . $wpgpsc_cross_slider_nav_svg . '</div>
					<div class="gpsc-slider-btn-next swiper-button-next">' . $wpgpsc_cross_slider_nav_svg . '</div>
				</div>';
				}
				echo '<div class="swiper-wrapper gpsc-cross-main--wrapper">';
				foreach ( $gpsc_cross_sell_products as $product ) {
					$gpsc_product_img_src = get_post_thumbnail_id( $product->get_id() ) ? wp_get_attachment_image_src( get_post_thumbnail_id( $product->get_id() ), 'medium' )[0] : '';

					echo '<div class="swiper-slide gpsc-cross-swiper-slide">
							<div class="gpsc-cross-single-slide">';
					if ( $wpgpsc_crossell_product_img_show && get_post_thumbnail_id($product->get_id()) ) {
						echo '<div class="gpsc-cross-product-img"><a href="' . esc_url( get_permalink( $product->get_id() ) ) . '">
				<img src="' . esc_url( $gpsc_product_img_src ) . '" alt="' . esc_html( $product->get_title() ) . '">
				</a>
					</div>';
					}
					echo '<div class="gpsc-crosssell-product-content-wrapper">';
					if ( $wpgpsc_crossell_product_name_show ) {
						echo '<div class="gpsc-cross-product-name"><a href="' . esc_url( get_permalink( $product->get_id() ) ) . '">' . $product->get_title() . '</a></div>';
					}
					if ( $wpgpsc_crossell_product_excerpt_show ) {
						echo '<div class="gpsc-cross-product-desc">';
						echo wp_trim_words( wp_kses_post( wpautop( $product->get_short_description() ) ), 6, ' […]' );
						echo '</div>';
					}
					if ( $wpgpsc_crossell_product_cat_show ) {
						echo '<div class="gpsc-cross-product-category">';
						$gpsc_categories = array();
						foreach ( $product->get_category_ids() as $category_id ) {
							$category_term     = get_term_by( 'id', $category_id, 'product_cat' );
							$category_name     = $category_term->name;
							$category_link     = get_term_link( $category_id );
							$gpsc_categories[] = '<a href="' . esc_url( $category_link ) . '">' . esc_html( $category_name ) . '</a>';
						}
						echo wp_kses_post( implode( ', ', $gpsc_categories ) );
						echo '</div>';
					}
					echo '<div class="gpsc-cross-product-details">';
					if ( $product->get_reviews_allowed() && $wpgpsc_crossell_product_rating_show ) {
						$gpsc_product_rating_percentage = (int) $product->get_average_rating() * 2 . '0%';
						echo '<div class="gpsc-cross-product-rating-wrapper"><div class="gpsc-cross-product-star-rating" role="img" aria-label="Rated ' . $product->get_average_rating() . ' out of 5" style="width:' . $gpsc_product_rating_percentage . '"><span>Rated <strong class="rating">4.00</strong> out of 5</span></div></div>';
					}
					if ( $wpgpsc_crossell_product_stack_show ) {
						echo '<div class="gpsc-cross-product-stock">';
						switch ( $product->get_stock_status() ) {
							case 'instock':
								echo '<div class="gpsc-cross-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 16px; width: 16px;"><path fill="#238527" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg><span>In stock</span></div>';
								break;
							case 'outofstock':
								echo '<div class="gpsc-cross-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#ff0000" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg><span>Out of stock</span></div>';
								break;
							case 'onbackorder':
								echo '<div class="gpsc-cross-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 14px;width: 14px;"><path fill="#0170b9" d="M109.7 160H160c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V64C0 46.3 14.3 32 32 32s32 14.3 32 32v51.2L81.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L109.7 160z"/></svg><span>On backorder</span></div>';
								break;
						}
						echo '</div>';
					}
					if ( $wpgpsc_crossell_product_price_show ) {
						echo '<div class="gpsc-cross-product-price-wrapper"><bdi class="gpsc-single-cross-product-price">' . wp_kses_post( $product->get_price_html() ) . '</bdi></div>';
					}
					echo '</div>';
					if ( $wpgpsc_crossell_product_btn_show ) {
						echo '<div class="gpsc-cross-product-btn">';
						echo do_shortcode( '[add_to_cart id="' . $product->get_id() . '" show_price="FALSE"]' );
						echo '</div>';
					}
					echo '</div>
							</div>
						</div>';
				}
				echo '</div>';
				if ( $wpgpsc_crossell_slider_pagination ) {
					echo '<div class="gpsc-cross-product-pagination swiper-pagination"></div>';
				}
				echo '</div>';

				// Slider init.
				echo '<script>
(function( $ ) {
	"use strict";
	$( document ).ready(function() {
		var swiper = new Swiper(".gpsc-cross-product-carousel", {
			' . $wpgpsc_crossell_slider_autoplay . '
			speed: ' . $wpgpsc_crossell_slider_speed . ',
			loop: ' . $wpgpsc_crossell_slider_loop . ',
			slidesPerView: 1,
			spaceBetween: ' . $wpgpsc_crossell_slides_space_between . ',
			breakpoints: {
				667: {
					slidesPerView: 2,
				},
				982: {
					slidesPerView: ' . $wpgpsc_crossell_slides_per_view . ',
					spaceBetween: ' . $wpgpsc_crossell_slides_space_between . ',
				}
			},
			pagination: {
				el: ".gpsc-cross-product-pagination",
				clickable: true,
				dynamicBullets: true,
				type: "' . $wpgpsc_crossell_slider_pagination_type . '",
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	});
})( jQuery );
				</script>';

			}
		}
	}
}
