<?php

// Create general section
CSF::createSection($valkuta_theme_option, array(
	'title'  => esc_html__('Banner Options', 'valkuta'),
	'parent' => 'layout_and_options',
	'id'     => 'general_options',
	'icon'   => 'fa fa-flag-o',
	'fields' => array(

		array(
			'id'                    => 'banner_default_options',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Banner Background', 'valkuta' ),
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'output'                => '.banner-area',
			'desc'                  => esc_html__( 'Select banner background color and image. You can change this settings on individual page / post.', 'valkuta' ),
		),

		array(
			'id'         => 'banner_title_tag',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Banner Title Tag', 'valkuta' ),
			'options'    => array(
				'h1'   => esc_html__( 'H1', 'valkuta' ),
				'h2'   => esc_html__( 'H2', 'valkuta' ),
				'h3'   => esc_html__( 'H3', 'valkuta' ),
				'h4'   => esc_html__( 'H4', 'valkuta' ),
				'h5'   => esc_html__( 'H5', 'valkuta' ),
				'h6'   => esc_html__( 'H6', 'valkuta' ),
				'span'   => esc_html__( 'SPAN', 'valkuta' ),
			),
			'default'    => 'h2',
			'desc'       => esc_html__( 'Select banner title tag.', 'valkuta' ),
		),

		array(
			'id'         => 'banner_default_text_align',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Banner Text Align', 'valkuta' ),
			'options'    => array(
				'left'   => esc_html__( 'Left', 'valkuta' ),
				'center' => esc_html__( 'Center', 'valkuta' ),
				'right'  => esc_html__( 'Right', 'valkuta' ),
			),
			'default'    => 'left',
			'desc'       => esc_html__( 'Select banner text align. You can change this settings on individual page / post.', 'valkuta' ),
		),

		array(
			'id'          => 'banner_default_height',
			'type'        => 'slider',
			'title'       => esc_html__('Banner Height', 'valkuta'),
			'min'         => 100,
			'max'         => 800,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.banner-area,.header-style-two .banner-area',
			'output_mode' => 'height',
			'desc'        => esc_html__('Select banner height. You can change this settings on individual page / post.', 'valkuta'),
		),

		array(
			'id'       => 'banner_overlay',
			'type'     => 'switcher',
			'title'    => esc_html__('Banner Overlay', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable banner Overlay.', 'valkuta'),
		),
	)
));