<?php

if (!function_exists('add_action')) {
	echo 'Hi there! I\'m just a plugin, not much I can do when called directly.';
	exit;
}

add_action('wp_before_admin_bar_render', 'scode_add_admin_bar_link');
function scode_add_admin_bar_link() {
	if (current_user_can('manage_options')) {
		global $wp_admin_bar;
		$wp_admin_bar->add_menu(
			array(
				'id' => 'scode-by-mojwp',
				'title' => '<span class="ab-icon dashicons-list-view"></span><span class="ab-label">' .  __('My shortcodes', 'scode') . '</span>',
				'href' => admin_url('admin.php?page=scode')
			)
		);
	}
}