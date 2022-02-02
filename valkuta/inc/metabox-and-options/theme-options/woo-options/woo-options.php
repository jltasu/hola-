<?php
// Create WooCommerce options section
CSF::createSection($valkuta_theme_option, array(
	'title' => esc_html__('WooCommerce', 'valkuta'),
	'id'    => 'td_woo_options',
	'icon'  => 'fa fa-shopping-cart',
));

CSF::createSection($valkuta_theme_option, array(
	'parent' => 'td_woo_options',
	'title'  => esc_html__('Shop Page', 'valkuta'),
	'icon'   => 'fa fa-shopping-bag',
	'fields' => array(

		array(
			'id'      => 'shop_page_layout',
			'type'    => 'select',
			'title'   => esc_html__('Shop Layout', 'valkuta'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select shop page layout.', 'valkuta'),
		),

		array(
			'id'    => 'product_per_page',
			'type'  => 'text',
			'title' => esc_html__( 'Product Per Page', 'valkuta' ),
			'default' => 9,
			'desc'  => esc_html__( 'Type how many product you want to show per page. Number only.', 'valkuta' ),
		),

		array(
			'id'    => 'product_column',
			'type'  => 'text',
			'title' => esc_html__( 'Product Column Per Row', 'valkuta' ),
			'default' => 3,
			'desc'  => esc_html__( 'How many product you want to show per row. Number only.', 'valkuta' ),
		),

		array(
			'id'       => 'product_quick_view',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Quick View Icon', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable product quick view icon.', 'valkuta'),
		),

		array(
			'id'       => 'product_wish_list',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Wish list Icon', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable product wish list icon.', 'valkuta'),
		),
	)
));

CSF::createSection($valkuta_theme_option, array(
	'parent' => 'td_woo_options',
	'title'  => esc_html__('Single Product', 'valkuta'),
	'icon'   => 'fa fa-product-hunt',
	'fields' => array(

		array(
			'id'      => 'product_page_layout',
			'type'    => 'select',
			'title'   => esc_html__('Product Layout', 'valkuta'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__('Select product layout.', 'valkuta'),
		),

		array(
			'id'         => 'product_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'valkuta' ),
			'options'    => 'valkuta_sidebars',
			'default' => 'shop-sidebar',
			'dependency' => array( 'product_page_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select product sidebar.', 'valkuta' ),
		),

		array(
			'id'       => 'product_sku',
			'type'     => 'switcher',
			'title'    => esc_html__('Show SKU', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Show / Hide product SKU.', 'valkuta'),
		),

		array(
			'id'       => 'product_cat',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Category', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Show / Hide product category.', 'valkuta'),
		),

		array(
			'id'       => 'product_tag',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Tags', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Show / Hide product tags.', 'valkuta'),
		),

		array(
			'id'       => 'show_related_products',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Related Products', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Show / Hide related products.', 'valkuta'),
		),

		array(
			'id'    => 'related_products_column',
			'type'  => 'text',
			'title' => esc_html__( 'Related Products Column', 'valkuta' ),
			'default' => 3,
			'desc'  => esc_html__( 'How many product you want to show per row. Number only.', 'valkuta' ),
			'dependency'            => array('show_related_products', '==', true),
		),
	)
));