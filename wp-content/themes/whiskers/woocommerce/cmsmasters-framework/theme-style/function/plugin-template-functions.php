<?php 
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version		1.0.4
 * 
 * WooCommerce Template Functions
 * Created by CMSMasters
 * 
 */


/* WooCommerce Dynamic Cart */
function whiskers_woocommerce_cart_dropdown($cmsmasters_option) {
	if (
		!isset($cmsmasters_option['whiskers' . '_woocommerce_cart_dropdown']) ||
		(
			isset($cmsmasters_option['whiskers' . '_woocommerce_cart_dropdown']) &&
			!$cmsmasters_option['whiskers' . '_woocommerce_cart_dropdown']
		)
	) {

	echo '<div class="cmsmasters_dynamic_cart">' . 
		'<a href="' . esc_js("javascript:void(0)") . '" class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"></a>' . 
		'<div class="widget_shopping_cart_content"></div>' . 
	'</div>';
	}
}

add_action('cmsmasters_after_logo', 'whiskers_woocommerce_cart_dropdown');


/* WooCommerce Header Cart */
function whiskers_woocommerce_header_cart_link($cmsmasters_option) {
	global $woocommerce;
	
	if (
		!isset($cmsmasters_option['whiskers' . '_woocommerce_cart_dropdown']) ||
		(
			isset($cmsmasters_option['whiskers' . '_woocommerce_cart_dropdown']) &&
			!$cmsmasters_option['whiskers' . '_woocommerce_cart_dropdown']
		)
	) {
		echo '<a href="' . esc_url(wc_get_cart_url()) . '" class="cmsmasters_header_cart_link cmsmasters_theme_icon_basket"></a>';
	}
}


/* WooCommerce Add to Cart Button */
function whiskers_woocommerce_add_to_cart_button() {
	global $woocommerce, 
		$product;
	
	
	if (
		$product->is_purchasable() && 
		$product->is_type( 'simple' ) && 
		$product->is_in_stock()
	) {
		echo '<div class="cmsmasters_product_add_wrap">' . 
			'<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->get_id()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="' . esc_attr__('Add to Cart', 'whiskers') . '">' . 
				'<span>' . esc_html__('Add to Cart', 'whiskers') . '</span>' . 
			'</a>' . 
			'<a href="' . esc_url(wc_get_cart_url()) . '" class="button added_to_cart wc-forward" title="' . esc_attr__('View Cart', 'whiskers') . '">' . 
				'<span>' . esc_html__('View Cart', 'whiskers') . '</span>' . 
			'</a>' . 
		'</div>';
	}
}


/* WooCommerce Rating */
function whiskers_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating\" itemscope itemtype=\"http://schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'whiskers'), $rating) . "\">
<div class=\"cmsmasters_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
</div>
<div class=\"cmsmasters_star_color_wrap\" data-width=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsmasters_star_color_inner\">
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'whiskers') . "</span>
</div>
";
	
	
	if ($show) {
		echo whiskers_return_content($out);
	} else {
		return $out;
	}
}


/* WooCommerce Price Format */
function whiskers_woocommerce_price_format($format, $currency_pos) {
	$format = '%2$s<span>%1$s</span>';

	switch ( $currency_pos ) {
		case 'left' :
			$format = '<span>%1$s</span>%2$s';
		break;
		case 'right' :
			$format = '%2$s<span>%1$s</span>';
		break;
		case 'left_space' :
			$format = '<span>%1$s&nbsp;</span>%2$s';
		break;
		case 'right_space' :
			$format = '%2$s<span>&nbsp;%1$s</span>';
		break;
	}
	
	return $format;
}
 
add_action('woocommerce_price_format', 'whiskers_woocommerce_price_format', 1, 2);

