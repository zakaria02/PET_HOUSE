<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * CMSMasters Donations Donation Standard Format
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_donation_metadata);

$image = in_array('image', $cmsmasters_metadata) ? true : false;
$link = in_array('link', $cmsmasters_metadata) ? true : false;
$campaign = in_array('campaign', $cmsmasters_metadata) ? true : false;
$amount = in_array('amount', $cmsmasters_metadata) ? true : false;

?>
<!-- Start Standard Donation -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_donation_cont_wrap">
		<?php 
		if ($image) {
			whiskers_thumb_rollover(get_the_ID(), 'cmsmasters-square-thumb', false, $link, false, false, false, false, false, false, true, false, false, 'cmsmasters_theme_icon_person');
		}
		?>
		<div class="cmsmasters_donation_cont">
			<?php 
			$campaign ? whiskers_donations_donation_campaign(get_the_ID(), 'page') : '';
			
			whiskers_donations_donation_heading(get_the_ID(), 'h3', $link);
			?>
		</div>
		<?php 
		if ($amount) { ?>
		<footer class="cmsmasters_donation_footer entry-meta">
			<?php whiskers_donations_donation_amount_currency(get_the_ID(), 'page'); ?>
		</footer>
		<?php } 
		?>
	</div>
</article>
<!-- Finish Standard Donation -->

