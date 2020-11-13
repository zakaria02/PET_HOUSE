<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.2
 * 
 * Content Composer Profiles Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


$this->profiles_atts = array(
	'profile_id' => $shortcode_id,
	'profile_columns' => $columns, 
	'style' => $style 
);


$args = array( 
	'post_type' => 				'profile', 
	'orderby' => 				$orderby, 
	'order' => 					$order, 
	'posts_per_page' => 		$count, 
	'ignore_sticky_posts' => 	true 
);


if ($categories != '') {
	$cat_array = explode(",", $categories);
	
	$args['tax_query'] = array( 
		array( 
			'taxonomy' => 	'pl-categs', 
			'field' => 		'slug', 
			'terms' => 		$cat_array 
		)
	);
}


$query = new WP_Query($args);


$out = '';


if ($query->have_posts()) :
	
	$out .= '<div id="' . esc_attr($unique_id) . '" class="cmsmasters_profile ' . esc_attr($layout) . 
		(($classes != '') ? ' ' . esc_attr($classes) : '') . 
		'"' . 
		(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
	'>' . "\n";
	
	
	while ($query->have_posts()) : $query->the_post();
		
		if ($layout == 'vertical') {
			$out .= cmsmasters_composer_ob_load_template('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/post-type/profile/profile-vertical.php', $this->profiles_atts);
		} elseif ($layout == 'horizontal') {
			if ($style == 'style_1') {
				$out .= cmsmasters_composer_ob_load_template('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/post-type/profile/profile-horizontal-style-1.php', $this->profiles_atts);
			} elseif ($style == 'style_2') {
				$out .= cmsmasters_composer_ob_load_template('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/post-type/profile/profile-horizontal-style-2.php', $this->profiles_atts);
			}
		}
		
	endwhile;
	
	
	$out .= '</div>' . "\n";
	
endif;


wp_reset_postdata();


echo whiskers_return_content($out);

