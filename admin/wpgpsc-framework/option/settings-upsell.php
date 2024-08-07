<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section.
//
WPGPSC::createSection(
	$prefix,
	array(
		'title'  => __( 'Upsell', 'gpsc-product-slider-carousel' ),
		'icon'   => 'fa fa-line-chart',
		'fields' => array(

			/**
			 * Remove all notice from this admin page.
			 * Also as well this content field.
			 * And including this page styles.
			 */
			array(
				'type'    => 'content',
				'content' => '<style>[class*="notice"],.faqsu-field-content-style{display: none !important;}.wpgpsc-field.wpgpsc-field-notice,.wpgpsc-field.wpgpsc-field-notice .wpgpsc-notice{display: block !important;background: #fff;max-width: 900px;}
				.wpgpsc-header-inner {
					background: linear-gradient(rgb(103 58 183 / 30%),hsl(186.79deg 100% 41.57% / 3%)) !IMPORTANT;
					padding: 32px 25px;
				}
				.wpgpsc-header-inner h1 {
					display: flex;
					justify-content: center;
					align-items: center;
					gap: 20px;
				}
				.wpgpsc-header-inner h1 img {
					border: 1px solid #a9a9a9;
					border-radius: 5px;
					filter: drop-shadow(1px 2px 3px gray);
				}
				.wpgpsc-header-inner h1 strong {
					font-size: 28px;
					line-height: 32px;
					font-weight: 900;
					text-shadow: 1px 2px 0px white;
				}
				.wpgpsc-header-inner h1 strong span {
					display: block;
					font-size: 14px;
					font-weight: normal;
				}
				.wpgpsc-header-inner .wpgpsc-buttons .button {
					padding: 5px 25px;
					font-size: 14px;
					margin: 0 5px;
				}
				</style>',
				'class'   => 'faqsu-field-content-style',
			),

			array(
				'type'    => 'notice',
				'style'   => 'warning',
				'content' => '<strong>Note:</strong> Up-sells are displayed on the individual product page.<br>
				To showcase upsell products, it\'s essential that you first add the upsell product.<br>
				Please refer to the detailed <a href="https://woocommerce.com/document/related-products-up-sells-and-cross-sells/" target="_blank">documentation</a> for further instructions.',
			),

			array(
				'id'       => 'wpgpsc_upsell_slider_show',
				'type'     => 'switcher',
				'title'    => __( 'Upsell Product Slider', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Turn off if you want to keep the default view of upsell products.', 'gpsc-product-slider-carousel' ),
				'default'  => true,
			),
			array(
				'type'       => 'submessage',
				'style'      => 'warning',
				'content'    => 'Upsell products default view is showing now. All of the settings below are not working.',
				'dependency' => array( 'wpgpsc_upsell_slider_show', '==', 'false' ),
			),
			array(
				'id'         => 'wpgpsc_upsell_section_title_show',
				'type'       => 'switcher',
				'title'      => __( 'Show the section title', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide the section title.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => true,
			),
			array(
				'id'         => 'wpgpsc_upsell_section_title_text',
				'type'       => 'text',
				'title'      => __( 'Section Title Text', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Set your section title text.', 'gpsc-product-slider-carousel' ),
				'default'    => __( 'You may also like..', 'gpsc-product-slider-carousel' ),
				'dependency' => array( 'wpgpsc_upsell_section_title_show', '==', 'true' ),
			),
			array(
				'id'         => 'wpgpsc_upsell_product_img_show',
				'type'       => 'switcher',
				'title'      => __( 'Product Image', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide product image.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => true,
			),
			array(
				'id'         => 'wpgpsc_upsell_product_name_show',
				'type'       => 'switcher',
				'title'      => __( 'Product Name', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide product name.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => true,
			),
			array(
				'id'         => 'wpgpsc_upsell_product_excerpt_show',
				'type'       => 'switcher',
				'title'      => __( 'Product Excerpt', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide product excerpt.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'         => 'wpgpsc_upsell_product_cat_show',
				'type'       => 'switcher',
				'title'      => __( 'Product Category', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide product category.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'         => 'wpgpsc_upsell_product_rating_show',
				'type'       => 'switcher',
				'title'      => __( 'Product Rating', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide product rating.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'         => 'wpgpsc_upsell_product_stack_show',
				'type'       => 'switcher',
				'title'      => __( 'Product Stack Status', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide product stack status.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'         => 'wpgpsc_upsell_product_price_show',
				'type'       => 'switcher',
				'title'      => __( 'Product Price', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide product price.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => true,
			),
			array(
				'id'         => 'wpgpsc_upsell_product_btn_show',
				'type'       => 'switcher',
				'title'      => __( 'Product Button', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide product button.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => false,
			),

			//
			// Slider Settings.
			//
			array(
				'type'    => 'subheading',
				'content' => '<span style="display: block;text-align: center;"><i class="fas fa-grip-lines" style="color: #c1c1c1;margin: 0 10px;"></i> Slider Settings For Up-Sell Products <i class="fas fa-grip-lines" style="color: #c1c1c1;margin: 0 10px;"></i></span>',
			),
			array(
				'id'       => 'wpgpsc_upsell_slider_speed',
				'type'     => 'spinner',
				'title'    => __( 'Slider Speed', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Duration of transition between slides (in ms). Default 300ms.', 'gpsc-product-slider-carousel' ),
				'unit'     => 'ms',
				'default'  => 300,
			),
			array(
				'id'       => 'wpgpsc_upsell_slider_autoplay',
				'type'     => 'switcher',
				'title'    => __( 'Slider Autoplay', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'On/Off slider autoplay.', 'gpsc-product-slider-carousel' ),
				'default'  => false,
			),
			array(
				'id'         => 'wpgpsc_upsell_slider_autoplay_delay',
				'type'       => 'spinner',
				'title'      => __( 'Slider Autoplay Delay', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Delay between transitions (in ms). Default 500ms.', 'gpsc-product-slider-carousel' ),
				'unit'       => 'ms',
				'default'    => 5000,
				'dependency' => array( 'wpgpsc_upsell_slider_autoplay', '==', 'true' ),
			),
			array(
				'id'       => 'wpgpsc_upsell_slider_loop',
				'type'     => 'switcher',
				'title'    => __( 'Slider Loop', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set to true to enable continuous loop mode.', 'gpsc-product-slider-carousel' ),
				'default'  => false,
			),
			array(
				'id'       => 'wpgpsc_upsell_slides_per_view',
				'type'     => 'spinner',
				'title'    => __( 'Slide Per View', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Number of slides per view (slides visible at the same time on slider\'s container).', 'gpsc-product-slider-carousel' ),
				'default'  => 4,
			),
			array(
				'id'       => 'wpgpsc_upsell_slides_space_between',
				'type'     => 'spinner',
				'title'    => __( 'Slider Space Between', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Distance between slides in px.', 'gpsc-product-slider-carousel' ),
				'default'  => 20,
			),
			array(
				'id'         => 'wpgpsc_upsell_slider_navigation',
				'type'       => 'switcher',
				'title'      => __( 'Show Slider Navigation', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide slider navigation.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => true,
			),
			array(
				'id'         => 'wpgpsc_upsell_slider_nav_icon',
				'type'       => 'button_set',
				'title'      => __( 'Navigation Icon', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Set a icon for slider navigation.', 'gpsc-product-slider-carousel' ),
				'options'    => array(
					'ico-1' => '<i class="fas fa-angle-right"></i>',
					'ico-2' => '<i class="fas fa-angle-double-right"></i>',
					'ico-3' => '<i class="fas fa-caret-right"></i>',
					'ico-4' => '<i class="fas fa-long-arrow-alt-right"></i>',
					'ico-5' => '<i class="far fa-caret-square-right"></i>',
					'ico-6' => '<i class="far fa-arrow-alt-circle-right"></i>',
					'ico-7' => '<i class="fas fa-caret-square-right"></i>',
					'ico-8' => '<i class="fas fa-chevron-circle-right"></i>',
					'ico-9' => '<i class="far fa-hand-point-right"></i>',
				),
				'default'    => 'ico-1',
				'dependency' => array( 'wpgpsc_upsell_slider_navigation', '==', 'true' ),
			),
			array(
				'id'         => 'wpgpsc_upsell_slider_pagination',
				'type'       => 'switcher',
				'title'      => __( 'Show Slider Pagination', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide slider pagination.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'         => 'wpgpsc_upsell_slider_pagination_type',
				'type'       => 'button_set',
				'title'      => __( 'Pagination Type', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Set a pagination type.', 'gpsc-product-slider-carousel' ),
				'options'    => array(
					'bullets'     => __( 'Bullets', 'gpsc-product-slider-carousel' ),
					'fraction'    => __( 'Fraction', 'gpsc-product-slider-carousel' ),
					'progressbar' => __( 'Progressbar', 'gpsc-product-slider-carousel' ),
				),
				'default'    => 'bullets',
				'dependency' => array( 'wpgpsc_upsell_slider_pagination', '==', 'true' ),
			),
		),
	)
);
