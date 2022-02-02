<?php

$valkuta_user_meta = get_the_author_meta( 'valkuta_user_meta' );

?>

<div class="post-author-info">
    <div class="author-img">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 150 ); ?>
    </div>

    <h5 class="post-author-name">
		<?php echo get_the_author(); ?>
    </h5>

    <div class="post-author-social">
        <ul class="td-ul-style td-list-inline">
			<?php

			if ( ! empty( get_the_author_meta( 'user_url' ) ) ) { ?>
                <li><a target="_blank" href="<?php echo esc_url( get_the_author_meta( 'user_url' ) ); ?>"><i
                                class="fas fa-globe-asia"></i></a></li>
				<?php
			}

			if ( ! empty( $valkuta_user_meta['facebook_link'] ) ) { ?>
                <li><a target="_blank" href="<?php echo esc_url( $valkuta_user_meta['facebook_link'] ); ?>"><i
                                class="fab fa-facebook-square"></i></a></li>
				<?php
			}

			if ( ! empty( $valkuta_user_meta['twitter_link'] ) ) {

				?>
                <li>
                    <a target="_blank" href="<?php echo esc_url( $valkuta_user_meta['twitter_link'] ); ?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>

				<?php
			}

			if ( ! empty( $valkuta_user_meta['instagram_link'] ) ) { ?>
                <li><a target="_blank" href="<?php echo esc_url( $valkuta_user_meta['instagram_link'] ); ?>"><i
                                class="fab fa-instagram"></i></a></li>
				<?php
			}

			if ( ! empty( $valkuta_user_meta['linkedin_link'] ) ) { ?>
                <li><a target="_blank" href="<?php echo esc_url( $valkuta_user_meta['linkedin_link'] ); ?>"><i
                                class="fab fa-linkedin-in"></i></a></li>
				<?php
			}

			if ( ! empty( $valkuta_user_meta['dribbble_link'] ) ) { ?>
                <li><a target="_blank" href="<?php echo esc_url( $valkuta_user_meta['dribbble_link'] ); ?>"><i
                                class="fab fa-dribbble"></i></a></li>
				<?php
			}

			if ( ! empty( $valkuta_user_meta['behance_link'] ) ) { ?>
                <li><a target="_blank" href="<?php echo esc_url( $valkuta_user_meta['behance_link'] ); ?>"><i
                                class="fab fa-behance"></i></a></li>
				<?php
			}

			if ( ! empty( $valkuta_user_meta['vimeo_link'] ) ) { ?>
                <li><a target="_blank" href="<?php echo esc_url( $valkuta_user_meta['vimeo_link'] ); ?>"><i
                                class="fab fa-vimeo-v"></i></a></li>
				<?php
			}

			if ( ! empty( $valkuta_user_meta['youtube_link'] ) ) { ?>
                <li><a target="_blank" href="<?php echo esc_url( $valkuta_user_meta['youtube_link'] ); ?>"><i
                                class="fab fa-youtube"></i></a></li>
				<?php
			}
			?>
        </ul>
    </div>

    <div class="post-author-desc">
		<?php
		$author_description = get_the_author_meta( 'description' );
		echo wpautop($author_description);
		?>
    </div>
</div>