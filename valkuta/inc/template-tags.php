<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package valkuta
 */

if ( ! function_exists( 'valkuta_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function valkuta_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
		/* translators: %s: post date. */
			esc_html_x( ' %s', 'post date', 'valkuta' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on"><i class="far fa-calendar-check"></i>' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'valkuta_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function valkuta_posted_by() {
		$byline = sprintf(
		/* translators: %s: post author. */
			esc_html_x( ' %s', 'post author', 'valkuta' ),
			'<span class="author vcard">' . esc_html( get_the_author() ) . '</span>'
		);

		echo '<span class="byline"><i class="far fa-user"></i> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'valkuta_post_tags' ) ) :
	/**
	 * Prints HTML with meta information for the tags.
	 */
	function valkuta_post_tags() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html_x('', 'list item separator', 'valkuta'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<span class="tags-links"><span class="tag-title">' .esc_html__('Tags:','valkuta').'</span>' .esc_html__(' %1$s', 'valkuta') . '</span>', $tags_list); // WPCS: XSS OK.


			}

		}
	}
endif;

if ( ! function_exists( 'valkuta_theme_post_categories' ) ) :
	/**
	 * Prints HTML with meta information for the categories.
	 */
	function valkuta_theme_post_categories() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list(esc_html__(', ', 'valkuta'));
			if ($categories_list) {
				/* translators: 1: list of categories. */
				printf('<span class="cat-links"><i class="fa fa-folder-o"></i>' . esc_html__('%1$s', 'valkuta') . '</span>', $categories_list); // WPCS: XSS OK.
			}

		}
	}
endif;


if ( ! function_exists( 'valkuta_post_first_category' ) ) :
	/**
	 * Prints post's first category
	 */
	function valkuta_post_first_category(){

		$postCatList = get_the_terms(get_the_ID(), 'category');

		$postFirstCat = $postCatList[0];
		if ( ! empty( $postFirstCat->slug )) {
			echo '<span class="cat-links"><i class="fa fa-folder-o"></i><a href="'.get_term_link( $postFirstCat->slug, 'category' ).'">' . $postFirstCat->name . '</a></span>';
		}

	}
endif;



if ( ! function_exists( 'valkuta_comment_count' ) ) :
	/**
	 * Prints HTML with meta information for the comments.
	 */
	function valkuta_comment_count() {
		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) && get_comments_number() != 0) {
			echo '<span class="comments-link"><i class="far fa-comments"></i>';
			comments_popup_link('', ''.esc_html__('1', 'valkuta').' <span class="comment-count-text">'.esc_html__('Comment', 'valkuta').'</span>', '% <span class="comment-count-text">'.esc_html__('Comments', 'valkuta').'</span>');
			echo '</span>';
		}
	}
endif;