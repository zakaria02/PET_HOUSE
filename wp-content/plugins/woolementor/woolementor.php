<?php
/**
 * Plugin Name: Woolementor
 * Description: Woolementor connects the #1 page builder plugin on the earth, <strong>Elementor</strong> with the most popular eCommerce plugin, <strong>WooCommerce</strong>.
 * Plugin URI: https://woolementor.com
 * Author: Woolementor
 * Version: 1.5.4
 * Author URI: https://woolementor.com
 * Text Domain: woolementor
 * Domain Path: /languages
 *
 * Woolementor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Woolementor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

namespace codexpert\Woolementor;
use codexpert\Product\Survey;

/**
 * if accessed directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WOOLEMENTOR', __FILE__ );
define( 'WOOLEMENTOR_DIR', dirname( WOOLEMENTOR ) );
define( 'WOOLEMENTOR_ASSETS', plugins_url( 'assets', WOOLEMENTOR ) );
define( 'WOOLEMENTOR_DEBUG', apply_filters( 'woolementor-debug', false ) );
define( 'WOOLEMENTOR_LIB_URL', 'https://demo.woolementor.com/wp-json/templates/v1.0' );

/**
 * Main class for the plugin
 * @package Plugin
 * @author Nazmul Ahsan <n.mukto@gmail.com>
 */
class Plugin {
	
	/**
	 * Plugin instance
	 * Carries everything of the plugin
	 *
	 * @since 1.0
	 * @var Plugin
	 */
	public static $_instance;

	/**
	 * Constructor. Reference to the plugin.
	 *
	 * @since 1.0
	 */
	public function __construct() {
		self::define();
		
		if( !$this->_ready() ) return;

		self::includes();
		self::hooks();
	}

	/**
	 * Define constants
	 *
	 * @since 1.0
	 */
	public function define(){
		if( !function_exists( 'get_plugin_data' ) ) {
		    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		}
		$this->plugin = get_plugin_data( WOOLEMENTOR );

		$this->plugin['File'] = WOOLEMENTOR;
		$this->plugin['Server'] = 'https://my.codexpert.io';
	}

	/**
	 * Compatibility and dependency
	 *
	 * @since 1.0
	 */
	public function _ready() {
		
		if( !function_exists( 'woolementor_action_link' ) ) {
			require_once WOOLEMENTOR_DIR . '/includes/functions.php';
		}

		$_ready = true;

		/**
		 * Make sure the composer autoload is generated
		 */
		if( !file_exists( WOOLEMENTOR_DIR . '/vendor/autoload.php' ) ) {
			add_action( 'admin_notices', function() {
				echo "
					<div class='notice notice-error'>
						<p>" . sprintf( __( 'Packages are not installed. Please run <code>%s</code> in <code>%s</code> directory!', 'woolementor' ), 'composer update', WOOLEMENTOR_DIR ) . "</p>
					</div>
				";
			} );

			$_ready = false;
		}

		/**
		 * Elementor needs to be installed and activated
		 *
		 * @since 1.0
		 */
		if( !did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', function() {
				$plugin = 'elementor/elementor.php';
				$installed_plugins = get_plugins();
				$action_links = woolementor_action_link( $plugin );

				$button_text = array_key_exists( $plugin, $installed_plugins ) ? __( 'activate', 'woolementor' ) : __( 'install', 'woolementor' );
				$action_link = array_key_exists( $plugin, $installed_plugins ) ? $action_links['activate'] : $action_links['install'];
			
				echo "
					<div class='notice notice-error'>
						<p>" . sprintf( __( '<strong>Elementor</strong> needs to be activated. Please <a href="%s">%s</a> it now.', 'woolementor' ), $action_link, $button_text ) . "</p>
					</div>
				";
			} );

			$_ready = false;
		}

		/**
		 * WooCommerce needs to be installed and activated
		 *
		 * @since 1.0
		 */
		if( !function_exists( 'WC' ) ) {
			add_action( 'admin_notices', function() {
				$plugin = 'woocommerce/woocommerce.php';
				$installed_plugins = get_plugins();
				$action_links = woolementor_action_link( $plugin );

				$button_text = array_key_exists( $plugin, $installed_plugins ) ? __( 'activate', 'woolementor' ) : __( 'install', 'woolementor' );
				$action_link = array_key_exists( $plugin, $installed_plugins ) ? $action_links['activate'] : $action_links['install'];
			
				echo "
					<div class='notice notice-error'>
						<p>" . sprintf( __( '<strong>WooCommerce</strong> needs to be activated. Please <a href="%s">%s</a> it now.', 'woolementor' ), $action_link, $button_text ) . "</p>
					</div>
				";
			} );

			$_ready = false;
		}

		return apply_filters( 'woolementor-is_ready', $_ready );
	}

	/**
	 * Includes files
	 *
	 * @since 1.0
	 */
	public function includes(){
		require_once WOOLEMENTOR_DIR . '/vendor/autoload.php';
	}

	/**
	 * Plugin hooks
	 *
	 * @since 1.0
	 */
	public function hooks(){
		// i18n
		add_action( 'plugins_loaded', array( $this, 'i18n' ) );


		/**
		 * Admin facing hooks
		 *
		 * To add an action, use $admin->action()
		 * To apply a filter, use $admin->filter()
		 *
		 * @since 1.0
		 */
		$admin = new Admin( $this->plugin );
		$admin->activate( 'install' );
		$admin->deactivate( 'uninstall' );
		$admin->action( 'after_setup_theme', 'setup' );
		$admin->action( 'admin_head', 'head' );
		$admin->action( 'admin_head', 'settigs_page_redirect' );
		$admin->action( 'admin_enqueue_scripts', 'enqueue_scripts' );
		$admin->action( 'wp_dashboard_setup', 'dashboard_widget', 99 );
		$admin->action( 'woolementor_daily', 'daily' );
		$admin->action( 'admin_notices', 'admin_notices_widget_survey' );
		$admin->filter( 'plugin_action_links_' .  plugin_basename( WOOLEMENTOR ), 'action_links' );

		/**
		 * Front facing hooks
		 *
		 * To add an action, use $front->action()
		 * To apply a filter, use $front->filter()
		 *
		 * @since 1.0
		 */
		$front = new Front( $this->plugin );
		$front->action( 'wp_head', 'head' );
		$front->action( 'wp_enqueue_scripts', 'enqueue_scripts' );
		$front->filter( 'woocommerce_checkout_fields', 'regenerate_fields' );
		$front->action( 'woocommerce_checkout_create_order', 'save_additional_fields', 10, 2 );
		$front->filter( 'body_class', 'body_class' );

		/**
		 * Settings related hooks
		 *
		 * To add an action, use $settings->action()
		 * To apply a filter, use $settings->filter()
		 *
		 * @since 1.0
		 */
		$settings = new Settings( $this->plugin );
		$settings->action( 'cx-settings-before-form', 'help_content' );
		$settings->action( 'admin_bar_menu', 'add_admin_bar', 70 );

		/**
		 * Widgets related hooks
		 *
		 * To add an action, use $settings->action()
		 * To apply a filter, use $settings->filter()
		 *
		 * @since 1.0
		 */
		$widgets = new Widgets( $this->plugin );
		$widgets->action( 'elementor/elements/categories_registered', 'register_category' );
		$widgets->action( 'elementor/widgets/widgets_registered', 'register_widgets' );
		$widgets->action( 'elementor/controls/controls_registered', 'register_controls' );
		$widgets->action( 'elementor/editor/after_enqueue_scripts', 'editor_enqueue_styles' );
		$widgets->action( 'elementor/frontend/the_content', 'the_content' );

		/**
		 * Templates and library
		 *
		 * To add an action, use $settings->action()
		 * To apply a filter, use $settings->filter()
		 *
		 * @since 1.0
		 */
		$templates = new Templates_Manager( $this->plugin );
		$templates->action( 'elementor/init', 'register_templates_source' );
		$templates->filter( 'option_' . \Elementor\Api::LIBRARY_OPTION_KEY, 'prepend_categories' );
		$templates->action( 'elementor/ajax/register_actions', 'register_ajax_actions', 20 );

		/**
		 * AJAX related hooks
		 *
		 * For auth, use $ajax->priv()
		 * For unauth, use $ajax->nopriv()
		 *
		 * @since 1.0
		 */
		$ajax = new AJAX( $this->plugin );
		$ajax->priv( 'wl-search-docs', 'search_docs' );
		$ajax->all( 'add-to-wish', 'add_to_wish' );
		$ajax->all( 'add-variations-to-cart', 'add_variations_to_cart' );
		$ajax->all( 'multiple-product-add-to-cart', 'multiple_product_add_to_cart' );
		$ajax->all( 'widget-survey', 'widget_survey' );
		
		/**
		 * 
		 * Product related classes
		 *
		 * @since 1.0
		 */
		$survey = new Survey( $this->plugin );
	}

	/**
	 * Internationalization
	 *
	 * @since 1.0
	 */
	public function i18n() {
		load_plugin_textdomain( 'woolementor', false, WOOLEMENTOR_DIR . '/languages/' );
	}

	/**
	 * Cloning is forbidden.
	 *
	 * @since 1.0
	 */
	private function __clone() { }

	/**
	 * Unserializing instances of this class is forbidden.
	 *
	 * @since 1.0
	 */
	private function __wakeup() { }

	/**
	 * Instantiate the plugin
	 *
	 * @since 1.0
	 *
	 * @return object
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}

Plugin::instance();