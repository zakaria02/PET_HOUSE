<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.0
 * 
 * WooCommerce Colors Rules
 * Created by CMSMasters
 * 
 */


function whiskers_woocommerce_colors($custom_css) {
	$cmsmasters_option = whiskers_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.select2-container .select2-choice,
	{$rule}.select2-container.select2-drop-above .select2-choice,
	{$rule}.select2-container.select2-container-active .select2-choice,
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice,
	{$rule}.select2-drop.select2-drop-active,
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.cmsmasters_woo_comments .cmsmasters_comment_item_date,
	{$rule}.widget_rating_filter li a,
	{$rule}.widget_layered_nav li a,
	{$rule}.widget_layered_nav_filters li a,
	{$rule}.widget_product_categories li a,
	{$rule}.widget_product_tag_cloud a,
	{$rule}.widget_rating_filter ul li a:before,
	{$rule}.widget_layered_nav ul li a:before,
	{$rule}.widget_layered_nav_filters ul li a:before,
	{$rule}.widget_product_categories ul li a:before,
	{$rule}.widget_rating_filter ul li a:hover:before,
	{$rule}.widget_layered_nav ul li a:hover:before,
	{$rule}.widget_layered_nav_filters ul li a:hover:before,
	{$rule}.widget_product_categories ul li a:hover:before,
	{$rule}.select2-container .select2-selection--single .select2-selection__rendered {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.cmsmasters_products .product.product-category .woocommerce-loop-category__title:hover,
	{$rule}.cmsmasters_products .product.product-category .woocommerce-loop-category__title .count,
	{$rule}.required,
	{$rule}.cmsmasters_product .cmsmasters_product_add_wrap .button:hover,
	{$rule}#page .remove:hover,
	{$rule}.shop_table .product-subtotal .amount,
	{$rule}ul.order_details li.total .amount,
	{$rule}.shop_table.order_details tfoot tr:last-child td,
	{$rule}.shop_table.my_account_orders td > .amount,
	{$rule}.woocommerce-MyAccount-navigation > ul > li > a:hover,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a:hover,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total .amount,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover,
	{$rule}.widget_rating_filter li a:hover,
	{$rule}.widget_layered_nav li a:hover,
	{$rule}.widget_layered_nav li.chosen a,
	{$rule}.widget_layered_nav_filters li a:hover,
	{$rule}.widget_layered_nav_filters li.chosen a,
	{$rule}.widget_product_categories li a:hover,
	{$rule}.widget_product_categories li.current-cat a,
	{$rule}.widget_shopping_cart .cart_list a:hover,
	{$rule}.widget_shopping_cart .total .amount,
	{$rule}.widget > .product_list_widget a:hover,
	{$rule}.widget_product_tag_cloud a:hover,
	{$rule}.shop_table a:not(.button):hover,
	{$rule}table.variations .reset_variations:hover,
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.woocommerce-store-notice,
	{$rule}.input-checkbox + label:after,
	{$rule}.input-radio + label:after,
	{$rule}input.shipping_method + label:after,
	{$rule}.form-row label .input-checkbox + span:after,
	{$rule}.onsale,
	{$rule}.shop_table thead th,
	{$rule}.cart_totals table .cart-subtotal th,
	{$rule}.cart_totals table .cart-subtotal td,
	{$rule}.shop_table.woocommerce-checkout-review-order-table thead th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table thead td,
	{$rule}ul.order_details li,
	{$rule}.shop_table.order_details thead th,
	{$rule}.woocommerce-MyAccount-navigation > ul > li > a,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	{$rule}.widget_price_filter .ui-slider-range,
	{$rule}.widget_price_filter .ui-slider-handle,
	{$rule}table.variations .reset_variations {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.select2-container.select2-container-active .select2-choice,
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice,
	{$rule}.select2-drop.select2-drop-active,
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.cmsmasters_product:hover,
	{$rule}.cart_totals table .cart-subtotal th,
	{$rule}.cart_totals table .cart-subtotal td,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	{$rule}.woocommerce-MyAccount-navigation > ul > li > a,
	{$rule}table.variations .reset_variations {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.stock,
	{$rule}.out-of-stock,
	{$rule}.cmsmasters_product .price del,
	{$rule}.cmsmasters_single_product .price del,
	{$rule}.widget > .product_list_widget del,
	{$rule}.cmsmasters_star_rating .cmsmasters_star_color_wrap,
	{$rule}.comment-form-rating .stars > span a:hover,
	{$rule}.comment-form-rating .stars > span a.active,
	{$rule}.cmsmasters_woo_wrap_result .woocommerce-result-count {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_star_rating .cmsmasters_star_trans_wrap, 
	{$rule}.comment-form-rating .stars > span {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . ", .4);
	}
	
	{$rule}.link_hover_color {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_products .product.product-category .woocommerce-loop-category__title,
	{$rule}.cmsmasters_product .price,
	{$rule}.cmsmasters_product .cmsmasters_product_add_wrap .button,
	{$rule}.shop_attributes th,
	{$rule}.shop_table,
	{$rule}#page .remove,
	{$rule}.cart_totals table th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table td,
	{$rule}.shop_table.order_details tfoot tr th,
	{$rule}ul.order_details strong,
	{$rule}.shop_table.customer_details th,
	{$rule}.shop_table.customer_details td,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .woocommerce-mini-cart__empty-message,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	{$rule}.widget_shopping_cart .cart_list li,
	{$rule}.widget_shopping_cart .cart_list a,
	{$rule}.widget_shopping_cart .total,
	{$rule}.widget > .product_list_widget li,
	{$rule}.widget > .product_list_widget li a,
	{$rule}table.variations tr td:first-child,
	{$rule}.cmsmasters_product .cmsmasters_product_cat,
	{$rule}.cmsmasters_single_product .price,
	{$rule}.cmsmasters_single_product .product_meta,
	{$rule}.shop_table a:not(.button),
	{$rule}.cart_totals table,
	{$rule}.widget_price_filter .price_slider_amount .price_label,
	{$rule}.cmsmasters_added_product_info .cmsmasters_added_product_info_text {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", .5);
	}
	
	{$rule}.select2-container .select2-choice,
	{$rule}.woocommerce-info,
	{$rule}.woocommerce-message,
	{$rule}.woocommerce-error,
	{$rule}.shop_table,
	{$rule}.woocommerce-checkout-payment,
	{$rule}ul.order_details,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content,
	{$rule}.cmsmasters_added_product_info,
	{$rule}.widget_product_tag_cloud a {
		-webkit-box-shadow:0 0 20px 0 rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", 0.05);
		box-shadow:0 0 20px 0 rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_heading']) . ", 0.05);
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.woocommerce-store-notice, 
	{$rule}.woocommerce-store-notice p a, 
	{$rule}.woocommerce-store-notice p a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link,
	{$rule}.shop_attributes th,
	{$rule}.shop_attributes td,
	{$rule}.woocommerce-MyAccount-content fieldset,
	{$rule}.woocommerce-MyAccount-content fieldset legend,
	{$rule}.woocommerce-MyAccount-navigation > ul > li > a:hover,
	{$rule}.variations_form.cart tbody td,
	{$rule}table.variations .reset_variations:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.select2-container .select2-choice,
	{$rule}.select2-container.select2-drop-above .select2-choice,
	{$rule}.select2-container.select2-container-active .select2-choice,
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice,
	{$rule}.select2-drop.select2-drop-active,
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before,
	{$rule}input.shipping_method + label:before,
	{$rule}.form-row label .input-checkbox + span:before,
	{$rule}.shop_table tbody td,
	{$rule}.cart_totals table th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table tfoot .order-total th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table tfoot .order-total td,
	{$rule}.woocommerce-checkout-payment .payment_box,
	{$rule}.shop_table.order_details tfoot tr:last-child th,
	{$rule}.shop_table.order_details tfoot tr:last-child td,
	{$rule}ul.order_details strong,
	{$rule}.shop_table.customer_details th,
	{$rule}.shop_table.customer_details td,
	{$rule}.widget_product_tag_cloud a,
	{$rule}.select2-container .select2-selection--single {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_alternate']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}.shop_table.cart .cart_item {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_alternate']) . "
		}
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_woo_tabs:before,
	{$rule}div.products:before,
	{$rule}.widget_price_filter .price_slider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cart.grouped_form .group_table td, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total td,
	{$rule}.select2-container .select2-choice,
	{$rule}.select2-container.select2-drop-above .select2-choice,
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before,
	{$rule}input.shipping_method + label:before,
	{$rule}.form-row label .input-checkbox + span:before,
	{$rule}.shop_table .cart_item,
	{$rule}.shop_table th,
	{$rule}.shop_table td,
	{$rule}.shop_attributes th,
	{$rule}.shop_attributes td,
	{$rule}.cart_totals table th,
	{$rule}.cart_totals table td,
	{$rule}.widget_rating_filter li,
	{$rule}.widget_layered_nav li,
	{$rule}.widget_layered_nav_filters li,
	{$rule}.widget_product_categories li,
	{$rule}.select2-dropdown,
	{$rule}.select2-container .select2-selection--single,
	{$rule}.select2-dropdown input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.select2-container.select2-container--open .select2-dropdown--below {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.select2-container.select2-container--open .select2-dropdown--above {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
	
	/* Start Secondary Color */
	{$rule}.onsale,
	{$rule}.shop_table thead th,
	{$rule}.cart_totals table .cart-subtotal th,
	{$rule}.cart_totals table .cart-subtotal td,
	{$rule}.shop_table.woocommerce-checkout-review-order-table thead th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table thead td,
	{$rule}ul.order_details,
	{$rule}.woocommerce-MyAccount-navigation > ul > li > a,
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover,
	{$rule}.cmsmasters_dynamic_cart:hover .cmsmasters_dynamic_cart_button,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	{$rule}table.variations .reset_variations {
		" . cmsmasters_color_css('color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", .8);
	}
	
	{$rule}.stock,
	{$rule}.out-of-stock,
	{$rule}.woocommerce-info,
	{$rule}.woocommerce-message,
	{$rule}.woocommerce-error,
	{$rule}.woocommerce-message .button:hover,
	{$rule}.woocommerce-info .button:hover,
	{$rule}.woocommerce-error .button:hover,
	{$rule}.shop_table .actions .coupon input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.shop_table.woocommerce-checkout-review-order-table th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table td,
	{$rule}.woocommerce-checkout-payment,
	{$rule}.shop_table.order_details th,
	{$rule}.shop_table.order_details td,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover,
	{$rule}.woocommerce-checkout-payment .place-order .button:hover,
	{$rule}.widget_product_tag_cloud a:hover,
	{$rule}.cmsmasters_added_product_info,
	{$rule}.select2-container .select2-selection--single:hover,
	{$rule}.select2-container.select2-container--open .select2-selection--single,
	{$rule}.select2-container.select2-container--focus .select2-selection--single {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content:after,
	{$rule}.cmsmasters_added_product_info:after {
		border-bottom:10px solid rgba(" . cmsmasters_color2rgb($cmsmasters_option['whiskers' . '_' . $scheme . '_secondary']) . ", 1);
	}
	/* Finish Secondary Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('whiskers_theme_colors_secondary_filter', 'whiskers_woocommerce_colors');

