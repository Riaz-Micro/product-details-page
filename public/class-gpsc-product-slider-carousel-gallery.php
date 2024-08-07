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
class GPSC_Product_Slider_Carousel_Gallery {

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

	function gpsc_remove_default_product_gallery_display() {

		// Remove images from under featured image.
		remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
	}

	function gpsc_add_custom_product_gallery_display() {

		// Get options.
		$wpgpsc_gallery_slider_show           = wpgpsc_get_options( 'wpgpsc_gallery_slider_show' );
		$wpgpsc_gallery_lightbox_show         = wpgpsc_get_options( 'wpgpsc_gallery_lightbox_show' );
		$wpgpsc_gallery_section_title_show    = wpgpsc_get_options( 'wpgpsc_gallery_section_title_show' );
		$wpgpsc_gallery_section_title_text    = wpgpsc_get_options( 'wpgpsc_gallery_section_title_text' );
		$wpgpsc_gallery_slider_speed          = wpgpsc_get_options( 'wpgpsc_gallery_slider_speed' );
		$wpgpsc_gallery_slider_autoplay_delay = wpgpsc_get_options( 'wpgpsc_gallery_slider_autoplay_delay' );
		$wpgpsc_gallery_slider_autoplay       = '';
		if ( wpgpsc_get_options( 'wpgpsc_gallery_slider_autoplay' ) ) {

			$wpgpsc_gallery_slider_autoplay = (object) array(
				'autoplay' => array(
					'delay' => $wpgpsc_gallery_slider_autoplay_delay,
				),
			);
		}
		$wpgpsc_gallery_slider_loop              = wpgpsc_get_options( 'wpgpsc_gallery_slider_loop' ) ? 'true' : 'false';
		$wpgpsc_gallery_slides_per_view          = wpgpsc_get_options( 'wpgpsc_gallery_slides_per_view' );
		$wpgpsc_gallery_slides_space_between     = wpgpsc_get_options( 'wpgpsc_gallery_slides_space_between' );
		$wpgpsc_gallery_slider_navigation        = wpgpsc_get_options( 'wpgpsc_gallery_slider_navigation' );
		$wpgpsc_gallery_slider_nav_icon          = wpgpsc_get_options( 'wpgpsc_gallery_slider_nav_icon' );
		$wpgpsc_gallery_slider_nav_colors        = wpgpsc_get_options( 'wpgpsc_gallery_slider_nav_colors' );
		$wpgpsc_gallery_slider_pagination        = wpgpsc_get_options( 'wpgpsc_gallery_slider_pagination' );
		$wpgpsc_gallery_slider_pagination_type   = wpgpsc_get_options( 'wpgpsc_gallery_slider_pagination_type' );
		$wpgpsc_gallery_slider_pagination_colors = wpgpsc_get_options( 'wpgpsc_gallery_slider_pagination_colors' );

		/**
		 * Nav Icon Generate.
		 */
		$wpgpsc_gallery_slider_nav_svg = '';
		switch ( $wpgpsc_gallery_slider_nav_icon ) {
			case 'ico-1':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/></svg>';
				break;
			case 'ico-2':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"/></svg>';
				break;
			case 'ico-3':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"/></svg>';
				break;
			case 'ico-4':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"/></svg>';
				break;
			case 'ico-5':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 96c0-8.8-7.2-16-16-16L64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320zM384 32c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32l320 0zM320 256c0 6.7-2.8 13-7.7 17.6l-112 104c-7 6.5-17.2 8.2-25.9 4.4s-14.4-12.5-14.4-22l0-208c0-9.5 5.7-18.2 14.4-22s18.9-2.1 25.9 4.4l112 104c4.9 4.5 7.7 10.9 7.7 17.6z"/></svg>';
				break;
			case 'ico-6':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z"/></svg>';
				break;
			case 'ico-7':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M48 32h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48zm140.485 355.515l123.029-123.029c4.686-4.686 4.686-12.284 0-16.971l-123.029-123.03c-7.56-7.56-20.485-2.206-20.485 8.485v246.059c0 10.691 12.926 16.045 20.485 8.486z"/></svg>';
				break;
			case 'ico-8':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"/></svg>';
				break;
			case 'ico-9':
				$wpgpsc_gallery_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480 96c17.7 0 32 14.3 32 32s-14.3 32-32 32l-208 0 0-64 208 0zM320 288c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32s14.3-32 32-32h64zm64-64c0 17.7-14.3 32-32 32H304c-17.7 0-32-14.3-32-32s14.3-32 32-32h48c17.7 0 32 14.3 32 32zM288 384c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32s14.3-32 32-32h64zm-88-96l.6 0c-5.4 9.4-8.6 20.3-8.6 32c0 13.2 4 25.4 10.8 35.6C177.9 364.3 160 388.1 160 416c0 11.7 3.1 22.6 8.6 32H160C71.6 448 0 376.4 0 288l0-61.7c0-42.4 16.9-83.1 46.9-113.1l11.6-11.6C82.5 77.5 115.1 64 149 64l27 0c35.3 0 64 28.7 64 64v88c0 22.1-17.9 40-40 40s-40-17.9-40-40V160c0-8.8-7.2-16-16-16s-16 7.2-16 16v56c0 39.8 32.2 72 72 72z"/></svg>';
				break;
		}

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

		// Get all gallery image ids.
		$gpsc_this_product = wc_get_product( get_the_ID() );
		$gpsc_gallery_image_ids = $gpsc_this_product->get_gallery_image_ids();

		if ( ! empty( $gpsc_gallery_image_ids ) ) {

			// Enqueueing.
			wp_enqueue_style( $this->plugin_name . 'swiper' );
			wp_enqueue_script( $this->plugin_name . 'swiper' );
			if ( $wpgpsc_gallery_lightbox_show ) {

				wp_enqueue_style( $this->plugin_name . 'venobox' );
				wp_enqueue_script( $this->plugin_name . 'venobox' );
			}
			wp_enqueue_script( $this->plugin_name . 'single-page-script' );

			echo '<style>
			.swiper {
				width: 100%;
				height: 100%;
			}
			.gpsc-gallery-carousel {
				margin-top: 7px;
			}
			.swiper-slide {
				text-align: center;
				font-size: 18px;
				background: #fff;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.swiper-slide img {
				display: block;
				width: 100%;
				height: 100%;
				object-fit: cover;
			}
			h4.gpsc-gallery-title {
				font-size: 14px;
				line-height: 1;
				padding: 10px 0;
				' . $gpsc_global_typography_ff . ';
				color: ' . $gpsc_global_typography_brand_color . ';
			}
			.gpsc-gallery-carousel {
				padding-bottom: 30px !important;
			}';
			if ( $wpgpsc_gallery_lightbox_show ) {

				echo '.vbox-child img {
					max-height: 100vh;
				}';
			}
			if ($wpgpsc_gallery_slider_navigation) {
				echo '.gpsc-gallery-slider-btn-next:hover,
				.gpsc-gallery-slider-btn-prev:hover {
					opacity: 1 !important;
				}
				.gpsc-gallery-slider-btn-next,
				.gpsc-gallery-slider-btn-prev {
					z-index: 9;
					height: 35px !important;
					width: 35px !important;
					border: 1px solid #fff;
					transition: .3s;
					background: ' . $gpsc_global_typography_brand_color . ';
					outline: none;
					box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
					border-radius: 2px;
					opacity: .8;
				}
				.gpsc-gallery-slider-btn-next svg,
				.gpsc-gallery-slider-btn-prev svg {
					height: 20px;
					width: 20px;
					fill: #fff;
					transition: .3s;
				}
				.gpsc-gallery-slider-btn-prev {
					transform: rotate(180deg);
				}';
			}
			if ($wpgpsc_gallery_slider_pagination) {
				echo '.gpsc-gallery-carousel .gpsc-gallery-pagination .swiper-pagination-bullet-active {
					background: ' . $gpsc_global_typography_brand_color . ' !important;
				}
				.gpsc-gallery-pagination {
					margin-bottom: -10px;
				}';
			}
			echo '</style>';

			if ( $wpgpsc_gallery_section_title_show ) {

				echo '<h4 class="gpsc-gallery-title">' . $wpgpsc_gallery_section_title_text . '</h4>';
			}
			?>

			<div class="swiper gpsc-gallery-carousel"
			data-speed="<?php echo esc_attr( $wpgpsc_gallery_slider_speed ); ?>"
			data-autoplay=<?php echo wp_json_encode( $wpgpsc_gallery_slider_autoplay ); ?>
			data-loop="<?php echo esc_attr( $wpgpsc_gallery_slider_loop ); ?>"
			data-spacebetween="<?php echo esc_attr( $wpgpsc_gallery_slides_space_between ); ?>"
			data-slidesperview="<?php echo esc_attr( $wpgpsc_gallery_slides_per_view ); ?>"
			data-paginationtype="<?php echo esc_attr( $wpgpsc_gallery_slider_pagination_type ); ?>">

				<div class="swiper-wrapper">
				<?php
				foreach( $gpsc_gallery_image_ids as $img_id ) {

					$img_src_full = wp_get_attachment_image_src( $img_id, 'full' )[0];
					$img_src_thum = wp_get_attachment_image_src( $img_id, 'thumbnail' )[0];
					$img_alt_txt  = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
				
					echo '<div class="swiper-slide">
						<div class="gpsc-gallery-single-slide">';
						if ( $wpgpsc_gallery_lightbox_show ) {

							echo '<a class="venobox" data-gall="gall1" href="' . esc_url( $img_src_full ) . '"><img src="' . esc_url( $img_src_thum ) . '" alt="' . esc_attr( $img_alt_txt ) . '"></a>';
						} else {

							echo '<img src="' . esc_url( $img_src_thum ) . '" alt="' . esc_attr( $img_alt_txt ) . '">';
						}
					echo '</div>
					</div>';
				}
				echo '</div>';
				if ($wpgpsc_gallery_slider_navigation) {
				echo '<div class="gpsc-gallery-slider-btn-next swiper-button-next">' . $wpgpsc_gallery_slider_nav_svg . '</div>
				<div class="gpsc-gallery-slider-btn-prev swiper-button-prev">' . $wpgpsc_gallery_slider_nav_svg . '</div>';
				}
				if ($wpgpsc_gallery_slider_pagination) {
				echo '<div class="gpsc-gallery-pagination swiper-pagination"></div>';
				}
				echo '</div>';
		}
	}
}
