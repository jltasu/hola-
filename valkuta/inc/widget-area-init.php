<?php

//Register widget area
function valkuta_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'valkuta'),
		'id'            => 'sidebar',
		'description'   => esc_html__('Add widgets here.', 'valkuta'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Service Sidebar', 'valkuta'),
		'id'            => 'service-sidebar',
		'description'   => esc_html__('Add service widgets here.', 'valkuta'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	$footer_widget_column = valkuta_option('footer_widget_column', 'col-lg-4');
	register_sidebar(array(
		'name'          => esc_html__('Footer Widget', 'valkuta'),
		'id'            => 'footer-widget',
		'description'   => esc_html__('Add footer widgets here.', 'valkuta'),
		'before_widget' => '<div id="%1$s" class="widget '.esc_attr($footer_widget_column).' col-md-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	/**
	 * Load Shop Sidebar.
	 */
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar(array(
			'name'          => esc_html__('Shop Sidebar', 'valkuta'),
			'id'            => 'shop-sidebar',
			'description'   => esc_html__('Add shop widgets here.', 'valkuta'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	}
}

add_action('widgets_init', 'valkuta_widgets_init');