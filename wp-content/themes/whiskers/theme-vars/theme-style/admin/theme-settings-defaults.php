<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.4
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('whiskers_settings_general_defaults')) {

function whiskers_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'whiskers' . '_theme_layout' => 		'liquid', 
			'whiskers' . '_logo_type' => 			'image', 
			'whiskers' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'whiskers' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'whiskers' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Whiskers', 
			'whiskers' . '_logo_subtitle' => 		'', 
			'whiskers' . '_logo_custom_color' => 	0, 
			'whiskers' . '_logo_title_color' => 	'', 
			'whiskers' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'whiskers' . '_bg_col' => 			'#f1f1f1', 
			'whiskers' . '_bg_img_enable' => 	0, 
			'whiskers' . '_bg_img' => 			'', 
			'whiskers' . '_bg_rep' => 			'no-repeat', 
			'whiskers' . '_bg_pos' => 			'top center', 
			'whiskers' . '_bg_att' => 			'scroll', 
			'whiskers' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'whiskers' . '_fixed_header' => 				1, 
			'whiskers' . '_header_overlaps' => 				1, 
			'whiskers' . '_header_top_line' => 				0, 
			'whiskers' . '_header_top_height' => 			'34', 
			'whiskers' . '_header_top_line_short_info' => 	'', 
			'whiskers' . '_header_top_line_add_cont' => 	'social', 
			'whiskers' . '_header_styles' => 				'default', 
			'whiskers' . '_header_mid_height' => 			'70', 
			'whiskers' . '_header_bot_height' => 			'52', 
			'whiskers' . '_header_search' => 				1, 
			'whiskers' . '_header_add_cont' => 				'none', 
			'whiskers' . '_header_add_cont_cust_html' => 	'',
			'whiskers' . '_woocommerce_cart_dropdown' => 	0,
			'whiskers' . '_header_mid_button' => 			0,
			'whiskers' . '_header_mid_button_text' => 		esc_html__('My Account', 'whiskers'),
			'whiskers' . '_header_mid_button_link' => 		''
		), 
		'content' => array( 
			'whiskers' . '_layout' => 					'r_sidebar', 
			'whiskers' . '_archives_layout' => 			'r_sidebar', 
			'whiskers' . '_search_layout' => 			'r_sidebar', 
			'whiskers' . '_other_layout' => 			'r_sidebar', 
			'whiskers' . '_heading_alignment' => 		'center', 
			'whiskers' . '_heading_scheme' => 			'default', 
			'whiskers' . '_heading_bg_image_enable' => 	1, 
			'whiskers' . '_heading_bg_image' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/heading_bg.jpg', 
			'whiskers' . '_heading_bg_repeat' => 		'no-repeat', 
			'whiskers' . '_heading_bg_attachment' => 	'scroll', 
			'whiskers' . '_heading_bg_position' => 		'bottom center', 
			'whiskers' . '_heading_bg_size' => 			'cover', 
			'whiskers' . '_heading_bg_color' => 		'', 
			'whiskers' . '_heading_height' => 			'420', 
			'whiskers' . '_breadcrumbs' => 				1, 
			'whiskers' . '_bottom_scheme' => 			'footer', 
			'whiskers' . '_bottom_sidebar' => 			0, 
			'whiskers' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'whiskers' . '_footer_scheme' => 				'footer', 
			'whiskers' . '_footer_type' => 					'default', 
			'whiskers' . '_footer_additional_content' => 	'nav', 
			'whiskers' . '_footer_logo' => 					1, 
			'whiskers' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'whiskers' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'whiskers' . '_footer_nav' => 					0, 
			'whiskers' . '_footer_social' => 				0, 
			'whiskers' . '_footer_html' => 					'', 
			'whiskers' . '_footer_copyright' => 			__('This is a sample website - cmsmasters', 'whiskers') . ' &copy; ' . date('Y'),
		) 
	);
	
	
	$settings = apply_filters('whiskers_settings_general_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('whiskers_settings_font_defaults')) {

function whiskers_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'whiskers' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Noto+Sans:400,400i,700,700i', 
				'font_size' => 			'16', 
				'line_height' => 		'26', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'whiskers' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'whiskers' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'whiskers' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'whiskers' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'12', 
				'line_height' => 		'18', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			) 
		), 
		'heading' => array( 
			'whiskers' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'42', 
				'line_height' => 		'54', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'whiskers' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'36', 
				'line_height' => 		'40', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'whiskers' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'28', 
				'line_height' => 		'34', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'whiskers' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'24', 
				'line_height' => 		'32', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'whiskers' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'18', 
				'line_height' => 		'26', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'whiskers' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'whiskers' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'12', 
				'line_height' => 		'44', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'whiskers' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Noto+Sans:400,400i,700,700i', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'whiskers' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Noto+Sans:400,400i,700,700i', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'whiskers' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Noto+Sans:400,400i,700,700i', 
				'font_size' => 			'28', 
				'line_height' => 		'34', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'google' => array( 
			'whiskers' . '_google_web_fonts' => array( 
				'Fira+Sans:300,300italic,400,400italic,500,500italic,700,700italic|Fira Sans', 
				'Noto+Sans:400,400i,700,700i|Noto Sans', 
				'Noto+Serif:400,400i,700,700i|Noto Serif', 
				'Boogaloo|Boogaloo', 
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Cookie|Cookie' 
			) 
		) 
	);
	
	
	$settings = apply_filters('whiskers_settings_font_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#67696f', 
		'#42b0e2', 
		'#989ca3', 
		'#3d4149', 
		'#ffffff',  
		'#ffffff', 
		'#e2e2e2', 
		'#ffffff' 
	);
	
	
	return apply_filters('cmsmasters_color_picker_palettes_filter', $palettes);
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('whiskers_color_schemes_defaults')) {

function whiskers_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#67696f', 
			'link' => 		'#42b0e2', 
			'hover' => 		'#989ca3', 
			'heading' => 	'#2f3237', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e2e2e2', 
			'secondary' => 	'#ffffff' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#67696f', 
			'mid_link' => 		'#42b0e2', 
			'mid_hover' => 		'#989ca3', 
			'mid_bg' => 		'#ffffff', 
			'mid_bg_scroll' => 	'#ffffff', 
			'mid_border' => 	'#e2e2e2', 
			'bot_color' => 		'#67696f', 
			'bot_link' => 		'#42b0e2', 
			'bot_hover' => 		'#989ca3', 
			'bot_bg' => 		'#ffffff', 
			'bot_bg_scroll' => 	'#ffffff', 
			'bot_border' => 	'#e2e2e2'
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#2f3237', 
			'title_link_hover' => 		'#a3d256', 
			'title_link_current' => 	'#42b0e2', 
			'title_link_subtitle' => 	'#989ca3', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#989ca3', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#e2e2e2', 
			'dropdown_link' => 			'#2f3237', 
			'dropdown_link_hover' => 	'#2f3237', 
			'dropdown_link_subtitle' => '#989ca3', 
			'dropdown_link_highlight' => '#42b0e2', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.6)', 
			'link' => 					'#ffffff', 
			'hover' => 					'rgba(255,255,255,0.5)', 
			'bg' => 					'#3a3a3a', 
			'border' => 				'rgba(255,255,255,0)', 
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'rgba(255,255,255,0.5)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#2d2d2d', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'#818181', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#4d4d4d', 
			'link' => 		'#a3d256', 
			'hover' => 		'#989ca3', 
			'heading' => 	'#444343', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e2e2e2', 
			'secondary' => 	'#a3d256' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#706d76', 
			'link' => 		'#8384e3', 
			'hover' => 		'#a8a6aa', 
			'heading' => 	'#787aa0', 
			'bg' => 		'#f1f1f1', 
			'alternate' => 	'#fafafa', 
			'border' => 	'#dbdbdb', 
			'secondary' => 	'#ffffff' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#ffffff', 
			'link' => 		'#ffffff', 
			'hover' => 		'#a8a6aa', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#f1f1f1', 
			'alternate' => 	'#fafafa', 
			'border' => 	'rgba(255,255,255,0.2)', 
			'secondary' => 	'#ffffff' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#878787', 
			'link' => 		'#ff6c2f', 
			'hover' => 		'#3b3b3b', 
			'heading' => 	'#292929', 
			'bg' => 		'#fbfbfb', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4', 
			'secondary' => 	'#ffffff' 
		) 
	);
	
	
	$settings = apply_filters('whiskers_color_schemes_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('whiskers_settings_element_defaults')) {

function whiskers_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'whiskers' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'whiskers' . '_social_icons' => array( 
				'cmsmasters-icon-linkedin|#|' . esc_html__('Linkedin', 'whiskers') . '|true||', 
				'cmsmasters-icon-facebook|#|' . esc_html__('Facebook', 'whiskers') . '|true||', 
				'cmsmasters-icon-google|#|' . esc_html__('Google', 'whiskers') . '|true||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'whiskers') . '|true||', 
				'cmsmasters-icon-skype|#|' . esc_html__('Skype', 'whiskers') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'whiskers' . '_ilightbox_skin' => 					'dark', 
			'whiskers' . '_ilightbox_path' => 					'vertical', 
			'whiskers' . '_ilightbox_infinite' => 				0, 
			'whiskers' . '_ilightbox_aspect_ratio' => 			1, 
			'whiskers' . '_ilightbox_mobile_optimizer' => 		1, 
			'whiskers' . '_ilightbox_max_scale' => 				1, 
			'whiskers' . '_ilightbox_min_scale' => 				0.2, 
			'whiskers' . '_ilightbox_inner_toolbar' => 			0, 
			'whiskers' . '_ilightbox_smart_recognition' => 		0, 
			'whiskers' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'whiskers' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'whiskers' . '_ilightbox_controls_toolbar' => 		1, 
			'whiskers' . '_ilightbox_controls_arrows' => 		0, 
			'whiskers' . '_ilightbox_controls_fullscreen' => 	1, 
			'whiskers' . '_ilightbox_controls_thumbnail' => 	1, 
			'whiskers' . '_ilightbox_controls_keyboard' => 		1, 
			'whiskers' . '_ilightbox_controls_mousewheel' => 	1, 
			'whiskers' . '_ilightbox_controls_swipe' => 		1, 
			'whiskers' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'whiskers' . '_sitemap_nav' => 			1, 
			'whiskers' . '_sitemap_categs' => 		1, 
			'whiskers' . '_sitemap_tags' => 		1, 
			'whiskers' . '_sitemap_month' => 		1, 
			'whiskers' . '_sitemap_pj_categs' => 	1, 
			'whiskers' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'whiskers' . '_error_color' => 				'#ffffff', 
			'whiskers' . '_error_bg_color' => 			'#413d49', 
			'whiskers' . '_error_bg_img_enable' => 		1, 
			'whiskers' . '_error_bg_image' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/error_bg.jpg', 
			'whiskers' . '_error_bg_rep' => 			'no-repeat', 
			'whiskers' . '_error_bg_pos' => 			'top center', 
			'whiskers' . '_error_bg_att' => 			'scroll', 
			'whiskers' . '_error_bg_size' => 			'cover', 
			'whiskers' . '_error_search' => 			1, 
			'whiskers' . '_error_sitemap_button' => 	1, 
			'whiskers' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'whiskers' . '_custom_css' => 			'', 
			'whiskers' . '_custom_js' => 			'', 
			'whiskers' . '_gmap_api_key' => 		'', 
			'whiskers' . '_api_key' => 				'', 
			'whiskers' . '_api_secret' => 			'', 
			'whiskers' . '_access_token' => 		'', 
			'whiskers' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'whiskers' . '_recaptcha_public_key' => 	'', 
			'whiskers' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	$settings = apply_filters('whiskers_settings_element_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('whiskers_settings_single_defaults')) {

function whiskers_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'whiskers' . '_blog_post_layout' => 		'r_sidebar', 
			'whiskers' . '_blog_post_title' => 			1, 
			'whiskers' . '_blog_post_date' => 			1, 
			'whiskers' . '_blog_post_cat' => 			1, 
			'whiskers' . '_blog_post_author' => 		1, 
			'whiskers' . '_blog_post_comment' => 		1, 
			'whiskers' . '_blog_post_tag' => 			1, 
			'whiskers' . '_blog_post_like' => 			1, 
			'whiskers' . '_blog_post_nav_box' => 		1, 
			'whiskers' . '_blog_post_nav_order_cat' => 	0, 
			'whiskers' . '_blog_post_share_box' => 		1, 
			'whiskers' . '_blog_post_author_box' => 	1, 
			'whiskers' . '_blog_more_posts_box' => 		'popular', 
			'whiskers' . '_blog_more_posts_count' => 	'3', 
			'whiskers' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'whiskers' . '_portfolio_project_title' => 			1, 
			'whiskers' . '_portfolio_project_details_title' => 	esc_html__('Pet details', 'whiskers'), 
			'whiskers' . '_portfolio_project_date' => 			1, 
			'whiskers' . '_portfolio_project_cat' => 			1, 
			'whiskers' . '_portfolio_project_author' => 		1, 
			'whiskers' . '_portfolio_project_comment' => 		0, 
			'whiskers' . '_portfolio_project_tag' => 			0, 
			'whiskers' . '_portfolio_project_like' => 			1, 
			'whiskers' . '_portfolio_project_link' => 			0, 
			'whiskers' . '_portfolio_project_share_box' => 		1, 
			'whiskers' . '_portfolio_project_nav_box' => 		1, 
			'whiskers' . '_portfolio_project_nav_order_cat' => 	0, 
			'whiskers' . '_portfolio_project_author_box' => 	1, 
			'whiskers' . '_portfolio_more_projects_box' => 		'popular', 
			'whiskers' . '_portfolio_more_projects_count' => 	'4', 
			'whiskers' . '_portfolio_more_projects_pause' => 	'5', 
			'whiskers' . '_portfolio_project_slug' => 			'pet', 
			'whiskers' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'whiskers' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'whiskers' . '_profile_post_title' => 			1, 
			'whiskers' . '_profile_post_details_title' => 	esc_html__('Profile details', 'whiskers'), 
			'whiskers' . '_profile_post_cat' => 			1, 
			'whiskers' . '_profile_post_comment' => 		1, 
			'whiskers' . '_profile_post_like' => 			1, 
			'whiskers' . '_profile_post_nav_box' => 		1, 
			'whiskers' . '_profile_post_nav_order_cat' => 	0, 
			'whiskers' . '_profile_post_share_box' => 		1, 
			'whiskers' . '_profile_post_slug' => 			'profile', 
			'whiskers' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	$settings = apply_filters('whiskers_settings_single_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('whiskers_project_puzzle_proportion')) {

function whiskers_project_puzzle_proportion() {
	return 1;
}

}


/* Project Puzzle Proportion */
if (!function_exists('whiskers_project_puzzle_large_gar_parameters')) {

function whiskers_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2 
	);
	
	
	return $parameter;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('whiskers_get_image_thumbnail_list')) {

function whiskers_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		60, 
			'height' => 	60, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		500, 
			'height' => 	500, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'whiskers') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	380, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'whiskers') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	440, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Pet', 'whiskers') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Pet', 'whiskers') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	570, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'whiskers') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'whiskers') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	700, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'whiskers') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	650, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Pet Full', 'whiskers') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'whiskers') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('whiskers_project_labels')) {

function whiskers_project_labels() {
	return array( 
		'name' => 					esc_html__('Pets', 'whiskers'), 
		'singular_name' => 			esc_html__('Pet', 'whiskers'), 
		'menu_name' => 				esc_html__('Pets', 'whiskers'), 
		'all_items' => 				esc_html__('All Pets', 'whiskers'), 
		'add_new' => 				esc_html__('Add New', 'whiskers'), 
		'add_new_item' => 			esc_html__('Add New Pet', 'whiskers'), 
		'edit_item' => 				esc_html__('Edit Pet', 'whiskers'), 
		'new_item' => 				esc_html__('New Pet', 'whiskers'), 
		'view_item' => 				esc_html__('View Pet', 'whiskers'), 
		'search_items' => 			esc_html__('Search Pets', 'whiskers'), 
		'not_found' => 				esc_html__('No pets found', 'whiskers'), 
		'not_found_in_trash' => 	esc_html__('No pets found in Trash', 'whiskers') 
	);
}

}

add_filter('cmsmasters_project_labels_filter', 'whiskers_project_labels');


if (!function_exists('whiskers_pj_categs_labels')) {

function whiskers_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Pet Categories', 'whiskers'), 
		'singular_name' => 			esc_html__('Pet Category', 'whiskers') 
	);
}

}

add_filter('cmsmasters_pj_categs_labels_filter', 'whiskers_pj_categs_labels');


if (!function_exists('whiskers_pj_tags_labels')) {

function whiskers_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Pet Tags', 'whiskers'), 
		'singular_name' => 			esc_html__('Pet Tag', 'whiskers') 
	);
}

}

add_filter('cmsmasters_pj_tags_labels_filter', 'whiskers_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('whiskers_profile_labels')) {

function whiskers_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'whiskers'), 
		'singular_name' => 			esc_html__('Profiles', 'whiskers'), 
		'menu_name' => 				esc_html__('Profiles', 'whiskers'), 
		'all_items' => 				esc_html__('All Profiles', 'whiskers'), 
		'add_new' => 				esc_html__('Add New', 'whiskers'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'whiskers'), 
		'edit_item' => 				esc_html__('Edit Profile', 'whiskers'), 
		'new_item' => 				esc_html__('New Profile', 'whiskers'), 
		'view_item' => 				esc_html__('View Profile', 'whiskers'), 
		'search_items' => 			esc_html__('Search Profiles', 'whiskers'), 
		'not_found' => 				esc_html__('No Profiles found', 'whiskers'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'whiskers') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'whiskers_profile_labels');


if (!function_exists('whiskers_pl_categs_labels')) {

function whiskers_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'whiskers'), 
		'singular_name' => 			esc_html__('Profile Category', 'whiskers') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'whiskers_pl_categs_labels');

