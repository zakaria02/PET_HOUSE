<?php

add_filter( 'woocommerce_product_single_add_to_cart_text', function( $defaults ) use ( $button_text ) {
	$defaults = $button_text;
	return $defaults;
} );

woocommerce_variable_add_to_cart();