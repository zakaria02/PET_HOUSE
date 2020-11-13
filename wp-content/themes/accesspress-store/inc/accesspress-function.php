<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function accesspress_store_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'AP: Right Sidebar', 'accesspress-store' ),
		'id'            => 'sidebar-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'AP: Left Sidebar', 'accesspress-store' ),
		'id'            => 'sidebar-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'accesspress-store' ),
		'id'            => 'shop',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Call To Box', 'accesspress-store' ),
		'id'            => 'header-callto-action',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'AP: Promo Widget 1', 'accesspress-store' ),
		'id'            => 'promo-widget-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'AP: Product Listing Widget 1', 'accesspress-store' ),
		'id'            => 'product-widget-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="title-bg"><h2 class="prod-title">',
		'after_title'   => '</h2></div>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'AP: Promo Widget 2', 'accesspress-store' ),
		'id'            => 'promo-widget-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'AP: Product Listing Widget 2', 'accesspress-store' ),
		'id'            => 'product-widget-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="title-bg"><h2 class="prod-title">',
		'after_title'   => '</h2></div>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'AP: Video Call to Action', 'accesspress-store' ),
		'id'            => 'cta-video',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'AP: Product Listing Widget 3', 'accesspress-store' ),
		'id'            => 'product-widget-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	
	register_sidebar( array(
		'name'          => esc_html__( 'AP: Promo Widget 3', 'accesspress-store' ),
		'id'            => 'promo-widget-3',
		'description'   => 'You can use widget AP: Icon text block which is what it is designed that it will horizontally allign with 3 row',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 1', 'accesspress-store' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 2', 'accesspress-store' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 3', 'accesspress-store' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 4', 'accesspress-store' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
}
add_action( 'widgets_init', 'accesspress_store_widgets_init' );

/**
 * Enqueue scripts and styles.
*/
function accesspress_store_scripts() {

	$font_args = array(
		'family' => 'Open+Sans:400,600,700,300|Oswald:400,700,300|Dosis:400,300,500,600,700|Lato:300,400,700,900',
	);

	wp_enqueue_style('accesspress-store-google-fonts', add_query_arg($font_args, "//fonts.googleapis.com/css"));

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
	
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
	
	wp_enqueue_style( 'ticker', get_template_directory_uri() . '/css/ticker-style.css');

	wp_enqueue_style( 'accesspress-store-style', get_stylesheet_uri() );

	wp_enqueue_style( 'accesspress-store-keyboard', get_template_directory_uri() . '/css/keyboard.css' );

	wp_enqueue_style( 'accesspress-store-minify-style', get_template_directory_uri() . '/css/responsive.css');		
	
	wp_enqueue_script( 'accesspress-store-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), '1.5.0', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js',array(),'1.1.2',true);

	wp_enqueue_script( 'ticker-script', get_template_directory_uri() . '/js/jquery.ticker.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_script( 'accesspress-store-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );


	$ticker_title = get_theme_mod('accesspress_ticker_title');
	if(empty($ticker_title)){
		$ticker_title = "Latest";
	}

	$script_vals = array(
		'ticker_title' 	=> $ticker_title

	);
	wp_localize_script('accesspress-store-custom-js','accesspress_store_script',$script_vals );
	wp_enqueue_script('accesspress-store-custom-js');


}
add_action( 'wp_enqueue_scripts', 'accesspress_store_scripts' );

function accesspress_ticker_header_customizer(){
	//Check if ticker is enabled
	if(get_theme_mod('accesspress_ticker_checkbox','1') == 1){
		
		$ticker_text1 = get_theme_mod('accesspress_ticker_text1');
		$ticker_text2 = get_theme_mod('accesspress_ticker_text2');
		$ticker_text3 = get_theme_mod('accesspress_ticker_text3');
		$ticker_text4 = get_theme_mod('accesspress_ticker_text4');
		$ticker_array = array($ticker_text1, $ticker_text2, $ticker_text3, $ticker_text4);
		?>
		
		
		<ul id="ticker">
			<?php 
				$i=0;
				foreach($ticker_array as $ticker){
					$i++;
					?>
					<li>
						<h5 class="ticker_tick ticker-h5-<?php echo esc_attr($i); ?>"> <?php echo esc_html($ticker) ?> </h5>
					</li>
					<?php 
				} 
			?>
		</ul>
	<?php }
}

function accesspress_slickliderscript(){
	$accesspress_show_slider = get_theme_mod('show_slider','0') ;
	$accesspress_show_pager = ( get_theme_mod('show_pager','0') == "0") ? "false" : "true";
	$accesspress_show_controls = (get_theme_mod('show_controls','0') == "0") ? "false" : "true";
	$accesspress_auto_transition = (get_theme_mod('auto_transition','0') == "0") ? "false" : "true";
	$accesspress_slider_transition = get_theme_mod('slider_transition','true');
	$accesspress_slider_speed = (!get_theme_mod('slider_speed')) ? "5000" : get_theme_mod('slider_speed');
	$accesspress_slider_pause = (!get_theme_mod('slider_pause')) ? "5000" : get_theme_mod('slider_pause');
	if( $accesspress_show_slider == "1") : ?>
		<script type="text/javascript">			
			jQuery(function($){
				if($('body').hasClass('rtl')){
				    var rtlClass = true;
				} else {
				   var rtlClass = false;
				}
				$('#main-slider .bx-slider').slick({
					dots: <?php echo esc_attr($accesspress_show_pager); ?>,
					arrows: <?php echo esc_attr($accesspress_show_controls); ?>,
					speed: <?php echo esc_attr($accesspress_slider_speed); ?>,
					fade: <?php echo esc_attr($accesspress_slider_transition); ?>,
					cssEase: 'linear',
					autoplaySpeed:<?php echo esc_attr($accesspress_slider_pause); ?>,
					autoplay:<?php echo esc_attr($accesspress_auto_transition); ?>,
					adaptiveHeight:true,
					infinite:true,
	                draggable: true,
	                rtl: rtlClass,
				});

				<?php if($accesspress_slider_transition == "true"){ ?>
				$('#main-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
				
				    $('#main-slider .slick-slide .caption-title').removeClass('fadeInDown animated displayNone');
				    $('#main-slider .slick-slide[data-slick-index='+nextSlide+'] .caption-title').addClass('fadeInDown animated');
				    $('#main-slider .slick-slide[data-slick-index='+currentSlide+'] .caption-title').addClass('displayNone');
				    
				    $('#main-slider .slick-slide .caption-content').removeClass('fadeInUp animated displayNone'); 
				    $('#main-slider .slick-slide[data-slick-index='+nextSlide+'] .caption-content').addClass('fadeInUp animated');
				    $('#main-slider .slick-slide[data-slick-index='+currentSlide+'] .caption-content').addClass('displayNone');
				    
				    $('#main-slider .slick-slide .caption-read-more1').removeClass('zoomIn animated displayNone'); 
				    $('#main-slider .slick-slide[data-slick-index='+nextSlide+'] .caption-read-more1').addClass('zoomIn animated');
				    $('#main-slider .slick-slide[data-slick-index='+currentSlide+'] .caption-read-more1').addClass('displayNone');
				 
				});	
				<?php } ?> 				
			});
		</script>
	<?php endif;
}

add_action('wp_head', 'accesspress_slickliderscript');

function accesspress_slidercb(){
	$accesspress_show_slider = get_theme_mod('show_slider','0') ;
	$accesspress_show_caption = get_theme_mod('show_caption','0') ;
	if( $accesspress_show_slider == 1) : ?>
		<section id="main-slider">
			<div class="bx-slider">
				<?php 			
				for ($i=1; $i <= 5 ; $i++) { 
					$slider_post = get_theme_mod('slider_'.$i.'_post');
					$slider_button_text = get_theme_mod('slider'.$i.'_button_text');
					$slider_button_link = get_theme_mod('slider'.$i.'_button_link');
					if(!empty($slider_post)) :
				?>
					<div class="slides">
						<?php
						$args = array('post__in'=> array($slider_post));
						$query1 = new WP_Query( $args );
						while ( $query1->have_posts() ) {
							$query1->the_post();
							$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'accesspress-slider', true);
							?>
							<img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr(the_title()); ?>"/>
							
							<?php if($accesspress_show_caption == '1'): ?>
								<div class="slider-caption">
									<div class="ak-container">									
										<div class="caption-content-wrapper">
											<h2 class="caption-title"><?php the_title();?></h2>
											<div class="caption-content">
												<?php echo wp_kses_post(accesspress_letter_count(get_the_content(), '165')); ?>
											</div>
										</div>
										<?php if($slider_button_text): ?>
											<a class="caption-read-more1" href="<?php echo esc_url($slider_button_link); ?>"><?php echo esc_html($slider_button_text); ?></a>
										<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
							<?php
						} wp_reset_postdata();
						?>
					</div>
					<?php  endif;  } ?>
			</div>
			<?php  endif; ?>
		</section>
	<?php
}
add_action('accesspress_slickslider','accesspress_slidercb', 10);

if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}

if( is_woocommerce_activated() ){

	if ( ! function_exists( 'accesspress_store_cart_link' ) ) {
		function accesspress_store_cart_link() { ?>			
				<a class="cart-contents wcmenucart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'accesspress-store' ); ?>">
					<i class="fa fa-shopping-cart"></i> [ <?php echo wp_kses_data( sprintf(  WC()->cart->get_cart_contents_count() ) ); ?> / <span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> ]
				</a>
			<?php
		}
	}

	if ( ! function_exists( 'accesspress_store_cart_link_fragment' ) ) {

		function accesspress_store_cart_link_fragment( $fragments ) {
			global $woocommerce;

			ob_start();
			accesspress_store_cart_link();
			$fragments['a.cart-contents'] = ob_get_clean();

			return $fragments;
		}
	}
	add_filter( 'woocommerce_add_to_cart_fragments', 'accesspress_store_cart_link_fragment' );
	
}

if ( ! function_exists( 'accesspress_footer_count' ) ) {
	function accesspress_footer_count(){
		$count = 0;
		if(is_active_sidebar('footer-1'))
			$count++;

		if(is_active_sidebar('footer-2'))
			$count++;

		if(is_active_sidebar('footer-3'))
			$count++;

		if(is_active_sidebar('footer-4'))
			$count++;

		return $count;
	}
}



function accesspress_header_scripts(){
	$page_background_option = get_theme_mod('accesspress_background_type');
		$show_slider = get_theme_mod('show_slider');
	
	echo "<style>";

		echo "html body{";

			if($page_background_option == 'image'):
				echo 'background-color:transparent !important;';
				$background = get_theme_mod('background_image');
			elseif($page_background_option == 'color'): 
				echo 'background:'.esc_attr(get_theme_mod('background_color'));
			elseif($page_background_option == 'pattern'):
				echo 'background-color:transparent !important;';
				echo 'background:url('.esc_url(get_template_directory_uri()).'/inc/images/patterns/'.esc_attr(get_theme_mod("accesspress_background_image_pattern")).'.png)';
			else:
				echo 'background:none;';
			endif;

		echo "}";

	
		if($show_slider == '0'):
			echo '#masthead{margin-bottom:40px}';
		endif;
		
		if(get_theme_mod('hide_header_cart_link')):
			echo ".ap-store-cart{display:none;}";
		endif;

	echo "</style>";

}
add_action('wp_head', 'accesspress_header_scripts');


	/**
	 * Output the WooCommerce Breadcrumb
	 */
	function woocommerce_breadcrumb( $args = array() ) {
		$args = wp_parse_args( $args, apply_filters( 'woocommerce_breadcrumb_defaults', array(
			'delimiter'   => '&nbsp;',
			'wrap_before' => '<div class="woocommerce-breadcrumb accesspress-breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
			'wrap_after'  => '</div>',
			'before'      => '',
			'after'       => '',
			'home'        => _x( 'Home', 'breadcrumb', 'accesspress-store' )
		) ) );

		$breadcrumbs = new WC_Breadcrumb();
		if ( $args['home'] ) {
			$breadcrumbs->add_crumb( $args['home'], apply_filters( 'woocommerce_breadcrumb_home_url', home_url() ) );
		}
		$args['breadcrumb'] = $breadcrumbs->generate();
		wc_get_template( 'global/breadcrumb.php', $args );
	}


function accesspress_breadcrumbs() {
	global $post;
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '';    
    $home = __('Home', 'accesspress-store'); // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    $homeLink = home_url();

    if (is_home() || is_front_page()) {

    	if ($showOnHome == 1)
    		echo '<div id="accesspress-breadcrumb"><a href="' . esc_url($homeLink) . '">' . esc_html($home) . '</a></div></div>';
    } else {

    	echo '<div id="accesspress-breadcrumb"><a href="' . esc_url($homeLink) . '">' . esc_html($home) . '</a> ' . wp_kses_post($delimiter) . ' ';

    	if (is_category()) {
    		$thisCat = get_category(get_query_var('cat'), false);
    		if ($thisCat->parent != 0)
    			echo wp_kses_post(get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' '));
    		echo wp_kses_post($before) . esc_html__('Archive by category','accesspress-store').' "' . single_cat_title('', false) . '"' . wp_kses_post($after);
    	} elseif (is_search()) {
    		echo wp_kses_post($before) . esc_html__('Search results for','accesspress-store'). '"' . wp_kses_post(get_search_query()) . '"' . wp_kses_post($after);
    	} elseif (is_day()) {
    		echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html( get_the_time('Y') ). '</a> ' . wp_kses_post($delimiter) . ' ';
    		echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . esc_html(get_the_time('F')) . '</a> ' . wp_kses_post($delimiter) . ' ';
    		echo wp_kses_post($before) . esc_html(get_the_time('d')) . wp_kses_post($after);
    	} elseif (is_month()) {
    		echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html( get_the_time('Y') ). '</a> ' . wp_kses_post($delimiter) . ' ';
    		echo wp_kses_post($before) . esc_html(get_the_time('F')) . wp_kses_post($after);
    	} elseif (is_year()) {
    		echo wp_kses_post($before) . esc_html( get_the_time('Y') ). wp_kses_post($after);
    	} elseif (is_single() && !is_attachment()) {
    		if (get_post_type() != 'post') {
    			$post_type = get_post_type_object(get_post_type());
    			$slug = $post_type->rewrite;
    			echo '<a href="' . esc_url($homeLink) . '/' . esc_attr($slug['slug']) . '/">' . esc_html($post_type->labels->singular_name) . '</a>';
    			if ($showCurrent == 1)
    				echo ' ' . wp_kses_post($delimiter) . ' ' . wp_kses_post($before) . esc_html(get_the_title()) . wp_kses_post($after);
    		} else {
    			$cat = get_the_category();
    			$cat = $cat[0];
    			$cats = get_category_parents($cat, TRUE, ' ' . wp_kses_post($delimiter) . ' ');
    			if ($showCurrent == 0)
    				$cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
    			echo wp_kses_post($cats);
    			if ($showCurrent == 1)
    				echo wp_kses_post($before) . esc_html(get_the_title()) . wp_kses_post($after);
    		}
    	} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
    		$post_type = get_post_type_object(get_post_type());
    		echo wp_kses_post($before) . esc_html($post_type->labels->singular_name) . wp_kses_post($after);
    	} elseif (is_attachment()) {
    		$parent = get_post($post->post_parent);
    		$cat = get_the_category($parent->ID);
    		$cat = $cat[0];
    		echo wp_kses_post(get_category_parents($cat, TRUE, ' ' . $delimiter . ' '));
    		echo '<a href="' . esc_url(get_permalink($parent)) . '">' . esc_html($parent->post_title) . '</a>';
    		if ($showCurrent == 1)
    			echo ' ' . wp_kses_post($delimiter) . ' ' . wp_kses_post($before) . esc_html(get_the_title()) . wp_kses_post($after);
    	} elseif (is_page() && !$post->post_parent) {
    		if ($showCurrent == 1)
    			echo wp_kses_post($before) . esc_html(get_the_title()) . wp_kses_post($after);
    	} elseif (is_page() && $post->post_parent) {
    		$parent_id = $post->post_parent;
    		$breadcrumbs = array();
    		while ($parent_id) {
    			$page = get_page($parent_id);
    			$breadcrumbs[] = '<a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html(get_the_title($page->ID)) . '</a>';
    			$parent_id = $page->post_parent;
    		}
    		$breadcrumbs = array_reverse($breadcrumbs);
    		for ($i = 0; $i < count($breadcrumbs); $i++) {
    			echo wp_kses_post($breadcrumbs[$i]);
    			if ($i != count($breadcrumbs) - 1)
    				echo ' ' . wp_kses_post($delimiter) . ' ';
    		}
    		if ($showCurrent == 1)
    			echo ' ' . wp_kses_post($delimiter) . ' ' . wp_kses_post($before) . esc_html(get_the_title()) . wp_kses_post($after);
    	} elseif (is_tag()) {
    		echo wp_kses_post($before) . esc_html__('Posts tagged','accesspress-store').' "' . esc_html(single_tag_title('', false)) . '"' . wp_kses_post($after);
    	} elseif (is_author()) {
    		global $author;
    		$userdata = get_userdata($author);
    		echo wp_kses_post($before) . esc_html__('Articles posted by','accesspress-store') . ' ' . esc_html($userdata->display_name) . wp_kses_post($after);
    	} elseif (is_404()) {
    		echo wp_kses_post($before) .  esc_html__('Error 404','accesspress-store') . wp_kses_post($after);
    	}

    	if (get_query_var('paged')) {
    		if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
    			echo ' (';
    				echo esc_html__('Page', 'accesspress-store') . ' ' . esc_html(get_query_var('paged'));
    				if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
    					echo ')';
		}
		echo '</div>';
	}
}

function accesspress_letter_count($content, $limit) {
	$striped_content = strip_tags($content);
	$striped_content = strip_shortcodes($striped_content);
	$limit_content = mb_substr($striped_content, 0 , $limit );

	if($limit_content < $content){
		$limit_content .= "..."; 
	}
	return $limit_content;
}

if( is_woocommerce_activated() ){

	function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
		global $post;
		if ( has_post_thumbnail() ) {
			return get_the_post_thumbnail( $post->ID, $size );
		} elseif ( wc_placeholder_img_src() ) {
			$placeholder = accesspress_woocommerce_placeholder_img_src();
			$alt = get_the_title();
			$placeholder_img = '<img src="'.$placeholder.'" alt="'.esc_attr($alt).'" />';
			return $placeholder_img;
		}
	}

	function accesspress_woocommerce_placeholder_img_src(){
		$placeholder = "";
		$custom_placeholder = get_theme_mod('custom_placeholder');
		if($custom_placeholder!=''){
			$placeholder = $custom_placeholder;
		}
		else{
			$placeholder = wc_placeholder_img_src();
		}
		return $placeholder;
	}
	add_filter( 'loop_shop_per_page', 'accesspress_store_loop_shop_per_page', 20 );
	function accesspress_store_loop_shop_per_page($cols){
		return 12;
	}
	if (! has_filter('wc_product_sku_enabled')) {
		add_filter( 'wc_product_sku_enabled', '__return_true' );
	}


	/**
	 * Display Related Product Number
	*/
	add_filter( 'woocommerce_output_related_products_args', 'accesspress_store_related_products_args' );
	function accesspress_store_related_products_args( $args ) {
		$args['posts_per_page'] = 3; // 3 related products
		return $args;
	}

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );	
	add_action( 'woocommerce_after_single_product_summary', 'accesspress_store_woocommerce_output_upsells', 15 );
	if ( ! function_exists( 'accesspress_store_woocommerce_output_upsells' ) ) {
		function accesspress_store_woocommerce_output_upsells() {
			woocommerce_upsell_display( 2,1 );
		}
	}
}


function accesspress_store_special_nav_class($classes, $item){
	if($item->title == "Cart"){ 
		$classes[] = "ap-store-cart";
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'accesspress_store_special_nav_class' , 10 , 2);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

function accesspress_store_before_top_header_enabled(){
	if(is_user_logged_in() || get_theme_mod('accesspress_ticker_checkbox')===1){
		return true;
	}
	else{
		return false;
	}
}


if ( ! function_exists( 'accesspress_store_fallback_menu' ) ) {
	function accesspress_store_fallback_menu(){
		echo '<div class="menu-notif">';
		/* translators: $%s : Menu Link */
		printf( __( 'Create %s and set the menu to display at Primary Menu Location.', 'accesspress-store' ), '<a target="_blank" href="'.esc_url(admin_url( 'nav-menus.php' )).'">Custom Menu</a>' );
		echo '</div>';
	}
}

function accesspress_store_custom_css(){
	$accesspress_store_css = get_theme_mod('accesspress_store_css'); ?>
		<style type="text/css">
			<?php echo wp_filter_nohtml_kses($accesspress_store_css); ?>
		</style>
	<?php
}
add_action('wp_head','accesspress_store_custom_css');


/**
 * Registers an editor stylesheet for the theme.
 */
function accesspress_store_add_editor_styles() {
    add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'admin_init', 'accesspress_store_add_editor_styles' );


function accesspress_store_remove_actions(){
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 10);
}

add_action( 'wp_head', 'accesspress_store_remove_actions');