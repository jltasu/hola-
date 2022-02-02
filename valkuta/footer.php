<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package valkuta
 */

if(is_page() || is_singular('post') || valkuta_custom_post_types() && get_post_meta($post->ID, 'valkuta_common_meta', true)) {
	$common_meta = get_post_meta($post->ID, 'valkuta_common_meta', true);
}else{
	$common_meta = array();
}

if (is_array($common_meta) && array_key_exists('footer_style_meta', $common_meta) && $common_meta['footer_style_meta'] != 'default') {
	$selected_footer = $common_meta['footer_style_meta'];
} else  {
	$selected_footer = valkuta_option('default_footer_style', 'footer-style-one');
}

$go_to_top = valkuta_option('go_to_top_button', true);

?>

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
