<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * Posts Slider Post Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && whiskers_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Posts Slider Post Article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		if (has_post_thumbnail()) {
			whiskers_thumb_rollover(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, false, false, false, false, false, false, false, true, false, false);
		}
		
		
		if ($title || $author || $categories || $excerpt || $likes || $comments || $more) {
			echo '<div class="cmsmasters_slider_post_inner">';
			
				if ($categories || $author) {
					echo '<div class="cmsmasters_slider_post_cont_info entry-meta">';
					
						$categories ? whiskers_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
						
						$author ? whiskers_get_slider_post_author('post') : '';
						
					echo '</div>';
				}
				
				
				$title ? whiskers_slider_post_heading(get_the_ID(), 'post', 'h3') : '';
				
				$excerpt ? whiskers_slider_post_exc_cont('post') : '';
				
				$more ? whiskers_slider_post_more(get_the_ID()) : '';
				
				
				if ($date || $likes || $comments) {
					echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
					
						$date ? whiskers_get_slider_post_date('post') : '';
						
						
						if ($likes || $comments) {
							echo '<div class="cmsmasters_slider_post_meta_info">';
							
								$likes ? whiskers_slider_post_like('post') : '';
								
								$comments ? whiskers_get_slider_post_comments('post') : '';
								
							echo '</div>';
						}
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!-- Finish Posts Slider Post Article -->

