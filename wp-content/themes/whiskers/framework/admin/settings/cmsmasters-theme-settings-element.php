<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function whiskers_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'whiskers');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'whiskers');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'whiskers');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'whiskers');
	$tabs['error'] = esc_attr__('404', 'whiskers');
	$tabs['code'] = esc_attr__('Custom Codes', 'whiskers');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'whiskers');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function whiskers_options_element_sections() {
	$tab = whiskers_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'whiskers');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'whiskers');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'whiskers');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'whiskers');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'whiskers');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'whiskers');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'whiskers');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function whiskers_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = whiskers_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = whiskers_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'whiskers' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'whiskers'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['whiskers' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'whiskers' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'whiskers'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['whiskers' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'whiskers'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'whiskers') . '|dark', 
				esc_html__('Light', 'whiskers') . '|light', 
				esc_html__('Mac', 'whiskers') . '|mac', 
				esc_html__('Metro Black', 'whiskers') . '|metro-black', 
				esc_html__('Metro White', 'whiskers') . '|metro-white', 
				esc_html__('Parade', 'whiskers') . '|parade', 
				esc_html__('Smooth', 'whiskers') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'whiskers'), 
			'desc' => esc_html__('Sets path for switching windows', 'whiskers'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'whiskers') . '|vertical', 
				esc_html__('Horizontal', 'whiskers') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'whiskers'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'whiskers'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'whiskers'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'whiskers'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'whiskers'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'whiskers'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'whiskers'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'whiskers'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'whiskers'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'whiskers'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'whiskers') . '|center', 
				esc_html__('Fit', 'whiskers') . '|fit', 
				esc_html__('Fill', 'whiskers') . '|fill', 
				esc_html__('Stretch', 'whiskers') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'whiskers'), 
			'desc' => esc_html__('Sets buttons be available or not', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'whiskers'), 
			'desc' => esc_html__('Enable the arrow buttons', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'whiskers'), 
			'desc' => esc_html__('Sets the fullscreen button', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'whiskers'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'whiskers'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'whiskers'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'whiskers'), 
			'desc' => esc_html__('Sets the swipe navigation', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'whiskers' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'whiskers'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'whiskers' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'whiskers' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'whiskers' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'whiskers' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'whiskers' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'whiskers' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_color', 
			'title' => esc_html__('Text Color', 'whiskers'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['whiskers' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'whiskers'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['whiskers' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'whiskers'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'whiskers'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['whiskers' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'whiskers') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'whiskers') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'whiskers') . '|repeat-y', 
				esc_html__('Repeat', 'whiskers') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'whiskers'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['whiskers' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'whiskers') . '|top left', 
				esc_html__('Top Center', 'whiskers') . '|top center', 
				esc_html__('Top Right', 'whiskers') . '|top right', 
				esc_html__('Center Left', 'whiskers') . '|center left', 
				esc_html__('Center Center', 'whiskers') . '|center center', 
				esc_html__('Center Right', 'whiskers') . '|center right', 
				esc_html__('Bottom Left', 'whiskers') . '|bottom left', 
				esc_html__('Bottom Center', 'whiskers') . '|bottom center', 
				esc_html__('Bottom Right', 'whiskers') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'whiskers') . '|scroll', 
				esc_html__('Fixed', 'whiskers') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'whiskers') . '|auto', 
				esc_html__('Cover', 'whiskers') . '|cover', 
				esc_html__('Contain', 'whiskers') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_search', 
			'title' => esc_html__('Search Line', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'whiskers' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'whiskers' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'whiskers'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['whiskers' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'whiskers' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'whiskers'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['whiskers' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'whiskers' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'whiskers' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'whiskers' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'whiskers' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'whiskers' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'whiskers' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'whiskers' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

