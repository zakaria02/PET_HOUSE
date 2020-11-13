<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.3
 * 
 * Template Functions for Portfolio & Project
 * Created by CMSMasters
 * 
 */


/* Get Projects Hightlight Function */
function whiskers_get_projects_color($cmsmasters_id) {
	$cmsmasters_project_color = get_post_meta($cmsmasters_id, 'cmsmasters_project_color', true);
	
	$cmsmasters_project_title_color = get_post_meta($cmsmasters_id, 'cmsmasters_project_title_color', true);
	
	$cmsmasters_project_category_color = get_post_meta($cmsmasters_id, 'cmsmasters_project_category_color', true);
	
	$out = '';
	
	if (
		($cmsmasters_project_color !='') || 
		($cmsmasters_project_title_color != '') || 
		($cmsmasters_project_category_color != '')
	) {
		if ($cmsmasters_project_color !='') {			
			$out .= '.cmsmasters_portfolio_puzzle_style_1 #post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .project_inner,' . 
			'.cmsmasters_portfolio_puzzle_style_2 #post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .project_inner,' . 
			'#post-' . $cmsmasters_id . ' .cmsmasters_single_slider_cont {' . 
				'background-color:' . $cmsmasters_project_color . ';' . 
			'}';
		}
		
		if ($cmsmasters_project_title_color !='') {
			$out .= '#post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_header,' . 
			'#post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_header a,' . 
			'#post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_footer a,' . 
			'#post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_footer a:before,' . 
			'#post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_footer a:hover,' . 
			'#post-' . $cmsmasters_id . ' .cmsmasters_single_slider_cont .cmsmasters_single_slider_item_title,' . 
			'#post-' . $cmsmasters_id . ' .cmsmasters_single_slider_cont .cmsmasters_single_slider_item_title a {' . 
				'color:' . $cmsmasters_project_title_color . ';' . 
			'}';
		}
		
		if ($cmsmasters_project_category_color !='') {
			$out .= '#post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_cont_info,' . 
			'#post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_cont_icon,' . 
			'#post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_cont_info a,' . 
			'#post-' . $cmsmasters_id . ' .cmsmasters_single_slider_cont .cmsmasters_project_category a {' . 
				'color:' . $cmsmasters_project_category_color . ';' . 
			'}';
			
			$out .= '.cmsmasters_portfolio_puzzle_style_1 #post-' . $cmsmasters_id . '.cmsmasters_project_puzzle .cmsmasters_project_line,' . 
			'.cmsmasters_single_slider.cmsmasters_type_project #post-' . $cmsmasters_id . ' .cmsmasters_project_line {' . 
				'background-color:' . $cmsmasters_project_category_color . ';' . 
			'}';
		}		

		echo '<style>' . ($out) . '</style>';
	}
}



/* Get Projects Heading Function */
function whiskers_project_heading($cmsmasters_id, $tag = 'h1', $link_redirect = false, $link_url = false, $link_target = false, $show = true) { 
	$out = '<header class="cmsmasters_project_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_project_title entry-title">' . 
			'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink())) . '"' . ($link_target == 'true' ? ' target="_blank"' : '') . '>' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Projects Heading Without Link Function */
function whiskers_project_title_nolink($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsmasters_project_title entry-title">' . 
		esc_html(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id)) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Projects Content/Excerpt Function */
function whiskers_project_exc_cont($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_project_content entry-content">' . "\n" . 
		wpautop(whiskers_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if ($show) {
		echo whiskers_return_content($out);
	} else {
		return $out;
	}
}



/* Check Projects Content/Excerpt Not Empty Function */
function whiskers_project_check_exc_cont() {
	$exc = whiskers_project_exc_cont(false);
	
	$no_tags_exc = strip_tags($exc);
	
	$trim_exc = trim($no_tags_exc);
	
	
	if ($trim_exc != '') {
		return true;
	} else {
		return false;
	}
}



/* Get Projects Category Function */
function whiskers_get_project_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_project_category">' . 
				whiskers_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = whiskers_get_global_options();
			
			
			if ($cmsmasters_option['whiskers' . '_portfolio_project_cat']) {
				$out .= '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Categories', 'whiskers') . ':' . '</div>' . 
					'<div class="project_details_item_desc">' . 
						'<span class="cmsmasters_project_category">' . 
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
function whiskers_get_project_likes($template_type = 'page', $show = true) {
	$out = '';
	
	
	if ($template_type == 'page') {
		$out = cmsmasters_like('cmsmasters_project_likes');
	} elseif ($template_type == 'post') {
		$cmsmasters_option = whiskers_get_global_options();
		
		if ($cmsmasters_option['whiskers' . '_portfolio_project_like']) {
			$out = '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Likes', 'whiskers') . ':' . '</div>' . 
				'<div class="project_details_item_desc details_item_desc_like">' . 
					cmsmasters_like('cmsmasters_project_likes') . 
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



/* Get Projects Comments Function */
function whiskers_get_project_comments($template_type = 'page', $show = true) {
	$out = '';
	
	
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = whiskers_get_comments('cmsmasters_project_comments');
		} elseif ($template_type == 'post') {
			$cmsmasters_option = whiskers_get_global_options();
			
			if ($cmsmasters_option['whiskers' . '_portfolio_project_comment'] && comments_open()) {
				$out = '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Comments', 'whiskers') . ':' . '</div>' . 
					'<div class="project_details_item_desc details_item_desc_comments">' . 
						whiskers_get_comments('cmsmasters_project_comments') . 
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



/* Get Projects Date Function */
function whiskers_get_project_date($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<abbr class="published cmsmasters_project_date" title="' . esc_attr(get_the_date()) . '">' . 
			esc_html(get_the_date()) . 
		'</abbr>' . 
		'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			esc_html(get_the_modified_date()) . 
		'</abbr>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = whiskers_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option['whiskers' . '_portfolio_project_date']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Date', 'whiskers') . ':' . '</div>' . 
				'<div class="project_details_item_desc">' . 
					'<abbr class="published cmsmasters_project_date" title="' . esc_attr(get_the_date()) . '">' . 
						esc_html(get_the_date()) . 
					'</abbr>' . 
					'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
						esc_html(get_the_modified_date()) . 
					'</abbr>' . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Projects Author Function */
function whiskers_get_project_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_project_author">' . 
			esc_html__('By', 'whiskers') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Pets by', 'whiskers') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = whiskers_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option['whiskers' . '_portfolio_project_author']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Author', 'whiskers') . ':' . '</div>' . 
				'<div class="project_details_item_desc">' . 
					'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Pets by', 'whiskers') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Projects Tags Function */
function whiskers_get_project_tags($cmsmasters_id, $taxonomy, $show = true) {
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		$cmsmasters_option = whiskers_get_global_options();
		$out = '';
		
		if ($cmsmasters_option['whiskers' . '_portfolio_project_tag']) {
			$out = '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Tags', 'whiskers') . ':' . '</div>' . 
				'<div class="project_details_item_desc">' . 
					'<span class="cmsmasters_project_tags">' . 
						get_the_term_list($cmsmasters_id, $taxonomy, '', ', ', '') . 
					'</span>' . 
				'</div>' . 
			'</div>';
		}
		
		
		if ($show) {
			echo wp_kses_post($out);
		} else {
			return wp_kses_post($out);
		}
	}
}



/* Get Projects Features Function */
function whiskers_get_project_features($features_position = 'features', $features = '', $features_title = false, $tag = 'h2', $show = true) {
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
			$out .= '<div class="project_features entry-meta">' . 
				($features_title ? '<' . esc_html($tag) . ' class="project_features_title">' . esc_html($features_title) . '</' . esc_html($tag) . '>' : '');
		}
		
		
		foreach ($features as $feature) {
			$out .= '<div class="project_' . esc_attr($features_position) . '_item' . ($feature[0] == '' || $feature[1] == '' ? ' project_' . esc_attr($features_position) . '_one_item' : '') . '">';
				
				if ($feature[0] != '') {
					$out .= '<div class="project_' . esc_attr($features_position) . '_item_title">' . esc_html($feature[0]) . '</div>';
				}
				
				
				if ($feature[1] != '') {
					$feature_lists = explode("\n", $feature[1]);
					
					
					$out .= '<div class="project_' . esc_attr($features_position) . '_item_desc">';
						
						foreach ($feature_lists as $feature_list) {
							if( $feature_list != '') {
								$out .= '<abbr class="project_' . esc_attr($features_position) . '_item_desc_element">' . trim($feature_list) . '</abbr>';
							}							
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



/* Get Projects Link Function */
function whiskers_project_link($link_text, $link_url, $link_target, $show = true) {
	$cmsmasters_option = whiskers_get_global_options();
	$out = '';
	
	if ( 
		$cmsmasters_option['whiskers' . '_portfolio_project_link'] && 
		$link_text != '' && 
		$link_url != '' 
	) {
		$out = '<div class="project_details_item">' . 
			'<div class="project_details_item_title">' . esc_html__('Project Link', 'whiskers') . ':' . '</div>' . 
			'<div class="project_details_item_desc">' . 
				'<a href="' . esc_url($link_url) . '" title="' . esc_attr($link_text) . '"' . (($link_target == 'true') ? ' target="_blank"' : '') . '>' . esc_html($link_text) . '</a>' . 
			'</div>' . 
		'</div>';
	}
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Opened Project Sidebar Details Styles Function */
function whiskers_single_project_styles() {
	$cmsmasters_id = get_the_ID();

	$cmsmasters_single_project_style = '';

	if (get_post_type($cmsmasters_id) == 'project') {
		$cmsmasters_project_color = get_post_meta($cmsmasters_id, 'cmsmasters_project_color', true);	
		$cmsmasters_project_details_color = get_post_meta($cmsmasters_id, 'cmsmasters_project_details_color', true);		

		if ($cmsmasters_project_color !='') {
			$cmsmasters_single_project_style .= "#post-{$cmsmasters_id}.cmsmasters_open_project .project_sidebar .project_details, 
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_sidebar .project_features,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_sidebar .share_posts {
				background-color:{$cmsmasters_project_color};
			}";
		}
		if ($cmsmasters_project_details_color != '') {
			$border_color = 'rgba(' . cmsmasters_color2rgb($cmsmasters_project_details_color) . ', .5);';

			$cmsmasters_single_project_style .= "#post-{$cmsmasters_id}.cmsmasters_open_project .project_features_title,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_details_title,
			#post-{$cmsmasters_id}.cmsmasters_open_project .share_posts .share_posts_title,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_details_item_title,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_features_item_title,
			#post-{$cmsmasters_id}.cmsmasters_open_project .cmsmasters_project_likes a:before,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_details_item_desc,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_features_item_desc,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_details_item_desc > *,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_features_item_desc > *,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_details_item_desc a,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_features_item_desc a,
			#post-{$cmsmasters_id}.cmsmasters_open_project .share_posts a {
				color:{$cmsmasters_project_details_color};
			}
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_details_item,
			#post-{$cmsmasters_id}.cmsmasters_open_project .project_features_item {
				border-color:${border_color};
			}";		
		}				
	}	

	wp_add_inline_style('whiskers-style', $cmsmasters_single_project_style);
}

add_action('wp_enqueue_scripts', 'whiskers_single_project_styles');

