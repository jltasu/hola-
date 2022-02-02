<?php
$logo_column = valkuta_option('logo_column', 'col-lg-2');
$menu_column = valkuta_option('menu_column', 'col-lg-10');
?>

<div class="main-menu-area" data-uk-sticky="top: 200; animation: uk-animation-slide-top;">
    <div class="container">
        <div class="row align-items-center">
            <div class="<?php echo esc_attr($logo_column); ?> col-sm-4 col-7">
				<?php get_template_part('template-parts/header/header-logo'); ?>
            </div>

            <div class="<?php echo esc_attr($menu_column); ?> col-sm-8 col-5 text-right">
                <div class="d-flex align-items-center justify-content-end header-nav-and-buttons">
					<?php
					get_template_part('template-parts/header/header-menu');
					get_template_part('template-parts/header/header-button');
					?>
                </div>
            </div>
        </div>
    </div>
</div>