jQuery(document).ready(function() {
   	jQuery('ul.chdntwc-tabs li').click(function(){
        var tab_id = jQuery(this).attr('data-tab');
        jQuery('ul.chdntwc-tabs li').removeClass('chdntwc-current');
        jQuery('.chdntwc-tab-content').removeClass('chdntwc-current');
        jQuery(this).addClass('chdntwc-current');
        jQuery("#"+tab_id).addClass('chdntwc-current');
    });

    jQuery('.chdntwc_colorpicker').wpColorPicker();
});