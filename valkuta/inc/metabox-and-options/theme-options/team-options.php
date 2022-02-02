<?php
//Team Options
CSF::createSection($valkuta_theme_option, array(
	'parent' => 'layout_and_options',
	'title'  => esc_html__('Team Options', 'valkuta'),
	'icon'   => 'fa fa-users',
	'fields' => array(

		array(
			'id'      => 'team_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Team Layout', 'valkuta'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select team layout.', 'valkuta'),
		),

		array(
			'id'         => 'team_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'valkuta' ),
			'options'    => 'valkuta_sidebars',
			'default' => 'sidebar',
			'dependency' => array( 'team_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all team members. You can override this settings on individual team member.', 'valkuta' ),
		),

	)
));