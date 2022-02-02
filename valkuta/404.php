<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package valkuta
 */

get_header();

$error_banner_title = valkuta_option('error_page_title');
$not_found_text     = valkuta_option('not_found_text');
$go_back_home       = valkuta_option('go_back_home', true);
$error_banner      = valkuta_option('error_banner', true);
$banner_text_align  = valkuta_option('error_banner_text_align', 'left');
// btt = Banner Title Tag
$btt = valkuta_option('banner_title_tag', 'h2');
$banner_overlay = valkuta_option( 'banner_overlay', true );
?>
    <?php if($error_banner == true) : ?>
    <div class="banner-area error-page-banner">
	    <?php if($banner_overlay == true) : ?>
            <div class="banner-overlay"></div>
	    <?php endif; ?>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="banner-content text-<?php echo esc_attr( $banner_text_align ); ?>">
                        <<?php echo esc_html($btt);?> class="banner-title">
	                        <?php echo esc_html($error_banner_title); ?>
                        </<?php echo esc_html($btt);?>>
	                    <?php if ( function_exists( 'bcn_display' ) ) :?>
                            <div class="breadcrumb-container">
			                    <?php bcn_display();?>
                            </div>
	                    <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape"></div>
    </div>
    <?php endif; ?>

	<div id="primary" class="content-area">
        <div class="container not-found-content">
            <div class="row">
                <div class="col-lg-6 order-lg-0 order-last td-vertical-center">
                    <div class="not-found-text-wrapper">
						<?php echo wpautop($not_found_text); ?>

						<?php if ($go_back_home == true) : ?>
                        <div class="error-page-button">

                            <a class="td_button"
                               href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Go Back Home', 'valkuta') ?></a>

                        </div>
						<?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-6 td-vertical-center">
                    <div class="text-404">
                        <h2><?php echo esc_html__('404', 'valkuta') ?></h2>
                    </div>
                </div>
            </div>
        </div>
	</div><!-- #primary -->

<?php
get_footer();
