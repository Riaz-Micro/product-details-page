<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Set a unique slug-like ID.
//
$prefix = '_wpgpsc_option_settings';

//
// Create customize options.
//
WPGPSC::createOptions(
	$prefix,
	array(
		'framework_title'    => __( '<img width="60" height="60" src="' . GPSC_PLUG_DIR_URL_FILE . 'admin/img/icon-128x128.png"><strong>PSC - Global Settings<span>Version ' . GPSC_PLUG_VERSION . '</span></strong>', 'gpsc-product-slider-carousel' ),
		'menu_title'         => __( 'Settings', 'gpsc-product-slider-carousel' ),
		'menu_parent'        => 'edit.php?post_type=gpsc_slider_carousel',
		'menu_slug'          => 'wpgpsc_settings',
		'menu_type'          => 'submenu',
		'sticky_header'      => false,
		'show_bar_menu'      => false,
		'show_search'        => false,
		'show_network_menu'  => false,
		'show_reset_section' => false,
		'show_all_options'   => false,
		'theme'              => 'light',
		'footer_credit'      => __( '💕 Your feedback matters! Leave a review HERE → <a href="https://wordpress.org/plugins/product-slider-carousel/reviews/?filter=5#new-post" target="_blank">&#9733;&#9733;&#9733;&#9733;&#9733;</a> Thanks for your support.', 'gpsc-product-slider-carousel' ),
		'footer_text'        => '<a style="margin-right: 7px;" class="button" href="https://pluginic.com/services/?ref=100" target="_blank">Request a Feature</a><a class="button" href="https://pluginic.com/contact-us/?ref=100" target="_blank">Submit a Bug</a>',
		'class'              => 'wpgpscsc--option-settings',
	)
);
