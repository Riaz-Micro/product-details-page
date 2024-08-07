<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section
//
WPGPSC::createSection(
	$wpgpsc_page_opts,
	array(
		'title'  => 'Colors',
		'icon'   => 'fas fa-fill-drip',
		'fields' => array(

			array(
				'type'    => 'content',
				'content' => '<div class="wpgpsc--menu-detail">
									<strong>Colors</strong>
									<a href="https://pluginic.com/support/" target="_blank" class="">Need Help?</a>
									<br>
									<p>Once you\'ve organized your content, this plugin offers a broad spectrum of customization options to align with your theme colors. Each module\'s color can be individually adjusted and fine-tuned to suit your preferences. This ensures that your brand message is conveyed effectively through the visual elements of your site.</p>
								</div>',
			),

			array(
				'id'       => 'wpgpsc_shortcode_color_brand',
				'type'     => 'color',
				'title'    => 'Brand Color',
				'subtitle' => 'The brand color affects significant parts of your selected module, allowing it to blend seamlessly with your theme. Even after selecting the brand color, you can override specific parts of the module using the color options provided below.',
				'default'  => '#286c66',
			),
			array(
				'id'       => 'wpgpsc_shortcode_colors_section',
				'type'     => 'color_group',
				'title'    => 'Main Section',
				'subtitle' => 'Set colors of your main section.',
				'options'  => array(
					'background' => __( 'Background', 'gpsc-product-slider-carousel' ),
					'title'      => __( 'Title', 'gpsc-product-slider-carousel' ),
				),
			),
			array(
				'id'       => 'wpgpsc_shortcode_colors_single_product',
				'type'     => 'color_group',
				'title'    => 'Single Item',
				'subtitle' => 'Set colors of a single items part.',
				'options'  => array(
					'background' => __( 'Background', 'gpsc-product-slider-carousel' ),
					'title'      => __( 'Title', 'gpsc-product-slider-carousel' ),
					'excerpt'    => __( 'Excerpt', 'gpsc-product-slider-carousel' ),
					'category'   => __( 'Category', 'gpsc-product-slider-carousel' ),
					'tag'        => __( 'Tag', 'gpsc-product-slider-carousel' ),
					'stock'      => __( 'Stock', 'gpsc-product-slider-carousel' ),
					'price'      => __( 'Price', 'gpsc-product-slider-carousel' ),
				),
			),
			array(
				'id'       => 'wpgpsc_shortcode_colors_stars',
				'type'     => 'color_group',
				'title'    => 'Stars Rating',
				'subtitle' => 'Set colors of product star ratings.',
				'options'  => array(
					'filled'   => __( 'Filled', 'gpsc-product-slider-carousel' ),
					'unfilled' => __( 'Unfilled', 'gpsc-product-slider-carousel' ),
				),
				'default'  => array(
					'filled'   => '#FFC107',
					'unfilled' => '#dfdfdf',
				),
			),
			array(
				'id'       => 'wpgpsc_shortcode_colors_atc_button',
				'type'     => 'color_group',
				'title'    => 'Add to Cart Button',
				'subtitle' => 'Set color of the button \'Add to cart\'',
				'options'  => array(
					'background' => __( 'Background', 'gpsc-product-slider-carousel' ),
					'text'       => __( 'Text', 'gpsc-product-slider-carousel' ),
					'bg-hover'   => __( 'Background Hover', 'gpsc-product-slider-carousel' ),
					'txt-hover'  => __( 'Text Hover', 'gpsc-product-slider-carousel' ),
				),
				'default'  => array(
					'bg-hover'  => '#333333',
					'txt-hover' => '#ffffff',
				),
			),
			array(
				'id'       => 'wpgpsc_shortcode_slider_nav_colors',
				'type'     => 'color_group',
				'title'    => __( 'Navigation Colors', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set colors for slider navigation.', 'gpsc-product-slider-carousel' ),
				'options'  => array(
					'icon'             => __( 'Icon', 'gpsc-product-slider-carousel' ),
					'icon-hover'       => __( 'Icon Hover', 'gpsc-product-slider-carousel' ),
					'background'       => __( 'Background', 'gpsc-product-slider-carousel' ),
					'background-hover' => __( 'Background Hover', 'gpsc-product-slider-carousel' ),
				),
				'default'  => array(
					'icon'             => '#ffffff',
					'icon-hover'       => '#ffffff',
					'background-hover' => '#333333',
				),
			),
			array(
				'id'       => 'wpgpsc_shortcode_slider_pagination_colors',
				'type'     => 'color_group',
				'title'    => __( 'Pagination/Tab Colors', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set colors for slider pagination or group tab.', 'gpsc-product-slider-carousel' ),
				'options'  => array(
					'active'     => __( 'Active', 'gpsc-product-slider-carousel' ),
					'background' => __( 'Background', 'gpsc-product-slider-carousel' ),
				),
				'default'  => array(
					'background' => '#c1c1c1',
				),
			),
			array(
				'type'    => 'subheading',
				'content' => '<span style="display: block;text-align: center;"><i class="fas fa-grip-lines" style="color: #c1c1c1;margin: 0 10px;"></i> Miscellaneous <i class="fas fa-grip-lines" style="color: #c1c1c1;margin: 0 10px;"></i></span>',
			),
			array(
				'id'       => 'wpgpsc_shortcode_color_overlay',
				'type'     => 'color',
				'title'    => 'Overlay/Banner Background',
				'subtitle' => 'Set a color of the overlay or banner background that works with background image.',
				'default'  => '#548682',
			),
			array(
				'id'       => 'wpgpsc_shortcode_colors_banner_content',
				'type'     => 'color_group',
				'title'    => __( 'Banner Content', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set colors for the banner content.', 'gpsc-product-slider-carousel' ),
				'options'  => array(
					'title'      => __( 'Banner Title', 'gpsc-product-slider-carousel' ),
					'subtitle'   => __( 'Subtitle', 'gpsc-product-slider-carousel' ),
					'button-bg'  => __( 'Button', 'gpsc-product-slider-carousel' ),
					'button-txt' => __( 'Button Text', 'gpsc-product-slider-carousel' ),
				),
				'default'  => array(
					'title'      => '#ffffff',
					'subtitle'   => '#BBD2C8',
					'button-txt' => '#ffffff',
				),
			),
			array(
				'id'       => 'wpgpsc_shortcode_color_border',
				'type'     => 'color',
				'title'    => 'Border/Box Shadow',
				'subtitle' => 'Set a color for the border wherever it is.',
			),
			array(
				'id'       => 'wpgpsc_cd_timer_colors_content',
				'type'     => 'color_group',
				'title'    => __( 'Countdown Timer Content', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set colors for the countdown timer content.', 'gpsc-product-slider-carousel' ),
				'options'  => array(
					'heading'    => __( 'Heading', 'gpsc-product-slider-carousel' ),
					'subheading' => __( 'Subheading', 'gpsc-product-slider-carousel' ),
				),
				'default'  => array(
					'heading'    => '#ffffff',
					'subheading' => '#e3e3e3',
					'colon'      => '#ffffff',
				),
			),
			array(
				'id'       => 'wpgpsc_shortcode_cd_timer_colors',
				'type'     => 'color_group',
				'title'    => __( 'Countdown Timer Colors', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set colors for the countdown timer box.', 'gpsc-product-slider-carousel' ),
				'options'  => array(
					'background' => __( 'Background', 'gpsc-product-slider-carousel' ),
					'border'     => __( 'Border', 'gpsc-product-slider-carousel' ),
					'number'     => __( 'Counter Number', 'gpsc-product-slider-carousel' ),
					'period'     => __( 'Period Text', 'gpsc-product-slider-carousel' ),
					'colon'      => __( 'Colon Symbol', 'gpsc-product-slider-carousel' ),
				),
				'default'  => array(
					'border' => '#ffffff',
					'number' => '#ffffff',
					'period' => '#ffffff',
					'colon'  => '#ffffff',
				),
			),
			array(
				'id'       => 'wpgpsc_cd_timer_colors_btn',
				'type'     => 'color_group',
				'title'    => __( 'Countdown Timer Button', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set colors for the countdown timer button.', 'gpsc-product-slider-carousel' ),
				'options'  => array(
					'background' => __( 'Background', 'gpsc-product-slider-carousel' ),
					'text'       => __( 'Text', 'gpsc-product-slider-carousel' ),
					'bg-hover'   => __( 'Background Hover', 'gpsc-product-slider-carousel' ),
					'txt-hover'  => __( 'Text Hover', 'gpsc-product-slider-carousel' ),
				),
				'default'  => array(
					'background' => '#ffffff',
					'text'       => '#040f2b',
					'txt-hover'  => '#ffffff',
				),
			),
		),
	)
);
