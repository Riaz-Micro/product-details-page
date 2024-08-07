<?php

/**
 * Module : Product - Grouped By.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Grouped
 * @subpackage GPSC_Product_Grouped/public/partials
 */

// Appearance.
$wpgpsc_word_count_number = empty($wpgpsc_word_count_number) ? '11' : $wpgpsc_word_count_number;

/**
 * Cat Arg Init.
 */
$gpsc_get_ex_cat = get_term_by('slug', ' uncategorized', 'product_cat');
$gpsc_cat_args = array(
	'taxonomy' => 'product_cat',
	'slug' => $wpgpsc_product_cat_selection,
	'orderby' => $wpgpsc_product_orderby,
	'order' => $wpgpsc_product_order,
	'hide_empty' => 1,
	'exclude' => array($gpsc_get_ex_cat->term_id), // Skip the category "Uncategorized".
);

// If carousel mode on.
if ($wpgpsc_carousel_mode_on) {

	wp_enqueue_style($this->plugin_name . 'swiper');
	wp_enqueue_script($this->plugin_name . 'swiper');
	wp_enqueue_script($this->plugin_name);
}

// Color Options.
$wpgpsc_shortcode_colors_section['background'] = empty($wpgpsc_shortcode_colors_section['background']) ? '#fff' : $wpgpsc_shortcode_colors_section['background'];
$wpgpsc_shortcode_colors_section['title'] = empty($wpgpsc_shortcode_colors_section['title']) ? '#333333' : $wpgpsc_shortcode_colors_section['title'];
$wpgpsc_shortcode_colors_single_product['background'] = empty($wpgpsc_shortcode_colors_single_product['background']) ? '#fff' : $wpgpsc_shortcode_colors_single_product['background'];
$wpgpsc_shortcode_colors_single_product['title'] = empty($wpgpsc_shortcode_colors_single_product['title']) ? '' : 'color:' . $wpgpsc_shortcode_colors_single_product['title'] . ';' ;
$wpgpsc_shortcode_colors_single_product['excerpt'] = empty($wpgpsc_shortcode_colors_single_product['excerpt']) ? '' : 'color:' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';' ;
$wpgpsc_shortcode_colors_single_product['tag'] = empty($wpgpsc_shortcode_colors_single_product['tag']) ? '#384955' : $wpgpsc_shortcode_colors_single_product['tag'];
$wpgpsc_shortcode_colors_single_product['stock'] = empty($wpgpsc_shortcode_colors_single_product['stock']) ? '#333333' : $wpgpsc_shortcode_colors_single_product['stock'];
$wpgpsc_shortcode_colors_atc_button['text'] = empty($wpgpsc_shortcode_colors_atc_button['text']) ? '#fff' : $wpgpsc_shortcode_colors_atc_button['text'];
$wpgpsc_color_stars_filled_encoded = urlencode($wpgpsc_shortcode_colors_stars['filled']);
$wpgpsc_color_stars_unfilled_encoded = urlencode($wpgpsc_shortcode_colors_stars['unfilled']);

// Typography Options.
$gpsc_section_title_ff = !empty($gpsc_shortcode_section_title_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_section_title_typo['font-family'] . ';' : '';
$gpsc_section_title_fs = !empty($gpsc_shortcode_section_title_typo['font-size']) ? $gpsc_shortcode_section_title_typo['font-size'] : '30';
$gpsc_section_title_lh = !empty($gpsc_shortcode_section_title_typo['line-height']) ? $gpsc_shortcode_section_title_typo['line-height'] : '32';
$gpsc_section_title_fw = !empty($gpsc_shortcode_section_title_typo['font-weight']) ? $gpsc_shortcode_section_title_typo['font-weight'] : 'bold';
$gpsc_section_title_ta = !empty($gpsc_shortcode_section_title_typo['text-align']) ? $gpsc_shortcode_section_title_typo['text-align'] : 'left';
$gpsc_section_title_tt = !empty($gpsc_shortcode_section_title_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_section_title_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_section_title_ls = !empty($gpsc_shortcode_section_title_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_section_title_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_name_ff = !empty($gpsc_shortcode_product_name_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_name_typo['font-family'] . ';' : '';
$gpsc_product_name_fs = !empty($gpsc_shortcode_product_name_typo['font-size']) ? $gpsc_shortcode_product_name_typo['font-size'] : '20';
$gpsc_product_name_lh = !empty($gpsc_shortcode_product_name_typo['line-height']) ? $gpsc_shortcode_product_name_typo['line-height'] : '28';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_tt = !empty($gpsc_shortcode_product_name_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_name_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : 'letter-spacing: -1px';
$gpsc_product_excerpt_ff = !empty($gpsc_shortcode_product_excerpt_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_excerpt_typo['font-family'] . ';' : '';
$gpsc_product_excerpt_fs = !empty($gpsc_shortcode_product_excerpt_typo['font-size']) ? $gpsc_shortcode_product_excerpt_typo['font-size'] : '16';
$gpsc_product_excerpt_lh = !empty($gpsc_shortcode_product_excerpt_typo['line-height']) ? $gpsc_shortcode_product_excerpt_typo['line-height'] : '20';
$gpsc_product_excerpt_fw = !empty($gpsc_shortcode_product_excerpt_typo['font-weight']) ? $gpsc_shortcode_product_excerpt_typo['font-weight'] : 'normal';
$gpsc_product_excerpt_ta = !empty($gpsc_shortcode_product_excerpt_typo['text-align']) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'center';
$gpsc_product_excerpt_tt = !empty($gpsc_shortcode_product_excerpt_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_excerpt_typo['text-transform'] . ';' : '';
$gpsc_product_excerpt_ls = !empty($gpsc_shortcode_product_excerpt_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_excerpt_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_price_ff = !empty($gpsc_shortcode_product_price_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_price_typo['font-family'] . ';' : '';
$gpsc_product_price_fs = !empty($gpsc_shortcode_product_price_typo['font-size']) ? $gpsc_shortcode_product_price_typo['font-size'] : '20';
$gpsc_product_price_lh = !empty($gpsc_shortcode_product_price_typo['line-height']) ? $gpsc_shortcode_product_price_typo['line-height'] : '22';
$gpsc_product_price_fw = !empty($gpsc_shortcode_product_price_typo['font-weight']) ? $gpsc_shortcode_product_price_typo['font-weight'] : 'bold';
$gpsc_product_price_ta = !empty($gpsc_shortcode_product_price_typo['text-align']) ? $gpsc_shortcode_product_price_typo['text-align'] : 'center';
$gpsc_product_price_tt = !empty($gpsc_shortcode_product_price_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_price_typo['text-transform'] . ';' : '';
$gpsc_product_price_ls = !empty($gpsc_shortcode_product_price_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_price_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_btn_ff = !empty($gpsc_shortcode_product_btn_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_btn_typo['font-family'] . ';' : '';
$gpsc_product_btn_fs = !empty($gpsc_shortcode_product_btn_typo['font-size']) ? $gpsc_shortcode_product_btn_typo['font-size'] : '16';
$gpsc_product_btn_lh = !empty($gpsc_shortcode_product_btn_typo['line-height']) ? $gpsc_shortcode_product_btn_typo['line-height'] : '20';
$gpsc_product_btn_fw = !empty($gpsc_shortcode_product_btn_typo['font-weight']) ? $gpsc_shortcode_product_btn_typo['font-weight'] : '600';
$gpsc_product_btn_ta = !empty($gpsc_shortcode_product_btn_typo['text-align']) ? $gpsc_shortcode_product_btn_typo['text-align'] : 'center';
$gpsc_product_btn_tt = !empty($gpsc_shortcode_product_btn_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_btn_typo['text-transform'] . ';' : 'text-transform: capitalize;';
$gpsc_product_btn_ls = !empty($gpsc_shortcode_product_btn_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_btn_typo['letter-spacing'] . 'px;' : '';

$gpsc_all_categories = get_categories($gpsc_cat_args);

// Enqueuing.
wp_enqueue_script('gpsc-tabs-view', GPSC_PLUG_DIR_URL_FILE . 'public/js/gpsc-tabs-view.js', array('jquery-ui-tabs'), GPSC_PLUG_VERSION, false);

if ($wpgpsc_carousel_mode_on) {
	$gpsc_swiper_slider_class_slide = '<div class="swiper-slide">';
} else {
	$gpsc_swiper_slider_class_slide = "";
}

echo '<style>
.gpsc-main p,
.gpsc-main h2,
.gpsc-main h3,
.gpsc-main h4,
.gpsc-main h5 {
  	margin: 0 !important;
	padding: 0;
}
html.colibri-wp-theme .gpsc-main div:not(.gpsc-product-rating-wrapper):before,
html.colibri-wp-theme .gpsc-main div:not(.gpsc-star-rating):not(.gpsc-slider-btn-next):not(.gpsc-slider-btn-prev):after {
    display: none !important;
}
.gpsc-main a,
.gpsc-main ins, 
.gpsc-main mark {
	text-decoration: none !important;
    background: none;
	outline: none !important;
}
.gpsc-main .woocommerce a.added_to_cart {
  	margin: 0 !important;
}
.gpsc-main p.product.woocommerce.add_to_cart_inline {
	border: none !important;
	padding: 0 !important;
	margin: 0 !important;
}
.gpsc-main a:hover, .gpsc-main a:active,
.gpsc-main a:focus {
    outline: 0 !important;
    outline-offset: 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' {
	width: 100%;
	max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
	margin: 20px auto;
	background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' h2.gpsc--section-title {
	margin-bottom: ' . $wpgpsc_section_title_margin_bottom['width'] . 'px !important;
	color: ' . $wpgpsc_shortcode_colors_section['title'] . ' !important;
	' . $gpsc_section_title_ff . ';
	font-size: ' . $gpsc_section_title_fs . 'px;
	line-height: ' . $gpsc_section_title_lh . 'px;
	font-weight: ' . $gpsc_section_title_fw . ';
	text-align: ' . $gpsc_section_title_ta . ';
	' . $gpsc_section_title_tt . ';
	' . $gpsc_section_title_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-group-tabs {
	display: flex;
	flex-direction: column;
	justify-content: center;
	gap: 15px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-btn a {
	text-decoration: none;
	font-weight: bold;
	display: flex;
	flex-direction: row;
	justify-content: center;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-btn a h3 {
	color: #fff;
	text-align: center;
	font-size: 18px;
	line-height: 18px;
	font-weight: 500;
	padding: 10px 15px;
	margin: 0 !important;
	' . $gpsc_product_name_ff . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-tab-ul {
	margin: 0 !important;
	padding: 0 !important;
	display: flex;
	align-items: center;
	flex-direction: row;
	gap: 15px;
	justify-content: left;
	list-style: none;
	flex-wrap: wrap;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-tab-ul li {
	background-color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
	transition: 0.5s;
	border-radius: 5px;
	outline: 0;
	list-style-type: none;
	margin: 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-tab-ul li:hover,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-group-tabs li.ui-tabs-active {
  	background-color: ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-content-wrapper {
	background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
	border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
	display: flex;
	flex-direction: column;
	gap: 10px;
	align-items: center;
	justify-content: flex-start;
	padding: 15px 15px 20px;
	border-radius: 5px;
	text-align: center;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-content {
	display: flex;
	flex-direction: column;
	gap: 10px;
	align-items: center;
	justify-content: flex-start;
	text-align: center;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image {
	position: relative;
	margin-bottom: 5px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image img {
	display: block;
	background-color: #F1F1F1;
	border-radius: 5px;
	max-width: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale {
    position: absolute;
    display: inline-block;
    top: 10px;
    left: 10px;
    font-size: 13px;
    white-space: nowrap;
    font-weight: 500;
    padding: 6px 8px;
	line-height: 13px;
    border-radius: 7px;
    margin: 0 auto;
    color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    background: ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-details {
  	text-align: center;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-short-desc {
	' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';
	margin-bottom: 10px;
	max-width: 320px;
	' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ';
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name a {
	display: block;
	text-decoration: none;
	margin-bottom: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name a .gpsc-product-name-tag {
	' . $wpgpsc_shortcode_colors_single_product['title'] . ';
	' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px;
	font-weight: ' . $gpsc_product_name_fw . ';
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category {
	color: ' . $wpgpsc_shortcode_color_brand . ';
    text-transform: uppercase;
	line-height: 18px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category a {
	font-size: 14px;
	font-weight: bold;
	color: ' . $wpgpsc_shortcode_color_brand . ';
	line-height: 18px;
	text-decoration: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags {
	color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ';
  	text-align: center;
	line-height: 18px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags a {
	font-size: 16px;
	font-weight: 400;
	line-height: 18px;
	color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ';
  	text-decoration: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-stock-content {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: center;
	gap: 5px;
	text-transform: capitalize;
	font-size: 18px;
	font-weight: 400;
	line-height: 18px;
	color: ' . $wpgpsc_shortcode_colors_single_product['stock'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-stock svg {
	height: 18px;
	width: 18px;
}
#gpsc--products-' . esc_attr($post_id) . ' .product-price {
  	color: ' . $wpgpsc_shortcode_color_brand . ';
	' . $gpsc_product_price_ff . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
	line-height: ' . $gpsc_product_price_lh . 'px;
	font-weight: ' . $gpsc_product_price_fw . ';
	text-align: ' . $gpsc_product_price_ta . ';
	' . $gpsc_product_price_tt . ';
	' . $gpsc_product_price_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .product-price .amount {
  	color: ' . $wpgpsc_shortcode_color_brand . ' !important;
	font-weight: ' . $gpsc_product_price_fw . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .product-price del,
#gpsc--products-' . esc_attr($post_id) . ' .product-price del .amount {
	opacity: .9;
	font-size: 90% !important;
  	color: #918d8d !important;
	font-weight: normal !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-content-btn .product.woocommerce.add_to_cart_inline > a.button {
	display: inline-block;
	margin: 0;
	background-color: ' . $wpgpsc_shortcode_color_brand . ';
	color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
	padding: 12px 20px;
	box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px !important;
	outline-offset: 1px;
	border: none;
	transition: 0.5s;
	border-radius: 5px;
	min-height: auto;
	' . $gpsc_product_btn_ff . ';
	font-size: ' . $gpsc_product_btn_fs . 'px !important;
	line-height: ' . $gpsc_product_btn_lh . 'px;
	font-weight: ' . $gpsc_product_btn_fw . ';
	text-align: ' . $gpsc_product_btn_ta . ';
	' . $gpsc_product_btn_tt . ';
	' . $gpsc_product_btn_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-content-btn .product.woocommerce.add_to_cart_inline > a.button:hover {
	background: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ';
  	cursor: pointer;
	box-shadow: 0 0;
	transform: translateY(-1px);
	color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
}
@media (max-width: 767px) {
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-group-tabs {
	flex-wrap: wrap;
  }
}';
?>
<?php
if (!$wpgpsc_carousel_mode_on) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-group-content-wrapper {
		display: grid;
		grid-template-columns: repeat( ' . $wpgpsc_product_columns . ', minmax(0, 1fr) );
		grid-auto-rows: auto;
		height: fit-content;
		grid-gap: ' . $wpgpsc_product_space_between . 'px;
	}
	@media (max-width: 640px) {
		#gpsc--products-' . esc_attr($post_id) . ' .gpsc-group-content-wrapper {
		  display: block;
		}
		#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-content-wrapper:not(:last-child) {
		  margin-bottom: 10px;
		}
	  }
	  @media (max-width: 767px) {
		#gpsc--products-' . esc_attr($post_id) . ' .gpsc-group-content-wrapper {
		  grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
		}
	  }
	  @media (max-width: 991px) {
		#gpsc--products-' . esc_attr($post_id) . ' .gpsc-group-content-wrapper {
		  grid-template-columns: repeat(3, minmax(0, 1fr));
		}
	  }';
}
if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_navigation) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next::after, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev::after {
        display: none;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next svg, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev svg {
		height: 18px;
		width: 18px;
        fill: ' . $wpgpsc_shortcode_slider_nav_colors['icon'] . ';
        transition: .3s;
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next:hover svg,
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev:hover svg {
        fill: ' . $wpgpsc_shortcode_slider_nav_colors['icon-hover'] . ' !important;
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next:hover,
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev:hover {
        border: 1px solid ' . $wpgpsc_shortcode_slider_nav_colors['icon-hover'] . ' !important;
        background: ' . $wpgpsc_shortcode_slider_nav_colors['background-hover'] . ' !important;
    }
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next, 
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
		height: 32px;
		width: 32px;
		top: 0 !important;
        margin-top: 0 !important;
        border: 1px solid ' . $wpgpsc_shortcode_slider_nav_colors['icon'] . ';
        transition: .3s;
        background: ' . $wpgpsc_shortcode_color_brand . ';
        outline: none;
        border-radius: 2px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
		left: 5px !important;
		right: auto !important;
		transform: rotate(180deg);
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next {
		left: auto !important;
		right: 5px !important;
	}';
}
if ($wpgpsc_carousel_mode_on) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container {
        height: auto !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product {
        height: 100%;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container-wrapper-main {
        height: 100%;
		width: 100%;
		padding: 5px;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-tab-ul  {
		padding: 0 5px !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn {
		right: 5px;
		top: 50%;
		position: absolute;
		left: 5px;
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination {
        position: absolute;
        z-index: 10;
        left: 50% !important;
        transform: translateX(-50%);
    }
    #gpsc--products-' . esc_attr($post_id) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: ' . $wpgpsc_shortcode_color_brand . ';
    }
	.swiper-slide {
		height: auto !important;
	}
	.swiper-wrapper {
		height: max-content !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-content-wrapper {
		height: 100%;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-content-wrapper {
		padding: 0 !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image {
		padding: 15px 15px 0;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-content {
		padding: 15px 15px 20px;
	}';
}
if ($wpgpsc_shortcode_slider_pagination) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .swiper-container {
		padding-bottom: 50px !important;
	}';
	if ('pag-6' === $wpgpsc_shortcode_slider_selected_pagin) {
		echo '#gpsc--products-' . esc_attr($post_id) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
		#gpsc--products-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
			height: 16px !important;
			width: 16px !important;
		}';
	}
	if ('pag-7' === $wpgpsc_shortcode_slider_selected_pagin) {
		echo '#gpsc--products-' . esc_attr($post_id) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
		#gpsc--products-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
			height: 22px !important;
			width: 22px !important;
		}';
	}
	if ('pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
		echo '.gpsc-pagination-wrapper {
			width: 130px !important;
		}';
	}
	if ('progressbar' === $wpgpsc_shortcode_slider_pagination_type) {
		echo '#gpsc--products-' . esc_attr($post_id) . ' .swiper-container {
			padding-bottom: 0 !important;
		}';
	}
}
if ($wpgpsc_star_rating_show) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-star-rating {
      position: relative;
		line-height: 1.618;
		font-size: 1em;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-star-rating span {
		overflow: hidden;
		float: left;
		top: 0;
		left: 0;
		position: absolute;
		padding-top: 1.5em;
		color: #2c2d33;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-rating-wrapper:before,
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-star-rating:after {
		position: absolute;
		top: 0;
		left: 0;
		content: "";
		height: 20px;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: left center;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-rating-wrapper:before {
		width: 100%;
		z-index: 1;
		background-image: url("data:image/svg+xml,%3Csvg viewBox=\'0 0 304 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'m181.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 7-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 0.9 2.7 2.3z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m121 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0 2.4 0.9 2.8 2.2z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m303 26.4-13.2 11.6 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 1 2.8 2.2s0.1 2.6-0.8 3.3z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m242.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.5 0.1 2.5 0.9 2.9 2.3z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m60.1 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3s-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0.1 2.5 1 2.8 2.3z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3C/svg%3E");
		filter: drop-shadow(0px 1px 0px gray);
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-star-rating:after {
		width: 100%;
		z-index: 2;
		background-image: url("data:image/svg+xml,%3Csvg viewBox=\'0 0 304 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'m181.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 7-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 0.9 2.7 2.3z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m121 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0 2.4 0.9 2.8 2.2z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m303 26.4-13.2 11.6 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 1 2.8 2.2s0.1 2.6-0.8 3.3z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m242.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.5 0.1 2.5 0.9 2.9 2.3z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m60.1 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3s-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0.1 2.5 1 2.8 2.3z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3C/svg%3E");
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-rating-wrapper {
		width: 102px;
		height: 20px;
		overflow: hidden;
		position: relative;
  }';
}
if (!empty($wpgpsc_shortcode_slider_nav_colors['background'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
        background: ' . $wpgpsc_shortcode_slider_nav_colors['background'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_slider_pagination_colors['active'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-tab-ul li:hover, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-group-tabs li.ui-tabs-active {
		background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet-active {
		background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
    }';
	if ('pag-3' === $wpgpsc_shortcode_slider_selected_pagin || 'pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
		echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet {
			border: 1px solid ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
		}';
	}
}
if (!empty($wpgpsc_shortcode_colors_atc_button['background'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-content-btn .product.woocommerce.add_to_cart_inline > a.button {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_colors_single_product['price'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .product-price .amount {
		color: ' . $wpgpsc_shortcode_colors_single_product['price'] . ' !important;
	}';
}
if (!(empty($wpgpsc_shortcode_color_border))) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-content-wrapper {
		border: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_colors_single_product['category'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category {
		color: ' . $wpgpsc_shortcode_colors_single_product['category'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category a {
		color: ' . $wpgpsc_shortcode_colors_single_product['category'] . ' !important;;
	}';
}
?>
</style>
<?php if ($wpgpsc_carousel_mode_on): ?>
	<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-main gpsc--product-slider-carousel"
		data-speed="<?php echo esc_attr($wpgpsc_shortcode_slider_speed); ?>" data-autoplay=<?php echo wp_json_encode($wpgpsc_shortcode_slider_autoplay); ?>
		data-loop="<?php echo esc_attr($wpgpsc_shortcode_slider_loop); ?>"
		data-initialslide="<?php echo esc_attr($wpgpsc_shortcode_initial_slide); ?>"
		data-lazyload="<?php echo $wpgpsc_shortcode_lazy_load ? 'true' : 'false'; ?>"
		data-slidepergroup="<?php echo esc_attr($wpgpsc_shortcode_slides_per_group); ?>"
		data-grabcursor="<?php echo $wpgpsc_shortcode_grab_cursor ? 'true' : 'false'; ?>"
		data-row="<?php echo esc_attr(empty($wpgpsc_product_rows) ? 1 : $wpgpsc_product_rows); ?>"
		data-spacebetween="<?php echo esc_attr($wpgpsc_product_space_between); ?>"
		data-responsivetop="<?php echo esc_attr($wpgpsc_slider_responsive['top']); ?>"
		data-responsiveright="<?php echo esc_attr($wpgpsc_slider_responsive['right']); ?>"
		data-responsivebottom="<?php echo esc_attr($wpgpsc_slider_responsive['bottom']); ?>"
		data-bullettype="<?php echo esc_attr('pag-7' == $wpgpsc_shortcode_slider_selected_pagin); ?>"
		data-paginationtype="<?php echo esc_attr($wpgpsc_shortcode_slider_pagination_type); ?>"
		data-module="<?php echo esc_attr($wpgpsc_module); ?>">
	<?php else: ?>
		<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-main">
		<?php endif; ?>
		<?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
			<h2 class="gpsc--section-title gpsc-title-<?php echo esc_attr($post_id); ?>"><?php echo esc_html(get_the_title($post_id)); ?></h2>
		<?php endif; ?>
		<div id="gpsc-tab" class="gpsc-group-tabs">
			<ul class="gpsc-tab-ul">
				<?php
				foreach ($gpsc_all_categories as $gpsc_cat) {

					if ($wpgpsc_cat_parent_only) {

						if (0 === $gpsc_cat->category_parent) {

							$gpsc_cat_id = $gpsc_cat->term_id;
							$gpsc_cat_name = $gpsc_cat->name;
							$gpsc_cat_slug = $gpsc_cat->slug;
							$gpsc_cat_count = $gpsc_cat->count;

							echo '<li class="gpsc-btn"><a href="#cat-' . esc_attr($gpsc_cat_slug) . '"><h3>' . esc_html($gpsc_cat_name) . '</h3></a></li>';
						}
					} else {

						$gpsc_cat_id = $gpsc_cat->term_id;
						$gpsc_cat_name = $gpsc_cat->name;
						$gpsc_cat_slug = $gpsc_cat->slug;
						$gpsc_cat_count = $gpsc_cat->count;

						echo '<li class="gpsc-btn"><a href="#cat-' . esc_attr($gpsc_cat_slug) . '"><h3>' . esc_html($gpsc_cat_name) . '</h3></a></li>';
					}
				}
				?>
			</ul>
			<?php
			foreach ($gpsc_all_categories as $gpsc_cat) {

				if ($wpgpsc_cat_parent_only) {

					if (0 === $gpsc_cat->category_parent) {

						$gpsc_cat_id = $gpsc_cat->term_id;
						$gpsc_cat_name = $gpsc_cat->name;
						$gpsc_cat_slug = $gpsc_cat->slug;
						$gpsc_cat_count = $gpsc_cat->count;
						$gpsc_cat_products = wc_get_products(array('category' => array($gpsc_cat_slug)));

						if ($wpgpsc_carousel_mode_on) {
							echo '<div id="cat-' . esc_attr($gpsc_cat_slug) . '" class="swiper swiper-container gpsc-product-container-wrapper-main">
									<div class="swiper-wrapper gpsc-product-container-wrapper gpsc-group-content-wrapper">';
						} else {
							echo '<div id="cat-' . esc_attr($gpsc_cat_slug) . '">
									<div class="gpsc-product-container-wrapper gpsc-group-content-wrapper">';
						}
						foreach ($gpsc_cat_products as $product) {

							$regular_price = (float) $product->get_regular_price();
							$sale_price    = (float) $product->get_sale_price();

							echo $gpsc_swiper_slider_class_slide;
							echo '<div class="gpsc-product-content-wrapper">';
							if ($wpgpsc_show_thumb && get_post_thumbnail_id($product->get_id())) {

								echo '<div class="gpsc-product-image">
								<a href=" ' . esc_url(get_permalink($product->get_id())) . '"><img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($product->get_title()) . '"></a>';
								if ($product->is_on_sale() && !empty($product->get_sale_price()) && $wpgpsc_sale_tag_show) {

									if ('percent-tag' === $wpgpsc_sale_tag_type) {

										echo '<span class="gpsc-product-sale">SALE (- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%)</span>';
									} elseif ('percent' === $wpgpsc_sale_tag_type) {

										echo '<span class="gpsc-product-sale">- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%</span>';
									} else {

										echo '<span class="gpsc-product-sale">SALE</span>';
									}
								}
								echo '</div>';
							}
							echo '<div class="gpsc-product-content">
						<div class="gpsc-product-details">';
							if ($wpgpsc_show_name) {

								echo '<div class="gpsc-product-name"><a href="' . esc_url(get_permalink($product->get_id())) . '"><' . $wpgpsc_name_tag . ' class="gpsc-product-name-tag">' . $product->get_name() . '</' . $wpgpsc_name_tag . '></a></div>';
							}
							if ($wpgpsc_show_short_desc) {

								echo '<div class="gpsc-product-short-desc">';
								echo wp_trim_words(wp_kses_post(wpautop($product->get_short_description())), $wpgpsc_word_count_number, ' […]');
								echo '</div>';
							}
							if ($wpgpsc_show_category) {
								echo '<div class="gpsc-product-category">';
								$gpsc_categories = array();
								foreach ($product->get_category_ids() as $category_id) {
									$category_term = get_term_by('id', $category_id, 'product_cat');
									$category_name = $category_term->name;
									$category_link = get_term_link($category_id);
									$gpsc_categories[] = '<a href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a>';
								}
								echo wp_kses_post(implode(', ', $gpsc_categories));
								echo '</div>';
							}
							echo '</div>';
							if ($wpgpsc_show_tag) {

								echo '<div class="gpsc-product-tags">';
								$gpsc_tags = array();
								foreach ($product->get_tag_ids() as $tag_id) {
									$tag_term = get_term_by('id', $tag_id, 'product_tag');
									$tag_name = $tag_term->name;
									$tag_link = get_term_link($tag_id);
									$gpsc_tags[] = '<a href="' . esc_url($tag_link) . '">' . esc_html($tag_name) . '</a>';
								}
								echo wp_kses_post(implode(', ', $gpsc_tags));
								echo '</div>';
							}
							if ($product->get_reviews_allowed() && $wpgpsc_star_rating_show) {

								$gpsc_product_rating_percentage = (int) $product->get_average_rating() * 2 . '0%';
								echo '<div class="gpsc-product-rating-wrapper"><div class="gpsc-star-rating" role="img" aria-label="Rated ' . $product->get_average_rating() . ' out of 5" style="width:' . $gpsc_product_rating_percentage . '"><span>Rated <strong class="rating">4.00</strong> out of 5</span></div></div>';
							}
							if ($wpgpsc_show_stock_status) {

								echo '<div class="gpsc-product-stock">';
								switch ($product->get_stock_status()) {
									case 'instock':
										echo '<div class="gpsc-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 16px; width: 16px;"><path fill="#238527" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg><span>In stock</span></div>';
										break;
									case 'outofstock':
										echo '<div class="gpsc-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#ff0000" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg><span>Out of stock</span></div>';
										break;
									case 'onbackorder':
										echo '<div class="gpsc-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 14px;width: 14px;"><path fill="#0170b9" d="M109.7 160H160c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V64C0 46.3 14.3 32 32 32s32 14.3 32 32v51.2L81.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L109.7 160z"/></svg><span>On backorder</span></div>';
										break;
								}
								echo '</div>';
							}
							if ($wpgpsc_show_price) {

								echo '<div class="product-price">
				' . wp_kses_post($product->get_price_html()) . '
				</div>';
							}
							if ($wpgpsc_show_button) {

								echo '<div class="gpsc-content-btn">';
								echo do_shortcode('[add_to_cart id="' . $product->get_id() . '" show_price="FALSE"]');
								echo '</div>';
							}
							echo '</div>
						</div>';
							if ($wpgpsc_carousel_mode_on) {
								echo '</div>';
							}
						}
						echo '</div>';
						?>
						<?php if ($wpgpsc_carousel_mode_on): ?>
							<?php if ($wpgpsc_shortcode_slider_navigation): ?>
								<div class="gpsc-slider-btn">
									<div class="gpsc-slider-btn-next swiper-button-next">
										<?php echo $wpgpsc_slider_nav_svg; ?>
									</div>
									<div class="gpsc-slider-btn-prev swiper-button-prev">
										<?php echo $wpgpsc_slider_nav_svg; ?>
									</div>
								</div>
							<?php endif; ?>
							<?php if ($wpgpsc_shortcode_slider_pagination): ?>
								<!-- Add Pagination -->
								<?php
								if ('pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
									echo '<div class="gpsc-pagination-wrapper">
										<div class="gpsc-pagination swiper-pagination"></div>
									</div>';
								} else {
									echo '<div class="gpsc-pagination swiper-pagination"></div>';
								}
								?>
							<?php endif; ?>
						<?php endif; ?>
						<?php
						echo '</div>';
					}
				} else {

					$gpsc_cat_id = $gpsc_cat->term_id;
					$gpsc_cat_name = $gpsc_cat->name;
					$gpsc_cat_slug = $gpsc_cat->slug;
					$gpsc_cat_count = $gpsc_cat->count;
					$gpsc_cat_products = wc_get_products(array('category' => array($gpsc_cat_slug)));

					if ($wpgpsc_carousel_mode_on) {
						echo '<div id="cat-' . esc_attr($gpsc_cat_slug) . '" class="swiper swiper-container gpsc-product-container-wrapper-main">
								<div class="swiper-wrapper gpsc-product-container-wrapper gpsc-group-content-wrapper">';
					} else {
						echo '<div id="cat-' . esc_attr($gpsc_cat_slug) . '">
								<div class="gpsc-product-container-wrapper gpsc-group-content-wrapper">';
					}
					foreach ($gpsc_cat_products as $product) {

						$regular_price = (float) $product->get_regular_price();
						$sale_price    = (float) $product->get_sale_price();

						echo $gpsc_swiper_slider_class_slide;
						echo '<div class="gpsc-product-content-wrapper">';
						if ($wpgpsc_show_thumb && get_post_thumbnail_id($product->get_id())) {

							echo '<div class="gpsc-product-image"><a href=" ' . esc_url(get_permalink($product->get_id())) . '"><img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($product->get_title()) . '"></a>';
							if ($product->is_on_sale() && !empty($product->get_sale_price()) && $wpgpsc_sale_tag_show) {

								if ('percent-tag' === $wpgpsc_sale_tag_type) {

									echo '<span class="gpsc-product-sale">SALE (- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%)</span>';
								} elseif ('percent' === $wpgpsc_sale_tag_type) {

									echo '<span class="gpsc-product-sale">- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%</span>';
								} else {

									echo '<span class="gpsc-product-sale">SALE</span>';
								}
							}
							echo '</div>';
						}
						echo '<div class="gpsc-product-content">
					<div class="gpsc-product-desc">';
						if ($wpgpsc_show_name) {
							echo '<div class="gpsc-product-name"><a href="' . esc_url(get_permalink($product->get_id())) . '"><' . $wpgpsc_name_tag . ' class="gpsc-product-name-tag">' . $product->get_name() . '</' . $wpgpsc_name_tag . '></a></div>';
						}
						if ($wpgpsc_show_short_desc) {

							echo '<div class="gpsc-product-short-desc">';
							echo wp_trim_words(wp_kses_post(wpautop($product->get_short_description())), $wpgpsc_word_count_number, ' […]');
							echo '</div>';
						}
						if ($wpgpsc_show_category) {
							echo '<div class="gpsc-product-category">';
							$gpsc_categories = array();
							foreach ($product->get_category_ids() as $category_id) {
								$category_term = get_term_by('id', $category_id, 'product_cat');
								$category_name = $category_term->name;
								$category_link = get_term_link($category_id);
								$gpsc_categories[] = '<a href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a>';
							}
							echo wp_kses_post(implode(', ', $gpsc_categories));
							echo '</div>';
						}
						echo '</div>';
						if ($wpgpsc_show_tag) {
							echo '<div class="gpsc-product-tags">';
							$gpsc_tags = array();
							foreach ($product->get_tag_ids() as $tag_id) {
								$tag_term = get_term_by('id', $tag_id, 'product_tag');
								$tag_name = $tag_term->name;
								$tag_link = get_term_link($tag_id);
								$gpsc_tags[] = '<a href="' . esc_url($tag_link) . '">' . esc_html($tag_name) . '</a>';
							}
							echo wp_kses_post(implode(', ', $gpsc_tags));
							echo '</div>';
						}
						if ($product->get_reviews_allowed() && $wpgpsc_star_rating_show) {

							$gpsc_product_rating_percentage = (int) $product->get_average_rating() * 2 . '0%';
							echo '<div class="gpsc-product-rating-wrapper"><div class="gpsc-star-rating" role="img" aria-label="Rated ' . $product->get_average_rating() . ' out of 5" style="width:' . $gpsc_product_rating_percentage . '"><span>Rated <strong class="rating">4.00</strong> out of 5</span></div></div>';
						}
						if ($wpgpsc_show_stock_status) {
							echo '<div class="gpsc-product-stock">';
							switch ($product->get_stock_status()) {
								case 'instock':
									echo '<div class="gpsc-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 16px; width: 16px;"><path fill="#238527" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg><span>In stock</span></div>';
									break;
								case 'outofstock':
									echo '<div class="gpsc-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#ff0000" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg><span>Out of stock</span></div>';
									break;
								case 'onbackorder':
									echo '<div class="gpsc-product-stock-content"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 14px;width: 14px;"><path fill="#0170b9" d="M109.7 160H160c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V64C0 46.3 14.3 32 32 32s32 14.3 32 32v51.2L81.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L109.7 160z"/></svg><span>On backorder</span></div>';
									break;
							}
							echo '</div>';
						}
						if ($wpgpsc_show_price) {

							echo '<div class="product-price">
				' . wp_kses_post($product->get_price_html()) . '
				</div>';
						}
						if ($wpgpsc_show_button) {

							echo '<div class="gpsc-content-btn">';
							echo do_shortcode('[add_to_cart id="' . $product->get_id() . '" show_price="FALSE"]');
							echo '</div>';
						}
						echo '</div>
					</div>';
						if ($wpgpsc_carousel_mode_on) {
							echo '</div>';
						}
					}
					echo '</div>';
					?>
					<?php if ($wpgpsc_carousel_mode_on): ?>
						<?php if ($wpgpsc_shortcode_slider_navigation): ?>
							<div class="gpsc-slider-btn">
								<div class="gpsc-slider-btn-next swiper-button-next">
									<?php echo $wpgpsc_slider_nav_svg; ?>
								</div>
								<div class="gpsc-slider-btn-prev swiper-button-prev">
									<?php echo $wpgpsc_slider_nav_svg; ?>
								</div>
							</div>
						<?php endif; ?>
						<?php if ($wpgpsc_shortcode_slider_pagination): ?>
							<!-- Add Pagination -->
							<?php
							if ('pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
								echo '<div class="gpsc-pagination-wrapper">
									<div class="gpsc-pagination swiper-pagination"></div>
								</div>';
							} else {
								echo '<div class="gpsc-pagination swiper-pagination"></div>';
							}
							?>
						<?php endif; ?>
					<?php endif; ?>
					<?php
					echo '</div>';
				}
			}
			?>
		</div>
	</div>