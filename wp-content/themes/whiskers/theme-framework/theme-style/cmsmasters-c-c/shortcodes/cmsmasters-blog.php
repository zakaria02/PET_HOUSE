<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.2
 * 
 * Content Composer Clients Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = $shortcode_id;


$this->blog_atts = array(
	'cmsmasters_metadata' => $metadata 
);


$more_text = ($more_text != '') ? $more_text : esc_html__('Load More Posts', 'whiskers');


$filter_cats_text = ($filter_cats_text != '') ? $filter_cats_text : esc_html__('All Categories', 'whiskers');


$out = '<div' . 
	' id="blog_' . esc_attr($unique_id) . '"' . 
	' class="cmsmasters_wrap_blog entry-summary' . (($classes != '') ? ' ' . esc_attr($classes) : '') . '"' . 
	' data-layout="' . esc_attr($layout) . '"' . 
	' data-layout-mode="' . esc_attr($layout_mode) . '"' . 
	' data-url="' . CMSMASTERS_CONTENT_COMPOSER_URL . '"' . 
	' data-orderby="' . esc_attr($orderby) . '"' . 
	' data-order="' . esc_attr($order) . '"' . 
	' data-count="' . esc_attr($count) . '"' . 
	' data-categories="' . esc_attr($categories) . '"' . 
	' data-metadata="' . esc_attr($metadata) . '"' . 
	' data-pagination="' . esc_attr($pagination) . '"' . 
'>';


if ( 
	$layout != 'standard' || 
	($layout == 'standard' && $pagination == 'more') 
) {
	wp_enqueue_style('isotope');
	
	
	wp_enqueue_script('isotope');
	
	wp_enqueue_script('isotopeMode');
	
	
	if ($filter !== '') {
		$out .= "<div class=\"cmsmasters_post_filter_wrap cmsmasters_items_filter_wrap\">
			<div class=\"cmsmasters_post_filter cmsmasters_items_filter\">
				<span class=\"cmsmasters_post_filter_loader cmsmasters_items_filter_loader\"></span>
				<div class=\"cmsmasters_post_filter_block cmsmasters_items_filter_block\">
					<ul class=\"cmsmasters_post_filter_list cmsmasters_items_filter_list\">
						<li class=\"current\">
							<a class=\"button\" data-filter=\"article.post\"  title=\"" . esc_attr($filter_cats_text) . "\" href=\"" . esc_js("javascript:void(0)") . "\">
								<span>" . esc_html($filter_cats_text) . "</span>
							</a>
						</li>";
						
						
						$cat_args = array( 
							'orderby' => 	'name' 
						);
						
						
						if ($categories != '') {
							$cat_array = explode(',', $categories);
							
							
							for ($i = 0; $i < count($cat_array); $i++) {
								$idObj = get_category_by_slug($cat_array[$i]);
								
								$cat_array[$i] = $idObj->term_id;
							}
						} else {
							$cat_array = $categories;
						}
						
						
						if (count($cat_array) == 1 && $categories != '') {
							$cat_args['child_of'] = $categories;
						} elseif (count($cat_array) > 1) {
							$cat_args['include'] = $cat_array;
						}
						
						
						$post_categs = get_terms('category', $cat_args);
						
						
						if (is_array($post_categs) && !empty($post_categs)) {
							foreach ($post_categs as $post_categ) {
								$out .= "<li>
									<a class=\"button\" href=\"#\" data-filter=\"article.post[data-category~='" . esc_attr($post_categ->slug) . "']\" title=\"" . esc_attr($post_categ->name) . "\">
										<span>" . esc_html($post_categ->name) . "</span>
									</a>
								</li>";
							}
						}
						
					$out .= "</ul>
				</div>
			</div>
		</div>";
	}
}

$out .= '<div class="blog ' . 
	esc_attr($layout) . 
	(($layout_mode !== '') ? ' ' . esc_attr($layout_mode) : '') . 
	(($columns !== '') ? ' cmsmasters_' . esc_attr($columns) : '') . 
'">';


$orderby = ($orderby == 'popular') ? 'meta_value_num' : $orderby;


$args = array( 
	'post_type' => 				'post', 
	'orderby' => 				$orderby, 
	'order' => 					$order, 
	'posts_per_page' => 		$count, 
	'category_name' => 			$categories 
);


if ($pagination == 'more') {
	$args['ignore_sticky_posts'] = 1;
}


if ($pagination == 'pagination') {
	if (get_query_var('paged')) { 
		$paged = get_query_var('paged'); 
	} elseif (get_query_var('page')) { 
		$paged = get_query_var('page'); 
	} else { 
		$paged = 1; 
	}
	
	
	$args['paged'] = $paged;
}


if ($orderby == 'meta_value_num') {
	$args['meta_key'] = 'cmsmasters_likes';
}


$query = new WP_Query($args);


if ($query->have_posts()) : 
	while ($query->have_posts()) : $query->the_post();
		if ($layout == 'columns') {
			if ($layout_mode == 'puzzle') {
				$out .= cmsmasters_composer_ob_load_template('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/post-type/blog/post-puzzle.php', $this->blog_atts);
			} else {
				$out .= cmsmasters_composer_ob_load_template('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/post-type/blog/post-masonry.php', $this->blog_atts);
			}
		} elseif ($layout == 'timeline') {
			$out .= cmsmasters_composer_ob_load_template('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/post-type/blog/post-timeline.php', $this->blog_atts);
		} else {
			$out .= cmsmasters_composer_ob_load_template('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/post-type/blog/post-default.php', $this->blog_atts);
		}
	endwhile;
	
	
	if ($pagination == 'more') {
		wp_enqueue_style('mediaelement');
		
		wp_enqueue_style('wp-mediaelement');
		
		
		wp_enqueue_script('mediaelement');
		
		wp_enqueue_script('wp-mediaelement');
	}
endif;


$out .= '</div>';


if ($pagination !== 'disabled') {
	$out .= '<div class="cmsmasters_wrap_more_posts cmsmasters_wrap_more_items">';
	
		if ($pagination == 'pagination' && $query->max_num_pages > 1) {
			$out .= cmsmasters_pagination($query->max_num_pages);
		} elseif ($pagination == 'more' && $query->found_posts > $count) {
			$out .= "<div class=\"cmsmasters_wrap_post_loader cmsmasters_wrap_items_loader\">
				<a href=\"" . esc_js("javascript:void(0)") . "\" class=\"cmsmasters_button cmsmasters_post_loader cmsmasters_items_loader\">
					<span>" . esc_html($more_text) . "</span>
				</a>
			</div>";
		}
	
	$out .= '</div>';
}

$out .= '</div>';


wp_reset_postdata();


echo whiskers_return_content($out);
