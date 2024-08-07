<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: shortcode
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'WPGPSC_Field_shortcode' ) ) {
	class WPGPSC_Field_shortcode extends WPGPSC_Fields {

		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		public function render() {

			// // Get the Post ID.
			// $post_id = get_the_ID();

			// echo ( ! empty( $post_id ) ) ? '<div class="wpgpsc--shortcode-field-wrap"><code title="Click to copy the Shortcode">[psc_product id="' . esc_attr( $post_id ) . '"]</code></div>' : '';

			// Get the Post ID.
			$post_id = get_the_ID();

			echo ( ! empty( $post_id ) ) ? '<div class="psc-shortcode-input-group">
			<input id="pscCTCinput" type="text" value=\'[psc_product id="' . $post_id . '"]\' readonly>
			<span class="psc-shortcode-input-group-button">
			  <button class="psc-shortcode-btn" type="button" onclick="pscFun()">
			  <svg id="clipboard" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32s-14.33 32-32 32S160 113.7 160 96S174.3 64 192 64zM282.9 262.8l-88 112c-4.047 5.156-10.02 8.438-16.53 9.062C177.6 383.1 176.8 384 176 384c-5.703 0-11.25-2.031-15.62-5.781l-56-48c-10.06-8.625-11.22-23.78-2.594-33.84c8.609-10.06 23.77-11.22 33.84-2.594l36.98 31.69l72.52-92.28c8.188-10.44 23.3-12.22 33.7-4.062C289.3 237.3 291.1 252.4 282.9 262.8z"/></svg>
			  <span id="pscCTCtip" class="tooltiptext tooltip-bottom">Copy Shortcode</span>
			  </button>
			</span>
		  </div>
		  <script>
		  function copyToClipboard(text) {
			var pscCTCtextarea = document.createElement("textarea");
			document.body.appendChild(pscCTCtextarea);
			pscCTCtextarea.value = text; //save main text in it
			pscCTCtextarea.select(); //select textarea contenrs
			document.execCommand("copy");
			document.body.removeChild(pscCTCtextarea);
		  }
		
		  function pscFun() {
			var pscCTCthing = document.getElementById("pscCTCinput");
			copyToClipboard(pscCTCthing.value);
		  
			document.getElementById("pscCTCtip").innerHTML = "Copyed!";
		  
			document.getElementById("clipboard").style = "fill: #4caf50";
		  }
		  </script>' : '';
		}

	}
}
