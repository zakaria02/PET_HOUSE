<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.2
 * 
 * Template Functions for Profiles & Profile
 * Created by CMSMasters
 * 
 */


/* Get Profiles Hightlight Function */
function whiskers_get_profile_color($cmsmasters_id, $layout_type = 'horizontal', $style = 'style_1') {
	$cmsmasters_profile_color = get_post_meta($cmsmasters_id, 'cmsmasters_profile_color', true);
	
	$out = '';
	
	if ($cmsmasters_profile_color !='') {
		if ($layout_type == 'horizontal') {
			if ($style == 'style_1') {
				$out .= '#post-' . $cmsmasters_id . '.style_1 .cmsmasters_profile_img_wrap:before {' . 
					'background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, ' . $cmsmasters_profile_color . ' 100%);' . 
					'background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,' . $cmsmasters_profile_color . ' 100%);' . 
					'background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,' . $cmsmasters_profile_color . ' 100%);' . 
					'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00413d49", endColorstr="#413d49",GradientType=0 );' . 
				'}';
			} elseif ($style == 'style_2') {
				$out .= '#post-' . $cmsmasters_id . '.style_2 .profile_inner:before {' . 
					'background-color:' . $cmsmasters_profile_color . 
				'}';
			}
		} elseif ($layout_type == 'vertical') {
			$out .= '.cmsmasters_profile #post-' . $cmsmasters_id . '.profile .pl_subtitle {' . 
				'color:' . $cmsmasters_profile_color . ';' . 
			'}' . 
			'.cmsmasters_profile #post-' . $cmsmasters_id . '.profile:before {' . 
				'background-color:' . $cmsmasters_profile_color . ';' . 
			'}';
		}
		
		
		echo cmsmasters_theme_generate_front_css($out);
	}
}



/* Get Profiles Heading Function */
function whiskers_profile_heading($cmsmasters_id, $tag = 'h1', $sub_title = false, $tag_sub = 'h3', $show = true) { 
	$out = '<header class="cmsmasters_profile_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_profile_title entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>';
		
		
		if ($sub_title && $sub_title != '') {
			$out .= '<' . esc_html($tag_sub) . ' class="cmsmasters_profile_subtitle">' . 
				esc_html($sub_title) . 
			'</' . esc_html($tag_sub) . '>';
		}
		
	$out .= '</header>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Profiles Heading Without Link Function */
function whiskers_profile_title_nolink($cmsmasters_id, $tag = 'h1', $sub_title = false, $tag_sub = 'h5', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsmasters_profile_title entry-title">' . 
		esc_html(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id)) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($sub_title && $sub_title != '') {
		$out .= '<' . esc_html($tag_sub) . ' class="cmsmasters_profile_subtitle">' . 
			esc_html($sub_title) . 
		'</' . esc_html($tag_sub) . '>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Profiles Content/Excerpt Function */
function whiskers_profile_exc_cont($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_profile_content entry-content">' . "\n" . 
		wpautop(whiskers_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if (whiskers_excerpt(20, false) != '') {
		if ($show) {
			echo whiskers_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Profiles Category Function */
function whiskers_get_profile_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out .= '<span class="cmsmasters_profile_category">' . 
				whiskers_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = whiskers_get_global_options();
			
			
			if ($cmsmasters_option['whiskers' . '_profile_post_cat']) {
				$out .= '<div class="profile_details_item">' . 
					'<div class="profile_details_item_title">' . esc_html__('Categories', 'whiskers') . ':' . '</div>' . 
					'<div class="profile_details_item_desc">' . 
						'<span class="cmsmasters_profile_category">' . 
							whiskers_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
						'</span>' . 
					'</div>' . 
				'</div>';
			}
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Projects Like Function */
function whiskers_get_profile_likes($template_type = 'page', $show = true) {
	$out = '';
	
	
	if ($template_type == 'page') {
		$out = cmsmasters_like('cmsmasters_profile_likes');
	} elseif ($template_type == 'post') {
		$cmsmasters_option = whiskers_get_global_options();
		
		if ($cmsmasters_option['whiskers' . '_profile_post_like']) {
			$out = '<div class="profile_details_item">' . 
				'<div class="profile_details_item_title">' . esc_html__('Likes', 'whiskers') . ':' . '</div>' . 
				'<div class="profile_details_item_desc details_item_desc_like">' . 
					cmsmasters_like('cmsmasters_profile_likes') . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo whiskers_return_content($out);
	} else {
		return $out;
	}
}



/* Get Profiles Comments Function */
function whiskers_get_profile_comments($template_type = 'page', $show = true) {
	$out = '';
	
	
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = whiskers_get_comments('cmsmasters_profile_comments');
		} elseif ($template_type == 'post') {
			$cmsmasters_option = whiskers_get_global_options();
			
			if ($cmsmasters_option['whiskers' . '_profile_post_comment']) {
				$out .= '<div class="profile_details_item">' . 
					'<div class="profile_details_item_title">' . esc_html__('Comments', 'whiskers') . ':' . '</div>' . 
					'<div class="profile_details_item_desc details_item_desc_comments">' . 
						whiskers_get_comments('cmsmasters_profile_comments') . 
					'</div>' . 
				'</div>';
			}
		}
	}
	
	
	if ($show) {
		echo whiskers_return_content($out);
	} else {
		return $out;
	}
}



/* Get Profiles Features Function */
function whiskers_get_profile_features($features_position = 'features', $features = '', $features_title = false, $tag = 'h2', $show = true) {
	if (
		(
			!empty($features[0][0]) || 
			!empty($features[0][1])
		) || (
			!empty($features[1][0]) || 
			!empty($features[1][1])
		)
	) {
		$out = '';
		
		if ($features_position == 'features') {
			$out .= '<div class="profile_features entry-meta">' . 
				($features_title ? '<' . esc_html($tag) . ' class="profile_features_title">' . esc_html($features_title) . '</' . esc_html($tag) . '>' : '');
		}
		
		
		foreach ($features as $feature) {
			$out .= '<div class="profile_' . esc_attr($features_position) . '_item' . ($feature[0] == '' || $feature[1] == '' ? ' profile_' . esc_attr($features_position) . '_one_item' : '') . '">';
				
				if ($feature[0] != '') {
					$out .= '<div class="profile_' . esc_attr($features_position) . '_item_title">' . esc_html($feature[0]) . '</div>';
				}
				
				
				if ($feature[1] != '') {
					$feature_lists = explode("\n", $feature[1]);
					
					
					$out .= '<div class="profile_' . esc_attr($features_position) . '_item_desc">';
						
						foreach ($feature_lists as $feature_list) {
							$out .= trim($feature_list);
						}
						
					$out .= '</div>';
				}
				
			$out .= '</div>';
		}
		
		
		if ($features_position == 'features') {
			$out .= '</div>';
		}
		
		if ($show) {
			echo whiskers_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Profiles Social Icons Function */
function whiskers_profile_social_icons($social_icons, $shortcode_id = false, $title_box = false, $tag = 'h2', $show = true) {
	if ($social_icons != '') {
		$out = '<div class="profile_social_icons">';
			if ($title_box) {
				$out .= '<' . esc_html($tag) . ' class="profile_social_icons_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
			}
			
			$out .= '<ul class="profile_social_icons_list">';
				
				$social_icon_styles = '';
				
				$icons_counter = 0;
			
				foreach($social_icons as $social_icon) {
					$social_icon_item = explode('|', $social_icon);
					
					$icons_counter++;
					
					$uniqid = "{$shortcode_id}_{$icons_counter}";
					
					$social_icon_icon = trim($social_icon_item[0]);
					$social_icon_link = trim($social_icon_item[1]);
					$social_icon_title = trim($social_icon_item[2]);
					$social_icon_target = trim($social_icon_item[3]);
					$social_icon_color = (isset($social_icon_item[4]) ? trim($social_icon_item[4]) : '');
					$social_icon_hover = (isset($social_icon_item[5]) ? trim($social_icon_item[5]) : '');
					
					if (
						($social_icon_color != '') || 
						($social_icon_hover != '')
					) {
						$social_icon_color_class = ' cmsmasters_social_icon_color';
					} else {
						$social_icon_color_class = '';
					}
					
					$out .= '<li>' . 
						'<a href="' . esc_url($social_icon_link) . '" class="cmsmasters_social_icon cmsmasters_social_icon_' . $uniqid . ' ' . esc_attr($social_icon_icon) . $social_icon_color_class . '" title="' . esc_attr($social_icon_title) . '"' . (($social_icon_target == 'true') ? ' target="_blank"' : '') . '></a>' . 
					'</li>';
					
					
					if ($social_icon_color != '') {
						$social_icon_styles .= "
						
						#page .cmsmasters_profile .cmsmasters_social_icon_color.cmsmasters_social_icon_{$uniqid} {
							color:{$social_icon_color};
						}
						";
					}
					
					
					if ($social_icon_hover != '') {
						$social_icon_styles .= "
						
						#page .cmsmasters_profile .cmsmasters_social_icon_color.cmsmasters_social_icon_{$uniqid}:hover {
							color:{$social_icon_hover};
						}";
					}
				}
			
			$out .= '</ul>';
			
			
			if ($social_icon_styles != '') {
				echo cmsmasters_theme_generate_front_css($social_icon_styles);
			}
			
			
		$out .= '</div>';
		
		
		if ($show) {
			echo whiskers_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Opened Profile Social Icons Function */
function whiskers_profile_open_social_icons($social_icons, $profile_id = false, $title_box = false, $tag = 'h2', $show = true) {
	if ($social_icons != '') {
		$out = '<div class="profile_social_icons">';
		
		
		if ($title_box) {
			$out .= '<' . esc_html($tag) . ' class="profile_social_icons_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
		}
		
		
		$out .= '<ul class="profile_social_icons_list">';
		
		$icons_counter = 0;
		
		foreach($social_icons as $social_icon) {
			$social_icon_item = explode('|', $social_icon);
			
			$icons_counter++;
			
			$uniqid = "{$profile_id}_{$icons_counter}";
			
			$social_icon_icon = trim($social_icon_item[0]);
			$social_icon_link = trim($social_icon_item[1]);
			$social_icon_title = trim($social_icon_item[2]);
			$social_icon_target = trim($social_icon_item[3]);
			$social_icon_color = (isset($social_icon_item[4]) ? trim($social_icon_item[4]) : '');
			$social_icon_hover = (isset($social_icon_item[5]) ? trim($social_icon_item[5]) : '');
			
			
			if (
				($social_icon_color != '') || 
				($social_icon_hover != '')
			) {
				$social_icon_color_class = ' cmsmasters_social_icon_color';
			} else {
				$social_icon_color_class = '';
			}
			
			
			$out .= '<li>' . 
				'<a href="' . esc_url($social_icon_link) . '" class="cmsmasters_social_icon cmsmasters_social_icon_' . $uniqid . ' ' . esc_attr($social_icon_icon) . $social_icon_color_class . '" title="' . esc_attr($social_icon_title) . '"' . (($social_icon_target == 'true') ? ' target="_blank"' : '') . '></a>' . 
			'</li>';
		}
		
		
		$out .= '</ul>' . 
		'</div>';
		
		
		if ($show) {
			echo whiskers_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Opened Profile Social Icons Styles Function */
function whiskers_profile_open_style_social_icons() {
	$profile_id = get_the_ID();
	
	$social_icons = get_post_meta($profile_id, 'cmsmasters_profile_social', true);
	
	
	if ($social_icons != '') {
		$social_icon_styles = '';
		
		$icons_counter = 0;
		
		
		foreach ($social_icons as $social_icon) {
			$social_icon_item = explode('|', $social_icon);
			
			$icons_counter++;
			
			$uniqid = "{$profile_id}_{$icons_counter}";
			
			$social_icon_color = (isset($social_icon_item[4]) ? trim($social_icon_item[4]) : '');
			$social_icon_hover = (isset($social_icon_item[5]) ? trim($social_icon_item[5]) : '');
			
			
			if ($social_icon_color != '') {
				$social_icon_styles .= "
				
				#page .cmsmasters_open_profile .cmsmasters_social_icon_color.cmsmasters_social_icon_{$uniqid} {
					color:{$social_icon_color};
				}
				";
			}
			
			
			if ($social_icon_hover != '') {
				$social_icon_styles .= "
				
				#page .cmsmasters_open_profile .cmsmasters_social_icon_color.cmsmasters_social_icon_{$uniqid}:hover {
					color:{$social_icon_hover};
				}";
			}
		}
		
		
		if ($social_icon_styles != '') {
			wp_add_inline_style('whiskers-style', $social_icon_styles);
		}
	}
}

add_action('wp_enqueue_scripts', 'whiskers_profile_open_style_social_icons');

