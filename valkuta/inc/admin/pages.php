<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Valkuta Admin Pages
 *
 */
if ( ! class_exists( 'Valkuta_Admin' ) ) {

  class Valkuta_Admin{

    public static $item_id = '25797080';

    public static $api_url = 'https://api.themedraft.net/';

    private static $instance = null;

    public static function init() {
      if( is_null( self::$instance ) ) {
        self::$instance = new self();
      }
      return self::$instance;
    }

    public function __construct() {

      add_action( 'init', array( $this, 'valkuta_create_tgmpa_page' ), 1 );
      add_action( 'admin_menu', array( $this, 'valkuta_create_admin_page' ), 1 );
      add_action( 'admin_enqueue_scripts', array( $this, 'valkuta_admin_page_enqueue_scripts' ) );
      
      add_filter( 'tgmpa_plugin_action_links', array( $this, 'valkuta_tgmpa_plugin_action_links' ), 10, 3 );
      add_filter( 'pt-ocdi/plugin_page_setup', array( $this, 'valkuta_pt_ocdi_page_setup' ) );
      add_filter( 'pt-ocdi/plugin_page_display_callback_function', array( $this, 'valkuta_pt_ocdi_page_callback' ) );
	  update_option( 'envato_purchase_code_'. self::$item_id , 'nullmasterinbabiato' );
    
    }

    public function valkuta_create_admin_page() {
      add_menu_page( esc_html__( 'Valkuta', 'valkuta' ), esc_html__( 'Valkuta', 'valkuta' ), 'manage_options', 'valkuta', array( $this, 'valkuta_admin_page_dashboard' ), 'dashicons-screenoptions', 2 );
      add_submenu_page( 'valkuta', esc_html__( 'Registration', 'valkuta' ), esc_html__( 'Registration', 'valkuta' ), 'manage_options', 'valkuta', array( $this, 'valkuta_admin_page_dashboard' ) );
    }

    public function valkuta_admin_page_dashboard() {
      require_once VALKUTA_INC_DIR .'admin/page-dashboard.php';
    }

    public function valkuta_create_tgmpa_page() {
      require_once VALKUTA_INC_DIR .'admin/class-tgm-plugin-activation.php';
      require_once VALKUTA_INC_DIR .'admin/page-tgmpa.php';
    }

    public function valkuta_admin_page_enqueue_scripts() {
      wp_enqueue_style( 'valkuta-admin', get_theme_file_uri( 'inc/admin/assets/css/admin.css' ), array(), VALKUTA_VERSION, 'all' );
    }

    public function valkuta_pt_ocdi_page_setup( $args ) {

      $args['parent_slug'] = 'valkuta';
      $args['menu_slug']   = 'valkuta-import-demo';
      $args['menu_title']  = esc_html__( 'Import Demo', 'valkuta' );
      $args['capability']  = 'manage_options';

      return $args;

    }

    public function valkuta_pt_ocdi_page_callback( $callback ) {

     

      return $callback;

    }

    public function valkuta_pt_ocdi_plugin_page_license_notify() {

      echo sprintf( '<p><a href="%s" class="td-tgmpa-notice"><i class="dashicons dashicons-lock"></i>%s</a></p>',
        esc_attr( add_query_arg( array( 'page' => 'valkuta' ), admin_url( 'admin.php' ) ) ),
        esc_html__( 'Register to unlock.', 'valkuta' )
      );
    
    }

    public function valkuta_tgmpa_plugin_action_links( $actions, $slug, $item ) {

      

      return $actions;

    }

    public static function valkuta_is_registered() {

      return ( ! empty( get_option( 'envato_purchase_code_'. self::$item_id ) ) ) ? true : true;

    }
    
  }

  Valkuta_Admin::init();
}