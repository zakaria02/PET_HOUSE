<?php
/**
 * @cmsmasters_package 	Whiskers
 * @cmsmasters_version 	1.0.2
 */


global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'whiskers' ); ?> <span class="sku"><?php 
			if ($sku = $product->get_sku()) {
				echo whiskers_return_content($sku);
			} else {
				echo esc_html__( 'N/A', 'whiskers' );
			}
		?></span></span>

	<?php endif; ?>

	<?php
	if (get_the_terms($product->get_id(), 'product_cat')) {
		echo '<span class="posted_in">' . 
			esc_html(_n('Category:', 'Categories:', $cat_count, 'whiskers')) . ' ' . 
			whiskers_get_the_category_list($product->get_id(), 'product_cat', ', ') . 
		'</span>';
	}
	?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'whiskers' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
