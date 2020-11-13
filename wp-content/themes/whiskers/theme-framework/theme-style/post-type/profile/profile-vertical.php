<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * Profile Vertical Template
 * Created by CMSMasters
 * 
 */


$columns_num = '';

if ($profile_columns == 1) {
	$columns_num = 'one_first';
} elseif ($profile_columns == 2) {
	$columns_num = 'one_half';
} elseif ($profile_columns == 3) {
	$columns_num = 'one_third';
} elseif ($profile_columns == 4) {
	$columns_num = 'one_fourth';
}


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>
<!-- Start Profile Vertical Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical ' . $columns_num); ?>>
	<div class="profile_outer">
	<?php
	echo '<div class="cmsmasters_profile_img_wrap' . (has_post_thumbnail() ? ' enable_thumbnail' : ' disable_thumbnail') . '">';
	
		if (has_post_thumbnail()) {
			whiskers_thumb(get_the_ID(), 'cmsmasters-square-thumb', true, false, false, false, false);
		} else {
			echo '<span class="cmsmasters-icon-user-1"></span>';
		}
		
	echo '</div>';
	
	
	echo '<div class="profile_inner">';
		
		whiskers_profile_heading(get_the_ID(), 'h3', $cmsmasters_profile_subtitle, 'h6');
		
		whiskers_profile_social_icons($cmsmasters_profile_social, $profile_id);
		
		whiskers_profile_exc_cont();
		
	echo '</div>';
	?>
	</div>
</article>
<!-- Finish Profile Vertical Article -->

