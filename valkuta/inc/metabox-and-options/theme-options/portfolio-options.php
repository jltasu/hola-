<?php
//Portfolio Options
CSF::createSection($valkuta_theme_option, array(
	'parent' => 'layout_and_options',
	'title'  => esc_html__('Portfolio Options', 'valkuta'),
	'icon'   => 'fa fa-briefcase',
	'fields' => array(

		array(
			'id'      => 'portfolio_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Portfolio Layout', 'valkuta'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select portfolio layout.', 'valkuta'),
		),

		array(
			'id'         => 'portfolio_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'valkuta' ),
			'options'    => 'valkuta_sidebars',
			'default' => 'sidebar',
			'dependency' => array( 'portfolio_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all portfolios. You can override this settings on individual portfolio.', 'valkuta' ),
		),

	)
));