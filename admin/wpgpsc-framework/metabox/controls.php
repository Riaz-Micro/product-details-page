<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section
//
WPGPSC::createSection(
	$wpgpsc_page_opts,
	array(
		'title'  => __( 'Controls', 'gpsc-product-slider-carousel' ),
		'icon'   => 'fas fa-cogs',
		'fields' => array(

			array(
				'type'    => 'content',
				'content' => '<div class="wpgpsc--menu-detail">
					<strong>Slider Controls</strong>
					<a href="https://pluginic.com/support/" target="_blank" class="">Need Help?</a>
					<br>
					<p>This bundle of options, you gain the ability to establish a numerical range, essentially dictating the number of items that should appear on your slider at any given time. You can customize not only what content appears on your slider but also how it behaves.</p>
				</div>',
			),

			array(
				'id'         => 'wpgpsc_shortcode_slider_navigation',
				'type'       => 'switcher',
				'title'      => __( 'Show Slider Navigation', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide slider navigation.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => true,
			),
			array(
				'id'         => 'wpgpsc_shortcode_slider_nav_icon',
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
				'dependency' => array( 'wpgpsc_shortcode_slider_navigation', '==', 'true' ),
			),

			array(
				'id'         => 'wpgpsc_shortcode_slider_pagination',
				'type'       => 'switcher',
				'title'      => __( 'Show Slider Pagination', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Show/Hide slider pagination.', 'gpsc-product-slider-carousel' ),
				'text_on'    => __( 'Show', 'gpsc-product-slider-carousel' ),
				'text_off'   => __( 'Hide', 'gpsc-product-slider-carousel' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'         => 'wpgpsc_shortcode_slider_pagination_type',
				'type'       => 'image_select',
				'title'      => __( 'Pagination Type', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Set a pagination type.', 'gpsc-product-slider-carousel' ),
				'options'    => array(
					'pag-1' => GPSC_PLUG_DIR_URL_FILE . 'admin/img/paginations/pag-1.jpg',
					'pag-2' => GPSC_PLUG_DIR_URL_FILE . 'admin/img/paginations/pag-2.jpg',
					'pag-3' => GPSC_PLUG_DIR_URL_FILE . 'admin/img/paginations/pag-3.jpg',
					'pag-4' => GPSC_PLUG_DIR_URL_FILE . 'admin/img/paginations/pag-4.jpg',
					'pag-5' => GPSC_PLUG_DIR_URL_FILE . 'admin/img/paginations/pag-5.jpg',
					'pag-6' => GPSC_PLUG_DIR_URL_FILE . 'admin/img/paginations/pag-6.jpg',
					'pag-7' => GPSC_PLUG_DIR_URL_FILE . 'admin/img/paginations/pag-7.jpg',
					'pag-8' => GPSC_PLUG_DIR_URL_FILE . 'admin/img/paginations/pag-8.jpg',
				),
				'default'    => 'pag-1',
				'class'      => 'wpgpsc-pag-img-select',
				'dependency' => array( 'wpgpsc_shortcode_slider_pagination', '==', 'true' ),
			),
			array(
				'id'       => 'wpgpsc_shortcode_slider_speed',
				'type'     => 'spinner',
				'title'    => __( 'Slider Speed', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Duration of transition between slides (in ms). Default 300ms.', 'gpsc-product-slider-carousel' ),
				'unit'     => 'ms',
				'default'  => 300,
			),
			array(
				'id'       => 'wpgpsc_shortcode_slider_autoplay',
				'type'     => 'switcher',
				'title'    => __( 'Slider Autoplay', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'On/Off slider autoplay.', 'gpsc-product-slider-carousel' ),
				'default'  => false,
			),
			array(
				'id'         => 'wpgpsc_shortcode_slider_autoplay_delay',
				'type'       => 'spinner',
				'title'      => __( 'Slider Autoplay Delay', 'gpsc-product-slider-carousel' ),
				'subtitle'   => __( 'Delay between transitions (in ms). Default 500ms.', 'gpsc-product-slider-carousel' ),
				'unit'       => 'ms',
				'default'    => 5000,
				'dependency' => array( 'wpgpsc_shortcode_slider_autoplay', '==', 'true' ),
			),
			array(
				'id'       => 'wpgpsc_shortcode_slider_loop',
				'type'     => 'switcher',
				'title'    => __( 'Slider Loop', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set to true to enable continuous loop mode.', 'gpsc-product-slider-carousel' ),
				'default'  => false,
			),
			array(
				'id'       => 'wpgpsc_shortcode_grab_cursor',
				'type'     => 'switcher',
				'title'    => __( 'Grab Cursor', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'User will see the "grab" cursor when hover on slider.', 'gpsc-product-slider-carousel' ),
				'default'  => true,
			),
			array(
				'id'       => 'wpgpsc_shortcode_slider_direction',
				'type'     => 'button_set',
				'title'    => __( 'Direction', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set a direction of the slider.<br><span style="color: #ff835c;">Only available on slider module.</span>', 'gpsc-product-slider-carousel' ),
				'options'  => array(
					'horizontal' => 'Horizontal',
					'vertical'   => 'Vertical',
				),
				'default'  => 'horizontal',
			),
			array(
				'id'          => 'wpgpsc_shortcode_slider_effect',
				'type'        => 'select',
				'title'       => 'Effect',
				'subtitle'    => 'Set a transition effect.',
				'placeholder' => 'Select an option',
				'options'     => array(
					'slide'     => 'Slide',
					'fade'      => 'Fade',
					'coverflow' => 'Coverflow',
					'flip'      => 'Flip',
					'cards'     => 'Cards',
				),
				'default'     => 'slide',
			),
			array(
				'id'       => 'wpgpsc_shortcode_initial_slide',
				'type'     => 'spinner',
				'title'    => __( 'Initial Slide Number', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set the index number of initial slide.', 'gpsc-product-slider-carousel' ),
				'default'  => 1,
			),
			array(
				'id'       => 'wpgpsc_shortcode_slides_per_group',
				'type'     => 'spinner',
				'title'    => __( 'Slides Per Group', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set numbers of slides to define and enable group sliding.', 'gpsc-product-slider-carousel' ),
				'default'  => 1,
			),
			array(
				'id'       => 'wpgpsc_shortcode_lazy_load',
				'type'     => 'switcher',
				'title'    => __( 'Lazy Loading', 'gpsc-product-slider-carousel' ),
				'subtitle' => __( 'Set lazy load to improve performance and save system resources.', 'gpsc-product-slider-carousel' ),
				'default'  => false,
			),

		),
	)
);
