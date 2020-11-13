<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.2
 * 
 * Content Composer Tab Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = $shortcode_id;


$this->tabs_atts['tab_counter']++;

if ($custom_colors == 'true') { 
	$this->tabs_atts['style_tab'] .= "\n" . '#cmsmasters_tabs_list_item_' . esc_attr($unique_id) . ' a:hover,' . 
	'#cmsmasters_tabs_list_item_' . esc_attr($unique_id) . '.current_tab a,' . 
	'#cmsmasters_tabs_list_item_' . esc_attr($unique_id) . ' a:hover:before,' . 
	'#cmsmasters_tabs_list_item_' . esc_attr($unique_id) . '.current_tab a:before { ' . 
		"\n\t" . cmsmasters_color_css('color', $bg_color) . 
	"\n" . '} ' . "\n";
	
	$this->tabs_atts['style_tab'] .= "\n" . '#cmsmasters_tabs_list_item_' . esc_attr($unique_id) . '.current_tab:before { ' . 
		"\n\t" . cmsmasters_color_css('background-color', $bg_color) . 
	"\n" . '} ' . "\n";
}


$this->tabs_atts['out_tabs'] .= '<li id="cmsmasters_tabs_list_item_' . esc_attr($unique_id) . '" class="cmsmasters_tabs_list_item' . 
(($this->tabs_atts['tab_active'] == $this->tabs_atts['tab_counter']) ? ' current_tab' : '') . 
'">' . "\n" . 
	'<a href="#"' . 
	(($icon != '') ? ' class="' . esc_attr($icon) . '"' : '') . 
	'>' . "\n" . 
		'<span>' . esc_html($title) . '</span>' . "\n" . 
	'</a>' . "\n" . 
'</li>';


$out = '<div id="cmsmasters_tab_' . esc_attr($unique_id) . '" class="cmsmasters_tab' . 
(($this->tabs_atts['tab_active'] == $this->tabs_atts['tab_counter']) ? ' active_tab' : '') . 
(($classes != '') ? ' ' . esc_attr($classes) : '') . 
'">' . "\n" . 
	cmsmasters_divpdel('<div class="cmsmasters_tab_inner">' . "\n" . 
		do_shortcode(wpautop($content)) . 
	'</div>' . "\n") . 
'</div>';

echo whiskers_return_content($out);

