<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function whiskers_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'whiskers');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'whiskers');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'whiskers');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function whiskers_options_single_sections() {
	$tab = whiskers_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'whiskers');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'whiskers');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'whiskers');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function whiskers_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = whiskers_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = whiskers_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'whiskers'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'whiskers') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'whiskers'), 
			'desc' => esc_html__('enable', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'whiskers' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'whiskers'), 
				'desc' => esc_html__('show', 'whiskers'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['whiskers' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'whiskers'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['whiskers' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'whiskers') . '|related', 
				esc_html__('Show Popular Posts', 'whiskers') . '|popular', 
				esc_html__('Show Recent Posts', 'whiskers') . '|recent', 
				esc_html__('Hide More Posts Box', 'whiskers') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'whiskers'), 
			'desc' => esc_html__('posts', 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'whiskers' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'whiskers'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'whiskers'), 
			'desc' => esc_html__('Enter a project details block title', 'whiskers'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'whiskers'), 
			'desc' => esc_html__('enable', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'whiskers'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'whiskers') . '|related', 
				esc_html__('Show Popular Projects', 'whiskers') . '|popular', 
				esc_html__('Show Recent Projects', 'whiskers') . '|recent', 
				esc_html__('Hide More Projects Box', 'whiskers') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'whiskers'), 
			'desc' => esc_html__('projects', 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'whiskers'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'whiskers'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'whiskers'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'whiskers'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'whiskers'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'whiskers'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'whiskers' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'whiskers'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'whiskers'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'whiskers'), 
			'desc' => esc_html__('Enter a profile details block title', 'whiskers'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'whiskers'), 
			'desc' => esc_html__('enable', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'whiskers'), 
			'desc' => esc_html__('show', 'whiskers'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'whiskers'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'whiskers'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'whiskers' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'whiskers'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'whiskers'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['whiskers' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

