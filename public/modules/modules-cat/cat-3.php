<?php

/**
 * Module : Categories - 3
 *
 * This file is used to markup the public-facing aspects of the category module.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public/modules
 */

// Color Options.
$wpgpsc_shortcode_colors_section['background'] = empty($wpgpsc_shortcode_colors_section['background']) ? '#fff' : $wpgpsc_shortcode_colors_section['background'];

// Typography Options.
$gpsc_section_title_ta   = ! empty( $gpsc_shortcode_section_title_typo['text-align'] ) ? $gpsc_shortcode_section_title_typo['text-align'] : 'center';
$gpsc_product_name_fw    = ! empty( $gpsc_shortcode_product_name_typo['font-weight'] ) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta    = ! empty( $gpsc_shortcode_product_name_typo['text-align'] ) ? $gpsc_shortcode_product_name_typo['text-align'] : 'left';
$gpsc_product_name_ls    = ! empty( $gpsc_shortcode_product_name_typo['letter-spacing'] ) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_excerpt_ta = ! empty( $gpsc_shortcode_product_excerpt_typo['text-align'] ) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'left';

// Get all categories.
$gpsc_all_categories = get_categories($gpsc_cat_args);

echo '<style>
.gpsc-main p,
.gpsc-main h2,
.gpsc-main h3,
.gpsc-main h4,
.gpsc-main h5 {
    margin: 0 !important;
    padding: 0;
}
.gpsc-main a {
    text-decoration: none !important;
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
html.colibri-wp-theme .gpsc-main div:not(.gpsc-category-section ul li a):before,
html.colibri-wp-theme .gpsc-main div:after {
    display: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' {
    background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
    max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
    margin: 10px auto;
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section {
    display: grid;
    grid-template-columns: repeat( ' . $wpgpsc_product_columns . ' , minmax(0, 1fr) );
    gap: ' . $wpgpsc_product_space_between . 'px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category {
    display: flex;
    flex-direction: row;
    justify-content: left;
    align-items: flex-start;
    gap: 5px;
    background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
    padding: 20px 15px;
    border-radius: 5px;
    box-shadow: ' . $wpgpsc_shortcode_color_brand . ' 0px 1px 4px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-image {
    position: relative;
    background-color: transparent;
    margin-bottom: 0;
    cursor: pointer;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    backface-visibility: hidden;
    flex-basis: 40%;
    box-shadow: rgb(9 30 66 / 13%) 0px 1px 1px, rgb(9 30 66 / 7%) 0px 0px 1px 1px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-image img {
    display: block;
    transition: all 0.6s ease-in-out;
    backface-visibility: hidden;
    max-width: 100%;
    margin: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-image img:hover {
    transform: scale(1.12);
    transition: all 0.7s ease-in-out;
    opacity: 1;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-cat-desc {
    padding-left: 10px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    flex-basis: 60%;
    align-self: center;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section a {
    text-decoration: none;
    display: block;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section .gpsc-cat-desc-heading {
    color: ' . $wpgpsc_shortcode_colors_single_product['title'] . ';
    white-space: nowrap;
    outline: none;
    transition: .3s;
    ' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px !important;
	font-weight: ' . $gpsc_product_name_fw . ' !important;
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section ul li:not(:last-child) {
    margin-bottom: 5px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section ul li {
    transition: 0.5s;
    padding: 0;
    margin: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section ul li a {
    color: ' . $wpgpsc_shortcode_color_brand . ';
    font-size: 16px;
    text-transform: capitalize;
    outline: none;
    line-height: 18px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section ul li a:before {
    content: "-";
    margin-right: 6px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-cat-desc a {
    transition: .3s;
    outline: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section .gpsc_cat_cover_inner_content a:hover, .gpsc_cat_cover_inner_content a, .gpsc_cat_cover_inner_content a:focus {
    outline: none !important;
    border: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-cat-desc span {
    font-size: 14px;
    line-height: 14px;
    font-weight: 500;
    color: #9E9E9E;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-cat-desc span p {
    color: ' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';
    ' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ';
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_inner_content {
    padding-left: 10px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    align-self: center;
    gap: 4px;
    flex-basis: 60%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_inner_content span {
    font-size: 14px;
    line-height: 14px;
    font-weight: 500;
    color: #9E9E9E;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_inner_content span p {
    font-size: 14px;
    line-height: 20px;
    color: #2e2e2e;
    font-weight: normal;
}
@media (max-width: 360px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category {
        flex-wrap: wrap;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-image {
        margin-bottom: 10px;
    }
}
@media (max-width: 575px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section {
        display: block;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category:not(:last-child) {
        margin-bottom: 20px;
    }
}
@media (max-width: 767px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section {
        grid-template-columns: repeat(2, 1fr);
    }
}';
?>
<?php
if (!empty($wpgpsc_shortcode_colors_single_product['category'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section ul li a {
		color: ' . $wpgpsc_shortcode_colors_single_product['category'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_color_border)) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-category  {
        box-shadow: ' . $wpgpsc_shortcode_color_border . ' 0px 1px 4px !important;
	}';
}
?>
</style>
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-main">
    <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
        <h2 class="gpsc--section-title-<?php echo esc_attr($post_id); ?> gpsc--section-title"><?php echo esc_html(get_the_title($post_id)); ?></h2>
    <?php endif; ?>
    <div class="gpsc-category-section">
        <?php
        foreach ($gpsc_all_categories as $gpsc_cat) {

            if ($wpgpsc_cat_parent_only) {

                if (0 === $gpsc_cat->category_parent) {

                    $gpsc_cat_id = $gpsc_cat->term_id;
                    $gpsc_cat_name = $gpsc_cat->name;
                    $gpsc_cat_url = get_term_link($gpsc_cat->slug, 'product_cat');
                    $gpsc_cat_count = $gpsc_cat->count;
                    $gpsc_get_cat_thum_id = get_term_meta($gpsc_cat_id, 'thumbnail_id', true);
                    $gpsc_get_cat_thum_url = wp_get_attachment_url($gpsc_get_cat_thum_id);

                    echo '<div class="gpsc-product-category">';

                    if ($gpsc_get_cat_thum_id) {

                        echo '<div class="gpsc-category-image">
                                <img class="gpsc-main-img" src=' . esc_url($gpsc_get_cat_thum_url) . ' /></div>';
                    }
                    echo '<div class="gpsc_cat_cover_inner_content">
                                <a href="' . esc_url($gpsc_cat_url) . '"><h4 class="gpsc-cat-desc-heading">' . esc_html($gpsc_cat_name) . '</h4></a>
                                <span>' . esc_html($gpsc_cat_count) . ' Products</span>
                                <span><p>' . wp_trim_words(wp_kses_post(wpautop(category_description($gpsc_cat_id))), $wpgpsc_word_count_number, ' […]') . '</p></span>
                              </div>';

                    echo '</div>';
                }
            } else {

                if (0 === $gpsc_cat->category_parent) {

                    $gpsc_cat_id = $gpsc_cat->term_id;
                    $gpsc_cat_name = $gpsc_cat->name;
                    $gpsc_cat_url = get_term_link($gpsc_cat->slug, 'product_cat');
                    $gpsc_cat_count = $gpsc_cat->count;
                    $gpsc_get_cat_thum_id = get_term_meta($gpsc_cat_id, 'thumbnail_id', true);
                    $gpsc_get_cat_thum_url = wp_get_attachment_url($gpsc_get_cat_thum_id);

                    echo '<div class="gpsc-product-category">';
                    if ($gpsc_get_cat_thum_id) {

                        echo '<div class="gpsc-category-image">
                                <img class="gpsc-main-img" src=' . esc_url($gpsc_get_cat_thum_url) . ' /></div>';
                    }

                    echo '<div class="gpsc-cat-desc">
                                <div class="gpsc-cat-details">
                                    <a href="' . esc_url($gpsc_cat_url) . '"><h4 class="gpsc-cat-desc-heading">' . esc_html($gpsc_cat_name) . '</h4></a>
                                    <span>' . esc_html($gpsc_cat_count) . ' Products</span>
                                    <span><p>' . wp_trim_words(wp_kses_post(wpautop(category_description($gpsc_cat_id))), $wpgpsc_word_count_number, ' […]') . '</p></span>
                                </div>';

                    $gpsc_sub_cat_args = array(
                        'taxonomy' => 'product_cat',
                        'child_of' => 0,
                        'parent' => $gpsc_cat_id,
                        'orderby' => 'name',
                        'hide_empty' => 1,
                    );

                    $gpsc_all_sub_categories = get_categories($gpsc_sub_cat_args);

                    if ($gpsc_all_sub_categories) {

                        echo '<ul class="gpsc_sub_cat_list">';
                        foreach ($gpsc_all_sub_categories as $sub_category) {

                            $gpsc_sub_cat_url = get_term_link($sub_category->slug, 'product_cat');

                            echo '<li><a href="' . esc_url($gpsc_sub_cat_url) . '">' . esc_html($sub_category->name) . '</a></li>';
                        }
                        echo '</ul>';
                    }

                    echo '</div>
                    </div>';
                }
            }
        }

        echo '</div>
</div>';