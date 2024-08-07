<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Grid
 * @subpackage GPSC_Product_Grid/public/partials
 */

// Appearance.
$wpgpsc_word_count_number        = empty( $wpgpsc_word_count_number ) ? '11' : $wpgpsc_word_count_number;

/**
 * Doc →
 * https://docs.woocommerce.com/wc-apidocs/class-WC_Product.html
 * https://github.com/woocommerce/woocommerce/wiki/wc_get_products-and-WC_Product_Query
 */

// Protect against arbitrary paged values.
if (is_front_page()) {

	$gpsc_args_paged = (get_query_var('page')) ? get_query_var('page') : 1;
} else {

	$gpsc_args_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
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
$wpgpsc_shortcode_slider_pagination_colors['active'] = empty($wpgpsc_shortcode_slider_pagination_colors['active']) ? '#fff' : $wpgpsc_shortcode_slider_pagination_colors['active'];
$wpgpsc_color_stars_filled_encoded = urlencode($wpgpsc_shortcode_colors_stars['filled']);
$wpgpsc_color_stars_unfilled_encoded = urlencode($wpgpsc_shortcode_colors_stars['unfilled']);

// Typography Options.
$gpsc_section_title_ff   = ! empty( $gpsc_shortcode_section_title_typo['font-family'] ) ? 'font-family:' . $gpsc_shortcode_section_title_typo['font-family'] . ';' : '';
$gpsc_section_title_fs   = ! empty( $gpsc_shortcode_section_title_typo['font-size'] ) ? $gpsc_shortcode_section_title_typo['font-size'] : '30';
$gpsc_section_title_lh   = ! empty( $gpsc_shortcode_section_title_typo['line-height'] ) ? $gpsc_shortcode_section_title_typo['line-height'] : '32';
$gpsc_section_title_fw   = ! empty( $gpsc_shortcode_section_title_typo['font-weight'] ) ? $gpsc_shortcode_section_title_typo['font-weight'] : 'bold';
$gpsc_section_title_ta   = ! empty( $gpsc_shortcode_section_title_typo['text-align'] ) ? $gpsc_shortcode_section_title_typo['text-align'] : 'left';
$gpsc_section_title_tt   = ! empty( $gpsc_shortcode_section_title_typo['text-transform'] ) ? 'text-transform:' . $gpsc_shortcode_section_title_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_section_title_ls   = ! empty( $gpsc_shortcode_section_title_typo['letter-spacing'] ) ? 'letter-spacing:' . $gpsc_shortcode_section_title_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_name_ff    = ! empty( $gpsc_shortcode_product_name_typo['font-family'] ) ? 'font-family:' . $gpsc_shortcode_product_name_typo['font-family'] . ';' : '';
$gpsc_product_name_fs    = ! empty( $gpsc_shortcode_product_name_typo['font-size'] ) ? $gpsc_shortcode_product_name_typo['font-size'] : '22';
$gpsc_product_name_lh    = ! empty( $gpsc_shortcode_product_name_typo['line-height'] ) ? $gpsc_shortcode_product_name_typo['line-height'] : '28';
$gpsc_product_name_fw    = ! empty( $gpsc_shortcode_product_name_typo['font-weight'] ) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta    = ! empty( $gpsc_shortcode_product_name_typo['text-align'] ) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_tt    = ! empty( $gpsc_shortcode_product_name_typo['text-transform'] ) ? 'text-transform:' . $gpsc_shortcode_product_name_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_name_ls    = ! empty( $gpsc_shortcode_product_name_typo['letter-spacing'] ) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_excerpt_ff = ! empty( $gpsc_shortcode_product_excerpt_typo['font-family'] ) ?  'font-family:' . $gpsc_shortcode_product_excerpt_typo['font-family'] . ';' : '';
$gpsc_product_excerpt_fs = ! empty( $gpsc_shortcode_product_excerpt_typo['font-size'] ) ? $gpsc_shortcode_product_excerpt_typo['font-size'] : '16';
$gpsc_product_excerpt_lh = ! empty( $gpsc_shortcode_product_excerpt_typo['line-height'] ) ? $gpsc_shortcode_product_excerpt_typo['line-height'] : '20';
$gpsc_product_excerpt_fw = ! empty( $gpsc_shortcode_product_excerpt_typo['font-weight'] ) ? $gpsc_shortcode_product_excerpt_typo['font-weight'] : 'normal';
$gpsc_product_excerpt_ta = ! empty( $gpsc_shortcode_product_excerpt_typo['text-align'] ) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'center';
$gpsc_product_excerpt_tt = ! empty( $gpsc_shortcode_product_excerpt_typo['text-transform'] ) ? 'text-transform:' . $gpsc_shortcode_product_excerpt_typo['text-transform'] . ';' : '';
$gpsc_product_excerpt_ls = ! empty( $gpsc_shortcode_product_excerpt_typo['letter-spacing'] ) ? 'letter-spacing:' . $gpsc_shortcode_product_excerpt_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_price_ff   = ! empty( $gpsc_shortcode_product_price_typo['font-family'] ) ?  'font-family:' . $gpsc_shortcode_product_price_typo['font-family'] . ';' : '';
$gpsc_product_price_fs   = ! empty( $gpsc_shortcode_product_price_typo['font-size'] ) ? $gpsc_shortcode_product_price_typo['font-size'] : '20';
$gpsc_product_price_lh   = ! empty( $gpsc_shortcode_product_price_typo['line-height'] ) ? $gpsc_shortcode_product_price_typo['line-height'] : '22';
$gpsc_product_price_fw   = ! empty( $gpsc_shortcode_product_price_typo['font-weight'] ) ? $gpsc_shortcode_product_price_typo['font-weight'] : 'bold';
$gpsc_product_price_ta   = ! empty( $gpsc_shortcode_product_price_typo['text-align'] ) ? $gpsc_shortcode_product_price_typo['text-align'] : 'center';
$gpsc_product_price_tt   = ! empty( $gpsc_shortcode_product_price_typo['text-transform'] ) ? 'text-transform:' . $gpsc_shortcode_product_price_typo['text-transform'] . ';' : '';
$gpsc_product_price_ls   = ! empty( $gpsc_shortcode_product_price_typo['letter-spacing'] ) ? 'letter-spacing:' . $gpsc_shortcode_product_price_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_btn_ff     = ! empty( $gpsc_shortcode_product_btn_typo['font-family'] ) ? 'font-family:' . $gpsc_shortcode_product_btn_typo['font-family'] . ';' : '';
$gpsc_product_btn_fs     = ! empty( $gpsc_shortcode_product_btn_typo['font-size'] ) ? $gpsc_shortcode_product_btn_typo['font-size'] : '16';
$gpsc_product_btn_lh     = ! empty( $gpsc_shortcode_product_btn_typo['line-height'] ) ? $gpsc_shortcode_product_btn_typo['line-height'] : '20';
$gpsc_product_btn_fw     = ! empty( $gpsc_shortcode_product_btn_typo['font-weight'] ) ? $gpsc_shortcode_product_btn_typo['font-weight'] : '600';
$gpsc_product_btn_ta     = ! empty( $gpsc_shortcode_product_btn_typo['text-align'] ) ? $gpsc_shortcode_product_btn_typo['text-align'] : 'center';
$gpsc_product_btn_tt     = ! empty( $gpsc_shortcode_product_btn_typo['text-transform'] ) ? 'text-transform:' . $gpsc_shortcode_product_btn_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_btn_ls     = ! empty( $gpsc_shortcode_product_btn_typo['letter-spacing'] ) ? 'letter-spacing:' . $gpsc_shortcode_product_btn_typo['letter-spacing'] . 'px;' : '';

// Query argument values.
$gpsc_args = array(
	'include' => ('hand-pick' === $wpgpsc_product_by) ? $wpgpsc_specific_product_selected : '',
	'limit' => $wpgpsc_pagination_show ? $wpgpsc_product_per_page : $wpgpsc_product_limit,
	'page' => $gpsc_args_paged,
	'category' => ('category' === $wpgpsc_product_by) ? $wpgpsc_product_cat_selection : '',
	'orderby'    => ( 'top_sales' !== $wpgpsc_product_by ) ? $wpgpsc_product_orderby : 'meta_value_num',
	'order' => $wpgpsc_product_order,
	'status' => 'publish',
	'visibility' => 'visible',
	'paginate' => true,
);

// Adding featrued argument.
if ('featured' === $wpgpsc_product_by) {

	$gpsc_args['featured'] = true;
}

// Adding top sells argument.
if ( 'top_sales' === $wpgpsc_product_by ) {

	$gpsc_args['meta_key'] = 'total_sales';
	$gpsc_args['order']    = 'DESC';
}

$gpsc_products = wc_get_products($gpsc_args);

echo '<style>
.gpsc--grid-container p,
.gpsc--grid-container h2,
.gpsc--grid-container h3,
.gpsc--grid-container h4,
.gpsc--grid-container h5,
.gpsc--grid-container h6 {
	margin: 0 !important;
	padding: 0;
}
.gpsc--grid-container a,
.gpsc--grid-container ins, 
.gpsc--grid-container mark {
	text-decoration: none !important;
  	background: none;
}
.gpsc--grid-container p.product.woocommerce.add_to_cart_inline {
    border: transparent !important;
    padding: 0 !important;
    margin: 0 !important;
}
.gpsc--grid-container a:hover, .gpsc--grid-container a:active,
.gpsc--grid-container a:focus {
	outline: 0 !important;
	outline-offset: 0 !important;
}
.gpsc--grid-container .woocommerce a.added_to_cart {
    margin: 0 !important;
}
.gpsc--grid-container a,
.gpsc--grid-container ins {
	text-decoration: none !important;
}
.gpsc-single-product-name,
.gpsc--grid-container p {
    margin: 0 0 10px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' {
	max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
	margin: 10px auto;
	width: 100%;
	background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc--grid-container {
	display: grid;
	grid-template-columns: repeat(' . $wpgpsc_product_columns . ', minmax(0, 1fr));
	gap: ' . $wpgpsc_product_space_between . 'px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-content-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-img {
	position: relative;
	margin-bottom: 20px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-img img {
	display: block;
	background-color: #F1F1F1;
	border-radius: 5px;
	max-width: 100%;
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
#gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale {
    position: absolute;
    display: inline-block;
    top: 10px;
    left: 10px;
    background: ' . $wpgpsc_shortcode_color_brand . ';
    font-size: 13px;
	line-height: 13px;
    font-weight: bold;
    padding: 6px 8px;
    border-radius: 7px;
    margin: 0 auto;
    color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc--grid-container .product.woocommerce.add_to_cart_inline {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	gap: 10px;
	padding: 0 !important;
	border: 0 !important;
	margin: 0 0 10px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc--grid-container .product.woocommerce.add_to_cart_inline > a.button {
	display: inline-block;
	margin: 0;
	background: ' . $wpgpsc_shortcode_color_brand . ';
	color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
	padding: 12px 18px;
	border-radius: 5px;
	box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
	transition: .3s;
	border: none;
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc--grid-container .product.woocommerce.add_to_cart_inline > a.button:hover {
	box-shadow: 0 0;
	transform: translateY(-1px);
	background: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ';
	transform: translateY(-1px);
	color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product {
	background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
	display: flex;
	flex-direction: column;
	align-items: center;
	box-shadow: ' . $wpgpsc_shortcode_color_brand . ' 0px 1px 4px;
	padding: 15px;
	text-align: center;
	border-radius: 5px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-name + p {
	margin-bottom: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-name a {
	text-decoration: none !important;
	' . $wpgpsc_shortcode_colors_single_product['title'] . ';
	display: block;
	word-spacing: 1px;
	outline: none;
	margin-bottom: 10px;
	' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px;
	font-weight: ' . $gpsc_product_name_fw . ';
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' bdi.gpsc-single-product-price {
	' . $gpsc_product_price_ff . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
	line-height: ' . $gpsc_product_price_lh . 'px;
	font-weight: ' . $gpsc_product_price_fw . ';
	text-align: ' . $gpsc_product_price_ta . ';
	' . $gpsc_product_price_tt . ';
	' . $gpsc_product_price_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-price del,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-price del span.amount {
  	color: #918d8d !important;
	font-weight: normal !important;
	font-size: 90% !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-price span.amount {
	color: ' . $wpgpsc_shortcode_color_brand . ' !important;
	font-weight: ' . $gpsc_product_price_fw . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' a.gpsc-details-btn {
	background: transparent;
	color: ' . $wpgpsc_shortcode_color_brand . ';
	border: 2px solid ' . $wpgpsc_shortcode_color_brand . ';
	display: inline-block;
	padding: 5px 15px;
	text-decoration: none !important;
	color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' a.gpsc-details-btn:hover {
	background: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ' !important;
	color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
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
	outline: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags {
	font-size: 18px;
	font-weight: 400;
	line-height: 18px;
	color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ';
	margin-bottom: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags a {
	color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ';
	outline: none;
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
@media (max-width: 460px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc--grid-container {
		display: block !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product:not(:last-child) {
		margin-bottom: 20px !important;
	}
}
@media (max-width: 640px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc--grid-container {
		grid-template-columns: repeat(2, minmax(0, 1fr) ) !important;
    }
}';
?>
<?php
if ($wpgpsc_pagination_show) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-pagination {
		display: flex;
		flex-direction: row;
		gap: 10px;
		margin-top: 20px;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-pagination .page-numbers {
		display: inline-block;
		padding: 5px 15px;
		background: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
		box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
		border: 1px solid ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
		text-decoration: none !important;
		border-radius: 3px;
		transition: .3s;
		color: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ';
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-pagination .page-numbers.current {
		box-shadow: 0 0;
		border: 0;
		background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ';
		border: 1px solid ' . ($wpgpsc_shortcode_slider_pagination_colors['background']) . ';
		color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-pagination .page-numbers:hover {
		border-color: transparent;
	}';
}
if (!empty($wpgpsc_shortcode_colors_atc_button['background'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc--grid-container .product.woocommerce.add_to_cart_inline > a.button {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_colors_single_product['price'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-price span.amount {
		color: ' . $wpgpsc_shortcode_colors_single_product['price'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_color_border)) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product {
		box-shadow: ' . $wpgpsc_shortcode_color_border . ' 0px 1px 4px !important;
	}';
}
if (!empty($wpgpsc_shortcode_colors_single_product['category'])) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category,
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
		margin-bottom: 10px;
		position: relative;
	}';
}
if ('horizontal' === $wpgpsc_content_flow) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product {
		flex-direction: row !important;
		gap: 10px;
		align-items: flex-start !important;
    	text-align: left !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product .gpsc-single-product-img {
		margin-bottom: 0 !important;
		flex-basis: 40%;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-content-wrapper {
		align-items: flex-start !important;
		text-align: left !important;
		flex-basis: 60%;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-desc,
	#gpsc--products-' . esc_attr($post_id) . ' bdi.gpsc-single-product-price,
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-single-product-name a {
		text-align: left !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale {
		top: 5px !important;
		left: 5px !important;
		font-size: 10px !important;
		line-height: 10px !important;
		padding: 5px 6px !important;
		border-radius: 5px !important;
	}';
}
?>
</style>
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc--product-grid">
	<?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
		<h2 class="gpsc--section-title gpsc-title-<?php echo esc_attr($post_id); ?>"><?php echo esc_html(get_the_title($post_id)); ?></h2>
	<?php endif; ?>

	<div class="gpsc--grid-container">
		<?php
		foreach ($gpsc_products->products as $product) {

			$regular_price = (float) $product->get_regular_price();
			$sale_price    = (float) $product->get_sale_price();

			echo '<div class="gpsc-single-product">
				<div class="gpsc-single-product-img">';
			if ($wpgpsc_show_thumb) {

				echo '<a href="' . esc_url(get_permalink($product->get_id())) . '">
				<img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($product->get_title()) . '"></a>';

				if ($product->is_on_sale() && !empty($product->get_sale_price()) && $wpgpsc_sale_tag_show) {

					if ('percent-tag' === $wpgpsc_sale_tag_type) {

						echo '<span class="gpsc-product-sale">SALE (- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%)</span>';
					} elseif ('percent' === $wpgpsc_sale_tag_type) {

						echo '<span class="gpsc-product-sale">- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%</span>';
					} else {

						echo '<span class="gpsc-product-sale">SALE</span>';
					}
				}
			}
			echo '</div>
			<div class="gpsc-content-wrapper">';
			if ($wpgpsc_show_name) {

				echo '<' . $wpgpsc_name_tag . ' class="gpsc-single-product-name"><a href="' . esc_url(get_permalink($product->get_id())) . '">' . esc_html($product->get_title()) . '</a></' . $wpgpsc_name_tag . '>';
			}
			if ($product->get_reviews_allowed() && $wpgpsc_star_rating_show) {

				$gpsc_product_rating_percentage = (int) $product->get_average_rating() * 2 . '0%';
				echo '<div class="gpsc-product-rating-wrapper"><div class="gpsc-star-rating" role="img" aria-label="Rated ' . $product->get_average_rating() . ' out of 5" style="width:' . $gpsc_product_rating_percentage . '"><span>Rated <strong class="rating">4.00</strong> out of 5</span></div></div>';
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

				echo do_shortcode('[add_to_cart id="' . $product->get_id() . '" show_price="FALSE"]');
			}
			if ($wpgpsc_show_detail_btn) {

				echo '<a  class="gpsc-details-btn" href="' . esc_url(get_permalink($product->get_id())) . '" target="_blank">' . esc_html($wpgpsc_show_detail_btn_txt) . '</a>';
			}
			echo '</div>
			</div>';
		}

		echo '</div>';

		// Display pagination links.
		if ($wpgpsc_pagination_show) {

			$gpsc_total_pages = $gpsc_products->total / $gpsc_args['limit'];
			$gpsc_paginate_arg = array(
				'current' => max(1, get_query_var('paged')),
				'total' => ceil($gpsc_total_pages),
			);

			echo '<div class="gpsc-product-pagination">' . paginate_links($gpsc_paginate_arg) . '</div>';
		}
		?>
	</div>