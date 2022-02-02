<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

$valkuta_theme_option = 'valkuta_theme_options';


CSF::createOptions($valkuta_theme_option, array(
	'framework_title' => wp_kses(
		sprintf(__("Valkuta Options <small>V %s</small>", 'valkuta'), $valkuta_theme_data->get('Version')),
		array('small' => array())
	),
	'menu_title'      => esc_html__('Theme Options', 'valkuta'),
	'menu_slug'       => 'valkuta-options',
	'menu_type'       => 'submenu',
	'menu_parent'     => 'valkuta',
	'class'           => 'valkuta-theme-option-wrapper',
	'footer_credit'      => wp_kses(
		__( 'Developed by: <a target="_blank" href="http://themedraft.com">ThemeDraft</a>', 'valkuta' ),
		array(
			'a'      => array(
				'href'   => array(),
				'target' => array()
			),
		)
	),
	'async_webfont' => false,
	'defaults'        => valkuta_default_theme_options(),
));

require_once 'general-options.php';
require_once 'typography-options.php';
require_once 'header-options.php';


// Create layout and options section
CSF::createSection($valkuta_theme_option, array(
	'title' => esc_html__('Layout & Options', 'valkuta'),
	'id'    => 'layout_and_options',
	'icon'  => 'fa fa-calculator',
));

require_once 'banner-options.php';
require_once 'page-options.php';
require_once 'blog-page-options.php';
require_once 'single-post-options.php';
//require_once 'portfolio-options.php';
require_once 'service-options.php';
require_once 'team-options.php';
require_once 'archive-page-options.php';
require_once 'search-page-options.php';
require_once 'error-page-options.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require_once 'woo-options/woo-options.php';
}

// Footer Options
require_once 'footer-options.php';

// Custom Css section
CSF::createSection( $valkuta_theme_option, array(
	'title'  => esc_html__( 'Custom CSS & JS', 'valkuta' ),
	'id'     => 'custom_css_options',
	'icon'   => 'fa fa-css3',
	'fields' => array(

		array(
			'id'       => 'valkuta_custom_css',
			'type'     => 'code_editor',
			'title'    => esc_html__( 'Custom CSS', 'valkuta' ),
			'settings' => array(
				'theme'  => 'mbo',
				'mode'   => 'css',
			),
			'sanitize' => false,
		),

		array(
			'id'       => 'valkuta_header_script',
			'type'     => 'code_editor',
			'title'    => 'Header Scripts',
			'settings' => array(
				'theme'  => 'monokai',
				'mode'   => 'javascript',
			),
			'sanitize' => false,
			'desc' => esc_html__( 'This scripts will be printed in the <head> section. Please use inside <script></script> tag.', 'valkuta' ),
		),

		array(
			'id'       => 'valkuta_footer_script',
			'type'     => 'code_editor',
			'title'    => 'Footer Scripts',
			'settings' => array(
				'theme'  => 'monokai',
				'mode'   => 'javascript',
			),
			'sanitize' => false,
			'desc' => esc_html__( 'This scripts will be printed in the </body> section. Please use inside <script></script> tag.', 'valkuta' ),
		),
	)
) );

// Backup section
CSF::createSection($valkuta_theme_option, array(
	'title'  => esc_html__('Backup', 'valkuta'),
	'id'     => 'backup_options',
	'icon'   => 'fa fa-window-restore',
	'fields' => array(
		array(
			'type' => 'backup',
		),
	)
));
// End backup section