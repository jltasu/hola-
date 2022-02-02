<?php
/**
 * Template Name: Blog Left Sidebar
 */

get_header();

if ( get_post_meta( $post->ID, 'valkuta_common_meta', true ) ) {
	$common_meta = get_post_meta( $post->ID, 'valkuta_common_meta', true );
} else {
	$common_meta = array();
}


if ( array_key_exists( 'sidebar_meta', $common_meta ) && $common_meta['sidebar_meta'] != '0' ) {
	$selected_sidebar = $common_meta['sidebar_meta'];
} else {
	$selected_sidebar = valkuta_option( 'page_default_sidebar', 'sidebar' );
}


if ( array_key_exists( 'enable_banner', $common_meta ) ) {
	$page_banner = $common_meta['enable_banner'];
} else {
	$page_banner = true;
}

if ( array_key_exists( 'custom_title', $common_meta ) ) {
	$custom_title = $common_meta['custom_title'];
} else {
	$custom_title = '';
}

if ( array_key_exists( 'banner_text_align_meta', $common_meta ) && $common_meta['banner_text_align_meta'] != 'default' ) {
	$banner_text_align = $common_meta['banner_text_align_meta'];
} else {
	$banner_text_align = valkuta_option( 'banner_default_text_align', 'center' );
}

if (is_array($common_meta) && array_key_exists('footer_style_meta', $common_meta) && $common_meta['footer_style_meta'] != 'default') {
	$selected_footer = $common_meta['footer_style_meta'];
} else  {
	$selected_footer = valkuta_option('default_footer_style', 'footer-style-one');
}

$go_to_top = valkuta_option('go_to_top_button', true);

?>


<?php if ( $page_banner == true ) : ?>
    <div class="banner-area page-banner">
        <div class="banner-overlay"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="banner-content text-<?php echo esc_attr( $banner_text_align ); ?>">
                        <h2 class="banner-title">

							<?php
							if ( ! empty( $custom_title ) ) {
								echo esc_html( $custom_title );
							} else {
								the_title();
							}
							?>
                        </h2>
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

<div id="primary" class="content-area layout-left-sidebar">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 order-lg-0 order-last">
				<?php get_sidebar(); ?>
            </div>

            <div class="col-lg-8">
                <div class="row all-posts-wrapper">
					<?php
					$page     = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
					$paged    = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );
					$wp_query = new WP_Query( array(
						'post_type'      => 'post',
						'paged'          => $paged,
						'page'           => $paged,
						'posts_per_page' => 4,
					) );
					?>

					<?php
					if ( $wp_query->have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
							?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
						<?php
						endif;

						while ( $wp_query->have_posts() ) :
							the_post();
							get_template_part( 'template-parts/post/post-item-wrapper' );

						endwhile;
						wp_reset_postdata();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
                </div>

                <div class="row post-pagination">
                    <div class="col-lg-12 text-center">
						<?php
						$GLOBALS['wp_query']->max_num_pages = $wp_query->max_num_pages;

						the_posts_pagination( array(
							'next_text'          => '<i class="fas fa-angle-double-right"></i>',
							'prev_text'          => '<i class="fas fa-angle-double-left"></i>',
							'screen_reader_text' => ' ',
							'type'               => 'list'
						) );

						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #primary -->

</div><!-- #content -->

<footer class="site-footer <?php echo esc_attr($selected_footer);?>">

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-info">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="site-info-left">
									<?php
									$footer_info_right_text = valkuta_option('footer_info_right_text');
									echo wpautop($footer_info_right_text);
									?>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="site-info-right">
									<?php
									$copyright_text = valkuta_option('copyright_text');
									echo wpautop($copyright_text);
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<?php
		if($selected_footer == 'footer-style-one'){
			$show_footer_image = valkuta_option('show_footer_image', false);
			if($show_footer_image == true){ ?>
                <div class="footer-one-bottom-image"></div>

			<?php }
		}else{ ?>
            <div class="footer-two-bottom-image"></div>
		<?php }
		?>
		<?php if($go_to_top == true) : ?>
            <div class="scroll-to-top"><i class="fa fa-angle-double-up"></i></div>
		<?php endif;?>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>