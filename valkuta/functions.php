<?php


$valkuta_theme_data = wp_get_theme();

define('VALKUTA_VERSION', (WP_DEBUG) ? time() : $valkuta_theme_data->get('Version'));

// Inc folder directory
define('VALKUTA_INC_DIR', get_template_directory() . '/inc/');

// Admin Pages
require_once VALKUTA_INC_DIR . 'admin/pages.php';

// After setup theme
require_once VALKUTA_INC_DIR . 'theme-setup.php';

//Enqueue styles and scripts.
require_once VALKUTA_INC_DIR . 'css-and-js.php';

//Register widget area
require_once VALKUTA_INC_DIR . 'widget-area-init.php';

//Load inline style.
require_once VALKUTA_INC_DIR . 'inline-style.php';

//Implement the custom header feature.
require_once VALKUTA_INC_DIR . 'custom-header.php';

//Custom template tags for this theme.
require_once VALKUTA_INC_DIR . 'template-tags.php';

//Functions which enhance the theme by hooking into WordPress.
require_once VALKUTA_INC_DIR . 'template-functions.php';

//Customizer additions.
require_once VALKUTA_INC_DIR . 'customizer.php';

//Load Jetpack compatibility file.
if (defined('JETPACK__VERSION')) {
	require_once VALKUTA_INC_DIR . 'jetpack.php';
}

//Comment Template
require_once VALKUTA_INC_DIR . 'comment-template.php';

//Load default theme options
require_once VALKUTA_INC_DIR . 'metabox-and-options/theme-options/theme-options-default.php';

//Load meta box and theme options if Codestar framework installed.
if( class_exists( 'CSF' ) ) {
	require_once VALKUTA_INC_DIR . 'metabox-and-options/metabox-and-options.php';
}

//Load Required Plugins
require_once VALKUTA_INC_DIR . 'demo-content/import-demo-content.php';

//Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}