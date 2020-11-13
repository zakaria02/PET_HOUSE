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
function whiskers_donations_options_general_fields($options, $tab) {
	$new_options = array();
	
	if ($tab == 'header') {
		foreach($options as $option) {
			if ($option['id'] == 'whiskers_header_top_line_donations_but') {
				// remove field
			} elseif ($option['id'] == 'whiskers_header_top_line_donations_but_text') {
				// remove field
			} elseif ($option['id'] == 'whiskers_header_top_line_donations_but_link') {
				// remove field
			} else {
				$new_options[] = $option;
			}
		}
	} else {
		$new_options = $options;
	}
	
	
	return $new_options;
}

add_filter('cmsmasters_options_general_fields_filter', 'whiskers_donations_options_general_fields', 10, 2);

