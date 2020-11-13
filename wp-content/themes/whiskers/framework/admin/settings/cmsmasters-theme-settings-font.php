<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function whiskers_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'whiskers');
	$tabs['link'] = esc_attr__('Links', 'whiskers');
	$tabs['nav'] = esc_attr__('Navigation', 'whiskers');
	$tabs['heading'] = esc_attr__('Heading', 'whiskers');
	$tabs['other'] = esc_attr__('Other', 'whiskers');
	$tabs['google'] = esc_attr__('Google Fonts', 'whiskers');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function whiskers_options_font_sections() {
	$tab = whiskers_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'whiskers');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'whiskers');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'whiskers');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'whiskers');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'whiskers');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'whiskers');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function whiskers_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = whiskers_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = whiskers_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'whiskers' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'whiskers' . '_link_font', 
			'title' => esc_html__('Links Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'whiskers' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'whiskers'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['whiskers' . '_link_hover_decoration'], 
			'choices' => whiskers_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'whiskers' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'whiskers' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'whiskers' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'whiskers' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'whiskers' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'whiskers' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'whiskers' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'whiskers' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'whiskers' . '_button_font', 
			'title' => esc_html__('Button Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'whiskers' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'whiskers' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'whiskers' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'whiskers'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['whiskers' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'whiskers' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'whiskers'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['whiskers' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'whiskers' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'whiskers'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'whiskers') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'whiskers') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'whiskers') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'whiskers') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'whiskers') . '|' . 'greek', 
				esc_html__('Greek Extended', 'whiskers') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'whiskers') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'whiskers') . '|' . 'japanese', 
				esc_html__('Korean', 'whiskers') . '|' . 'korean', 
				esc_html__('Thai', 'whiskers') . '|' . 'thai', 
				esc_html__('Bengali', 'whiskers') . '|' . 'bengali', 
				esc_html__('Devanagari', 'whiskers') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'whiskers') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'whiskers') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'whiskers') . '|' . 'hebrew', 
				esc_html__('Kannada', 'whiskers') . '|' . 'kannada', 
				esc_html__('Khmer', 'whiskers') . '|' . 'khmer', 
				esc_html__('Malayalam', 'whiskers') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'whiskers') . '|' . 'myanmar', 
				esc_html__('Oriya', 'whiskers') . '|' . 'oriya', 
				esc_html__('Sinhala', 'whiskers') . '|' . 'sinhala', 
				esc_html__('Tamil', 'whiskers') . '|' . 'tamil', 
				esc_html__('Telugu', 'whiskers') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

