<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.0
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function whiskers_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('whiskers-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('whiskers-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array(
			'posts_slider_field_poststype_choice_pet' => 		esc_attr__('Pets', 'whiskers'), 
			'posts_slider_field_pet_categ_title' => 			esc_attr__('Pets Categories', 'whiskers'), 
			'posts_slider_field_pet_categ_descr' => 			esc_attr__('Show pets associated with certain categories.', 'whiskers'), 
			'posts_slider_field_pet_categ_descr_note' => 		esc_attr__('If you don\'t choose any pet categories, all your pets will be shown', 'whiskers'), 
			'posts_slider_field_pet_meta_title' => 				esc_attr__('Pets Metadata', 'whiskers'), 
			'posts_slider_field_pet_meta_descr' => 				esc_attr__('Choose pets metadata you want to be shown', 'whiskers'), 
			'pets_title' => 									esc_attr__('Pets', 'whiskers'), 
			'pets_field_orderby_descr' => 						esc_attr__('Choose your pets order by parameter', 'whiskers'), 
			'pets_field_number_title' => 						esc_attr__('Pets Number', 'whiskers'), 
			'pets_field_number_descr' => 						esc_attr__('Enter the number of pets for showing per page', 'whiskers'), 
			'pets_field_number_descr_note' => 					esc_attr__('number, if empty - show all pets', 'whiskers'), 
			'pets_field_categories_descr' => 					esc_attr__('Show pets associated with certain categories.', 'whiskers'), 
			'pets_field_categories_descr_note' => 				esc_attr__('If you don\'t choose any pet categories, all your pets will be shown', 'whiskers'), 
			'pets_field_layout_descr' => 						esc_attr__('Choose layout type for your pets', 'whiskers'), 
			'pets_field_layout_choice_grid' => 					esc_attr__('Pets Grid', 'whiskers'), 
			'pets_field_layout_mode_descr' => 					esc_attr__('Choose grid layout mode for your pets', 'whiskers'), 
			'pets_field_col_count_descr' => 					esc_attr__('Choose number of pets per row', 'whiskers'), 
			'pets_field_metadata_descr' => 						esc_attr__('Choose pets metadata that you want to show', 'whiskers'), 
			'pets_field_gap_descr' => 							esc_attr__('Choose the gap between pets', 'whiskers'), 
			'pets_field_filter_descr' => 						esc_attr__('If checked, enable pets category filter', 'whiskers'), 
			'pets_field_sorting_descr' => 						esc_attr__('If checked, enable pets date & name sorting', 'whiskers'), 
			/* Blog */
			'blog_field_layout_mode_puzzle' => 					esc_attr__('Puzzle', 'whiskers'), 
			/* Counters */
			'counters_field_value_font_size' => 				esc_attr__('Value Font Size', 'whiskers'), 
			'counters_field_value_line_height' => 				esc_attr__('Value Line Height', 'whiskers'), 
			/* Profiles */
			'profiles_field_style' => 							esc_attr__('Style', 'whiskers'), 
			'choice_style_1' => 								esc_attr__('Style 1', 'whiskers'), 
			'choice_style_2' => 								esc_attr__('Style 2', 'whiskers'), 
			/* Portfolio */
			'portfolio_field_style' => 							esc_attr__('Style', 'whiskers'), 
			'choice_style_3' => 								esc_attr__('Style 3', 'whiskers') 
		));
	}
}

add_action('admin_enqueue_scripts', 'whiskers_theme_register_c_c_scripts');


// Counters Shortcode Attributes Filter
add_filter('cmsmasters_counters_atts_filter', 'cmsmasters_counters_atts');

function cmsmasters_counters_atts() {
	return array( 
		'shortcode_id' => 			'', 
		'type' => 					'horizontal', 
		'count' => 					'5', 
		'value_font_size' => 		'56', 
		'value_line_height' => 		'76', 
		'icon_size' => 				'42', 
		'icon_space' => 			'76', 
		'icon_border_width' => 		'2', 
		'icon_border_radius' => 	'50%', 
		'animation' => 				'', 
		'animation_delay' => 		'0', 
		'classes' => 				'' 
	);
}


// Profiles Shortcode Attributes Filter
add_filter('cmsmasters_profiles_atts_filter', 'cmsmasters_profiles_atts');

function cmsmasters_profiles_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'orderby' => 			'', 
		'order' => 				'', 
		'count' => 				'', 
		'categories' => 		'', 
		'layout' => 			'', 
		'style' => 				'', 
		'columns' => 			'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Blog Shortcode Attributes Filter
add_filter('cmsmasters_blog_atts_filter', 'cmsmasters_blog_atts');

function cmsmasters_blog_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'orderby' => 			'date', 
		'order' => 				'DESC', 
		'count' => 				'12', 
		'categories' => 		'', 
		'layout' => 			'standard', 
		'layout_mode' => 		'', 
		'columns' => 			'', 
		'metadata' => 			'', 
		'filter' => 			'', 
		'filter_cats_text' => 	'', 
		'pagination' => 		'pagination', 
		'more_text' => 			'', 
		'classes' => 			'' 
	);
}


// Posts Slider Shortcode Attributes Filter
add_filter('cmsmasters_posts_slider_atts_filter', 'cmsmasters_posts_slider_atts');

function cmsmasters_posts_slider_atts() {
	return array( 
		'shortcode_id' => 			'', 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_type' => 				'', 
		'blog_categories' => 		'', 
		'portfolio_categories' => 	'', 
		'columns' => 				'', 
		'count' => 					'', 
		'pause' => 					'', 
		'blog_metadata' => 			'', 
		'portfolio_metadata' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}


// Portfolio Shortcode Attributes Filter
add_filter('cmsmasters_portfolio_atts_filter', 'cmsmasters_portfolio_atts');

function cmsmasters_portfolio_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'orderby' => 			'date', 
		'order' => 				'DESC', 
		'count' => 				'12', 
		'categories' => 		'', 
		'layout' => 			'grid', 
		'puzzle_style' => 		'style_1', 
		'layout_mode' => 		'perfect', 
		'columns' => 			'4', 
		'metadata_grid' => 		'', 
		'metadata_puzzle' => 	'', 
		'gap' => 				'large', 
		'filter' => 			'', 
		'filter_cats_text' => 	'', 
		'sorting' => 			'', 
		'sorting_name_text' => 	'', 
		'sorting_date_text' => 	'', 
		'pagination' => 		'pagination', 
		'more_text' => 			'', 
		'classes' => 			'' 
	);
}

