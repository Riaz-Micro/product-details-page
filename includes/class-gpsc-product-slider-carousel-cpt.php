<?php

/**
 * The file that defines the Custom Post Type of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/includes
 */

/**
 * The file that defines the Custom Post Type of the plugin.
 *
 * @since      1.0.0
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/includes
 * @author     Pluginic
 */
class GPSC_Product_Slider_Carousel_CPT {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Settings page ID for post-to-card settings.
	 */
	const PAGE_ID = 'gpsc_slider_carousel';

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Custom Post Type of the Plugin.
	 *
	 * @since    1.0.0
	 */
	public function gpsc_custom_post_type() {

		$labels = apply_filters(
			self::PAGE_ID . '_post_type_labels',
			array(
				'name'               => esc_html_x( 'Manage Sliders', 'gpsc-product-slider-carousel' ),
				'singular_name'      => esc_html_x( 'Sliders', 'gpsc-product-slider-carousel' ),
				'add_new'            => esc_html__( 'Add New', 'gpsc-product-slider-carousel' ),
				'add_new_item'       => esc_html__( 'Add New Gallery', 'gpsc-product-slider-carousel' ),
				'edit_item'          => esc_html__( 'Edit Sliders', 'gpsc-product-slider-carousel' ),
				'new_item'           => esc_html__( 'New Sliders', 'gpsc-product-slider-carousel' ),
				'view_item'          => esc_html__( 'View  Sliders', 'gpsc-product-slider-carousel' ),
				'search_items'       => esc_html__( 'Search Sliders', 'gpsc-product-slider-carousel' ),
				'not_found'          => esc_html__( 'No Gallery found.', 'gpsc-product-slider-carousel' ),
				'not_found_in_trash' => esc_html__( 'No Gallery found in trash.', 'gpsc-product-slider-carousel' ),
				'parent_item_colon'  => esc_html__( 'Parent Item:', 'gpsc-product-slider-carousel' ),
				'menu_name'          => esc_html__( 'Product Slider C.', 'gpsc-product-slider-carousel' ),
				'all_items'          => esc_html__( 'Manage Sliders', 'gpsc-product-slider-carousel' ),
			)
		);

		$args = apply_filters(
			self::PAGE_ID . '_post_type_args',
			array(
				'labels'              => $labels,
				'public'              => false,
				'hierarchical'        => false,
				'exclude_from_search' => true,
				'show_ui'             => true,
				'show_in_admin_bar'   => false,
				'menu_position'       => apply_filters( self::PAGE_ID . '_menu_position', 56 ),
				'menu_icon'           => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 27 25" style="enable-background:new 0 0 27 25;" xml:space="preserve"><g><circle class="st0" cx="13.24" cy="22.71" r="1.83"/><circle class="st0" cx="19.54" cy="22.71" r="1.44"/><circle class="st0" cx="7.46" cy="22.71" r="1.44"/></g><path class="st0" d="M26.56,5.1v9.27c0,0.76-0.69,1.38-1.54,1.38h-1.09V3.73h1.09C25.87,3.73,26.56,4.35,26.56,5.1z"/><path class="st0" d="M1.98,3.73H3.1v12.02H1.98c-0.84,0-1.54-0.62-1.54-1.38V5.1C0.44,4.35,1.14,3.73,1.98,3.73z"/><path class="st0" d="M20.68,0.23H6.33c-1.1,0-1.98,0.92-1.98,2.05v14.91c0,1.14,0.89,2.06,1.98,2.06h14.35 c1.09,0,1.97-0.92,1.97-2.06V2.28C22.65,1.15,21.77,0.23,20.68,0.23z M18.14,10.66l-0.86-2.03l0.23,7.34H9.53l0.19-7.34l-0.86,2.03 L6.04,9.19c0,0,1.92-4.06,2.22-4.37C8.42,4.66,8.72,4.5,8.98,4.37c0.11-0.07,0.26-0.13,0.44-0.2c0.02-0.01,0.03-0.01,0.03-0.01 c0.84-0.32,2.14-0.65,2.14-0.65s0.34,1.17,1.92,1.26c1.58-0.09,1.92-1.26,1.92-1.26s0.33,0.08,0.75,0.2 C16.6,3.84,17.14,4,17.55,4.16c0,0,0.01,0,0.03,0.01c0.18,0.07,0.34,0.13,0.44,0.2c0.26,0.13,0.56,0.29,0.71,0.45 c0.3,0.31,2.22,4.37,2.22,4.37L18.14,10.66z"/></svg>'),
				'rewrite'             => false,
				'query_var'           => false,
				'imported'            => true,
				'supports'            => array( 'title' ),
			)
		);
		register_post_type( self::PAGE_ID, $args );

	}

	/**
	 * Change Sliders updated messages.
	 *
	 * @param string $messages The Update messages.
	 * @return statement
	 */
	public function wpps_updated_messages( $messages ) {
		global $post, $post_ID;
		$messages[ self::PAGE_ID ] = array(
			0  => '', // Unused. Messages start at index 1.
			1  => sprintf( __( 'Sliders updated.', 'gpsc-product-slider-carousel' ) ),
			2  => '',
			3  => '',
			4  => __( 'updated.', 'gpsc-product-slider-carousel' ),
			5  => isset( $_GET['revision'] ) ? sprintf( __( 'Sliders restored to revision from %s', 'gpsc-product-slider-carousel' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6  => sprintf( __( 'Sliders published.', 'gpsc-product-slider-carousel' ) ),
			7  => __( 'Sliders saved.', 'gpsc-product-slider-carousel' ),
			8  => sprintf( __( 'Sliders submitted.', 'gpsc-product-slider-carousel' ) ),
			9  => sprintf( __( 'Sliders scheduled for: <strong>%1$s</strong>.', 'gpsc-product-slider-carousel' ), date_i18n( __( 'M j, Y @ G:i', 'gpsc-product-slider-carousel' ), strtotime( $post->post_date ) ) ),
			10 => sprintf( __( 'Sliders draft updated.', 'gpsc-product-slider-carousel' ) ),
		);
		return $messages;
	}

	/**
	 * Admin help page
	 *
	 * @since 2.0.0
	 */
	public function gpsc_help_admin_submenu() {
		add_submenu_page(
			'edit.php?post_type=' . self::PAGE_ID,
			__( 'Help', 'post-to-card' ),
			__( 'Help', 'post-to-card' ),
			'manage_options',
			'gpsc_help_page',
			array( $this, 'ptc_help_callback' )
		);
	}

	/**
	 * Safe Welcome Page Redirect.
	 *
	 * Safe welcome page redirect which happens only
	 * once and if the site is not a network or MU.
	 *
	 * @since 1.0.0
	 */
	public function gpsc_safe_welcome_redirect() {

		// Bail if no activation redirect transient is present. (if ! true).
		if ( ! get_transient( '_gpsc_safe_redirect' ) ) {
			return;
		}

		// Delete the redirect transient.
		delete_transient( '_gpsc_safe_redirect' );

		// Bail if activating from network or bulk sites.
		if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
			return;
		}

		// Redirects to a specific Page.
		wp_safe_redirect(
			add_query_arg(
				array(
					'post_type' => self::PAGE_ID,
					'page'      => 'gpsc_help_page',
				),
				admin_url( 'edit.php' )
			)
		);
	}

	/**
	 * Admin help callback function
	 *
	 * @since    1.0.0
	 */
	public function ptc_help_callback() {

		include_once GPSC_PLUG_DIR_PATH_FILE . '/admin/partials/gpsc-product-slider-carousel-admin-display.php';
	}

	/**
	 * Bottom review notice.
	 *
	 * @param string $text The review notice.
	 * @return string
	 */
	public function gpsc_review_text( $text ) {

		$screen = get_current_screen();
		if ( self::PAGE_ID === get_post_type() || ( self::PAGE_ID . '_page_gpsc_help_page' === $screen->id ) ) {

			$url  = 'https://wordpress.org/plugins/product-slider-carousel/reviews/?filter=5#new-post';
			$text = sprintf( __( 'SHOW YOUR LOVE 💕 LEAVE A REVIEW HERE → <a href="%s" target="_blank">&#9733;&#9733;&#9733;&#9733;&#9733;</a> We value your feedback.', 'gpsc-product-slider-carousel' ), $url );
		}

		return $text;
	}

	/**
	 * Add action links.
	 *
	 * @param Array $actions Get all action links.
	 * @param Sting $plugin_file Get all plugin file paths.
	 * @return Array
	 */
	public function gpsc_add_action_plugin( $actions, $plugin_file ) {

		static $plugin;

		if ( ! isset( $plugin ) ) {

			$plugin = GPSC_PLUG_BASE_FILE;
		}

		if ( $plugin == $plugin_file ) {

			$site_link = array( 'support' => '<a href="http://pro-plugins.local/wp-admin/edit.php?post_type=gpsc_slider_carousel&page=wpgpsc_settings" target="_blank">Support</a>' );
			$settings  = array( 'settings' => '<a href="' . esc_url( get_admin_url() . 'post-new.php?post_type=gpsc_slider_carousel' ) . '">' . __( 'Get Started', 'General' ) . '</a>' );

			// Add link before Deactivate.
			$actions = array_merge( $site_link, $actions );
			$actions = array_merge( $settings, $actions );

			// Add link after Deactivate.
			$actions[] = '<a href="' . get_admin_url() . 'edit.php?post_type=gpsc_slider_carousel&page=wpgpsc_settings">' . __( 'Opt In', 'General' ) . '</a>';
		}

		return $actions;
	}

	/**
	 * Add new custom columns.
	 *
	 * @param [type] $columns The columns.
	 * @return statement
	 */
	public function gpsc_admin_column( $columns ) {
		return array(
			'cb'        => '<input type="checkbox" />',
			'title'     => __( 'Name', 'gpsc-product-slider-carousel' ),
			'layout'    => __( 'Layout', 'gpsc-product-slider-carousel' ),
			'shortcode' => __( 'Shortcode', 'gpsc-product-slider-carousel' ),
			'date'      => __( 'Date', 'gpsc-product-slider-carousel' ),
		);
	}

	/**
	 * Display admin columns content.
	 *
	 * @param mix    $column The columns.
	 * @param string $post_id The post ID.
	 * @return void
	 */
	public function gpsc_admin_field( $column, $post_id ) {
		$module_value = wpgpsc_get_post_meta( $post_id, 'wpgpsc_module' );
		$module_name  = '';
		switch ( $module_value ) {
			case 'grid-carousel':
				$module_name = 'Grid/Carousel';
				break;
			case 'slider':
				$module_name = 'Slider';
				break;
			case 'table':
				$module_name = 'Table View';
				break;
			case 'highlighted':
				$module_name = 'Highlighted One';
				break;
			case 'with-banner':
				$module_name = 'With Banner';
				break;
			case 'grouped':
				$module_name = 'Grouped By';
				break;
			case 'category':
				$module_name = 'Category View';
				break;
			case 'reviews':
				$module_name = 'Review';
				break;
			case 'cd-timer':
				$module_name = 'Countdown Timer';
				break;
			default:
				$module_name = $module_value;
				break;
		}
		switch ( $column ) {
			case 'shortcode':
				echo '<input title="Copy the Shortcode" style="width:180px;padding:2px 12px;color:#e91e63;text-align:center;cursor:copy;" type="text" onClick="this.select();" readonly="readonly" value="[psc_product id=&quot;' . esc_attr( $post_id ) . '&quot;]"/>';
				break;
			default:
				echo '<span>' . esc_html( strtoupper( $module_name ) ) . '</span>';
		}
	}

}
