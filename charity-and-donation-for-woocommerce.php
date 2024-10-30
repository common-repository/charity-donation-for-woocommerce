<?php
/**
* Plugin Name: Charity & Donation for Woocommerce
* Description: This plugin allows create Charity & Donation for Woocommerce plugin.
* Version: 1.0
* Copyright: 2020
* Text Domain: charity-donation-for-woocommerce
* Domain Path: /languages 
*/


// Exit if accessed directly
if (!defined('ABSPATH')) {
  die('-1');
}
if (!defined('CHDNTWC_PLUGIN_NAME')) {
  define('CHDNTWC_PLUGIN_NAME', 'Charity & Donation for Woocommerce');
}
if (!defined('CHDNTWC_PLUGIN_VERSION')) {
  define('CHDNTWC_PLUGIN_VERSION', '1.1');
}
if (!defined('CHDNTWC_PLUGIN_FILE')) {
  define('CHDNTWC_PLUGIN_FILE', __FILE__);
}
if (!defined('CHDNTWC_PLUGIN_DIR')) {
  define('CHDNTWC_PLUGIN_DIR',plugins_url('', __FILE__));
}
if (!defined('CHDNTWC_BASE_NAME')) {
    define('CHDNTWC_BASE_NAME', plugin_basename(CHDNTWC_PLUGIN_FILE));
}
if (!defined('CHDNTWC_DOMAIN')) {
  define('CHDNTWC_DOMAIN', 'charity-donation-for-woocommerce');
}


if (!class_exists('CHDNTWC')) {

    class CHDNTWC {

        protected static $CHDNTWC_instance;
        function __construct() {
            include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
            //check woocommerce plugin activted or not
            add_action('admin_init', array($this, 'CHDNTWC_check_plugin_state'));
        }


        function CHDNTWC_check_plugin_state(){
            if ( ! ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) ) {
                set_transient( get_current_user_id() . 'chdntwcerror', 'message' );
            }
        }


        function init() {
            add_action( 'admin_notices', array($this, 'CHDNTWC_show_notice'));
            add_action( 'admin_enqueue_scripts', array($this, 'CHDNTWC_load_admin'));
            add_action( 'wp_enqueue_scripts',  array($this, 'CHDNTWC_load_front'));
            add_filter( 'plugin_row_meta', array( $this, 'CHDNTWC_plugin_row_meta' ), 10, 2 );
        }


        function CHDNTWC_show_notice() {
            if ( get_transient( get_current_user_id() . 'chdntwcerror' ) ) {

                deactivate_plugins( plugin_basename( __FILE__ ) );

                delete_transient( get_current_user_id() . 'chdntwcerror' );

                echo '<div class="error"><p> This plugin is deactivated because it require <a href="plugin-install.php?tab=search&s=woocommerce">WooCommerce</a> plugin installed and activated.</p></div>';
            }
        }


        function CHDNTWC_load_admin() {
            wp_enqueue_style( 'CHDNTWC_admin_style', CHDNTWC_PLUGIN_DIR . '/includes/css/chdntwc_back_style.css', false, '1.0.0' );
            wp_enqueue_script( 'CHDNTWC_admin_script', CHDNTWC_PLUGIN_DIR . '/includes/js/chdntwc_back_script.js', false, '1.0.0', true );
            wp_enqueue_style( 'wp-color-picker');
            wp_enqueue_script( 'wp-color-picker');
        }


        function CHDNTWC_load_front() {
            global $chdntwc_comman;

            $chdntwc_dntamnt_empty_text = $chdntwc_comman['chdntwc_dntamnt_empty_text'];
            $chdntwc_dntpp_min_donation = $chdntwc_comman['chdntwc_dntpp_min_donation'];
            $chdntwc_dntpp_max_donation = $chdntwc_comman['chdntwc_dntpp_max_donation'];

            $chdntwc_dntamnt_lesmin_text = 'Minimum Donation Amount is {min_donation}.';
            $chdntwc_dntamnt_grtrmax_text = 'Maximum Donation Amount is {max_donation}.';

            $chdntwc_dntpp_min_donation_wc_price = wc_price($chdntwc_dntpp_min_donation);
            $chdntwc_dntpp_max_donation_wc_price = wc_price($chdntwc_dntpp_max_donation);

            $chdntwc_dntamnt_lesmin_text = str_replace('{min_donation}', $chdntwc_dntpp_min_donation_wc_price, $chdntwc_dntamnt_lesmin_text);
            $chdntwc_dntamnt_grtrmax_text = str_replace('{max_donation}', $chdntwc_dntpp_max_donation_wc_price, $chdntwc_dntamnt_grtrmax_text);

            wp_enqueue_style( 'CHDNTWC_front_style', CHDNTWC_PLUGIN_DIR . '/includes/css/chdntwc_front_style.css', false, '1.0.0' );
            wp_enqueue_script( 'CHDNTWC_front_script', CHDNTWC_PLUGIN_DIR . '/includes/js/chdntwc_front_script.js', false, '1.0.0', true );
            
            $chdntwc_js_options = array( 
                                    'ajaxurl' => admin_url( 'admin-ajax.php' ),
                                    'chdntwc_plugin_dir' => CHDNTWC_PLUGIN_DIR,
                                    'chdntwc_dntamnt_empty_text' => $chdntwc_dntamnt_empty_text,
                                    'chdntwc_dntpp_min_donation' => $chdntwc_dntpp_min_donation,
                                    'chdntwc_dntpp_max_donation' => $chdntwc_dntpp_max_donation,
                                    'chdntwc_dntamnt_lesmin_text' => $chdntwc_dntamnt_lesmin_text,
                                    'chdntwc_dntamnt_grtrmax_text' => $chdntwc_dntamnt_grtrmax_text,
                                );

            wp_localize_script( 'CHDNTWC_front_script', 'chdntwc_js_options', $chdntwc_js_options );
        }


        function includes() {
            include_once('admin/chdntwc_comman.php');
            include_once('admin/chdntwc_admin.php');
            include_once('admin/chdntwc_kit.php');
            include_once('front/chdntwc_front.php');
        }


        //Create Simple Donation Product for Collecting Donation
        public static function CHDNTWC_do_activation() {

            $chdntwc_donation_product = get_option( 'chdntwc_donation_product' );

            if(empty($chdntwc_donation_product)) {
                $prod_id = wp_insert_post(array('post_title'=>'Donation', 'post_name' => 'donation', 'post_type'=>'product', 'post_status'=>'publish'));

                $prod_sku = 'CHDNTWC-DONATE-'.$prod_id;
                
                update_post_meta($prod_id, '_sku', $prod_sku);
                update_post_meta($prod_id, '_tax_status', 'none');
                update_post_meta($prod_id, '_tax_class', 'zero-rate');
                update_post_meta($prod_id, '_visibility', 'hidden' );
                update_post_meta($prod_id, '_regular_price', 0 );
                update_post_meta($prod_id, '_price', 0 );
                update_post_meta($prod_id, '_sold_individually', 'yes' );
                
                $prod_taxonomy = 'product_visibility';
                wp_set_object_terms($prod_id, 'exclude-from-catalog', $prod_taxonomy);
                
                $prod_thumb_image = CHDNTWC_PLUGIN_DIR.'/images/donation-product.png';

                $upload_dir = wp_upload_dir();
                $image_data = file_get_contents($prod_thumb_image);
                $filename = basename($prod_thumb_image);

                if(wp_mkdir_p($upload_dir['path'])) {
                    $file = $upload_dir['path'] . '/' . $filename;
                } else {
                    $file = $upload_dir['basedir'] . '/' . $filename;
                }

                file_put_contents($file, $image_data);

                $wp_filetype = wp_check_filetype($filename, null );
                $attachment = array(
                    'post_mime_type' => $wp_filetype['type'],
                    'post_title' => sanitize_file_name($filename),
                    'post_content' => '',
                    'post_status' => 'inherit'
                );

                $thumb_id = wp_insert_attachment( $attachment, $file, $prod_id );
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                $attach_data = wp_generate_attachment_metadata( $thumb_id, $file );
                wp_update_attachment_metadata( $thumb_id, $attach_data );
                set_post_thumbnail( $prod_id, $thumb_id );

                update_option( 'chdntwc_donation_product', $prod_id );
            }
        }


        function CHDNTWC_plugin_row_meta( $links, $file ) {
          	if ( CHDNTWC_BASE_NAME === $file ) {
              	$row_meta = array(
                  'rating'    =>  ' <a href="https://www.xeeshop.com/charity-donation-for-woocommerce/" target="_blank">Documentation</a> | <a href="https://www.xeeshop.com/support-us/?utm_source=aj_plugin&utm_medium=plugin_support&utm_campaign=aj_support&utm_content=aj_wordpress" target="_blank">Support</a> |<a href="https://wordpress.org/support/plugin/charity-donation-for-woocommerce/reviews/?filter=5" target="_blank"><img src="'.CHDNTWC_PLUGIN_DIR.'/images/star.png" class="chdntwc_rating_div"></a>',
              	);

              	return array_merge( $links, $row_meta );
          	}
          	return (array) $links;
      	}


        public static function CHDNTWC_instance() {
            if (!isset(self::$CHDNTWC_instance)) {
                self::$CHDNTWC_instance = new self();
                self::$CHDNTWC_instance->init();
                self::$CHDNTWC_instance->includes();
            }
            return self::$CHDNTWC_instance;
        }
    }
    add_action('plugins_loaded', array('CHDNTWC', 'CHDNTWC_instance'));

    register_activation_hook( CHDNTWC_PLUGIN_FILE, array('CHDNTWC', 'CHDNTWC_do_activation'));
}


add_action( 'plugins_loaded', 'CHDNTWC_load_textdomain' );
function CHDNTWC_load_textdomain() {
    load_plugin_textdomain( 'charity-donation-for-woocommerce', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

function CHDNTWC_load_my_own_textdomain( $mofile, $domain ) {
    if ( 'charity-donation-for-woocommerce' === $domain && false !== strpos( $mofile, WP_LANG_DIR . '/plugins/' ) ) {
        $locale = apply_filters( 'plugin_locale', determine_locale(), $domain );
        $mofile = WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) . '/languages/' . $domain . '-' . $locale . '.mo';
    }
    return $mofile;
}
add_filter( 'load_textdomain_mofile', 'CHDNTWC_load_my_own_textdomain', 10, 2 );