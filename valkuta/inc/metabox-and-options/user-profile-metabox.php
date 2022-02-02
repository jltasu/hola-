<?php

	$valkuta_user_meta = 'valkuta_user_meta';

	CSF::createProfileOptions($valkuta_user_meta, array(
		'data_type' => 'serialize',
	));


	CSF::createSection($valkuta_user_meta, array(
		'title'  => esc_html__('User Social Profiles', 'valkuta'),
		'fields' => array(
			array(
				'id'    => 'facebook_link',
				'type'  => 'text_url',
				'title' => esc_html__('Facebook Url', 'valkuta'),
				'desc'  => esc_html__('Type facebook url here', 'valkuta'),
			),

			array(
				'id'    => 'twitter_link',
				'type'  => 'text_url',
				'title' => esc_html__('Twitter Url', 'valkuta'),
				'desc'  => esc_html__('Type twitter url here', 'valkuta')
			),

			array(
				'id'    => 'instagram_link',
				'type'  => 'text_url',
				'title' => esc_html__('Instagram Url', 'valkuta'),
				'desc'  => esc_html__('Type instagram url here', 'valkuta')
			),

			array(
				'id'    => 'linkedin_link',
				'type'  => 'text_url',
				'title' => esc_html__('Linkedin Url', 'valkuta'),
				'desc'  => esc_html__('Type linkedin url here', 'valkuta')
			),

			array(
				'id'    => 'dribbble_link',
				'type'  => 'text_url',
				'title' => esc_html__('Dribbble Url', 'valkuta'),
				'desc'  => esc_html__('Type dribbble url here', 'valkuta')
			),


			array(
				'id'    => 'behance_link',
				'type'  => 'text_url',
				'title' => esc_html__('Behance Url', 'valkuta'),
				'desc'  => esc_html__('Type behance url here', 'valkuta')
			),

			array(
				'id'    => 'vimeo_link',
				'type'  => 'text_url',
				'title' => esc_html__('Vimeo Url', 'valkuta'),
				'desc'  => esc_html__('Type vimeo url here', 'valkuta')
			),

			array(
				'id'    => 'youtube_link',
				'type'  => 'text_url',
				'title' => esc_html__('Youtube Url', 'valkuta'),
				'desc'  => esc_html__('Type youtube url here', 'valkuta')
			),

		)
	));