/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.4
 *
 * CMSMasters Woocommerce Settings Scripts
 * Created by CMSMasters
 *
 */


(function ($) {
    if ($('input[name*="' + cmsmasters_woocommerce_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
        $('#' + cmsmasters_woocommerce_settings.shortname + '_woocommerce_cart_dropdown').parents('tr').hide();
    } else {
        $('#' + cmsmasters_woocommerce_settings.shortname + '_woocommerce_cart_dropdown').parents('tr').show();
    }


    $('input[name*="' + cmsmasters_woocommerce_settings.shortname + '_header_styles"]').on('change', function () {
        if ($('input[name*="' + cmsmasters_woocommerce_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
            $('#' + cmsmasters_woocommerce_settings.shortname + '_woocommerce_cart_dropdown').parents('tr').hide();
        } else {
            $('#' + cmsmasters_woocommerce_settings.shortname + '_woocommerce_cart_dropdown').parents('tr').show();
        }
    } );
} )(jQuery);