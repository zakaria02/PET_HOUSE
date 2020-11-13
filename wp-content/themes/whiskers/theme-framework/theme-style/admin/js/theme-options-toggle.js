/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * Theme Admin Options Toggles Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	"use strict";
	
	/* Heading Background Visibility Load */
	if ($('#cmsmasters_heading_bg_img_enable').is(':checked')) {
		$('#cmsmasters_heading_bg_pos').closest('tr').show();
	}
	
	/* Heading Background Visibility Change */
	$('#cmsmasters_heading_bg_img_enable').on('change', function () { 
		if ($(this).is(':checked')) {
			$('#cmsmasters_heading_bg_pos').closest('tr').show();
		} else {
			$('#cmsmasters_heading_bg_pos').closest('tr').hide();
		}
	} );
} )(jQuery);

