<?php
//Blog Page Options
CSF::createSection($valkuta_theme_option, array(
	'parent' => 'layout_and_options',
	'title'  => esc_html__('Blog Page', 'valkuta'),
	'icon'   => 'fa fa-pencil-square-o',
	'fields' => array(
		
		array(
			'id'      => 'blog_layout',
			'type'    => 'select',
			'title'   => esc_html__('Blog Layout', 'valkuta'),
			'options' => array(
				'grid'          => esc_html__('Grid Full', 'valkuta'),
				'grid-ls'       => esc_html__('Grid With Left Sidebar', 'valkuta'),
				'grid-rs'       => esc_html__('Grid With Right Sidebar', 'valkuta'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'valkuta'),
				'right-sidebar' => esc_html__('Right Sidebar', 'valkuta'),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__('Select blog page layout.', 'valkuta'),
		),

		array(
			'id'       => 'blog_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Blog Banner', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable blog page banner.', 'valkuta'),
		),

		array(
			'id'                    => 'blog_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'valkuta'),
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'dependency'            => array('blog_banner', '==', true),
			'output'                => '.banner-area.blog-banner',
			'desc'                  => esc_html__('If you want different banner background settings for blog page then select blog page banner background Options from here.', 'valkuta'),
		),


		array(
		    'id'         => 'blog_title',
		    'type'       => 'text',
		    'title'      => esc_html__('Banner Title', 'valkuta'),
		    'desc'       => esc_html__('Type blog banner title here.', 'valkuta'),
		    'dependency' => array('blog_banner', '==', true),
		),

		array(
			'id'         => 'post_title_tag',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Post Title Tag', 'valkuta' ),
			'options'    => array(
				'h1'   => esc_html__( 'H1', 'valkuta' ),
				'h2'   => esc_html__( 'H2', 'valkuta' ),
				'h3'   => esc_html__( 'H3', 'valkuta' ),
				'h4'   => esc_html__( 'H4', 'valkuta' ),
				'h5'   => esc_html__( 'H5', 'valkuta' ),
				'h6'   => esc_html__( 'H6', 'valkuta' ),
			),
			'default'    => 'h3',
			'desc'       => esc_html__( 'Select post title tag.', 'valkuta' ),
		),

		array(
			'id'       => 'featured_image_link',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Featured Image Link', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable / Disable Post featured image link.', 'valkuta'),
		),

		array(
			'id'       => 'post_author',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Author Name', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide / Show post author name.', 'valkuta'),
		),

		array(
			'id'       => 'post_date',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Post Date', 'valkuta'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide / Show post date.', 'valkuta'),
		),

		array(
			'id'         => 'cmnt_number',
			'type'       => 'switcher',
			'title'      => esc_html__('Show Comment Number', 'valkuta'),
			'default'    => false,
			'text_on'    => esc_html__('Yes', 'valkuta'),
			'text_off'   => esc_html__('No', 'valkuta'),
			'desc'       => esc_html__('Hide / Show post comment number.', 'valkuta'),
			'dependency' => array('blog_layout', 'any', 'right-sidebar,left-sidebar'),
		),

		array(
			'id'         => 'show_category',
			'type'       => 'switcher',
			'title'      => esc_html__('Show Category Name', 'valkuta'),
			'default'    => true,
			'text_on'    => esc_html__('Yes', 'valkuta'),
			'text_off'   => esc_html__('No', 'valkuta'),
			'desc'       => esc_html__('Hide / Show post category name.', 'valkuta'),
			'dependency' => array('blog_layout', 'any', 'right-sidebar,left-sidebar'),
		),

		array(
			'id'         => 'read_more_button',
			'type'       => 'switcher',
			'title'      => esc_html__('Show Read More Button', 'valkuta'),
			'default'    => true,
			'text_on'    => esc_html__('Yes', 'valkuta'),
			'text_off'   => esc_html__('No', 'valkuta'),
			'desc'       => esc_html__('Hide / Show post read more button.', 'valkuta'),
		),

		array(
			'id'         => 'modified_post_reorder',
			'type'       => 'switcher',
			'title'      => esc_html__('Modified Post Reorder', 'valkuta'),
			'default'    => false,
			'text_on'    => esc_html__('Yes', 'valkuta'),
			'text_off'   => esc_html__('No', 'valkuta'),
			'desc'       => esc_html__('If you modified / update a post it will go top of the list.', 'valkuta'),
		),
	)
));