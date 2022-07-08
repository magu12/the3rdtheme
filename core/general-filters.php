<?php
function th3_allow_upload_types($mimes)
{
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'th3_allow_upload_types');

// Add title for img
function th3_restore_image_title($html, $id)
{
	$attachment = get_post($id);
	$mytitle = $attachment->post_title;
	return str_replace('<img', '<img title="' . $mytitle . '" ', $html);
}
add_filter('media_send_to_editor', 'th3_restore_image_title', 15, 2);

// Disable update for the acf plugin
function filter_plugin_updates($value)
{
	unset($value->response['advanced-custom-fields-pro/acf.php']);
	return $value;
}
add_filter('site_transient_update_plugins', 'filter_plugin_updates');

// Add the icon for parent menu item
function nav_menu_item_change_submenu($item_output, $item, $depth, $args)
{
	if (in_array('menu-item-has-children', $item->classes)) {
		$item_output .= '<span class="parent-icon"></span>';
	}

	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'nav_menu_item_change_submenu', 10, 4);

// Some ACF filters
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function ($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});

