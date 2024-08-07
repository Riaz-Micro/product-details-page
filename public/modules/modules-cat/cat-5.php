<?php

/**
 * Module : Categories - 5
 *
 * This file is used to markup the public-facing aspects of the category module.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public/modules
 */

// Custom data fro cat 5.
$wpgpsc_cat_menu_name = wpgpsc_get_post_meta($post_id, 'wpgpsc_cat_menu_name');
$wpgpsc_cat_default_icon = wpgpsc_get_post_meta($post_id, 'wpgpsc_cat_default_icon');
$wpgpsc_cat_menu_item_before_accordion = wpgpsc_get_post_meta($post_id, 'wpgpsc_cat_menu_item_before_accordion');
$wpgpsc_cat_menu_item_after_accordion = wpgpsc_get_post_meta($post_id, 'wpgpsc_cat_menu_item_after_accordion');

// Color Options.
$wpgpsc_shortcode_colors_section['background'] = empty($wpgpsc_shortcode_colors_section['background']) ? '#fff' : $wpgpsc_shortcode_colors_section['background'];
$wpgpsc_shortcode_color_border = empty($wpgpsc_shortcode_color_border) ? '#ccc' : $wpgpsc_shortcode_color_border;

// Typography Options.
$gpsc_section_title_ta = !empty($gpsc_shortcode_section_title_typo['text-align']) ? $gpsc_shortcode_section_title_typo['text-align'] : 'left';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'normal';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'left';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';

// Get all categories.
$gpsc_all_categories = get_categories($gpsc_cat_args);

echo '<style>
.gpsc-cat-main p,
.gpsc-cat-main h2,
.gpsc-cat-main h3,
.gpsc-cat-main h4,
.gpsc-cat-main h5 {
    margin: 0 !important;
    padding: 0;
}
#gpsc--products-' . esc_attr($post_id) . ' {
  background: ' . $wpgpsc_shortcode_colors_section['background'] . ';
  width: 100%;
  margin: 0 auto !important;
  margin-left: 0 !important;
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
.gpsc-cat-main nav {
  position: relative;
  max-width: ' . $wpgpsc_section_width['width'] . 'px !important;
  overflow: auto;
  background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
}
.gpsc-cat-main nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.gpsc-cat-main nav .gpsc-nav-links {
  max-height: ' . $wpgpsc_max_height['width'] . 'px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' nav ul li {
  border-bottom: 1px solid ' . $wpgpsc_shortcode_color_border . ';
  list-style: none;
  font-size: ' . $gpsc_product_name_fs . 'px !important;
	line-height: ' . $gpsc_product_name_lh . 'px !important;
}
.gpsc-cat-main nav ul li ul {
  margin-bottom: 8px !important;
}
#gpsc--products-' . esc_attr($post_id) . ' nav ul li.gpsc-sub-menu ul {
  border-left: 1px solid ' . $wpgpsc_shortcode_color_border . ';
  margin-left: 25px;
  padding-left: 10px;
}
.gpsc-cat-main nav ul li a svg.gpsc-svg-up {
  transform: rotate(90deg);
}
#gpsc--products-' . esc_attr($post_id) . ' nav ul li a {
  display: block;
  padding: 10px 15px;
  text-decoration: none;
  transition: 0.3s;
  text-decoration: none !important;
  ' . $gpsc_product_name_ff . ';
  font-size: 100% !important;
	font-weight: ' . $gpsc_product_name_fw . ' !important;
	text-align: ' . $gpsc_product_name_ta . ';
	' . $gpsc_product_name_tt . ';
	' . $gpsc_product_name_ls . ';
  display: flex;
  flex-direction: row;
  align-items: center;
}
#gpsc--products-' . esc_attr($post_id) . ' nav ul li a.gpsc-sub-menu-item {
  font-size: 90% !important;
}
#gpsc--products-' . esc_attr($post_id) . ' nav ul li a.gpsc-menu-item {
  color: ' . $wpgpsc_shortcode_colors_single_product['title'] . ';
}
.gpsc-cat-main nav ul li a span {
  vertical-align: middle;
}
.gpsc-cat-main nav ul li a:hover, nav ul li a.active {
  color: #137de3 !important;
  outline: none !important;
}
.gpsc-cat-main nav ul li a.active svg {
  fill: #137de3 !important;
}
.gpsc-cat-main nav ul li a:hover svg {
  fill: #137de3 !important;
}
.gpsc-cat-main nav ul li a img {
  width: 24px;
  height: 24px;
  vertical-align: middle;
  margin-right: 15px;
}
.gpsc-cat-main nav ul li a svg.gpsc-sub-menu-icon {
  text-align: center;
  margin-right: 5px;
  float: right;
  width: 15px;
  height: 15px;
  transition: 0.3s;
  vertical-align: middle;
  fill: ' . $wpgpsc_shortcode_colors_single_product['title'] . ';
  margin-left: auto;
}
.gpsc-cat-main nav ul li ul li {
  border-bottom: none !important;
}
#gpsc--products-' . esc_attr($post_id) . ' nav ul li ul li a {
  border-left: 4px solid transparent;
}
.gpsc-cat-main nav::-webkit-scrollbar {
  width: 4px;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  background: #F1F1F1;
}
.gpsc-cat-main nav::-webkit-scrollbar-thumb {
  background-color: #ccc;
}
.gpsc-cat-main nav::-webkit-scrollbar-thumb:hover {
  background-color: #818181; 
}
@media (min-width: 782px) {
  .gpsc-cat-main nav svg.gpsc-responsive-icon-1,
  .gpsc-cat-main nav svg.gpsc-responsive-icon-2,
  .gpsc-cat-main nav .gpsc-show-menu,
  .gpsc-cat-main nav .gpsc-hide-menu {
    display: none;
  }
  .gpsc-cat-main nav .gpsc-main-icon-sec {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start !important;
    gap: 5px;
    font-size: 20px;
    font-weight: bold;
    line-height: 20px;
  }
  .gpsc-cat-main nav svg.gpsc-main-icon {
    fill: #333;
    display: block;
    margin: 10px;
    height: 22px;
    width: 22px;
    cursor: pointer;
  }
}
@media (max-width: 781px) {
  .gpsc-cat-main nav .gpsc-main-icon-sec {
    display: none;
  }
  #gpsc--products-' . esc_attr($post_id) . ' .gpsc-nav-links {
    position: absolute;
    background: ' . $wpgpsc_shortcode_colors_single_product['background'] . ';
    top: 0;
    left: 0;
    z-index: 2;
    transition: 1s;
    text-align: left;
  }
  .gpsc-cat-main nav {
    overflow: unset !important;
  }
  .gpsc-cat-main nav .gpsc-nav-links {
    overflow: auto;
  }
  .gpsc-cat-main nav .gpsc-show-menu,
  .gpsc-cat-main nav .gpsc-hide-menu {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start !important;
    gap: 5px;
    font-size: 20px;
    font-weight: bold;
    line-height: 20px;
  }
  .gpsc-cat-main nav svg.gpsc-responsive-icon-1,
  .gpsc-cat-main nav svg.gpsc-responsive-icon-2 {
    fill: #333;
    display: block;
    margin: 10px;
    height: 22px;
    width: 22px;
    cursor: pointer;
  }';
?>
</style>
<div id="gpsc--products-<?php echo esc_attr($post_id); ?>" class="gpsc-cat-main">
  <?php if (!empty(get_the_title($post_id)) && $wpgpsc_section_title_show): ?>
    <h2 class="gpsc--section-title-<?php echo esc_attr($post_id); ?> gpsc--section-title"><?php echo esc_html(get_the_title($post_id)); ?></h2>
  <?php endif; ?>
  <?php
  echo '<nav id="gpsc-nav">
	<div class="gpsc-nav-links" id="gpsc-navlinks">
	  <div class="gpsc-hide-menu" onclick="hideMenu()"><svg class="gpsc-responsive-icon-1" style="fill: #c02525;"
		  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
		  <path
			d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
		</svg><span>' . $wpgpsc_cat_menu_name . '</span>
	  </div>
	  <div class= "gpsc-main-icon-sec"><svg class="gpsc-main-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" >
	  <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
	</svg>
	<span>' . $wpgpsc_cat_menu_name . '</span>
	</div>
	  <ul id="gpsc-nav-menu">';
  /**
   * Get link before.
   */
  if (!empty($wpgpsc_cat_menu_item_before_accordion['wpgpsc_cat_menu_item_before'])) {

    foreach ($wpgpsc_cat_menu_item_before_accordion['wpgpsc_cat_menu_item_before'] as $key => $value) {

      echo '<li><a class="gpsc-menu-item" href="' . esc_url($value['wpgpsc_cat_menu_item_before_link']['url']) . '" target="' . $value['wpgpsc_cat_menu_item_before_link']['target'] . '">';
      if (empty($value['wpgpsc_cat_menu_item_before_icon']['url'])) {
        echo '<img class="gpsc-main-img" src=' . $wpgpsc_cat_default_icon['url'] . ' />';
      } else {
        echo '<img class="gpsc-main-img" src=' . esc_url($value['wpgpsc_cat_menu_item_before_icon']['url']) . ' />';
      }
      echo '<span>' . esc_html($value['wpgpsc_cat_menu_item_before_link']['text']) . '</span></a></li>';
    }
  }

  /**
   * Get categories.
   */
  foreach ($gpsc_all_categories as $gpsc_cat) {

    if ($wpgpsc_cat_parent_only) {

      if (0 === $gpsc_cat->category_parent) {

        $gpsc_cat_id = $gpsc_cat->term_id;
        $gpsc_cat_name = $gpsc_cat->name;
        $gpsc_cat_url = get_term_link($gpsc_cat->slug, 'product_cat');
        $gpsc_cat_count = $gpsc_cat->count;
        $gpsc_get_cat_thum_id = get_term_meta($gpsc_cat_id, 'thumbnail_id', true);
        $gpsc_get_cat_thum_url = wp_get_attachment_url($gpsc_get_cat_thum_id);

        echo '<li><a class="gpsc-menu-item" href="' . esc_url($gpsc_cat_url) . '">';
        if (empty($gpsc_get_cat_thum_url)) {

          echo '<img class="gpsc-main-img" src="' . $wpgpsc_cat_default_icon['url'] . '"/>';

        } else {

          echo '<img class="gpsc-main-img" src=' . esc_url($gpsc_get_cat_thum_url) . ' />';

        }
        echo ' <span>' . esc_html($gpsc_cat_name) . '</span></a></li>';
      }
    } else {

      if (0 === $gpsc_cat->category_parent) {

        $gpsc_cat_id = $gpsc_cat->term_id;
        $gpsc_cat_name = $gpsc_cat->name;
        $gpsc_cat_url = get_term_link($gpsc_cat->slug, 'product_cat');
        $gpsc_cat_count = $gpsc_cat->count;
        $gpsc_get_cat_thum_id = get_term_meta($gpsc_cat_id, 'thumbnail_id', true);
        $gpsc_get_cat_thum_url = wp_get_attachment_url($gpsc_get_cat_thum_id);

        $gpsc_sub_cat_args = array(
          'taxonomy' => 'product_cat',
          'child_of' => 0,
          'parent' => $gpsc_cat_id,
          'orderby' => 'name',
          'hide_empty' => 1,
        );

        $gpsc_all_sub_categories = get_categories($gpsc_sub_cat_args);

        if (!$gpsc_all_sub_categories) {
          echo '<li>
                    <a class="gpsc-menu-item" href="' . esc_url($gpsc_cat_url) . '">';
        } else {
          echo '<li class="gpsc-sub-menu">
                    <a class="gpsc-menu-item" href="#">';
        }
        if (empty($gpsc_get_cat_thum_url)) {

          echo '<img class="gpsc-main-img" src="' . $wpgpsc_cat_default_icon['url'] . ' "/>';

        } else {

          echo '<img class="gpsc-main-img" src=' . esc_url($gpsc_get_cat_thum_url) . ' />';

        }
        echo '<span>' . esc_html($gpsc_cat_name) . '</span>';

        if (!$gpsc_all_sub_categories) {

          echo '</a>';
        } else {

          echo '<svg class="gpsc-sub-menu-icon gpsc-svg-down gpsc-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                      <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                    </svg></a>
                          <ul>';

          foreach ($gpsc_all_sub_categories as $sub_category) {

            $gpsc_sub_cat_url = get_term_link($sub_category->slug, 'product_cat');

            echo '<li><a class="gpsc-menu-item gpsc-sub-menu-item" href="' . esc_url($gpsc_sub_cat_url) . '"><span>' . esc_html($sub_category->name) . '</span></a></li>';
          }
          echo '</ul>';
        }
        echo '</li>';

      }
    }
  }

  /**
   * Get link after.
   */
  if (!empty($wpgpsc_cat_menu_item_after_accordion['wpgpsc_cat_menu_item_after'])) {

    foreach ($wpgpsc_cat_menu_item_after_accordion['wpgpsc_cat_menu_item_after'] as $key => $value) {

      echo '<li><a class="gpsc-menu-item" href="' . esc_url($value['wpgpsc_cat_menu_item_after_link']['url']) . '" target="' . $value['wpgpsc_cat_menu_item_after_link']['target'] . '">';
      if (empty($value['wpgpsc_cat_menu_item_after_icon']['url'])) {
        echo '<img class="gpsc-main-img" src=' . $wpgpsc_cat_default_icon['url'] . ' />';
      } else {
        echo '<img class="gpsc-main-img" src=' . esc_url($value['wpgpsc_cat_menu_item_after_icon']['url']) . ' />';
      }
      echo '<span>' . esc_html($value['wpgpsc_cat_menu_item_after_link']['text']) . '</span></a></li>';
    }
  }
  ?>
  <?php
  echo '</ul>
    </div>
    <div class= "gpsc-show-menu" onclick="showMenu()"><svg class="gpsc-responsive-icon-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" >
      <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
    </svg>
    <span>' . $wpgpsc_cat_menu_name . '</span>
    </div>
  </nav>
</div>';
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script>
    // Active Menu
    document.querySelectorAll("#gpsc-nav-menu li a").forEach((el) => {
      el.onclick = () => {
        document
          .querySelectorAll("#gpsc-nav-menu li a")
          .forEach((el) => el.classList.remove("active"));
        el.classList.add("active");
      };
    });
    // Resnosive menu-icon
    var navlinks = document.getElementById("gpsc-navlinks");
    var nav = document.getElementById("gpsc-nav");
    function hideMenu() {
      navlinks.style.left = "-400px";
    }
    function showMenu() {
      navlinks.style.left = "0";
    }
    // Menu toggle
    $(".gpsc-sub-menu ul").hide();
    $(".gpsc-sub-menu a").click(function () {
      $(this).parent(".gpsc-sub-menu").children("ul").slideToggle("100");
      $(this).find(".gpsc-right").toggleClass("gpsc-svg-up gpsc-svg-down");
    });
  </script>