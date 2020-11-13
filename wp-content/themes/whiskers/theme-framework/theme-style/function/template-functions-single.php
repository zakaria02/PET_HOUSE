<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.0
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Previous & Next Post Links Function */
function whiskers_prev_next_posts($prev_sub = '', $next_sub = '', $order_cat = false, $tax_name = 'category') {
	$cmsmasters_post_type = get_post_type();

	$published_posts = wp_count_posts($cmsmasters_post_type)->publish;
	
	
	$prev_sub = ($prev_sub != '' ? $prev_sub : esc_html__('previous', 'whiskers'));
	$next_sub = ($next_sub != '' ? $next_sub : esc_html__('next', 'whiskers'));
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav">';
		
			previous_post_link('<span class="cmsmasters_prev_post">%link<span class="cmsmasters_nav_arrow cmsmasters-icon-custom-left"></span><span></span><span class="sub">' . esc_html($prev_sub) . '</span></span>', '%title', $order_cat, '', $tax_name);
			
			next_post_link('<span class="cmsmasters_next_post">%link<span class="cmsmasters_nav_arrow cmsmasters-icon-custom-right"></span><span></span><span class="sub">' . esc_html($next_sub) . '</span></span>', '%title', $order_cat, '', $tax_name);
			
		echo '</aside>';
	}
}



/* Get Sharing Box Function */
function whiskers_sharing_box($title_box = false, $tag = 'h3') {
	if (class_exists('Cmsmasters_Content_Composer')) {
		echo cmsmasters_sharing_box($title_box, $tag);
	}
}



/* Get About Author Box Function */
function whiskers_author_box($title_box = false, $tag = 'h3', $author_tag = 'h4') {
	$user_email = get_the_author_meta('user_email');
	
	
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	
	if ($user_description) {
		echo '<aside class="about_author">';
		
		
		if ($title_box) {
			echo '<' . esc_html($tag) . ' class="about_author_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
		}
		
		
		echo '<div class="about_author_inner">';
		
		
		$out = '';
		
		
		if ($user_first_name) {
			$out .= $user_first_name;
		}
		
		
		if ($user_first_name && $user_last_name) {
			$out .= ' ' . $user_last_name;
		} elseif ($user_last_name) {
			$out .= $user_last_name;
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ' (';
		}
		
		
		if (get_the_author()) {
			$out .= get_the_author();
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ')';
		}
		
		
		echo '<figure class="about_author_avatar">' . 
			get_avatar($user_email, 115, get_option('avatar_default')) . 
		'</figure>' . 
		'<div class="about_author_cont">';
		
		
		if ($out != '') {
			echo '<' . esc_html($author_tag) . ' class="about_author_cont_title vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></' . esc_html($author_tag) . '>';
		}
		
		
		if ($user_url) {
			echo '<a class="about_author_url " href="' . esc_url($user_url) . '" title="' . esc_attr(get_the_author()) . ' ' . esc_attr__('website', 'whiskers') . '" target="_blank">' . esc_html($user_url) . '</a>';
		}
		
		
		echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
		
		
		echo '</div>' . 
			'</div>' . 
		'</aside>';
	}
}



/* Get Related, Popular & Recent Posts Function */
function whiskers_related($tag = 'h3', $title = '', $no_title = '', $box_type = false, $tgsarray = null, $items_number = 5, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post__not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value_num';
			
			$r_args['meta_key'] = 'cmsmasters_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		
		if ($r_query->have_posts()) {
			echo "<aside class=\"cmsmasters_single_slider" . (($type == 'post') ? ' cmsmasters_type_post' : ' cmsmasters_type_project') . "\">" . 
				"<" . esc_html($tag) . " class=\"cmsmasters_single_slider_title\">" . 
					($title != '' ? esc_html($title) : esc_html__('More items', 'whiskers')) . 
				"</" . esc_html($tag) . ">" . 
				'<div class="cmsmasters_single_slider_inner">' . 
					'<div' . 
						' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
						' class="cmsmasters_owl_slider"' . 
						' data-items=' . (($type == 'post') ? '3' : '4') . '' . 
						' data-single-item="false"' . 
						' data-auto-play="' . esc_attr($autoplay) . '"' . 
					'>';
						
						while ($r_query->have_posts()) : $r_query->the_post();
							echo "<div id=\"post-"; the_ID(); echo"\" class=\"cmsmasters_owl_slider_item cmsmasters_single_slider_item\">
								<div class=\"cmsmasters_single_slider_item_outer\">
									<div class=\"cmsmasters_single_slider_item_inner\">";
									
									
										if ($type == 'project') {
											whiskers_get_projects_color(get_the_ID());
											
											whiskers_thumb(get_the_ID(), 'cmsmasters-project-thumb', true, false, true, false, true, true, false, false, false, 'cmsmasters_theme_icon_image');
											
											echo "<div class=\"cmsmasters_single_slider_cont\">
												<div class=\"cmsmasters_single_slider_cont_inner\">
													<h3 class=\"cmsmasters_single_slider_item_title\">
														<a href=\"" . esc_url(get_permalink()) . "\">" . cmsmasters_title(get_the_ID(), false) . "</a>
													</h3>
													<span class=\"cmsmasters_project_line\"></span>
												</div>
											</div>";
										} else {
											whiskers_get_post_category(get_the_ID(), 'category');
											
											echo "<h5 class=\"cmsmasters_single_slider_item_title\">
												<a href=\"" . esc_url(get_permalink()) . "\">" . cmsmasters_title(get_the_ID(), false) . "</a>
											</h5>";
											
											whiskers_post_exc_cont();
											
											whiskers_get_post_date('post');
										}
										
										
									echo "</div>
								</div>
							</div>";
						endwhile;
						
					echo "</div>
				</div>
			</aside>";
		}
		
		
		wp_reset_postdata();
	}
}



/* Get Posts Author Avatar Function */
function whiskers_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}



/* Get Pingbacks & Trackbacks Function */
function whiskers_get_pings($id, $tag = 'h3') {
	$out = '';
	
	$pings = get_comments(array(
		'type' => 		'pings',
		'post_id' => 	$id
	));
	
	
	if (sizeof($pings) > 0) {
		$out .= '<aside class="cmsmasters_pings_list">' . "\n" .
			'<' . esc_html($tag) . '>' . esc_html__('Trackbacks and Pingbacks', 'whiskers') . '</' . esc_html($tag) . '>' . "\n" .
			'<div class="cmsmasters_pings_wrap">' . "\n" .
				'<ol class="pingslist">' . "\n";
		
		
		$out .= wp_list_comments(array(
			'short_ping' => 	true,
			'echo' => 			false
		), $pings);
		
		
		$out .= '</ol>' . "\n" .
			'</div>' . "\n" .
		'</aside>';
	}
	
	
	return $out;
}

