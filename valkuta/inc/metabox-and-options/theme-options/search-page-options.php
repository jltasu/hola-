<?php
//Search Page Options
CSF::createSection($valkuta_theme_option, array(
	'parent' => 'layout_and_options',
	'title'  => esc_html__('Search Page', 'valkuta'),
	'icon'   => 'fa fa-search',
	'fields' => array(

		array(
			'id'      => 'search_layout',
			'type'    => 'select',
			'title'   => esc_html__('Search Layout', 'valkuta'),
			'options' => array(
				'grid'          => esc_html__('Grid Full', 'valkuta'),
				'grid-ls'       => esc_html__('Grid With Left Sidebar', 'valkuta'),
				'grid-rs'       => esc_html__('Grid With Right Sidebar', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__('Select search page layout.', 'valkuta'),
		),

		array(
			'id'       => 'search_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Search Banner', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable search page banner.', 'valkuta'),
		),

		array(
			'id'                    => 'search_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'valkuta'),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'dependency'            => array('search_banner', '==', true),
			'output'                => '.banner-area.search-banner',
			'desc'                  => esc_html__('If you want different banner background settings for search page then select search page banner background options from here.', 'valkuta'),
		),
		
	)
));