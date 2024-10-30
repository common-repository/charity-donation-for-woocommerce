jQuery(document).ready(function() {
	jQuery('body').on('click', '.chdntwc_prdamnt', function() {
		var amnt = jQuery(this).find('.chdntwc_amnt').val();
		jQuery(this).closest('.chdntwc_donate_form').find('.chdntwc_dnt_amount').val(amnt);
	});

	jQuery(document).on('submit','.chdntwc_donate_form',function() {
		jQuery('body').addClass("chdntwc_body_dntpp");
		jQuery('body').append('<div class="chdntwc_loading"><img src="'+ chdntwc_js_options.chdntwc_plugin_dir +'/images/loader.gif" class="chdntwc_loader"></div>');
		var loading = jQuery('.chdntwc_loading');
		loading.show();

		jQuery(this).find('.chdntwc_dntamn_empty').remove();	
		dntAmnt = jQuery(this).find('.chdntwc_dnt_amount').val();

		dntAmnt 	= dntAmnt * 1;
		minDonation = chdntwc_js_options.chdntwc_dntpp_min_donation * 1;
		maxDonation = chdntwc_js_options.chdntwc_dntpp_max_donation * 1;

		if (dntAmnt !== '' && dntAmnt >= minDonation && dntAmnt <= maxDonation) {
			jQuery.ajax({
				type: 'POST',
				url: chdntwc_js_options.ajaxurl,
				data: jQuery(this).serialize() + "&action=chdntwc_adddnt_ajax_request",
				dataType: 'JSON',
				success: function(response) {
					if(response.res_action == 'cart_page' ) {
						window.location = response.url;
					}
					if(response.res_action == 'ckout_page' ) {
						window.location = response.url;
					}
				}
			});
		} else {
			var insAft = jQuery(this).find('.chdntwc_dnatn_btn');
			if(dntAmnt == '') {
				jQuery("<p class='chdntwc_dntamn_empty'>"+ chdntwc_js_options.chdntwc_dntamnt_empty_text +"</p>").insertAfter(insAft);
			} else if (dntAmnt < minDonation) {
				jQuery("<p class='chdntwc_dntamn_empty'>"+ chdntwc_js_options.chdntwc_dntamnt_lesmin_text +"</p>").insertAfter(insAft);
			} else if (dntAmnt > maxDonation) {
				jQuery("<p class='chdntwc_dntamn_empty'>"+ chdntwc_js_options.chdntwc_dntamnt_grtrmax_text +"</p>").insertAfter(insAft);
			}
			var loading = jQuery('.chdntwc_loading');
			loading.remove();
			jQuery('body').removeClass("chdntwc_body_dntpp");
			return false;
		}

		return false;
	});

	jQuery('body').on('click', '.chdntwc_pp_btn', function() {
		jQuery('body').addClass("chdntwc_body_dntpp");
		jQuery('body').append('<div class="chdntwc_loading"><img src="'+ chdntwc_js_options.chdntwc_plugin_dir +'/images/loader.gif" class="chdntwc_loader"></div>');
		var loading = jQuery('.chdntwc_loading');
		loading.show();

        jQuery.ajax({
	        url:chdntwc_js_options.ajaxurl,
            type:'POST',
	        data:'action=chdntwc_donate_popup_ajx',
	        success : function(response) {
	        	var loading = jQuery('.chdntwc_loading');
				loading.remove();

	            jQuery("#chdntwc_donate_popup").css("display", "block");
	            jQuery("#chdntwc_donate_popup").html(response);
	            jQuery('.chdntwc_donate_popup_cls').css("display", "block");
	        },
	        error: function() {
	            alert('Error occured');
	        }
	    });
       return false;
    });

	jQuery(document).on('click','.chdntwc_dntpp_close',function() {
		jQuery("#chdntwc_donate_popup").css("display", "none");
		jQuery('.chdntwc_donate_popup_cls').css("display", "none");
		jQuery('body').removeClass("chdntwc_body_dntpp");
	});

	jQuery("body").on('click', '.chdntwc_donate_popup_cls', function() {
    	jQuery('#chdntwc_donate_popup').css("display", "none");
        jQuery('.chdntwc_donate_popup_cls').css("display", "none");
        jQuery('body').removeClass("chdntwc_body_dntpp");
    });

});