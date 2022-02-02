<?php
CSF::createSection( $valkuta_theme_option, array(
	'parent'      => 'layout_and_options',
	'title'   => esc_html__('Error 404','valkuta'),
	'icon'        => 'fa fa-exclamation-triangle',
	'fields'      => array(

		array(
			'id'       => 'error_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Error Banner', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable error / not found page banner.', 'valkuta'),
		),

		array(
			'id'                    => 'error_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'valkuta'),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'dependency'            => array('error_banner', '==', true),
			'output'                => '.banner-area.error-page-banner',
			'desc'                  => esc_html__('If you want different banner background settings for error / not found page then select error / not found page banner background options from here.', 'valkuta'),
		),

		array(
			'id'            => 'error_page_title',
			'type'          => 'text',
			'title'         => esc_html__('Error Banner Title', 'valkuta'),
			'desc'   => esc_html__('Type error banner title here.','valkuta'),
			'dependency'            => array('error_banner', '==', true),
		),

		array(
			'id'         => 'error_banner_text_align',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Banner Text Align', 'valkuta' ),
			'options'    => array(
				'left'   => esc_html__( 'Left', 'valkuta' ),
				'center' => esc_html__( 'Center', 'valkuta' ),
				'right'  => esc_html__( 'Right', 'valkuta' ),
			),
			'desc'       => esc_html__( 'Select banner text align.', 'valkuta' ),
		),


		array(
			'id'            => 'not_found_text',
			'type'          => 'wp_editor',
			'title'         => esc_html__('Not Found Text', 'valkuta'),
			'tinymce'       => true,
			'quicktags'     => true,
			'media_buttons' => false,
			'height'        => '150px',
			'desc'   => esc_html__('Type not found text here.','valkuta'),
		),

		array(
			'id'      => 'go_back_home',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Go Back Home Button','valkuta'),
			'text_on' => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'   => esc_html__('Enable or disable go back home button.','valkuta'),
			'default' => true
		),
	)
) );