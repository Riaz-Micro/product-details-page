<?php

/**
 * The shortcode functionality of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public
 */

/**
 * The shortcode functionality of the plugin.
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public
 * @author     Pluginic
 */
class GPSC_Product_Slider_Carousel_Shortcode {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

		/**
		 * A Custom function to get post meta with sanitization and validation.
		 *
		 * @param Number $post_id Current post ID.
		 * @param string $option Meta key.
		 * @param Mixed  $default Default meta value.
		 * @param string $option_two Nested meta key.
		 * @param Mixed  $default_two Nested meta value.
		 * @return mixed
		 */
		function wpgpsc_get_post_meta( $post_id, $option = '', $default = null, $option_two = '', $default_two = null ) {

			$options = get_post_meta( $post_id, '_wpgpsc_page_options', true );
			if ( ! empty( $option_two ) ) {

				return ( isset( $options[ $option ][ $option_two ] ) ) ? $options[ $option ][ $option_two ] : $default_two;
			} else {

				return ( isset( $options[ $option ] ) ) ? $options[ $option ] : $default;
			}
		}

		/**
		 * Date-time formate changer.
		 */
		function wpgpsc_date_formate_changer( $wpgpsc_date ) {

			$year  = gmdate( 'Y', strtotime( $wpgpsc_date ) );
			$month = gmdate( 'F', strtotime( $wpgpsc_date ) );
			$date  = gmdate( 'j', strtotime( $wpgpsc_date ) );

			$sorted_date = $month . ' ' . $date . ', ' . $year;

			return $sorted_date;
		}
	}

	/**
	 * A shortcode for this plugin.
	 *
	 * @since   1.0.0
	 * @param   string $atts attribute of this shortcode.
	 */
	public function gpsc_shortcode_execute( $atts ) {

		$post_id = intval( $atts['id'] );

		// Global Options.
		$wpgpsc_options_root    = get_option( '_wpgpsc_option_settings' );
		$wpgpsc_opt_custom_css  = isset( $wpgpsc_options_root['gpsc_css_code_editor'] ) ? $wpgpsc_options_root['gpsc_css_code_editor'] : '';
		$wpgpsc_opt_custom_js   = isset( $wpgpsc_options_root['gpsc_js_code_editor'] ) ? $wpgpsc_options_root['gpsc_js_code_editor'] : '';
		$gpsc_atc_btn_change    = isset( $wpgpsc_options_root['gpsc_atc_btn_change'] ) ? $wpgpsc_options_root['gpsc_atc_btn_change'] : '';
		$gpsc_atc_icon_show     = isset( $wpgpsc_options_root['gpsc_atc_icon_show'] ) ? $wpgpsc_options_root['gpsc_atc_icon_show'] : '';
		$gpsc_atc_icon_svg      = isset( $wpgpsc_options_root['gpsc_atc_icon'] ) ? $wpgpsc_options_root['gpsc_atc_icon'] : '';
		$gpsc_atc_icon_position = isset( $wpgpsc_options_root['gpsc_atc_icon_position'] ) ? $wpgpsc_options_root['gpsc_atc_icon_position'] : '';
		$gpsc_atc_icon_size     = isset( $wpgpsc_options_root['gpsc_atc_icon_size'] ) ? $wpgpsc_options_root['gpsc_atc_icon_size'] : '';
		$gpsc_atc_icon_color    = isset( $wpgpsc_options_root['gpsc_atc_icon_color'] ) ? $wpgpsc_options_root['gpsc_atc_icon_color'] : '';

		// Appearance.
		$wpgpsc_module                      = wpgpsc_get_post_meta( $post_id, 'wpgpsc_module' );
		$wpgpsc_carousel_mode_on            = wpgpsc_get_post_meta( $post_id, 'wpgpsc_carousel_mode_on' );
		$wpgpsc_content_flow                = wpgpsc_get_post_meta( $post_id, 'wpgpsc_content_flow' );
		$wpgpsc_cat_parent_only             = wpgpsc_get_post_meta( $post_id, 'wpgpsc_cat_parent_only' );
		$wpgpsc_section_title_show          = wpgpsc_get_post_meta( $post_id, 'wpgpsc_section_title_show' );
		$wpgpsc_section_title_margin_bottom = wpgpsc_get_post_meta( $post_id, 'wpgpsc_section_title_margin_bottom' );
		$wpgpsc_product_by                  = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_by' );
		$wpgpsc_product_cat_selection       = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_cat_selection' );
		$wpgpsc_specific_product_selected   = wpgpsc_get_post_meta( $post_id, 'wpgpsc_specific_product_selected' );
		$wpgpsc_product_limit               = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_limit' );
		$wpgpsc_cat_limit                    = wpgpsc_get_post_meta( $post_id, 'wpgpsc_cat_limit' );
		$wpgpsc_pagination_show             = wpgpsc_get_post_meta( $post_id, 'wpgpsc_pagination_show' );
		$wpgpsc_product_per_page            = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_per_page' );
		$wpgpsc_product_orderby             = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_orderby' );
		$wpgpsc_product_order               = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_order' );
		$wpgpsc_content_alignment           = wpgpsc_get_post_meta( $post_id, 'wpgpsc_content_alignment' );

		// Visibilities.
		$wpgpsc_show_thumb          = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_thumb' );
		$wpgpsc_thumb_size          = wpgpsc_get_post_meta( $post_id, 'wpgpsc_thumb_size' );
		$wpgpsc_show_name           = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_name' );
		$wpgpsc_name_tag            = wpgpsc_get_post_meta( $post_id, 'wpgpsc_name_tag' );
		$wpgpsc_show_price          = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_price' );
		$wpgpsc_show_short_desc     = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_short_desc' );
		$wpgpsc_word_count_number   = wpgpsc_get_post_meta( $post_id, 'wpgpsc_word_count_number' );
		$wpgpsc_show_category       = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_category' );
		$wpgpsc_show_tag            = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_tag' );
		$wpgpsc_show_stock_status   = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_stock_status' );
		$wpgpsc_show_button         = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_button' );
		$wpgpsc_show_detail_btn     = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_detail_btn' );
		$wpgpsc_show_detail_btn_txt = wpgpsc_get_post_meta( $post_id, 'wpgpsc_show_detail_btn_txt' );
		$wpgpsc_sale_tag_show       = wpgpsc_get_post_meta( $post_id, 'wpgpsc_sale_tag_show' );
		$wpgpsc_sale_tag_type       = wpgpsc_get_post_meta( $post_id, 'wpgpsc_sale_tag_type' );
		$wpgpsc_star_rating_show    = wpgpsc_get_post_meta( $post_id, 'wpgpsc_star_rating_show' );

		// More options.
		$wpgpsc_shortcode_slider_show        = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_show' );
		$wpgpsc_has_upsell_products          = wpgpsc_get_post_meta( $post_id, 'wpgpsc_has_upsell_products' );
		$wpgpsc_shortcode_before_upsells     = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_before_upsells' );
		$wpgpsc_shortcode_section_title_show = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_section_title_show' );
		$wpgpsc_shortcode_section_title_text = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_section_title_text' );
		$wpgpsc_shortcode_products_from      = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_products_from' );
		$wpgpsc_product_rows                 = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_rows' );
		$wpgpsc_product_columns              = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_columns' );
		$wpgpsc_product_space_between        = wpgpsc_get_post_meta( $post_id, 'wpgpsc_product_space_between' );
		$wpgpsc_section_width                = wpgpsc_get_post_meta( $post_id, 'wpgpsc_section_width' );
		$wpgpsc_inner_width                  = wpgpsc_get_post_meta( $post_id, 'wpgpsc_inner_width' );
		$wpgpsc_min_height                   = wpgpsc_get_post_meta( $post_id, 'wpgpsc_min_height' );
		$wpgpsc_slider_bg_image              = wpgpsc_get_post_meta( $post_id, 'wpgpsc_slider_bg_img' );
		$wpgpsc_slider_bg_img_url            = isset( $wpgpsc_slider_bg_image['url'] ) ? $wpgpsc_slider_bg_image['url'] : '';
		$wpgpsc_slider_bg_img_width          = isset( $wpgpsc_slider_bg_image['width'] ) ? $wpgpsc_slider_bg_image['width'] : '';
		$wpgpsc_slider_bg_img_height         = isset( $wpgpsc_slider_bg_image['height'] ) ? $wpgpsc_slider_bg_image['height'] : '';
		$wpgpsc_slider_bg_img_alt            = isset( $wpgpsc_slider_bg_image['alt'] ) ? $wpgpsc_slider_bg_image['alt'] : '';
		$wpgpsc_slider_bg_overlay            = wpgpsc_get_post_meta( $post_id, 'wpgpsc_slider_bg_overlay' );

		// Controls.
		$wpgpsc_shortcode_slider_speed          = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_speed' );
		$wpgpsc_shortcode_slider_autoplay_delay = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_autoplay_delay' );
		$wpgpsc_shortcode_slider_autoplay       = '';
		if ( wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_autoplay' ) ) {

			$wpgpsc_shortcode_slider_autoplay = (object) array(
				'autoplay' => array(
					'delay' => $wpgpsc_shortcode_slider_autoplay_delay,
				),
			);
		}
		$wpgpsc_shortcode_slider_loop           = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_loop' ) ? 'true' : 'false';
		$wpgpsc_shortcode_slider_navigation     = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_navigation' );
		$wpgpsc_shortcode_slider_nav_icon       = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_nav_icon' );
		$wpgpsc_shortcode_slider_pagination     = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_pagination' );
		$wpgpsc_shortcode_slider_selected_pagin = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_pagination_type' );
		// Pagination Type.
		$wpgpsc_shortcode_slider_pagination_type = '';
		if ( 'pag-5' === $wpgpsc_shortcode_slider_selected_pagin ) {

			$wpgpsc_shortcode_slider_pagination_type = 'fraction';
		} elseif ( 'pag-8' === $wpgpsc_shortcode_slider_selected_pagin ) {

			$wpgpsc_shortcode_slider_pagination_type = 'progressbar';
		} else {

			$wpgpsc_shortcode_slider_pagination_type = 'bullets';
		}

		$wpgpsc_shortcode_grab_cursor      = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_grab_cursor' );
		$wpgpsc_shortcode_slider_direction = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_direction' );
		$wpgpsc_shortcode_slider_effect    = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_effect' );
		$wpgpsc_shortcode_initial_slide    = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_initial_slide' );
		$wpgpsc_shortcode_initial_slide    = ( 0 < $wpgpsc_shortcode_initial_slide ) ? ( $wpgpsc_shortcode_initial_slide - 1 ) : 0;
		$wpgpsc_shortcode_slides_per_group = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slides_per_group' );
		$wpgpsc_shortcode_lazy_load        = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_lazy_load' );
		$wpgpsc_slider_responsive          = wpgpsc_get_post_meta( $post_id, 'wpgpsc_slider_responsive' );

		// Colors.
		$wpgpsc_shortcode_color_brand              = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_color_brand' );
		$wpgpsc_shortcode_colors_section           = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_colors_section' );
		$wpgpsc_shortcode_colors_single_product    = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_colors_single_product' );
		$wpgpsc_shortcode_colors_stars             = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_colors_stars' );
		$wpgpsc_shortcode_colors_atc_button        = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_colors_atc_button' );
		$wpgpsc_shortcode_slider_nav_colors        = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_nav_colors' );
		$wpgpsc_shortcode_slider_pagination_colors = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_slider_pagination_colors' );
		$wpgpsc_shortcode_color_overlay            = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_color_overlay' );
		$wpgpsc_shortcode_color_border             = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_color_border' );
		$wpgpsc_cd_timer_colors_content            = wpgpsc_get_post_meta( $post_id, 'wpgpsc_cd_timer_colors_content' );
		$wpgpsc_shortcode_cd_timer_colors          = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_cd_timer_colors' );
		$wpgpsc_cd_timer_colors_btn                = wpgpsc_get_post_meta( $post_id, 'wpgpsc_cd_timer_colors_btn' );
		$wpgpsc_shortcode_colors_banner_content    = wpgpsc_get_post_meta( $post_id, 'wpgpsc_shortcode_colors_banner_content' );

		// Typography.
		$gpsc_shortcode_shortcode_gfont_load = wpgpsc_get_post_meta( $post_id, 'gpsc_shortcode_shortcode_gfont_load' );
		$gpsc_shortcode_section_title_typo   = wpgpsc_get_post_meta( $post_id, 'gpsc_shortcode_section_title_typo' );
		$gpsc_shortcode_product_name_typo    = wpgpsc_get_post_meta( $post_id, 'gpsc_shortcode_product_name_typo' );
		$gpsc_shortcode_product_excerpt_typo = wpgpsc_get_post_meta( $post_id, 'gpsc_shortcode_product_excerpt_typo' );
		$gpsc_shortcode_product_price_typo   = wpgpsc_get_post_meta( $post_id, 'gpsc_shortcode_product_price_typo' );
		$gpsc_shortcode_product_btn_typo     = wpgpsc_get_post_meta( $post_id, 'gpsc_shortcode_product_btn_typo' );

		/**
		 * Nav Icon Generate.
		 */
		$wpgpsc_slider_nav_svg = '';
		switch ( $wpgpsc_shortcode_slider_nav_icon ) {
			case 'ico-1':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/></svg>';
				break;
			case 'ico-2':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"/></svg>';
				break;
			case 'ico-3':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"/></svg>';
				break;
			case 'ico-4':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"/></svg>';
				break;
			case 'ico-5':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 96c0-8.8-7.2-16-16-16L64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320zM384 32c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32l320 0zM320 256c0 6.7-2.8 13-7.7 17.6l-112 104c-7 6.5-17.2 8.2-25.9 4.4s-14.4-12.5-14.4-22l0-208c0-9.5 5.7-18.2 14.4-22s18.9-2.1 25.9 4.4l112 104c4.9 4.5 7.7 10.9 7.7 17.6z"/></svg>';
				break;
			case 'ico-6':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z"/></svg>';
				break;
			case 'ico-7':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M48 32h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48zm140.485 355.515l123.029-123.029c4.686-4.686 4.686-12.284 0-16.971l-123.029-123.03c-7.56-7.56-20.485-2.206-20.485 8.485v246.059c0 10.691 12.926 16.045 20.485 8.486z"/></svg>';
				break;
			case 'ico-8':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"/></svg>';
				break;
			case 'ico-9':
				$wpgpsc_slider_nav_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480 96c17.7 0 32 14.3 32 32s-14.3 32-32 32l-208 0 0-64 208 0zM320 288c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32s14.3-32 32-32h64zm64-64c0 17.7-14.3 32-32 32H304c-17.7 0-32-14.3-32-32s14.3-32 32-32h48c17.7 0 32 14.3 32 32zM288 384c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32s14.3-32 32-32h64zm-88-96l.6 0c-5.4 9.4-8.6 20.3-8.6 32c0 13.2 4 25.4 10.8 35.6C177.9 364.3 160 388.1 160 416c0 11.7 3.1 22.6 8.6 32H160C71.6 448 0 376.4 0 288l0-61.7c0-42.4 16.9-83.1 46.9-113.1l11.6-11.6C82.5 77.5 115.1 64 149 64l27 0c35.3 0 64 28.7 64 64v88c0 22.1-17.9 40-40 40s-40-17.9-40-40V160c0-8.8-7.2-16-16-16s-16 7.2-16 16v56c0 39.8 32.2 72 72 72z"/></svg>';
				break;
		}

		/**
		 * Generate Google font.
		 *
		 * @package shortcode
		 */
		$gpsc_typo_ff_url         = '';
		if ( $gpsc_shortcode_shortcode_gfont_load ) {

			$gpsc_typography_all_ff   = array();
			$gpsc_typography_all_ff[] = $gpsc_shortcode_section_title_typo['font-family'];
			$gpsc_typography_all_ff[] = $gpsc_shortcode_product_name_typo['font-family'];
			$gpsc_typography_all_ff[] = $gpsc_shortcode_product_excerpt_typo['font-family'];
			$gpsc_typography_all_ff[] = $gpsc_shortcode_product_price_typo['font-family'];
			$gpsc_typography_all_ff[] = $gpsc_shortcode_product_btn_typo['font-family'];

			// Get the URL.
			if ( array_filter( $gpsc_typography_all_ff ) ) {

				$gpsc_typo_ff_imploded = implode( '&family=', array_filter( $gpsc_typography_all_ff ) );
				$gpsc_typo_ff_url      = '@import url("https://fonts.googleapis.com/css2?family=' . str_replace( ' ', '+', $gpsc_typo_ff_imploded ) . '&display=swap");';
			}
		}

		ob_start();

		// Load Google Font.
		if ( ! empty( $gpsc_typo_ff_url ) ) {

			echo '<style>' . $gpsc_typo_ff_url . '</style>';
		}

		// Pagination type CSS.
		if ( $wpgpsc_shortcode_slider_pagination ) {

			echo '<style>';

			if ( 'bullets' === $wpgpsc_shortcode_slider_pagination_type ) {

				// Common for bullets.
				echo '#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-slider--main-wrapper {
					padding-bottom: 50px !important;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc--product-slider-carousel .swiper-pagination-bullets .swiper-pagination-bullet:before {
						border: none !important;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc--product-slider-carousel .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active:after {
						border-top: none !important;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-pagination .swiper-pagination-bullet-active {
						background-color: ' . $wpgpsc_shortcode_color_brand . ' !important;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc--product-slider-carousel .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						vertical-align: middle;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-pagination .swiper-pagination-bullet {
						width: 14px;
						height: 14px;
						background: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
						opacity: 1 !important;
					}';

				if ( 'pag-1' === $wpgpsc_shortcode_slider_selected_pagin ) {

					echo '#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-pagination {
							bottom: 15px !important;
						}
						#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc--product-slider-carousel .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
						#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
							margin: 0 3px !important;
						}';
				}
				if ( 'pag-2' === $wpgpsc_shortcode_slider_selected_pagin ) {

					echo '#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						transform: scale(1) !important;
					}';
				}
				if ( 'pag-3' === $wpgpsc_shortcode_slider_selected_pagin ) {

					echo '.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
						border: 0 !important;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-pagination .swiper-pagination-bullet {
						border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						transform: scale(1) !important;
						margin: 0px 5px;
					}';
				}
				if ( 'pag-4' === $wpgpsc_shortcode_slider_selected_pagin ) {

					echo '.gpsc-pagination-wrapper {
						position: absolute;
						bottom: 0;
						left: 50%;
						box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
						margin: 8px 0;
						width: 120px;
						height: 28px;
						border-radius: 25px;
						background: #fff;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-pagination .swiper-pagination-bullet {
						border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-container {
						padding-bottom: 60px;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-pagination {
						bottom: 0 !important;
						top: 0;
						margin: 2px 0 !important;
						padding: 1px !important;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						transform: scale(1) !important;
					}';
				}
				if ( 'pag-6' === $wpgpsc_shortcode_slider_selected_pagin ) {

					echo '#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						border-radius: 0;
						transform: scale(1) !important;
					}';
				}
				if ( 'pag-7' === $wpgpsc_shortcode_slider_selected_pagin ) {

					echo '#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						height: 24px !important;
						width: 24px !important;
						border-radius: 0;
						color: #fff !important;
						display: inline-flex;
						align-items: center;
						justify-content: center;
					}
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
					#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						transform: scale(1) !important;
					}';
				}
			}
			if ( 'fraction' === $wpgpsc_shortcode_slider_pagination_type ) {
				echo '#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-pagination {
					white-space: nowrap;
					left: 0 !important;
				}';
			}
			if ( 'progressbar' === $wpgpsc_shortcode_slider_pagination_type ) {
				echo '#gpsc--products-' . esc_attr( $post_id ) . ' .gpsc-pagination {
					top: auto;
					bottom: 0 !important;
					border-bottom-left-radius: 5px !important;
					overflow: hidden;
					border-bottom-right-radius: 5px;
				}
				#gpsc--products-' . esc_attr( $post_id ) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
					background: ' . $wpgpsc_shortcode_color_brand . ';
				}';
			}

			echo '</style>';
		}

		if ( ! empty( $wpgpsc_opt_custom_css ) ) {

			echo '<style>' . $wpgpsc_opt_custom_css . '</style>';
		}

		if ( $gpsc_atc_btn_change && $gpsc_atc_icon_show ) {

			$gpsc_atc_icon_svg_code = '';
			switch ( $gpsc_atc_icon_svg ) {

				case 'cart-1':
					$gpsc_atc_icon_svg_code = '<svg fill="' . $gpsc_atc_icon_color . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>';
					break;

				case 'cart-2':
					$gpsc_atc_icon_svg_code = '<svg fill="' . $gpsc_atc_icon_color . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg>';
					break;

				case 'cart-3':
					$gpsc_atc_icon_svg_code = '<svg fill="' . $gpsc_atc_icon_color . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M0 32C0 14.3 14.3 0 32 0H48c44.2 0 80 35.8 80 80V368c0 8.8 7.2 16 16 16H608c17.7 0 32 14.3 32 32s-14.3 32-32 32H541.3c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-5.6 1-11 2.7-16H253.3c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-5.6 1-11 2.7-16H144c-44.2 0-80-35.8-80-80V80c0-8.8-7.2-16-16-16H32C14.3 64 0 49.7 0 32zM432 96V56c0-4.4-3.6-8-8-8H344c-4.4 0-8 3.6-8 8V96h96zM288 96V56c0-30.9 25.1-56 56-56h80c30.9 0 56 25.1 56 56V96 320H288V96zM512 320V96h16c26.5 0 48 21.5 48 48V272c0 26.5-21.5 48-48 48H512zM240 96h16V320H240c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/></svg>';
					break;

				case 'cart-4':
					$gpsc_atc_icon_svg_code = '<svg fill="' . $gpsc_atc_icon_color . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64H48c8.8 0 16 7.2 16 16V368c0 44.2 35.8 80 80 80h18.7c-1.8 5-2.7 10.4-2.7 16c0 26.5 21.5 48 48 48s48-21.5 48-48c0-5.6-1-11-2.7-16H450.7c-1.8 5-2.7 10.4-2.7 16c0 26.5 21.5 48 48 48s48-21.5 48-48c0-5.6-1-11-2.7-16H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H144c-8.8 0-16-7.2-16-16V80C128 35.8 92.2 0 48 0H32zM192 80V272c0 26.5 21.5 48 48 48H560c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H464V176c0 5.9-3.2 11.3-8.5 14.1s-11.5 2.5-16.4-.8L400 163.2l-39.1 26.1c-4.9 3.3-11.2 3.6-16.4 .8s-8.5-8.2-8.5-14.1V32H240c-26.5 0-48 21.5-48 48z"/></svg>';
					break;

				case 'cart-5':
					$gpsc_atc_icon_svg_code = '<svg fill="' . $gpsc_atc_icon_color . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>';
					break;

				case 'cart-6':
					$gpsc_atc_icon_svg_code = '<svg fill="' . $gpsc_atc_icon_color . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M423.3 440.7c0 25.3-20.3 45.6-45.6 45.6s-45.8-20.3-45.8-45.6 20.6-45.8 45.8-45.8c25.4 0 45.6 20.5 45.6 45.8zm-253.9-45.8c-25.3 0-45.6 20.6-45.6 45.8s20.3 45.6 45.6 45.6 45.8-20.3 45.8-45.6-20.5-45.8-45.8-45.8zm291.7-270C158.9 124.9 81.9 112.1 0 25.7c34.4 51.7 53.3 148.9 373.1 144.2 333.3-5 130 86.1 70.8 188.9 186.7-166.7 319.4-233.9 17.2-233.9z"/></svg>';
					break;
			}

			echo '<style>
			.woocommerce .button.add_to_cart_button {
				display: inline-flex !important;
				justify-content: center;
				align-items: center;
				gap: 10px;
			}
			.woocommerce .button.add_to_cart_button:before {
				content: "";
				display: inline-block;
				height: ' . $gpsc_atc_icon_size . 'px;
				width: ' . $gpsc_atc_icon_size . 'px;
				background-image: url("data:image/svg+xml;base64,' . base64_encode( $gpsc_atc_icon_svg_code ) . '");
				background-size: ' . $gpsc_atc_icon_size . 'px;
				background-repeat: no-repeat;
				background-position: center;
			}
			</style>';
		}

		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

			switch ( $wpgpsc_module ) {

				case 'grid-carousel':
					if ( $wpgpsc_carousel_mode_on ) {

						require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-carousel.php';
					} else {

						require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-grid.php';
					}
					break;

				case 'slider':
					require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-slider.php';
					break;

				case 'table':
					require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-table.php';
					break;

				case 'highlighted':
					require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-highlighted.php';
					break;

				case 'with-banner':
					require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-with-banner.php';
					break;

				case 'grouped':
					require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-grouped.php';
					break;

				case 'category':
					require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-category.php';
					break;

				case 'reviews':
					require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-product-reviews.php';
					break;

				case 'cd-timer':
					require GPSC_PLUG_DIR_PATH_FILE . 'public/modules/gpsc-cd-timer.php';
					break;
			}
		} else {

			echo '<div class="gpsc-woo-notice" style="background: rgb(255 0 0 / 7%);padding: 20px;color: #f44336;border: 1px solid #f44336;font-size: 17px;width: fit-content;border-radius: 4px;">WooCommerce not found on your WordPress!<br>Please install and activated the <a style="color: red;" href="https://wordpress.org/plugins/woocommerce/" target="_blank">WooCommerce Plugin.</a></div>';
		}

		if ( ! empty( $wpgpsc_opt_custom_js ) ) {

			echo "<script>
(function( $ ) {
	'use strict';
	$( document ).ready(function() {
	{$wpgpsc_opt_custom_js}
	});
})( jQuery );
			</script>";
		}

		return ob_get_clean();
	}
}
