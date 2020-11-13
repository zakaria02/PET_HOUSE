<?php
/**
 * All admin facing functions
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
 * @subpackage Hooks
 * @author Nazmul Ahsan <n.mukto@gmail.com>
 */
class Hooks {

	/**
	 * Constructor function
	 *
	 * @since 1.0
	 */
	public function __construct( $plugin ) {
		$this->name = $plugin['Name'];
		$this->slug = $plugin['TextDomain'];
		$this->version = $plugin['Version'];
	}
	
	/**
	 * @see register_activation_hook
	 *
	 * @uses codexpert\Woolementor\Admin
	 * @uses codexpert\Woolementor\Front
	 * @uses codexpert\Woolementor\API
	 *
	 * @since 1.0
	 */
	public function activate( $callback ) {
		register_activation_hook( WOOLEMENTOR, array( $this, $callback ) );
	}
	
	/**
	 * @see register_activation_hook
	 *
	 * @uses codexpert\Woolementor\Admin
	 * @uses codexpert\Woolementor\Front
	 * @uses codexpert\Woolementor\API
	 *
	 * @since 1.0
	 */
	public function deactivate( $callback ) {
		register_deactivation_hook( WOOLEMENTOR, array( $this, $callback ) );
	}
	
	/**
	 * @see add_action
	 *
	 * @uses codexpert\Woolementor\Admin
	 * @uses codexpert\Woolementor\Front
	 *
	 * @since 1.0
	 */
	public function action( $tag, $callback, $num_args = 1, $priority = 10 ) {
		add_action( $tag, array( $this, $callback ), $num_args, $priority );
	}

	/**
	 * @see add_filter
	 *
	 * @uses codexpert\Woolementor\Admin
	 * @uses codexpert\Woolementor\Front
	 *
	 * @since 1.0
	 */
	public function filter( $tag, $callback, $num_args = 1, $priority = 10 ) {
		add_filter( $tag, array( $this, $callback ), $num_args, $priority );
	}

	/**
	 * @see add_shortcode
	 *
	 * @uses codexpert\Woolementor\Shortcode
	 *
	 * @since 1.0
	 */
	public function register( $tag, $callback ) {
		add_shortcode( $tag, array( $this, $callback ) );
	}

	/**
	 * @see add_action( 'wp_ajax_..' )
	 *
	 * @uses codexpert\Woolementor\AJAX
	 *
	 * @since 1.0
	 */
	public function priv( $handle, $callback ) {
		$this->action( "wp_ajax_{$handle}", $callback );
	}

	/**
	 * @see add_action( 'wp_ajax_nopriv_..' )
	 *
	 * @uses codexpert\Woolementor\AJAX
	 *
	 * @since 1.0
	 */
	public function nopriv( $handle, $callback ) {
		$this->action( "wp_ajax_nopriv_{$handle}", $callback );
	}

	/**
	 * @see add_action( 'wp_ajax_nopriv_..' )
	 * @see add_action( 'wp_ajax_priv_..' )
	 *
	 * @uses codexpert\Woolementor\AJAX
	 *
	 * @since 1.0
	 */
	public function all( $handle, $callback ) {
		$this->priv( $handle, $callback );
		$this->nopriv( $handle, $callback );
	}
}