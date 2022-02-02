<?php
//Portfolio Options
CSF::createSection($valkuta_theme_option, array(
	'parent' => 'layout_and_options',
	'title'  => esc_html__('Service Options', 'valkuta'),
	'icon'   => 'fa fa-th',
	'fields' => array(

		array(
			'id'      => 'service_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Service Layout', 'valkuta'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'left-sidebar',
			'desc'    => esc_html__('Select service layout.', 'valkuta'),
		),

		array(
			'id'         => 'service_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'valkuta' ),
			'options'    => 'valkuta_sidebars',
			'default' => 'service-sidebar',
			'dependency' => array( 'service_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all services. You can override this settings on individual service.', 'valkuta' ),
		),

	)
));