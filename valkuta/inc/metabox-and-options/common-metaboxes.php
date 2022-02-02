<?php
$valkuta_common_meta = 'valkuta_common_meta';

// Create a metabox
CSF::createMetabox($valkuta_common_meta, array(
	'title'     => esc_html__('Settings', 'valkuta'),
	'post_type' => array('page', 'post', 'valkuta_service', 'valkuta_team'),
	'data_type' => 'serialize',
));

// Create layout section
CSF::createSection($valkuta_common_meta, array(
	'title'  => esc_html__('Layout Settings ', 'valkuta'),
	'fields' => array(

		array(
			'id'      => 'layout_meta',
			'type'    => 'select',
			'title'   => esc_html__('Layout', 'valkuta'),
			'options' => array(
				'default'       => esc_html__('Default', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'full-width'    => esc_html__('Full Width', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'default',
			'desc'    => esc_html__('Select layout', 'valkuta'),
		),

		array(
			'id'         => 'sidebar_meta',
			'type'       => 'select',
			'title'      => esc_html__('Sidebar', 'valkuta'),
			'options'    => 'valkuta_sidebars',
			'dependency' => array('layout_meta', '!=', 'full-width'),
			'desc'       => esc_html__('Select sidebar you want to show with this page.', 'valkuta'),
		),
	)
));

// Create layout section
CSF::createSection($valkuta_common_meta, array(
	'title'  => esc_html__('Header Settings ', 'valkuta'),
	'fields' => array(

		array(
			'id'      => 'header_meta',
			'type'    => 'select',
			'title'   => esc_html__('Header Style', 'valkuta'),
			'options' => array(
				'default'          => esc_html__('Default', 'valkuta'),
				'header-style-one' => esc_html__('Header Style One', 'valkuta'),
				'header-style-two' => esc_html__('Header Style Two', 'valkuta'),
			),
			'default' => 'default',
			'desc'    => esc_html__('Select header style', 'valkuta'),
		),

		array(
			'id'           => 'header_logo_meta',
			'type'         => 'media',
			'title'        => esc_html__('Header Logo', 'valkuta'),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__('Upload Logo', 'valkuta'),
			'desc'         => esc_html__('Upload logo image', 'valkuta'),

		),

		array(
			'id'          => 'main_menu_meta',
			'type'        => 'select',
			'title'       => esc_html__('Header Menu', 'valkuta'),
			'options'     => 'menus',
			'placeholder' => esc_html__('Default', 'valkuta'),
			'desc'        => esc_html__('You can select a different menu for this page from here.', 'valkuta'),
		),
	)
));

// Create a section
CSF::createSection($valkuta_common_meta, array(
	'title'  => esc_html__('Banner / Breadcrumb Settings', 'valkuta'),
	'fields' => array(
		array(
			'id'       => 'enable_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Banner', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable banner.', 'valkuta'),
		),

		array(
			'id'                    => 'banner_meta',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'valkuta'),
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'dependency'            => array('enable_banner', '==', true),
			'output'                => '.banner-area.post-banner,.banner-area.page-banner,.banner-area.service-banner,.banner-area.team-banner',
			'desc'                  => esc_html__('Select banner background color and image', 'valkuta'),
		),

		array(
			'id'       => 'hide_tile_meta',
			'type'     => 'switcher',
			'title'    => esc_html__('Hide Title', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show banner title.', 'valkuta'),
			'default'  => false,
			'dependency' => array('enable_banner', '==', true),
		),

		array(
			'id'         => 'custom_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Custom Title', 'valkuta'),
			'dependency' => array('enable_banner|hide_tile_meta', '==|==', true|false),
			'desc'       => esc_html__('If you want to use custom title write title here.If you don\'t, leave it empty.', 'valkuta')
		),

		array(
			'id'         => 'banner_text_align_meta',
			'type'       => 'select',
			'title'      => esc_html__('Banner Text Align', 'valkuta'),
			'options'    => array(
				'default' => esc_html__('Default', 'valkuta'),
				'left'    => esc_html__('Left', 'valkuta'),
				'center'  => esc_html__('Center', 'valkuta'),
				'right'   => esc_html__('Right', 'valkuta'),
			),
			'default'    => 'default',
			'dependency' => array('enable_banner', '==', true),
			'desc'       => esc_html__('Select page banner text align.', 'valkuta'),
		),

		array(
			'id'          => 'banner_height_meta',
			'type'        => 'slider',
			'title'       => esc_html__('Banner Height', 'valkuta'),
			'min'         => 100,
			'max'         => 800,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.banner-area.post-banner,.banner-area.page-banner,.banner-area.service-banner,.banner-area.team-banner,.site.header-style-two .banner-area',
			'output_mode' => 'height',
			'subtitle'    => esc_html__('Select banner height.', 'valkuta'),
			'desc'        => esc_html__('Select banner height.', 'valkuta'),
			'dependency'  => array('enable_banner', '==', true),
		),
	)
));

// Create Footer section
CSF::createSection($valkuta_common_meta, array(
	'title'  => esc_html__('Footer Settings ', 'valkuta'),
	'fields' => array(

		array(
			'id'      => 'footer_style_meta',
			'type'    => 'select',
			'title'   => esc_html__('Footer Style', 'valkuta'),
			'options' => array(
				'default'          => esc_html__('Default', 'valkuta'),
				'footer-style-one' => esc_html__('Footer Style One', 'valkuta'),
				'footer-style-two' => esc_html__('Footer Style Two', 'valkuta'),
			),
			'default' => 'default',
			'desc'    => esc_html__('Select footer style', 'valkuta'),
		),
	)
));