<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Highlight
 * @subpackage GPSC_Product_Highlight/public/partials
 */

// Get highlighted product selected id.
$wpgpsc_highlight_product_selected = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlight_product_selected');
$wpgpsc_highlighted_img = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlighted_img');
$wpgpsc_highlighted_name = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlighted_name');
$wpgpsc_highlighted_excerpt = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlighted_excerpt');
$wpgpsc_highlighted_rating = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlighted_rating');
$wpgpsc_highlighted_price = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlighted_price');
$wpgpsc_highlighted_stock = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlighted_stock');
$wpgpsc_highlighted_sku = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlighted_sku');
$wpgpsc_highlighted_btn = wpgpsc_get_post_meta($post_id, 'wpgpsc_highlighted_btn');

// If carousel mode on.
if ($wpgpsc_carousel_mode_on) {

    wp_enqueue_style($this->plugin_name . 'swiper');
    wp_enqueue_script($this->plugin_name . 'swiper');
    wp_enqueue_script($this->plugin_name);
}

// Color Options.
$wpgpsc_shortcode_colors_section['background'] = empty($wpgpsc_shortcode_colors_section['background']) ? '#f4f4f4' : $wpgpsc_shortcode_colors_section['background'];
$wpgpsc_shortcode_colors_section['title'] = empty($wpgpsc_shortcode_colors_section['title']) ? '#333333' : $wpgpsc_shortcode_colors_section['title'];
$wpgpsc_shortcode_colors_single_product['background'] = empty($wpgpsc_shortcode_colors_single_product['background']) ? '#fafafa' : $wpgpsc_shortcode_colors_single_product['background'];
$wpgpsc_shortcode_colors_single_product['title'] = empty($wpgpsc_shortcode_colors_single_product['title']) ? '' : 'color:' . $wpgpsc_shortcode_colors_single_product['title'] . ';' ;
$wpgpsc_shortcode_colors_single_product['excerpt'] = empty($wpgpsc_shortcode_colors_single_product['excerpt']) ? '' : 'color:' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';' ;
$wpgpsc_shortcode_colors_single_product['tag'] = empty($wpgpsc_shortcode_colors_single_product['tag']) ? '#384955' : $wpgpsc_shortcode_colors_single_product['tag'];
$wpgpsc_shortcode_colors_single_product['stock'] = empty($wpgpsc_shortcode_colors_single_product['stock']) ? '#333333' : $wpgpsc_shortcode_colors_single_product['stock'];
$wpgpsc_shortcode_colors_atc_button['text'] = empty($wpgpsc_shortcode_colors_atc_button['text']) ? '#fff' : $wpgpsc_shortcode_colors_atc_button['text'];
$wpgpsc_color_stars_filled_encoded = urlencode($wpgpsc_shortcode_colors_stars['filled']);
$wpgpsc_color_stars_unfilled_encoded = urlencode($wpgpsc_shortcode_colors_stars['unfilled']);
if (!$wpgpsc_carousel_mode_on) {

    $wpgpsc_shortcode_slider_pagination_colors['active'] = empty($wpgpsc_shortcode_slider_pagination_colors['active']) ? '#fff' : $wpgpsc_shortcode_slider_pagination_colors['active'];
}

// Typography Options.
$gpsc_section_title_ff = !empty($gpsc_shortcode_section_title_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_section_title_typo['font-family'] . ';' : '';
$gpsc_section_title_fs = !empty($gpsc_shortcode_section_title_typo['font-size']) ? $gpsc_shortcode_section_title_typo['font-size'] : '22';
$gpsc_section_title_lh = !empty($gpsc_shortcode_section_title_typo['line-height']) ? $gpsc_shortcode_section_title_typo['line-height'] : '24';
$gpsc_section_title_fw = !empty($gpsc_shortcode_section_title_typo['font-weight']) ? $gpsc_shortcode_section_title_typo['font-weight'] : '600';
$gpsc_section_title_ta = !empty($gpsc_shortcode_section_title_typo['text-align']) ? $gpsc_shortcode_section_title_typo['text-align'] : 'left';
$gpsc_section_title_tt = !empty($gpsc_shortcode_section_title_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_section_title_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_section_title_ls = !empty($gpsc_shortcode_section_title_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_section_title_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_name_ff = !empty($gpsc_shortcode_product_name_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_name_typo['font-family'] . ';' : '';
$gpsc_product_name_fs = !empty($gpsc_shortcode_product_name_typo['font-size']) ? $gpsc_shortcode_product_name_typo['font-size'] : '20';
$gpsc_product_name_lh = !empty($gpsc_shortcode_product_name_typo['line-height']) ? $gpsc_shortcode_product_name_typo['line-height'] : '26';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_tt = !empty($gpsc_shortcode_product_name_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_name_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
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
$gpsc_product_btn_tt = !empty($gpsc_shortcode_product_btn_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_btn_typo['text-transform'] . ';' : 'text-transform: uppercase';
$gpsc_product_btn_ls = !empty($gpsc_shortcode_product_btn_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_btn_typo['letter-spacing'] . 'px;' : '';
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

// Adding top sells argument.
if ('top_sales' === $wpgpsc_product_by) {

    $gpsc_args['meta_key'] = 'total_sales';
    $gpsc_args['order'] = 'DESC';
}

// Set highlighted product ID.
$gpsc_highlighted_product_id = '';
if (!empty($wpgpsc_highlight_product_selected)) {

    $gpsc_highlighted_product_id = $wpgpsc_highlight_product_selected;
    $gpsc_args['exclude'] = array($wpgpsc_highlight_product_selected);
}

// Get products.
$gpsc_products = wc_get_products($gpsc_args);

// Set highlighted product ID if not selected.
if (empty($wpgpsc_highlight_product_selected)) {

    $gpsc_highlighted_product_id = end($gpsc_products->products)->get_id();
}

if ($wpgpsc_carousel_mode_on) {
    $gpsc_swiper_slide = 'swiper-slide ';
} else {
    $gpsc_swiper_slide = "";
}
?>
<?php
echo '<style>
.gpsc-main * {
    box-sizing: border-box;
}
.gpsc-main p,
.gpsc-main h2,
.gpsc-main h3,
.gpsc-main h4,
.gpsc-main h5,
.gpsc-main h6 {
    margin: 0 !important;
    padding: 0;
}
.gpsc-main .woocommerce #respond input#submit,
.gpsc-main .woocommerce a.button,
.gpsc-main .woocommerce button.button,
.gpsc-main .woocommerce input.button,
.gpsc-main .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link,
.gpsc-main .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button,
.gpsc-main .woocommerce a.added_to_cart.wc-forward {
    border: none !important;
}
.gpsc-main .entry-content a,
body .post-standard__content a,
body .format-standard .entry-content a,
body .comment-content a,
.wp-block-latest-comments a,
.widget_text a {
    text-decoration: none !important;
}
html.colibri-wp-theme .gpsc--product-slider-carousel div:not(.gpsc-product-rating-wrapper):before,
html.colibri-wp-theme .gpsc--product-slider-carousel div:not(.gpsc-star-rating):not(.gpsc-slider-btn-next):not(.gpsc-slider-btn-prev):after {
    display: none !important;
}
.gpsc-main mark, ins {
    background: none;
}
#gpsc--products-' . esc_attr($post_id) . ' span.amount {
    color: ' . $wpgpsc_shortcode_color_brand . ' !important;
    font-weight: ' . $gpsc_product_price_fw . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section del span.amount,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section del {
    color:  #918d8d !important;
    font-size: 90% !important;
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
    margin: 0 !important;
}
.gpsc-main select, .select2-container .select2-selection--single {
    -webkit-appearance: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' {
    width: 100%;
    max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
    margin: 20px auto;
    padding: 20px;
    background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-main-header .gpsc--section-title {
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-main-header span {
    font-size: 16px;
    font-weight: 500;
    line-height: 18px;
    color: #918d8d;
    text-align: left;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 2fr;
    grid-auto-rows: max-content;
    grid-gap: ' . $wpgpsc_product_space_between . 'px;
    margin-top: 15px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    border-radius: 5px;
    gap: 15px;
    padding: 30px;
    transition: 0.5s;
    border: 1px solid transparent;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-image {
    position: relative;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-image span {
    position: absolute;
    padding: 5px 15px;
    border-radius: 25px 0;
    background-color: ' . $wpgpsc_shortcode_color_brand . ';
    color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    font-size: 12px;
    line-height: 12px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    margin: 8px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-image img {
    display: block;
    background-color: #f4f4f4;
    border-radius: 5px;
    max-width: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product a {
    display: block; 
    text-decoration: none;
    transition: .3s;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-desc {
	font-size: 16px;
	line-height: 20px;
	' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';
    text-align: center;
    ' . $gpsc_product_name_ff . ';
}
.gpsc-highlight-product-desc ul,
.gpsc-highlight-product-desc ol {
    text-align: left;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-category {
    font-size: 12px;
    line-height: 18px;
    font-weight: 500;
    text-align: center;
    text-transform: uppercase;
    display: inline-flex;
    ' . $gpsc_product_name_ff . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-category a {
    transition: .3s;
    color: #918d8d !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-category a:hover {
    color: #fd9800 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-name {
    font-size: 22px;
    font-weight: bold;
    text-transform: capitalize;
    text-align: center;
    line-height: 28px;
    transition: .3s;
    ' . $gpsc_product_name_ff . ';
    ' . $wpgpsc_shortcode_colors_single_product['title'] . ';
}
.gpsc-highlight-product-name:hover {
    color: #fd9800 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product .gpsc-highlight-product-sku strong,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product .gpsc-highlight-product-stock strong {
    color :' . $wpgpsc_shortcode_colors_single_product['stock'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-rating {
    text-align: center;
    font-size: 24px;
    line-height: 28px;
    color: #918d8d;
    letter-spacing: 3px;
    font-weight: 800;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-price {
    text-align: center;
    color: ' . $wpgpsc_shortcode_color_brand . ' !important;
    font-size: 20px;
    font-weight: bold;
    line-height: 22px;
    ' . $gpsc_product_name_ff . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-price del {
    color: #918d8d !important;
    font-size: 90%;
    padding-right: 10px;
    font-weight: normal !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-details-section-top {
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-details-section-bottom {
    display: flex;
    flex-direction: row;
    gap: 10px;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    text-align: center;
    line-height: 17px;
    text-transform: uppercase;
    padding: 10px 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-details-section-bottom > span {
    height: 100%;
    width: 1px;
    background: rgb(158 158 158 / 50%);
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-btn .product.woocommerce.add_to_cart_inline > a.button {
    margin: 0 !important;
    display: inline-block;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 16px;
    line-height: 16px;
    color: ' . $wpgpsc_shortcode_color_brand . ' !important;
    transition: .5s;
    min-height: auto;
    background: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    padding: 15px 18px !important;
    border: 1px solid ' . $wpgpsc_shortcode_color_brand . ' !important;
    border-radius: 5px;
    box-shadow: 2px 2px 0px 0px ' . $wpgpsc_shortcode_color_brand . ';
    ' . $gpsc_product_name_ff . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-btn .product.woocommerce.add_to_cart_inline > a.button:hover {
    box-shadow: 0 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product:hover {
    border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container-wrapper-main {
    width: 100%;
    background: #fff;
	border-radius: 5px;
    position: relative;
    padding: 10px 17px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 12px;
    padding: 10px;
    text-align: center;
    transition: .5s;
    background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
    border: 1px solid ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
    border-radius: 5px;
    height: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image {
    position: relative;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image .gpsc-product-sale {
    text-transform: uppercase;
    letter-spacing: .8px;
    line-height: 12px;
    text-align: center;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 10px;
    font-weight: 500;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 6px 11px;
    border-radius: 30px 0;
    white-space: normal;
    margin: 0 auto;
    color: #fff;
    background: ' . $wpgpsc_shortcode_color_brand . ';
    opacity: .7;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image img {
    display: block;
    background-color: #eeeeee;
    border-radius: 5px;
    max-width: 100%;
    margin: 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product a {
    transition: .3s;
    text-decoration: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name a {
    font-size: 18px;
    line-height: 20px;
    font-weight: 500;
    ' . $wpgpsc_shortcode_colors_single_product['title'] . ';
    display: block;
    transition: .3s;
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-price {
    color: ' . $wpgpsc_shortcode_color_brand . ';
    ' . $gpsc_product_price_ff . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
	line-height: ' . $gpsc_product_price_lh . 'px;
	font-weight: ' . $gpsc_product_price_fw . ';
	text-align: ' . $gpsc_product_price_ta . ';
	' . $gpsc_product_price_tt . ';
	' . $gpsc_product_price_ls . ';
}

#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product:hover .gpsc-product-buy .product.woocommerce.add_to_cart_inline > a.button{
    opacity: 0.7;
    transition: 0.5s ease-in-out;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product:hover {
    transform: translateY(-2px);
    box-shadow: ' . $wpgpsc_shortcode_color_brand . ' 0px 2px 4px, rgb(173 197 145 / 44%) 0px 2px 4px;
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
    transform: translateY(-100%);
    left: 0;
    opacity: 0;
    box-shadow: none !important;
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
    color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' div#gpsc-product-section-wrapper {
    height: auto;
}
@media (max-width: 768px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section {
        display: block;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product {
        margin-bottom: 20px;
    }
}';
?>
<?php
if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_navigation) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container-wrapper-main {
        padding-top: 62px !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next::after, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev::after {
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
        left: -75px !important;
        right: auto !important;
        transform: rotate(180deg);
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next {
        left: auto !important;
        right: 0 !important;
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
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn {
        right: 20px;
        top: 15px;
        position: absolute;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination {
        position: absolute;
        z-index: 10;
        left: 50% !important;
        transform: translateX(-50%);
    }
    #gpsc--products-' . esc_attr($post_id) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: ' . $wpgpsc_shortcode_color_brand . ';
    }';
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
        fill: #729850;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-rating-wrapper {
		width: 102px;
		height: 20px;
		overflow: hidden;
		position: relative;
	}';
}
if (!$wpgpsc_carousel_mode_on) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' div#gpsc-product-section-wrapper {
            display: grid;
            grid-template-columns: repeat( ' . $wpgpsc_product_columns . ', minmax(0, 1fr) );
            gap: ' . $wpgpsc_product_space_between . 'px;
            grid-auto-rows: max-content;
        }
    @media (max-width: 768px) {
        #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container-wrapper {
            display: block !important;
        }
        #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container:not(:last-child) {
            margin-bottom: 20px !important;
        }
    }
    @media (max-width: 768px) {
        #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-container-wrapper {
            grid-template-columns: repeat(2, minmax(0, 1fr) ) !important;
        }
    }';
}
if (!empty($wpgpsc_shortcode_slider_nav_colors['background'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next, #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev{
        background: ' . $wpgpsc_shortcode_slider_nav_colors['background'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_slider_pagination_colors['active'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_colors_atc_button['background'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-buy .product.woocommerce.add_to_cart_inline > a.button {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image .gpsc-product-sale {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-btn .product.woocommerce.add_to_cart_inline > a.button {
        color: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
        border: 1px solid ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
        box-shadow: 2px 2px 0px 0px ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-image span {
        background-color: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_colors_single_product['price'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' span.amount,
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product-price {
		color: ' . $wpgpsc_shortcode_colors_single_product['price'] . ' !important;
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-price {
        color: ' . $wpgpsc_shortcode_colors_single_product['price'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_color_border)) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product:hover {
        box-shadow: ' . $wpgpsc_shortcode_color_border . ' 0px 2px 4px, rgb(173 197 145 / 44%) 0px 2px 4px !important;
	}
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-highlight-product:hover {
        border: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
    }';
}
?>
</style>
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-main gpsc--product-slider-carousel"
    data-speed="<?php echo esc_attr($wpgpsc_shortcode_slider_speed); ?>"
    data-autoplay=<?php echo wp_json_encode($wpgpsc_shortcode_slider_autoplay); ?>
    data-loop="<?php echo esc_attr($wpgpsc_shortcode_slider_loop); ?>"
    data-row="<?php echo esc_attr(empty($wpgpsc_product_rows) ? 2 : $wpgpsc_product_rows); ?>"
    data-initialslide="<?php echo esc_attr($wpgpsc_shortcode_initial_slide); ?>"
    data-lazyload="<?php echo $wpgpsc_shortcode_lazy_load ? 'true' : 'false'; ?>"
    data-slidepergroup="<?php echo esc_attr($wpgpsc_shortcode_slides_per_group); ?>"
    data-grabcursor="<?php echo $wpgpsc_shortcode_grab_cursor ? 'true' : 'false'; ?>"
    data-spacebetween="<?php echo esc_attr($wpgpsc_product_space_between); ?>"
    data-responsivetop="<?php echo esc_attr($wpgpsc_slider_responsive['top']); ?>"
    data-responsiveright="<?php echo esc_attr($wpgpsc_slider_responsive['right']); ?>"
    data-responsivebottom="<?php echo esc_attr($wpgpsc_slider_responsive['bottom']); ?>"
    data-paginationtype="progressbar"
    data-module="<?php echo esc_attr($wpgpsc_module); ?>">
    <div class="gpsc-main-header">
        <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
                <h2 class="gpsc--section-title gpsc-title-<?php echo esc_attr($post_id); ?>">
            <?php echo esc_html(get_the_title($post_id)); ?>
            </h2>
        <?php endif; ?>
    </div>
    <div class="gpsc-product-section">
        <?php
        // Get external products limited to ones with specific IDs.
        $gpsc_hlighted_prod_args = array(
            'include' => array($gpsc_highlighted_product_id),
            'status' => 'publish',
            'visibility' => 'visible',
        );
        $gpsc_hlighted_product = wc_get_products($gpsc_hlighted_prod_args);
        $gpsc_hlighted_product_data = $gpsc_hlighted_product[0]->get_data();
        ?>
        <div class="gpsc-highlight-product">
        <?php if ($wpgpsc_highlighted_img && get_post_thumbnail_id($gpsc_highlighted_product_id)): ?>
            <div class="gpsc-highlight-product-image">
                        <?php
                        echo !empty($gpsc_hlighted_product_data['sale_price']) && $wpgpsc_sale_tag_show ? '<span>Sale</span>' : '';
                        echo '<a href="' . esc_url(get_permalink($gpsc_highlighted_product_id)) . '">';
                        if (get_post_thumbnail_id($gpsc_highlighted_product_id)) {

                            echo '<img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($gpsc_highlighted_product_id), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($gpsc_hlighted_product_data['name']) . '">';
                        }
                        echo '</a>';
                        ?>
                    </div>
            <?php endif; ?>
            <div class="gpsc-highlight-product-details-section-top">
            <?php if ($wpgpsc_highlighted_name): ?>
                        <a href="<?php echo esc_url(get_permalink($gpsc_highlighted_product_id)); ?>">
                <h3 class="gpsc-highlight-product-name">
                    <?php echo esc_html($gpsc_hlighted_product_data['name']); ?>
                </h3>
                </a>
            <?php endif; ?>
            <?php if ($wpgpsc_highlighted_excerpt): ?>
                <div class="gpsc-highlight-product-desc">
                    <?php echo wp_kses_post(wpautop($gpsc_hlighted_product_data['short_description'])); ?>
                </div>
            <?php endif; ?>
            <?php
            if ($gpsc_hlighted_product_data['reviews_allowed'] && $wpgpsc_highlighted_rating) {

                $gpsc_product_rating_percentage = (int) $gpsc_hlighted_product_data['average_rating'] * 2 . '0%';
                echo '<div class="gpsc-highlight-product-rating"><div class="gpsc-product-rating-wrapper"><div class="gpsc-star-rating" role="img" aria-label="Rated ' . $gpsc_hlighted_product_data['average_rating'] . ' out of 5" style="width:' . $gpsc_product_rating_percentage . '"></div></div></div>';

            }
            ?>
            <?php if ($wpgpsc_highlighted_price): ?>
                <div class="gpsc-highlight-product-price">
                            <?php
                            if (!empty($gpsc_hlighted_product_data['sale_price'])) {

                                echo '<del class="gpsc-highlight-product-regular-price">' . get_woocommerce_currency_symbol() . esc_html($gpsc_hlighted_product_data['sale_price']) . '</del>';

                            }
                            echo '<span class="gpsc-highlight-product-offer-price">' . get_woocommerce_currency_symbol() . $gpsc_hlighted_product_data['regular_price'] . '</span>';
                            ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($wpgpsc_highlighted_stock || $wpgpsc_highlighted_sku): ?>
            <div class="gpsc-highlight-product-details-section-bottom">
                <?php if ($wpgpsc_highlighted_stock): ?>
                    <div class="gpsc-highlight-product-stock">Availability: <strong>
                                    <?php echo esc_html($gpsc_hlighted_product_data['stock_status']); ?>
                                </strong>
                            </div>
                            <span></span>
                    <?php endif; ?>
                    <?php if ($wpgpsc_highlighted_sku): ?>
                            <div class="gpsc-highlight-product-sku">Sku: <strong>
                        <?php echo esc_html($gpsc_hlighted_product_data['sku']); ?>
                        </strong>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($wpgpsc_highlighted_btn): ?>
            <div class="gpsc-highlight-product-btn">
                <?php echo do_shortcode('[add_to_cart id="' . $gpsc_highlighted_product_id . '" show_price="FALSE"]'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="swiper gpsc-product-container-wrapper-main">
        <div class="swiper-wrapper gpsc-product-container-wrapper" id="gpsc-product-section-wrapper">
                <?php
                foreach ($gpsc_products->products as $product) {

                    $regular_price = (float) $product->get_regular_price();
			        $sale_price    = (float) $product->get_sale_price();

                    echo '<div class="' . $gpsc_swiper_slide . 'gpsc-product-container">
                <div class="gpsc-product">';

                    if ($wpgpsc_show_thumb && get_post_thumbnail_id($product->get_id())) {

                        echo '<div class="gpsc-product-image">
                        <a href="' . esc_url(get_permalink($product->get_id())) . '">';
                        if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_lazy_load) {

                            echo '<img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($product->get_title()) . '" loading="lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>';
                        } else {

                            echo '<img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($product->get_title()) . '">';
                        }
                        echo '</a>';
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
                    if ($wpgpsc_show_name) {

                        echo '<div class="gpsc-product-name"><a href="' . esc_url(get_permalink($product->get_id())) . '"><' . $wpgpsc_name_tag . ' class="gpsc-product-name-tag">' . esc_html($product->get_title()) . '</' . $wpgpsc_name_tag . '></a></div>';

                    }
                    if ($wpgpsc_show_price) {

                        echo '<div class="gpsc-product-price">' . wp_kses_post($product->get_price_html()) . '</div>';

                    }
                    echo '</div>
             </div>';
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
            <div class="gpsc-pagination swiper-pagination"></div>
        <?php endif; ?>
    </div>
</div>
<?php
if (!$wpgpsc_carousel_mode_on && $wpgpsc_pagination_show) {

    $gpsc_total_pages = $gpsc_products->total / $gpsc_args['limit'];
    $gpsc_paginate_arg = array(
        'current' => max(1, get_query_var('paged')),
        'total' => ceil($gpsc_total_pages),
    );

    echo '<div class="gpsc-product-pagination">' . paginate_links($gpsc_paginate_arg) . '</div>';
}
?>
</div>