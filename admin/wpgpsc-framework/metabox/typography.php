<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section
//
WPGPSC::createSection(
	$wpgpsc_page_opts,
	array(
		'title'  => 'Typography',
		'icon'   => 'fas fa-text-height',
		'fields' => array(

			array(
				'type'    => 'content',
				'content' => '<div class="wpgpsc--menu-detail">
					<strong>Typography</strong>
					<a href="https://pluginic.com/support/" target="_blank" class="">Need Help?</a>
					<br>
					<p>Finally, you can control and customize every aspect of your text content using the following set of options. These range from the font family, size, and line height, to letter spacing, and more. They\'re designed to ensure that your content not only communicates effectively but also contributes positively to the overall aesthetics.</p>
				</div>',
			),

			array(
				'id'         => 'gpsc_shortcode_shortcode_gfont_load',
				'type'       => 'switcher',
				'title'      => __( 'Load Google Fonts', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'On/Off google fonts.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'On', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Off', 'gpsc-product-slider-carousel' ),
				'text_width' => 70,
				'default'    => false,
			),
			array(
				'id'           => 'gpsc_shortcode_section_title_typo',
				'type'         => 'typography',
				'title'        => __( 'Section Title', 'gpsc-product-slider-carousel' ),
				'subtitle'     => __( 'Set section title font properties.', 'gpsc-product-slider-carousel' ),
				'color'        => false,
				'preview'      => 'always',
				'preview_text' => __( 'Product Slider Carousel', 'gpsc-product-slider-carousel' ),
			),
			array(
				'id'           => 'gpsc_shortcode_product_name_typo',
				'type'         => 'typography',
				'title'        => __( 'Product Name', 'gpsc-product-slider-carousel' ),
				'subtitle'     => __( 'Set product name font properties.', 'gpsc-product-slider-carousel' ),
				'color'        => false,
				'preview'      => 'always',
				'preview_text' => __( 'Product Slider Carousel', 'gpsc-product-slider-carousel' ),
			),
			array(
				'id'           => 'gpsc_shortcode_product_excerpt_typo',
				'type'         => 'typography',
				'title'        => __( 'Product Excerpt', 'gpsc-product-slider-carousel' ),
				'subtitle'     => __( 'Set product excerpt font properties.', 'gpsc-product-slider-carousel' ),
				'color'        => false,
				'preview'      => 'always',
				'preview_text' => __( 'Product Slider Carousel', 'gpsc-product-slider-carousel' ),
			),
			array(
				'id'           => 'gpsc_shortcode_product_price_typo',
				'type'         => 'typography',
				'title'        => __( 'Product Price', 'gpsc-product-slider-carousel' ),
				'subtitle'     => __( 'Set product price font properties.', 'gpsc-product-slider-carousel' ),
				'color'        => false,
				'preview'      => 'always',
				'preview_text' => __( 'Product Slider Carousel', 'gpsc-product-slider-carousel' ),
			),
			array(
				'id'           => 'gpsc_shortcode_product_btn_typo',
				'type'         => 'typography',
				'title'        => __( 'Product Button', 'gpsc-product-slider-carousel' ),
				'subtitle'     => __( 'Set product button \'Add to Cart\' font properties.', 'gpsc-product-slider-carousel' ),
				'color'        => false,
				'preview'      => 'always',
				'preview_text' => __( 'Product Slider Carousel', 'gpsc-product-slider-carousel' ),
			),
		),
	)
);
