<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function valkuta_default_theme_options() {
	return array(
		'copyright_text' => wp_kses(
			__( '&copy; valkuta 2020 | All Right Reserved', 'valkuta' ),
			array(
				'a'      => array(
					'href'   => array(),
					'target' => array()
				),
				'strong' => array(),
				'small'  => array(),
				'span'   => array(),
			)
		),

		'footer_info_right_text' => wp_kses(
			__( 'valkuta | Developed by: <a target="_blank" href="https://themedraft.net/">ThemeDraft</a>', 'valkuta' ),
			array(
				'a'      => array(
					'href'   => array(),
					'target' => array()
				),
				'strong' => array(),
				'small'  => array(),
				'span'   => array(),
			)
		),

		'not_found_text' => wp_kses(
			__( '<h2>Oops!</h2><h2> That page can&rsquo;t be found.</h2><p>We Are Really Sorry But The Page You Requested is Missing.</p>', 'valkuta' ),
			array(
				'a'      => array(
					'href'   => array(),
					'target' => array()
				),
				'strong' => array(),
				'small'  => array(),
				'span'   => array(),
				'p'      => array(),
				'h1'     => array(),
				'h2'     => array(),
				'h3'     => array(),
				'h4'     => array(),
				'h5'     => array(),
				'h6'     => array(),
			)
		),

		'blog_title'       => esc_html__( 'Blog', 'valkuta' ),
		'post_banner_title'       => esc_html__( 'Blog', 'valkuta' ),
		'error_page_title' => esc_html__( 'Page Not Found', 'valkuta' ),
	);
}


//Get theme options
if ( ! function_exists( 'valkuta_option' ) ) {
	function valkuta_option( $option = '', $default = null ) {
		$defaults = valkuta_default_theme_options();
		$options  = get_option( 'valkuta_theme_options' );
		$default  = ( ! isset( $default ) && isset( $defaults[ $option ] ) ) ? $defaults[ $option ] : $default;

		return ( isset( $options[ $option ] ) ) ? $options[ $option ] : $default;
	}
}

//Add custom Icon set

if ( ! function_exists( 'valkuta_csf_custom_icons' ) ) {

	function valkuta_csf_custom_icons( $icons ) {

		// Adding new icons
		$icons[] = array(
			'title' => esc_html__( 'FlatIcon', 'valkuta' ),
			'icons' => array(
				'flaticon-business-team'                              => 'flaticon-business-team',
				'flaticon-business-connection'                        => 'flaticon-business-connection',
				'flaticon-business-group'                             => 'flaticon-business-group',
				'flaticon-business-team-1'                            => 'flaticon-business-team-1',
				'flaticon-business-team-2'                            => 'flaticon-business-team-2',
				'flaticon-business-together'                          => 'flaticon-business-together',
				'flaticon-business-team-3'                            => 'flaticon-business-team-3',
				'flaticon-business-group-1'                           => 'flaticon-business-group-1',
				'flaticon-business-employee'                          => 'flaticon-business-employee',
				'flaticon-business-suitcase'                          => 'flaticon-business-suitcase',
				'flaticon-business-approved'                          => 'flaticon-business-approved',
				'flaticon-business-employee-1'                        => 'flaticon-business-employee-1',
				'flaticon-business-employee-2'                        => 'flaticon-business-employee-2',
				'flaticon-business-speaker'                           => 'flaticon-business-speaker',
				'flaticon-business-professions-and-jobs'              => 'flaticon-business-professions-and-jobs',
				'flaticon-business-loupe'                             => 'flaticon-business-loupe',
				'flaticon-business-loupe-1'                           => 'flaticon-business-loupe-1',
				'flaticon-business-target'                            => 'flaticon-business-target',
				'flaticon-business-targeting'                         => 'flaticon-business-targeting',
				'flaticon-business-bullseye'                          => 'flaticon-business-bullseye',
				'flaticon-business-target-1'                          => 'flaticon-business-target-1',
				'flaticon-business-target-2'                          => 'flaticon-business-target-2',
				'flaticon-business-left-quote'                        => 'flaticon-business-left-quote',
				'flaticon-business-quote'                             => 'flaticon-business-quote',
				'flaticon-business-right-quotation-mark'              => 'flaticon-business-right-quotation-mark',
				'flaticon-business-quote-left'                        => 'flaticon-business-quote-left',
				'flaticon-business-right-quote'                       => 'flaticon-business-right-quote',
				'flaticon-business-left-quotes-sign'                  => 'flaticon-business-left-quotes-sign',
				'flaticon-business-right-quotes-symbol'               => 'flaticon-business-right-quotes-symbol',
				'flaticon-business-smartphone'                        => 'flaticon-business-smartphone',
				'flaticon-business-smartphone-with-wireless-internet' => 'flaticon-business-smartphone-with-wireless-internet',
				'flaticon-business-world'                             => 'flaticon-business-world',
				'flaticon-business-phone-call'                        => 'flaticon-business-phone-call',
				'flaticon-business-telephone'                         => 'flaticon-business-telephone',
				'flaticon-business-customer-service'                  => 'flaticon-business-customer-service',
				'flaticon-business-call'                              => 'flaticon-business-call',
				'flaticon-business-email'                             => 'flaticon-business-email',
				'flaticon-business-send'                              => 'flaticon-business-send',
				'flaticon-business-email-1'                           => 'flaticon-business-email-1',
				'flaticon-business-globe'                             => 'flaticon-business-globe',
				'flaticon-business-pie-chart'                         => 'flaticon-business-pie-chart',
				'flaticon-business-whatsapp'                          => 'flaticon-business-whatsapp',
				'flaticon-business-twitter'                           => 'flaticon-business-twitter',
				'flaticon-business-youtube'                           => 'flaticon-business-youtube',
				'flaticon-business-skype'                             => 'flaticon-business-skype',
				'flaticon-business-apple'                             => 'flaticon-business-apple',
				'flaticon-business-android'                           => 'flaticon-business-android',
				'flaticon-business-dropbox'                           => 'flaticon-business-dropbox',
				'flaticon-business-trophy'                            => 'flaticon-business-trophy',
				'flaticon-business-medal'                             => 'flaticon-business-medal',
				'flaticon-business-coffee-cup'                        => 'flaticon-business-coffee-cup',
				'flaticon-business-dinner'                            => 'flaticon-business-dinner',
				'flaticon-business-24-hours'                          => 'flaticon-business-24-hours',
				'flaticon-business-donation'                          => 'flaticon-business-donation',
				'flaticon-business-box'                               => 'flaticon-business-box',
				'flaticon-business-write-letter'                      => 'flaticon-business-write-letter',
				'flaticon-business-archive'                           => 'flaticon-business-archive',
				'flaticon-business-file'                              => 'flaticon-business-file',
				'flaticon-business-folder'                            => 'flaticon-business-folder',
				'flaticon-business-rich'                              => 'flaticon-business-rich',
				'flaticon-business-piggy-bank'                        => 'flaticon-business-piggy-bank',
				'flaticon-business-wallet'                            => 'flaticon-business-wallet',
				'flaticon-business-growth'                            => 'flaticon-business-growth',
				'flaticon-business-server'                            => 'flaticon-business-server',
				'flaticon-business-database'                          => 'flaticon-business-database',
				'flaticon-business-pie-chart-1'                       => 'flaticon-business-pie-chart-1',
				'flaticon-business-analytics'                         => 'flaticon-business-analytics',
				'flaticon-business-presentation'                      => 'flaticon-business-presentation',
				'flaticon-business-profits'                           => 'flaticon-business-profits',
				'flaticon-business-bar-chart'                         => 'flaticon-business-bar-chart',
				'flaticon-business-box-1'                             => 'flaticon-business-box-1',
				'flaticon-business-calendar'                          => 'flaticon-business-calendar',
				'flaticon-business-calendar-1'                        => 'flaticon-business-calendar-1',
				'flaticon-business-time-and-date'                     => 'flaticon-business-time-and-date',
				'flaticon-business-placeholder'                       => 'flaticon-business-placeholder',
				'flaticon-business-placeholder-1'                     => 'flaticon-business-placeholder-1',
				'flaticon-business-route'                             => 'flaticon-business-route',
				'flaticon-business-placeholder-2'                     => 'flaticon-business-placeholder-2',
				'flaticon-business-female'                            => 'flaticon-business-female',
				'flaticon-business-female-1'                          => 'flaticon-business-female-1',
				'flaticon-business-real-estate'                       => 'flaticon-business-real-estate',
				'flaticon-business-placeholder-3'                     => 'flaticon-business-placeholder-3',
				'flaticon-business-destination'                       => 'flaticon-business-destination',
				'flaticon-business-clock'                             => 'flaticon-business-clock',
				'flaticon-business-alarm-clock'                       => 'flaticon-business-alarm-clock',
				'flaticon-business-alarm-clock-1'                     => 'flaticon-business-alarm-clock-1',
				'flaticon-business-24-hours-1'                        => 'flaticon-business-24-hours-1',
				'flaticon-business-statistics'                        => 'flaticon-business-statistics',
				'flaticon-business-clock-1'                           => 'flaticon-business-clock-1',
				'flaticon-business-clock-2'                           => 'flaticon-business-clock-2',
				'flaticon-business-clock-3'                           => 'flaticon-business-clock-3',
				'flaticon-business-speed'                             => 'flaticon-business-speed',
				'flaticon-business-hour'                              => 'flaticon-business-hour',
				'flaticon-business-clock-4'                           => 'flaticon-business-clock-4',
				'flaticon-business-wristwatch'                        => 'flaticon-business-wristwatch',
				'flaticon-business-exam'                              => 'flaticon-business-exam',
				'flaticon-business-clock-5'                           => 'flaticon-business-clock-5',
				'flaticon-business-watch'                             => 'flaticon-business-watch',
				'flaticon-business-hour-1'                            => 'flaticon-business-hour-1',
				'flaticon-business-help'                              => 'flaticon-business-help',
				'flaticon-business-clock-6'                           => 'flaticon-business-clock-6',
				'flaticon-business-watch-1'                           => 'flaticon-business-watch-1',
				'flaticon-business-clock-7'                           => 'flaticon-business-clock-7',
				'flaticon-business-watch-2'                           => 'flaticon-business-watch-2',
				'flaticon-business-order'                             => 'flaticon-business-order',
				'flaticon-business-clock-8'                           => 'flaticon-business-clock-8',
				'flaticon-business-wristwatch-1'                      => 'flaticon-business-wristwatch-1',
				'flaticon-business-watch-3'                           => 'flaticon-business-watch-3',
				'flaticon-business-clock-9'                           => 'flaticon-business-clock-9',
				'flaticon-business-speed-1'                           => 'flaticon-business-speed-1',
				'flaticon-business-time'                              => 'flaticon-business-time',
				'flaticon-business-speed-2'                           => 'flaticon-business-speed-2',
				'flaticon-business-road'                              => 'flaticon-business-road',
				'flaticon-business-calendar-2'                        => 'flaticon-business-calendar-2',
				'flaticon-business-clock-10'                          => 'flaticon-business-clock-10',
				'flaticon-business-worldwide'                         => 'flaticon-business-worldwide',
				'flaticon-business-planet-earth'                      => 'flaticon-business-planet-earth',
				'flaticon-business-international-delivery'            => 'flaticon-business-international-delivery',
				'flaticon-business-earth'                             => 'flaticon-business-earth',
				'flaticon-business-world-grid'                        => 'flaticon-business-world-grid',
				'flaticon-business-world-1'                           => 'flaticon-business-world-1',
				'flaticon-business-support'                           => 'flaticon-business-support',
				'flaticon-business-link'                              => 'flaticon-business-link',
				'flaticon-business-unlink'                            => 'flaticon-business-unlink',
				'flaticon-business-link-1'                            => 'flaticon-business-link-1',
				'flaticon-business-chain'                             => 'flaticon-business-chain',
				'flaticon-business-package'                           => 'flaticon-business-package',
				'flaticon-business-giftbox'                           => 'flaticon-business-giftbox',
				'flaticon-business-box-2'                             => 'flaticon-business-box-2',
				'flaticon-business-investment'                        => 'flaticon-business-investment',
				'flaticon-business-growth-1'                          => 'flaticon-business-growth-1',
				'flaticon-business-success'                           => 'flaticon-business-success',
				'flaticon-business-tick'                              => 'flaticon-business-tick',
				'flaticon-business-verified'                          => 'flaticon-business-verified',
				'flaticon-business-error'                             => 'flaticon-business-error',
				'flaticon-business-cancel'                            => 'flaticon-business-cancel',
				'flaticon-business-next'                              => 'flaticon-business-next',
				'flaticon-business-back'                              => 'flaticon-business-back',
				'flaticon-business-right-arrow'                       => 'flaticon-business-right-arrow',
				'flaticon-business-left-arrow'                        => 'flaticon-business-left-arrow',
				'flaticon-business-cloud-computing'                   => 'flaticon-business-cloud-computing',
				'flaticon-business-upload'                            => 'flaticon-business-upload',
				'flaticon-business-cloud-storage-uploading-option'    => 'flaticon-business-cloud-storage-uploading-option',
				'flaticon-business-move'                              => 'flaticon-business-move',
				'flaticon-business-cloud-computing-1'                 => 'flaticon-business-cloud-computing-1',
				'flaticon-business-cloud-computing-2'                 => 'flaticon-business-cloud-computing-2',
				'flaticon-business-cloud-computing-3'                 => 'flaticon-business-cloud-computing-3',
				'flaticon-business-settings'                          => 'flaticon-business-settings',
				'flaticon-business-cogwheel'                          => 'flaticon-business-cogwheel',
				'flaticon-business-management'                        => 'flaticon-business-management',
				'flaticon-business-options'                           => 'flaticon-business-options',
				'flaticon-business-chart'                             => 'flaticon-business-chart',
				'flaticon-business-playstore'                         => 'flaticon-business-playstore',
				'flaticon-business-playstore-1'                       => 'flaticon-business-playstore-1',
				'flaticon-business-app-store'                         => 'flaticon-business-app-store',
				'flaticon-business-app-store-1'                       => 'flaticon-business-app-store-1',
				'flaticon-business-collaboration'                     => 'flaticon-business-collaboration',
				'flaticon-business-calendar-3'                        => 'flaticon-business-calendar-3',
				'flaticon-business-growth-2'                          => 'flaticon-business-growth-2',
				'flaticon-business-calendar-4'                        => 'flaticon-business-calendar-4',
				'flaticon-business-shopping-cart'                     => 'flaticon-business-shopping-cart',
				'flaticon-business-wallet-1'                          => 'flaticon-business-wallet-1',
				'flaticon-business-award'                             => 'flaticon-business-award',
				'flaticon-business-trophy-1'                          => 'flaticon-business-trophy-1',
				'flaticon-business-trophy-2'                          => 'flaticon-business-trophy-2',
				'flaticon-business-medal-1'                           => 'flaticon-business-medal-1',
				'flaticon-business-sports-and-competition'            => 'flaticon-business-sports-and-competition',
				'flaticon-business-cup'                               => 'flaticon-business-cup',
				'flaticon-business-cup-1'                             => 'flaticon-business-cup-1',
				'flaticon-business-business-and-finance-1'            => 'flaticon-business-business-and-finance-1',
				'flaticon-business-architecture-and-city'             => 'flaticon-business-architecture-and-city',
				'flaticon-business-office-building'                   => 'flaticon-business-office-building',
				'flaticon-business-envelope'                          => 'flaticon-business-envelope',
				'flaticon-business-mail'                              => 'flaticon-business-mail',
				'flaticon-business-email-2'                           => 'flaticon-business-email-2',
				'flaticon-business-close-envelope'                    => 'flaticon-business-close-envelope',
				'flaticon-business-message'                           => 'flaticon-business-message',
				'flaticon-business-contact'                           => 'flaticon-business-contact',
				'flaticon-business-arroba'                            => 'flaticon-business-arroba',
				'flaticon-business-password'                          => 'flaticon-business-password',
				'flaticon-business-download'                          => 'flaticon-business-download',
				'flaticon-business-padlock'                           => 'flaticon-business-padlock',
				'flaticon-business-light-bulb'                        => 'flaticon-business-light-bulb',
				'flaticon-business-idea'                              => 'flaticon-business-idea',
				'flaticon-business-creativity'                        => 'flaticon-business-creativity',
				'flaticon-business-cloud-storage'                     => 'flaticon-business-cloud-storage',
				'flaticon-business-data-storage'                      => 'flaticon-business-data-storage',
				'flaticon-business-list'                              => 'flaticon-business-list',
				'flaticon-business-chip'                              => 'flaticon-business-chip',
				'flaticon-business-locked'                            => 'flaticon-business-locked',
				'flaticon-business-microchip'                         => 'flaticon-business-microchip',
				'flaticon-business-cpu'                               => 'flaticon-business-cpu',
				'flaticon-business-casino-croupier'                   => 'flaticon-business-casino-croupier',
				'flaticon-business-cpu-1'                             => 'flaticon-business-cpu-1',
				'flaticon-business-internet'                          => 'flaticon-business-internet',
				'flaticon-business-earth-globe'                       => 'flaticon-business-earth-globe',
				'flaticon-business-travelling'                        => 'flaticon-business-travelling',
				'flaticon-business-earth-globe-1'                     => 'flaticon-business-earth-globe-1',
				'flaticon-business-earth-1'                           => 'flaticon-business-earth-1',
				'flaticon-business-anchor'                            => 'flaticon-business-anchor',
				'flaticon-business-big-anchor'                        => 'flaticon-business-big-anchor',
				'flaticon-business-around'                            => 'flaticon-business-around',
				'flaticon-business-world-2'                           => 'flaticon-business-world-2',
				'flaticon-business-trip'                              => 'flaticon-business-trip',
				'flaticon-business-sphere'                            => 'flaticon-business-sphere',
				'flaticon-business-internet-1'                        => 'flaticon-business-internet-1',
				'flaticon-business-travel'                            => 'flaticon-business-travel',
				'flaticon-business-idea-1'                            => 'flaticon-business-idea-1',
				'flaticon-business-achieve'                           => 'flaticon-business-achieve',
				'flaticon-business-goal'                              => 'flaticon-business-goal',
				'flaticon-business-success-1'                         => 'flaticon-business-success-1',
				'flaticon-business-goal-1'                            => 'flaticon-business-goal-1',
				'flaticon-business-talk'                              => 'flaticon-business-talk',
				'flaticon-business-team-4'                            => 'flaticon-business-team-4',
				'flaticon-business-help-1'                            => 'flaticon-business-help-1',
				'flaticon-business-support-1'                         => 'flaticon-business-support-1',
				'flaticon-business-construction-and-tools'            => 'flaticon-business-construction-and-tools',
				'flaticon-business-skyline'                           => 'flaticon-business-skyline',
				'flaticon-business-pie-chart-2'                       => 'flaticon-business-pie-chart-2',
				'flaticon-business-gears'                             => 'flaticon-business-gears',
				'flaticon-business-pie-chart-3'                       => 'flaticon-business-pie-chart-3',
				'flaticon-business-engineer'                          => 'flaticon-business-engineer',
				'flaticon-business-business-and-finance-2'            => 'flaticon-business-business-and-finance-2',
				'flaticon-business-resume'                            => 'flaticon-business-resume',
				'flaticon-business-contract'                          => 'flaticon-business-contract',
				'flaticon-business-process'                           => 'flaticon-business-process',
				'flaticon-business-coding'                            => 'flaticon-business-coding',
				'flaticon-business-code-rate'                         => 'flaticon-business-code-rate',
				'flaticon-business-pdf'                               => 'flaticon-business-pdf',
				'flaticon-business-pdf-1'                             => 'flaticon-business-pdf-1',
				'flaticon-business-box-3'                             => 'flaticon-business-box-3',
				'flaticon-business-diamond'                           => 'flaticon-business-diamond',
				'flaticon-business-value'                             => 'flaticon-business-value',
				'flaticon-business-diamond-1'                         => 'flaticon-business-diamond-1',
				'flaticon-business-diamond-2'                         => 'flaticon-business-diamond-2',
				'flaticon-business-diamond-3'                         => 'flaticon-business-diamond-3',
				'flaticon-business-diamond-4'                         => 'flaticon-business-diamond-4',
				'flaticon-business-startup'                           => 'flaticon-business-startup',
				'flaticon-business-chat'                              => 'flaticon-business-chat',
				'flaticon-business-startup-1'                         => 'flaticon-business-startup-1',
				'flaticon-business-project-management'                => 'flaticon-business-project-management',
				'flaticon-business-network'                           => 'flaticon-business-network',
				'flaticon-business-network-1'                         => 'flaticon-business-network-1',
				'flaticon-business-analytics-1'                       => 'flaticon-business-analytics-1',
				'flaticon-business-diagram'                           => 'flaticon-business-diagram',
				'flaticon-business-growth-3'                          => 'flaticon-business-growth-3',
				'flaticon-business-up'                                => 'flaticon-business-up',
				'flaticon-business-box-4'                             => 'flaticon-business-box-4',
				'flaticon-business-miscellaneous'                     => 'flaticon-business-miscellaneous',
			),
		);

		return $icons;

	}

	add_filter( 'csf_field_icon_add_icons', 'valkuta_csf_custom_icons' );
}

/* Modified post order by last edit time */
$modified_post_reorder = valkuta_option('modified_post_reorder', false);
if($modified_post_reorder == true){

	function themedraft_custom_query( $query ) {
		if( $query->is_main_query() && ! is_admin() && $query->is_home() ) {

			// Set parameters to modify the query
			$query->set( 'orderby', 'modified' );
			$query->set( 'order', 'DESC' );
			$query->set( 'suppress_filters', 'true' );
		}
	}
	add_action( 'pre_get_posts', 'themedraft_custom_query' );
}

/* Add Header Scripts */
if (valkuta_option('valkuta_header_script')) {
	function valkuta_header_script() {
		echo  valkuta_option('valkuta_header_script');
	}
	add_action('wp_head', 'valkuta_header_script');
}

/* Add Footer Scripts */
if (valkuta_option('valkuta_footer_script')) {
	function valkuta_footer_script() {
		echo  valkuta_option('valkuta_footer_script');
	}
	add_action('wp_footer', 'valkuta_footer_script');
}