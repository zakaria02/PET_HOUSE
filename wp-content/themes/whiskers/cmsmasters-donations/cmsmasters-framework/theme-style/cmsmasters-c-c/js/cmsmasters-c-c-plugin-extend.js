/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * CMSMasters Donations Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */


/**
 * Featured Campaign Extend
 */
var cmsmasters_featured_campaign_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_featured_campaign.fields) {
	if (id === 'campaign_metadata') {
		cmsmasters_featured_campaign_new_fields['campaign_color'] = { 
			type : 		'rgba', 
			title : 	cmsmasters_donations_theme_shortcodes.featured_campaign_color_title, 
			descr : 	'', 
			def : 		cmsmasters_donations_theme_shortcodes.featured_campaign_color, 
			required : 	false, 
			width : 	'half' 
		};
		
		cmsmasters_featured_campaign_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_campaign.fields[id];
	} else {
		cmsmasters_featured_campaign_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_campaign.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_featured_campaign.fields = cmsmasters_featured_campaign_new_fields;

