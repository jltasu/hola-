<?php

$quick_view = valkuta_option('product_quick_view', true);
$wish_list = valkuta_option('product_wish_list', true);

?>
<div class="td-product-thumb-image">
        <?php
        global $product;
        woocommerce_show_product_loop_sale_flash();
        woocommerce_template_loop_product_thumbnail();
        ?>

    <div class="td-product-thumb-buttons-wrapper">
        <div class="td-product-thumb-overlay"></div>
        <div class="td-product-thumb-buttons">

                <ul class="td-list-style td-list-inline">
                    <?php if ( function_exists( 'YITH_WCQV_Frontend' ) && $quick_view == true): ?>
                        <li class="td-quick-view"><a href="" class="yith-wcqv-button" data-product_id="<?php echo esc_attr( $product->get_id() );?>"><i class="fas fa-search"></i></a></li>
                    <?php endif; ?>
	                <?php if ( function_exists( 'tinvwl_shortcode_addtowishlist' ) && $wish_list == true): ?>
                    <li><?php echo do_shortcode('[ti_wishlists_addtowishlist]');?></li>
	                <?php endif; ?>
                </ul>
        </div>
    </div>
</div>