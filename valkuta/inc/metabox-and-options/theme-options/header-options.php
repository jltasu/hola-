<?php
// Create header Settings section
CSF::createSection( $valkuta_theme_option, array(
	'title' => esc_html__( 'Header Options', 'valkuta' ),
	'id'    => 'header_options',
	'icon'  => 'fa fa-header',
) );


CSF::createSection( $valkuta_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header General', 'valkuta' ),
	'icon'   => 'fa fa-google',
	'fields' => array(
		array(
			'id'       => 'site_default_header',
			'type'     => 'image_select',
			'title'    => esc_html__('Header Style', 'valkuta'),
			'options'  => array(
				'header-style-one' => get_theme_file_uri('assets/images/header-one.png'),
				'header-style-two' => get_theme_file_uri('assets/images/header-two.png'),
			),
			'default'  => 'header-style-one',
			'subtitle' => esc_html__('Select site default header style. You can override this settings on individual page / Posts.', 'valkuta'),
		),

		array(
			'id'      => 'logo_column',
			'type'    => 'select',
			'title'   => esc_html__( 'Logo Column Width', 'valkuta' ),
			'options' => array(
				'col-lg-1' => esc_html__( '1 Column', 'valkuta' ),
				'col-lg-2' => esc_html__( '2 Column', 'valkuta' ),
				'col-lg-3' => esc_html__( '3 Column', 'valkuta' ),
				'col-lg-4' => esc_html__( '4 Column', 'valkuta' ),

			),
			'default' => 'col-lg-2',
			'desc'    => esc_html__( 'Select logo column width.', 'valkuta' ),
		),

		array(
			'id'      => 'menu_column',
			'type'    => 'select',
			'title'   => esc_html__( 'Menu Column Width', 'valkuta' ),
			'options' => array(
				'col-lg-8'  => esc_html__( '8 Column', 'valkuta' ),
				'col-lg-9'  => esc_html__( '9 Column', 'valkuta' ),
				'col-lg-10' => esc_html__( '10 Column', 'valkuta' ),
				'col-lg-11' => esc_html__( '11 Column', 'valkuta' ),

			),
			'default' => 'col-lg-10',
			'desc'    => esc_html__( 'Select menu column width.', 'valkuta' ),
		),

		array(
			'id'             => 'header_menu_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Menu Typography', 'valkuta' ),
			'desc'           => esc_html__( 'Select header menu typography.', 'valkuta' ),
			'output'         => '.main-navigation ul li a',
			'text_align'     => false,
			'text_transform' => true,
			'color'          => false,
			'extra_styles'   => false,
		),

		array(
			'id'           => 'header_default_logo',
			'type'         => 'media',
			'title'        => esc_html__( 'Header Logo', 'valkuta' ),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__( 'Upload Logo', 'valkuta' ),
			'desc'         => esc_html__( 'Upload logo image', 'valkuta' ),

		),

		array(
			'id'            => 'logo_image_size',
			'type'          => 'dimensions',
			'title'         => esc_html__( 'Logo Image Size', 'valkuta' ),
			'output'        => '.logo-wrap img',
			'width'         => true,
			'height'        => true,
			'desc'          => esc_html__( 'Select logo image size.', 'valkuta' ),
		),
	)
) );

CSF::createSection( $valkuta_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header Button', 'valkuta' ),
	'icon'   => 'fa fa-mouse-pointer',
	'fields' => array(
		array(
			'id'       => 'enable_cta_btn',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable CTA Button', 'valkuta' ),
			'text_on'  => esc_html__( 'Yes', 'valkuta' ),
			'text_off' => esc_html__( 'No', 'valkuta' ),
			'desc'     => esc_html__( 'Enable or disable header button.', 'valkuta' ),
			'default'  => false
		),

		array(
			'id'         => 'header_cta_btn_text',
			'type'       => 'text',
			'title'      => esc_html__( 'CTA Button Text', 'valkuta' ),
			'default'    => esc_html__( 'Contact Us', 'valkuta' ),
			'desc'       => esc_html__( 'Type header CTA button text here', 'valkuta' ),
			'dependency' => array( 'enable_cta_btn', '==', 'true' ),
		),

		array(
			'id'         => 'header_cta_btn_url',
			'type'       => 'text',
			'title'      => esc_html__( 'CTA Button Url', 'valkuta' ),
			'default'    => '#',
			'desc'       => esc_html__( 'Type header CTA button URL here', 'valkuta' ),
			'dependency' => array( 'enable_cta_btn', '==', 'true' ),
		),

		array(
			'id'          => 'cta_btn_padding',
			'type'        => 'spacing',
			'title'       => esc_html__( 'CTA Button Padding', 'valkuta' ),
			'output'      => '.td_button.td_header_cta',
			'output_mode' => 'padding',
			'dependency' => array( 'enable_cta_btn', '==', 'true' ),
		),

		array(
			'id'             => 'header_button_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'CTA Button Typography', 'valkuta' ),
			'desc'           => esc_html__( 'Select header button typography.', 'valkuta' ),
			'output'         => '.td_button.td_header_cta',
			'text_align'     => false,
			'text_transform' => true,
			'color'          => false,
			'extra_styles'   => false,
			'dependency' => array( 'enable_cta_btn', '==', 'true' ),
		),

		array(
			'id'       => 'enable_header_search',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Search Button', 'valkuta' ),
			'text_on'  => esc_html__( 'Yes', 'valkuta' ),
			'text_off' => esc_html__( 'No', 'valkuta' ),
			'desc'     => esc_html__( 'Enable or disable header search button.', 'valkuta' ),
			'default'  => false
		),
	)
) );


CSF::createSection( $valkuta_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header Top', 'valkuta' ),
	'icon'   => 'fas fa-level-up-alt',
	'fields' => array(

		array(
			'type'    => 'notice',
			'style'   => 'info',
			'content' => esc_html__( 'Header top not available with selected header style', 'valkuta' ),
			'dependency' => array( 'site_default_header', 'any', 'header-style-one', 'all' ),
		),


		array(
			'id'           => 'header_top_info_text',
			'type'         => 'group',
			'title'        => esc_html__('Top Info Text', 'valkuta'),
			'subtitle'     => esc_html__('Add / edit header top info text from here.', 'valkuta'),
			'desc'         => esc_html__('Click "Add Info" button to add new Information.', 'valkuta'),
			'button_title' => esc_html__('Add Info', 'valkuta'),
			'fields'       => array(
				array(
					'id'            => 'info_text',
					'type'          => 'wp_editor',
					'media_buttons' => false,
					'height'        => '80px',
					'title'         => esc_html__('Info Text', 'valkuta'),
					'desc'          => esc_html__('Type top left text here.', 'valkuta'),
				),

				array(
					'id'    => 'info_icon',
					'type'  => 'icon',
					'title' => esc_html__('Icon', 'valkuta'),
					'desc'  => esc_html__('Select icon', 'valkuta'),
				),


			),
			'default'      => array(
				array(
					'info_text' => esc_html__('Seoul Park 28292 South Korea', 'valkuta'),
					'info_icon' => 'flaticon-business-placeholder-3',
				),
			),

			'dependency' => array( 'site_default_header', 'any', 'header-style-two', 'all' ),
		),

		array(
			'id'           => 'header_top_socials',
			'type'         => 'group',
			'title'        => esc_html__('Top Social Icons', 'valkuta'),
			'subtitle'     => esc_html__('Add / edit top social icons from here.', 'valkuta'),
			'desc'         => esc_html__('Click "Add Social Icon" button to add new icons.', 'valkuta'),
			'button_title' => esc_html__('Add Social Icon', 'valkuta'),
			'fields'       => array(

				array(
					'id'    => 'icon',
					'type'  => 'icon',
					'title' => esc_html__('Site Icon', 'valkuta'),
					'desc'  => esc_html__('Select icon', 'valkuta'),
				),

				array(
					'id'    => 'profile_url',
					'type'  => 'text',
					'title' => esc_html__('Profile Link', 'valkuta'),
					'desc'  => esc_html__('Type social profile link here.', 'valkuta'),
				),


			),

			'default' => array(
				array(
					'icon'        => 'fab fa-twitter',
					'profile_url' => '#',
				),
			),

			'dependency' => array( 'site_default_header', 'any', 'header-style-two', 'all' ),
		),
	)
) );

// Color

CSF::createSection( $valkuta_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header Color', 'valkuta' ),
	'icon'   => 'fa fa-paint-brush',
	'fields' => array(

		array(
			'id'       => 'header_bg_color',
			'type'     => 'color',
			'title'    => esc_html__('Background Color', 'valkuta'),
			'desc' => esc_html__('Select Header background color', 'valkuta'),
			'output'   => array(
				'background-color' => '.main-menu-area,.header-style-two .main-menu-area div.container',
			),
		),

		array(
			'id'       => 'menu_text_color',
			'type'     => 'color',
			'title'    => esc_html__('Menu Text Color', 'valkuta'),
			'desc' => esc_html__('Select menu color', 'valkuta'),
			'output'   => array(
				'color' => '.main-navigation ul li a',
			),
		),

		array(
			'id'       => 'menu_paw_color',
			'type'     => 'color',
			'title'    => esc_html__('Menu Paw Color', 'valkuta'),
			'desc'     => esc_html__('Select menu paw icon color.', 'valkuta'),
			'output'   => array(
				'color' => '.main-navigation ul li a:after',
			)
		),

		array(
			'id'       => 'menu_text_hover_color',
			'type'     => 'color',
			'title'    => esc_html__('Menu Text Hover Color', 'valkuta'),
			'desc' => esc_html__('Select menu text hover color', 'valkuta'),
			'output'   => array(
				'color' => '.main-navigation ul li a:hover, .main-navigation ul li.current-menu-item > a, .main-navigation ul li.current-menu-ancestor > a',
			),
		),

		array(
			'id'       => 'dropdown_bg_color',
			'type'     => 'color',
			'title'    => esc_html__('Dropdown Background Color', 'valkuta'),
			'desc' => esc_html__('Select dropdown background color', 'valkuta'),
			'output'   => array(
				'background-color' => '.main-navigation ul li ul',
			),
		),

		array(
			'id'       => 'dropdown_text_color',
			'type'     => 'color',
			'title'    => esc_html__('Dropdown Text Color', 'valkuta'),
			'desc' => esc_html__('Select dropdown text color', 'valkuta'),
			'output'   => array(
				'color' => '.main-navigation ul li ul li a',
			),
		),

		array(
			'id'       => 'dropdown_text_hover_color',
			'type'     => 'color',
			'title'    => esc_html__('Dropdown Text Hover Color', 'valkuta'),
			'desc' => esc_html__('Select dropdown text hover color', 'valkuta'),
			'output'   => array(
				'color' => '.main-navigation ul li ul li a:hover, .main-navigation ul li ul li.current-menu-item > a',
			),
		),

		array(
			'id'       => 'dropdown_border_color',
			'type'     => 'color',
			'title'    => esc_html__('Dropdown Border Color', 'valkuta'),
			'desc' => esc_html__('Select dropdown border color', 'valkuta'),
			'output'   => array(
				'border-color' => '.main-navigation ul li ul li',
			),
		),


		array(
			'id'       => 'header_button_bg_color',
			'type'     => 'color',
			'title'    => esc_html__('Button Background Color', 'valkuta'),
			'desc' => esc_html__('Select button background color', 'valkuta'),
			'output'   => array(
				'background-color' => '.td_button.td_header_cta',
			),
			'dependency' => array( 'enable_cta_btn', '==', 'true', 'all' ),
		),
		array(
			'id'       => 'header_button_border_color',
			'type'     => 'color',
			'title'    => esc_html__('Button Border Color', 'valkuta'),
			'desc' => esc_html__('Select button border color', 'valkuta'),
			'output'   => array(
				'border-color' => '.td_button.td_header_cta',
			),
			'dependency' => array( 'enable_cta_btn', '==', 'true', 'all' ),
		),

		array(
			'id'       => 'header_button_ext_color',
			'type'     => 'color',
			'title'    => esc_html__('Button Text Color', 'valkuta'),
			'desc' => esc_html__('Select button Text color', 'valkuta'),
			'output'   => array(
				'color' => '.td_button.td_header_cta',
			),
			'dependency' => array( 'enable_cta_btn', '==', 'true', 'all' ),
		),

		array(
			'id'       => 'header_button_bg_color_on_hover',
			'type'     => 'color',
			'title'    => esc_html__('Button Background Color On Hover', 'valkuta'),
			'desc' => esc_html__('Select button background color on hover', 'valkuta'),
			'output'   => array(
				'background-color' => '.td_button.td_header_cta:hover',
			),
			'dependency' => array( 'enable_cta_btn', '==', 'true', 'all' ),
		),

		array(
			'id'       => 'header_button_border_color_on_hover',
			'type'     => 'color',
			'title'    => esc_html__('Button Border Color On Hover', 'valkuta'),
			'desc' => esc_html__('Select button border color on hover', 'valkuta'),
			'output'   => array(
				'border-color' => '.td_button.td_header_cta:hover',
			),
			'dependency' => array( 'enable_cta_btn', '==', 'true', 'all' ),
		),

		array(
			'id'       => 'header_button_tex_color_on_hover',
			'type'     => 'color',
			'title'    => esc_html__('Button Text Color On Hover', 'valkuta'),
			'desc' => esc_html__('Select button text color on hover', 'valkuta'),
			'output'   => array(
				'color' => '.td_button.td_header_cta:hover',
			),
			'dependency' => array( 'enable_cta_btn', '==', 'true', 'all' ),
		),

	)
) );

CSF::createSection( $valkuta_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Mobile Menu Color', 'valkuta' ),
	'icon'   => 'fa fa-paint-brush',
	'fields' => array(
		array(
			'id'       => 'mobile_menu_open_icon_color',
			'type'     => 'color',
			'title'    => esc_html__('Mobile Menu Open Icon Color', 'valkuta'),
			'desc' => esc_html__('Select mobile menu icon Color', 'valkuta'),
			'output'   => array(
				'background-color' => '.mobile-menu-trigger span',
			),
		),

		array(
			'id'       => 'mobile_menu_crose_icon_color',
			'type'     => 'color',
			'title'    => esc_html__('Mobile Menu Close Icon Color', 'valkuta'),
			'desc' => esc_html__('Select mobile menu close icon Color', 'valkuta'),
			'output'   => array(
				'background-color' => '.mobile-menu-close::before, .mobile-menu-close::after',
			),
		),

		array(
			'id'       => 'mobile_menu_bg_color',
			'type'     => 'color',
			'title'    => esc_html__('Menu Background Color', 'valkuta'),
			'desc' => esc_html__('Select mobile menu background Color', 'valkuta'),
			'output'   => array(
				'background-color' => '.mobile-menu-container',
			),
		),

		array(
			'id'       => 'mobile_menu_text_color',
			'type'     => 'color',
			'title'    => esc_html__('Menu Text Color', 'valkuta'),
			'desc' => esc_html__('Select menu text color', 'valkuta'),
			'output'   => array(
				'color' => '.slicknav_nav a, .slicknav_row a',
			),
		),

		array(
			'id'       => 'mobile_menu_text_hover_color',
			'type'     => 'color',
			'title'    => esc_html__('Active Menu Text Color', 'valkuta'),
			'desc' => esc_html__('Select active menu text color', 'valkuta'),
			'output'   => array(
				'color' => '.slicknav_nav a:hover, .slicknav_item.slicknav_row:hover a, .slicknav_item.slicknav_row:hover .slicknav_arrow, .slicknav_menu .current-menu-item > a, .slicknav_menu .current-menu-item .slicknav_row > a, .slicknav_menu .current-menu-ancestor > a, .slicknav_menu .current-menu-ancestor > .slicknav_row > a, .current-menu-ancestor > .slicknav_row .slicknav_arrow, .current-menu-item .slicknav_row .slicknav_arrow',
			),
		),

		array(
			'id'       => 'mobile_menu_border_color',
			'type'     => 'color',
			'title'    => esc_html__('Menu Border Color', 'valkuta'),
			'desc' => esc_html__('Select menu border color', 'valkuta'),
			'output'   => array(
				'border-color' => '.slicknav_nav li a',
			),
		),
	)
) );