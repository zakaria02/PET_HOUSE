<?php
/**
 * All settings facing functions
 */

namespace codexpert\Woolementor;
use codexpert\Product\License;

/**
 * @package Plugin
 * @subpackage Settings
 * @author Nazmul Ahsan <n.mukto@gmail.com>
 */
class Settings extends Hooks {

	/**
	 * Constructor function
	 *
	 * @since 1.0
	 */
	public function __construct( $plugin ) {
		$this->slug = $plugin['TextDomain'];
		$this->name = $plugin['Name'];
		$this->version = $plugin['Version'];

		$this->init_menu();
	}

	/**
	 * Adds an admin bar in the frontend
	 *
	 * @since 1.0
	 */
	public function add_admin_bar( $admin_bar ) {
		if( is_admin() || !current_user_can( 'manage_options' ) ) return;

		$admin_bar->add_menu( [
			'id'    => $this->slug,
			'title' => $this->name,
			'href'  => add_query_arg( 'page', $this->slug, admin_url( 'admin.php' ) ),
			'meta'  => [
				'title' => $this->name
			],
		] );
	}
	
	/**
	 * Initialize plugin settings screen
	 *
	 * @uses CX_Settings_API
	 * @link https://packagist.org/packages/mukto90/cx-settings-api
	 *
	 * @since 1.0
	 */
	public function init_menu() {

		$icon = woolementor_get_icon( true ); // true: include img tag or only the url?
		
		$settings = [
			'id'            => $this->slug,
			'label'         => $this->name,
			'title'         => "{$icon} {$this->name} v{$this->version}",
			'header'        => $this->name,
			'priority'      => 10,
			'capability'    => 'manage_options',
			'icon'          => '',
			'position'      => 59,
			'css'			=> '@media only screen and (min-width:320px){.cx-sections-wrapper{width:78%}.cx-sticky-controls{width:100%}}@media only screen and (min-width:768px){.cx-sections-wrapper{width:78%}.cx-sticky-controls{width:95%;left:2%}}@media only screen and (min-width:992px){.cx-sticky-controls{width:calc(100% - 170px);left:160px}}@media only screen and (min-width:1200px){.cx-sections-wrapper{width:78%}.cx-sticky-controls{left:160px;width:calc(100% - 180px)}}@media only screen and (min-width:1366px){.cx-sections-wrapper{width:80%}}',
			'sections'      => [
				'woolementor_widgets'	=> [
					'id'        => 'woolementor_widgets',
					'label'     => __( 'Widgets', 'woolementor' ),
					'icon'      => 'dashicons-screenoptions',
					'color'		=> '#E9345F',
					'sticky'	=> true,
					'template'	=> woolementor_get_template( 'settings/widgets' ),
					'fields'    => [],
				],
				'woolementor_help'	=> [
					'id'        => 'woolementor_help',
					'label'     => __( 'Help', 'woolementor' ),
					'icon'      => 'dashicons-sos',
					'color'		=> '#1d7b06',
					'hide_form'	=> true,
					'fields'    => [],
				],
				'woolementor_upgrade'	=> [
					'id'        => 'woolementor_upgrade',
					'label'     => __( 'PRO Features', 'woolementor' ),
					'icon'      => 'dashicons-buddicons-groups',
					'color'		=> '#34B6E9',
					'hide_form'	=> true,
					'template'	=> woolementor_get_template( 'settings/pro-features' ),
					'fields'    => [],
				],
			],
		];

		new \CX_Settings_API( apply_filters( 'woolementor-settings_args', $settings ) );
	}

	/**
	 * Filters contents of the help tab in the settings page
	 *
	 * @since 1.0
	 */
	public function help_content( $section ) {
		if( 'woolementor_help' != $section['id'] ) return;

		?>
		<div class="wl_tab_btns">
			<ul>			
				<li class="wl_help_tablink active" id="wl_faq"><?php _e( 'FAQ', 'woolementor' ); ?></li>
				<li class="wl_help_tablink" id="wl_vidtt"><?php _e( 'Video Tutorial', 'woolementor' ); ?></li>
				<li class="wl_help_tablink" id="wl_support"><?php _e( 'Ask Support', 'woolementor' ); ?></li>
			</ul>
		</div>

		<div id="wl_faq_content" class="tabcontent active">
			 <div class='wrap'>
			     <div id='woolementor-helps'>
			    <?php

			    $helps = get_option( 'woolementor-docs-json', [] );
			    if( is_array( $helps ) ) :
			    foreach ( $helps as $help ) {
			        ?>
			        <div id='woolementor-help-<?php echo $help['id']; ?>' class='woolementor-help'>
			            <h2 class='woolementor-help-heading' data-target='#woolementor-help-text-<?php echo $help['id']; ?>'>
			                <a href='<?php echo $help['link']; ?>' target='_blank'>
			                <span class='dashicons dashicons-admin-links'></span></a>
			                <span class="heading-text"><?php echo $help['title']['rendered']; ?></span>
			            </h2>
			            <div id='woolementor-help-text-<?php echo $help['id']; ?>' class='woolementor-help-text' style='display:none'>
			                <?php echo wpautop( wp_trim_words( $help['content']['rendered'], 55, " <a class='wl-more' href='{$help['link']}' target='_blank'>[more..]</a>" ) ); ?>
			            </div>
			        </div>
			        <?php

			    }
			    else:
			        _e( 'Something is wrong! No help found!', 'woolementor' );
			    endif;
			    ?>
			    </div>
			</div>
		</div>

		<div id="wl_vidtt_content" class="tabcontent">
			<iframe width="900" height="525" src="https://www.youtube.com/embed/videoseries?list=PLljE6A-xP4wKNreIV76Tl6uQUw-40XQsZ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<div id="wl_support_content" class="tabcontent">
				<p><?php _e( 'Having an issue or got something to say? Feel free to reach out to us! Our award winning support team is always ready to help you.', 'woolementor' ); ?></p>
			<div id="support_btn_div">
				<a href="https://help.codexpert.io" id="support_btn" target="_blank"><?php _e( 'Submit a Ticket', 'woolementor' ); ?></a>
			</div>
		</div>
		<?php

	} 
}