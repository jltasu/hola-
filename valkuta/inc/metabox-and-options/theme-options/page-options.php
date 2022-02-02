<?php
//Search Page Options
CSF::createSection($valkuta_theme_option, array(
	'parent' => 'layout_and_options',
	'title'  => esc_html__('Page', 'valkuta'),
	'icon'   => 'fa fa-file-text-o',
	'fields' => array(

		array(
			'id'      => 'page_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Page Layout', 'valkuta'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select page layout.', 'valkuta'),
		),

		array(
			'id'         => 'page_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'valkuta' ),
			'options'    => 'valkuta_sidebars',
			'default' => 'sidebar',
			'dependency' => array( 'page_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all pages. You can override this settings on individual page.', 'valkuta' ),
		),

	)
));