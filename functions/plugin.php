<?php

//add menu in left side bar
function ss_admin_menu()
{
    add_menu_page('smooth_scroll', 'Smooth Scroll', 'manage_options', 'smooth_scroll', 'ss_admin_page', 'dashicons-admin-links');
}

add_action('admin_menu', 'ss_admin_menu');

/**
 * Add setting link on plugin install page
 * 
 * @param type $links
 * @return type
 */
function ss_settings_link($links)
{
    $settings_link = '<a href="admin.php?page=smooth_scroll">' . __('Settings', 'smooth_scroll') . '</a>';
    array_unshift($links, $settings_link);
    return $links;
}

add_filter("plugin_action_links_" . SS_PLUGIN_BASENAME, 'ss_settings_link');
/**
 * get and send email notification.
 */