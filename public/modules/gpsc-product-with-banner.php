<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_With_Banner
 * @subpackage GPSC_Product_With_Banner/public/partials
 */

// Appearance.
$wpgpsc_word_count_number = empty($wpgpsc_word_count_number) ? '11' : $wpgpsc_word_count_number;

// Get banner data.
$wpgpsc_banner_bg_type = wpgpsc_get_post_meta($post_id, 'wpgpsc_banner_bg_type');
$wpgpsc_banner_img = wpgpsc_get_post_meta($post_id, 'wpgpsc_banner_img');
$wpgpsc_banner_content_show = wpgpsc_get_post_meta($post_id, 'wpgpsc_banner_content_show');
$wpgpsc_banner_content_fieldset = wpgpsc_get_post_meta($post_id, 'wpgpsc_banner_content_fieldset');
$wpgpsc_banner_content_img = $wpgpsc_banner_content_fieldset['wpgpsc_banner_content_img'];
$wpgpsc_banner_content_title = $wpgpsc_banner_content_fieldset['wpgpsc_banner_content_title'];
$wpgpsc_banner_content_subtitle = $wpgpsc_banner_content_fieldset['wpgpsc_banner_content_subtitle'];
$wpgpsc_banner_link = wpgpsc_get_post_meta($post_id, 'wpgpsc_banner_link');
$wpgpsc_banner_position = wpgpsc_get_post_meta($post_id, 'wpgpsc_banner_position');

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
if (!($wpgpsc_carousel_mode_on)) {

    $wpgpsc_shortcode_slider_pagination_colors['active'] = empty($wpgpsc_shortcode_slider_pagination_colors['active']) ? '#fff' : $wpgpsc_shortcode_slider_pagination_colors['active'];
}

// Typography Options.
$gpsc_section_title_ff = !empty($gpsc_shortcode_section_title_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_section_title_typo['font-family'] . ';' : '';
$gpsc_section_title_fs = !empty($gpsc_shortcode_section_title_typo['font-size']) ? $gpsc_shortcode_section_title_typo['font-size'] : '24';
$gpsc_section_title_lh = !empty($gpsc_shortcode_section_title_typo['line-height']) ? $gpsc_shortcode_section_title_typo['line-height'] : '24';
$gpsc_section_title_fw = !empty($gpsc_shortcode_section_title_typo['font-weight']) ? $gpsc_shortcode_section_title_typo['font-weight'] : '500';
$gpsc_section_title_ta = !empty($gpsc_shortcode_section_title_typo['text-align']) ? $gpsc_shortcode_section_title_typo['text-align'] : 'left';
$gpsc_section_title_tt = !empty($gpsc_shortcode_section_title_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_section_title_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_section_title_ls = !empty($gpsc_shortcode_section_title_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_section_title_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_name_ff = !empty($gpsc_shortcode_product_name_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_name_typo['font-family'] . ';' : '';
$gpsc_product_name_fs = !empty($gpsc_shortcode_product_name_typo['font-size']) ? $gpsc_shortcode_product_name_typo['font-size'] : '22';
$gpsc_product_name_lh = !empty($gpsc_shortcode_product_name_typo['line-height']) ? $gpsc_shortcode_product_name_typo['line-height'] : '28';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'left';
$gpsc_product_name_tt = !empty($gpsc_shortcode_product_name_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_name_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : 'letter-spacing: 0.5px';
$gpsc_product_excerpt_ff = !empty($gpsc_shortcode_product_excerpt_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_excerpt_typo['font-family'] . ';' : '';
$gpsc_product_excerpt_fs = !empty($gpsc_shortcode_product_excerpt_typo['font-size']) ? $gpsc_shortcode_product_excerpt_typo['font-size'] : '16';
$gpsc_product_excerpt_lh = !empty($gpsc_shortcode_product_excerpt_typo['line-height']) ? $gpsc_shortcode_product_excerpt_typo['line-height'] : '20';
$gpsc_product_excerpt_fw = !empty($gpsc_shortcode_product_excerpt_typo['font-weight']) ? $gpsc_shortcode_product_excerpt_typo['font-weight'] : 'normal';
$gpsc_product_excerpt_ta = !empty($gpsc_shortcode_product_excerpt_typo['text-align']) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'left';
$gpsc_product_excerpt_tt = !empty($gpsc_shortcode_product_excerpt_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_excerpt_typo['text-transform'] . ';' : '';
$gpsc_product_excerpt_ls = !empty($gpsc_shortcode_product_excerpt_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_excerpt_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_price_ff = !empty($gpsc_shortcode_product_price_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_price_typo['font-family'] . ';' : '';
$gpsc_product_price_fs = !empty($gpsc_shortcode_product_price_typo['font-size']) ? $gpsc_shortcode_product_price_typo['font-size'] : '20';
$gpsc_product_price_lh = !empty($gpsc_shortcode_product_price_typo['line-height']) ? $gpsc_shortcode_product_price_typo['line-height'] : '22';
$gpsc_product_price_fw = !empty($gpsc_shortcode_product_price_typo['font-weight']) ? $gpsc_shortcode_product_price_typo['font-weight'] : 'bold';
$gpsc_product_price_ta = !empty($gpsc_shortcode_product_price_typo['text-align']) ? $gpsc_shortcode_product_price_typo['text-align'] : 'left';
$gpsc_product_price_tt = !empty($gpsc_shortcode_product_price_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_price_typo['text-transform'] . ';' : '';
$gpsc_product_price_ls = !empty($gpsc_shortcode_product_price_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_price_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_btn_ff = !empty($gpsc_shortcode_product_btn_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_btn_typo['font-family'] . ';' : '';
$gpsc_product_btn_fs = !empty($gpsc_shortcode_product_btn_typo['font-size']) ? $gpsc_shortcode_product_btn_typo['font-size'] : '16';
$gpsc_product_btn_lh = !empty($gpsc_shortcode_product_btn_typo['line-height']) ? $gpsc_shortcode_product_btn_typo['line-height'] : '20';
$gpsc_product_btn_fw = !empty($gpsc_shortcode_product_btn_typo['font-weight']) ? $gpsc_shortcode_product_btn_typo['font-weight'] : '600';
$gpsc_product_btn_ta = !empty($gpsc_shortcode_product_btn_typo['text-align']) ? $gpsc_shortcode_product_btn_typo['text-align'] : 'center';
$gpsc_product_btn_tt = !empty($gpsc_shortcode_product_btn_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_btn_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_btn_ls = !empty($gpsc_shortcode_product_btn_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_btn_typo['letter-spacing'] . 'px;' : '';

// If carousel mode on.
if ($wpgpsc_carousel_mode_on) {

    wp_enqueue_style($this->plugin_name . 'swiper');
    wp_enqueue_script($this->plugin_name . 'swiper');
    wp_enqueue_script($this->plugin_name);
}

// Protect against arbitrary paged values.
if (is_front_page()) {

    $gpsc_args_paged = (get_query_var('page')) ? get_query_var('page') : 1;
} else {

    $gpsc_args_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
}

// Query argument values.
$gpsc_args = array(
    'include' => ('hand-pick' === $wpgpsc_product_by) ? $wpgpsc_specific_product_selected : '',
    'limit' => (!($wpgpsc_carousel_mode_on)) ? ($wpgpsc_pagination_show ? $wpgpsc_product_per_page : $wpgpsc_product_limit) : $wpgpsc_product_limit,
    'page' => $gpsc_args_paged,
    'category' => ('category' === $wpgpsc_product_by) ? $wpgpsc_product_cat_selection : '',
    'orderby' => ('top_sales' !== $wpgpsc_product_by) ? $wpgpsc_product_orderby : 'meta_value_num',
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
if ('top_sales' === $wpgpsc_product_by) {

    $gpsc_args['meta_key'] = 'total_sales';
    $gpsc_args['order'] = 'DESC';
}

$gpsc_products = wc_get_products($gpsc_args);

if ($wpgpsc_carousel_mode_on) {
    $gpsc_swiper_slide = 'swiper-slide ';
} else {
    $gpsc_swiper_slide = "";
}

echo '<style>
* {
    box-sizing: border-box;
}
.gpsc-main p,
.gpsc-main h2,
.gpsc-main h3,
.gpsc-main h4,
.gpsc-main h5,
.gpsc-main h6 {
    margin: 0;
}
.gpsc-main .entry-content a,
body .post-standard__content a,
body .format-standard .entry-content a,
body .comment-content a,
.wp-block-latest-comments a,
.widget_text a {
    text-decoration: none!important;
}
html.colibri-wp-theme .gpsc--product-slider-carousel div:not(.gpsc-product-rating-wrapper):before,
html.colibri-wp-theme .gpsc--product-slider-carousel div:not(.gpsc-star-rating):not(.gpsc-slider-btn-next):not(.gpsc-slider-btn-prev):after {
    display: none !important;
}
.gpsc-main .swiper-pagination-bullets .swiper-pagination-bullet:before {
  border: none !important;
}
.gpsc-main .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active:after {
  border-top: none !important;
}
.gpsc-main mark, ins {
    background: none;
}
#gpsc--products-' . esc_attr($post_id) . ' span.amount {
    color: ' . $wpgpsc_shortcode_color_brand . ' !important;
    font-weight: ' . $gpsc_product_price_fw . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' del span.amount,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-price del {
    font-size: 90% !important;
    color: #918d8d !important;
    font-weight: normal !important;
}
.gpsc-main .entry-content-wrap {
    padding: 0 !important;
}
.gpsc-main .woocommerce a.added_to_cart {
    margin: 0 !important;
}
.gpsc-main a,
.gpsc-main ins {
	text-decoration: none !important;
}
.gpsc-main p.product.woocommerce.add_to_cart_inline {
    border: transparent !important;
    padding: 0 !important;
}
.gpsc-main select, .select2-container .select2-selection--single {
    -webkit-appearance: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' h2.gpsc--section-title {
    color: ' . $wpgpsc_shortcode_colors_section['title'] . ' !important;
    margin-bottom: ' . $wpgpsc_section_title_margin_bottom['width'] . 'px !important;
    ' . $gpsc_section_title_ff . ';
	font-size: ' . $gpsc_section_title_fs . 'px;
	line-height: ' . $gpsc_section_title_lh . 'px;
	font-weight: ' . $gpsc_section_title_fw . ';
	text-align: ' . $gpsc_section_title_ta . ';
	' . $gpsc_section_title_tt . ';
	' . $gpsc_section_title_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' {
    max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
    margin: 10px auto;
    width: 100%;
    background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-content-wrapper {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 2fr;
    grid-auto-rows: max-content;
    justify-content: center;
    align-content: start;
    grid-gap: ' . $wpgpsc_product_space_between . 'px;
    width: 100%;
    min-height: 0;
    min-width: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left {
    position: relative;
    background: ' . $wpgpsc_shortcode_color_overlay . ';
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 25px;
    padding: 20px;
    min-width: 0;
    min-height: 100px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-inner-content img.gpsc-inner-photo {
    margin-bottom: 25px;
    max-width: 230px;
    border-radius: 5px;
}
#gpsc--products-' . esc_attr($post_id) . ' img.gpsc-banner-cover {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100% !important;
    object-fit: cover;
    outline: none;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-inner-content {
    display: flex;
    z-index: 1;
    flex-direction: column;
    align-items: center;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left h3 {
    color: ' . $wpgpsc_shortcode_colors_banner_content['title'] . ';
    font-size: 32px;
    line-height: 26px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 15px !important;
    ' . $gpsc_product_name_ff . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-inner-content p {
    text-align: center;
    color: ' . $wpgpsc_shortcode_colors_banner_content['subtitle'] . ';
    font-size: 16px;
    line-height: 26px;
    max-width: 212px;
    ' . $gpsc_product_name_ff . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left .gpsc-banner-btn {
    display: block;
    border: transparent;
    border-radius: 40px;
    padding: 8px 10px;
    background-color: ' . $wpgpsc_shortcode_color_brand . ';
    color: ' . $wpgpsc_shortcode_colors_banner_content['button-txt'] . ';
    ' . $gpsc_product_name_ff . ';
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 500;
    transition: 0.7s;
    white-space: nowrap;
    max-width: 150px;
    width: 100%;
    margin: auto;
    margin-top: 25px;
    text-align: center;
    outline: 1px solid ' . $wpgpsc_shortcode_colors_banner_content['button-txt'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left .gpsc-banner-btn:hover {
    background-color: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ';
    color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
    outline: 1px solid ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
    cursor: pointer;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container {
    background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
    border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
    border-radius: 5px;
    height: auto;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container::-webkit-scrollbar {
    height: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product {
    position: relative;
    padding: 10px;
    width: 100%;
    transition: 0.5s;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image {
    position: relative;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image hr {
    background-color: ' . $wpgpsc_shortcode_color_brand . ';
    border: 0;
    height: 1px;
    margin-bottom: 0 !important;
    margin-top: 15px;
    opacity: 50%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image img {
    display: block;
    border-radius: 5px;
    max-width: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale {
    position: absolute;
    display: inline-block;
    top: 10px;
    left: 10px;
    font-size: 9px;
    line-height: 9px;
    white-space: nowrap;
    font-weight: 500;
    padding: 6px 8px;
    border-radius: 7px;
    margin: 0 auto;
    color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    background: ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-details {
    margin-top: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-stock-content {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 16px;
    line-height: 16px;
    font-weight: 500;
    text-transform: uppercase;
    color: ' . $wpgpsc_shortcode_colors_single_product['stock'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-stock-n-rating {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    align-items: flex-start;
    flex-wrap: wrap;
    margin-bottom: 20px;
    gap: 5px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-stock-content svg {
    height: 18px;
    width: 18px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name a {
    display: block;
    margin-bottom: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name-tag {
    ' . $wpgpsc_shortcode_colors_single_product['title'] . ';
    ' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px;
	font-weight: ' . $gpsc_product_name_fw . ';
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category a {
    color: ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category {
    margin-bottom: 10px;
    font-size: 12px;
    line-height: 14px;
    text-transform: uppercase;
    font-weight: 500;
    text-align: left;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags a {
    color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-tags {
    margin-bottom: 10px;
    font-size: 12px;
    font-weight: 400;
    line-height: 14px;
    text-align: left;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-price {
    color: ' . $wpgpsc_shortcode_color_brand . ';
    margin-top: 20px;
    ' . $gpsc_product_price_ff . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
	line-height: ' . $gpsc_product_price_lh . 'px;
	font-weight: ' . $gpsc_product_price_fw . ';
	text-align: ' . $gpsc_product_price_ta . ';
	' . $gpsc_product_price_tt . ';
	' . $gpsc_product_price_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product:hover .gpsc-product-buy .product.woocommerce.add_to_cart_inline > a.button {
    opacity: .7;
    transition: 0.5s;
    transition-timing-function: linear;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-buy .product.woocommerce.add_to_cart_inline > a.button {
    position: absolute;
    padding: 9px 11px;
    background-color: ' . $wpgpsc_shortcode_color_brand . ';
    min-width: 100px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0.2);
    color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    border-radius: 5px;
    transition: 0.5s;
    white-space: normal;
    word-wrap: break-word;
    margin: 0 !important;
    min-height: auto;
    width: 100%;
    left: 0;
    bottom: 0;
    opacity: 0;
    ' . $gpsc_product_btn_ff . ';
	font-size: ' . $gpsc_product_btn_fs . 'px !important;
	line-height: ' . $gpsc_product_btn_lh . 'px;
	font-weight: ' . $gpsc_product_btn_fw . ';
	text-align: ' . $gpsc_product_btn_ta . ';
	' . $gpsc_product_btn_tt . ';
	' . $gpsc_product_btn_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-buy .product.woocommerce.add_to_cart_inline > a.button:hover {
    opacity: 1 !important;
    background: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ';
	color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
}
@media (max-width: 768px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-content-wrapper {
        display: block;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left {
        margin-bottom: 20px;
    }
}';
?>
<?php
if ('right' == $wpgpsc_banner_position) {

    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-content-wrapper {
        grid-template-columns: 2fr minmax(0, 1fr) !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left {
        order: 1 !important;
    }';
}
if (!$wpgpsc_carousel_mode_on) {

    echo '#gpsc--products-' . esc_attr($post_id) . ' div#gpsc-product-section-wrapper {
        display: grid;
        grid-template-columns: repeat( ' . $wpgpsc_product_columns . ', minmax(0, 1fr) );
        gap: ' . $wpgpsc_product_space_between . 'px;
        grid-auto-rows: max-content;
    }';
}
if ($wpgpsc_carousel_mode_on) {

    echo '#gpsc--products-' . esc_attr($post_id) . ' h2.gpsc--section-title {
        top: 0 !important;
        left: 3px;
        position: absolute;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product {
        height: 100%;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-container {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        padding: 0 3px !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet-active {
        background-color: ' . $wpgpsc_shortcode_color_brand . ' !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
        opacity: 1 !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination {
        position: absolute;
        text-align: center;
        transition: .3s opacity;
        z-index: 10;
        padding: 3px;
        bottom: 0 !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container::-webkit-scrollbar {
        width: 0px;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: ' . $wpgpsc_shortcode_color_brand . ';
    }';
}
if (($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_navigation) || $wpgpsc_section_title_show) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-container {
		padding-top: 45px !important;
	}
    .gpsc-slider-btn {
        right: 3px;
        top: 0;
        position: absolute;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next::after,
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev::after {
        display: none;
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next svg,
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev svg {
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
		height: 35px;
		width: 35px;
		top: 0 !important;
        margin-top: 0 !important;
        border: 1px solid ' . $wpgpsc_shortcode_slider_nav_colors['icon'] . ';
        transition: .3s;
        background: ' . $wpgpsc_shortcode_color_brand . ';
        outline: none;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        border-radius: 2px;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
        left: -78px !important;
        right: auto !important;
		transform: rotate(180deg);
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next {
        left: auto !important;
        right: 0 !important;
    }';
}
if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_pagination) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-container {
		padding-bottom: 35px !important;
	}';
    if ('pag-7' === $wpgpsc_shortcode_slider_selected_pagin) {
        echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-container {
            padding-bottom: 75px !important;
        }';
    }
    if ('pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
        echo '.gpsc-pagination-wrapper {
			width: 130px !important;
		}
        #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-container {
            padding-bottom: 50px !important;
        }';
    }
    if ('progressbar' === $wpgpsc_shortcode_slider_pagination_type) {
        echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-container {
			padding-bottom: 2px !important;
		}';
    }
}
if (!$wpgpsc_carousel_mode_on && $wpgpsc_pagination_show) {
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
		border: 1px solid ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
		color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-pagination .page-numbers:hover {
		border-color: transparent;
	}';
}
if (!empty($wpgpsc_shortcode_slider_nav_colors['background'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next,
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
        background: ' . $wpgpsc_shortcode_slider_nav_colors['background'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_slider_pagination_colors['active'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet-active, #gpsc--products-' . esc_attr($post_id) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
    }';
    if ('pag-3' === $wpgpsc_shortcode_slider_selected_pagin || 'pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
        echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet {
			border: 1px solid ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
		}';
    }
}
if (!empty($wpgpsc_shortcode_colors_atc_button['background'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-buy .product.woocommerce.add_to_cart_inline > a.button,
    #gpsc--products-' . esc_attr($post_id) . ' span.gpsc-product-sale, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left .gpsc-banner-btn {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_colors_banner_content['button-bg'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left .gpsc-banner-btn {
        background-color: ' . $wpgpsc_shortcode_colors_banner_content['button-bg'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_colors_single_product['price'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-main span.amount {
		color: ' . $wpgpsc_shortcode_colors_single_product['price'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_color_border)) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container {
		border: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image hr {
        background-color: ' . $wpgpsc_shortcode_color_border . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_colors_single_product['category'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category a {
		color: ' . $wpgpsc_shortcode_colors_single_product['category'] . ' !important;
	}';
}
if ($wpgpsc_star_rating_show) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-star-rating {
		position: relative;
		line-height: 1.618;
		font-size: 1em;
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
if (!$wpgpsc_carousel_mode_on) {

    echo '@media (max-width: 768px) {
        #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section-wrapper {
                display: block !important;
            }
            #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container:not(:last-child) {
                margin-bottom: 25px !important;
            }
            #gpsc--products-' . esc_attr($post_id) . ' .gpsc-banner-left .gpsc-banner-btn {
                white-space: break-spaces;
            }
        }
    @media (max-width: 780px) {
        #gpsc--products-' . esc_attr($post_id) . ' div#gpsc-product-section-wrapper {
            grid-template-columns: repeat(2, minmax(0, 1fr) ) !important;
        }
    }';
}
?>
</style>
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-main gpsc--product-slider-carousel"
    data-speed="<?php echo esc_attr($wpgpsc_shortcode_slider_speed); ?>" data-autoplay=<?php echo wp_json_encode($wpgpsc_shortcode_slider_autoplay); ?>
    data-row="<?php echo esc_attr(empty($wpgpsc_product_rows) ? 1 : $wpgpsc_product_rows); ?>"
    data-loop="<?php echo esc_attr($wpgpsc_shortcode_slider_loop); ?>"
    data-initialslide="<?php echo esc_attr($wpgpsc_shortcode_initial_slide); ?>"
    data-lazyload="<?php echo $wpgpsc_shortcode_lazy_load ? 'true' : 'false'; ?>"
    data-slidepergroup="<?php echo esc_attr($wpgpsc_shortcode_slides_per_group); ?>"
    data-grabcursor="<?php echo $wpgpsc_shortcode_grab_cursor ? 'true' : 'false'; ?>"
    data-spacebetween="<?php echo esc_attr($wpgpsc_product_space_between); ?>"
    data-responsivetop="<?php echo esc_attr($wpgpsc_slider_responsive['top']); ?>"
    data-responsiveright="<?php echo esc_attr($wpgpsc_slider_responsive['right']); ?>"
    data-responsivebottom="<?php echo esc_attr($wpgpsc_slider_responsive['bottom']); ?>"
    data-bullettype="<?php echo esc_attr('pag-7' == $wpgpsc_shortcode_slider_selected_pagin); ?>"
    data-paginationtype="<?php echo esc_attr($wpgpsc_shortcode_slider_pagination_type); ?>"
    data-module="<?php echo esc_attr($wpgpsc_module); ?>">
    <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show && !$wpgpsc_carousel_mode_on): ?>
        <h2 class="gpsc--section-title gpsc-title-<?php echo esc_attr($post_id); ?>"><?php echo esc_html(get_the_title($post_id)); ?></h2>
    <?php endif; ?>
    <div class="gpsc-content-wrapper" id="gpsc-content-wrapper">
        <div class="gpsc-banner-left">
            <?php if ($wpgpsc_banner_bg_type == 'img' && !empty($wpgpsc_banner_img['url'])): ?>
                <?php
                echo '<a href="' . ($wpgpsc_banner_link['url']) . '" target= "' . ($wpgpsc_banner_link['target']) . '"><img class="gpsc-banner-cover" src="' . ($wpgpsc_banner_img['url']) . '" /></a>';
                ?>
            <?php endif; ?>
            <?php if ($wpgpsc_banner_content_show): ?>
                <div class="gpsc-banner-inner-content">
                    <?php if (!empty($wpgpsc_banner_content_img)): ?>
                        <?php
                        echo '<img class="gpsc-inner-photo"
                            src="' . ($wpgpsc_banner_content_img['url']) . '" />';
                        ?>
                    <?php endif; ?>
                    <?php
                    echo '<h3>' . $wpgpsc_banner_content_title . '</h3>
                    <p>' . $wpgpsc_banner_content_subtitle . '</p>
                    <a class="gpsc-banner-btn" href= "' . ($wpgpsc_banner_link['url']) . '" target= "' . ($wpgpsc_banner_link['target']) . '">' . ($wpgpsc_banner_link['text']) . '</a>
                </div>';
                    ?>
                <?php endif; ?>
            </div>
            <?php if ($wpgpsc_carousel_mode_on): ?>
                <div class="swiper gpsc-slider-container">
                    <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
                        <h2 class="gpsc--section-title gpsc-title-<?php echo esc_attr($post_id); ?>"><?php echo esc_html(get_the_title($post_id)); ?></h2>
                    <?php endif; ?>
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
                <?php endif; ?>
                <div class="swiper-wrapper gpsc-product-section-wrapper" id="gpsc-product-section-wrapper">
                    <?php
                    foreach ($gpsc_products->products as $product) {

                        $regular_price = (float) $product->get_regular_price();
			            $sale_price    = (float) $product->get_sale_price();

                        echo '<div class="' . $gpsc_swiper_slide . 'gpsc-product-container">
                            <div class="gpsc-product">';
                        if ($wpgpsc_show_thumb && get_post_thumbnail_id($product->get_id())) {

                            echo '<div class="gpsc-product-image">
                        <a href="' . esc_url(get_permalink($product->get_id())) . '">';
                            if (($wpgpsc_carousel_mode_on) && ($wpgpsc_shortcode_lazy_load)) {
                                echo '<img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($product->get_title()) . '" loading="lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>';
                            } else {
                                echo '<img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($product->get_title()) . '">';
                            }
                            echo '<hr>
                            </a>';
                            if ($product->is_on_sale() && !empty($product->get_sale_price()) && $wpgpsc_sale_tag_show) {

                                if ('percent-tag' === $wpgpsc_sale_tag_type) {

                                    echo '<span class="gpsc-product-sale">SALE (- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%)</span>';
                                } elseif ('percent' === $wpgpsc_sale_tag_type) {

                                    echo '<span class="gpsc-product-sale">- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%</span>';
                                } else {

                                    echo '<span class="gpsc-product-sale">SALE</span>';
                                }
                            }
                            if ($wpgpsc_show_button) {

                                echo '<div class="gpsc-product-buy">';
                                echo do_shortcode('[add_to_cart id="' . $product->get_id() . '" show_price="FALSE"]');
                                echo ' </div>';

                            }
                            echo '</div>';
                        }
                        echo '<div class="gpsc-product-details">';


                        echo '<div class="gpsc-product-stock-n-rating">';
                        if ($wpgpsc_show_stock_status) {

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
                        }
                        if ($product->get_reviews_allowed() && $wpgpsc_star_rating_show) {

                            $gpsc_product_rating_percentage = (int) $product->get_average_rating() * 2 . '0%';
                            echo '<div class="gpsc-product-review"><div class="gpsc-product-rating-wrapper"><div class="gpsc-star-rating" role="img" aria-label="Rated ' . $product->get_average_rating() . ' out of 5" style="width:' . $gpsc_product_rating_percentage . '"></div></div></div>';

                        }
                        echo '</div>';

                        if ($wpgpsc_show_name) {

                            echo '<div class="gpsc-product-name"><a href="' . esc_url(get_permalink($product->get_id())) . '"><' . $wpgpsc_name_tag . ' class="gpsc-product-name-tag">' . esc_html($product->get_title()) . '</' . $wpgpsc_name_tag . '></a></div>';

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
                        if ($wpgpsc_show_price) {

                            echo '<div class="gpsc-product-price">' . wp_kses_post($product->get_price_html()) . '</div>';

                        }
                        echo '</div>
                </div>
             </div>';
                    }

                    echo '</div>';
                    ?>
                    <?php if ($wpgpsc_carousel_mode_on): ?>
                        <?php if ($wpgpsc_shortcode_slider_pagination): ?>
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
                </div>
                <?php
                if ((!($wpgpsc_carousel_mode_on)) && ($wpgpsc_pagination_show)) {

                    $gpsc_total_pages = $gpsc_products->total / $gpsc_args['limit'];
                    $gpsc_paginate_arg = array(
                        'current' => max(1, get_query_var('paged')),
                        'total' => ceil($gpsc_total_pages),
                    );

                    echo '<div class="gpsc-product-pagination">' . paginate_links($gpsc_paginate_arg) . '</div>';
                }
                ?>
            </div>
        </div>