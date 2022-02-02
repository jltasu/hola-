<?php

$valkuta_team_meta = 'valkuta_team_meta';

// Create a metabox
CSF::createMetabox( $valkuta_team_meta, array(
	'title'     => esc_html__( 'Social Profiles Options', 'valkuta' ),
	'post_type' => 'valkuta_team',
	'data_type' => 'serialize',
) );


CSF::createSection( $valkuta_team_meta, array(
	'fields' => array(
		array(
			'id'           => 'member_social_profile',
			'type'         => 'group',
			'title'        => esc_html__( 'Member Social Profile', 'valkuta' ),
			'desc'         => esc_html__( 'Add member social profile icons here.', 'valkuta' ),
			'button_title' => esc_html__( 'Add Social Profile', 'valkuta' ),
			'fields'       => array(
				array(
					'id'    => 'site_name',
					'type'  => 'text',
					'title' => esc_html__( 'Site Name', 'valkuta' ),
					'desc'  => esc_html__( 'Type social site name here.', 'valkuta' ),
				),

				array(
					'id'    => 'site_icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Icon', 'valkuta' ),
					'desc'  => esc_html__( 'Select icon', 'valkuta' ),
				),

				array(
					'id'    => 'site_url',
					'type'  => 'text',
					'title' => esc_html__( 'Profile Link', 'valkuta' ),
					'desc'  => esc_html__( 'Type social site url here.', 'valkuta' ),
				),
			),

			'default' => array(
				array(
					'site_name' => esc_html__( 'Facebook', 'valkuta' ),
					'site_icon' => 'fa fa-facebook-official',
					'site_url'  => '#',
				),
			),
		),

	)
) );