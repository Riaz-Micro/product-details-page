<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section.
WPGPSC::createSection(
	$prefix,
	array(
		'title'  => __( 'Custom Fields', 'gpsc-product-slider-carousel' ),
		'icon'   => 'fa fa-plus-square-o',
		'fields' => array(

			array(
				'type'    => 'notice',
				'style'   => 'warning',
				'content' => '<strong>Note:</strong> Custom fields are an advanced method to display custom data for each individual product.<br>
				If you enable this option, you\'ll find a repeater field on every product edit page.<br>
				Please refer to the detailed <a href="https://pluginic.com/docs/product-slider-carousel-overview/?ref=100" target="_blank">documentation</a> for further instructions.',
			),
			array(
				'id'         => 'gpsc_custom_fields_activate',
				'type'       => 'switcher',
				'title'      => 'Custom Fields',
				'text_on'    => 'Enable',
				'text_off'   => 'Disable',
				'text_width' => 90,
				'default'    => false,
			),
		),
	)
);
