<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section.
WPGPSC::createSection(
	$prefix,
	array(
		'title'  => __( 'Typography', 'gpsc-product-slider-carousel' ),
		'icon'   => 'fa fa-font',
		'fields' => array(

			array(
				'type'    => 'notice',
				'style'   => 'warning',
				'content' => '<strong>Note:</strong> These typography options are only available for elements in global settings,<br>
				such as upsell, cross-sell, related slider, and the \'Add to Cart\' buttons.<br>
				Typography for shortcode-based modules can be found in the <a href="' . get_site_url() . '/wp-admin/edit.php?post_type=gpsc_slider_carousel" target="_blank">shortcode area</a>.',
			),
			array(
				'id'       => 'gpsc_global_typography_brand_color',
				'type'     => 'color',
				'title'    => __( 'Brand Color', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set brand color for global settings.', 'gpsc-product-slider-carousel' ),
				'default'  => '#000000',
			),
			array(
				'id'         => 'gpsc_load_global_google_fonts',
				'type'       => 'switcher',
				'title'      => __( 'Load Google Fonts', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'On/Off google fonts that load Single Page & Cart Page.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'On', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Off', 'gpsc-product-slider-carousel' ),
				'text_width' => 70,
				'default'    => false,
			),
			array(
				'id'             => 'gpsc_global_typography_content',
				'type'           => 'typography',
				'title'          => __( 'Section Content Font', 'gpsc-product-slider-carousel' ),
				'subtitle'       => __( 'Set typography for the content.', 'gpsc-product-slider-carousel' ),
				'font_style'     => false,
				'font_size'      => false,
				'line_height'    => false,
				'letter_spacing' => false,
				'text_align'     => false,
				'text_transform' => false,
				'color'          => false,
				'preview'        => 'always',
				'preview_text'   => __( 'Product Slider Carousel : Content', 'gpsc-product-slider-carousel' ),
			),

		),
	)
);
