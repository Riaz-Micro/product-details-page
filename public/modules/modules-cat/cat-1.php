<?php
/**
 * Module : Categories - 1
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
$gpsc_section_title_ta = !empty($gpsc_shortcode_section_title_typo['text-align']) ? $gpsc_shortcode_section_title_typo['text-align'] : 'left';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'left';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : 'letter-spacing: 0.5px';
$gpsc_product_excerpt_ta = !empty($gpsc_shortcode_product_excerpt_typo['text-align']) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'left';

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
.gpsc-main .woocommerce #respond input#submit,
.gpsc-main .woocommerce a.button,
.gpsc-main .woocommerce button.button,
.gpsc-main .woocommerce input.button,
.gpsc-main .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link,
.gpsc-main .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button,
.gpsc-main .woocommerce a.added_to_cart.wc-forward {
  border: none !important;
}
html.colibri-wp-theme .gpsc-main div:before,
html.colibri-wp-theme .gpsc-main div:after {
    display: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' {
  background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
  max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
  margin: 20px auto;
}
.gpsc-section-wrapper .gpsc-category-desc a:hover .gpsc-category-title {
  cursor: pointer;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-section-heading a:hover button {
  color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
  cursor: pointer;
  background: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-section-heading a button:hover svg {
  fill: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ';
}
.gpsc-section-heading {
  position: relative;
  padding-bottom: 20px !important;
}
.gpsc-section-heading a {
  position: absolute;
  top: 0;
  right: 0;
  text-decoration: none !important;
  outline: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-section-heading a svg {
  fill: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
  height: 16px;
  width: 16px;
  transition: 0.3s;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-section-heading a button {
  background: ' . $wpgpsc_shortcode_color_brand . ';
  border-radius: 20px;
  color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
  text-transform: capitalize;
  padding: 12px 20px;
  transition: 0.5s;
  display: flex;
  flex-direction: row;
  justify-content: center;
  gap: 5px;
  outline: none !important;
  box-shadow: none !important;
  border: none;
  ' . $gpsc_product_btn_ff . ';
	font-size: ' . $gpsc_product_btn_fs . 'px !important;
	line-height: ' . $gpsc_product_btn_lh . 'px;
	font-weight: ' . $gpsc_product_btn_fw . ';
	align-items: ' . $gpsc_product_btn_ta . ';
	' . $gpsc_product_btn_tt . ';
	' . $gpsc_product_btn_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-section-heading .gpsc-section-heading-title {
  color: ' . $wpgpsc_shortcode_colors_section['title'] . ' !important;
  width: 30%;
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  ' . $gpsc_section_title_ff . ';
	font-size: ' . $gpsc_section_title_fs . 'px;
	line-height: ' . $gpsc_section_title_lh . 'px;
	font-weight: ' . $gpsc_section_title_fw . ';
	text-align: ' . $gpsc_section_title_ta . ';
	' . $gpsc_section_title_tt . ';
	' . $gpsc_section_title_ls . ';
}
.gpsc-category-section {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: stretch;
  gap: 5px;
  padding: 15px !important;
  transition: .3s;
}
.gpsc-category-desc {
  flex-basis: 60%;
  flex-grow: 1;
  text-align: left;
}
.gpsc-category-image {
  flex-basis: 40%;
  flex-grow: 1;
}
.gpsc-category-section a {
  text-decoration: none !important;
  display: block;
  outline: none !important;
}
.gpsc-category-section a:hover, a:focus {
  outline: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-title {
  padding-bottom: 5px !important;
  color: ' . $wpgpsc_shortcode_colors_single_product['title'] . ' !important;
  transition: 0.3s;
  ' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px !important;
	font-weight: ' . $gpsc_product_name_fw . ' !important;
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
}
.gpsc-category-image img {
  display: block;
  max-width: 100%;
  transition: all 0.6s ease-in-out;
  backface-visibility: hidden;
}
.gpsc-category-section:hover .gpsc-category-image img {
  transform: scale(1.05);
  transition: all 0.7s ease-in-out;
  opacity: 1;
}
span.gpsc-total-product {
  white-space: nowrap;
  color: #9f9f9f;
  text-transform: capitalize;
  font-size: 13px;
  line-height: 13px;
  font-weight: 600;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-desc p {
  padding-top: 3px !important;
  color: ' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ' !important;
  opacity: 0;
  transition: .3s;
  ' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ';
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
.gpsc-category-section:hover .gpsc-category-desc p {
  opacity: 1 !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section-wrapper {
  border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
  border-bottom: 0;
  margin-top: 30px !important;
  height: 100%;
  display: grid;
  grid-template-columns: repeat( ' . $wpgpsc_product_columns . ', minmax(0, 1fr) );
  grid-auto-rows: max-content;
  border-right: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section-main {
  background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
  border-bottom: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
  border-right: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
}
@media (max-width: 460px) {
  .gpsc-section-heading a {
    top: 35px;
    left: 0;
  }
  .gpsc-section-heading {
    padding-bottom: 80px !important;
  }
}
@media (max-width: 640px) {
  .gpsc-category-section-wrapper {
    display: block !important;
  }
}
@media (min-width: 641px) and (max-width: 767px) {
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section-wrapper {
    grid-template-columns: repeat(2, 1fr);
    border: 1px solid ' . $wpgpsc_shortcode_color_brand . ' !important;
    border-bottom: 0 !important;
    border-right: 0 !important;
  }
  .gpsc-category-section-main {
    border-right: 0 !important;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-section-main {
    border-right: 1px solid ' . $wpgpsc_shortcode_color_brand . ' !important;
  }
}';
?>
<?php
if (!empty($wpgpsc_shortcode_colors_atc_button['background'])) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-section-heading a button {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}';
}
if (!empty($wpgpsc_shortcode_color_border)) {
  echo '.gpsc-category-section-main {
    border-bottom: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
    border-right: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
}
.gpsc-category-section-wrapper {
  border: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
  border-right: 0 !important;
  border-bottom: 0 !important;
}
  @media (min-width: 641px) and (max-width: 767px) {
    .gpsc-category-section-wrapper {
      border: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
    }
    .gpsc-category-section-main {
      border-right: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
    }
  }';
}
?>
</style>
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-main">
  <div class="gpsc-section-wrapper">
    <div class="gpsc-section-heading">
      <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
        <h2 class="gpsc-section-heading-title">
          <?php echo esc_html(get_the_title($post_id)); ?>
        </h2>
      <?php endif; ?>
      <a href="#"><button>more categories <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path
              d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
          </svg></button></a>
    </div>
    <div class="gpsc-category-section-wrapper">
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

            echo '<div class="gpsc-category-section-main">
                          <div class="gpsc-category-section">
                              <div class="gpsc-category-desc">';
            echo '<a href="' . esc_url($gpsc_cat_url) . '"><h2 class="gpsc-category-title">' . esc_html($gpsc_cat_name) . '</h2></a>
                                <span class="gpsc-total-product">' . esc_html($gpsc_cat_count) . ' Products</span>
                                <div class="gpsc-category-desc"><p>' . wp_trim_words(wp_kses_post(wpautop(category_description($gpsc_cat_id))), $wpgpsc_word_count_number, ' […]') . '</p></div>
                              </div>';
            if ($gpsc_get_cat_thum_id) {

              echo '<div class="gpsc-category-image">
                                                <a href="' . esc_url($gpsc_cat_url) . '"><img src="' . esc_url($gpsc_get_cat_thum_url) . '" alt=""></a>
                                              </div>';
            }

            echo '</div>
                    </div>';
          }
        } else {
          $gpsc_cat_id = $gpsc_cat->term_id;
          $gpsc_cat_name = $gpsc_cat->name;
          $gpsc_cat_url = get_term_link($gpsc_cat->slug, 'product_cat');
          $gpsc_cat_count = $gpsc_cat->count;
          $gpsc_get_cat_thum_id = get_term_meta($gpsc_cat_id, 'thumbnail_id', true);
          $gpsc_get_cat_thum_url = wp_get_attachment_url($gpsc_get_cat_thum_id);

          echo '<div class="gpsc-category-section-main">
                          <div class="gpsc-category-section">
                              <div class="gpsc-category-desc">';
          echo '<a href="' . esc_url($gpsc_cat_url) . '"><h2 class="gpsc-category-title">' . esc_html($gpsc_cat_name) . '</h2></a>
                                <span class="gpsc-total-product">' . esc_html($gpsc_cat_count) . ' Products</span>
                                <div class="gpsc-category-desc"><p>' . wp_trim_words(wp_kses_post(wpautop(category_description($gpsc_cat_id))), $wpgpsc_word_count_number, ' […]') . '</p></div>
                              </div>';
          if ($gpsc_get_cat_thum_id) {

            echo '<div class="gpsc-category-image">
                                                <a href="' . esc_url($gpsc_cat_url) . '"><img src="' . esc_url($gpsc_get_cat_thum_url) . '" alt=""></a>
                                              </div>';
          }

          echo '</div>
                    </div>';
        }
      }

      echo '</div>
  </div>
</div>';
      ?>