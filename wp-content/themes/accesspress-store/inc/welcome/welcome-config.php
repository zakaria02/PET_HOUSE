<?php
	/**
	 * Welcome Page Initiation
	*/

	get_template_part('/inc/welcome/welcome');

	/** Plugins **/
	$plugins_args = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(
				'contact-form-7' => array(
					'slug' => 'contact-form-7',
					'filename' => 'wp-contact-form-7.php',
					'class' => 'WPCF7'
				),
				'woocommerce' => array(
					'slug'      => 'woocommerce',
					'filename' 	=> 'woocommerce.php',
					'class' 	=> 'WooCommerce',
				),

				'yith-woocommerce-compare' => array(
					'slug' 		=> 'yith-woocommerce-compare',
					'filename' 	=> 'init.php',
					'class' 	=> 'YITH_Woocompare',
				),

				'yith-woocommerce-wishlist' => array(
					'slug' 		=> 'yith-woocommerce-wishlist',
					'filename' 	=> 'init.php',
					'class' 	=> 'YITH_WCWL',
				),

				'yith-woocommerce-quick-view' => array(
					'slug' 		=> 'yith-woocommerce-quick-view',
					'filename' 	=> 'init.php',
					'class' 	=> 'YITH_WCQV',
				)
			),
			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'accesspress-store'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'accesspress-store'),
			),
		

		),

		
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'Accesspress Store', 'accesspress-store' ),
		'theme_short_description' => esc_html__( 'Accesspress Store - is free WordPress theme that work beautifully with WooCommerce. The theme is packed with lots of exciting feature that enhances the ecommerce experience. It features Product slider, advanced whistlist, Featured product show list, call to action and many more. With its advanced customizer options, setting up the ecommerce website has become much more easy. Great customer support via online chat, email, support forum. Official support forum: http://accesspressthemes.com/support/ View full demo here: http://demo.accesspressthemes.com/accesspress-store/', 'accesspress-store' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'accesspress-store'),
		'deactivate' 			=> esc_html__('Deactivate', 'accesspress-store'),
		'activate' 				=> esc_html__('Activate', 'accesspress-store'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'accesspress-store'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'accesspress-store'),
		'doc_link'			=> 'doc.accesspressthemes.com/accespress-store-doc/',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'accesspress-store' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'accesspress-store'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'accesspress-store' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'accesspress-store' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'accesspress-store' ),

		

		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'accesspress-store'),
		'installed_btn' 	=> esc_html__('Activated', 'accesspress-store'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'accesspress-store'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'accesspress-store'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'accesspress-store'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'accesspress-store' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'accesspress-store' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'accesspress-store' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'accesspress-store' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'accesspress-store' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Accesspress_Store_Welcome( $plugins_args, $strings );