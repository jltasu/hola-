<?php
// Video Post Meta
$valkuta_video_post_meta = 'valkuta_video_post_format_meta';

CSF::createMetabox( $valkuta_video_post_meta, array(
	'title'        => esc_html__('Video Post Format Options', 'valkuta' ),
	'post_type'    => 'post',
	'post_formats' => array('video'),
) );

CSF::createSection( $valkuta_video_post_meta, array(
	'fields' => array(

		array(
			'id'    => 'post_video_url',
			'type'  => 'text',
			'title' => esc_html__('Video URL', 'valkuta' ),
			'desc'    => esc_html__( 'Paste video URL here', 'valkuta' ),
		),

	)
));

// Audio Post Meta
$valkutaAudioPostMeta = 'audio_post_format_meta';

CSF::createMetabox( $valkutaAudioPostMeta, array(
	'title'        => esc_html__('Audio Post Format Options', 'valkuta' ),
	'post_type'    => 'post',
	'post_formats' => array('audio'),
) );

CSF::createSection( $valkutaAudioPostMeta, array(
	'fields' => array(

		array(
			'id'    => 'audio_embed_code',
			'type'  => 'code_editor',
			'settings' => array(
				'theme'  => 'monokai',
				'mode'   => 'htmlmixed',
			),
			'title' => esc_html__('Audio Embed Code', 'valkuta' ),
			'desc'    => esc_html__( 'Paste sound cloud audio embed code here', 'valkuta' ),
		),

	)
));


// Gallery Post Meta
$valkutaGalleryPostMeta = 'gallery_post_format_meta';

CSF::createMetabox( $valkutaGalleryPostMeta, array(
	'title'        => esc_html__('Gallery Post Format Options', 'valkuta' ),
	'post_type'    => 'post',
	'post_formats' => array('gallery'),
) );

CSF::createSection( $valkutaGalleryPostMeta, array(
	'fields' => array(

		array(
			'id'          => 'post_gallery_images',
			'type'        => 'gallery',
			'title' => esc_html__('Gallery Images', 'valkuta' ),
			'add_title'   => esc_html__('Upload Gallery Images', 'valkuta'),
			'edit_title'  => esc_html__('Edit Gallery Images', 'valkuta'),
			'clear_title' => esc_html__('Remove Gallery Images', 'valkuta'),
			'desc'    => esc_html__( 'Upload gallery images from here', 'valkuta' ),
		),

	)
));
