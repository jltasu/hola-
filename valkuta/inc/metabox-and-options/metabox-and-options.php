<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_filter( 'csf_welcome_page', '__return_false' );

// Load theme options
require_once 'theme-options/theme-options.php';

// Load common metabox
require_once 'post-format-metaboxes.php';
// Team MetaBox
require_once 'team-metaboxes.php';

// Load common metabox
require_once 'common-metaboxes.php';

// Load user profile metabox
if (defined('THEMEDRAFT_CORE')) {
	require_once 'user-profile-metabox.php';
}