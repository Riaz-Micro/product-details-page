<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$wpgpsc_prod_page_opts = '_prefix_prod_page_opt';

//
// Create a metabox
//
WPGPSC::createMetabox( $wpgpsc_prod_page_opts, array(
  'title'        => 'Product Specification',
  'post_type'    => 'product',
  'show_restore' => true,
) );

//
// Create a section
//
WPGPSC::createSection( $wpgpsc_prod_page_opts, array(
  'fields' => array(
	array(
		'type'    => 'content',
		'content' => '<style>.wpgpsc-styles-in-content {
			display: none;
		}
		h4.wpgpsc-cloneable-title .ui-icon {
			background: none !important;
		}
		.wpgpsc-field-group .wpgpsc-cloneable-helper {
			top: 50%;
			transform: translateY(-50%);
		}</style>',
		'class'   => 'wpgpsc-styles-in-content',
	),  
	array(
		'id'           => 'wpgpsc_prod_spec_table',
		'type'         => 'group',
		'button_title' => 'Add New Group',
		'fields'       => array(
		  array(
			'id'    => 'wpgpsc_prod_spec_group_name',
			'type'  => 'text',
			'title' => 'Group Name',
		  ),
		  array(
			'id'           => 'wpgpsc_prod_spec_list',
			'type'         => 'repeater',
			'button_title' => '<i class="fas fa-plus-circle"></i> Add New Row',
			'title'        => 'Specification List',
			'fields'       => array(
		  
			  array(
				'id'    => 'wpgpsc_prod_spec_list_item',
				'type'  => 'text',
				'title' => 'Item Name'
			  ),
			  array(
				'id'    => 'wpgpsc_prod_spec_item_value',
				'type'  => 'text',
				'title' => 'Item Value'
			  ),
			),
		  ),		  
		),
		'default'   => array(
		  array(
			'wpgpsc_prod_spec_group_name'     => 'General Information',
			'wpgpsc_prod_spec_list' => array(
			  array(
				'wpgpsc_prod_spec_list_item'  => 'Model',
				'wpgpsc_prod_spec_item_value' => 'EX1234',
			  ),
			  array(
				'wpgpsc_prod_spec_list_item'  => 'Market',
				'wpgpsc_prod_spec_item_value' => 'Global / Regional / etc.',
			  ),
			  array(
				'wpgpsc_prod_spec_list_item'  => 'Packaging',
				'wpgpsc_prod_spec_item_value' => 'Retail Box / Bulk / etc.',
			  ),
			  array(
				'wpgpsc_prod_spec_list_item'  => 'Retail Partners',
				'wpgpsc_prod_spec_item_value' => 'Example Store, Example Online',
			  ),
			),
		  ),
		  array(
			'wpgpsc_prod_spec_group_name'     => 'Features and Accessories',
			'wpgpsc_prod_spec_list' => array(
			  array(
				'wpgpsc_prod_spec_list_item'  => 'Special Features',
				'wpgpsc_prod_spec_item_value' => 'Water-resistant, Touchscreen',
			  ),
			  array(
				'wpgpsc_prod_spec_list_item'  => 'Included Accessories',
				'wpgpsc_prod_spec_item_value' => 'Charger, User Manual',
			  ),
			),
		  ),
		  array(
			'wpgpsc_prod_spec_group_name'     => 'Warranty and Certification',
			'wpgpsc_prod_spec_list' => array(
			  array(
				'wpgpsc_prod_spec_list_item'  => 'Warranty',
				'wpgpsc_prod_spec_item_value' => '1 year limited warranty',
			  ),
			  array(
				'wpgpsc_prod_spec_list_item'  => 'Certification',
				'wpgpsc_prod_spec_item_value' => 'CE / FCC / RoHS / etc.',
			  ),
			),
		  ),
		),
	  ),
		
  )
) );
