<?php
/**
 * All AJAX facing functions
 */

namespace codexpert\Woolementor;

/**
 * if accessed directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @package Plugin
 * @subpackage AJAX
 * @author Nazmul Ahsan <n.mukto@gmail.com>
 */
class AJAX extends Hooks {

	/**
	 * Constructor function
	 *
	 * @since 1.0
	 */
	public function __construct( $plugin ) {
		$this->slug 	= $plugin['TextDomain'];
		$this->name 	= $plugin['Name'];
		$this->version 	= $plugin['Version'];
		$this->server 	= $plugin['Server'];
	}

	/**
	 * Search docs from https://help.codexpert.io
	 *
	 * @since 1.0.0
	 */
	public function search_docs() {
		$response = [
			 'status'	=> 0,
			 'message'	=>__( 'Unauthorized!', 'woolementor' )
		];

		if( !wp_verify_nonce( $_POST['_wpnonce'], $this->slug ) ) {
		    wp_send_json( $response );
		}

		$html = '';

		$json_url = 'https://help.codexpert.io/wp-json/wp/v2/docs/?parent=1960&per_page=20';
		if( !is_wp_error( $data = wp_remote_get( $json_url ) ) ) {
		    $docs = json_decode( $data['body'], true );
		}

		if( count( $docs ) > 0 ) :

		$html .= '<ul>';
		foreach ( $docs as $doc ) {
			$html .= "
			<li>
				<a href='{$doc['link']}' target='_blank'>{$doc['title']['rendered']}</a>
				" . wpautop( wp_trim_words( $doc['content']['rendered'], 55, " <a class='wl-more' href='{$doc['link']}' target='_blank'>[more..]</a>" ) ) . "
			</li>";
		}
		$html .= '</ul>';

		else :

		$html = __( 'No docs found', 'woolementor' );

		endif;

		$response['html'] = $html;

		wp_send_json( $response );
	}

	/**
	 * Adds a product to the wishlist
	 * Removes a product from the wishlist
	 *
	 * @TODO: change method name 
	 *
	 * @since 1.0
	 */
	public function add_to_wish() {
		$response = [
			 'status'	=> 0,
			 'message'	=>__( 'Unauthorized!', 'woolementor' )
		];

		if( !wp_verify_nonce( $_POST['_wpnonce'], $this->slug ) ) {
		    wp_send_json( $response );
		}

		if( !isset( $_POST['product_id'] ) ) {
			$response['message'] = __( 'No product selected!', 'woolementor' );
		    wp_send_json( $response );
		}

		extract( $_POST );

		$user_id = get_current_user_id();
		$wishlist = woolementor_get_wishlist( $user_id );

		// if the product is already in the wishlist, remove
		if ( ( $key = array_search( $product_id, $wishlist ) ) !== false ) {
			$response['action'] = 'removed';
		    unset( $wishlist[ $key ] );
		}

		// add to wishlist
		else {
			$response['action'] = 'added';
			$wishlist[] = $product_id;
		}

		$wishlist = array_unique( $wishlist );

		// update wishlist
		woolementor_set_wishlist( $wishlist, $user_id );

		// send response
		$response['status'] = 1;
		$response['message'] = sprintf( __( 'Wishlist item %s!', 'woolementor' ), $response['action'] );
		wp_send_json( $response );
	}

	public function add_variations_to_cart() {
		$response['status'] 	= 0;
		$response['message'] 	= __( 'Something is wrong!', 'woolementor' );
		
		if( !wp_verify_nonce( $_POST['_wpnonce'], 'woolementor' ) ) {
			$response['message'] = __( 'Unauthorized!', 'woolementor' );
		    wp_send_json( $response );
		}

		$variations = $_POST['variation'];
		$product_id = $_POST['product_id'];
		$attributes = $_POST['attributes'];
		$variation_checked =  $_POST['variation_checked'];

		$checked_items = array_intersect_key( $variations, $variation_checked );


		if ( count( $checked_items ) < 1 ) {
			$response['message'] = __( 'No variations selected!', 'woolementor' );
			wp_send_json( $response );
		}

		foreach ( $checked_items as $key => $item ) {
			WC()->cart->add_to_cart( $product_id, $item, $key, $attributes[ $key ] );
		}

		$response['status'] 		= 1;
		$response['view_cart_txt'] 	= __( 'View Cart', 'woolementor' );
		$response['message'] 		= __( 'Product Added', 'woolementor' );
		wp_send_json( $response );
	}

	public function multiple_product_add_to_cart() {
		$response['status'] 	= 0;
		$response['message'] 	= __( 'Something is wrong!', 'woolementor' );
		
		if( !wp_verify_nonce( $_POST['_wpnonce'], 'woolementor' ) ) {
			$response['message'] = __( 'Unauthorized!', 'woolementor' );
		    wp_send_json( $response );
		}

		$checked_items = $_POST['cart_item_ids'];
		$multiple_qty = $_POST['multiple_qty'];


		if ( count( $checked_items ) < 1 ) {
			$response['message'] = __( 'No products selected!', 'woolementor' );
			wp_send_json( $response );
		}

		foreach ( $checked_items as $key => $item ) {
			$qty = $multiple_qty[ $item ];
			WC()->cart->add_to_cart( $item, $qty );
		}

		$response['status'] 	= 1;
		$response['message'] 	= __( 'Product Added', 'woolementor' );
		wp_send_json( $response );
	}

	public function widget_survey() {
		$response = [];

        if( !wp_verify_nonce( $_POST['_nonce'], 'woolementor' ) ) {
            $response['status']		= 0;
            $response['message'] 	= __( 'Unauthorized!', 'woolementor' );
            wp_send_json( $response );
        }

        extract( $_POST );

        if ( isset( $survey ) && 'yes' == $survey ) {
        	$endpoint	= $this->server . '/wp-json/woolementor/survey';
	        $widgets 	= get_option( 'woolementor_widgets' );

			$params 	= array(
				'widgets'	=> serialize( $widgets ),
				'siteurl'	=> get_option( 'siteurl' ),
			);

			$_endpoint 	= add_query_arg( $params, $endpoint );
			wp_remote_post( $_endpoint );
        }

		update_option( "{$this->slug}_widget_survey_agreed", 1 );

        $response['status'] 	= 1;
		$response['message']    = __( 'Survey Successfully', 'woolementor' );
		wp_send_json( $response );
	}
} 