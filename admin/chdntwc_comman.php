<?php
if (!defined('ABSPATH'))
  exit;

if (!class_exists('CHDNTWC_comman')) {

    class CHDNTWC_comman {

        protected static $instance;

        public static function instance() {
            if (!isset(self::$instance)) {
                self::$instance = new self();
                self::$instance->init();
            }
             return self::$instance;
        }
         function init() {
            global $chdntwc_comman;
            $optionget = array(
                'chdntwc_dntpp_min_donation' => '10',
                'chdntwc_dntpp_max_donation' => '100',
                'chdntwc_shw_dntform_cart' => 'yes',
                'chdntwc_shw_dntform_cart_disloctn_fm' => 'wc_prcd_to_ckout',
                'chdntwc_shw_dntform_ckout' => '',
                'chdntwc_shw_dntform_ckout_disloctn_fm' => 'wc_bfr_ckout_form',
                'chdntwc_shw_dntform_ckout_disloctn_pp' => 'wc_prcd_to_ckout',
                'chdntwc_dntform_dnt_label' => 'Make a Donation',
                'chdntwc_dntform_addnote_enable' => '',
                'chdntwc_dntform_addnote_label' => 'Your Message',
                'chdntwc_dntamnt_empty_text' => 'Please enter donation amount',
                'chdntwc_prdfn_dnt_show' => 'yes',
                'chdntwc_prdfn_dnt_amnts' => '10|20|30',
                'chdntwc_prdfn_dnt_lbl_txt_clr' => '#ffffff',
                'chdntwc_prdfn_dnt_lbl_bg_clr' => '#4CAF50',
                'chdntwc_adddntbtn_txt' => 'Add Donation',
                'chdntwc_adddntbtn_txt_fnt_size' => '18',
                'chdntwc_adddntbtn_txt_clr' => '#ffffff',
                'chdntwc_adddntbtn_bg_clr' => '#000000',
                'chdntwc_dntpp_head_txt' => 'Donate for Good',
                'chdntwc_shw_dntpp_fxdbtn_ftr' => '',
                'chdntwc_fxddntpp_btn_icn_enbl' => 'yes',
                'chdntwc_fxddntpp_btn_txt' => 'Donate Us',
                'chdntwc_fxddntpp_txt_fnt_size' => '18',
                'chdntwc_fxddntpp_txt_clr' => '#ffffff',
                'chdntwc_fxddntpp_bg_clr' => '#000000',
                'chdntwc_dntclclctd_amount_show' => 'yes',
                'chdntwc_dntclctn_head_text' => 'Total donations ever collected',
                'chdntwc_dntclctn_sec_text' => 'So far we have collected', 

            );
           
            foreach ($optionget as $key_optionget => $value_optionget) {
               $chdntwc_comman[$key_optionget] = get_option( $key_optionget,$value_optionget );
            }
        }
    }

    CHDNTWC_comman::instance();
}
?>