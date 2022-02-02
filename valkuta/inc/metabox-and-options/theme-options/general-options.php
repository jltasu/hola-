<?php

// Create general section
CSF::createSection($valkuta_theme_option, array(
	'title'  => esc_html__('General Options', 'valkuta'),
	'id'     => 'general_options',
	'icon'   => 'fa fa-google',
	'fields' => array(

		array(
			'id'       => 'theme_primary_color',
			'type'     => 'color',
			'title'    => esc_html__('Primary Color', 'valkuta'),
			'subtitle' => esc_html__('Select theme primary color', 'valkuta'),
			'desc'     => esc_html__('This option will effect with all elements which is not related withe elementor. Like Blog, Archive pages, Header, Footer, Sidebar, WooCommerce etc. You can change other colors from elementor widget options.', 'valkuta'),
			'output'   => array(
				'background-color' => '.td_button.td_header_cta,.scroll-to-top,.woocommerce span.onsale,.td-product-thumb-overlay,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li span:hover,.woocommerce div.product div.images .woocommerce-product-gallery__trigger,.woocommerce div.product div.images .woocommerce-product-gallery__trigger:hover:after,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,div#review_form_wrapper .form-submit button[type="submit"],.related.products .slick-arrow, .upsells.products .slick-arrow,.woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover,.td_button:hover, input[type="submit"]:hover, button[type="submit"]:hover,.post-thumbnail-wrapper .slick-arrow:hover,.td_video_button:before, .td_video_button:after,.mfp-iframe-holder .mfp-close, .mfp-image-holder .mfp-close,.post-pagination ul li a:hover, .page-links a:hover, .post-pagination ul li span.current, .page-links .current,blockquote.wp-block-quote, blockquote,.post-tags a,.sidebar-widget-area .widget.widget_search button[type="submit"],.widget.widget_themedraft_contact_form_widget,.widget.widget_tag_cloud a:hover,.widget-style-2 .sidebar-widget-area .widget-title,.woocommerce a.remove:hover,.widget_product_search button[type=submit],.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.widget_product_tag_cloud a,.content-area button[type="submit"].search-submit, .widget.widget_search button[type="submit"],.mobile-menu-trigger span,.mobile-menu-close::before, .mobile-menu-close::after,.woocommerce.td-product-list-view .td-shop-page a.added_to_cart,.woocommerce-MyAccount-navigation ul li.is-active a, .woocommerce-MyAccount-navigation ul li a:hover,.tinv-wishlist .product-remove button:hover,.td-gallery-photo-overlay,.header-search-wrapper',

				'color' => 'a:hover,.main-navigation ul li a:hover, .main-navigation ul li.current-menu-item > a, .main-navigation ul li.current-menu-ancestor > a,.main-navigation ul li ul li.current-menu-item > a,.main-navigation ul li ul li a:hover,.td_button.td_header_cta:hover,.top-info-item a:hover,.top-social-icon-column a:hover,.footer-widget-area .widget-title, .footer-widget-area .widget-title a,.widget-mail-addr a:hover, .widget-mbl-mumb a:hover, .widget.widget_themedraft_contact_us_widget li i,.footer-widget-area .widget ul li a:hover, .footer-widget-area .widget td a:hover,.footer-bottom-area a:hover,.breadcrumb-container a span:hover,.td-product-grid-view .td-shop-grid, .td-product-list-view .td-shop-list, #td-shop-view-mode li:hover,.td-product-thumb-buttons i, .td-product-thumb-buttons .tinv-wraper .tinvwl_add_to_wishlist_button,.td-product-thumb-buttons .tinv-wraper .tinvwl_add_to_wishlist_button:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce .star-rating::before, .woocommerce .star-rating span::before,.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.comment-form-rating a,div#review_form_wrapper .form-submit button[type="submit"]:hover,.woocommerce div.product form.cart .reset_variations,.post-meta li i,.post-meta li a:hover,.td_button, input[type="submit"], button[type="submit"],.post-pagination ul li a, .post-pagination ul li span, .page-links a, .page-links span,.entry-content ul li:before,.post-tags a:hover,.single-blog-next-prev .prev-post, .single-blog-next-prev .next-post,.post-author-info .post-author-social li a:hover,.comment-metadata time,.widget.widget_archive ul li a:before, .widget.widget_categories ul li a:before, .widget.widget_pages ul li a:before, .widget.widget_meta ul li a:before, .widget.widget_recent_comments ul li .comment-author-link:before, .widget.widget_recent_entries ul li a:before, .widget.widget_nav_menu ul li a:before, .widget ul ul.sub-menu li a:before, .sidebar-widget-area .widget.widget_themedraft_nav_menu ul li a:before,.widget.widget_themedraft-latest-post .td-recent-widget-date a,.widget_themedraft-latest-post .td-recent-widget-date i,.widget.widget_themedraft_contact_form_widget input[type="submit"]:hover,.sidebar-widget-area a:hover,.woocommerce ul.cart_list li a:hover, .woocommerce ul.product_list_widget li a:hover,ul.product-categories li:before, .woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item:before,.woocommerce .widget_layered_nav_filters ul li a::before, .woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item--chosen a::before,.widget td a,.widget.widget_rss ul li a:hover,.widget.widget_rss cite,.tinv-wishlist .product-remove button,.tinvwl-table-manage-list .product-stock i,.woocommerce-cart table.cart td.product-price, .woocommerce-cart table.cart td.product-subtotal,.cart_totals .cart-subtotal .woocommerce-Price-amount.amount, .woocommerce-shipping-methods .woocommerce-Price-amount.amount, .cart_totals .woocommerce-shipping-calculator a, .cart_totals .order-total td .woocommerce-Price-amount.amount, .woocommerce-message::before, .woocommerce-info::before, .woocommerce-info a, .woocommerce-checkout-review-order-table tfoot .order-total td .woocommerce-Price-amount.amount,.slicknav_nav a:hover, .slicknav_item.slicknav_row:hover a, .slicknav_item.slicknav_row:hover .slicknav_arrow, .slicknav_menu .current-menu-item > a, .slicknav_menu .current-menu-item .slicknav_row > a, .slicknav_menu .current-menu-ancestor > a, .slicknav_menu .current-menu-ancestor > .slicknav_row > a, .current-menu-ancestor > .slicknav_row .slicknav_arrow, .current-menu-item .slicknav_row .slicknav_arrow,.woocommerce.td-product-list-view .td-shop-page a.added_to_cart:hover,p.woocommerce-LostPassword.lost_password a, .woocommerce-MyAccount-content a,.woocommerce .woocommerce-cart-form__contents button.button:disabled:hover, .woocommerce .woocommerce-cart-form__contents button.button:disabled[disabled]:hover,article .post-title a:hover,.post-details-wrapper article .post-nav-title a:hover,.header-search:hover',

				'border-color' => 'input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, input[type=url]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=number]:focus, input[type=date]:focus, textarea:focus,.td_button.td_header_cta,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span,.woocommerce div.product div.images .woocommerce-product-gallery__trigger,.woocommerce div.product div.images .woocommerce-product-gallery__trigger:hover:before,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce div.product form.cart div.quantity input[type="number"]:focus,div#review_form_wrapper .form-submit button[type="submit"],.td_button, input[type="submit"], button[type="submit"],.post-pagination ul li a, .post-pagination ul li span, .page-links a, .page-links span,blockquote.wp-block-quote, blockquote,.post-tags a,.sidebar-widget-area form.search-form input,.sidebar-widget-area .widget.widget_search button[type="submit"],.widget.widget_tag_cloud a,.widget.widget_tag_cloud a:hover,.widget-style-2 .sidebar-widget-area .widget,.woocommerce a.remove,.widget_product_search form.woocommerce-product-search .search-field,.widget_product_tag_cloud a,.footer-widget-area .widget.widget_tag_cloud a,.tinv-wishlist .product-remove button,form.search-form input,.woocommerce.td-product-list-view .td-shop-page a.added_to_cart',

				'border-top-color' => '.woocommerce-message, .woocommerce-info',
			)
		),

		array(
			'id'       => 'link_color',
			'type'     => 'color',
			'title'    => esc_html__('link Color', 'valkuta'),
			'desc'     => esc_html__('Select link color.', 'valkuta'),
			'output'   => array(
				'color' => 'a, a strong, strong a',
			)
		),

		array(
			'id'       => 'enable_preloader',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Pre Loader', 'valkuta'),
			'text_on'  => esc_html__('Yes', 'valkuta'),
			'text_off' => esc_html__('No', 'valkuta'),
			'desc'     => esc_html__('Enable or disable Site Preloader.', 'valkuta'),
			'default'  => true
		),

		array(
			'id'           => 'preloader_image',
			'type'         => 'media',
			'title'        => esc_html__('Preloader Image', 'valkuta'),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__('Upload Image', 'valkuta'),
			'desc'         => esc_html__('Upload Preloader image', 'valkuta'),
			'dependency'   => array('enable_preloader', '==', 'true'),

		),

		array(
			'id'          => 'preloader_background_color',
			'type'        => 'color',
			'title'       => esc_html__('Preloader Background Color', 'valkuta'),
			'desc'        => esc_html__('Select preloader background color.', 'valkuta'),
			'dependency'  => array('enable_preloader', '==', true),
			'output'      => '.preloader-wrapper,#preloader-wrapper .loader-section.section-left,
			#preloader-wrapper .loader-section.section-right,#preloader-two-wrapper,.text-preloader-wrapper',
			'output_mode' => 'background-color'
		),

		array(
			'id'    => 'gmap_api_key',
			'type'  => 'text',
			'title' => esc_html__('Google Map Api Key', 'valkuta'),
			'desc'  => esc_html__('Paste google map api key here.', 'valkuta'),
		),
	)
));