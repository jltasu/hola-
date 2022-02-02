<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package valkuta
 */

get_header();
$archive_layout = valkuta_option('archive_layout', 'right-sidebar');
$banner_text_align = valkuta_option('banner_default_text_align', 'center');
$archive_banner = valkuta_option('archive_banner', true);
// btt = Banner Title Tag
$btt = valkuta_option('banner_title_tag', 'h2');
$banner_overlay = valkuta_option( 'banner_overlay', true );
?>

    <?php if($archive_banner == true):?>
    <div class="banner-area archive-banner">
	    <?php if($banner_overlay == true) : ?>
            <div class="banner-overlay"></div>
	    <?php endif; ?>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="banner-content text-<?php echo esc_attr($banner_text_align);?>">
	                    <?php
	                    the_archive_title( '<'.$btt.' class="banner-title">', '</'.$btt.'>' );
	                    ?>
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


    <div id="primary" class="content-area layout-<?php echo esc_attr($archive_layout);?>">
        <div class="container">
			<?php
			if($archive_layout == 'grid'){
				get_template_part( 'template-parts/post/post-grid');
			}else{
				get_template_part( 'template-parts/post/post-sidebar');
			}
			?>
        </div>
    </div>
<?php
get_footer();
