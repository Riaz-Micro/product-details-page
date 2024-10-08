<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.pluginic.com
 * @since      1.0.0
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    GPSC_Product_Slider_Carousel
 * @subpackage GPSC_Product_Slider_Carousel/public
 * @author     Pluginic
 */
class GPSC_Product_Slider_Carousel_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in GPSC_Product_Slider_Carousel_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The GPSC_Product_Slider_Carousel_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_register_style( $this->plugin_name . 'swiper', plugin_dir_url( __FILE__ ) . 'css/swiper.min.css', array(), $this->version, 'all' );
		wp_register_style( $this->plugin_name . 'venobox', plugin_dir_url( __FILE__ ) . 'css/venobox.min.css', array(), $this->version, 'all' );
		wp_register_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/gpsc-product-slider-carousel-public.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in GPSC_Product_Slider_Carousel_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The GPSC_Product_Slider_Carousel_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_register_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/gpsc-slider-carousel.js', array( 'jquery' ), $this->version, false );
		wp_register_script( $this->plugin_name . 'swiper', plugin_dir_url( __FILE__ ) . 'js/swiper.min.js', array(), $this->version, false );
		wp_register_script( $this->plugin_name . 'venobox', plugin_dir_url( __FILE__ ) . 'js/venobox.min.js', array(), $this->version, false );
		wp_register_script( $this->plugin_name . 'single-page-script', plugin_dir_url( __FILE__ ) . 'js/gpsc-single-page-script.js', array( 'jquery', 'gpsc-product-slider-carouselvenobox' ), $this->version, true );
	}

	/**
	 * Load custom product page template.
	 */
	public function load_custom_single_product_template( $template ) {

        if ( is_singular( 'product' ) ) {
            $plugin_template = GPSC_PLUG_DIR_PATH_FILE . 'public/templates/custom-single-product.php';
            if ( file_exists( $plugin_template ) ) {
                return $plugin_template;
            }
        }
        return $template;
    }
}
