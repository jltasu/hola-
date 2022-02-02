<?php
$logo_column = valkuta_option('logo_column', 'col-lg-2');
$menu_column = valkuta_option('menu_column', 'col-lg-10');
$enable_cta_btn = valkuta_option('enable_cta_btn', false);

$top_info_text = valkuta_option('header_top_info_text');
$top_social = valkuta_option('header_top_socials');
?>

<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 top-info-column">
                <div class="td-table">
                    <div class="td-table-cell">
						<?php if(is_array($top_info_text)) : ?>
                            <ul class="td-list-style td-list-inline">
								<?php foreach ($top_info_text as $top_info) : ?>
                                    <li class="top-info-item">
                                        <i class="<?php echo esc_attr($top_info['info_icon']);?>"></i>
										<?php echo wp_kses_post($top_info['info_text']);?>
                                    </li>
								<?php endforeach;?>
                            </ul>
						<?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 top-social-icon-column">
                <ul class="td-list-style td-list-inline">
					<?php if(is_array($top_social)) :
						foreach ($top_social as $socialSite) : ?>
                            <li class="top-social-item">
                                <a href="<?php echo esc_url($socialSite['profile_url']);?>">
                                    <i class="<?php echo esc_attr($socialSite['icon']);?>"></i>
                                </a>
                            </li>
						<?php endforeach;
					endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

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