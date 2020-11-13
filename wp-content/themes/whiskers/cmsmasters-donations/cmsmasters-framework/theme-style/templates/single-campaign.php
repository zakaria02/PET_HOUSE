<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.1
 * 
 * CMSMasters Donations Single Campaign Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = whiskers_get_global_options();


$campaign_tags = get_the_terms(get_the_ID(), 'cp-tags');


$cmsmasters_campaign_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_sharing_box', true);

$cmsmasters_campaign_author_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_author_box', true);

$cmsmasters_campaign_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_campaign_more_posts', true);

$cmsmasters_campaign_title = get_post_meta(get_the_ID(), 'cmsmasters_campaign_title', true);

?>
<!-- Start Standard Campaign -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_campaign_cont">
	<?php
		if ($cmsmasters_option['whiskers' . '_donations_campaign_date']) {
			whiskers_donations_campaign_date('post');
		}
		
		
		if ($cmsmasters_campaign_title == 'true') {
			whiskers_donations_campaign_heading(get_the_ID(), 'h2', false);
		}
		
		
		if ( 
			$cmsmasters_option['whiskers' . '_donations_campaign_author'] || 
			$cmsmasters_option['whiskers' . '_donations_campaign_cat'] || 
			$cmsmasters_option['whiskers' . '_donations_campaign_tag'] || 
			$cmsmasters_option['whiskers' . '_donations_campaign_like'] || 
			$cmsmasters_option['whiskers' . '_donations_campaign_comment'] 
		) {
			echo '<div class="cmsmasters_campaign_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				if ( 
					$cmsmasters_option['whiskers' . '_donations_campaign_like'] || 
					$cmsmasters_option['whiskers' . '_donations_campaign_comment'] 
				) {
					echo '<div class="cmsmasters_campaign_meta_info">';
						
						whiskers_donations_campaign_like('post');
						
						whiskers_donations_campaign_comments('post');
						
					echo '</div>';
				}
				
				
				whiskers_donations_campaign_author('post');
				
				whiskers_donations_campaign_category(get_the_ID(), 'cp-categs', 'post');
				
				whiskers_donations_campaign_tags(get_the_ID(), 'cp-tags', 'post');
				
			echo '</div>';
		}
		
		
		if (!post_password_required() && has_post_thumbnail()) {
			whiskers_thumb(get_the_ID(), 'post-thumbnail', false, true, true, true, true, true, false);
		}
		
		
		echo '<div class="campaign_meta_wrap">';
		
			whiskers_donations_campaign_target(get_the_ID(), true);
			
			whiskers_donations_campaign_donations_count(get_the_ID(), true);
			
			whiskers_donations_campaign_donated(get_the_ID(), 'post');
			
			whiskers_donations_campaign_donate_button(get_the_ID(), true);
			
		echo '</div>';
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_campaign_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'whiskers') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>' 
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
	?>
	</div>
</article>
<!-- Finish Standard Campaign -->
<?php

if ($cmsmasters_campaign_sharing_box == 'true') {
	whiskers_sharing_box(esc_html__('Share this campaign?', 'whiskers'), 'h5');
}


if ($cmsmasters_option['whiskers' . '_donations_campaign_nav_box']) {
	whiskers_prev_next_posts();
}


if ($cmsmasters_campaign_author_box == 'true') {
	whiskers_author_box(esc_html__('About author', 'whiskers'), 'h3', 'h5');
}


if ($campaign_tags) {
	$tgsarray = array();
	
	foreach ($campaign_tags as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}  
} else {
	$tgsarray = '';
}


if ($cmsmasters_campaign_more_posts != 'hide') {
	whiskers_donations_related( 
		'h3', 
		esc_html__('More campaigns', 'whiskers'), 
		esc_html__('No campaigns found', 'whiskers'), 
		$cmsmasters_campaign_more_posts, 
		$tgsarray, 
		$cmsmasters_option['whiskers' . '_donations_more_campaigns_count'], 
		$cmsmasters_option['whiskers' . '_donations_more_campaigns_pause'], 
		'campaign', 
		'cp-tags' 
	);
}


comments_template(); 
