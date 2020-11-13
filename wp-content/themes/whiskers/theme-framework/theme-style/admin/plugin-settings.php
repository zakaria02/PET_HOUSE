<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.4
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by CMSMasters
 *
 */


/* Single Settings */
function whiskers_woocommerce_options_general_fields($options, $tab) {
	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'whiskers' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Disable WooCommerce Cart', 'whiskers'),
			'desc' => '',
			'type' => 'checkbox',
			'std' => 0
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'whiskers_woocommerce_options_general_fields', 10, 2);

