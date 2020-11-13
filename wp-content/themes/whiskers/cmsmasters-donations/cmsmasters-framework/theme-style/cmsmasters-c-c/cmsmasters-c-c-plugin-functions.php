<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.0
 * 
 * CMSMasters Donations Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function whiskers_donations_register_c_c_scripts() {
	global $pagenow;
	
	
	$cmsmasters_option = whiskers_get_global_options();
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('whiskers-donations-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('whiskers-donations-shortcodes-extend', 'cmsmasters_donations_theme_shortcodes', array( 
			'featured_campaign_color_title' => 			esc_attr__('Campaign progress color', 'whiskers'), 
			'featured_campaign_color' => 				$cmsmasters_option['whiskers' . '_default' . '_link'] 
		));
	}
}

add_action('admin_enqueue_scripts', 'whiskers_donations_register_c_c_scripts');



// Featured Campaign Shortcode Attributes Filter
add_filter('cmsmasters_featured_campaign_atts_filter', 'cmsmasters_featured_campaign_atts');

function cmsmasters_featured_campaign_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'campaign' => 			'', 
		'campaign_metadata' => 	'', 
		'campaign_color' => 	'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}

