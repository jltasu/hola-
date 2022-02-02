<?php
// Create typography section
CSF::createSection( $valkuta_theme_option, array(
	'title'  => esc_html__( 'Typography', 'valkuta' ),
	'id'     => 'typography_options',
	'icon'   => 'fa fa-text-width',
	'fields' => array(

		array(
			'id'             => 'body_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Body', 'valkuta' ),
			'desc'           => esc_html__( 'Select body typography.', 'valkuta' ),
			'output'         => 'body',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'default'        => array(
				'font-family'  => 'Nunito',
				'type'         => 'google',
				'unit'         => 'px',
				'font-weight'  => '400',
				'extra-styles' => array( '600', '700', '800', '900' ),
			),

		),

		array(
			'id'             => 'heading_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select heading typography.', 'valkuta' ),
			'output'         => 'h1,h2,h3,h4,h5,h6',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,

		),

		array(
			'id'             => 'sub_heading_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Sub Heading Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select sub heading typography.', 'valkuta' ),
			'output'         => '.td-section-title-wrap .subtitle,.td-section-subtitle,.breadcrumb-container,.widget.widget_themedraft-latest-post .td-recent-widget-date a',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'default'        => array(
				'font-family'  => 'Covered By Your Grace',
				'type'         => 'google',
				'unit'         => 'px',
			),

		),

		array(
			'id'             => 'breadcrumb_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Breadcrumb Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select breadcrumb typography.', 'valkuta' ),
			'output'         => '.breadcrumb-container',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'default'        => array(
				'font-family'  => 'Covered By Your Grace',
				'type'         => 'google',
				'unit'         => 'px',
			),

		),

		array(
			'id'       => 'different_fonts_for_different_heading',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Use Different Font For Different Heading', 'valkuta' ),
			'default'  => false,
			'text_on'  => esc_html__( 'Yes', 'valkuta' ),
			'text_off' => esc_html__( 'No', 'valkuta' ),
			'desc'     => esc_html__( 'If you want to use different font for different heading select ON', 'valkuta' ),
		),

		array(
			'id'             => 'h1_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading One Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select heading one typography.', 'valkuta' ),
			'output'         => 'h1',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'     => array( 'different_fonts_for_different_heading', '==', 'true' ),
		),

		array(
			'id'             => 'h2_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Two Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select heading two typography.', 'valkuta' ),
			'output'         => 'h2',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'     => array( 'different_fonts_for_different_heading', '==', 'true' ),
		),

		array(
			'id'             => 'h3_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Three Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select heading three typography.', 'valkuta' ),
			'output'         => 'h3',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'     => array( 'different_fonts_for_different_heading', '==', 'true' ),
		),

		array(
			'id'             => 'h4_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Four Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select heading four typography.', 'valkuta' ),
			'output'         => 'h4',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'     => array( 'different_fonts_for_different_heading', '==', 'true' ),
		),

		array(
			'id'             => 'h5_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Five Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select heading five typography.', 'valkuta' ),
			'output'         => 'h5',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'     => array( 'different_fonts_for_different_heading', '==', 'true' ),
		),

		array(
			'id'             => 'h6_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Six Font', 'valkuta' ),
			'desc'           => esc_html__( 'Select heading six typography.', 'valkuta' ),
			'output'         => 'h6',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'     => array( 'different_fonts_for_different_heading', '==', 'true' ),
		),
	)
) );