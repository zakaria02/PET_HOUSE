<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.4
 * 
 * Gutenberg Module Colors Rules
 * Created by CMSMasters
 * 
 */


function whiskers_gutenberg_module_colors($custom_css = '', $is_editor = false) {
	$cmsmasters_option = whiskers_get_global_options();
	
	$editor = ($is_editor ? '.editor-styles-wrapper' : '');
	
	$custom_css .= "
/***************** Start Gutenberg Module Custom Colors Scheme Rules ******************/

	body {$editor} .wp-block-cover-image .wp-block-cover__inner-container, 
	body {$editor} .wp-block-cover .wp-block-cover__inner-container,
	body {$editor} .wp-block-cover .wp-block-cover-text:not(.has-text-color),
	body {$editor} .wp-block-cover .block-editor-block-list__block-edit {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_bg']) . "
	}

	{$editor} .wp-block-quote:before,
	.editor-styles-wrapper p.wp-block-subhead,
	.editor-styles-wrapper .wp-block-freeform blockquote:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_color']) . "
	}

	{$editor} .wp-block-quote,
	.editor-styles-wrapper .wp-block-freeform blockquote,
	.editor-styles-wrapper .wp-block-freeform blockquote p {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_heading']) . "
	}
	
	
	/* Start Table Colors */
	{$editor} .wp-block-table th,
	{$editor} .wp-block-table td,
	{$editor} .wp-block-table.is-style-stripes th,
	{$editor} .wp-block-table.is-style-stripes td,
	.editor-styles-wrapper .wp-block-freeform .mce-item-table tbody tr th,
	.editor-styles-wrapper .wp-block-freeform .mce-item-table tbody tr td,
	.editor-styles-wrapper .wp-block-freeform table tbody tr th,
	.editor-styles-wrapper .wp-block-freeform table tbody tr td {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_default_border']) . "
	}
	
	{$editor} .wp-block-table.is-style-stripes tr:nth-child(odd) th,
	{$editor} .wp-block-table.is-style-stripes tr:nth-child(odd) td,
	.wp-block-table.is-style-stripes tr:nth-child(odd) th,
	.wp-block-table.is-style-stripes tr:nth-child(odd) td {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_border']) . "
	}
	
	{$editor} .wp-block-table thead th,
	{$editor} .wp-block-table thead td,
	{$editor} .wp-block-freeform.mce-content-body > table thead th,
	{$editor} .wp-block-freeform.mce-content-body > table thead td {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_link']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_default_link']) . "
	}
	
	{$editor} .wp-block-table thead th,
	{$editor} .wp-block-table thead td,
	{$editor} .wp-block-freeform.mce-content-body > table thead th,
	{$editor} .wp-block-freeform.mce-content-body > table thead td {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_alternate']) . "
	}
	/* Finish Table Colors */

/***************** Finish Gutenberg Module Custom Colors Scheme Rules ******************/





/***************** Start Gutenberg Module General Colors Scheme Rules ******************/
	/* Start Main Content Font Color */
	html body .editor-styles-wrapper,
	html .editor-styles-wrapper select,
	html {$editor} .wp-block-image figcaption,
	html {$editor} .wp-block-audio figcaption,
	html {$editor} .wp-block-video figcaption,
	html {$editor} .wp-caption dd,
	html {$editor} .wp-block-latest-posts .wp-block-latest-posts__post-date,
	html {$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-date {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	html .editor-styles-wrapper a,
	html .editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce a,
	html .editor-styles-wrapper .wp-block-file .wp-block-file__textlink .editor-rich-text__tinymce {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	html .editor-styles-wrapper a:hover,
	html .editor-styles-wrapper a:active,
	html .editor-styles-wrapper h1 a:hover,
	html .editor-styles-wrapper h1 a:active,
	html .editor-styles-wrapper h2 a:hover,
	html .editor-styles-wrapper h2 a:active,
	html .editor-styles-wrapper h3 a:hover,
	html .editor-styles-wrapper h3 a:active,
	html .editor-styles-wrapper h4 a:hover,
	html .editor-styles-wrapper h4 a:active,
	html .editor-styles-wrapper h5 a:hover,
	html .editor-styles-wrapper h5 a:active,
	html .editor-styles-wrapper h6 a:hover,
	html .editor-styles-wrapper h6 a:active,
	html .editor-styles-wrapper div.wp-block .wp-block-freeform.block-library-rich-text__tinymce a:hover,
	html .editor-styles-wrapper div.wp-block .wp-block-freeform.block-library-rich-text__tinymce a:active {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_hover']) . "
	}
	
	html .editor-styles-wrapper select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_default_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	html .editor-post-title__block .editor-post-title__input,
	html .editor-styles-wrapper h1,
	html .editor-styles-wrapper h1 a,
	html .editor-styles-wrapper h2,
	html .editor-styles-wrapper h2 a,
	html .editor-styles-wrapper h3,
	html .editor-styles-wrapper h3 a,
	html .editor-styles-wrapper h4,
	html .editor-styles-wrapper h4 a,
	html .editor-styles-wrapper h5,
	html .editor-styles-wrapper h5 a,
	html .editor-styles-wrapper h6,
	html .editor-styles-wrapper h6 a,
	html {$editor} .wp-block-pullquote {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_heading']) . "
	}
	
	html {$editor} .wp-block-pullquote.is-style-solid-color {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_heading']) . "
	}
	
	html {$editor} .wp-block-pullquote {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_default_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	html {$editor} .wp-block-pullquote.is-style-solid-color {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_bg']) . "
	}
	
	html body .editor-styles-wrapper,
	html .editor-styles-wrapper select {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Borders Color */
	html {$editor} .wp-block-separator.is-style-dots:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_border']) . "
	}
	
	html {$editor} .wp-block-separator:not(.is-style-dots):before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_border']) . "
	}
	
	html .editor-styles-wrapper select,
	html .editor-styles-wrapper .wp-block-freeform hr {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_default_border']) . "
	}
	/* Finish Borders Color */
	
	
	/* Start Buttons Colors */
	html {$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background),
	html {$editor} .wp-block-file .wp-block-file__button,
	html {$editor} .wp-block-file a.wp-block-file__button {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_link']) . "
	}
	
	html {$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):hover,
	html {$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):focus,
	html {$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):active,
	html {$editor} .wp-block-file .wp-block-file__button:hover,
	html {$editor} .wp-block-file .wp-block-file__button:focus,
	html {$editor} .wp-block-file .wp-block-file__button:active,
	html {$editor} .wp-block-file a.wp-block-file__button:hover,
	html {$editor} .wp-block-file a.wp-block-file__button:focus,
	html {$editor} .wp-block-file a.wp-block-file__button:active {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_hover']) . "
	}
	
	html {$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background) {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_bg']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_default_link']) . "
	}
	
	html {$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):hover,
	html {$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):focus,
	html {$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):active {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_default_link']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_default_link']) . "
	}
	/* Finish Buttons Colors */
	

/***************** Finish Gutenberg Module General Colors Scheme Rules ******************/

";
	
	
	return $custom_css;
}

add_filter('whiskers_theme_colors_secondary_filter', 'whiskers_gutenberg_module_colors');

