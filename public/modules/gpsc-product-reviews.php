<?php

/**
 * Module : Reviews.
 *
 * This file is used to markup the public-facing aspects of the review module.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Review
 * @subpackage GPSC_Review
 */

// Appearance.
$wpgpsc_word_count_number = empty($wpgpsc_word_count_number) ? '14' : $wpgpsc_word_count_number;

$wpgpsc_show_reviewer_img = wpgpsc_get_post_meta($post_id, 'wpgpsc_show_reviewer_img');
$wpgpsc_reviewer_txt_show = wpgpsc_get_post_meta($post_id, 'wpgpsc_review_txt_show');
$wpgpsc_reviewer_txt_fixed_height = wpgpsc_get_post_meta($post_id, 'wpgpsc_review_txt_fixed_height');
$wpgpsc_reviewer_date_show = wpgpsc_get_post_meta($post_id, 'wpgpsc_review_date_show');
$wpgpsc_review_time_show = wpgpsc_get_post_meta($post_id, 'wpgpsc_review_time_show');
$wpgpsc_5_star_reviews = wpgpsc_get_post_meta($post_id, 'wpgpsc_5_star_reviews');
$wpgpsc_review_cat_selection = wpgpsc_get_post_meta($post_id, 'wpgpsc_product_review_cat_selection');
$wpgpsc_review_limit = wpgpsc_get_post_meta($post_id, 'wpgpsc_review_limit');
$wpgpsc_review_ids = wpgpsc_get_post_meta($post_id, 'wpgpsc_review_ids');

// Color Options.
$wpgpsc_shortcode_colors_section['background'] = empty($wpgpsc_shortcode_colors_section['background']) ? '#f0f0f0' : $wpgpsc_shortcode_colors_section['background'];
$wpgpsc_shortcode_colors_section['title'] = empty($wpgpsc_shortcode_colors_section['title']) ? '#333333' : $wpgpsc_shortcode_colors_section['title'];
$wpgpsc_shortcode_colors_single_product['background'] = empty($wpgpsc_shortcode_colors_single_product['background']) ? '#fff' : $wpgpsc_shortcode_colors_single_product['background'];
$wpgpsc_shortcode_colors_single_product['excerpt'] = empty($wpgpsc_shortcode_colors_single_product['excerpt']) ? '#646363' : $wpgpsc_shortcode_colors_single_product['excerpt'];
$wpgpsc_color_stars_filled_encoded = urlencode($wpgpsc_shortcode_colors_stars['filled']);
$wpgpsc_color_stars_unfilled_encoded = urlencode($wpgpsc_shortcode_colors_stars['unfilled']);

// Typography Options.
$gpsc_section_title_ff = !empty($gpsc_shortcode_section_title_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_section_title_typo['font-family'] . ';' : '';
$gpsc_section_title_fs = !empty($gpsc_shortcode_section_title_typo['font-size']) ? $gpsc_shortcode_section_title_typo['font-size'] : '26';
$gpsc_section_title_lh = !empty($gpsc_shortcode_section_title_typo['line-height']) ? $gpsc_shortcode_section_title_typo['line-height'] : '30';
$gpsc_section_title_fw = !empty($gpsc_shortcode_section_title_typo['font-weight']) ? $gpsc_shortcode_section_title_typo['font-weight'] : '500';
$gpsc_section_title_tt = !empty($gpsc_shortcode_section_title_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_section_title_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_section_title_ta = !empty($gpsc_shortcode_section_title_typo['text-align']) ? $gpsc_shortcode_section_title_typo['text-align'] : 'left';
$gpsc_section_title_ls = !empty($gpsc_shortcode_section_title_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_section_title_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_name_ff = !empty($gpsc_shortcode_product_name_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_name_typo['font-family'] . ';' : '';
$gpsc_product_name_fs = !empty($gpsc_shortcode_product_name_typo['font-size']) ? $gpsc_shortcode_product_name_typo['font-size'] : '16';
$gpsc_product_name_lh = !empty($gpsc_shortcode_product_name_typo['line-height']) ? $gpsc_shortcode_product_name_typo['line-height'] : '16';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_tt = !empty($gpsc_shortcode_product_name_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_name_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_excerpt_ff = !empty($gpsc_shortcode_product_excerpt_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_excerpt_typo['font-family'] . ';' : '';
$gpsc_product_excerpt_fs = !empty($gpsc_shortcode_product_excerpt_typo['font-size']) ? $gpsc_shortcode_product_excerpt_typo['font-size'] : '16';
$gpsc_product_excerpt_lh = !empty($gpsc_shortcode_product_excerpt_typo['line-height']) ? $gpsc_shortcode_product_excerpt_typo['line-height'] : '24';
$gpsc_product_excerpt_fw = !empty($gpsc_shortcode_product_excerpt_typo['font-weight']) ? $gpsc_shortcode_product_excerpt_typo['font-weight'] : '500';
$gpsc_product_excerpt_ta = !empty($gpsc_shortcode_product_excerpt_typo['text-align']) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'center';
$gpsc_product_excerpt_tt = !empty($gpsc_shortcode_product_excerpt_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_excerpt_typo['text-transform'] . ';' : '';
$gpsc_product_excerpt_ls = !empty($gpsc_shortcode_product_excerpt_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_excerpt_typo['letter-spacing'] . 'px;' : '';

if ($wpgpsc_carousel_mode_on) {

	wp_enqueue_style($this->plugin_name . 'swiper');
	wp_enqueue_script($this->plugin_name . 'swiper');
	wp_enqueue_script($this->plugin_name);
}

// Comment arguments.
$gpsc_comment_args = array(
	'post_type' => 'product',
	'post_status' => 'publish',
	'status' => 'approve',
);

// Specific product reviews.
if (!empty($wpgpsc_specific_product_selected)) {

	$gpsc_comment_args += array(
		'post_id' => $wpgpsc_specific_product_selected,
	);
}

// IF only 5 stars.
if ($wpgpsc_5_star_reviews) {

	$gpsc_comment_args['meta_query'] = array(
		array(
			'key' => 'rating',
			'value' => 5,
			'compare' => '=',
			'type' => 'NUMERIC',
		),
	);
}

// Only specific categories of product reviews.
if (!empty($wpgpsc_review_cat_selection)) {

	$gpsc_comment_args['meta_query'] = array(
		array(
			'key' => 'product_cat',
			'value' => $wpgpsc_review_cat_selection,
			'compare' => 'IN',
		),
	);
}

// If limit.
if (!empty($wpgpsc_review_limit)) {

	$gpsc_comment_args['number'] = $wpgpsc_review_limit;
}

// If selected.
if (!empty($wpgpsc_review_ids)) {

	$gpsc_comment_args['comment__in'] = explode(',', $wpgpsc_review_ids);
}

// Get comments.
$gpsc_product_comm = get_comments($gpsc_comment_args);

// Review Arguments for Attributes.
$gpsc_review_args = array(
	'review_column' => $wpgpsc_product_columns,
	'review_gap' => $wpgpsc_product_space_between,
	'slider_speed' => $wpgpsc_shortcode_slider_speed,
	'slider_autoplay' => $wpgpsc_shortcode_slider_autoplay,
	'slider_loop' => $wpgpsc_shortcode_slider_loop,
	'pagination_type' => $wpgpsc_shortcode_slider_pagination_type,
);

if ($wpgpsc_carousel_mode_on) {
	$gpsc_swiper_slide = 'swiper-slide ';
} else {
	$gpsc_swiper_slide = "";
}
echo '<style>
.gpsc-main-reviews p,
.gpsc-main-reviews h2,
.gpsc-main-reviews h3,
.gpsc-main-reviews h4,
.gpsc-main-reviews h5,
.gpsc-main-reviews h6 {
	margin: 0 !important;
	padding: 0;
}
html.colibri-wp-theme .gpsc-main-reviews div:not(.gpsc-product-rating-wrapper):before,
html.colibri-wp-theme .gpsc-main-reviews div:not(.gpsc-star-rating):not(.gpsc-slider-btn-next):not(.gpsc-slider-btn-prev):after {
  	display: none !important;
}
#gpsc--products-review-' . esc_attr($post_id) . ' a, #gpsc--products-review-' . esc_attr($post_id) . ' a:active, #gpsc--products-review-' . esc_attr($post_id) . 'a:hover, #gpsc--products-review-' . esc_attr($post_id) . ' a:focus {
    color: ' . $wpgpsc_shortcode_color_brand . ' !important;
	text-decoration: none !important;
    font-style: normal !important;
	outline: 0 !important;
	cursor: pointer;
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-star-rating {
    position: relative;
    line-height: 1.618;
    font-size: 1em;
    z-index: 999;
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-star-rating span {
    overflow: hidden;
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    padding-top: 1.5em;
    color: #2c2d33;
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-rating-wrapper:before,
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-star-rating:after {
    position: absolute;
    top: 0;
    left: 0;
    content: "";
    height: 16px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: left center;
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-rating-wrapper:before {
    width: 100%;
    z-index: 1;
    background-image: url("data:image/svg+xml,%3Csvg viewBox=\'0 0 304 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'m181.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 7-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 0.9 2.7 2.3z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m121 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0 2.4 0.9 2.8 2.2z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m303 26.4-13.2 11.6 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 1 2.8 2.2s0.1 2.6-0.8 3.3z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m242.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.5 0.1 2.5 0.9 2.9 2.3z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3Cpath d=\'m60.1 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3s-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0.1 2.5 1 2.8 2.3z\' fill=\' ' . $wpgpsc_color_stars_unfilled_encoded . '\'/%3E%3C/svg%3E");
    filter: drop-shadow(0px 1px 0px gray);
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-star-rating:after {
    width: 100%;
    z-index: 2;
    background-image: url("data:image/svg+xml,%3Csvg viewBox=\'0 0 304 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'m181.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 7-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 0.9 2.7 2.3z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m121 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0 2.4 0.9 2.8 2.2z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m303 26.4-13.2 11.6 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.3 0.1 2.4 1 2.8 2.2s0.1 2.6-0.8 3.3z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m242.9 23.2c0.4 1.2 0 2.6-0.9 3.4l-13.2 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3-1.1 0.8-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.5c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.2c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.5 0.1 2.5 0.9 2.9 2.3z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3Cpath d=\'m60.1 23.1c0.4 1.2 0 2.6-0.9 3.4l-13.1 11.5 3.8 17c0.3 1.2-0.2 2.5-1.2 3.3s-2.5 0.9-3.6 0.2l-15-8.9-15 8.9c-0.5 0.3-1.1 0.5-1.6 0.5s-1.2-0.2-1.8-0.6c-1.1-0.7-1.5-2-1.2-3.3l3.8-17-13.2-11.6c-1-0.8-1.3-2.1-1-3.4 0.5-1.2 1.5-2.1 2.8-2.2l17.4-1.6 6.8-16.1c0.6-1.2 1.7-1.9 3-1.9s2.5 0.8 3 1.9l6.8 16.1 17.4 1.5c1.4 0.1 2.5 1 2.8 2.3z\' fill=\' ' . $wpgpsc_color_stars_filled_encoded . '\'/%3E%3C/svg%3E");
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-rating-wrapper {
    width: 81px;
    height: 17px;
    overflow: hidden;
    position: relative;
	margin: auto;
}
.gpsc-client-image img {
    display: block;
    border-radius: 50%;
    border: none !important;
    background-color: #708090c2;
    margin: -20px 0 0 0 !important;
	box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
}
.comment-author.vcard {
    padding-top: 15px;
}
#gpsc--products-review-' . esc_attr($post_id) . ' .comment-body {
    position: relative;
    border-bottom: none;
    margin-bottom: 10px;
    color: ' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';
	padding-top: 15px;
	' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ';
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-slide {
    height: auto !important;
}
#gpsc--products-review-' . esc_attr($post_id) . ' p.gpsc-review-time {
    font-size: 14px;
    line-height: 18px;
    font-weight: lighter;
    color: ' . $wpgpsc_shortcode_color_brand . ';
	padding-bottom: 15px;
}
#gpsc--products-review-' . esc_attr($post_id) . ' .comment-body p:last-child {
    margin-bottom: 0 !important;
}
#gpsc--products-review-' . esc_attr($post_id) . ' {
	position: relative;
	background-color: ' . $wpgpsc_shortcode_colors_section['background'] . ';
	padding: 30px;
	max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
	margin: 0 auto;
}
#gpsc--products-review-' . esc_attr($post_id) . ' h2.gpsc--section-title {
    color: ' . $wpgpsc_shortcode_colors_section['title'] . ' !important;
	' . $gpsc_section_title_ff . ';
	font-size: ' . $gpsc_section_title_fs . 'px;
	line-height: ' . $gpsc_section_title_lh . 'px;
	font-weight: ' . $gpsc_section_title_fw . ';
	' . $gpsc_section_title_tt . ';
	' . $gpsc_section_title_ls . ';
	margin-bottom: ' . $wpgpsc_section_title_margin_bottom['width'] . 'px !important;
	text-align: ' . $gpsc_section_title_ta . ';
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-client-name {
	margin-bottom: 6px;
	' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px !important;
	font-weight: ' . $gpsc_product_name_fw . ';
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
}
#gpsc--products-review-' . esc_attr($post_id) . '.gpsc-client-name a {
    text-align: center;
	color: ' . $wpgpsc_shortcode_color_brand . ' !important;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
	text-decoration: none;
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-main-reviews .comment-meta {
    position: relative;
    margin-left: 0;
    font-size: 13px;
    color: #000;
}
#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-review-slider {
	padding: 0 20px;
	border-radius: 10px;
	font-size: 18px;
	background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
	display: flex;
	flex-direction: column;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
	height: 100%;
	box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}';
?>
<?php
if (!$wpgpsc_carousel_mode_on) {
	echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-reviews {
		display: grid;
		grid-template-columns: repeat( ' . $wpgpsc_product_columns . ', minmax(0, 1fr) );
		gap: ' . $wpgpsc_product_space_between . 'px;
	}
	@media (max-width: 500px) {
		#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-reviews {
			display: block;
		}
		#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-review-slider {
			margin-bottom: 20px;
		}
	}
	@media (max-width: 767px) {
		#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-reviews {
			grid-template-columns: repeat(2, minmax(0, 1fr) );
		}
	}';
}
if ($wpgpsc_show_reviewer_img) {
	echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-reviews {
		padding-top: 20px !important;
		padding-bottom: 10px !important;
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-review-wrapper {
		padding: 0 5px;
	}';
}
if ((!empty(get_the_title($post_id)) && $wpgpsc_section_title_show) || $wpgpsc_shortcode_slider_navigation || $wpgpsc_show_reviewer_img) {
	echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-next::after, #gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev::after {
		display: none !important;
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-next svg, #gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev svg {
		height: 18px;
		width: 18px;
	}';
}
if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_navigation && $wpgpsc_show_reviewer_img) {
	echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn {
		right: 5px !important;
	}';
}
if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_navigation) {
	echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-review-wrapper {
		width: 100%;
		height: 100%;
		padding: 5px;
  	}
	  #gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-review-wrapper {
		padding-top: 55px !important;
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' h2.gpsc--section-title {
		position: absolute;
		top: 0;
		left: 10px;
	}
	  #gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-product-reviews {
		display: flex;
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn {
		top: 25px;
		right: 0;
		position: absolute;
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-next svg,
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev svg {
		fill: ' . $wpgpsc_shortcode_slider_nav_colors['icon'] . ';
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-next,
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
		background-color: ' . $wpgpsc_shortcode_color_brand . ';
		border: 1px solid ' . $wpgpsc_shortcode_slider_nav_colors['icon'] . ';
		width: 35px;
		height: 35px;
		outline: 0;
		right: 0;
		transition: .5s;
		box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
		border-radius: 2px;
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
		left: -78px !important;
    	right: auto !important;
		transform: rotate(180deg);
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev:hover,
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-next:hover {
		background-color: ' . $wpgpsc_shortcode_slider_nav_colors['background-hover'] . ' !important;
		border: 1px solid ' . $wpgpsc_shortcode_slider_nav_colors['icon-hover'] . ' !important;
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev:hover svg,
	#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-next:hover svg {
		fill: ' . $wpgpsc_shortcode_slider_nav_colors['icon-hover'] . ' !important;
	}';
}
if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_pagination) {

	echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-review-wrapper  {
			padding-bottom: 50px !important;
			}
			#gpsc--products-review-' . esc_attr($post_id) . ' {
				padding-bottom: 0 !important;
			}';

	if ('bullets' === $wpgpsc_shortcode_slider_pagination_type) {

		// Common for bullets.
		echo '#gpsc--products-review-' . esc_attr($post_id) . '.gpsc--product-slider-carousel .swiper-pagination-bullets .swiper-pagination-bullet:before {
					border: none !important;
				}
				#gpsc--products-review-' . esc_attr($post_id) . '.gpsc--product-slider-carousel .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active:after {
					border-top: none !important;
				}
				#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet-active {
					background-color: ' . $wpgpsc_shortcode_color_brand . ' !important;
				}
				#gpsc--products-review-' . esc_attr($post_id) . '.gpsc--product-slider-carousel .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
					vertical-align: middle;
				}
				#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet {
					width: 14px;
					height: 14px;
					background: ' . $wpgpsc_shortcode_slider_pagination_colors['background'] . ';
					opacity: 1 !important;
				}';

		if ('pag-1' === $wpgpsc_shortcode_slider_selected_pagin) {

			echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination {
						bottom: 15px !important;
					}
					#gpsc--products-review-' . esc_attr($post_id) . '.gpsc--product-slider-carousel .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
					#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
						margin: 0 3px !important;
					}';
		}
		if ('pag-2' === $wpgpsc_shortcode_slider_selected_pagin) {

			echo '#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
					transform: scale(1) !important;
				}';
		}
		if ('pag-3' === $wpgpsc_shortcode_slider_selected_pagin) {

			echo '#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
					border: 0 !important;
				}
				#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet {
					border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
				}
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
					transform: scale(1) !important;
					margin: 0px 5px;
				}';
		}
		if ('pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {

			echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination-wrapper {
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
				#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet {
					border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
				}
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-container {
					padding-bottom: 60px;
				}
				#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination {
					bottom: 0 !important;
					top: 0;
					margin: 2px 0 !important;
					padding: 1px !important;
				}
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
					transform: scale(1) !important;
				}';
		}
		if ('pag-6' === $wpgpsc_shortcode_slider_selected_pagin) {

			echo '#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
					border-radius: 0;
					transform: scale(1) !important;
				}';
		}
		if ('pag-7' === $wpgpsc_shortcode_slider_selected_pagin) {

			echo '#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
					height: 24px !important;
					width: 24px !important;
					border-radius: 0;
					color: #fff !important;
					display: inline-flex;
					align-items: center;
					justify-content: center;
				}
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet,
				#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
					transform: scale(1) !important;
				}';
		}
	}
	if ('progressbar' === $wpgpsc_shortcode_slider_pagination_type) {
		echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination {
				top: auto;
				bottom: 0 !important;
			}
			#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
				background: ' . $wpgpsc_shortcode_color_brand . ';
			}';
	}
}
if (!empty($wpgpsc_shortcode_slider_nav_colors['background'])) {
	echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-next, #gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
        background: ' . $wpgpsc_shortcode_slider_nav_colors['background'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_colors_single_product['title'])) {
	echo '#gpsc--products-review-' . esc_attr($post_id) . ' a, #gpsc--products-review-' . esc_attr($post_id) . ' a:active, #gpsc--products-review-' . esc_attr($post_id) . 'a:hover, #gpsc--products-review-' . esc_attr($post_id) . ' a:focus,
	#gpsc--products-review-' . esc_attr($post_id) . ' p.gpsc-review-time {
		color: ' . $wpgpsc_shortcode_colors_single_product['title'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_slider_pagination_colors['active'])) {
	echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet-active {
		background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
	}
	#gpsc--products-review-' . esc_attr($post_id) . ' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
    }';
	if ('pag-3' === $wpgpsc_shortcode_slider_selected_pagin || 'pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
		echo '#gpsc--products-review-' . esc_attr($post_id) . ' .gpsc-pagination .swiper-pagination-bullet {
			border: 1px solid ' . $wpgpsc_shortcode_slider_pagination_colors['active'] . ' !important;
		}';
	}
}
?>
</style>
<div id="gpsc--products-review-<?php echo esc_attr($post_id); ?>"
	class="gpsc-main-reviews gpsc--product-slider-carousel"
	data-speed="<?php echo esc_attr($wpgpsc_shortcode_slider_speed); ?>" data-autoplay=<?php echo wp_json_encode($wpgpsc_shortcode_slider_autoplay); ?>
	data-initialslide="<?php echo esc_attr($wpgpsc_shortcode_initial_slide); ?>"
	data-slidepergroup="<?php echo esc_attr($wpgpsc_shortcode_slides_per_group); ?>"
	data-grabcursor="<?php echo $wpgpsc_shortcode_grab_cursor ? 'true' : 'false'; ?>"
	data-lazyload="<?php echo $wpgpsc_shortcode_lazy_load ? 'true' : 'false'; ?>"
	data-loop="<?php echo esc_attr($wpgpsc_shortcode_slider_loop); ?>"
	data-spacebetween="<?php echo esc_attr($wpgpsc_product_space_between); ?>"
	data-responsivetop="<?php echo esc_attr($wpgpsc_slider_responsive["top"]); ?>"
	data-responsiveright="<?php echo esc_attr($wpgpsc_slider_responsive["right"]); ?>"
	data-responsivebottom="<?php echo esc_attr($wpgpsc_slider_responsive["bottom"]); ?>"
	data-bullettype="<?php echo esc_attr('pag-7' == $wpgpsc_shortcode_slider_selected_pagin); ?>"
	data-paginationtype="<?php echo esc_attr($wpgpsc_shortcode_slider_pagination_type); ?>">
	<div class="gpsc-review-wrapper swiper">
		<?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
			<h2 class="gpsc--section-title gpsc-title-<?php echo esc_attr($post_id); ?>"><?php echo esc_html(get_the_title($post_id)); ?></h2>
		<?php endif; ?>
		<div class="gpsc-product-reviews swiper-wrapper">
			<?php
			foreach ($gpsc_product_comm as $comment) {

				$gpsc_rating = get_comment_meta($comment->comment_ID, 'rating', true);
				$gpsc_comm_url = get_comment_link($comment->comment_ID);
				$gpsc_comm_timestamp = strtotime($comment->comment_date);
				$gpsc_comm_date = ('1' == ($wpgpsc_reviewer_date_show)) ? date('d F, Y', $gpsc_comm_timestamp) : '';
				$gpsc_comm_time = ('1' == ($wpgpsc_review_time_show)) ? date('h:i A', $gpsc_comm_timestamp) : '';
				?>
				<div class="<?php echo $gpsc_swiper_slide; ?>gpsc-product-slide"
					id="comment-<?php echo esc_attr($comment->comment_ID); ?>">
					<div class="gpsc-review-slider">
						<?php if ($wpgpsc_show_reviewer_img): ?>
							<div class="gpsc-auth-avatar gpsc-client-image">
								<?php echo wp_kses_post(get_avatar($comment->comment_ID, '50')); ?>
							</div>
						<?php endif; ?>
						<div class="comment-author vcard">
							<div class="gpsc-auth-meta">
								<?php echo '<div class="fn gpsc-client-name"><a href="' . esc_url(get_comment_link($comment->comment_ID)) . '" target="_blank">' . esc_html($comment->comment_author) . '</a></div>'; ?>
								<?php if ($gpsc_rating): ?>
									<div class="gpsc-product-rating-wrapper">
										<div class="gpsc-star-rating" role="img"
											aria-label="Rated <?php echo $gpsc_rating; ?> out of 5"
											style="width:<?php echo ($gpsc_rating / 5) * 100; ?>%">
											<span>Rated <strong class="rating">
													<?php echo $gpsc_rating; ?>
												</strong> out of 5</span>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<?php
						if ($wpgpsc_reviewer_txt_show):
							?>
							<a href="<?php echo esc_url($gpsc_comm_url); ?>" target="_blank">
								<div class="comment-body">
									<?php echo wp_kses_post(wp_trim_words($comment->comment_content, $wpgpsc_word_count_number, '…')); ?>
								</div>
							</a>
						<?php endif; ?>
						<p class="gpsc-review-time"><time datetime="<?php echo esc_attr($comment->comment_date); ?>"><?php echo esc_html($gpsc_comm_date) . ' at ' . esc_html($gpsc_comm_time); ?></time></p>
					</div>
				</div>
				<?php
			}
			?>
		</div>
		<?php
		if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_navigation) {
			echo '<div class="gpsc-slider-btn">
				<div class="gpsc-slider-btn-next swiper-button-next">' . $wpgpsc_slider_nav_svg . '</div>
				<div class="gpsc-slider-btn-prev swiper-button-prev">' . $wpgpsc_slider_nav_svg . '</div>
			 </div>';
		}
		if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_pagination) {
			if ('pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
				echo '<div class="gpsc-pagination-wrapper">
				<div class="gpsc-pagination swiper-pagination"></div>
			</div>';
			} else {
				echo '<div class="gpsc-pagination swiper-pagination"></div>';
			}
		}
		?>
	</div>
</div>