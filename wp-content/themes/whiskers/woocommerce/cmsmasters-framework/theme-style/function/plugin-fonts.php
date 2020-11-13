<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.0
 * 
 * WooCommerce Fonts Rules
 * Created by CMSMasters
 * 
 */


function whiskers_woocommerce_fonts($custom_css) {
	$cmsmasters_option = whiskers_get_global_options();
	
	
	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.woocommerce-checkout-payment label,
	.shop_attributes th,
	.shop_attributes td,
	.cmsmasters_woo_comments .cmsmasters_comment_item_date,
	.shop_table.woocommerce-checkout-review-order-table .product-name dl,
	.shop_table.order_details .product-name dl {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_content_font_google_font']) . $cmsmasters_option['whiskers' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_single_product .cart .quantity input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_content_font_font_size'] + 5) . "px;
	}
	
	.out-of-stock,
	.stock,
	.cmsmasters_woo_wrap_result .woocommerce-result-count {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_content_font_font_size'] - 1) . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li > p {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_content_font_line_height'] - 2) . "px;
	}
	
	.out-of-stock,
	.stock {
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_content_font_line_height'] - 4) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	.cmsmasters_product .cmsmasters_product_cat,
	.cmsmasters_product .cmsmasters_product_cat a,
	.widget_rating_filter li,
	.widget_rating_filter li a,
	.widget_layered_nav li,
	.widget_layered_nav li a,
	.widget_layered_nav_filters li,
	.widget_layered_nav_filters li a,
	.widget_product_categories li,
	.widget_product_categories li a {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_link_font_font_size'] - 1) . "px;
	}
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cmsmasters_single_product .product_title,
	.cmsmasters_single_product .price {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h3_font_google_font']) . $cmsmasters_option['whiskers' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .price,
	.cmsmasters_single_product .price .amount span {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h3_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h3_font_line_height'] - 2) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsmasters_product .price,
	.amount span,
	.onsale,
	.cmsmasters_product .cmsmasters_product_add_wrap .button,
	.shop_table thead th,
	.shop_table .product-name a,
	.shop_table td > .amount,
	.shop_table td .quantity > input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.cart_totals > h2,
	.cart_totals table th,
	.cart_totals table .amount,
	.cart_totals table .amount span,
	.woocommerce-billing-fields > h3,
	.woocommerce-shipping-fields > h3,
	.shop_table.woocommerce-checkout-review-order-table th,
	.shop_table.woocommerce-checkout-review-order-table td,
	.shop_table.woocommerce-checkout-review-order-table td .amount,
	.shop_table.woocommerce-checkout-review-order-table td .amount span,
	.cmsmasters_woo_comments .post_comments_title,
	.cmsmasters_woo_comments .cmsmasters_comment_item_title,
	ul.order_details,
	.woocommerce-page.woocommerce-order-received .woocommerce > h2,
	.woocommerce-page.woocommerce-order-received .woocommerce > h3,
	bacs_details + h3,
	.shop_table.order_details tfoot tr th,
	.shop_table.customer_details th,
	.shop_table.customer_details td,
	.shop_table.my_account_orders th,
	.shop_table.my_account_orders td,
	.shop_table.my_account_orders td a,
	.woocommerce-MyAccount-content fieldset legend,
	.widget_shopping_cart_content .cart_list,
	.widget_shopping_cart_content .cart_list a,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total .amount span,
	table.variations tr td:first-child,
	.single_variation_wrap .single_variation .woocommerce-variation-price .price,
	.single_variation_wrap .single_variation .woocommerce-variation-price .price .amount span,
	.widget_shopping_cart .cart_list li,
	.widget_shopping_cart .cart_list a,
	.widget_shopping_cart .total,
	.widget_shopping_cart .total strong,
	.widget > .product_list_widget li,
	.widget > .product_list_widget li a,
	.shipping-calculator-button, 
	.shop_table.woocommerce-checkout-review-order-table .shipping th, 
	.cmsmasters_added_product_info .cmsmasters_added_product_info_text,
	.cmsmasters_product .cmsmasters_product_title a,
	.cmsmasters_products .product.product-category .woocommerce-loop-category__title {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_h5_font_google_font']) . $cmsmasters_option['whiskers' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['whiskers' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_products .product.product-category .woocommerce-loop-category__title,
	.cmsmasters_product .cmsmasters_product_title a {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] + 6) . "px;
	}
	
	.shipping-calculator-button, 
	.shop_table.woocommerce-checkout-review-order-table .shipping th,
	.woocommerce-page.woocommerce-order-received .woocommerce > h2 {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] + 2) . "px;
	}
	
	.cmsmasters_product .cmsmasters_product_add_wrap .button {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] + 6) . "px;
		letter-spacing: 0px;
	}

	.cart_totals > h2,
	.woocommerce-billing-fields > h3,
	.woocommerce-shipping-fields > h3,
	.woocommerce-page.woocommerce-order-received .woocommerce > h3,
	.bacs_details + h3,
	.woocommerce-MyAccount-content fieldset legend {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] - 2) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_product .cmsmasters_product_add_wrap .button {
			font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] - 4) . "px;
		}
	}
	
	.cmsmasters_product .cmsmasters_product_title,
	.shop_table thead th,
	.cart_totals table th,
	.cart_totals table td,
	.cart_totals table .amount,
	.cart_totals table .amount span,
	.cmsmasters_woo_comments .cmsmasters_comment_item_title,
	ul.order_details,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total .amount span,
	.widget_shopping_cart .total,
	.widget_shopping_cart .total strong,
	.single_variation_wrap .single_variation .woocommerce-variation-price .price,
	.single_variation_wrap .single_variation .woocommerce-variation-price .price .amount span {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.shop_table td > .amount,
	.shop_table td .quantity > input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] - 5) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.onsale {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] - 6) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] - 6) . "px;
	}
	
	.shop_table .product-name a,
	.shop_table.woocommerce-checkout-review-order-table tbody th,
	.shop_table.woocommerce-checkout-review-order-table tbody td,
	.shop_table.woocommerce-checkout-review-order-table tbody td .amount,
	.shop_table.woocommerce-checkout-review-order-table tbody td .amount span,
	ul.order_details strong,
	ul.order_details li strong .amount span,
	.shop_table.order_details tr th,
	.shop_table.order_details tr td,
	.shop_table.order_details tr td > .amount,
	.shop_table.order_details tr td > .amount > span,
	.shop_table.order_details tfoot tr th,
	.shop_table.customer_details th,
	.shop_table.customer_details td,
	.shop_table.my_account_orders th,
	.shop_table.my_account_orders td,
	.shop_table.my_account_orders td a,
	.shop_table.my_account_orders td > .amount,
	.shop_table.my_account_orders td > .amount > span,
	.widget_shopping_cart_content .cart_list,
	.widget_shopping_cart_content .cart_list a,
	.widget_shopping_cart .cart_list li,
	.widget_shopping_cart .cart_list a,
	.widget > .product_list_widget li,
	.widget > .product_list_widget li a,
	table.variations tr td:first-child,
	.cmsmasters_added_product_info .cmsmasters_added_product_info_text,
	.shop_table.woocommerce-checkout-review-order-table thead th,
	.shop_table.woocommerce-checkout-review-order-table thead td,
	.shop_table.woocommerce-checkout-review-order-table tfoot th,
	.shop_table.woocommerce-checkout-review-order-table tfoot td,
	.shop_table.woocommerce-checkout-review-order-table tfoot td .amount,
	.shop_table.woocommerce-checkout-review-order-table tfoot td .amount span,
	.shop_table.order_details thead tr th,
	.shop_table.order_details thead tr td,
	.shop_table.order_details tfoot tr:last-child th,
	.shop_table.order_details tfoot tr:last-child td,
	.shop_table.order_details tfoot tr:last-child td .amount,
	.shop_table.order_details tfoot tr:last-child td .amount span,
	.shop_table.my_account_orders thead th {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.amount span {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_font_size'] - 8) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_woo_comments .cmsmasters_comment_item_date {
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_h5_font_line_height'] - 4) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.woocommerce-MyAccount-navigation > ul > li > a,
	.shop_table.my_account_orders td .button,
	table.variations .reset_variations {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_button_font_google_font']) . $cmsmasters_option['whiskers' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['whiskers' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	.widget_shopping_cart .buttons .button,
	.widget_price_filter .price_slider_amount .button {
		font-size:" . ((int) $cmsmasters_option['whiskers' . '_button_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_button_font_line_height'] - 11) . "px;
	}
	
	.shop_table .actions .button,
	table.variations .reset_variations {
		line-height:" . ((int) $cmsmasters_option['whiskers' . '_button_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_single_product .cart .quantity input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		height:" . ((int) $cmsmasters_option['whiskers' . '_button_font_line_height'] + 4) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . whiskers_get_google_font($cmsmasters_option['whiskers' . '_input_font_google_font']) . $cmsmasters_option['whiskers' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['whiskers' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['whiskers' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['whiskers' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['whiskers' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('whiskers_theme_fonts_filter', 'whiskers_woocommerce_fonts');

