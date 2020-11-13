<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.1
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function whiskers_theme_colors_primary() {
	$cmsmasters_option = whiskers_get_global_options();
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.1
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}blockquote:before,
	{$rule}.cmsmasters_likes a,
	{$rule}.cmsmasters_likes a:hover,
	{$rule}.cmsmasters_comments a,
	{$rule}.cmsmasters_comments a:hover,
	{$rule}.cmsmasters_pricing_table .pricing_title,
	{$rule}.share_posts .share_posts_title,
	{$rule}.share_posts .share_posts_title,
	{$rule}.cmsmasters_open_profile .profile_details_item_desc a,
	{$rule}.cmsmasters_open_profile .profile_features_item_desc a,
	{$rule}.cmsmasters_open_profile .profile_details_item_desc .cmsmasters_likes a:hover,
	{$rule}.cmsmasters_comment_item .comment-edit-link,
	{$rule}.cmsmasters_comment_item .comment-reply-link,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers,
	{$rule}.widget_categories ul li > a,
	{$rule}.widget_archive ul li > a,
	{$rule}.widget_meta ul li > a,
	{$rule}.widget_recent_comments ul li > a,
	{$rule}.widget_recent_entries ul li > a,
	{$rule}.widget_categories ul li a:before,
	{$rule}.widget_archive ul li a:before,
	{$rule}.widget_meta ul li a:before,
	{$rule}.widget_custom_contact_info_entries a,
	{$rule}.widget_tag_cloud a,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont_info > span a:hover,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_cont_info > span a:hover,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_read_more:hover,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_cont_info > span a {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.color_2,
	{$rule}.cmsmasters_wrap_pagination ul li span.page-numbers.current,
	{$rule}.cmsmasters_button:hover, 
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover,
	{$rule}.cmsmasters_likes a:hover:before,
	{$rule}.cmsmasters_likes a.active:before,
	{$rule}.cmsmasters_comments a:hover:before,
	{$rule}.cmsmasters_social_icon:hover,
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}.cmsmasters_icon_wrap a .cmsmasters_simple_icon,
	{$rule}.cmsmasters_sitemap_wrap li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.footer_inner .social_wrap .social_wrap_inner a:hover,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap > span:not(.cmsmasters_period),
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_subtitle_wrap .cmsmasters_quote_subtitle,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_subtitle_wrap .cmsmasters_quote_subtitle,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item > a:hover,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item > a:before,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a:hover,
	{$rule}.cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_twitter_wrap .twr_icon,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	{$rule}.share_posts a:hover,
	{$rule}.cmsmasters_post_default a > .cmsmasters_post_date,
	{$rule}.cmsmasters_open_profile .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	{$rule}.cmsmasters_open_profile .profile_details_item_desc a:hover,
	{$rule}.cmsmasters_open_profile .profile_features_item_desc a:hover,
	{$rule}.post_nav > span a:hover,
	{$rule}.cmsmasters_comment_item .comment-edit-link:hover,
	{$rule}.cmsmasters_comment_item .comment-reply-link:hover,
	{$rule}.comments_nav > span > a:hover,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers:hover,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers.prev:hover,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers.next:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover:before,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current:before,
	{$rule}.cmsmasters_portfolio_puzzle_style_3 .cmsmasters_project_puzzle .cmsmasters_project_header,
	{$rule}.cmsmasters_portfolio_puzzle_style_3 .cmsmasters_project_puzzle .cmsmasters_project_header a,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type > span:not([class]),
	{$rule}.widget_pages ul li > a:hover,
	{$rule}.widget_pages ul li.current_page_item > a,
	{$rule}.widget_categories ul li > a:hover,
	{$rule}.widget_archive ul li > a:hover,
	{$rule}.widget_meta ul li > a:hover,
	{$rule}#wp-calendar td#today,
	{$rule}.custom_list li a:hover,
	{$rule}.widget_recent_comments ul li > a:hover,
	{$rule}.widget_recent_entries ul li > a:hover,
	{$rule}.widget_custom_contact_info_entries a:hover,
	{$rule}.widget_custom_contact_info_entries > div:before,
	{$rule}.widget_custom_contact_info_entries > span:before,
	{$rule}.widget_nav_menu .menu li a:hover,
	{$rule}.widget_nav_menu .menu li.current-menu-item > a,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a:hover,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a:hover,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project .cmsmasters_slider_project_cont_info,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project .cmsmasters_slider_project_cont_info,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
	{$rule}.widget_recent_comments ul li a:not([class]):hover,
	{$rule}.widget_tag_cloud a:hover,
	{$rule}.widget_custom_twitter_entries .tweet_time:before,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a:hover,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li a:not(.comment_author):hover,
	{$rule}.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_meta_info a:hover:before,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_meta_info a.active:before,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_meta_info a:hover:before,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_meta_info a.active:before,
	{$rule}.cmsmasters_open_post .cmsmasters_post_meta_info a:hover:before,
	{$rule}.cmsmasters_open_post .cmsmasters_post_meta_info a.active:before,
	{$rule}.cmsmasters_post_default .cmsmasters_post_meta_info a:hover:before,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_meta_info a:hover:before,
	{$rule}.cmsmasters_post_default .cmsmasters_post_meta_info a.active:before,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_meta_info a.active:before,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_footer a:hover:before,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_footer a.active:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_image > span:before,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_image > span:before {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . ", .7);
	}
	
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.cmsmasters_button,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}table tr th,
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after,
	{$rule}table thead tr th,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap:before,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_info_wrap,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item:before,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title:hover .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper,
	{$rule}.cmsmasters_post_timeline .cmsmasters_timeline_margin:hover + .cmsmasters_post_timeline_circle,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_inner,
	{$rule}.cmsmasters_portfolio_puzzle_style_1 .cmsmasters_project_puzzle .project_inner,
	{$rule}.cmsmasters_portfolio_puzzle_style_2 .cmsmasters_project_puzzle .project_inner,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .cmsmasters_single_slider_cont,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a:after,
	{$rule}.cmsmasters_open_project .project_sidebar .project_details,
	{$rule}.cmsmasters_open_project .project_sidebar .project_features,
	{$rule}.cmsmasters_open_project .project_sidebar .share_posts {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_header_search_form {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . ", .95);
	}
	
	{$rule}table:not([class]) thead th, 
	{$rule}table:not([class]) thead td, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_button,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		{$rule}.cmsmasters_post_puzzle:hover .cmsmasters_post_cont .puzzle_post_content_wrapper:before,
		{$rule}.cmsmasters_post_puzzle:nth-child(even):hover .cmsmasters_post_cont .puzzle_post_content_wrapper:before {
			border-bottom-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . ", 1) !important;
		}
	}
	
	{$rule}.cmsmasters_profile_horizontal.style_1 .cmsmasters_profile_img_wrap:before {
		background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . ", 1) 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . ", 1) 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . ", 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00413d49', endColorstr='#413d49',GradientType=0 ); /* IE6-9 */
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	{$rule}a.cmsmasters_cat_color:hover,
	{$rule}.cmsmasters_social_icon,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover,
	{$rule}.cmsmasters_sitemap_wrap li > a,
	{$rule}.cmsmasters_icon_wrap a:hover .cmsmasters_simple_icon,
	{$rule}.footer_inner .social_wrap .social_wrap_inner a,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_img_wrap > span,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_img_wrap > span,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_post_author:before,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont_info .cmsmasters_post_author:before,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont_info .cmsmasters_post_author:before,
	{$rule}.cmsmasters_post_puzzle .puzzle_post_content_wrapper .cmsmasters_post_cont_info > span.cmsmasters_post_author:before,
	{$rule}.cmsmasters_post_puzzle .cmsmasters_post_cont .preloader,
	{$rule}.cmsmasters_open_post .cmsmasters_post_cont_info .cmsmasters_post_author:before,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_cont_info .cmsmasters_slider_post_author:before,
	{$rule}.cmsmasters_posts_slider.cmsmasters_posts_slider_type_project .preloader,
	{$rule}.cmsmasters_project_grid .img_placeholder:before,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers.prev,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers.next,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:before,
	{$rule}.cmsmasters_project_puzzle .img_placeholder,
	{$rule}#wp-calendar td,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_cont_info a:hover,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_cont_info a:hover,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div > span,
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div > span,
	{$rule}.widget_recent_entries .post-date,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li > small,
	{$rule}.shortcode_wysija input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.search_bar_wrap .search_button button:hover,
	{$rule}.widget_tag_cloud a,
	{$rule}.subpage_nav > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}

	{$rule}.search_bar_wrap .search_button button:hover {
		background-color: transparent;
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}textarea::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}textarea:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.search_bar_wrap .search_field input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}.cmsmasters-form-builder input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}.cmsmasters-form-builder textarea:focus,
	{$rule}.cmsmasters-form-builder select:focus,
	{$rule}.widget_archive select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top" : '') . " {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}

	{$rule}.cmsmasters_mailpoet_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}

	{$rule}.cmsmasters_mailpoet_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range])::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}blockquote footer,
	{$rule}blockquote,
	{$rule}table caption,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content,
	{$rule}.cmsmasters_clients_slider .owl-buttons > div:hover,
	{$rule}.footer_inner .footer_custom_html,
	{$rule}.footer_inner .footer_nav_wrap li a,
	{$rule}.footer_inner .footer_copyright,
	{$rule}.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	{$rule}.cmsmasters_content_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item > a,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab > a:hover,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_open_profile .profile_details_item_title,
	{$rule}.cmsmasters_open_profile .profile_features_item_title,
	{$rule}.share_posts a,
	{$rule}.cmsmasters_open_profile .profile_details_item_title,
	{$rule}.cmsmasters_open_profile .profile_features_item_title,
	{$rule}.post_nav > span a,
	{$rule}.cmsmasters_post_default .cmsmasters_post_date,
	{$rule}.cmsmasters_post_default a:hover > .cmsmasters_post_date,
	{$rule}.cmsmasters_post_default .cmsmasters_owl_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_footer .cmsmasters_post_date,
	{$rule}.cmsmasters_post_masonry .cmsmasters_owl_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_footer .cmsmasters_post_date,
	{$rule}.cmsmasters_post_timeline .cmsmasters_owl_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_open_post .cmsmasters_post_date,
	{$rule}.cmsmasters_open_post .cmsmasters_owl_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_single_slider .cmsmasters_post_date,
	{$rule}.cmsmasters_comment_item .cmsmasters_comment_item_date,
	{$rule}.comments_nav > span > a,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_date,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_cont_info,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
	{$rule}.cmsmasters_posts_slider.cmsmasters_posts_slider_type_project .owl-buttons > div:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_cont_info,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_cont_info a,
	{$rule}.cmsmasters_open_project .project_details_item_title,
	{$rule}.cmsmasters_open_project .project_features_item_title,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .cmsmasters_project_category,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .cmsmasters_project_category a,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .owl-buttons > div:hover,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_date_wrap,
	{$rule}#wp-calendar th,
	{$rule}.custom_list li a,
	{$rule}.widget_nav_menu .menu li a,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a,
	{$rule}.widget_pages ul li > a,	
	{$rule}.widget_recent_comments ul li a:hover,
	{$rule}.widget_recent_comments ul li a:not([class]),
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .comment_author:hover,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li a:not(.comment_author),
	{$rule}fieldset legend,
	{$rule}.img_placeholder_small,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before,
	{$rule}.search_bar_wrap .search_button button,
	{$rule}.widget_tag_cloud a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . "
	}

	
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .7);
	}
	
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .5);
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_profile_horizontal.style_2 .profile_inner:before,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_img_wrap.disable_thumbnail,
	{$rule}.cmsmasters_post_puzzle .cmsmasters_post_cont,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_outer,
	{$rule}.cmsmasters_project_grid .img_placeholder,
	{$rule}.cmsmasters_project_puzzle .img_placeholder,
	{$rule}.cmsmasters_portfolio_puzzle_style_1 .cmsmasters_project_puzzle .cmsmasters_project_line,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .cmsmasters_project_line,
	{$rule}.widget_custom_popular_projects_entries .img_placeholder,
	{$rule}.widget_custom_latest_projects_entries .img_placeholder {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_clients_slider .owl-buttons > div,
	{$rule}.cmsmasters_content_slider .owl-buttons > div,
	{$rule}.cmsmasters_post_default .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.cmsmasters_post_masonry .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.cmsmasters_post_timeline .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.cmsmasters_open_post .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.cmsmasters_posts_slider.cmsmasters_posts_slider_type_project .owl-buttons > div,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .owl-buttons > div {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .5);
	}
	
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_line {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .2);
	}
		
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_post .cmsmasters_single_slider_item_outer,
	{$rule}.portfolio.large_gap.grid .project_outer .preloader img,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item,
	{$rule}.cmsmasters_archive_type {
		-webkit-box-shadow:0 0 20px 0 rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .05);
		box-shadow:0 0 20px 0 rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .05);
	}
	
	{$rule}.portfolio.large_gap.grid .project_outer:hover .preloader img {
		-webkit-box-shadow:0 0 25px 1px rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .2);
		box-shadow:0 0 25px 1px rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .2);
	}
	
	{$rule}.cmsmasters_profile_horizontal.style_1 .cmsmasters_profile_img_wrap:after {
		background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", 1) 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", 1) 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00413d49', endColorstr='#413d49',GradientType=0 ); /* IE6-9 */
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.error .search_bar_wrap .search_button button,
	{$rule}mark,
	{$rule}table tr th,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.header_mid .header_mid_button,
	{$rule}.cmsmasters_button,
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button,
	{$rule}.cmsmasters_open_project .project_details_title, 
	{$rule}.cmsmasters_open_project .project_features_title,
	{$rule}.cmsmasters_open_project .share_posts .share_posts_title,
	{$rule}.cmsmasters_open_project .project_details_item_title, 
	{$rule}.cmsmasters_open_project .project_features_item_title,	
	{$rule}.cmsmasters_open_project .cmsmasters_project_likes a:hover:before,
	{$rule}.cmsmasters_open_project .cmsmasters_project_likes a.active:before,
	{$rule}.cmsmasters_open_project .project_details_item > *, 
	{$rule}.cmsmasters_open_project .project_features_item > *,
	{$rule}.cmsmasters_open_project .project_details_item_desc a, 
	{$rule}.cmsmasters_open_project .project_features_item_desc a,
	{$rule}.cmsmasters_open_project .share_posts a,
	{$rule}.cmsmasters_open_project .project_details_item_desc > *, 
	{$rule}.cmsmasters_open_project .project_features_item_desc > * {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}


	{$rule}.cmsmasters_open_project .cmsmasters_project_likes a:before {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . ", .5);
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_button:hover,
	{$rule}.button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.post_nav > span span:not([class]),
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current,
	{$rule}#wp-calendar th,
	{$rule}#wp-calendar td,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project .cmsmasters_slider_project_outer,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project .cmsmasters_slider_project_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.error .search_bar_wrap .search_field input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_info_wrap,
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}table tfoot td,
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont,
	{$rule}.cmsmasters_post_puzzle .puzzle_post_content_wrapper,
	{$rule}.cmsmasters_open_post,
	{$rule}.cmsmasters_open_post .cmsmasters_post_content table tbody th,
	{$rule}.cmsmasters_open_post .cmsmasters_post_content table tbody td,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_inner,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_outer,
	{$rule}.cmsmasters_portfolio_puzzle_style_3 .cmsmasters_project_puzzle .img_placeholder,
	{$rule}.widget_tag_cloud a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_post_puzzle .puzzle_post_content_wrapper:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_alternate']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		{$rule}.cmsmasters_post_puzzle .cmsmasters_post_cont .puzzle_post_content_wrapper:before,
		{$rule}.cmsmasters_post_puzzle:nth-child(even) .cmsmasters_post_cont .puzzle_post_content_wrapper:before {
			border-bottom-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_alternate']) . ", 1) !important;
		}
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before,
	{$rule}.owl-pagination .owl-page,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item:before,
	{$rule}.blog.timeline:before,
	{$rule}.commentlist .comment:before,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_timeline_circle {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}table:not([class]) tfoot th, 
	{$rule}table:not([class]) tfoot td,
	{$rule}table:not([class]) tbody td, 
	{$rule}table:not([class]) tbody th, 
	{$rule}.cmsmasters_table tfoot tr th, 
	{$rule}.cmsmasters_table tbody tr th, 
	{$rule}.cmsmasters_table tfoot tr td, 
	{$rule}.cmsmasters_table tbody tr td,
	{$rule}hr,
	{$rule}.bottom_bg,
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_notice,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_wrap,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_inner,
	{$rule}.cmsmasters_open_profile .profile_details_item,
	{$rule}.cmsmasters_open_profile .profile_features_item,
	{$rule}.blog.opened-article > aside,
	{$rule}.cmsmasters_open_post .cmsmasters_post_content input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),	
	{$rule}.portfolio.opened-article > aside,
	{$rule}.widget_pages ul li,
	{$rule}.widget_categories ul li,
	{$rule}.widget_archive ul li,
	{$rule}.widget_meta ul li,
	{$rule}.widget_recent_comments ul li,
	{$rule}.widget_recent_entries ul li,
	{$rule}.widget_nav_menu ul li a,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont_inner,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_inner,
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont,	
	{$rule}.widget_tag_cloud a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs_list,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont,
	{$rule}.cmsmasters_open_post {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}

	{$rule}.cmsmasters_open_project .project_details_item,
	{$rule}.cmsmasters_open_project .project_features_item {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . ", .5);
	}
	
	{$rule}.owl-pagination .owl-page:hover,
	{$rule}.owl-pagination .owl-page.active {
		-webkit-box-shadow:0 0 0 1px " . $cmsmasters_option['whiskers' . '_' . $scheme . '_border'] . ";
		box-shadow:0 0 0 1px " . $cmsmasters_option['whiskers' . '_' . $scheme . '_border'] . ";
	}

	{$rule}.cmsmasters_likes a:before,
	{$rule}.cmsmasters_comments a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
	
	/* Start Secondary Color */
	" . (($scheme == 'default') ? ".headline_outer h1," : '') . "
	" . (($scheme == 'default') ? ".headline_outer h4," : '') . "
	" . (($scheme == 'default') ? ".headline_outer a," : '') . "
	{$rule}.error input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.cmsmasters_clients_slider .owl-buttons > div,
	{$rule}.cmsmasters_content_slider .owl-buttons > div,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_info_wrap *,
	{$rule}.cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap > span:not(.cmsmasters_period),
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title a,
	{$rule}.cmsmasters_profile_horizontal .profile_social_icons_list a,
	{$rule}.cmsmasters_post_default .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.cmsmasters_post_masonry .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.cmsmasters_post_timeline .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.cmsmasters_post_puzzle .cmsmasters_post_cont .preloader:hover,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper a,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_footer a,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_footer a:before,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_footer a:hover,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_cont_info a:hover,
	{$rule}.cmsmasters_open_post .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_header,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_header a,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_footer a,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_footer a:before,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_footer a:hover,
	{$rule}.cmsmasters_posts_slider.cmsmasters_posts_slider_type_project .owl-buttons > div,
	{$rule}.cmsmasters_project_grid .project_outer:hover .img_placeholder:before,
	{$rule}.cmsmasters_portfolio_puzzle_style_1 .cmsmasters_project_puzzle .cmsmasters_project_header,
	{$rule}.cmsmasters_portfolio_puzzle_style_1 .cmsmasters_project_puzzle .cmsmasters_project_header a,	
	{$rule}.cmsmasters_portfolio_puzzle_style_1 .cmsmasters_project_puzzle .cmsmasters_project_footer a:before,
	{$rule}.cmsmasters_portfolio_puzzle_style_2 .cmsmasters_project_puzzle .cmsmasters_project_header,
	{$rule}.cmsmasters_portfolio_puzzle_style_2 .cmsmasters_project_puzzle .cmsmasters_project_header a,	
	{$rule}.cmsmasters_portfolio_puzzle_style_2 .cmsmasters_project_puzzle .cmsmasters_project_footer a:before,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .cmsmasters_single_slider_item_title,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .cmsmasters_single_slider_item_title a,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .owl-buttons > div,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_outer:hover .img_placeholder,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_outer:hover .img_placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}

	" . (($scheme == 'default') ? ".headline_outer a:hover" : '') . " {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", .5);
	}
	
	" . (($scheme == 'default') ? ".headline" : '') . " {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", .7);
	}
	
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title a:hover,
	{$rule}.cmsmasters_profile_horizontal .profile_social_icons_list a:hover,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_date,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper a:hover,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_footer a:hover:before,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_footer a.active:before,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_cont_info a,
	{$rule}.cmsmasters_post_puzzle:hover .puzzle_post_content_wrapper .cmsmasters_post_cont_info > span.cmsmasters_post_author:before,
	{$rule}.cmsmasters_portfolio_puzzle_style_1 .cmsmasters_project_puzzle .cmsmasters_project_footer a,
	{$rule}.cmsmasters_portfolio_puzzle_style_2 .cmsmasters_project_puzzle .cmsmasters_project_footer a {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", .7);
	}
	
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_header a:hover,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_footer a:hover:before,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_footer a.active:before {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", .7);
	}
	
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_subtitle {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", .6);
	}
	
	{$rule}.error input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.error input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_header_search_form:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.search_bar_wrap:hover input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.img_placeholder_small, 
	{$rule}.cmsmasters_featured_block,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}textarea:hover,
	{$rule}textarea:focus,
	{$rule}select,
	{$rule}option,
	{$rule}table tbody td,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close:before,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close:after,
	{$rule}.cmsmasters_clients_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_content_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_notice,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_but_wrap a:hover,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_inner,
	{$rule}.cmsmasters_post_default .cmsmasters_owl_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont_inner,
	{$rule}.cmsmasters_post_masonry .cmsmasters_owl_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_post_timeline .cmsmasters_timeline_margin:hover .cmsmasters_post_cont_inner,
	{$rule}.cmsmasters_post_timeline .cmsmasters_owl_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_open_post .cmsmasters_post_cont,
	{$rule}.cmsmasters_open_post .cmsmasters_owl_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_slider_post:hover .cmsmasters_slider_post_inner,
	{$rule}.cmsmasters_posts_slider.cmsmasters_posts_slider_type_project .owl-buttons > div:hover,
	{$rule}.cmsmasters_single_slider.cmsmasters_type_project .owl-buttons > div:hover,
	{$rule}.cmsmasters_archive_type,
	{$rule}.widget_tag_cloud a:hover,
	{$rule}.widget .wp-caption {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.error input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.error .search_bar_wrap:hover input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.error input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", .25);
	}
	
	{$rule}.error .error_cont .error_button_wrap .button:hover,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.error .error_cont .error_button_wrap .button {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", .25);
	}
	/* Finish Secondary Color */
	
	
	/* Start Secondary Color */
	{$rule}.footer {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers_footer' . '_border']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['whiskers' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return apply_filters('whiskers_theme_colors_primary_filter', $custom_css);
}

