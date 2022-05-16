<?php
defined('ABSPATH') || exit();

// Add ACF options pages
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'cdxp-general-settings',
		'capability'	=> 'edit_posts',
		'redirect' 		=> true
    ));
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Settings Header',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'cdxp-general-settings',
	// ));
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Settings Footer',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'cdxp-general-settings',
	// ));
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Settings Sidebar',
	// 	'menu_title'	=> 'Sidebar',
	// 	'parent_slug'	=> 'cdxp-general-settings',
	// ));
}
