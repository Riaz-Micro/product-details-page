<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Table
 * @subpackage GPSC_Product_Table/public/partials
 */


// Color Options.
$wpgpsc_shortcode_colors_section['background'] = empty($wpgpsc_shortcode_colors_section['background']) ? '#fff' : $wpgpsc_shortcode_colors_section['background'];
$wpgpsc_shortcode_colors_section['title'] = empty($wpgpsc_shortcode_colors_section['title']) ? '#333333' : $wpgpsc_shortcode_colors_section['title'];
$wpgpsc_shortcode_colors_single_product['background'] = empty($wpgpsc_shortcode_colors_single_product['background']) ? '#fff' : $wpgpsc_shortcode_colors_single_product['background'];
$wpgpsc_shortcode_colors_single_product['title'] = empty($wpgpsc_shortcode_colors_single_product['title']) ? '' : 'color:' . $wpgpsc_shortcode_colors_single_product['title'] . ';' ;
$wpgpsc_shortcode_colors_single_product['category'] = empty($wpgpsc_shortcode_colors_single_product['category']) ? '' : 'color:' . $wpgpsc_shortcode_colors_single_product['category'] . ';' ;
$wpgpsc_shortcode_colors_single_product['excerpt'] = empty($wpgpsc_shortcode_colors_single_product['excerpt']) ? '' : 'color:' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';' ;
$wpgpsc_shortcode_colors_single_product['tag'] = empty($wpgpsc_shortcode_colors_single_product['tag']) ? '#2E3C65' : $wpgpsc_shortcode_colors_single_product['tag'];
$wpgpsc_shortcode_colors_single_product['stock'] = empty($wpgpsc_shortcode_colors_single_product['stock']) ? '#2E3C65' : $wpgpsc_shortcode_colors_single_product['stock'];
$wpgpsc_shortcode_colors_single_product['price'] = empty($wpgpsc_shortcode_colors_single_product['price']) ? '#2E3C65' : $wpgpsc_shortcode_colors_single_product['price'];
$wpgpsc_shortcode_colors_atc_button['text'] = empty($wpgpsc_shortcode_colors_atc_button['text']) ? '#fff' : $wpgpsc_shortcode_colors_atc_button['text'];
$wpgpsc_color_stars_filled_encoded = urlencode($wpgpsc_shortcode_colors_stars['filled']);
$wpgpsc_color_stars_unfilled_encoded = urlencode($wpgpsc_shortcode_colors_stars['unfilled']);

// Typography Options.
$gpsc_section_title_ff = !empty($gpsc_shortcode_section_title_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_section_title_typo['font-family'] . ';' : '';
$gpsc_section_title_fs = !empty($gpsc_shortcode_section_title_typo['font-size']) ? $gpsc_shortcode_section_title_typo['font-size'] : '30';
$gpsc_section_title_lh = !empty($gpsc_shortcode_section_title_typo['line-height']) ? $gpsc_shortcode_section_title_typo['line-height'] : '32';
$gpsc_section_title_fw = !empty($gpsc_shortcode_section_title_typo['font-weight']) ? $gpsc_shortcode_section_title_typo['font-weight'] : '500';
$gpsc_section_title_ta = !empty($gpsc_shortcode_section_title_typo['text-align']) ? $gpsc_shortcode_section_title_typo['text-align'] : 'left';
$gpsc_section_title_tt = !empty($gpsc_shortcode_section_title_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_section_title_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_section_title_ls = !empty($gpsc_shortcode_section_title_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_section_title_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_name_ff = !empty($gpsc_shortcode_product_name_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_name_typo['font-family'] . ';' : '';
$gpsc_product_name_fs = !empty($gpsc_shortcode_product_name_typo['font-size']) ? $gpsc_shortcode_product_name_typo['font-size'] : '18';
$gpsc_product_name_lh = !empty($gpsc_shortcode_product_name_typo['line-height']) ? $gpsc_shortcode_product_name_typo['line-height'] : '20';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : '500';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_tt = !empty($gpsc_shortcode_product_name_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_name_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_excerpt_ff = !empty($gpsc_shortcode_product_excerpt_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_excerpt_typo['font-family'] . ';' : '';
$gpsc_product_excerpt_fs = !empty($gpsc_shortcode_product_excerpt_typo['font-size']) ? $gpsc_shortcode_product_excerpt_typo['font-size'] : '16';
$gpsc_product_excerpt_lh = !empty($gpsc_shortcode_product_excerpt_typo['line-height']) ? $gpsc_shortcode_product_excerpt_typo['line-height'] : '20';
$gpsc_product_excerpt_fw = !empty($gpsc_shortcode_product_excerpt_typo['font-weight']) ? $gpsc_shortcode_product_excerpt_typo['font-weight'] : '600';
$gpsc_product_excerpt_ta = !empty($gpsc_shortcode_product_excerpt_typo['text-align']) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'left';
$gpsc_product_excerpt_tt = !empty($gpsc_shortcode_product_excerpt_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_excerpt_typo['text-transform'] . ';' : '';
$gpsc_product_excerpt_ls = !empty($gpsc_shortcode_product_excerpt_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_excerpt_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_price_ff = !empty($gpsc_shortcode_product_price_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_price_typo['font-family'] . ';' : '';
$gpsc_product_price_fs = !empty($gpsc_shortcode_product_price_typo['font-size']) ? $gpsc_shortcode_product_price_typo['font-size'] : '18';
$gpsc_product_price_lh = !empty($gpsc_shortcode_product_price_typo['line-height']) ? $gpsc_shortcode_product_price_typo['line-height'] : '18';
$gpsc_product_price_fw = !empty($gpsc_shortcode_product_price_typo['font-weight']) ? $gpsc_shortcode_product_price_typo['font-weight'] : 'bold';
$gpsc_product_price_ta = !empty($gpsc_shortcode_product_price_typo['text-align']) ? $gpsc_shortcode_product_price_typo['text-align'] : 'center';
$gpsc_product_price_tt = !empty($gpsc_shortcode_product_price_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_price_typo['text-transform'] . ';' : '';
$gpsc_product_price_ls = !empty($gpsc_shortcode_product_price_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_price_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_btn_ff = !empty($gpsc_shortcode_product_btn_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_btn_typo['font-family'] . ';' : '';
$gpsc_product_btn_fs = !empty($gpsc_shortcode_product_btn_typo['font-size']) ? $gpsc_shortcode_product_btn_typo['font-size'] : '14';
$gpsc_product_btn_lh = !empty($gpsc_shortcode_product_btn_typo['line-height']) ? $gpsc_shortcode_product_btn_typo['line-height'] : '14';
$gpsc_product_btn_fw = !empty($gpsc_shortcode_product_btn_typo['font-weight']) ? $gpsc_shortcode_product_btn_typo['font-weight'] : '500';
$gpsc_product_btn_ta = !empty($gpsc_shortcode_product_btn_typo['text-align']) ? $gpsc_shortcode_product_btn_typo['text-align'] : 'center';
$gpsc_product_btn_tt = !empty($gpsc_shortcode_product_btn_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_btn_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_btn_ls = !empty($gpsc_shortcode_product_btn_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_btn_typo['letter-spacing'] . 'px;' : '';

// Get meta values.
$wpgpsc_show_cat_filter = wpgpsc_get_post_meta($post_id, 'wpgpsc_show_cat_filter');
$wpgpsc_show_search = wpgpsc_get_post_meta($post_id, 'wpgpsc_show_search');
$wpgpsc_show_sorting = wpgpsc_get_post_meta($post_id, 'wpgpsc_show_sorting');
$wpgpsc_header_sticky_on = wpgpsc_get_post_meta($post_id, 'wpgpsc_header_sticky_on');
$wpgpsc_column_sticky_on = wpgpsc_get_post_meta($post_id, 'wpgpsc_column_sticky_on');
$wpgpsc_column_sticky_which = wpgpsc_get_post_meta($post_id, 'wpgpsc_column_sticky_which');
$wpgpsc_show_child_row = wpgpsc_get_post_meta($post_id, 'wpgpsc_show_child_row');
$wpgpsc_child_row_data = wpgpsc_get_post_meta($post_id, 'wpgpsc_child_row_data');
$wpgpsc_show_col_search = wpgpsc_get_post_meta($post_id, 'wpgpsc_show_col_search');
$wpgpsc_show_table_footer = wpgpsc_get_post_meta($post_id, 'wpgpsc_show_table_footer');
$wpgpsc_pagination_show = wpgpsc_get_post_meta($post_id, 'wpgpsc_pagination_show');

// Query argument values.
$gpsc_args = array(
  'include' => ('hand-pick' === $wpgpsc_product_by) ? $wpgpsc_specific_product_selected : '',
  'limit' => $wpgpsc_product_limit,
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

// DataTable Arguments.
$gpsc_dtr_args = array(
  'page_length' => $wpgpsc_product_per_page,
  'search_col' => $wpgpsc_show_col_search,
  'data_sort' => $wpgpsc_show_sorting,
  'cat_filter' => $wpgpsc_show_cat_filter,
  'child_row' => $wpgpsc_show_child_row,
  'header_sticky' => $wpgpsc_header_sticky_on,
  'paging_show' => $wpgpsc_pagination_show,
  'col_sticky' => $wpgpsc_column_sticky_on,
  'sticky_which' => $wpgpsc_column_sticky_which,
);

$gpsc_products = wc_get_products($gpsc_args);

// Enqueues.
wp_enqueue_script('gpsc-data-table', GPSC_PLUG_DIR_URL_FILE . 'public/js/jquery.data-tables.min.js', array('jquery'), '1.10.21', false);
wp_enqueue_script('gpsc-dtbl-fixed-col', GPSC_PLUG_DIR_URL_FILE . 'public/js/data-tables.fixed-columns.min.js', array('gpsc-data-table'), '4.2.1', false);
wp_enqueue_script('gpsc-table-view', GPSC_PLUG_DIR_URL_FILE . 'public/js/gpsc-table-view.js', array('gpsc-dtbl-fixed-col'), GPSC_PLUG_VERSION, false);

echo '<style>
.gpsc-table-main p,
.gpsc-table-main h2,
.gpsc-table-main h3,
.gpsc-table-main h4,
.gpsc-table-main h5,
.gpsc-table-main h6 {
  margin: 0 !important;
  padding: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' table, td, th {
  border: transparent;
}
.gpsc-table-main .select2-container .select2-selection--single,
.gpsc-table-main input[type=color],
input[type=date],
.gpsc-table-main input[type=datetime-local],
.gpsc-table-main input[type=datetime],
.gpsc-table-main input[type=email],
.gpsc-table-main input[type=month],
.gpsc-table-main input[type=number],
.gpsc-table-main input[type=password],
.gpsc-table-main input[type=range],
.gpsc-table-main input[type=search],
.gpsc-table-main input[type=tel],
.gpsc-table-main input[type=text],
.gpsc-table-main input[type=time],
.gpsc-table-main input[type=url],
.gpsc-table-main input[type=week],
.gpsc-table-main select,
.gpsc-table-main textarea {
  height: auto;
  margin: 0;
  border: none;
  font-weight: normal;
}
.gpsc-table-main .woocommerce #respond input#submit,
.gpsc-table-main .woocommerce a.button,
.gpsc-table-main .woocommerce button.button,
.gpsc-table-main .woocommerce input.button,
.gpsc-table-main .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link,
.gpsc-table-main .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button,
.gpsc-table-main .woocommerce a.added_to_cart.wc-forward {
  border: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tr th {
  border: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-price del span.amount,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-price del {
  font-size: 90% !important;
  color: #918d8d !important;
  font-weight: normal !important;
}
#gpsc--products-' . esc_attr($post_id) . ' td.gpsc-product-price ins {
  background: none;
  text-decoration: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' p.product.woocommerce.add_to_cart_inline {
  border: transparent !important;
  padding: 0 !important;
  margin: 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' select,
.select2-container .select2-selection--single {
  -webkit-appearance: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' {
  width: 100%;
  max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
  margin: 10px auto;
  background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-wrapper{
  border-radius: 10px;
  padding: 30px 40px 70px;
  box-shadow: ' . $wpgpsc_shortcode_color_brand . ' 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc_disabled span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc_disabled span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc_disabled span,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc_disabled span {
  cursor: pointer;
  position: relative;
  padding-right: 26px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc_disabled span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc_disabled span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc_disabled span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc_disabled span:before {
  bottom: 50%;
  content: "▲";
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc span:after {
  opacity: 0.3;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc_disabled span :after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc_disabled span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc_disabled span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc_disabled span:after {
  top: 50%;
  content: "▼";
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc_disabled span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_asc_disabled span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc_disabled span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > th.sorting_desc_disabled span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc_disabled span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_asc_disabled span:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc_disabled span:before,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable thead > tr > td.sorting_desc_disabled span:after {
  position: absolute;
  right: 10px;
  line-height: 9px;
  font-size: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section {
  position: relative;
}
#gpsc--products-' . esc_attr($post_id) . ' .dataTables_filter {
  font-size: 16px;
  line-height: 18px;
  font-weight: 500;
  color: #000;
  position: absolute;
  right: 0;
  top: 0;
  display: none;
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
#gpsc--products-' . esc_attr($post_id) . ' th.gpsc-name-column {
  min-width: 200px;
}
#gpsc--products-' . esc_attr($post_id) . ' .dataTables_filter input {
  background-color: #f2f2f2;
  padding: 8px;
  border-radius: 5px;
  box-shadow: inset 0 1px 1px rgb(0 0 0 / 13%);
  color: #43454b;
  margin-left: 10px;
  width: auto;
  font-weight: normal;
  font-size: 16px;
  line-height: 16px;
  min-height: auto;
  display: initial;
  border: 1px solid #eaeaea;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table {
  margin-bottom: 15px;
  width: 100% !important;
  border-collapse: collapse!important;
  border-spacing: 0;
  box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
  table-layout: auto;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table tbody a:hover {
  color: #3A3A3A;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable thead tr th:first-child {
  padding-left: 15px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable thead tr th:last-child {
  padding-right: 15px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable tbody tr td:first-child {
  padding-left: 15px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable tbody tr td:last-child {
  padding-right: 15px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable th {
  text-align: center;
  padding: 12px 15px;
  font-size: 18px;
  line-height: 20px;
  color: #2E3C65;
  font-weight: 600;
  white-space: nowrap;
  background-color: #EBF0F2;
  vertical-align: middle;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable.gpsc-table-bordered thead tr th {
  border-top: 1px solid #E7E7E7;
  border-right: 1px solid #E7E7E7;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-bordered tbody tr td {
  border-bottom: 1px solid #E7E7E7 !important;
  border-right: 1px solid #E7E7E7 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable.gpsc-product-section .dataTable .sorting .gpsc-sorting-column {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td {
  padding: 10px 15px;
  text-align: center;
  vertical-align: middle;
  border: none;
  background-color: #F5F5F5;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable.table-striped>tbody>tr.odd>*,
#gpsc--products-' . esc_attr($post_id) . ' table.dataTable.display>tbody>tr.odd>* {
  background-color: #FAFAFA !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td:not(:last-child){
  border-bottom: 1px solid #E7E7E7;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td a {
  font-size: 18px;
  line-height: 20px;
  font-weight: normal;
  text-decoration: none !important;
}
td.gpsc-product-category a {
  ' . $wpgpsc_shortcode_colors_single_product['category'] . ';
  display: inline-block;
}
td.gpsc-product-category {
  ' . $wpgpsc_shortcode_colors_single_product['category'] . ';
  font-size: 18px;
}
td.gpsc-product-tags {
  color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ' !important;
}
td.gpsc-product-tags a {
  color: ' . $wpgpsc_shortcode_colors_single_product['tag'] . ' !important;
  display: inline-block;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section td.gpsc-product-image {
  position: relative;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image img {
  display: block;
  max-width: 100%;
  border-radius: 5px;
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-name-tag:hover {
  color: #3A3A3A;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-stock-content {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 5px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section td.gpsc-product-stock svg {
  height: 18px;
  width: 18px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section td.gpsc-product-stock span {
  font-size: 18px;
  line-height: 20px;
  white-space: normal;
  color: ' . $wpgpsc_shortcode_colors_single_product['stock'] . ';
}
span.woocommerce-Price-amount.amount,
td.gpsc-product-price {
  color: ' . $wpgpsc_shortcode_colors_single_product['price'] . ' !important;
  font-weight: ' . $gpsc_product_price_fw . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-price {
  ' . $gpsc_product_price_ff . ';
	font-size: ' . $gpsc_product_price_fs . 'px !important;
	line-height: ' . $gpsc_product_price_lh . 'px;
	font-weight: ' . $gpsc_product_price_fw . ';
	text-align: ' . $gpsc_product_price_ta . ' !important;
	' . $gpsc_product_price_tt . ';
	' . $gpsc_product_price_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-buy .product.woocommerce.add_to_cart_inline > a.button {
  padding: 9px 11px;
  background: ' . $wpgpsc_shortcode_color_brand . ' !important;
  min-width: 100px;
  border-width: 1px;
  border-style: solid;
  border-color: rgba(0, 0, 0, 0.2);
  color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
  border-radius: 5px;
  display: inline-block;
  transition: 0.5s;
  white-space: normal;
  word-wrap: break-word;
  margin: 0 !important;
  min-height: auto;
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
  background-color: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ' !important;
  color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
  cursor: pointer;
  box-shadow: none;
  text-decoration: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section a:focus,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section input:focus,
.gpsc-product-section textarea:focus,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section button:focus {
  outline: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td.gpsc-details-control {
  background: url("http://www.datatables.net/examples/resources/details_open.png") no-repeat center center;
  cursor: pointer;
  background-color: #F5F5F5;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr.shown td.gpsc-details-control {
  background: url("http://www.datatables.net/examples/resources/details_close.png") no-repeat center center;
  background-color: #F5F5F5;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td div.gpsc-child-row {
  color: #2E3C65;
  ' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ';
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td div.gpsc-child-row p {
  font-weight: normal;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-child-row.gpsc-slider {
  padding-left: 20px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider {
  display: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table.dataTable tbody td.no-padding {
  padding: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive {
  max-width: 100% !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-option {
  font-size: 12px;
  line-height: 14px;
  font-weight: 500;
  color: #000;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tr.filters input {
  line-height: 16px;
  font-size: 16px;
  padding: 6px 10px;
  width: 100px;
  background: #fff;
  border: 1px solid #d3d3d3;
  border-radius: 5px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section th.gpsc-name-column input {
  width: 200px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section thead input {
  width: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTables_scrollBody table {
  width: 100% !important; 
} 
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTables_scrollHeadInner table {
  width: 100% !important; 
  margin-bottom: 0 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive table.dataTable,
table.dataTable th,
table.dataTable td {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tfoot tr th {
  border-left: 1px solid #E7E7E7;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tfoot th.dtfc-fixed-left {
  border-left: 0  !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .dataTables_info {
  position: absolute;
  left: 2px;
  font-size: 18px;
  line-height: 18px;
  font-weight: normal;
  color: ' . $wpgpsc_shortcode_color_brand . ';
  bottom: -35px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive .dataTables_scrollBody select.gpsc-select {
  display: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive .dataTables_scrollHead {
  position: initial !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive .dataTables_scroll {
  position: initial !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tr.filters th.gpsc-child-row-th ,
.gpsc-product-section .dataTable tr.filters th.gpsc-sticky {
  border: 0 !important;
  outline: 1px solid #E7E7E7 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive span.gpsc-product-sale {
  position: absolute;
  display: inline-block;
  top: 20px;
  left: 0px;
  opacity: 0.8;
  border: 1px solid  ' . $wpgpsc_shortcode_color_brand . ';
  font-size: 9px;
  line-height: 9px;
  transform: rotate(-45deg);
  font-weight: bold;
  padding: 2px 4px;
  border-radius: 7px;
  margin: 0 auto;
  color:  ' . $wpgpsc_shortcode_color_brand . ';
}
@media (max-width: 404px) {
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-wrapper {
	  padding: 70px 40px 110px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' h2.gpsc--section-title {
	  margin: -50px 0px 45px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable thead tr th .gpsc-select {
	  top: -28px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_filter {
    top: 6px !important;
    left: 0 !important;
    float: none !important;
    margin-top: 5px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table {
	  margin-top: 25px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_info {
    font-size: 14px !important;
    line-height: 14px !important;
    bottom: -20px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . '  div.dataTables_paginate {
    left: 2px !important;
    white-space: nowrap !important;
    justify-content: left !important;
    flex-wrap: wrap !important;
    bottom: -85px !important;
    gap: 5px !important;
    font-size: 14px !important;
    line-height: 14px !important;
    margin-bottom: 18px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_paginate span {
	  gap: 5px !important;
  }
}
@media (min-width: 405px) and (max-width: 560px) {
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-wrapper {
	  padding: 70px 40px 110px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' h2.gpsc--section-title {
	  margin: -50px 0px 45px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable thead tr th .gpsc-select {
	  top: -28px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_filter {
    top: 6px !important;
    left: 0 !important;
    float: none !important;
    margin-top: 10px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table {
	  margin-top: 25px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_info {
    margin-bottom: 8px !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' div.dataTables_paginate {
    left: 2px !important;
    flex-wrap: nowrap!important;
    white-space: nowrap !important;
    bottom: -80px !important;
    justify-content: left !important;
    margin-bottom: 18px !important;
  }
}';
?>
<?php
if ($wpgpsc_header_sticky_on) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .dtfh-floatingparent.dtfh-floatingparenthead {
    top: 30px !important;
    z-index: 100 !important;
    font-size: 18px !important;
    line-height: 20px !important;
    font-weight: 600 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' td,
  #gpsc--products-' . esc_attr($post_id) . ' th {
    background: #ebf0f2;
  }
  tr.filters {
    display: none;
  }
  .dtfh-floatingparent.dtfh-floatingparenthead th {
    padding: 12px 15px !important;
  }
  .dtfh-floatingparent.dtfh-floatingparenthead th {
    font-weight: 600 !important;
    font-size: 18px !important;
  }
  .dtfh-floatingparent.dtfh-floatingparenthead .gpsc-details-control-th {
    left: 0 !important;
  }
  .dtfh-floatingparent.dtfh-floatingparenthead .gpsc-sticky {
    left: 46px !important;
  }
  .dtfh-floatingparent.dtfh-floatingparenthead .gpsc-sticky,
  .dtfh-floatingparent.dtfh-floatingparenthead .gpsc-details-control-th  {
    z-index: 999 !important;
    background-color: #EBF0F2 !important;
  }
  .gpsc-product-section .dtfh-floatingparent.dtfh-floatingparenthead .gpsc-product-section .dataTable th.gpsc-sticky,
  .gpsc-product-section .dtfh-floatingparent.dtfh-floatingparenthead .gpsc-product-section .dataTable th.gpsc-child-row-th {
    z-index: 999 !important;
  }
  table.fixedHeader-floating {
    background-color: #EBF0F2 !important;
    padding-bottom: 5px !important;
  }
  .dtfh-floatingparent.dtfh-floatingparenthead .gpsc-select,
  .gpsc-product-section .dataTable thead tr th .gpsc-select {
    display: none !important;
  }
  .dtfh-floatingparent.dtfh-floatingparenthead table {
    border-spacing: 0 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' tr.filters {
    display: none !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section table {
    margin-bottom: 0 !important;
  }';
}
if (!$wpgpsc_header_sticky_on) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive {
    overflow: hidden !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' div#gpsc-table_wrapper {
    overflow: auto;
    overflow-y: hidden;
    padding-right: 0px;
  }  
  div#gpsc-table_wrapper::-webkit-scrollbar {
    background-color: #F5F5F5;
    cursor: pointer !important;
    height: 10px;
  }
  div#gpsc-table_wrapper::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 5px grey;
    background-color: #F5F5F5;
    border-radius: 10px; 
    cursor: pointer !important;
  }
  div#gpsc-table_wrapper::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background: ' . $wpgpsc_shortcode_color_brand . ';
  }';
}
if ($wpgpsc_column_sticky_on && 'left' == $wpgpsc_column_sticky_which) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td.dtfc-fixed-left,
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable th.dtfc-fixed-left {
    border: 0 !important;
    outline: 1px solid #E7E7E7 !important;
    z-index: 99 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tr.filters th:nth-child(2) {
    position: sticky !important;
    z-index: 999 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tr.filters th:nth-child(1) {
    position: sticky !important;
    left: 0 !important;
    z-index: 999 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' th.dtfc-fixed-left {
    position: sticky !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tfoot th.dtfc-fixed-left {
    outline: 1px solid #E7E7E7 !important;
  }';
}
if ($wpgpsc_column_sticky_on && 'left' == $wpgpsc_column_sticky_which && $wpgpsc_show_col_search && $wpgpsc_show_child_row) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tr.filters th:nth-child(2) {
    left: 44px !important;
  }';
}
if ($wpgpsc_column_sticky_on && 'left' == $wpgpsc_column_sticky_which && !$wpgpsc_show_child_row) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tr.filters th:nth-child(2) {
    left: 130px !important;
  }';
}
if ($wpgpsc_column_sticky_on && 'right' == $wpgpsc_column_sticky_which) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td.dtfc-fixed-right,
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable th.dtfc-fixed-right {
    border: 0 !important;
    outline: 1px solid #E7E7E7 !important;
    z-index: 99 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tr.filters th:last-child {
    position: sticky !important;
    border: 0 !important;
    outline: 1px solid #E7E7E7 !important;
    z-index: 99 !important;
    right: 0 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' th.dtfc-fixed-right {
    background: #EBF0F2 !important;
    border: 0 !important;
    outline: 1px solid #E7E7E7 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tbody tr td.gpsc-details-control,
  #gpsc--products-' . esc_attr($post_id) . ' th.gpsc-details-control-th.gpsc-child-row-th,
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section tfoot th.dtfc-fixed-left {
    position: initial !important;
    z-index: 1 !important !important;
  }';
}
if ($wpgpsc_show_search || $wpgpsc_show_cat_filter) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive {
    padding-top: 50px !important;
  }';
}
if ($wpgpsc_show_search) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .dataTables_filter {
    display: block !important;
  }';
}
if (!$wpgpsc_show_col_search) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' tr.filters {
    display: none !important;
  }';
}
if ($wpgpsc_show_cat_filter) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-section .dataTable thead tr th .gpsc-select {
    border-radius: 5px;
    padding: 8px 30px 8px 8px;
    border: 1px solid #000;
    color: #000;
    font-weight: 500;
    font-size: 16px;
    line-height: 16px;
    position: absolute; 
    left: 0; 
    top: 0;
    width: auto;
    min-height: auto;
    background: url(data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%206l5%205%205-5%202%201-7%207-7-7%202-1z%22%20fill%3D%22%23555%22%2F%3E%3C%2Fsvg%3E) no-repeat;
    background-position: center right 5px;
    filter: brightness(0.5);
    cursor: pointer;
  }';
}
if ($wpgpsc_pagination_show) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .dataTables_paginate span {
    display: flex;
    flex-direction: row;
    gap: 10px;
    text-decoration: none !important;
    color: #2E3C65;
    line-height: 26px;
    font-weight: 500;
    transition: 0.5s;
  }
  #gpsc--products-' . esc_attr($post_id) . ' div.dataTables_paginate {
    position: absolute;
    right: 2px;
    display: flex;
    flex-direction: row;
    gap: 10px;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    line-height: 18px;
    font-weight: 500;
    bottom: -40px;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_paginate span a {
    display: inline-block;
    height: 28px;
    width: 28px;
    text-align: center;
    background-color: ' . $wpgpsc_shortcode_color_brand . ';
    border-width: 1px;
    border-style: solid;
    border-color: ' . $wpgpsc_shortcode_color_brand . ';
    color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
    border-radius: 5px;
    transition: 0.5s;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_paginate span a:hover, 
  .dataTables_paginate span a.current {
    background-color: transparent;
    border-width: 1px;
    border-style: solid;
    border-color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
    color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
    cursor: pointer;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_paginate a {
    text-decoration: none !important;
    color: ' . $wpgpsc_shortcode_color_brand . ';
  }
  #gpsc--products-' . esc_attr($post_id) . ' .dataTables_paginate a:hover {
    color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
    cursor: pointer;
    text-decoration: none !important;
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
		background-image: url("data:image/svg+xml,%3Csvg viewBox=\'0 0 304 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'m181.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 7-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 0.9 2.7 2.3z\' fill=\'' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m121 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0 2.4 0.9 2.8 2.2z\' fill=\'' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m303 26.4-13.2 11.6 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 1 2.8 2.2s0.1 2.6-0.8 3.3z\' fill=\'' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m242.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.5 0.1 2.5 0.9 2.9 2.3z\' fill=\'' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m60.1 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3s-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0.1 2.5 1 2.8 2.3z\' fill=\'' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3C/svg%3E");
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-rating-wrapper {
		width: 102px;
		height: 20px;
		overflow: hidden;
		position: relative;
	}';
}
if (!empty($wpgpsc_shortcode_slider_pagination_colors['active'])) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .dataTables_paginate span a {
    background-color: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
    border-color: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
    color: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ' !important;
  }
    div#gpsc-table_wrapper::-webkit-scrollbar-thumb {
      background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
    }
#gpsc--products-' . esc_attr($post_id) . ' .dataTables_paginate a, 
#gpsc--products-' . esc_attr($post_id) . ' .dataTables_info {
  color: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
}';
}
if (!empty($wpgpsc_shortcode_colors_atc_button['background'])) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-buy .product.woocommerce.add_to_cart_inline > a.button {
  background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-table-responsive span.gpsc-product-sale {
  border: 1px solid  ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
  color: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
}';
}
if (!empty($wpgpsc_shortcode_color_border)) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-wrapper {
  box-shadow: ' . $wpgpsc_shortcode_color_border . ' 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px !important;
}';
}
?>
</style>
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-table-main"
  data-tbl-args="<?php echo esc_attr(wp_json_encode($gpsc_dtr_args)); ?>">
  <div class="gpsc-wrapper">
    <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
      <h2 class="gpsc--section-title gpsc-title-<?php echo esc_attr($post_id); ?>"><?php echo esc_html(get_the_title($post_id)); ?></h2>
    <?php endif; ?>
    <div class="gpsc-product-section">
      <div class="gpsc-table-responsive" id="gpsc-table-responsive">
        <table id="gpsc-table" class="gpsc-table table-striped table-bordered dataTable gpsc-table-bordered"
          style="width:100%">
          <thead>
            <tr>
              <?php
              if ($wpgpsc_show_child_row) {
                echo '<th class="gpsc-details-control-th gpsc-child-row-th no-sort"><svg style="width: 14px;height: 14px;fill: gray;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"><path d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z"/></svg></th>';
              }
              if ($wpgpsc_show_thumb) {
                echo '<th class="no-sort gpsc-sticky gpsc-image">Image</th>';
              }
              if ($wpgpsc_show_name) {
                echo '<th class="gpsc-name-column"><div class="gpsc-sorting-column"><span>Name</span></div></th>';
              }
              if ($wpgpsc_show_category) {
                echo '<th class="gpsc-category"><div class="gpsc-sorting-column "><span>Categories</span></div></th>';
              }
              if ($wpgpsc_show_tag) {
                echo '<th class="no-sort gpsc-tags"><span>Tags</span></th>';
              }
              if ($wpgpsc_star_rating_show) {
                echo '<th class="no-sort gpsc-reviews"><span>Reviews</span></th>';
              }
              if ($wpgpsc_show_stock_status) {
                echo '<th class="no-sort gpsc-stock"><span>Stock Status</span></th>';
              }
              if ($wpgpsc_show_price) {
                echo '<th class="gpsc-price"><div class="gpsc-sorting-column"><span>Price</span></div></th>';
              }
              if ($wpgpsc_show_button) {
                echo '<th class="no-sort gpsc-buy"><span>Buy</span></th>';
              }
              echo '</tr>
          </thead>
          <tbody>';
              foreach ($gpsc_products->products as $product) {

                $regular_price = (float) $product->get_regular_price();
			          $sale_price    = (float) $product->get_sale_price();

                if ($wpgpsc_show_child_row) {

                  if ('attr' !== $wpgpsc_child_row_data) {

                    echo $wpgpsc_show_short_desc ? '<tr data-child-value="' . wp_kses_post(wpautop($product->get_short_description())) . '">' : '';

                  } else {

                    $wpgpsc_all_attr = $product->get_attributes();
                    echo '<tr class="gpsc-child-attr-data"><td><table>';
                    foreach ($wpgpsc_all_attr as $attribute) {
                      echo '<tr>';
                      echo '<td>' . $attribute->get_name() . '</td>';
                      echo '<td>' . implode(', ', $attribute->get_options()) . '</td>';
                      echo '</tr>';
                    }
                    echo '</table></td></tr>';
                  }

                  echo '<td class="gpsc-details-control"></td>';
                }

                if ($wpgpsc_show_thumb) {

                  if (get_post_thumbnail_id($product->get_id())) {

                    echo '<td class="gpsc-product-image gpsc-sticky"><a href="' . esc_url(get_permalink($product->get_id())) . '"><img src="' . esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), $wpgpsc_thumb_size)[0]) . '" alt="' . esc_html($product->get_title()) . '"></a>';
                  } else {

                    echo '<td class="gpsc-product-image">';
                  }

                  if ($product->is_on_sale() && !empty($product->get_sale_price()) && $wpgpsc_sale_tag_show) {

                    if ('percent-tag' === $wpgpsc_sale_tag_type) {

                      echo '<span class="gpsc-product-sale">SALE (- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%)</span>';
                    } elseif ('percent' === $wpgpsc_sale_tag_type) {

                      echo '<span class="gpsc-product-sale">- ' . (int) round(($regular_price - $sale_price) / $regular_price * 100, 2) . '%</span>';
                    } else {

                      echo '<span class="gpsc-product-sale">SALE</span>';
                    }
                  }
                  echo '</td>';
                }
                if ($wpgpsc_show_name) {

                  echo '<td class="gpsc-product-name"><a href="' . esc_url(get_permalink($product->get_id())) . '"><' . $wpgpsc_name_tag . ' class="gpsc-product-name-tag">' . esc_html($product->get_title()) . '</' . $wpgpsc_name_tag . '></a></td>';

                }
                if ($wpgpsc_show_category) {

                  echo '<td class="gpsc-product-category">';

                  $gpsc_categories = array();
                  foreach ($product->get_category_ids() as $category_id) {

                    $category_term = get_term_by('id', $category_id, 'product_cat');
                    $category_name = $category_term->name;
                    $category_link = get_term_link($category_id);
                    $gpsc_categories[] = '<a href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a>';
                  }
                  echo wp_kses_post(implode(', ', $gpsc_categories));
                  echo '</td>';
                }
                if ($wpgpsc_show_tag) {

                  echo '<td class="gpsc-product-tags">';
                  $gpsc_tags = array();
                  foreach ($product->get_tag_ids() as $tag_id) {

                    $tag_term = get_term_by('id', $tag_id, 'product_tag');
                    $tag_name = $tag_term->name;
                    $tag_link = get_term_link($tag_id);
                    $gpsc_tags[] = '<a href="' . esc_url($tag_link) . '">' . esc_html($tag_name) . '</a>';
                  }
                  echo !empty(wp_kses_post(implode(', ', $gpsc_tags))) ? wp_kses_post(implode(', ', $gpsc_tags)) : 'N/A';
                  echo '</td>';

                }
                if ($product->get_reviews_allowed() && $wpgpsc_star_rating_show) {

                  $gpsc_product_rating_percentage = (int) $product->get_average_rating() * 2 . '0%';
                  echo '<td class="gpsc-product-review"><div class="gpsc-product-rating-wrapper"><div class="gpsc-star-rating" role="img" aria-label="Rated ' . $product->get_average_rating() . ' out of 5" style="width:' . $gpsc_product_rating_percentage . '"></div></div></td>';

                }
                if ($wpgpsc_show_stock_status) {

                  echo '<td class="gpsc-product-stock">';
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
                  echo '</td>';

                }
                if ($wpgpsc_show_price) {

                  echo '<td class="gpsc-product-price">' . wp_kses_post($product->get_price_html()) . '</td>';

                }
                echo '</td>';
                if ($wpgpsc_show_button) {

                  echo '<td class="gpsc-product-buy">';
                  echo do_shortcode('[add_to_cart id="' . $product->get_id() . '" show_price="FALSE"]');
                  echo ' </td>';

                }
                echo '</tr>';
              }
              echo '</tbody>
      <tfoot>';
              if ($wpgpsc_show_table_footer) {

                echo '<tr>';
                if ($wpgpsc_show_child_row) {
                  echo '<th></th>';
                }
                if ($wpgpsc_show_thumb) {
                  echo '<th>Image</th>';
                }
                if ($wpgpsc_show_name) {
                  echo '<th>Name</th>';
                }
                if ($wpgpsc_show_category) {
                  echo '<th>Category</th>';
                }
                if ($wpgpsc_show_tag) {
                  echo '<th>Tags</th>';
                }
                if ($wpgpsc_star_rating_show) {
                  echo '<th>Reviews</th>';
                }
                if ($wpgpsc_show_stock_status) {
                  echo '<th>Stock Status</th>';
                }
                if ($wpgpsc_show_price) {
                  echo '<th>Price</th>';
                }
                if ($wpgpsc_show_button) {
                  echo '<th>Buy</th>';
                }
                echo '</tr>';

              }
              echo '</tfoot>
        </table>
      </div>
    </div>';
              ?>
      </div>
    </div>

    <?php
    if ('1' == $wpgpsc_header_sticky_on) {
      ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-fixedheader/3.3.1/dataTables.fixedHeader.min.js"
        defer></script>
      <?php
    }
    ?>