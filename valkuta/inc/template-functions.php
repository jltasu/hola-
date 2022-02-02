<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package valkuta
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function valkuta_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	//Check Elementor Page Builder Used or not
	$elementor_used = get_post_meta(get_the_ID(), '_elementor_edit_mode', true);

	if(is_archive() || is_search()){
		$classes[]        = !!$elementor_used ? 'page-builder-not-used' : 'page-builder-not-used';
	}else{
		$classes[]        = !!$elementor_used ? 'page-builder-used' : 'page-builder-not-used';
	}

	if (class_exists('CSF')){
		$classes[] = 'valkuta-options-enable';
    }

	return $classes;
}
add_filter( 'body_class', 'valkuta_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function valkuta_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'valkuta_pingback_header' );


/**
 * Words limit
 */
function valkuta_words_limit($text, $limit) {
	$words = explode(' ', $text, ($limit + 1));

	if (count($words) > $limit) {
		array_pop($words);
	}

	return implode(' ', $words);
}


/**
 * Get excluded sidebar list
 */
if( ! function_exists( 'valkuta_sidebars' ) ) {
	function valkuta_sidebars() {
        $default = esc_html__('Default', 'valkuta');
		$options = array($default);
		// set ids of the registered sidebars for exclude
		$exclude = array( 'footer-widget' );

		global $wp_registered_sidebars;

		if( ! empty( $wp_registered_sidebars ) ) {
			foreach( $wp_registered_sidebars as $sidebar ) {
				if( ! in_array( $sidebar['id'], $exclude ) ) {
					$options[$sidebar['id']] = $sidebar['name'];
				}
			}
		}

		return $options;

	}
}


/**
 * Iframe embed
 */

function valkuta_iframe_embed( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'valkuta_iframe_embed', 10, 2 );

/**
 * Next - Prev Post Link
 */
if ( !function_exists( 'valkuta_next_prev_post_link' ) ) {
	function valkuta_next_prev_post_link(){ ?>

		<div class="row single-blog-next-prev">

			<?php
				$prev_post = get_previous_post();

				if(!empty( get_previous_post_link())){
					$prev_thumbnail = get_the_post_thumbnail($prev_post->ID, array(85,85) );
					if(!empty($prev_thumbnail)){
						$prev_thumb_class ='have-thumb';
					}else{
						$prev_thumb_class = 'no-thumb';
					}
				}

				$next_post = get_next_post();

				if(!empty( get_next_post_link())){
					$next_thumbnail = get_the_post_thumbnail($next_post->ID, array(85,85) );
					if(!empty($next_thumbnail)){
						$next_thumb_class ='have-thumb';
					}else{
						$next_thumb_class = 'no-thumb';
					}
				}


			?>

			<div class="col-lg-6 col-md-6 text-left prev-post-nav-wrap <?php echo esc_attr($prev_thumb_class);?>">
				<?php if ( !empty( get_previous_post_link())){ ?>
					<a href="<?php echo get_permalink( $prev_post->ID );?>" class="prev-post">
						<?php esc_html_e('Previous Post' , 'valkuta' ); ?>
					</a>
					<?php
                    previous_post_link('%link',"<div class='blog-next-prev-img post-prev-img'>$prev_thumbnail</div>");
					previous_post_link('<h6 class="post-nav-title">%link</h6>');
					?>

					<?php  ?>
				<?php } ?>
			</div>


			<?php if ( !empty( get_next_post_link())){ ?>
				<div class=" col-lg-6 col-md-6 text-right next-post-nav-wrap <?php echo esc_attr($next_thumb_class);?>">
					<a href="<?php echo get_permalink( $next_post->ID );?>" class="next-post">
						<?php esc_html_e('Next Post' , 'valkuta' ); ?>
					</a>
					<?php
                        next_post_link('%link',"<div class='blog-next-prev-img post-next-img'>$next_thumbnail</div>");
                        next_post_link('<h6 class="post-nav-title">%link</h6>');
                    ?>
				</div>
			<?php } ?>
		</div>
		<?php
	}
}


/**
 * Check if a post is a custom post type.
 *
 * @param mixed $post Post object or ID
 *
 * @return boolean
 */
function valkuta_custom_post_types( $post = null ) {
	$allCustomPostTypes = get_post_types( array( '_builtin' => false ) );

	// there are no custom post types
	if ( empty ( $allCustomPostTypes ) ) {
		return false;
	}

	$customTypes     = array_keys( $allCustomPostTypes );
	$currentPostType = get_post_type( $post );

	// could not detect current type
	if ( ! $currentPostType ) {
		return false;
	}

	return in_array( $currentPostType, $customTypes );
}


/**
 * Add span tag in archive list count number
 */
function valkuta_add_span_archive_count($links) {
	$links = str_replace('</a>&nbsp;(', '</a> <span class="post-count-number">(', $links);
	$links = str_replace(')', ')</span>', $links);
	return $links;
}

add_filter('get_archives_link', 'valkuta_add_span_archive_count');


/**
 * Add span tag in category list count number
 */

function valkuta_add_span_category_count($links) {
	$links = str_replace('</a> (', '</a> <span class="post-count-number">(', $links);
	$links = str_replace(')', ')</span>', $links);
	return $links;
}

add_filter('wp_list_categories', 'valkuta_add_span_category_count');