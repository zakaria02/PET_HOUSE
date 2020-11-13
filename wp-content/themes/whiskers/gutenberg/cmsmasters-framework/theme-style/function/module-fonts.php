<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.4
 * 
 * Gutenberg Module Fonts Rules
 * Created by CMSMasters
 * 
 */


function whiskers_gutenberg_module_fonts($custom_css = '', $is_editor = false) {
	$cmsmasters_option = whiskers_get_global_options();
	
	$editor = ($is_editor ? '.editor-styles-wrapper' : '');
	
	$custom_css .= "
/***************** Start Gutenberg Module Custom Font Styles ******************/

	/* Start H2 Font */
	html .post-type-post .editor-post-title__block .editor-post-title__input {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h3_font_google_font']) . $cmsmasters_option['whiskers' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H2 Font */

	/* Start H6 Font */
	html {$editor} .wp-block-table thead th,
	html {$editor} .wp-block-table thead td,
	html {$editor} .wp-block-freeform.mce-content-body > table thead th,
	html {$editor} .wp-block-freeform.mce-content-body > table thead td {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h6_font_google_font']) . $cmsmasters_option['whiskers' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */

	html {$editor} .wp-block-table thead th,
	html {$editor} .wp-block-table thead td,
	html {$editor} .wp-block-freeform.mce-content-body > table thead th,
	html {$editor} .wp-block-freeform.mce-content-body > table thead td {
		font-size:" . $cmsmasters_option['whiskers' . '_content_font_font_size'] . "px;
	}

	html {$editor} .wp-block-table tbody th,
	html {$editor} .wp-block-table tbody td,
	html {$editor} .wp-block-table tbody th a,
	html {$editor} .wp-block-table tbody td a,
	html {$editor} .wp-block-freeform.mce-content-body > table tbody th,
	html {$editor} .wp-block-freeform.mce-content-body > table tbody td,
	html {$editor} .wp-block-freeform.mce-content-body > table tbody th a,
	html {$editor} .wp-block-freeform.mce-content-body > table tbody td a,
	html {$editor} .wp-block-table .wp-block-table__cell-content {
		font-size:" . $cmsmasters_option['whiskers' . '_h6_font_font_size'] . "px;
	}

/***************** Finish Gutenberg Module Custom Font Styles ******************/





/***************** Start Gutenberg Module General Font Styles ******************/

	/* Start Content Font */
	html body .block-editor-block-list__block[data-type='core/paragraph'] p
	html body .editor-styles-wrapper,
	html body .editor-styles-wrapper p,
	html {$editor} p.has-drop-cap:not(:focus)::first-letter,
	html {$editor} .wp-block-image figcaption,
	html {$editor} .wp-block-gallery .blocks-gallery-image figcaption,
	html {$editor} .wp-block-gallery .blocks-gallery-item figcaption,
	html {$editor} .wp-block-gallery .gallery-item .gallery-caption,
	html {$editor} .wp-block-audio figcaption,
	html {$editor} .wp-block-video figcaption,
	html {$editor} .wp-caption dd,
	html {$editor} div.wp-block ul,
	html {$editor} div.wp-block ul > li,
	html {$editor} div.wp-block ol,
	html {$editor} div.wp-block ol > li,
	html {$editor} .wp-block-latest-comments.has-avatars .wp-block-latest-comments__comment-meta, 
	html {$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-meta,
	html {$editor} .wp-block-latest-comments.has-avatars .wp-block-latest-comments__comment-excerpt p, 
	html {$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-excerpt p,
	html {$editor} .wp-block-freeform,
	html {$editor} .wp-block-freeform p,
	html {$editor} .wp-block-freeform.mce-content-body {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_content_font_google_font']) . $cmsmasters_option['whiskers' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_content_font_font_style'] . ";
	}
	
	{$editor} p.has-drop-cap:not(:focus)::first-letter {
		font-size:3em;
		line-height:1.2em;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	html .editor-styles-wrapper a,
	html .editor-styles-wrapper .wp-block-file .wp-block-file__textlink .editor-rich-text__tinymce {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_link_font_google_font']) . $cmsmasters_option['whiskers' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_link_font_text_decoration'] . ";
	}
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	html {$editor} .wp-block-heading h1,
	html {$editor} .wp-block-heading h1.editor-rich-text__tinymce,
	html .editor-styles-wrapper h1,
	html .editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h1,
	html .editor-post-title__block .editor-post-title__input {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h1_font_google_font']) . $cmsmasters_option['whiskers' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	html {$editor} .wp-block-heading h2,
	html {$editor} .wp-block-heading h2.editor-rich-text__tinymce,
	html .editor-styles-wrapper h2,
	html .editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h2,
	html {$editor} h2.editor-rich-text__tinymce,
	html {$editor} .wp-block-cover h2, 
	html {$editor} .wp-block-cover .wp-block-cover-text, 
	html {$editor} .wp-block-cover .wp-block-cover-image-text, 
	html {$editor} .wp-block-cover-image h2, 
	html {$editor} .wp-block-cover-image .wp-block-cover-text, 
	html {$editor} .wp-block-cover-image .wp-block-cover-image-text,
	html {$editor} .wp-block-cover__inner-container p,
	html .wp-block-cover__inner-container p {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h2_font_google_font']) . $cmsmasters_option['whiskers' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	html .editor-styles-wrapper h3,
	html .editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h3 {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h3_font_google_font']) . $cmsmasters_option['whiskers' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	html {$editor} .wp-block-heading h4.editor-rich-text__tinymce,
	html {$editor} .wp-block-heading h4,
	html {$editor} .wp-block-heading h3,
	html {$editor} .wp-block-heading h3.editor-rich-text__tinymce,
	html .editor-styles-wrapper h4,
	html .editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h4 {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h4_font_google_font']) . $cmsmasters_option['whiskers' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	html {$editor} .wp-block-heading h5,
	html {$editor} .wp-block-heading h5.editor-rich-text__tinymce,
	html .editor-styles-wrapper h5,
	html .editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h5 {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h5_font_google_font']) . $cmsmasters_option['whiskers' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	html {$editor} .wp-block-heading h6,
	html {$editor} .wp-block-heading h6.editor-rich-text__tinymce,
	html .editor-styles-wrapper h6,
	html .editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h6 {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h6_font_google_font']) . $cmsmasters_option['whiskers' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	html {$editor} .wp-block-button .wp-block-button__link,
	html {$editor} .wp-block-file .wp-block-file__button {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_button_font_google_font']) . $cmsmasters_option['whiskers' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_button_font_text_transform'] . ";
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	html {$editor} small,
	html {$editor} .wp-block-latest-posts .wp-block-latest-posts__post-date,
	html {$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-date {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_small_font_google_font']) . $cmsmasters_option['whiskers' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_small_font_text_transform'] . ";
	}
	/* Finish Small Text Font */
	
	
	/* Start Text Fields Font */
	html .editor-styles-wrapper select,
	html .editor-styles-wrapper option {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_input_font_google_font']) . $cmsmasters_option['whiskers' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_input_font_font_style'] . ";
	}
	
	html .editor-styles-wrapper select {
		line-height:1em;
	}
	/* Finish Text Fields Font */
	
	
	/* Start Blockquote Font */
	html {$editor} .wp-block-quote,
	html {$editor} .wp-block-quote.is-large,
	html {$editor} .wp-block-quote.is-style-large,
	html {$editor} .wp-block-pullquote,
	html .editor-styles-wrapper .wp-block-freeform blockquote,
	html .editor-styles-wrapper .wp-block-freeform blockquote p {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_quote_font_google_font']) . $cmsmasters_option['whiskers' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_quote_font_font_style'] . ";
	}
	
	html {$editor} .wp-block-quote.is-large,
	html {$editor} .wp-block-quote.is-style-large {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_quote_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_quote_font_line_height'] + 4) . "px;
	}
	
	html {$editor} .wp-block-pullquote {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_quote_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_quote_font_line_height'] - 4) . "px;
	}
	
	html .editor-styles-wrapper q {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_quote_font_google_font']) . $cmsmasters_option['whiskers' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['whiskers' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Gutenberg Module General Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('whiskers_theme_fonts_filter', 'whiskers_gutenberg_module_fonts');

