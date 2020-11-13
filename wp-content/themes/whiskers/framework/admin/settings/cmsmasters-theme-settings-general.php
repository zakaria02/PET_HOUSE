<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function whiskers_options_general_tabs() {
	$cmsmasters_option = whiskers_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'whiskers');
	
	if ($cmsmasters_option['whiskers' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'whiskers');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'whiskers');
	}
	
	$tabs['header'] = esc_attr__('Header', 'whiskers');
	$tabs['content'] = esc_attr__('Content', 'whiskers');
	$tabs['footer'] = esc_attr__('Footer', 'whiskers');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function whiskers_options_general_sections() {
	$tab = whiskers_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'whiskers');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'whiskers');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'whiskers');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'whiskers');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'whiskers');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'whiskers');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function whiskers_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = whiskers_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = whiskers_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'whiskers') . '|liquid', 
				esc_html__('Boxed', 'whiskers') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'whiskers') . '|image', 
				esc_html__('Text', 'whiskers') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'whiskers'), 
			'desc' => esc_html__('Choose your website logo image.', 'whiskers'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['whiskers' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'whiskers'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'whiskers'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['whiskers' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'whiskers'), 
			'desc' => esc_html__('enable', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'whiskers'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['whiskers' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'whiskers' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'whiskers'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['whiskers' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'whiskers' . '_bg_col', 
			'title' => esc_html__('Background Color', 'whiskers'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['whiskers' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'whiskers' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'whiskers' . '_bg_img', 
			'title' => esc_html__('Background Image', 'whiskers'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'whiskers'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['whiskers' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'whiskers' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'whiskers') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'whiskers') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'whiskers') . '|repeat-y', 
				esc_html__('Repeat', 'whiskers') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'whiskers' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'whiskers'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['whiskers' . '_bg_pos'], 
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
			'section' => 'bg_section', 
			'id' => 'whiskers' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'whiskers') . '|scroll', 
				esc_html__('Fixed', 'whiskers') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'whiskers' . '_bg_size', 
			'title' => esc_html__('Background Size', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'whiskers') . '|auto', 
				esc_html__('Cover', 'whiskers') . '|cover', 
				esc_html__('Contain', 'whiskers') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'whiskers' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'whiskers'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => whiskers_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'whiskers'), 
			'desc' => esc_html__('enable', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'whiskers'), 
			'desc' => esc_html__('enable', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'whiskers'), 
			'desc' => esc_html__('pixels', 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'whiskers'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'whiskers') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['whiskers' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'whiskers') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'whiskers') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'whiskers') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'whiskers') . '|default', 
				esc_html__('Compact Style Left Navigation', 'whiskers') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'whiskers') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'whiskers') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'whiskers'), 
			'desc' => esc_html__('pixels', 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'whiskers'), 
			'desc' => esc_html__('pixels', 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_search', 
			'title' => esc_html__('Header Search', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'whiskers') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'whiskers') . '|social', 
				esc_html__('Header Custom HTML', 'whiskers') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'whiskers'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'whiskers') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['whiskers' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'whiskers'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'whiskers'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['whiskers' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'whiskers'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'whiskers'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['whiskers' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'whiskers'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'whiskers'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['whiskers' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'whiskers'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'whiskers'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['whiskers' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'whiskers') . '|left', 
				esc_html__('Right', 'whiskers') . '|right', 
				esc_html__('Center', 'whiskers') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'whiskers'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['whiskers' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'whiskers'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'whiskers'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['whiskers' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'whiskers') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'whiskers') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'whiskers') . '|repeat-y', 
				esc_html__('Repeat', 'whiskers') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'whiskers') . '|scroll', 
				esc_html__('Fixed', 'whiskers') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'whiskers') . '|auto', 
				esc_html__('Cover', 'whiskers') . '|cover', 
				esc_html__('Contain', 'whiskers') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'whiskers'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['whiskers' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'whiskers'), 
			'desc' => esc_html__('pixels', 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'whiskers'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['whiskers' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'whiskers'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['whiskers' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'whiskers'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['whiskers' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'whiskers') . '|default', 
				esc_html__('Small', 'whiskers') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['whiskers' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'whiskers') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'whiskers') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'whiskers') . '|social', 
				esc_html__('Custom HTML', 'whiskers') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'whiskers'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'whiskers'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['whiskers' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'whiskers'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'whiskers'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['whiskers' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'whiskers'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'whiskers') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['whiskers' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'whiskers' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'whiskers'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

