<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: backup
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'WPGPSC_Field_backup' ) ) {
  class WPGPSC_Field_backup extends WPGPSC_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $unique = $this->unique;
      $nonce  = wp_create_nonce( 'wpgpsc_backup_nonce' );
      $export = add_query_arg( array( 'action' => 'wpgpsc-export', 'unique' => $unique, 'nonce' => $nonce ), admin_url( 'admin-ajax.php' ) );

      echo $this->field_before();

      echo '<textarea name="wpgpsc_import_data" class="wpgpsc-import-data"></textarea>';
      echo '<button type="submit" class="button button-primary wpgpsc-confirm wpgpsc-import" data-unique="'. esc_attr( $unique ) .'" data-nonce="'. esc_attr( $nonce ) .'">'. esc_html__( 'Import', 'wpgpsc' ) .'</button>';
      echo '<hr />';
      echo '<textarea readonly="readonly" class="wpgpsc-export-data">'. esc_attr( json_encode( get_option( $unique ) ) ) .'</textarea>';
      echo '<a href="'. esc_url( $export ) .'" class="button button-primary wpgpsc-export" target="_blank">'. esc_html__( 'Export & Download', 'wpgpsc' ) .'</a>';
      echo '<hr />';
      echo '<button type="submit" name="wpgpsc_transient[reset]" value="reset" class="button wpgpsc-warning-primary wpgpsc-confirm wpgpsc-reset" data-unique="'. esc_attr( $unique ) .'" data-nonce="'. esc_attr( $nonce ) .'">'. esc_html__( 'Reset', 'wpgpsc' ) .'</button>';

      echo $this->field_after();

    }

  }
}
