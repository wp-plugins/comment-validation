<?php
/*
Plugin Name: Comment Validation
Plugin URI: http://bassistance.de/wordpress-plugin-comment-validation/
Description: Client-side validation for comments
Author: Jörn Zaefferer
Version: 0.3
Author URI: http://bassistance.de
*/

function load_comment_validation_styles() {
	wp_enqueue_style( 'commentvalidation', WP_PLUGIN_URL . '/comment-validation/comment-validation.css');
}
function load_comment_validation_scripts() {
	wp_enqueue_script('jqueryvalidate', WP_PLUGIN_URL . '/comment-validation/jquery.validate.pack.js', array('jquery'));
	wp_enqueue_script('commentvalidation', WP_PLUGIN_URL . '/comment-validation/comment-validation.js', array('jquery','jqueryvalidate'));
}

add_action('wp_print_styles', 'load_comment_validation_styles');
add_action("wp_enqueue_scripts","load_comment_validation_scripts");

?>