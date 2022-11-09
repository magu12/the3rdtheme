<?php

/**
 * Enqueue scripts and styles.
 */
/* 
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function th3_deregister_scripts()
{
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'th3_deregister_scripts');

function th3_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'th3_remove_wp_block_library_css', 100); */

function th3_scripts()
{
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('font-style', 'https://use.typekit.net/cjb8kdw.css', array(), _S_VERSION, 'all');

	/* wp_enqueue_style('th3-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION, 'all'); */


	wp_enqueue_script('jquery');
	wp_enqueue_script('th3-scroll-fix', 'https://cdnjs.cloudflare.com/ajax/libs/lethargy/1.0.9/lethargy.min.js', array(), _S_VERSION, true);
	/* wp_enqueue_script('th3-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true); */
}
add_action('wp_enqueue_scripts', 'th3_scripts');
