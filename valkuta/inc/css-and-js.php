<?php

/**
 * Enqueue styles and scripts.
 */
function valkuta_scripts() {
	// Enqueue Style

	wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'assets/css/bootstrap.min.css' ), array(), '4.3.1', 'all' );

	wp_enqueue_style( 'font-awesome', get_theme_file_uri( 'assets/css/font-awesome.min.css' ), array(), '5.9.0', 'all' );

	wp_enqueue_style( 'iconfont', get_theme_file_uri( 'assets/css/iconfont.min.css' ), array(), '1.0.0', 'all' );

	wp_enqueue_style( 'slick-slider', get_theme_file_uri( 'assets/css/slick-slider.css' ), array(), '1.0.0', 'all' );

	wp_enqueue_style( 'magnific-popup', get_theme_file_uri( 'assets/css/magnific-popup.css' ), array(), '1.1.0', 'all' );

	wp_enqueue_style( 'slicknav', get_theme_file_uri( 'assets/css/slicknav.min.css' ), array(), '1.0.10', 'all' );

	wp_enqueue_style( 'animate', get_theme_file_uri( 'assets/css/animate.min.css' ), array(), '3.5.1', 'all' );

	wp_enqueue_style( 'uikit', get_theme_file_uri( 'assets/css/uikit.min.css' ), array(), '3.6.16', 'all' );

	wp_enqueue_style( 'valkuta-custom-el-widget', get_theme_file_uri( 'assets/css/custom-el-widget.css' ), array(), VALKUTA_VERSION, 'all' );

	wp_enqueue_style( 'valkuta-main', get_theme_file_uri( 'assets/css/main.css' ), array( 'slicknav' ), VALKUTA_VERSION, 'all' );

	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style('valkuta-woocommerce-style', get_theme_file_uri('assets/css/woocommerce.css'), array(), VALKUTA_VERSION, 'all');
	}

	if(is_rtl()) {
		wp_enqueue_style('valkuta-rtl', get_theme_file_uri('assets/css/rtl.css'), array(), VALKUTA_VERSION, 'all');
	}

	wp_enqueue_style( 'valkuta-style', get_stylesheet_uri(), array(), VALKUTA_VERSION, 'all' );

	/*
	 * Load Google fonts.
	 * User can customized this default fonts from theme options
	 */
	if( !class_exists( 'CSF' ) ) {
		wp_enqueue_style( 'valkuta-default-fonts', "//fonts.googleapis.com/css?family=Covered+By+Your+Grace|Nunito:400,600,700,800,900", '', '1.0.0', 'screen' );
	}

	// Enqueue scripts
	wp_enqueue_script( 'popper', get_theme_file_uri( 'assets/js/popper.min.js' ), array( 'jquery' ), '1.12.9', true );

	wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array( 'jquery' ), '4.3.1', true );

	wp_enqueue_script( 'slick-slider', get_theme_file_uri( 'assets/js/slick-slider.min.js' ), array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'magnific-popup', get_theme_file_uri( 'assets/js/jquery.magnific-popup.min.js' ), array( 'jquery' ), '1.1.0', true );

	wp_enqueue_script( 'counterup', get_theme_file_uri( 'assets/js/counterup.js' ), array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'waypoint', get_theme_file_uri( 'assets/js/waypoint.js' ), array( 'jquery' ), '2.0.3', true );

	wp_enqueue_script( 'appear', get_theme_file_uri( 'assets/js/appear.js' ), array( 'jquery' ), '1.0.10', true );

	wp_enqueue_script( 'slicknav', get_theme_file_uri( 'assets/js/slicknav.min.js' ), array( 'jquery' ), '1.0.10', true );

	wp_enqueue_script( 'isotope', get_theme_file_uri( 'assets/js/isotope.min.js' ), array(
		'jquery',
		'imagesloaded'
	), '3.0.4', true );

	wp_enqueue_script( 'uikit', get_theme_file_uri( 'assets/js/uikit.min.js' ), array( 'jquery' ), '3.6.16', true );

	wp_enqueue_script( 'valkuta-main', get_theme_file_uri( 'assets/js/main.js' ), array( 'jquery' ), VALKUTA_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$related_products_column = valkuta_option('related_products_column', 3);
	wp_localize_script('valkuta-main', 'relater_product_data', array(
		'slide_column' => $related_products_column,
	));
}

add_action( 'wp_enqueue_scripts', 'valkuta_scripts' );

/**
 * Enqueue Backend Styles And Scripts.
 **/

function valkuta_backend_css_js( $screen ) {
	wp_enqueue_style( 'flaticon', get_theme_file_uri( 'assets/fonts/flaticon/flaticon.css' ), array(), '1.0.0', 'all' );
}

add_action( 'admin_enqueue_scripts', 'valkuta_backend_css_js' );