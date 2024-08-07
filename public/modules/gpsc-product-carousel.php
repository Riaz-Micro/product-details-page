<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public/partials
 */

// Enqueues.
wp_enqueue_style($this->plugin_name . 'swiper');
wp_enqueue_script($this->plugin_name . 'swiper');
wp_enqueue_style($this->plugin_name);
wp_enqueue_script($this->plugin_name);

// Appearance.
$wpgpsc_word_count_number = empty($wpgpsc_word_count_number) ? '11' : $wpgpsc_word_count_number;

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
$gpsc_product_name_fs = !empty($gpsc_shortcode_product_name_typo['font-size']) ? $gpsc_shortcode_product_name_typo['font-size'] : '22';
$gpsc_product_name_lh = !empty($gpsc_shortcode_product_name_typo['line-height']) ? $gpsc_shortcode_product_name_typo['line-height'] : '28';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_tt = !empty($gpsc_shortcode_product_name_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_name_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
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
$gpsc_product_btn_tt = !empty($gpsc_shortcode_product_btn_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_btn_typo['text-transform'] . ';' : '';
$gpsc_product_btn_ls = !empty($gpsc_shortcode_product_btn_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_btn_typo['letter-spacing'] . 'px;' : '';

// Query arguments.
$gpsc_query_args = array(
	'include' => $wpgpsc_specific_product_selected,
	'limit' => $wpgpsc_product_limit,
	'category' => ('category' === $wpgpsc_product_by) ? $wpgpsc_product_cat_selection : '',
	'orderby' => ('top_sales' !== $wpgpsc_product_by) ? $wpgpsc_product_orderby : 'meta_value_num',
	'order' => $wpgpsc_product_order,
	'status' => 'publish',
	'visibility' => 'visible',
);

// Adding featrued argument.
if ('featured' === $wpgpsc_product_by) {

	$gpsc_query_args['featured'] = true;
}

// Adding top sells argument.
if ('top_sales' === $wpgpsc_product_by) {

	$gpsc_query_args['meta_key'] = 'total_sales';
	$gpsc_query_args['order'] = 'DESC';
}

// Get products.
$gpsc_products = wc_get_products($gpsc_query_args);

// Styles.
echo '<style>
.gpsc--product-slider-carousel  p,
.gpsc--product-slider-carousel  h2,
.gpsc--product-slider-carousel  h3,
.gpsc--product-slider-carousel  h4,
.gpsc--product-slider-carousel  h5,
.gpsc--product-slider-carousel  h6 {
	margin: 0 !important;
	padding: 0;
}
html.colibri-wp-theme .gpsc--product-slider-carousel div:not(.gpsc-product-rating-wrapper):before,
html.colibri-wp-theme .gpsc--product-slider-carousel div:not(.gpsc-star-rating):not(.gpsc-slider-btn-next):not(.gpsc-slider-btn-prev):after {
    display: none !important;
}
.gpsc--product-slider-carousel p.product.woocommerce.add_to_cart_inline {
    border: none !important;
    padding: 0 !important;
    margin: 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .woocommerce a.added_to_cart {
	margin: 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' a:hover, #gpsc--products-' . esc_attr($post_id) . ' a:active, #gpsc--products-' . esc_attr($post_id) . ' a:focus {
    outline: 0 !important;
    outline-offset: 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' a,
#gpsc--products-' . esc_attr($post_id) . ' ins, #gpsc--products-' . esc_attr($post_id) . ' mark {
	text-decoration: none !important;
    background: none;
}
.gpsc---carousel-slide p.product {
	padding: 0 !important;
	border: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' {
    overflow: hidden;
	max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
	margin: 10px auto;
	width: 100%;
	background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . '.gpsc--product-slider-carousel h2.gpsc--section-title {
	margin-bottom: ' . $wpgpsc_section_title_margin_bottom['width'] . 'px !important;
	position: absolute;
    top: 0;
    left: 1px;
	color: ' . $wpgpsc_shortcode_colors_section['title'] . ' !important;
	' . $gpsc_section_title_ff . ';
	font-size: ' . $gpsc_section_title_fs . 'px;
	line-height: ' . $gpsc_section_title_lh . 'px;
	font-weight: ' . $gpsc_section_title_fw . ';
	text-align: ' . $gpsc_section_title_ta . ';
	' . $gpsc_section_title_tt . ';
	' . $gpsc_section_title_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc---carousel-container {
    padding: 0 2px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc---carousel-wrapper {
	margin: 10px 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc---carousel-slide-wrapper {
	background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
	border-radius: 5px;
	width: 100%;
	height: 100%;
	border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc---carousel-slide {
	padding: 15px 15px 20px;
	display: flex;
    flex-direction: column;
    align-items: center;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-img {
	position: relative;
	margin-bottom: 15px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-img img {
	background-color: #F1F1F1;
	border-radius: 5px;
	max-width: 100%;
	display: block;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name {
	margin-bottom: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name .gpsc-product-name-tag {
	text-decoration: none !important;
	' . $wpgpsc_shortcode_colors_single_product['title'] . ';
	display: block;
	word-spacing: 1px;
	' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px;
	font-weight: ' . $gpsc_product_name_fw . ';
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' bdi.gpsc-single-product-price {
	color: ' . $wpgpsc_shortcode_color_brand . ' !important;
	' . $gpsc_product_price_ff . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
	line-height: ' . $gpsc_product_price_lh . 'px;
	font-weight: ' . $gpsc_product_price_fw . ';
	text-align: ' . $gpsc_product_price_ta . ';
	' . $gpsc_product_price_tt . ';
	' . $gpsc_product_price_ls . ';
}

#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-price .amount {
	color: ' . $wpgpsc_shortcode_color_brand . ' !important;
	font-weight: ' . $gpsc_product_price_fw . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-price del .amount,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-price del {
  	color: #918d8d !important;
	font-weight: normal !important;
	opacity: .9;
	font-size: 90% !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-btn .product.woocommerce.add_to_cart_inline > a.button {
	display: inline-block;
	margin: 0;
	background: ' . $wpgpsc_shortcode_color_brand . ';
	color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
	padding: 12px 20px;
	border-radius: 5px;
	box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
	border: none;
	transition: 0.5s;
	margin-top: 10px;
	min-height: auto;
	outline: none;
	' . $gpsc_product_btn_ff . ';
	font-size: ' . $gpsc_product_btn_fs . 'px !important;
	line-height: ' . $gpsc_product_btn_lh . 'px;
	font-weight: ' . $gpsc_product_btn_fw . ';
	text-align: ' . $gpsc_product_btn_ta . ';
	' . $gpsc_product_btn_tt . ';
	' . $gpsc_product_btn_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-btn .product.woocommerce.add_to_cart_inline > a.button:hover {
	cursor: pointer;
	box-shadow: 0 0;
	background: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ';
	transform: translateY(-1px);
	color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-desc {
	' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';
	margin-bottom: 10px;
	' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ';
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-stock {
	margin-bottom: 10px;
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category {
	font-size: 18px;
	line-height: 18px;
	font-weight: normal;
	color: ' . $wpgpsc_shortcode_color_brand . ';
	margin-bottom: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category a {
	color: ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags {
	font-size: 16px;
	font-weight: 400;
	line-height: 18px;
	color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ';
	margin-bottom: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags a {
	color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale {
    position: absolute;
    display: inline-block;
    top: 10px;
    left: 10px;
    font-size: 13px;
    white-space: nowrap;
    font-weight: bold;
    padding: 6px 8px;
	line-height: 13px;
    border-radius: 7px;
    margin: 0 auto;
    color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    background: ' . $wpgpsc_shortcode_color_brand . ';
}
.gpsc-product-content {
	display: flex;
	flex-direction: column;
	align-items: center;
}';
?>
<?php
if ('horizontal' === $wpgpsc_content_flow) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc---carousel-slide {
		flex-direction: row !important;
		gap: 10px;
		align-items: flex-start !important;
    	text-align: left !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-img {
		margin-bottom: 0 !important;
		flex-basis: 40%;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-desc,
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name .gpsc-product-name-tag {
		text-align: left !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-content {
		text-align: left;
		align-items: flex-start;
		flex-basis: 60%;
	}';
}
if ('cards' === $wpgpsc_shortcode_slider_effect) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .swiper-container {
		max-width: 350px;
	}
	.gpsc---carousel-slider-container {
		padding: 1px;
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

if ($wpgpsc_shortcode_slider_navigation) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next::after, 
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev::after {
		display: none !important;
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
		height: 35px;
		width: 35px;
        border: 1px solid ' . $wpgpsc_shortcode_slider_nav_colors['icon'] . ';
        transition: .3s;
        background: ' . $wpgpsc_shortcode_color_brand . ';
		outline: none;
		margin: 0;
		right: 0 !important;
		box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    	border-radius: 2px;
    }
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn {
		position: absolute;
		top: 0;
		right: 1px;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
		left: -78px !important;
    	right: auto !important;
		transform: rotate(180deg);
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next svg, 
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev svg {
		height: 20px;
		width: 20px;
		fill: ' . $wpgpsc_shortcode_slider_nav_colors['icon'] . ';
		transition: .3s;
	}';
}
if ($wpgpsc_shortcode_slider_navigation || !empty(get_the_title($post_id)) && $wpgpsc_section_title_show) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc---carousel-container {
		padding-top: 40px !important;
	}';
}

if (!empty($wpgpsc_shortcode_slider_nav_colors['background'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next, 
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
        background: ' . $wpgpsc_shortcode_slider_nav_colors['background'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_slider_pagination_colors['active'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet-active {
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
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-btn .product.woocommerce.add_to_cart_inline > a.button {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_colors_single_product['price'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-price .amount {
		color: ' . $wpgpsc_shortcode_colors_single_product['price'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_color_border)) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc---carousel-slide-wrapper {
		border: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_colors_single_product['category'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category {
		color: ' . $wpgpsc_shortcode_colors_single_product['category'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category a {
		color: ' . $wpgpsc_shortcode_colors_single_product['category'] . ' !important;
	}';
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
		background-image: url("data:image/svg+xml,%3Csvg viewBox=\'0 0 304 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'m181.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 7-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 0.9 2.7 2.3z\' fill=\'' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m121 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0 2.4 0.9 2.8 2.2z\' fill=\'' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m303 26.4-13.2 11.6 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 1 2.8 2.2s0.1 2.6-0.8 3.3z\' fill=\'' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m242.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.5 0.1 2.5 0.9 2.9 2.3z\' fill=\'' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m60.1 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3s-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0.1 2.5 1 2.8 2.3z\' fill=\'' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3C/svg%3E");
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
		margin-bottom: 10px;
	}';
}
?>
</style>
<!-- Swiper -->
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc--product-slider-carousel"
	data-speed="<?php echo esc_attr($wpgpsc_shortcode_slider_speed); ?>"
	data-autoplay=<?php echo wp_json_encode($wpgpsc_shortcode_slider_autoplay); ?>
	data-loop="<?php echo esc_attr($wpgpsc_shortcode_slider_loop); ?>"
	data-row="<?php echo esc_attr(empty($wpgpsc_product_rows) ? 1 : $wpgpsc_product_rows); ?>"
	data-module="<?php echo esc_attr($wpgpsc_module); ?>"
	data-initialslide="<?php echo esc_attr($wpgpsc_shortcode_initial_slide); ?>"
	data-slidepergroup="<?php echo esc_attr($wpgpsc_shortcode_slides_per_group); ?>"
	data-grabcursor="<?php echo $wpgpsc_shortcode_grab_cursor ? 'true' : 'false'; ?>"
	data-lazyload="<?php echo $wpgpsc_shortcode_lazy_load ? 'true' : 'false'; ?>"
	data-spacebetween="<?php echo esc_attr($wpgpsc_product_space_between); ?>"
	data-responsivetop="<?php echo esc_attr($wpgpsc_slider_responsive['top']); ?>"
	data-responsiveright="<?php echo esc_attr($wpgpsc_slider_responsive['right']); ?>"
	data-responsivebottom="<?php echo esc_attr($wpgpsc_slider_responsive['bottom']); ?>"
	data-bullettype="<?php echo esc_attr('pag-7' == $wpgpsc_shortcode_slider_selected_pagin); ?>"
	data-paginationtype="<?php echo esc_attr($wpgpsc_shortcode_slider_pagination_type); ?>">
	<div class="gpsc---carousel-container swiper swiper-container">
		<?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
			<h2 class="gpsc--section-title-<?php echo esc_attr($post_id); ?> gpsc--section-title"><?php echo esc_html(get_the_title($post_id)); ?></h2>
		<?php endif; ?>
		<?php if ($wpgpsc_shortcode_slider_navigation): ?>
			<!-- Add Arrows -->
			<div class="gpsc-slider-btn">
				<div class="gpsc-slider-btn-prev swiper-button-prev">
					<?php echo $wpgpsc_slider_nav_svg; ?>
				</div>
				<div class="gpsc-slider-btn-next swiper-button-next">
					<?php echo $wpgpsc_slider_nav_svg; ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="swiper-wrapper gpsc---carousel-wrapper">
			<?php
			foreach ($gpsc_products as $product) {

				$regular_price = (float) $product->get_regular_price();
				$sale_price    = (float) $product->get_sale_price();

				$gpsc_product_img_src = get_post_thumbnail_id($product->get_id()) ? wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0] : '';

				echo '<div class="swiper-slide gpsc---carousel-slider-container">
					<div class="gpsc---carousel-slide-wrapper">
						<div class="gpsc---carousel-slide">';
				if ($wpgpsc_show_thumb && $gpsc_product_img_src) {
					echo '<div class="gpsc-product-img"><a href="' . esc_url(get_permalink($product->get_id())) . '">';
					if ($wpgpsc_shortcode_lazy_load) {
						echo '<img src="' . esc_url($gpsc_product_img_src) . '" alt="' . esc_html($product->get_title()) . '" loading="lazy">
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>';
					} else {
						echo '<img src="' . esc_url($gpsc_product_img_src) . '" alt="' . esc_html($product->get_title()) . '">';
					}
					echo '</a>';
					if ($product->is_on_sale() && !empty($sale_price) && $wpgpsc_sale_tag_show) {

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
				echo '<div class="gpsc-product-content">';
				if ($wpgpsc_show_name) {
					echo '<div class="gpsc-product-name">
								<a href="' . esc_url(get_permalink($product->get_id())) . '"><' . $wpgpsc_name_tag . ' class="gpsc-product-name-tag">' . esc_html($product->get_title()) . '</' . $wpgpsc_name_tag . '></a></div>';
				}
				if ($wpgpsc_show_short_desc) {
					echo '<div class="gpsc-product-desc">';
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

					echo '<bdi class="gpsc-single-product-price">' . wp_kses_post($product->get_price_html()) . '</bdi>';
				}
				if ($wpgpsc_show_button) {

					echo '<div class="gpsc-btn">';
					echo do_shortcode('[add_to_cart id="' . $product->get_id() . '" show_price="FALSE"]');
					echo '</div>';
				}
				echo '</div>
				</div>
					</div>
				</div>';
			}
			?>
		</div>
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
	</div>
</div>