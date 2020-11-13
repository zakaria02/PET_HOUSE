<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * Quote Slider Template
 * Created by CMSMasters
 * 
 */


?>
<!-- Start Quote Slider Article -->
<article class="cmsmasters_quote_inner">
<?php 
	if ($quote_image == '') {
		echo '<figure class="cmsmasters_quote_image">' . 
			'<span></span>' . 
		'</figure>';
	} else {
		echo '<figure class="cmsmasters_quote_image">' . 
			wp_get_attachment_image(strstr($quote_image, '|', true), 'cmsmasters-square-thumb') . 
		'</figure>';
	}
	
	if (
		$quote_content != '' || 
		$quote_name != '' || 
		($quote_subtitle != '' || $quote_website != '' || $quote_link != '')
	) {
		echo '<div class="cmsmasters_quote_content_wrap">';
		
			echo cmsmasters_divpdel('<div class="cmsmasters_quote_content">' . 
				do_shortcode(wpautop(wp_kses(stripslashes($quote_content), 'post'))) . 
			'</div>');
			
			
			if ($quote_name != '') {
				echo '<header class="cmsmasters_quote_header">' . 
					'<h4 class="cmsmasters_quote_title">' . esc_html($quote_name) . '</h4>' . 
				'</header>';
			}
			
			
			if ($quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
				echo '<div class="cmsmasters_quote_subtitle_wrap">' . 
					
					($quote_subtitle != '' ? '<span class="cmsmasters_quote_subtitle">' . esc_html($quote_subtitle) . '</span>' : '');
					
					
					if ($quote_website != '' || $quote_link != '') {
						echo '<span class="cmsmasters_quote_site">' . 
							($quote_link != '' ? '<a href="' . esc_url($quote_link) . '" target="_blank">' : '') . 
							
							($quote_website != '' ? esc_html($quote_website) : esc_html($quote_link)) . 
							
							($quote_link != '' ? '</a>' : '') . 
						'</span>';
					}
					
				echo '</div>';
			}
			
		echo '</div>';
	}
?>
</article>
<!-- Finish Quote Slider Article -->

