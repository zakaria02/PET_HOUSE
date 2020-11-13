<div id="wl-pro-wrap">
	<a href="https://woolementor.com" target="_blank">
		<div id="wl-pro-banner">
			<div class="wl-large-title">
				<h4><?php _e( 'More cool features in', 'woolementor' ); ?></h4>
				<h1><?php _e( 'Woolementor Pro', 'woolementor' ) ?></h1>
			</div>
		</div>
	</a>
	<div id="wl-pro-features">
		<h1 class="wl-large-title"><?php _e( 'Premium Features', 'woolementor' ); ?></h1>
		<p class="wl-desc"><?php _e( 'Along with the <strong>Award Winning</strong> premium and priority support from our dedicated support team, you\'re going to get these awesome features if you upgrade to Woolementor Pro.', 'woolementor' ) ?></p>
		<div class="wl-pro-row">
			<div class="wl-pro-feature wl-half">
				<img src="<?php echo esc_url( plugins_url( 'assets/img/more-shop-design.png', WOOLEMENTOR ) ) ?>" />
				<h3 class="wl-widget-subtitle"><?php _e( 'New Shop Designs', 'woolementor' ); ?></h3>
				<h2 class="wl-widget-title"><?php _e( '6 More Shop Widgets', 'woolementor' ); ?></h2>
				<p class="wl-desc"><?php _e( 'Woolementor Pro includes 6 additional beautiful shop widgets. But, we\'re not stopping here, our team is continuously working and more widgets will be added soon.', 'woolementor' ); ?></p>
			</div>
			<div class="wl-pro-feature wl-half">
				<img src="<?php echo esc_url( plugins_url( 'assets/img/checkout-widgets.png', WOOLEMENTOR ) ) ?>" />
				<h3 class="wl-widget-subtitle"><?php _e( 'Checkout Page', 'woolementor' ); ?></h3>
				<h2 class="wl-widget-title"><?php _e( 'Customizable Checkout', 'woolementor' ); ?></h2>
				<p class="wl-desc"><?php _e( 'With the help of Woolementor Pro, you can customize your checkout page. We mean, everything can be customized. Adding new billing or shipping fields, changing field attributes, styling your own.. You name it.', 'woolementor' ); ?></p>
			</div>
			<div class="wl-pro-feature wl-half">
				<img src="<?php echo esc_url( plugins_url( 'assets/img/beautiful-wishlist.png', WOOLEMENTOR ) ) ?>" />
				<h3 class="wl-widget-subtitle"><?php _e( 'Wishlist', 'woolementor' ); ?></h3>
				<h2 class="wl-widget-title"><?php _e( 'Smart Wishlist Included', 'woolementor' ); ?></h2>
				<p class="wl-desc"><?php _e( 'Woolementor Pro includes a very smart and intuitive Wishlist feature. You customers can now add products to Wishlish and to the cart right from there.', 'woolementor' ); ?></p>
			</div>
			<div class="wl-pro-feature wl-half">
				<img src="<?php echo esc_url( plugins_url( 'assets/img/pricing-table.png', WOOLEMENTOR ) ) ?>" />
				<h3 class="wl-widget-subtitle"><?php _e( 'Pricing Table', 'woolementor' ); ?></h3>
				<h2 class="wl-widget-title"><?php _e( 'Amazing Pricing Tables', 'woolementor' ); ?></h2>
				<p class="wl-desc"><?php _e( 'Along with 2 Pricing Tables included in the free version, Woolementor Pro brings 3 more Pricing Table widgets that are amazing and mindblowing.', 'woolementor' ); ?></p>
			</div>
			<div class="wl-pro-feature wl-half">
				<img src="<?php echo esc_url( plugins_url( 'assets/img/sales-notification.png', WOOLEMENTOR ) ) ?>" />
				<h3 class="wl-widget-subtitle"><?php _e( 'Sales Notification', 'woolementor' ); ?></h3>
				<h2 class="wl-widget-title"><?php _e( 'Display Recent Sales', 'woolementor' ); ?></h2>
				<p class="wl-desc"><?php _e( 'Sales Notification widget lets you display your recent sales. It\'s a proven token of trust! Notifications can be pulled from your orders or added manually.', 'woolementor' ); ?></p>
			</div>
			<div class="wl-pro-feature wl-half">
				<img src="<?php echo esc_url( plugins_url( 'assets/img/ready-made-templates.png', WOOLEMENTOR ) ) ?>" />
				<h3 class="wl-widget-subtitle"><?php _e( 'Ready-made templates', 'woolementor' ) ?></h3>
				<h2 class="wl-widget-title"><?php _e( 'More Templates For You', 'woolementor' ) ?></h2>
				<p class="wl-desc"><?php _e( 'If you upgrade to Woolementor Pro, you\'ll have access to number of ready-made templates to be imported using the native Elementor importer.', 'woolementor' ) ?></p>
			</div>
		</div>
	</div>
	<div id="wl-pro-widgets" class="wl-pro-row">
		<div id="wl-widgets-heading" class="wl-half">
			<h1 class="wl-large-title"><?php _e( 'Pro Widgets', 'woolementor' ); ?></h1>
			<p class="wl-desc"><?php _e( 'Here is a list of widgets included in Woolemento Pro. Also, as we already said, we\'re not stopping and new widgets are getting added regularly.', 'woolementor' ) ?></p>
			<p class="wl-desc"><?php _e( 'Take a deep breath, we\'re going to make your life better than ever!', 'woolementor' ) ?></p>
		</div>
		<div id="wl-widgets-list" class="wl-half">
			<ul class="wl-pro-row">
				<?php
				foreach ( woolementor_widgets() as $id => $widget ) {
					if( woolementor_is_pro_feature( $id ) ) {
						echo "<li><i class='{$widget['icon']}'></i><a href='{$widget['demo']}' target='_blank'>{$widget['title']}</a></li>";
					}
				}
				?>
			</ul>
		</div>
	</div>
	<div id="wl-pro-upgrade" class="wl-pro-row">
		<div id="wl-invite" class="wl-half">
			<div class="wl-invite-title">
				<h4><?php _e( 'Interested?', 'woolementor' ) ?></h4>
				<h4><?php _e( 'Upgrade now and relax..', 'woolementor' ) ?></h4>
			</div>
		</div>
		<div id="wl-download" class="wl-half">
			<a href="https://woolementor.com" target="_blank"><button class="wl-button"><?php _e( 'Get Woolementor Pro', 'woolementor' ) ?></button></a>
		</div>
	</div>
</div>