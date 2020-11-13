<?php
/**
 * @package 	WordPress
 * @subpackage 	Whiskers
 * @version 	1.0.0
 * 
 * Website Header Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = whiskers_get_global_options();


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="cmsmasters_html">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('cmsmasters_before_body', $cmsmasters_option); ?>

<?php whiskers_get_header_search_form($cmsmasters_option); ?>

<!-- Start Page -->
<div id="page" class="<?php whiskers_get_page_classes($cmsmasters_option); ?>hfeed site">
<?php do_action('cmsmasters_before_page', $cmsmasters_option); ?>

<!-- Start Main -->
<div id="main">

<!-- Start Header -->
<header id="header">
	<?php 
	do_action('cmsmasters_before_header', $cmsmasters_option);
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-top');
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-mid');
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-bot');
	
	do_action('cmsmasters_after_header', $cmsmasters_option);
	?>
</header>
<!-- Finish Header -->


<!-- Start Middle -->
<div id="middle">
<?php 
whiskers_page_heading();


list($cmsmasters_layout, $cmsmasters_page_scheme) = whiskers_theme_page_layout_scheme();


echo '<div class="middle_inner' . (($cmsmasters_page_scheme != 'default') ? ' cmsmasters_color_scheme_' . $cmsmasters_page_scheme : '') . '">' . "\n" . 
	'<div class="content_wrap ' . $cmsmasters_layout . '">' . "\n\n";

