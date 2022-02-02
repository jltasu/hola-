<?php
// Create Footer section

CSF::createSection( $valkuta_theme_option, array(
	'title'  => esc_html__( 'Footer Options', 'valkuta' ),
	'id'     => 'footer_options',
	'icon'   => 'fa fa-wordpress',
	'fields' => array(

		array(
			'id'      => 'default_footer_style',
			'type'    => 'select',
			'title'   => esc_html__( 'Footer Style', 'valkuta' ),
			'options' => array(
				'footer-style-one' => esc_html__( 'Footer Style One', 'valkuta' ),
				'footer-style-two' => esc_html__( 'Footer Style Two', 'valkuta' ),
			),
			'default' => 'footer-style-one',
			'desc'    => esc_html__( 'Select site default footer style', 'valkuta' ),
		),

		array(
			'id'      => 'footer_widget_column',
			'type'    => 'select',
			'title'   => esc_html__( 'Widget Column', 'valkuta' ),
			'desc'    => esc_html__( 'Select widget area column number.', 'valkuta' ),
			'options' => array(
				'col-lg-12' => esc_html__( '1 Column', 'valkuta' ),
				'col-lg-6'  => esc_html__( '2 Column', 'valkuta' ),
				'col-lg-4'  => esc_html__( '3 Column', 'valkuta' ),
				'col-lg-3'  => esc_html__( '4 Column', 'valkuta' ),
			),
			'default' => 'col-lg-4',
		),

		array(
			'id'            => 'copyright_text',
			'type'          => 'wp_editor',
			'title'         => esc_html__( 'Copyright Text', 'valkuta' ),
			'desc'          => esc_html__( 'Type site copyright text here.', 'valkuta' ),
			'tinymce'       => true,
			'quicktags'     => true,
			'media_buttons' => false,
			'height'        => '100px',
		),

		array(
			'id'            => 'footer_info_right_text',
			'type'          => 'wp_editor',
			'title'         => esc_html__( 'Footer Info Right Text', 'valkuta' ),
			'desc'          => esc_html__( 'Type footer info right text here.', 'valkuta' ),
			'tinymce'       => true,
			'quicktags'     => true,
			'media_buttons' => false,
			'height'        => '100px',
		),

		array(
			'id'       => 'show_footer_image',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Footer Bottom Image', 'valkuta'),
			'default'  => false,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable footer bottom image.', 'valkuta'),
			'dependency'            => array('default_footer_style', '==', 'footer-style-one'),
		),

		array(
			'id'                    => 'footer_one_bottom_image',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Bottom Background Image', 'valkuta' ),
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'output'                => '.footer-one-bottom-image',
			'desc'                  => esc_html__( 'Select footer bottom background image.', 'valkuta' ),
			'dependency'            => array('default_footer_style|show_footer_image', '==|==', 'footer-style-one|true'),
		),

		array(
			'id'                    => 'footer_two_bottom_image',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Bottom Background Image', 'valkuta' ),
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'output'                => '.footer-two-bottom-image',
			'desc'                  => esc_html__( 'Select footer bottom background image.', 'valkuta' ),
			'dependency'            => array('default_footer_style', '==', 'footer-style-two'),
		),

		array(
			'id'       => 'go_to_top_button',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Go Top Button', 'valkuta' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'valkuta' ),
			'text_off' => esc_html__( 'No', 'valkuta' ),
			'desc'     => esc_html__( 'Enable or disable go to top button.', 'valkuta' ),
		),

		array(
			'id'       => 'goto_top_button_bg_color',
			'type'     => 'color',
			'title'    => esc_html__('Go Top Button Background Color', 'valkuta'),
			'desc' => esc_html__('Select button background color', 'valkuta'),
			'output'   => array(
				'background-color' => '.scroll-to-top',
			),
			'dependency' => array( 'go_to_top_button', '==', 'true' ),
		),
	)
) );