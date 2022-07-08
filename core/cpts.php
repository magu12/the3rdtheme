<?php
// Register Custom Post Type Smart Pools
function custom_post_types()
{

	$hero_labels = array(
		'name' => _x('Hero', 'post type general name'),
		'singular_name' => _x('Hero', 'post type singular name'),
		'menu_name' => _x('Hero', 'admin menu'),
		'name_admin_bar' => _x('Hero', 'add new on admin bar'),
		'add_new' => _x('Add New', ''),
		'add_new_item' => __('Add New Hero Block'),
		'edit_item' => __('Edit Hero'),
		'new_item' => __('New Hero Block'),
		'all_items' => __('All Hero Blocks'),
		'view_item' => __('View Hero Block'),
		'search_items' => __('Search Hero Blocks'),
		'not_found' => __('No Hero Block found'),
		'not_found_in_trash' => __('No Hero Block found in Trash'),
		'parent_item_colon' => __('Parent Team:'),

	);

	$hero_args = array(
		'hierarchical' => true,
		'labels' => $hero_labels,
		'public' => true,
		'publicly_queryable' => true,
		'description' => __(''),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'team'),
		'capability_type' => 'page',
		'has_archive' => true,
		'menu_position' => 21,
		"show_in_rest" => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields')
	);

	register_post_type('hero', $hero_args);

	$service_consulting_labels = array(
		'name' => _x('Consulting services', 'post type general name'),
		'singular_name' => _x('Consulting services', 'post type singular name'),
		'menu_name' => _x('Consulting services', 'admin menu'),
		'name_admin_bar' => _x('Consulting services', 'add new on admin bar'),
		'add_new' => _x('Add New', ''),
		'add_new_item' => __('Add New Consulting service'),
		'edit_item' => __('Edit Consulting service'),
		'new_item' => __('New Consulting service'),
		'all_items' => __('All Consulting services'),
		'view_item' => __('View Consulting service'),
		'search_items' => __('Search Consulting services'),
		'not_found' => __('No Consulting service found'),
		'not_found_in_trash' => __('No Consulting service found in Trash'),
		'parent_item_colon' => __('Parent Team:'),

	);

	$service_consulting_args = array(
		'hierarchical' => true,
		'labels' => $service_consulting_labels,
		'public' => true,
		'publicly_queryable' => true,
		'description' => __(''),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'team'),
		'capability_type' => 'page',
		'has_archive' => true,
		'menu_position' => 21,
		"show_in_rest" => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields')
	);

	register_post_type('service_consulting', $service_consulting_args);

	$service_digital_labels = array(
		'name' => _x('Digital services', 'post type general name'),
		'singular_name' => _x('Digital services', 'post type singular name'),
		'menu_name' => _x('Digital services', 'admin menu'),
		'name_admin_bar' => _x('Digital services', 'add new on admin bar'),
		'add_new' => _x('Add New', ''),
		'add_new_item' => __('Add New Digital service'),
		'edit_item' => __('Edit Digital service'),
		'new_item' => __('New Digital service'),
		'all_items' => __('All Digital services'),
		'view_item' => __('View Digital service'),
		'search_items' => __('Search Digital services'),
		'not_found' => __('No Digital service found'),
		'not_found_in_trash' => __('No Digital service found in Trash'),
		'parent_item_colon' => __('Parent Team:'),

	);

	$service_digital_args = array(
		'hierarchical' => true,
		'labels' => $service_digital_labels,
		'public' => true,
		'publicly_queryable' => true,
		'description' => __(''),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'team'),
		'capability_type' => 'page',
		'has_archive' => true,
		'menu_position' => 21,
		"show_in_rest" => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields')
	);

	register_post_type('service_digital', $service_digital_args);

	$cases_labels = array(
		'name' => _x('Cases', 'post type general name'),
		'singular_name' => _x('Cases', 'post type singular name'),
		'menu_name' => _x('Cases', 'admin menu'),
		'name_admin_bar' => _x('Cases', 'add new on admin bar'),
		'add_new' => _x('Add New', ''),
		'add_new_item' => __('Add New Case'),
		'edit_item' => __('Edit Case'),
		'new_item' => __('New Case'),
		'all_items' => __('All Cases'),
		'view_item' => __('View Case'),
		'search_items' => __('Search Cases'),
		'not_found' => __('No Cases found'),
		'not_found_in_trash' => __('No Case found in Trash'),
		'parent_item_colon' => __('Parent Case:'),

	);

	$cases_args = array(
		'hierarchical' => true,
		'labels' => $cases_labels,
		'public' => true,
		'publicly_queryable' => true,
		'description' => __(''),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'team'),
		'capability_type' => 'page',
		'has_archive' => true,
		'menu_position' => 21,
		"show_in_rest" => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields')
	);

	register_post_type('cases', $cases_args);

	$team_labels = array(
		'name' => _x('Team', 'post type general name'),
		'singular_name' => _x('Team', 'post type singular name'),
		'menu_name' => _x('Team', 'admin menu'),
		'name_admin_bar' => _x('Team', 'add new on admin bar'),
		'add_new' => _x('Add New', ''),
		'add_new_item' => __('Add New Team Member'),
		'edit_item' => __('Edit Team'),
		'new_item' => __('New Team Member'),
		'all_items' => __('All Team Members'),
		'view_item' => __('View Team Member'),
		'search_items' => __('Search Team Members'),
		'not_found' => __('No Team Member found'),
		'not_found_in_trash' => __('No Team Member found in Trash'),
		'parent_item_colon' => __('Parent Team:'),

	);

	$team_args = array(
		'hierarchical' => true,
		'labels' => $team_labels,
		'public' => true,
		'publicly_queryable' => true,
		'description' => __(''),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'team'),
		'capability_type' => 'page',
		'has_archive' => true,
		'menu_position' => 20,
		"show_in_rest" => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields')
	);

	register_post_type('team', $team_args);

	$legal_labels = array(
		'name' => _x('Legal text', 'post type general name'),
		'singular_name' => _x('Legal text', 'post type singular name'),
		'menu_name' => _x('Legal text', 'admin menu'),
		'name_admin_bar' => _x('Legal text', 'add new on admin bar'),
		'add_new' => _x('Add New', ''),
		'add_new_item' => __('Add New Legal text'),
		'edit_item' => __('Edit Legal text'),
		'new_item' => __('New Legal text'),
		'all_items' => __('All Legal text'),
		'view_item' => __('View Legal text'),
		'search_items' => __('Search Legal text'),
		'not_found' => __('No Legal text found'),
		'not_found_in_trash' => __('No Legal text found in Trash'),
		'parent_item_colon' => __('Parent Legal text:'),

	);

	$legal_args = array(
		'hierarchical' => true,
		'labels' => $legal_labels,
		'public' => true,
		'publicly_queryable' => true,
		'description' => __(''),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'team'),
		'capability_type' => 'page',
		'has_archive' => true,
		'menu_position' => 20,
		"show_in_rest" => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields')
	);

	register_post_type('legal', $legal_args);
}
add_action('init', 'custom_post_types', 0);
