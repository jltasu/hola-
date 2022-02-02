<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package valkuta
 */


if (is_page() || is_singular('post') || valkuta_custom_post_types() && get_post_meta($post->ID, 'valkuta_common_meta', true)) {
	$common_meta = get_post_meta($post->ID, 'valkuta_common_meta', true);
} else {
	$common_meta = array();
}

if (is_array($common_meta) && array_key_exists('sidebar_meta', $common_meta) && $common_meta['sidebar_meta'] != '0') {
	$selected_sidebar = $common_meta['sidebar_meta'];
} else if (is_singular('post')) {
	$selected_sidebar = valkuta_option('single_post_default_sidebar', 'sidebar');
} else if (is_singular('page')) {
	$selected_sidebar = valkuta_option('page_default_sidebar', 'sidebar');
}else if (is_singular('valkuta_service')) {
	$selected_sidebar = valkuta_option('service_default_sidebar', 'service-sidebar');
} else if (is_singular('valkuta_team')) {
	$selected_sidebar = valkuta_option('team_default_sidebar', 'sidebar');
} else if (function_exists('is_shop') && is_shop()) {
	$selected_sidebar = 'shop-sidebar';
} else if (is_singular('product') || function_exists('is_product_category') && is_product_category()) {
	$selected_sidebar = valkuta_option('product_default_sidebar', 'shop-sidebar');
} else {
	$selected_sidebar = 'sidebar';
}

?>

<aside class="sidebar-widget-area">
	<?php
	if (is_active_sidebar($selected_sidebar)) {
		dynamic_sidebar($selected_sidebar);
	}
	?>
</aside>
