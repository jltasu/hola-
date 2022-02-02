<?php
//Archive Options
CSF::createSection($valkuta_theme_option, array(
	'parent' => 'layout_and_options',
	'title'  => esc_html__('Archive Page', 'valkuta'),
	'icon'   => 'fa fa-file-archive-o',
	'fields' => array(

		array(
			'id'      => 'archive_layout',
			'type'    => 'select',
			'title'   => esc_html__('Archive Layout', 'valkuta'),
			'options' => array(
				'grid'          => esc_html__('Grid Full', 'valkuta'),
				'grid-ls'       => esc_html__('Grid With Left Sidebar', 'valkuta'),
				'grid-rs'       => esc_html__('Grid With Right Sidebar', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__('Select archive page layout.', 'valkuta'),
		),

		array(
			'id'       => 'archive_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Archive Banner', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable archive page banner.', 'valkuta'),
		),

		array(
			'id'                    => 'archive_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'valkuta'),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'dependency'            => array('archive_banner', '==', true),
			'output'                => '.banner-area.archive-banner',
			'desc'                  => esc_html__('If you want different banner background settings for archive page then select archive page banner background Options from here.', 'valkuta'),
		),
	)
));