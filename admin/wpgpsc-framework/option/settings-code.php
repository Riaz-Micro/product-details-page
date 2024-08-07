<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Create a section.
WPGPSC::createSection(
	$prefix,
	array(
		'title'  => __( 'Custom Code', 'gpsc-product-slider-carousel' ),
		'icon'   => 'fa fa-code',
		'fields' => array(

			array(
				'id'       => 'gpsc_css_code_editor',
				'type'     => 'code_editor',
				'before'    => '<strong>CSS Editor :</strong><br>Write your CSS code here.',
				'settings' => array(
					'theme' => 'mbo',
					'mode'  => 'css',
				),
			),
			array(
				'id'       => 'gpsc_js_code_editor',
				'type'     => 'code_editor',
				'before'    => '<strong>Javascript Editor :</strong><br>You can write your JavaScript code in this area.',
				'settings' => array(
					'theme' => 'monokai',
					'mode'  => 'javascript',
				),
			),

		),
	)
);
