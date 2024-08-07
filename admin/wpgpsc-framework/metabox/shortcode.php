<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Metabox of the PAGE and POST both.
// Set a unique slug-like ID
//
$prefix_meta_opts = '_gpsc_shortcode_options';

//
// Metabox : Shortcode.
//
WPGPSC::createMetabox(
	$prefix_meta_opts,
	array(
		'title'     => '<svg style="fill: #fff;animation: gpsc-anim-hs 1s;animation-delay: 2s;animation-iteration-count: infinite;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect x="0" fill="none" width="20" height="20"></rect><g><path d="M6 14H4V6h2V4H2v12h4M7.1 17h2.1l3.7-14h-2.1M14 4v2h2v8h-2v2h4V4"></path></g></svg>Shortcode',
		'post_type' => 'gpsc_slider_carousel',
		'context'   => 'side',
	)
);

//
// Create a section
//
if ( isset( $_GET['post'] ) ) {

	WPGPSC::createSection(
		$prefix_meta_opts,
		array(
			'fields' => array(

				array(
					'type'  => 'shortcode',
					'class' => 'wpgpsc--shortcode-field',
				),
			),
		)
	);
} else {

	WPGPSC::createSection(
		$prefix_meta_opts,
		array(
			'fields' => array(

				array(
					'type'    => 'content',
					'content' => 'Shortcode will appear here after publish the slider.',
				),

			),
		)
	);
}
