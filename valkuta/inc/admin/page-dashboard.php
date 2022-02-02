<?php if (!defined('ABSPATH')) {
	die;
} // Cannot access directly. ?>

<div class="wrap td-wrap">

    <div class="td-admin-page-header">

        <div class="td-admin-page-header-text">
            <h1><?php esc_html_e('Welcome to Valkuta!', 'valkuta'); ?></h1>
            <p><?php esc_html_e('Valkuta is a WordPress theme for pet care service.', 'valkuta'); ?></p>
        </div>

        <div class="td-admin-page-header-logo">
            <img src="<?php echo get_theme_file_uri('inc/admin/assets/images/admin-logo.png'); ?>"/>
            <strong>V-<?php echo wp_get_theme()->get('Version'); ?></strong>
        </div>

    </div>

    <div class="td-admin-box">

        <div class="td-admin-box-header">
            <h2><?php esc_html_e('Theme Registration', 'valkuta'); ?></h2>
        </div>

        <div class="td-admin-box-inside">

			<?php

			$option_id   = 'envato_purchase_code_' . Valkuta_Admin::$item_id;
			$option_code = get_option($option_id);

			if (isset($_POST['td_submit'])) {

				$nonce  = sanitize_text_field($_POST['td_nonce']);
				$code   = sanitize_text_field($_POST['td_code']);
				$type   = sanitize_text_field($_POST['td_type']);
				$domain = get_site_url();

				try {

					if (!wp_verify_nonce($nonce, 'td_nonce')) {
						throw new Exception(esc_html__('Error: Nonce could not validated. Please try again.', 'valkuta'));
					}

					if ($type === 'register') {

						if (!preg_match('/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i', $code)) {
							throw new Exception(esc_html__('Error: Invalid purchase code.', 'valkuta'));
						}

						$args = array(
							'timeout' => 120,
							'body'    => array(
								'type'   => 'register',
								'code'   => $code,
								'domain' => $domain,
							),
						);

						$response = wp_remote_post(Valkuta_Admin::$api_url . Valkuta_Admin::$item_id, $args);

						if (!is_wp_error($response)) {

							$body = json_decode(wp_remote_retrieve_body($response), true);

							if (!empty($body['success'])) {

								update_option($option_id, $code);

								$option_code = $code;

							} else if (!empty($body['message'])) {

								throw new Exception($body['message']);

							}

						}

					} else if ($type === 'deregister') {

						$args = array(
							'timeout' => 120,
							'body'    => array(
								'type'   => 'deregister',
								'code'   => $option_code,
								'domain' => $domain,
							),
						);

						$response = wp_remote_post(Valkuta_Admin::$api_url . Valkuta_Admin::$item_id, $args);

						delete_option($option_id);

						$option_code = '';

					}

				} catch (Exception $e) {

					echo sprintf('<p class="td-admin-page-text-error"><i class="dashicons dashicons-remove"></i>%s</p>', $e->getMessage());

				}

			}

			?>

			<?php if (!empty($option_code)) { ?>
                <p class="td-admin-page-text-success"><i
                            class="dashicons dashicons-yes-alt"></i><?php esc_html_e('Thank you for register your theme.', 'valkuta'); ?>
                </p>
			<?php } ?>

            <form action="" method="post">

				<?php wp_nonce_field('td_nonce', 'td_nonce'); ?>

                <div class="td-admin-form">

					<?php if (!empty($option_code)) { ?>
                        <div class="td-admin-form-text">
                            <input type="text" name="td_code"
                                   value="<?php echo esc_attr(substr_replace($option_code, '************', -12)); ?>"
                                   readonly/>
                        </div>
                        <div class="td-admin-form-button">
                            <input type="hidden" name="td_type" value="deregister"/>
                            <input type="submit" name="td_submit" value="<?php esc_attr_e('Deregister', 'valkuta'); ?>"
                                   class="button"/>
                        </div>
					<?php } else { ?>
                        <div class="td-admin-form-text">
                            <input type="text" name="td_code"
                                   placeholder="<?php esc_attr_e('Please enter your purchase code', 'valkuta'); ?>"/>
                        </div>
                        <div class="td-admin-form-button">
                            <input type="hidden" name="td_type" value="register"/>
                            <input type="submit" name="td_submit" value="<?php esc_attr_e('Register', 'valkuta'); ?>"
                                   class="button button-primary"/>
                        </div>
					<?php } ?>

                </div>

                <p>
					<?php esc_html_e('Thank you for choosing Valkuta. You should register your theme to receive demos and to install plugins.', 'valkuta'); ?>
                    <small class="td-admin-text-muted"><?php esc_html_e('( One license can be used only one website. Do you need to register new website? Please purchase a new license and make a new registration. )', 'valkuta'); ?></small>
                </p>

            </form>

        </div>

    </div>

    <div class="td-admin-boxes">

        <div class="td-admin-box">

            <div class="td-admin-box-header">
                <h2><?php esc_html_e('Theme Documentation', 'valkuta'); ?></h2>
            </div>

            <div class="td-admin-box-inside">
                <p><?php esc_html_e('You can find everything about theme settings. See our online documentation.', 'valkuta'); ?></p>
                <a href="https://docs.themedraft.net/wp/valkuta/" target="_blank"
                   class="button"><?php esc_html_e('Go to Documentation', 'valkuta'); ?></a>
            </div>

        </div>

        <div class="td-admin-box">

            <div class="td-admin-box-header">
                <h2><?php esc_html_e('Theme Support', 'valkuta'); ?></h2>
            </div>

            <div class="td-admin-box-inside">
                <p><?php esc_html_e('Do you need help? Feel to free ask any question via our premium support forum.', 'valkuta'); ?></p>
                <a href="https://support.themedraft.net/forum/valkuta-pet-wordpress-theme" target="_blank"
                   class="button"><?php esc_html_e('Go to Support Forum', 'valkuta'); ?></a>
            </div>

        </div>

    </div>

</div>
