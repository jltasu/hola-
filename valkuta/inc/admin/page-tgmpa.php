<?php

function valkuta_install_required_plugins() {

	$plugins = array(

		array(
			'name'     => esc_html__('Breadcrumb NavXT', 'valkuta'),
			'slug'     => 'breadcrumb-navxt',
			'version'  => '6.6.0',
			'required' => false,
		),

		array(
			'name'     => esc_html__('Codestar Framework', 'valkuta'),
			'slug'     => 'codestar-framework',
			'source'   => 'api',
			'version'  => '2.2.2',
			'required' => true
		),


		array(
			'name'     => esc_html__('Contact Form 7', 'valkuta'),
			'slug'     => 'contact-form-7',
			'version'  => '5.4.1',
			'required' => false
		),

		array(
			'name'     => esc_html__('Elementor Page Builder', 'valkuta'),
			'slug'     => 'elementor',
			'version'  => '3.2.3',
			'required' => true,
		),

		array(
			'name'     => esc_html__('Mailchimp for WordPress', 'valkuta'),
			'slug'     => 'mailchimp-for-wp',
			'version'  => '4.8.4',
			'required' => false,
		),

		array(
			'name'     => esc_html__('One Click Demo Import', 'valkuta'),
			'slug'     => 'one-click-demo-import',
			'version'  => '3.0.2',
			'required' => false,
		),


		array(
			'name'     => esc_html__('ThemeDraft Core', 'valkuta'),
			'slug'     => 'themedraft-core',
			'source'   => 'api',
			'version'  => '1.1.5',
			'required' => true
		),

		array(
			'name'     => esc_html__('WooCommerce', 'valkuta'),
			'slug'     => 'woocommerce',
			'version'  => '5.3.0',
			'required' => false,
		),

		array(
			'name'     => esc_html__('TI WooCommerce Wishlist', 'valkuta'),
			'slug'     => 'ti-woocommerce-wishlist',
			'version'  => '1.25.5',
			'required' => false,
		),

		array(
			'name'     => esc_html__('YITH WooCommerce Quick View', 'valkuta'),
			'slug'     => 'yith-woocommerce-quick-view',
			'version'  => '1.6.1',
			'required' => false,
		),

	);

	$config = array(
		'id'           => 'valkuta',
		'parent_slug'  => 'valkuta',
		'menu'         => 'valkuta-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'is_automatic' => false,
		'dismiss_msg'  => '',
		'message'      => '',
		'default_path' => '',
	);

	tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'valkuta_install_required_plugins');