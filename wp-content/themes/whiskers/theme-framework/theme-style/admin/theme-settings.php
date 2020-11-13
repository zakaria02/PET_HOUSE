<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.4
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */

 /* General Settings */
function whiskers_theme_options_general_fields($options, $tab) {
	$defaults = whiskers_settings_general_defaults();
	
	if ($tab == 'content') {
		$new_options = array();
		
		foreach ($options as $option) {
			if ($option['id'] == 'whiskers' . '_heading_bg_attachment') {
				$new_options[] = array( 
					'section' => 'content_section', 
					'id' => 'whiskers' . '_heading_bg_position', 
					'title' => esc_html__('Heading Background Position', 'whiskers'), 
					'desc' => '', 
					'type' => 'select', 
					'std' => $defaults[$tab]['whiskers' . '_heading_bg_position'], 
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
				
				$new_options[] = $option;
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	} else if ($tab == 'header') {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_mid_button', 
			'title' => esc_html__('Header Button', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_header_mid_button']
		);
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_mid_button_text', 
			'title' => esc_html__('Header Button Text', 'whiskers'), 
			'desc' => '', 
			'type' => 'text',
			'std' => $defaults[$tab]['whiskers' . '_header_mid_button_text'],
			'class' => ''
		);
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'whiskers' . '_header_mid_button_link', 
			'title' => esc_html__('Header Button Link', 'whiskers'), 
			'desc' =>  '', 
			'type' => 'text',
			'std' => $defaults[$tab]['whiskers' . '_header_mid_button_link'],
			'class' => ''
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'whiskers_theme_options_general_fields', 10, 2);


/* Color Settings */
function whiskers_theme_options_color_fields($options, $tab) {
	$defaults = whiskers_color_schemes_defaults();
	
	
	if ($tab != 'header' && $tab != 'navigation' && $tab != 'header_top') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'whiskers' . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'whiskers'), 
			'desc' => esc_html__('Secondary color for some elements', 'whiskers'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'whiskers_theme_options_color_fields', 10, 2);



/* Single Posts Settings */
function whiskers_theme_options_single_tabs_fields($tabs) {
	$tabs['project'] = esc_attr__('Pet', 'whiskers');
	
	
	return $tabs;
}

add_filter('cmsmasters_options_single_tabs_filter', 'whiskers_theme_options_single_tabs_fields', 10, 2);



function whiskers_theme_options_single_sections_fields($sections, $tab) {
	if ($tab == 'project') {
		$sections['project_section'] = esc_attr__('Pet Options', 'whiskers');
	}
	
	
	return $sections;
}

add_filter('cmsmasters_options_single_sections_filter', 'whiskers_theme_options_single_sections_fields', 10, 2);



function whiskers_theme_options_single_fields($options, $tab) {
	if ($tab == 'project') {
		$new_options = array();
		
		foreach ($options as $option) {
			if ($option['id'] == 'whiskers' . '_portfolio_project_title') {
				$option['title'] = esc_html__('Pet Title', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_details_title') {
				$option['title'] = esc_html__('Pet Details Title', 'whiskers'); 
				$option['desc'] = esc_html__('Enter a pet details block title', 'whiskers'); 
				$option['std'] = esc_html__('Pet Details', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_date') {
				$option['title'] = esc_html__('Pet Date', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_cat') {
				$option['title'] = esc_html__('Pet Categories', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_author') {
				$option['title'] = esc_html__('Pet Author', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_comment') {
				$option['title'] = esc_html__('Pet Comments', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_tag') {
				$option['title'] = esc_html__('Pet Tags', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_like') {
				$option['title'] = esc_html__('Pet Likes', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_link') {
				$option['title'] = esc_html__('Pet Link', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_nav_box') {
				$option['title'] = esc_html__('Pets Navigation Box', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_nav_order_cat') {
				$option['title'] = esc_html__('Pets Navigation Order by Category', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_more_projects_box') {
				$option['title'] = esc_html__('More Pets Box', 'whiskers'); 
				$option['choices'] = array( 
					esc_html__('Show Related Pets', 'whiskers') . '|related', 
					esc_html__('Show Popular Pets', 'whiskers') . '|popular', 
					esc_html__('Show Recent Pets', 'whiskers') . '|recent', 
					esc_html__('Hide More Pets Box', 'whiskers') . '|hide' 
				);
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_more_projects_count') {
				$option['title'] = esc_html__('More Pets Box Items Number', 'whiskers'); 
				$option['desc'] = esc_html__('pets', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_more_projects_pause') {
				$option['title'] = esc_html__('More Pets Slider Pause Time', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_project_slug') {
				$option['title'] = esc_html__('Pet Slug', 'whiskers'); 
				$option['desc'] = esc_html__('Enter a page slug that should be used for your pets single item', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_pj_categs_slug') {
				$option['title'] = esc_html__('Pet Categories Slug', 'whiskers'); 
				$option['desc'] = esc_html__('Enter page slug that should be used on pets categories archive page', 'whiskers'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'whiskers' . '_portfolio_pj_tags_slug') {
				$option['title'] = esc_html__('Pet Tags Slug', 'whiskers'); 
				$option['desc'] = esc_html__('Enter page slug that should be used on pets tags archive page', 'whiskers'); 
				
				$new_options[] = $option;
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_single_fields_filter', 'whiskers_theme_options_single_fields', 10, 2);
