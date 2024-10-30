<?php

if (!defined('ABSPATH'))
    exit;

if (!class_exists('CHDNTWC_front')) {

    class CHDNTWC_front {

        protected static $CHDNTWC_instance;

        public  $chdntwc_donation_product,
                $chdntwc_shw_dntform_cart,
                $chdntwc_shw_dntform_ckout,
                $chdntwc_shw_dntform_ckout_disloctn_fm,
                $chdntwc_shw_dntform_ckout_disloctn_pp,
                $chdntwc_dntform_dnt_label,
                $chdntwc_prdfn_dnt_show,
                $chdntwc_prdfn_dnt_amnts,
                $chdntwc_dntform_addnote_enable,
                $chdntwc_dntform_addnote_label,
                $chdntwc_prdfn_dnt_lbl_txt_clr,
                $chdntwc_prdfn_dnt_lbl_bg_clr,
                $chdntwc_adddntbtn_txt,
                $chdntwc_adddntbtn_bg_clr,
                $chdntwc_adddntbtn_txt_clr,
                $chdntwc_adddntbtn_txt_fnt_size,
                $chdntwc_shw_dntform_cart_disloctn_fm,
                $chdntwc_shw_dntpp_fxdbtn_ftr,
                $chdntwc_dntpp_min_donation,
                $chdntwc_dntpp_max_donation,
                $chdntwc_fxddntpp_btn_txt,
                $chdntwc_fxddntpp_txt_fnt_size,
                $chdntwc_fxddntpp_txt_clr,
                $chdntwc_fxddntpp_bg_clr,
                $chdntwc_dntclclctd_amount_show,
                $chdntwc_dntclctn_head_text,
                $chdntwc_dntclctn_sec_text,
                $chdntwc_fxddntpp_btn_icn_enbl,
                $chdntwc_fxdppbtn_icon,
                $chdntwc_dntpp_head_txt;

 

        function __construct() {
            global $chdntwc_comman;

            $this->chdntwc_donation_product         = get_option('chdntwc_donation_product');
            $this->chdntwc_shw_dntform_cart         = $chdntwc_comman['chdntwc_shw_dntform_cart'];
            $this->chdntwc_shw_dntform_ckout        = $chdntwc_comman['chdntwc_shw_dntform_ckout'];
            $this->chdntwc_shw_dntform_ckout_disloctn_fm = $chdntwc_comman['chdntwc_shw_dntform_ckout_disloctn_fm'];
            $this->chdntwc_shw_dntform_ckout_disloctn_pp = $chdntwc_comman['chdntwc_shw_dntform_ckout_disloctn_pp'];
            $this->chdntwc_dntform_dnt_label        = $chdntwc_comman['chdntwc_dntform_dnt_label'];
            $this->chdntwc_prdfn_dnt_show           = $chdntwc_comman['chdntwc_prdfn_dnt_show'];
            $this->chdntwc_prdfn_dnt_amnts          = $chdntwc_comman['chdntwc_prdfn_dnt_amnts'];
            $this->chdntwc_dntform_addnote_enable   = $chdntwc_comman['chdntwc_dntform_addnote_enable'];
            $this->chdntwc_dntform_addnote_label    = $chdntwc_comman['chdntwc_dntform_addnote_label'];
            $this->chdntwc_adddntbtn_txt            = $chdntwc_comman['chdntwc_adddntbtn_txt'];
            $this->chdntwc_prdfn_dnt_lbl_txt_clr	= $chdntwc_comman['chdntwc_prdfn_dnt_lbl_txt_clr'];
			$this->chdntwc_prdfn_dnt_lbl_bg_clr	    = $chdntwc_comman['chdntwc_prdfn_dnt_lbl_bg_clr'];
            $this->chdntwc_adddntbtn_txt_fnt_size   = $chdntwc_comman['chdntwc_adddntbtn_txt_fnt_size'];
            $this->chdntwc_adddntbtn_txt_clr        = $chdntwc_comman['chdntwc_adddntbtn_txt_clr'];
            $this->chdntwc_adddntbtn_bg_clr         = $chdntwc_comman['chdntwc_adddntbtn_bg_clr'];
            $this->chdntwc_shw_dntform_cart_disloctn_fm   = $chdntwc_comman['chdntwc_shw_dntform_cart_disloctn_fm'];
            $this->chdntwc_shw_dntpp_fxdbtn_ftr     = $chdntwc_comman['chdntwc_shw_dntpp_fxdbtn_ftr'];
            $this->chdntwc_dntpp_min_donation       = $chdntwc_comman['chdntwc_dntpp_min_donation'];
            $this->chdntwc_dntpp_max_donation       = $chdntwc_comman['chdntwc_dntpp_max_donation'];
            $this->chdntwc_fxddntpp_btn_txt         = $chdntwc_comman['chdntwc_fxddntpp_btn_txt'];
            $this->chdntwc_fxddntpp_txt_fnt_size    = $chdntwc_comman['chdntwc_fxddntpp_txt_fnt_size'];
            $this->chdntwc_fxddntpp_txt_clr         = $chdntwc_comman['chdntwc_fxddntpp_txt_clr'];
            $this->chdntwc_fxddntpp_bg_clr          = $chdntwc_comman['chdntwc_fxddntpp_bg_clr'];
            $this->chdntwc_dntclclctd_amount_show   = $chdntwc_comman['chdntwc_dntclclctd_amount_show'];
            $this->chdntwc_dntclctn_head_text       = $chdntwc_comman['chdntwc_dntclctn_head_text'];
            $this->chdntwc_dntclctn_sec_text        = $chdntwc_comman['chdntwc_dntclctn_sec_text'];
            $this->chdntwc_fxddntpp_btn_icn_enbl    = $chdntwc_comman['chdntwc_fxddntpp_btn_icn_enbl'];
            $this->chdntwc_dntpp_head_txt           = $chdntwc_comman['chdntwc_dntpp_head_txt'];



            $this->donate_1 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                <g xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M47.054,302h-32c-8.291,0-15,6.709-15,15v180c0,8.291,6.709,15,15,15h32c24.814,0,45-20.186,45-45V347    C92.054,322.186,71.869,302,47.054,302z" fill="#000000" data-original="#000000" style="" class=""/>
                    </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M507.554,331.099c-1.8-2.999-4.199-5.4-6.899-7.5c-11.045-9.662-29.654-8.749-40.499,3.001l-68.101,78.6l-2.1,2.399    c-8.399,9.3-20.4,14.401-32.999,14.401h-116.4c-8.401,0-15-6.601-15-15c0-8.401,6.599-15,15-15h91.5c16.5,0,30-13.5,30-30v-0.3    c-0.3-16.5-13.5-29.7-30-29.7h-54.3c-8.996,0-18.636-3.303-26.4-9.901c-36.599-32.1-90-34.2-129.3-6.899v184.499    c29.7,8.101,60.3,12.301,91.199,12.301h133.801c32.999,0,64.2-15.601,84-42.001l72.001-96    C513.56,360.21,514.352,341.3,507.554,331.099z" fill="#000000" data-original="#000000" style="" class=""/>
                    </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M402.264,28.995C385.627,10.297,362.564,0,337.324,0c-28.172,0-52.593,13.321-70.622,38.522    c-1.352,1.889-2.617,3.779-3.802,5.649c-1.184-1.871-2.449-3.76-3.801-5.649C241.07,13.321,216.649,0,188.477,0    c-25.24,0-48.303,10.297-64.939,28.994C107.75,46.738,99.054,70.459,99.054,95.788c0,27.525,10.681,52.924,33.611,79.934    c20.009,23.565,48.708,47.788,81.938,75.836c12.28,10.365,24.979,21.083,38.473,32.778c2.819,2.443,6.321,3.665,9.824,3.665    c3.502,0,7.005-1.222,9.824-3.665c13.492-11.693,26.189-22.41,38.469-32.773c21.342-18.014,39.773-33.57,55.767-48.66    c31.053-29.298,59.787-62.553,59.787-107.114C426.747,70.46,418.052,46.739,402.264,28.995z" fill="#000000" data-original="#000000" style="" class=""/>
                    </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                </g></svg>';

            $this->chdntwc_fxdppbtn_icon = '';
            $fxddonatepp_icon = '';

            $fxddonatepp_icon = $this->donate_1;

            if($this->chdntwc_fxddntpp_btn_icn_enbl == 'yes') {
                $this->chdntwc_fxdppbtn_icon = '<span class="chdntwc_btppicn">'.$fxddonatepp_icon.'</span>';
            }
        }


        function chdntwc_total_collected_donation($post_id) {

            global $wpdb;

            $current_product = $post_id;
            $totalDonations = 0;

            $order_items = apply_filters( 'woocommerce_reports_top_earners_order_items', $wpdb->get_results( "

            SELECT order_item_meta_2.meta_value as product_id, SUM( order_item_meta.meta_value ) as line_total FROM {$wpdb->prefix}woocommerce_order_items as order_items

            LEFT JOIN {$wpdb->prefix}woocommerce_order_itemmeta as order_item_meta ON order_items.order_item_id = order_item_meta.order_item_id

            LEFT JOIN {$wpdb->prefix}woocommerce_order_itemmeta as order_item_meta_2 ON order_items.order_item_id = order_item_meta_2.order_item_id

            LEFT JOIN {$wpdb->posts} AS posts ON order_items.order_id = posts.ID

            WHERE posts.post_type = 'shop_order'

            AND posts.post_status IN ( '" . implode( "','", array( 'wc-completed', 'wc-processing', 'wc-on-hold' ) ) . "' )

            AND order_items.order_item_type = 'line_item'

            AND order_item_meta.meta_key = '_line_total'

            AND order_item_meta_2.meta_key = '_product_id'

            GROUP BY order_item_meta_2.meta_value

            " ));

            $current = array($current_product);

            foreach($order_items as $item) {

                if(in_array($item->product_id, $current)) {

                    $totalDonations = $item->line_total;

                }

            }

            return $totalDonations;
        }


        function CHDNTWC_donation_form_html($action) {
        	ob_start();
        	?>
        	<div class="chdntwc_dntform_main">
                <form class="chdntwc_donate_form" method="post">
                    <?php wp_nonce_field( 'chdntwc_adddnt_nonce_action', 'chdntwc_adddnt_nonce_field' ); ?>
                    <div class="chdntwc_dntinp">
                        <label><?php echo $this->chdntwc_dntform_dnt_label; ?></label>
                        <input type="number" name="chdntwc_dnt_amount" class="chdntwc_dnt_amount" value="" min="1">
                    </div>
                    <?php
                    if($this->chdntwc_prdfn_dnt_show == 'yes') {
                        if($this->chdntwc_prdfn_dnt_amnts != '') {
                            $chdntwc_prdfn_dnt_amnts = str_replace(' ', '', $this->chdntwc_prdfn_dnt_amnts);
                            $chdntwc_prdfn_dnt_amnts = explode('|', $chdntwc_prdfn_dnt_amnts);
                            if(count($chdntwc_prdfn_dnt_amnts) > 0) {
                            ?>
                            <div class="chdntwc_prdfndnt">
                                <?php
                                foreach($chdntwc_prdfn_dnt_amnts as $amnt) {
                                ?>
                                <span class="chdntwc_prdamnt" style="color: <?php echo $this->chdntwc_prdfn_dnt_lbl_txt_clr; ?>; background-color: <?php echo $this->chdntwc_prdfn_dnt_lbl_bg_clr; ?>; ">
                                    <?php echo wc_price($amnt); ?>
                                    <input type="hidden" name="chdntwc_amnt" class="chdntwc_amnt" value="<?php echo $amnt; ?>">
                                </span>
                                <?php
                                }
                                ?>
                            </div>
                            <?php
                            }
                        }
                    }
                    ?>
                    <div class="chdntwc_dntnote">
                        <?php
                        if($this->chdntwc_dntform_addnote_enable == 'yes') {
                            ?>
                            <label><?php echo $this->chdntwc_dntform_addnote_label; ?></label>
                            <textarea name="chdntwc_dnt_note" rows="4" cols="4"></textarea>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="chdntwc_dntbtn">
                        <input type="submit" name="chdntwc_donate_btn" class="chdntwc_dnatn_btn" style="font-size: <?php echo $this->chdntwc_adddntbtn_txt_fnt_size; ?>px; color: <?php echo $this->chdntwc_adddntbtn_txt_clr; ?>; background-color: <?php echo $this->chdntwc_adddntbtn_bg_clr; ?>;" value="<?php echo $this->chdntwc_adddntbtn_txt; ?>">
                        <input type="hidden" name="chdntwc_dntprod_id" value="<?php echo $this->chdntwc_donation_product; ?>">
                        <input type="hidden" name="action" value="chdntwc_donation_action">
                        <input type="hidden" name="chdntwc_red_action" value="<?php echo $action; ?>">
                    </div>
                </form>

                <?php
                if($this->chdntwc_dntclclctd_amount_show == 'yes') {
                ?>

                <div class="chdntwc_dntclct_main">
                    <h2><?php echo $this->chdntwc_dntclctn_head_text; ?></h2>
                    <div class="chdntwc_clctn_main">
                        <p><?php echo $this->chdntwc_dntclctn_sec_text; ?></p>
                        <div class="chdntwc_clctn_amount">
                            <p class="chdntwc_cltamnt">
                                <span class="chdntwc_cltamnt_cursym">
                                    <?php echo get_woocommerce_currency_symbol(); ?>
                                </span>
                                <?php
                                    $donation_prod_id = $this->chdntwc_donation_product;
                                    $total_dontn_amount =  $this->chdntwc_total_collected_donation($donation_prod_id);
                                    $total_dontn_amount_array = str_split($total_dontn_amount, 1);
                                    
                                    foreach($total_dontn_amount_array as $num) {
                                        echo '<span class="chdntwc_cltamnt_num">'.$num.'</span>';
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

            </div>
           	<?php
           	$html = ob_get_clean();
           	return $html;
        }


        function CHDNTWC_before_cart_totals_dnt_form() {
            echo $this->CHDNTWC_donation_form_html('cart_page');
        }


        function CHDNTWC_checkout_donate_dnt_form() {
            echo $this->CHDNTWC_donation_form_html('ckout_page');
        }


        function CHDNTWC_adddnt_ajax_request_func() {
            $chdntwc_dntprod_id = sanitize_text_field($_REQUEST['chdntwc_dntprod_id']);

            $custom_data = array();

			// Set the posted data as cart item custom data
			if( isset($_POST['chdntwc_dnt_amount']) && ! empty($_POST['chdntwc_dnt_amount']) )
			    $custom_data['chdntwc_custdata']['chdntwc_dnt_amount']  = sanitize_text_field( $_POST['chdntwc_dnt_amount'] );
			if( isset($_POST['chdntwc_dnt_note']) && ! empty($_POST['chdntwc_dnt_note']) )
			    $custom_data['chdntwc_custdata']['chdntwc_dnt_note'] = sanitize_textarea_field( $_POST['chdntwc_dnt_note'] );

			$custom_data['chdntwc_custdata']['chdntwc_unique_id'] = wp_generate_uuid4();

			// Add product to cart with the custom cart item data
			WC()->cart->add_to_cart( $chdntwc_dntprod_id, '1', '0', array(), $custom_data );

            $message = "Donation Added Successfully.";

            wc_add_notice( apply_filters( 'wc_add_to_cart_message', $message, $chdntwc_dntprod_id ) );

			$chdntwc_red_action = sanitize_text_field($_POST['chdntwc_red_action']);

			if($chdntwc_red_action == 'cart_page') {
				$url = wc_get_cart_url();
			}

            if($chdntwc_red_action == 'ckout_page') {
                $url = wc_get_checkout_url();
            }

			$return_arr['res_action'] = $chdntwc_red_action;
			$return_arr['url'] = $url;
			echo json_encode($return_arr);
            exit;
        }


		function CHDNTWC_set_donation_price( $cart ) {
		    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
		        return;

		    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
		        return;

		    foreach ( $cart->get_cart() as $cart_item ) {
		        if( isset($cart_item['chdntwc_custdata']['chdntwc_dnt_amount']) )
		            $cart_item['data']->set_price( $cart_item['chdntwc_custdata']['chdntwc_dnt_amount'] );
		    }
		}


		function CHDNTWC_show_additnl_dntn_note_cart_page( $item_data, $cart_item_data ) {
		  if( isset( $cart_item_data['chdntwc_custdata']['chdntwc_dnt_note'] ) ) {

		    $item_data[] = array(
		      'key'     => __( $this->chdntwc_dntform_addnote_label, 'charity-donation-for-woocommerce' ),
		      'value'   => '<div class="chdntwc_cmeta">'.wc_clean( $cart_item_data['chdntwc_custdata']['chdntwc_dnt_note'].'</div>' )
		    );
		  }
		  return $item_data;
		}


		function CHDNTWC_checkout_create_order_line_item( $item, $cart_item_key, $values, $order ) {
		  if( isset( $values['chdntwc_custdata']['chdntwc_dnt_note'] ) ) {
		    $item->add_meta_data(
		      __( $this->chdntwc_dntform_addnote_label, 'charity-donation-for-woocommerce' ),
		      $values['chdntwc_custdata']['chdntwc_dnt_note'],
		      true
		    );
		  }
		}


		function CHDNTWC_show_additnl_dntn_note_email( $product_name, $item ) {
		  if( isset( $item['chdntwc_custdata']['chdntwc_dnt_note'] ) ) {
		    $product_name .= sprintf(
		      '<ul><li>%s: %s</li></ul>',
		      __( $this->chdntwc_dntform_addnote_label, 'charity-donation-for-woocommerce' ),
		      esc_html( $item['chdntwc_custdata']['chdntwc_dnt_note'] )
		     );
		  }
		  return $product_name;
		}


        function CHDNTWC_footer_action() {
            ?>
            <style type="text/css">
                .chdntwc_fxdbtn .chdntwc_btppicn svg {
                    width: <?php echo $this->chdntwc_fxddntpp_txt_fnt_size; ?>px;
                    height: auto;
                }
                .chdntwc_fxdbtn .chdntwc_btppicn svg path {
                    fill: <?php echo $this->chdntwc_fxddntpp_txt_clr; ?>;
                }
            </style>

            <div id="chdntwc_donate_popup" class="chdntwc_donate_popup">
            </div>
            <?php
            if($this->chdntwc_shw_dntpp_fxdbtn_ftr == 'yes') {
                echo '<div class="chdntwc_fxdbtn"><a href="#" class="chdntwc_pp_btn" style="font-size:'.$this->chdntwc_fxddntpp_txt_fnt_size.'px; color: '.$this->chdntwc_fxddntpp_txt_clr.'; background-color: '.$this->chdntwc_fxddntpp_bg_clr.'">'.$this->chdntwc_fxdppbtn_icon.$this->chdntwc_fxddntpp_btn_txt.'</a></div>';
            }
        }


        function CHDNTWC_donate_popup_ajx_func() {
            ob_start();
            ?>
            <div class="chdntwc_donate_popup_cls"></div>
            <div class="chdntwc_donate_popup_exmain">
                <div class="chdntwc_dntpp_content">
                    <div class="chdntwc_dntpp_header">
                        <h1><?php echo $this->chdntwc_dntpp_head_txt; ?></h1>
                        <span class="chdntwc_dntpp_close">
                            <svg height="365.696pt" viewBox="0 0 365.696 365.696" width="365.696pt" xmlns="http://www.w3.org/2000/svg">
                                <path d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"/>
                            </svg>
                        </span>
                    </div>
                    <div class="chdntwc_dntpp_body">
                        <?php echo $this->CHDNTWC_donation_form_html('cart_page'); ?>
                    </div>
                </div>
            </div>
            <?php
            echo ob_get_clean();
            exit;
        }


        function CHDNTWC_donate_shortcode($atts) {
            extract(shortcode_atts(array(
              'type'        => 1,
            ), $atts));

            ob_start();

            echo $this->CHDNTWC_donation_form_html('cart_page');

            $return_string = ob_get_clean();

            return $return_string;
        }


        function init() {

            if( $this->chdntwc_shw_dntform_cart == 'yes' ) {
                if($this->chdntwc_shw_dntform_cart_disloctn_fm == 'wc_prcd_to_ckout') {
                    add_action( 'woocommerce_proceed_to_checkout', array( $this, 'CHDNTWC_before_cart_totals_dnt_form' ) );
                }
                if($this->chdntwc_shw_dntform_cart_disloctn_fm == 'wc_aftr_cart_table') {
                    add_action( 'woocommerce_after_cart_table', array( $this, 'CHDNTWC_before_cart_totals_dnt_form' ) );
                }
                if($this->chdntwc_shw_dntform_cart_disloctn_fm == 'wc_bfr_cart_totals') {
                    add_action( 'woocommerce_before_cart_totals', array( $this, 'CHDNTWC_before_cart_totals_dnt_form' ) );
                }
                if($this->chdntwc_shw_dntform_cart_disloctn_fm == 'wc_aftr_cart_totals') {
                    add_action( 'woocommerce_after_cart_totals', array( $this, 'CHDNTWC_before_cart_totals_dnt_form' ) );
                }
            }


            if( $this->chdntwc_shw_dntform_ckout == 'yes' ) {
                if($this->chdntwc_shw_dntform_ckout_disloctn_fm == 'wc_bfr_ckout_form') {
                    add_action( 'woocommerce_before_checkout_form', array( $this, 'CHDNTWC_checkout_donate_dnt_form' ), 10 );
                }elseif ($this->chdntwc_shw_dntform_ckout_disloctn_fm == 'wc_after_ckout_form') {
                    add_action( 'woocommerce_after_checkout_form', array( $this, 'CHDNTWC_checkout_donate_dnt_form' ), 10 );
                }
            }

            add_action( 'wp_ajax_nopriv_chdntwc_adddnt_ajax_request', array($this, 'CHDNTWC_adddnt_ajax_request_func' ) );
            add_action( 'wp_ajax_chdntwc_adddnt_ajax_request', array($this, 'CHDNTWC_adddnt_ajax_request_func' ) );
            add_action( 'woocommerce_before_calculate_totals', array($this, 'CHDNTWC_set_donation_price'), 30, 1 );
        	add_filter( 'woocommerce_get_item_data', array($this, 'CHDNTWC_show_additnl_dntn_note_cart_page'), 10, 2 );
        	add_action( 'woocommerce_checkout_create_order_line_item', array($this, 'CHDNTWC_checkout_create_order_line_item'), 10, 4 );
        	add_filter( 'woocommerce_order_item_name', array($this, 'CHDNTWC_show_additnl_dntn_note_email'), 10, 2 );
            add_action( 'wp_footer', array($this, 'CHDNTWC_footer_action') );
            add_action( 'wp_ajax_nopriv_chdntwc_donate_popup_ajx', array($this, 'CHDNTWC_donate_popup_ajx_func' ) );
            add_action( 'wp_ajax_chdntwc_donate_popup_ajx', array($this, 'CHDNTWC_donate_popup_ajx_func' ) );
            add_shortcode('chdntwc-donation-form', array($this, 'CHDNTWC_donate_shortcode' ) );
        }


        public static function CHDNTWC_instance() {
            if (!isset(self::$CHDNTWC_instance)) {
                self::$CHDNTWC_instance = new self();
                self::$CHDNTWC_instance->init();
            }
            return self::$CHDNTWC_instance;
        }
    }
    CHDNTWC_front::CHDNTWC_instance();
}