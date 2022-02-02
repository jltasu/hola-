<?php
$enable_cta_btn = valkuta_option('enable_cta_btn', false);
$cta_btn_text = valkuta_option('header_cta_btn_text');
$cta_btn_url = valkuta_option('header_cta_btn_url');
$header_search = valkuta_option('enable_header_search', false);
?>

<div class="header-buttons-area text-right">
    <div class="header-buttons-wrapper">
        <ul class="td-ul-style d-flex justify-content-end align-items-center">
	        <?php if($header_search == true ) : ?>
                <li class="header-search"><i class="fas fa-search"></i></li>
	        <?php endif; ?>
			<?php if($enable_cta_btn == true) : ?>
                <li class="header-cta-button">
                    <a class="td_button td_header_cta" href="<?php echo esc_url($cta_btn_url);?>"><?php echo esc_html($cta_btn_text);?></a>
                </li>
			<?php endif;?>
            <li class="mobile-menu-trigger"><span></span><span></span><span></span></li>
        </ul>
    </div>
</div>