<?php
//Single Post
CSF::createSection( $valkuta_theme_option, array(
	'parent' => 'layout_and_options',
	'title'  => esc_html__( 'Single Post / Post Details', 'valkuta' ),
	'icon'   => 'fa fa-pencil',
	'fields' => array(
		array(
			'id'      => 'single_post_default_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Layout', 'valkuta' ),
			'options' => array(
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'valkuta' ),
				'full-width'    => esc_html__( 'Full Width', 'valkuta' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'valkuta' ),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__( 'Select single post layout', 'valkuta' ),
		),

		array(
			'id'         => 'single_post_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'valkuta' ),
			'options'    => 'valkuta_sidebars',
			'default' => 'sidebar',
			'dependency' => array( 'single_post_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all posts. You can override this settings on individual post.', 'valkuta' ),
		),

		array(
			'id'         => 'post_banner_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Default Title', 'valkuta'),
			'desc'       => esc_html__('Default banner title for all post.', 'valkuta'),
			'dependency' => array( 'show_default_title', '==', 'false' ),
		),

		array(
			'id'       => 'show_default_title',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Post Title On Banner?', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Show post title on single post banner area. Default title is "Blog" for all single post.', 'valkuta'),
			'default'  => false,
		),

		array(
			'id'         => 'single_post_title_tag',
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
			'default'    => 'h1',
			'desc'       => esc_html__( 'Select single post title tag.', 'valkuta' ),
		),

		array(
			'id'       => 'single_post_breadcrumb',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Breadcrumb', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show banner breadcrumb on single post.', 'valkuta'),
			'default'  => false,
		),

		array(
			'id'       => 'single_post_author',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Author Name', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show author name on post details page.', 'valkuta'),
			'default'  => true,
		),

		array(
			'id'       => 'single_post_date',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Date', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show date on post details page.', 'valkuta'),
			'default'  => true
		),

		array(
			'id'       => 'single_post_cmnt',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Comments Number', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show comments number on post details page.', 'valkuta'),
			'default'  => false,
		),

		array(
			'id'       => 'single_post_cat',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Categories', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show categories on post details page.', 'valkuta'),
			'default'  => true
		),

		array(
			'id'       => 'single_post_tag',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Tags', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show tags on post details page.', 'valkuta'),
			'default'  => true
		),

		array(
			'id'       => 'post_share',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Share icons', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show social share icons on post details page.', 'valkuta'),
			'default'  => true
		),

		array(
			'id'       => 'prev_next_post',
			'type'     => 'switcher',
			'title'    => esc_html__('Previous / Next Post link', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show previous / next Post link on post details page.', 'valkuta'),
			'default'  => true
		),

		array(
			'id'       => 'author_details',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Author Information', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Hide or show post author info on post details page.', 'valkuta'),
			'default'  => false
		),
	),
) );