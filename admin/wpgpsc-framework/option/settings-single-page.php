<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section.
WPGPSC::createSection(
	$prefix,
	array(
		'title'  => __( 'Single Product Page', 'gpsc-product-slider-carousel' ),
		'icon'   => 'fas fa-tshirt',
		'fields' => array(

			array(
				'id'         => 'gpsc_woo_templ_activated',
				'type'       => 'switcher',
				'title'      => 'Single Product Page Template',
				'subtitle'   => 'Want to execute single product page template or not?',
				'text_on'    => 'Activate',
				'text_off'   => 'Deactivate',
				'text_width' => 100,
				'default'    => false,
			),
			/* array(
				'id'         => 'gpsc_woo_templ_select',
				'type'       => 'image_select',
				'title'      => 'Template Selection',
				'subtitle'   => 'Select a template for single product pages.',
				'options'    => array(
				  'templ-1' => 'https://via.placeholder.com/100x150',
				  'templ-2' => 'https://via.placeholder.com/100x150',
				  'templ-3' => 'https://via.placeholder.com/100x150',
				),
				'default'    => 'templ-1',
				'dependency' => array( 'gpsc_woo_templ_activated', '==', 'true' ),
			), */
		),
	)
);
