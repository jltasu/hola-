<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

function valkuta_inline_style() {

	wp_enqueue_style('valkuta-inline-style', get_theme_file_uri('assets/css/inline-style.css'), array(), VALKUTA_VERSION, 'all');
	
	if(valkuta_option('theme_primary_color')){
		$woo_remove_icon_color = valkuta_option('theme_primary_color');
	}else{
		$woo_remove_icon_color = '#fb6a43';
	}

	$valkuta_custom_css = valkuta_option('valkuta_custom_css');
	$valkuta_logo_image_size = valkuta_option('logo_image_size');
	$valkuta_inline_css = '
        .elementor-inner {
            margin-left: -10px;
            margin-right: -10px;
        }
        
        .elementor-inner .elementor-section-wrap > section:first-of-type .elementor-editor-element-settings {
            display: block !important;
        }
        
        .elementor-inner .elementor-section-wrap > section:first-of-type .elementor-editor-element-settings li {
            display: inline-block !important;
        }
        
        .elementor-editor-active .elementor-editor-element-setting{
            height: 25px;
            line-height: 25px;
            text-align: center;
        }
        
        .elementor-section.elementor-section-boxed>.elementor-container {
		    max-width: 1170px !important;
		}

		.elementor-section-stretched.elementor-section-boxed .elementor-row{
            padding-left: 5px;
            padding-right: 5px;
        }

        .elementor-section-boxed .elementor-container.elementor-column-gap-extended {
            margin-left: -5px;
            margin-right: -5px;
        }
        
        .elementor-section-stretched.elementor-section-boxed .elementor-container.elementor-column-gap-extended {
            margin-left: auto;
            margin-right: auto;
        }
        
        li.elementor-editor-element-setting.elementor-editor-element-edit:before,
		ul.elementor-select-preset-list li:before,
		li.elementor-editor-element-setting.elementor-editor-element-remove:before {
		    content: "" !important;
		}
		.entry-content ul.elementor-select-preset-list{
		    margin: 20px auto 0;
		}
		.elementor-editor-section-settings .elementor-editor-element-setting:first-child:before{
		    left: auto !important;
		}
		
		.elementor-icon-list-items li.elementor-icon-list-item:before{
			content: "";
		}
		
		body .woocommerce a.remove{
			color: '.esc_attr($woo_remove_icon_color).'!important;
		}
		
		body .woocommerce a.remove:hover{
			color: #ffffff !important;
		}
    ';

	if(!empty($valkuta_logo_image_size['width'])){
		$valkuta_inline_css .='
			.logo-wrap img {
			    max-width: inherit;
			}
		';
	}

	$valkuta_inline_css .= ''.$valkuta_custom_css.'';

	wp_add_inline_style('valkuta-inline-style', $valkuta_inline_css);
}

add_action('wp_enqueue_scripts', 'valkuta_inline_style');