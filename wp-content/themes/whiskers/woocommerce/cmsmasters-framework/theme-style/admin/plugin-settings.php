<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.4
 * 
 * CMSMasters Donations Admin Settings
 * Created by CMSMasters
 * 
 */


/* Single Settings */
function whiskers_woocommerce_options_general_fields($options, $tab) {
	$defaults = whiskers_settings_general_defaults();

	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'whiskers' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Disable WooCommerce Cart', 'whiskers'),
			'desc' => '',
			'type' => 'checkbox',
			'std' => $defaults[$tab]['whiskers' . '_woocommerce_cart_dropdown']
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'whiskers_woocommerce_options_general_fields', 10, 2);

