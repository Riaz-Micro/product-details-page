<?php
/**
 * Module : Categories - 4
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
$wpgpsc_shortcode_colors_section['background'] = empty($wpgpsc_shortcode_colors_section['background']) ? '#e4e4e4' : $wpgpsc_shortcode_colors_section['background'];

// Typography Options.
$gpsc_section_title_ta   = ! empty( $gpsc_shortcode_section_title_typo['text-align'] ) ? $gpsc_shortcode_section_title_typo['text-align'] : 'center';
$gpsc_product_name_fw    = ! empty( $gpsc_shortcode_product_name_typo['font-weight'] ) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta    = ! empty( $gpsc_shortcode_product_name_typo['text-align'] ) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_ls    = ! empty( $gpsc_shortcode_product_name_typo['letter-spacing'] ) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_excerpt_ta = ! empty( $gpsc_shortcode_product_excerpt_typo['text-align'] ) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'center';

// If carousel mode on.
if ($wpgpsc_carousel_mode_on) {

  wp_enqueue_style($this->plugin_name . 'swiper');
  wp_enqueue_script($this->plugin_name . 'swiper');
  wp_enqueue_script($this->plugin_name);
}

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
html.colibri-wp-theme .gpsc--product-slider-carousel div:before,
html.colibri-wp-theme .gpsc--product-slider-carousel div:after {
    display: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .swiper {
  width: 100%;
  height: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' .swiper-slide {
  text-align: center;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
}
#gpsc--products-' . esc_attr($post_id) . ' {
  max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
  width: 100%;
  margin: 0 auto !important;
  background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
  padding: 20px !important;
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
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list ul {
  list-style: none;
  margin: 0;
  padding: 0;
  transition: .5s;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list ul li {
  list-style: none;
  margin: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list ul li .gpsc-category-wrapper {
  border: 2px solid ' . $wpgpsc_shortcode_color_brand . ';
  padding: 15px;
  background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-details {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  border: 1px solid ' . $wpgpsc_shortcode_color_brand . ';
  padding: 10px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-image img {
  object-fit: cover;
  object-position: center;
  display: block;
  max-width: 100%;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-info {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  gap: 8px;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-name h3 {
  white-space: nowrap;
  color: ' . $wpgpsc_shortcode_colors_single_product['title'] . ';
  ' . $gpsc_product_name_ff . ';
	font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px !important;
	font-weight: ' . $gpsc_product_name_fw . ' !important;
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-name a {
  text-decoration: none !important;
  outline: none;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-desc p {
  color: ' . $wpgpsc_shortcode_colors_single_product['excerpt'] . ';
  ' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ';
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn {
  background: ' . $wpgpsc_shortcode_color_brand . ';
  padding: 5px 8px;
  border-radius: 3px;
  margin: 10px 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn a {
  display: flex;
  flex-direction: row;
  justify-content: center;
  gap: 10px;
  text-decoration: none !important;
  margin: 0;
  height: 25px;
  width: 115px;
  outline: none;
  ' . $gpsc_product_btn_ff . ';
	font-size: ' . $gpsc_product_btn_fs . 'px !important;
	line-height: ' . $gpsc_product_btn_lh . 'px;
	font-weight: ' . $gpsc_product_btn_fw . ';
	align-items: ' . $gpsc_product_btn_ta . ';
	' . $gpsc_product_btn_tt . ';
	' . $gpsc_product_btn_ls . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn a svg {
  height: 15px;
  width: 15px;
  background: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
  padding: 3px;
  border-radius: 50%;
  fill: ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn h3 {
  font-size: 15px;
  font-weight: 600;
  line-height: 15px;
  color: ' . $wpgpsc_shortcode_colors_atc_button['text'] . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn:hover svg {
  background: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
  fill: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn:hover h3 {
  color: ' . $wpgpsc_shortcode_colors_atc_button['txt-hover'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn:hover {
  cursor: pointer;
  background: ' . $wpgpsc_shortcode_colors_atc_button['bg-hover'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next:after,
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev:after {
  font-size: 15px !important;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  padding: 10px 13px;
  background: #8bc34a;
  border-radius: 50%;
  opacity: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-info span {
  font-size: 15px;
  line-height: 17px;
  font-weight: 400;
  color: ' . $wpgpsc_shortcode_color_brand . ';
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list:hover .gpsc-slider-btn-next:after, 
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list:hover .gpsc-slider-btn-prev:after {
  opacity: 1 !important;
}';
?>
<?php if (!$wpgpsc_carousel_mode_on) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list ul {
      list-style: none;
      margin: 0;
      padding: 0;
      transition: .5s;
      display: grid;
      grid-template-columns: repeat(' . $wpgpsc_product_columns . ', 1fr);
      gap: ' . $wpgpsc_product_space_between . 'px;
  }';
}
if ($wpgpsc_section_title_show) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list {
    margin-top: 25px;
  }';
}
if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_navigation) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next::after, 
  .gpsc-slider-btn-prev::after {
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
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list:hover .gpsc-slider-btn-next, 
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list:hover .gpsc-slider-btn-prev {
      opacity: 1 !important;
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
      opacity: 0 !important;
      transition: .3s;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
      border-radius: 2px;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn {
      position: absolute;
      top: 0;
      right: 0;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
      transform: rotate(180deg);
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next svg, 
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev svg {
      height: 20px;
      width: 20px;
      fill: ' . $wpgpsc_shortcode_slider_nav_colors['icon'] . ';
      transition: .3s;
    }
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list:hover .swiper-button-next.swiper-button-disabled,
    #gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list:hover .swiper-button-prev.swiper-button-disabled {
      opacity: .35 !important;
  }';
}
if ($wpgpsc_shortcode_slider_pagination) {
	echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list {
		padding-bottom: 50px !important;
	}
  #gpsc--products-' . esc_attr($post_id) .' {
		padding-bottom: 0 !important;
	}';
  if ('progressbar' === $wpgpsc_shortcode_slider_pagination_type) {
		echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-pagination {
      border-bottom-left-radius: 0 !important;
      border-bottom-right-radius: 0 !important;
  }';
	}
}
if (!empty($wpgpsc_shortcode_slider_nav_colors['background'])) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-next, 
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-slider-btn-prev {
        background: ' . $wpgpsc_shortcode_slider_nav_colors['background'] . ' !important;
    }';
}
if (!empty($wpgpsc_shortcode_colors_atc_button['background'])) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn {
		background: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
	}
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-btn a svg {
    fill: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
}
#gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-info span {
    color: ' . $wpgpsc_shortcode_colors_atc_button['background'] . ' !important;
}';
}
if (!empty($wpgpsc_shortcode_color_border)) {
  echo '#gpsc--products-' . esc_attr($post_id) . ' .gpsc-product-list ul li .gpsc-category-wrapper {
		border: 2px solid ' . $wpgpsc_shortcode_color_border . ' !important;
	}
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-category-details {
		border: 1px solid ' . $wpgpsc_shortcode_color_border . ' !important;
	}';
}
echo '</style>';
?>
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-main gpsc--product-slider-carousel"
  data-speed="<?php echo esc_attr($wpgpsc_shortcode_slider_speed); ?>" data-autoplay=<?php echo wp_json_encode($wpgpsc_shortcode_slider_autoplay); ?>
  data-loop="<?php echo esc_attr($wpgpsc_shortcode_slider_loop); ?>"
  data-row="<?php echo esc_attr($wpgpsc_product_rows); ?>"
  data-initialslide="<?php echo esc_attr($wpgpsc_shortcode_initial_slide); ?>"
  data-slidepergroup="<?php echo esc_attr($wpgpsc_shortcode_slides_per_group); ?>"
  data-grabcursor="<?php echo $wpgpsc_shortcode_grab_cursor ? 'true' : 'false'; ?>"
  data-lazyload="<?php echo $wpgpsc_shortcode_lazy_load ? 'true' : 'false'; ?>"
  data-spacebetween="<?php echo esc_attr($wpgpsc_product_space_between); ?>"
  data-responsivetop="<?php echo esc_attr($wpgpsc_slider_responsive["top"]); ?>"
  data-responsiveright="<?php echo esc_attr($wpgpsc_slider_responsive["right"]); ?>"
  data-responsivebottom="<?php echo esc_attr($wpgpsc_slider_responsive["bottom"]); ?>"
  data-spacebetween="<?php echo esc_attr($wpgpsc_product_space_between); ?>"
  data-bullettype="<?php echo esc_attr('pag-7' == $wpgpsc_shortcode_slider_selected_pagin); ?>"
  data-paginationtype="<?php echo esc_attr($wpgpsc_shortcode_slider_pagination_type); ?>"
  data-module="<?php echo esc_attr($wpgpsc_module); ?>">
  <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
    <div class="gpsc-section-heading">
      <h2>
        <?php echo esc_html(get_the_title($post_id)); ?>
      </h2>
    </div>
  <?php endif; ?>
  <div class="gpsc-product-list swiper">
    <ul class="swiper-wrapper">
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

            echo '<li class="swiper-slide">
                      <div class="gpsc-category-wrapper">
                        <div class="gpsc-category-details">';
            if ($gpsc_get_cat_thum_id) {

              echo '<div class="gpsc-product-image"><img src=' . esc_url($gpsc_get_cat_thum_url) . ' /></div>';
            }
            echo '<div class="gpsc-category-info">
                            <div class="gpsc-category-name"><a href="' . esc_url($gpsc_cat_url) . '"><h3>' . esc_html($gpsc_cat_name) . '</h3></a></div>
                          <span>' . esc_html($gpsc_cat_count) . ' Products</span>
                          <div class="gpsc-category-desc"><p>' . wp_trim_words(wp_kses_post(wpautop(category_description($gpsc_cat_id))), $wpgpsc_word_count_number, ' […]') . '</p></div>
                          <div class="gpsc-category-btn"><a href="' . esc_url($gpsc_cat_url) . '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" /></svg>
                          <h3>Shop now</h3></a></div>';

            echo '</div>
                        </div>
                      </div>
                    </li>';
          }
        } else {
          $gpsc_cat_id = $gpsc_cat->term_id;
          $gpsc_cat_name = $gpsc_cat->name;
          $gpsc_cat_url = get_term_link($gpsc_cat->slug, 'product_cat');
          $gpsc_cat_count = $gpsc_cat->count;
          $gpsc_get_cat_thum_id = get_term_meta($gpsc_cat_id, 'thumbnail_id', true);
          $gpsc_get_cat_thum_url = wp_get_attachment_url($gpsc_get_cat_thum_id);

          echo '<li class="swiper-slide">
                      <div class="gpsc-category-wrapper">
                        <div class="gpsc-category-details">';
          if ($gpsc_get_cat_thum_id) {

            echo '<div class="gpsc-product-image"><img src=' . esc_url($gpsc_get_cat_thum_url) . ' /></div>';
          }
          echo '<div class="gpsc-category-info">
                            <div class="gpsc-category-name"><a href="' . esc_url($gpsc_cat_url) . '"><h3>' . esc_html($gpsc_cat_name) . '</h3></a></div>
                          <span>' . esc_html($gpsc_cat_count) . ' Products</span>
                          <div class="gpsc-category-desc"> <p>' . wp_trim_words(wp_kses_post(wpautop(category_description($gpsc_cat_id))), $wpgpsc_word_count_number, ' […]') . '</p></div>
                          <div class="gpsc-category-btn"><a href="' . esc_url($gpsc_cat_url) . '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" /></svg>
                          <h3>Shop now</h3></a></div>';

          echo '</div>
                        </div>
                      </div>
                    </li>';
        }
      }

      echo '</ul>';
      if ($wpgpsc_carousel_mode_on && $wpgpsc_shortcode_slider_navigation) {
        echo '<div class="gpsc-slider-btn-next swiper-button-next">' . $wpgpsc_slider_nav_svg . '</div>
        <div class="gpsc-slider-btn-prev swiper-button-prev">' . $wpgpsc_slider_nav_svg . '</div>';
      }
      if ($wpgpsc_shortcode_slider_pagination) {
        if ('pag-4' === $wpgpsc_shortcode_slider_selected_pagin) {
          echo '<div class="gpsc-pagination-wrapper">
          <div class="gpsc-pagination swiper-pagination"></div>
        </div>';
        } else {
          echo '<div class="gpsc-pagination swiper-pagination"></div>';
        }
      }
      echo '</div>
</div>';
      ?>