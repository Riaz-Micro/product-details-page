<?php

/**
 * Module : Categories - 2
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
$gpsc_product_name_ta    = ! empty( $gpsc_shortcode_product_name_typo['text-align'] ) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_ls    = ! empty( $gpsc_shortcode_product_name_typo['letter-spacing'] ) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_excerpt_ta = ! empty( $gpsc_shortcode_product_excerpt_typo['text-align'] ) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'center';

// Get all categories.
$gpsc_all_categories = get_categories($gpsc_cat_args);

echo '<style>
#gpsc--products-' . esc_attr($post_id) . ' {
    background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
    max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
}
html.colibri-wp-theme .gpsc-main div:before,
html.colibri-wp-theme .gpsc-main div:after {
    display: none !important;
}
#gpsc--products-' . esc_attr( $post_id ) . ' .entry-content p {
    margin-bottom: 10px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-section-heading h2 {
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover {
    position: relative;
    background-position: 50%;
    min-height: 300px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    box-sizing: border-box;
    z-index: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single.closed ul.gpsc_sub_cat_list {
    bottom: -121px;
    top: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single .gpsc_toggle-slider {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: ' . $wpgpsc_shortcode_color_brand . ';
    border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
    border-top: 0;
    border-bottom: 0;
    cursor: pointer;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .5s;
    opacity: 1;
}

#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single:hover .gpsc_toggle-slider {
    opacity: 1 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single.closed .gpsc_toggle-slider {
    bottom: -1px;
    top: auto;
    opacity: 0;
    height: 25px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single .gpsc_toggle-slider svg.gpsc_toggle-svg {
    fill: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    width: 25px;
    height: 25px;
    transform: rotate(-90deg);
    position: absolute;
    top: 0;
    left: auto;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single.closed .gpsc_toggle-slider svg.gpsc_toggle-svg {
    transform: rotate(90deg);
}
#gpsc--products-' . esc_attr($post_id) . ' ul.gpsc_sub_cat_list {
    position: absolute;
    top: 25px;
    left: 25px;
    height: 100%;
    width: 100%;
    margin: 0;
    background: ' . $wpgpsc_shortcode_color_overlay . ';
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #000;
    margin-left: -25px;
    padding: 50px;
}
#gpsc--products-' . esc_attr($post_id) . ' ul.gpsc_sub_cat_list li {
    list-style: none;
    max-width: 300px;
    border-radius: 3px;
    transition: .5s;
    margin-bottom: 15px;
}
#gpsc--products-' . esc_attr($post_id) . ' ul.gpsc_sub_cat_list li a {
    color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    font-size: 20px;
    text-decoration: none !important;
    cursor: pointer;
    transition: .5s;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    line-height: 20px;
}
#gpsc--products-' . esc_attr($post_id) . ' ul.gpsc_sub_cat_list li a svg {
    width: 20px;
    height: 20px;
    fill: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' ul.gpsc_sub_cat_list li:hover a {
    cursor: pointer;
    text-decoration: underline !important;
    text-decoration-color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ' !important;
    text-underline-offset: 4px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_overlay {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 1;
    background: ' . $wpgpsc_shortcode_color_overlay . ';
    opacity: ' . $wpgpsc_slider_bg_overlay . '%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover img {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    max-width: none;
    max-height: none;
    object-fit: cover;
    outline: none;
    border: none;
    box-shadow: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_product_category_wrap {
    display: flex;
    align-items: center;
    gap: ' . $wpgpsc_product_space_between . 'px;
    flex-wrap: wrap;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single {
    flex-basis: calc(100% / ' . $wpgpsc_product_columns . ' - ' . $wpgpsc_product_space_between . 'px);
    position: relative;
    height: 100%;
    overflow: hidden;
    border-radius: 5px;
    transition: .5s;
    box-shadow: ' . $wpgpsc_shortcode_color_brand . ' 1.95px 1.95px 2.6px;
    background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_inner_content {
    z-index: 2;
    color: #1c1c1c;
    position: absolute;
    border-radius: 5px;
    background: #ffffff8c;
    width: 100%;
    height: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_inner_content {
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0 !important;
    opacity: 1;
    position: absolute;
    transition: all 0.7s ease 0s;
    top: 50%;
    transform: translate(-50%, -50%);
    left: 50%;
    max-width: 350px;
    width: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_inner_content h4 {
    color: ' . $wpgpsc_shortcode_colors_single_product['title'] . ';
    margin-bottom: 10px !important;
    ' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px !important;
	font-weight: ' . $gpsc_product_name_fw . ' !important;
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_inner_content p {
    margin: 0 15px;
    color: ' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';
    ' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ';
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_inner_content .gpsc_cat_btn {
    display: block;
    margin-top: 8px;
    background: ' . $wpgpsc_shortcode_color_brand . ';
    padding: 6px;
    color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
    text-decoration: none !important;
    max-width: 105px !important;
    width: 100%;
    border-radius: 5px;
    ' . $gpsc_product_btn_ff . ';
	font-size: ' . $gpsc_product_btn_fs . 'px !important;
	line-height: ' . $gpsc_product_btn_lh . 'px;
	font-weight: ' . $gpsc_product_btn_fw . ';
	text-align: ' . $gpsc_product_btn_ta . ';
	' . $gpsc_product_btn_tt . ';
	' . $gpsc_product_btn_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_inner_content .gpsc_cat_btn:hover {
	cursor: pointer;
	background: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ' !important;
	transform: translateY(-1px);
	color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
}
@media (max-width: 767px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc_product_category_wrap {
        display: block !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single {
        max-width: 100% !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single:not(:last-child) {
        margin-bottom: 20px;
    }
}
@media (max-width: 575px) {
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single {
        display: block !important;
    }
}';
if (!empty($wpgpsc_shortcode_colors_atc_button['background'])) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_cover_inner_content .gpsc_cat_btn {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}
	#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single .gpsc_toggle-slider {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}';
}

if (!empty($wpgpsc_shortcode_color_border)) {
    echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single {
        box-shadow: ' . $wpgpsc_shortcode_color_border . ' 1.95px 1.95px 2.6px !important;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc_cat_single .gpsc_toggle-slider {
        border: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
	}';
}
?>
</style>

<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-main">
    <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
        <div class="gpsc-section-heading">
            <h2>
                <?php echo esc_html(get_the_title($post_id)); ?>
            </h2>
        </div>
    <?php endif; ?>
    <div class="gpsc_product_category_wrap">
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

                    echo '<div class="gpsc_cat_single">';

                    echo '<div class="gpsc_cat_cover">
                        <span class="gpsc_cat_cover_overlay"></span>';
                    if ($gpsc_get_cat_thum_id) {

                        echo '<img src=' . esc_url($gpsc_get_cat_thum_url) . ' />';
                    }
                    echo '<div class="gpsc_cat_cover_inner_content">
                    <div class="gpsc_inner_content">
                            <h4>' . esc_html($gpsc_cat_name) . '</h4>
                            <span>' . esc_html($gpsc_cat_count) . ' Products</span>
                            <p>' . wp_trim_words(wp_kses_post(wpautop(category_description($gpsc_cat_id))), $wpgpsc_word_count_number, ' […]') . '</p>
                            <a class="gpsc_cat_btn" href="' . esc_url($gpsc_cat_url) . '">View All</a>
                        </div>
                        </div>';
                    echo '</div>';

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

                    echo '<div class="gpsc_cat_single closed">';

                    echo '<div class="gpsc_cat_cover">
                            <span class="gpsc_cat_cover_overlay"></span>';
                    if ($gpsc_get_cat_thum_id) {

                        echo '<img src=' . esc_url($gpsc_get_cat_thum_url) . ' />';
                    }
                    echo '<div class="gpsc_cat_cover_inner_content">
                                <div class="gpsc_inner_content">
                                    <h4>' . esc_html($gpsc_cat_name) . '</h4>
                                    <span>' . esc_html($gpsc_cat_count) . ' Products</span>
                                    <p>' . wp_trim_words(wp_kses_post(wpautop(category_description($gpsc_cat_id))), $wpgpsc_word_count_number, ' […]') . '</p>
                                    <a class="gpsc_cat_btn" href="' . esc_url($gpsc_cat_url) . '">View All</a>
                                </div>
                            </div>';
                    echo '</div>';

                    $gpsc_sub_cat_args = array(
                        'taxonomy' => 'product_cat',
                        'child_of' => 0,
                        'parent' => $gpsc_cat_id,
                        'orderby' => 'name',
                        'hide_empty' => 1,
                    );

                    $gpsc_all_sub_categories = get_categories($gpsc_sub_cat_args);

                    if ($gpsc_all_sub_categories) {

                        echo '<div class= "gpsc_toggle-slider">
                            <svg class="gpsc_toggle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                        <ul class="gpsc_sub_cat_list">';
                        foreach ($gpsc_all_sub_categories as $sub_category) {

                            $gpsc_sub_cat_url = get_term_link($sub_category->slug, 'product_cat');

                            echo '<li><a href="' . esc_url($gpsc_sub_cat_url) . '">' . esc_html($sub_category->name) . ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></a></li>';
                        }
                        echo '</ul>
                        </div>';
                    }

                    echo '</div>';
                }
            }
        }

        echo '</div>
</div>';
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(function () {
                $(".gpsc_toggle-slider").click(function () {
                    $(this).parent().toggleClass("closed");
                });
            });
        </script>