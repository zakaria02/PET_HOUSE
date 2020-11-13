<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.2
 * 
 * Content Composer Counter Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = $shortcode_id;


$this->counters_atts = array(
	'style_counters' => '', 
	'counters_count' => '' 
);


if ($count == 5) {
	$this->counters_atts['counters_count'] = ' one_fifth';
} elseif ($count == 4) {
	$this->counters_atts['counters_count'] = ' one_fourth';
} elseif ($count == 3) {
	$this->counters_atts['counters_count'] = ' one_third';
} elseif ($count == 2) {
	$this->counters_atts['counters_count'] = ' one_half';
} else {
	$this->counters_atts['counters_count'] = ' one_first';
}


$this->counters_atts['style_counters'] = "\n" . '#cmsmasters_counters_' . esc_attr($unique_id) . ' .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner, ' . "\n" . 
'#cmsmasters_counters_' . esc_attr($unique_id) . ' .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner { ' . 
	"\n\t" . 'padding-' . (($type == 'horizontal') ? ((is_rtl()) ? 'right' : 'left') : 'top') . ':' . esc_attr((int) (($type == 'horizontal') ? $icon_space + 20 : $icon_space + 10)) . 'px; ' . 
"\n" . '} ' . "\n\n" . 
'#cmsmasters_counters_' . esc_attr($unique_id) . '.counters_type_horizontal .cmsmasters_counter.counter_has_icon .cmsmasters_counter_subtitle, ' . "\n" . 
'#cmsmasters_counters_' . esc_attr($unique_id) . '.counters_type_horizontal .cmsmasters_counter.counter_has_image .cmsmasters_counter_subtitle { ' . 
	"\n\t" . 'padding-' . ((is_rtl()) ? 'right' : 'left') . ':' . esc_attr(((int) $icon_space + 20)) . 'px; ' . 
"\n" . '} ' . "\n\n" . 
'#cmsmasters_counters_' . esc_attr($unique_id) . '.counters_type_vertical .cmsmasters_counter .cmsmasters_counter_inner:before { ' . 
	"\n\t" . 'margin-' . ((is_rtl()) ? 'right' : 'left') . ':-' . esc_attr(((int) $icon_space / 2)) . 'px; ' . 
"\n" . '} ' . "\n\n" . 
'#cmsmasters_counters_' . esc_attr($unique_id) . ' .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap { ' . 
	"\n\t" . 'font-size:' . esc_attr($value_font_size) . 'px; ' . 
	"\n\t" . 'line-height:' . esc_attr($value_line_height) . 'px; ' . 
"\n" . '} ' . "\n\n" . 
'#cmsmasters_counters_' . esc_attr($unique_id) . ' .cmsmasters_counter .cmsmasters_counter_inner:before { ' . 
	"\n\t" . 'font-size:' . esc_attr($icon_size) . 'px; ' . 
	"\n\t" . 'line-height:' . esc_attr(((int) $icon_space - ((int) $icon_border_width * 2))) . 'px; ' . 
	"\n\t" . 'width:' . esc_attr($icon_space) . 'px; ' . 
	"\n\t" . 'height:' . esc_attr($icon_space) . 'px; ' . 
	"\n\t" . 'border-width:' . esc_attr($icon_border_width) . 'px; ' . 
	(((int) $icon_border_radius > 0) ? "\n\t" . '-webkit-border-radius:' . esc_attr($icon_border_radius) . '; ' : '') . 
	(((int) $icon_border_radius > 0) ? "\n\t" . 'border-radius:' . esc_attr($icon_border_radius) . '; ' : '') . 
"\n" . '} ' . "\n\n";


$counters = do_shortcode($content);


$shortcode_styles = (($this->counters_atts['style_counters'] != '') ? $this->counters_atts['style_counters'] : '');


$out = $this->cmsmasters_generate_front_css($shortcode_styles);


$out .= '<div id="cmsmasters_counters_' . esc_attr($unique_id) . '" class="cmsmasters_counters counters_type_' . esc_attr($type) . 
(($classes != '') ? ' ' . esc_attr($classes) : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
'>' . 
	$counters . 
'</div>';


echo whiskers_return_content($out);

