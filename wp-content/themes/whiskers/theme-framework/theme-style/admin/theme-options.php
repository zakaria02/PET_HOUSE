<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * Theme Admin Options
 * Created by CMSMasters
 * 
 */


/* Filter for Options */
function whiskers_theme_meta_fields($custom_all_meta_fields) {
	$cmsmasters_option = whiskers_get_global_options();
	
	
	$custom_all_meta_fields_new = array();
	
	
	foreach ($custom_all_meta_fields as $custom_all_meta_field) {
		if (
			$custom_all_meta_field['id'] == 'cmsmasters_heading_bg_att'
		) {	
			$custom_all_meta_fields_new[] = array( 
				'label'	=> esc_html__('Heading Background Position', 'whiskers'), 
				'desc'	=> '', 
				'id'	=> 'cmsmasters_heading_bg_pos', 
				'type'	=> 'select', 
				'hide'	=> 'true', 
				'std'	=> 'bottom center', 
				'options' => array( 
					'top left' => array( 
						'label' => esc_html__('Top Left', 'whiskers'), 
						'value'	=> 'top left' 
					), 
					'top center' => array( 
						'label' => esc_html__('Top Center', 'whiskers'), 
						'value'	=> 'top center' 
					), 
					'top right' => array( 
						'label' => esc_html__('Top Right', 'whiskers'), 
						'value'	=> 'top right' 
					), 
					'center left' => array( 
						'label' => esc_html__('Center Left', 'whiskers'), 
						'value'	=> 'center left' 
					), 
					'center center' => array( 
						'label' => esc_html__('Center Center', 'whiskers'), 
						'value'	=> 'center center' 
					), 
					'center right' => array( 
						'label' => esc_html__('Center Right', 'whiskers'), 
						'value'	=> 'center right' 
					), 
					'bottom left' => array( 
						'label' => esc_html__('Bottom Left', 'whiskers'), 
						'value'	=> 'bottom left' 
					), 
					'bottom center' => array( 
						'label' => esc_html__('Bottom Center', 'whiskers'), 
						'value'	=> 'bottom center' 
					), 
					'bottom right' => array( 
						'label' => esc_html__('Bottom Right', 'whiskers'), 
						'value'	=> 'bottom right' 
					) 
				) 
			);
			
			
			$custom_all_meta_fields_new[] = $custom_all_meta_field;
		} elseif (
			(isset($_GET['post_type']) && $_GET['post_type'] == 'profile') || 
			(isset($_POST['post_type']) && $_POST['post_type'] == 'profile') || 
			(isset($_GET['post']) && get_post_type($_GET['post']) == 'profile') 
		) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_profile_subtitle') {
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Profile Color', 'whiskers'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_profile_color', 
					'type'	=> 'rgba', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		} elseif (
			(isset($_GET['post_type']) && $_GET['post_type'] == 'project') || 
			(isset($_POST['post_type']) && $_POST['post_type'] == 'project') || 
			(isset($_GET['post']) && get_post_type($_GET['post']) == 'project') 
		) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_project_images') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Images', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_image_show') {	
				$custom_all_meta_field['label'] = esc_html__('Don\'t Show Featured Image in Open Post', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_title') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Title', 'whiskers');
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Rollover Background Color', 'whiskers'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_project_color', 
					'type'	=> 'rgba', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Pet Title Color', 'whiskers'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_project_title_color', 
					'type'	=> 'rgba', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Pet Category Color', 'whiskers'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_project_category_color', 
					'type'	=> 'rgba', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Pet Details Color', 'whiskers'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_project_details_color', 
					'type'	=> 'rgba', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_size') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Puzzle Image Size', 'whiskers');
				$custom_all_meta_field['desc'] = esc_html__('Recommended Pet Puzzle Image dimensions, or other size, with the same ratio', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_puzzle_image') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Puzzle Image', 'whiskers');
				$custom_all_meta_field['desc'] = esc_html__('Choose image for Masonry Puzzle pets', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_details_title') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Details Title', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Info', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_text') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Link Text', 'whiskers');
				$custom_all_meta_field['std'] = esc_html__('Read More', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_url') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Link URL', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_redirect') {	
				$custom_all_meta_field['desc'] = esc_html__('Redirect to pet link URL instead of opening pet page', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_target') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Link Target', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_one_title') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Features 1 Title', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_one') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Features 1', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_two_title') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Features 2 Title', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_two') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Features 2', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_three_title') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Features 3 Title', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_three') {	
				$custom_all_meta_field['label'] = esc_html__('Pet Features 3', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_tabs') {
				$custom_all_meta_field['options']['cmsmasters_project']['label'] = esc_html__('Pet', 'whiskers');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		} else {
			$custom_all_meta_fields_new[] = $custom_all_meta_field;
		}
	}
	
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'whiskers_theme_meta_fields');

