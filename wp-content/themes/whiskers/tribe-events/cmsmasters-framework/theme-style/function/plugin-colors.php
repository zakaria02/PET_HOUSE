<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.0
 * 
 * Tribe Events Colors Rules
 * Created by CMSMasters
 * 
 */


function whiskers_tribe_events_colors($custom_css) {
	$cmsmasters_option = whiskers_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Tribe Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.cmsmasters_single_tribe_nav .cmsmasters_nav_arrow,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under, 
	{$rule}.tribe-mini-calendar tbody, 
	{$rule}.tribe-mini-calendar tbody a {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */ 
	{$rule}#tribe-bar-views .tribe-bar-views-list li:hover,
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active, 
	{$rule}.cmsmasters_single_tribe_nav a:hover,
	{$rule}.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time, 
	{$rule}.tribe-events-widget-link a:hover, 
	{$rule}.tribe-this-week-events-widget .tribe-events-viewmore a:hover, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-header-date, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .entry-title a:hover, 
	{$rule}.widget .vcalendar .entry-title a:hover, 
	{$rule}.tribe-mini-calendar-list-wrapper .entry-title a:hover, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_left .entry-title, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_left .entry-title, 
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item a:hover, 
	{$rule}.tribe-events-single-event-title, 
	{$rule}#tribe-events-content > .tribe-events-button:hover, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li a:hover, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a, 
	{$rule}.tribe-events-sub-nav li a:hover, 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a:hover, 
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:hover, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a:hover,  
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a:hover, 
	{$rule}.tribe-mini-calendar tbody a:hover, 
	{$rule}.tribe-mini-calendar tbody .tribe-events-present, 
	{$rule}.tribe-mini-calendar tbody .tribe-events-present a, 
	{$rule}.widget .vcalendar [class*=cmsmasters_theme_icon]:before, 
	{$rule}.tribe-mini-calendar-list-wrapper [class*=cmsmasters_theme_icon]:before, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .duration:before, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.widget.tribe-events-list-widget .tribe-event-featured, 
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single:hover,
	{$rule}#tribe-events .tribe-events-list .tribe-events-loop .tribe-event-featured, 
	{$rule}.tribe-events-notices:before, 
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title:hover a,
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}.tribe-events-grid .tribe-grid-header, 
	{$rule}table.tribe-events-calendar tbody td .type-tribe_events:hover .tribe-events-month-event-title a, 
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}table.tribe-events-calendar thead th, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-], 
	{$rule}.tribe-mini-calendar .tribe-mini-calendar-nav, 
	{$rule}.tribe-mini-calendar tbody a:before, 
	{$rule}.cmsmasters_event_date, 
	{$rule}.tribe-events-venue-widget .vcalendar .tribe-event-featured .entry-title a, 
	{$rule}.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .type-tribe_events.tribe-event-featured .entry-title a, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-has-events:before, 
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}#tribe-bar-views.tribe-bar-views-open .button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_single_tribe_nav a .post_nav_sub, 
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth, 
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth a,
	{$rule}.cmsmasters_event_day, 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a,
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a:before,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a:before, 
	{$rule}.event_hover,
	{$rule}.cmsmasters_event_big_week {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.tribe-mini-calendar tbody .tribe-events-past a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */ 
	{$rule}.cmsmasters_single_tribe_nav a,
	{$rule}.tribe-events-widget-link a, 
	{$rule}.tribe-this-week-events-widget .tribe-events-viewmore a, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .entry-title a, 
	{$rule}.widget .vcalendar .entry-title a, 
	{$rule}.tribe-mini-calendar-list-wrapper .entry-title a, 
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a, 
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item a, 
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a, 	 
	{$rule}.tribe-bar-filters-inner > div label, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li a, 
	{$rule}.tribe-events-sub-nav li a, 
	{$rule}.tribe-events-notices, 
	{$rule}#tribe-events-content > .tribe-events-button, 
	{$rule}.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a, 
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title, 
	{$rule}.cmsmasters_single_event_meta dt, 
	{$rule}.tribe-events-month table.tribe-events-calendar .type-tribe_events.tribe-event-featured, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a, 
	{$rule}.tribe-mini-calendar thead a:hover,  
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a, 
	{$rule}.tribe-mobile-day .tribe-events-event-schedule-details, 
	{$rule}.tribe-mobile-day .tribe-event-schedule-details, 
	{$rule}.tribe-this-week-events-widget .tribe-events-page-title {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.datepicker.dropdown-menu table thead tr th:hover,
	{$rule}.tribe-events-grid .tribe-grid-header .tribe-week-today, 
	{$rule}.tribe-events-grid .tribe-grid-header a:hover, 
	{$rule}.tribe-mini-calendar thead, 
	{$rule}.tribe-events-list .cmsmasters_event_big_date_ovh .cmsmasters_featured_event, 
	{$rule}.tribe-events-venue-widget .vcalendar .tribe-event-featured .entry-title a:hover, 
	{$rule}.tribe-events-photo .tribe-events-photo-event.tribe-event-featured .cmsmasters_featured_event,
	{$rule}.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .type-tribe_events.tribe-event-featured .entry-title a:hover, 
	{$rule}.tribe-mini-calendar tbody .tribe-mini-calendar-today a:before, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-has-events.mobile-active:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name a:hover, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name:before, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name a, 
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title:hover a,
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}table.tribe-events-calendar tbody td .type-tribe_events:hover .tribe-events-month-event-title a, 
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover, 
	{$rule}.cmsmasters_event_month, 
	{$rule}.tribe-events-list .cmsmasters_event_big_date_ovh .cmsmasters_featured_event, 
	{$rule}.tribe-events-photo .tribe-events-photo-event.tribe-event-featured .cmsmasters_featured_event, 
	{$rule}.tribe-events-venue-widget .vcalendar .tribe-event-featured .entry-title a, 
	{$rule}.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .type-tribe_events.tribe-event-featured .entry-title a, 
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}.event_bg {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.recurringinfo .recurring-info-tooltip:after {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-week-event .tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	{$rule}.tribe-mini-calendar, 
	{$rule}.cmsmasters_event_day, 
	{$rule}table.tribe-events-calendar, 
	{$rule}.tribe-events-tooltip, 
	{$rule}.tribe-events-grid .tribe-scroller, 
	{$rule}.tribe-events-grid .tribe-week-grid-hours {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	{$rule}table.tribe-events-calendar thead th, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-], 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-] a, 
	{$rule}.tribe-events-grid .tribe-grid-header a:hover span, 
	{$rule}.tribe-events-grid .tribe-grid-header span, 
	{$rule}.tribe-mini-calendar thead, 
	{$rule}.tribe-mini-calendar thead a, 
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.tribe-mini-calendar .tribe-events-othermonth, 
	{$rule}.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5,
	{$rule}.tribe-events-sub-nav li span:not([class]), 
	{$rule}.tribe-events-notices, 
	{$rule}.tribe-events-grid .tribe-grid-allday {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_event_big_day,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=tribe-events-daynum-] {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a,
	{$rule}.tribe-events-notices,
	{$rule}.tribe-mini-calendar tbody td,
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title,
	{$rule}.cmsmasters_event_day, 
	{$rule}.tribe-events-photo .tribe-events-list-photo-description, 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	{$rule}.tribe-events-related-events-title, 
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item, 
	{$rule}.tribe-events-tooltip, 
	{$rule}.tribe-events-sub-nav li span:not([class]), 
	{$rule}table.tribe-events-calendar tbody td, 
	{$rule}table.tribe-events-calendar tbody td .tribe_events, 
	{$rule}.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5, 
	{$rule}.tribe-events-list .type-tribe_events, 
	{$rule}.tribe-events-grid .tribe-scroller, 
	{$rule}.tribe-events-grid .tribe-week-grid-block div, 
	{$rule}.tribe-events-grid .tribe-grid-allday, 
	{$rule}.tribe-events-grid .tribe-grid-content-wrap .column, 
	{$rule}.tribe-events-grid .tribe-week-grid-hours div, 
	{$rule}.widget .vcalendar .type-tribe_events, 
	{$rule}.tribe-mini-calendar-list-wrapper .type-tribe_events, 
	{$rule}.tribe-mobile-day .tribe-events-mobile, 
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-day {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-week-event .tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.recurringinfo .recurring-info-tooltip:before {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}table.tribe-events-calendar tbody {
		-webkit-box-shadow:0 0 1px 1px " . $cmsmasters_option['whiskers' . '_' . $scheme . '_border'] . ";
		box-shadow:0 0 1px 1px " . $cmsmasters_option['whiskers' . '_' . $scheme . '_border'] . ";
	}
	/* Finish Borders Color */
	
	#page .tribe-events-venue-widget .tribe-event-featured, 
	#page .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single, 
	#page .tribe-mini-calendar-list-wrapper .tribe-event-featured, 
	#page .tribe-events-month table.tribe-events-calendar .type-tribe_events.tribe-event-featured, 
	#page .type-tribe_events.tribe-events-photo-event.tribe-event-featured .tribe-events-photo-event-wrap, 
	#page .type-tribe_events.tribe-events-photo-event.tribe-event-featured .tribe-events-photo-event-wrap:hover, 
	#page .tribe-events-list #tribe-events-day.tribe-events-loop .tribe-event-featured, 
	#page .tribe-events-list .tribe-events-loop .tribe-event-featured {
		background-color:transparent;
	}
	
	#page .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single {
		border-color:transparent;
	}

/***************** Finish {$title} Tribe Events Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('whiskers_theme_colors_secondary_filter', 'whiskers_tribe_events_colors');

