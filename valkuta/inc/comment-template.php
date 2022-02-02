<?php

function valkuta_comment_form($valkuta_comment_form_fields){

	$valkuta_comment_form_fields['author'] = '
        <div class="row comment-form-wrap">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="author" id="name-cmt" placeholder="'.esc_attr__('Name*', 'valkuta').'">
            </div>
        </div>
    ';

	$valkuta_comment_form_fields['email'] =  '
        <div class="col-lg-6">
            <div class="form-group">
                <input type="email" name="email" id="email-cmt" placeholder="'.esc_attr__('Email*', 'valkuta').'">
            </div>
        </div>
    ';

	$valkuta_comment_form_fields['url'] = '
        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" name="url" id="website-cmt"  placeholder="'.esc_attr__('Website', 'valkuta').'">
            </div>
        </div>
        </div>
        
    ';

	return $valkuta_comment_form_fields;
}

add_filter('comment_form_default_fields', 'valkuta_comment_form');

function valkuta_comment_default_form($default_form){

	$default_form['comment_field'] = '
        <div class="row">
            <div class="col-sm-12">
                <div class="comment-message">
                    <textarea name="comment" id="message-cmt" rows="5" required="required"  placeholder="'.esc_attr__('Your Comment*', 'valkuta').'"></textarea>
                </div>
            </div>
        </div>
    ';

	$default_form['submit_button'] = '
        <button type="submit" class="td_button">'.esc_html__('Post Comment', 'valkuta').'</button>
    ';

	$default_form['comment_notes_before'] = esc_html__('All fields marked with an asterisk (*) are required', 'valkuta' );
	$default_form['title_reply'] = esc_html__('Leave A Comment', 'valkuta');
	$default_form['title_reply_before'] = '<h4 class="comments-heading">';
	$default_form['title_reply_after'] = '</h4>';

	return $default_form;
}

add_filter('comment_form_defaults', 'valkuta_comment_default_form');


function valkuta_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'valkuta_move_comment_field_to_bottom' );