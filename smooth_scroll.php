<?php

/*
  Plugin Name: Lightweight Smooth Scroll
  Description: A very simple and lightweight smooth scroll plugin.
  Version: 1.0
  Author: Adrii
  Author URI: https://github.com/AdrianVillamayor/Smooth_Scroll_WP
  License: MIT
 */

define('SS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('SS_PLUGIN_VERSION', '1.0');
define('SS_PLUGIN_BASENAME', plugin_basename(__FILE__));

// function library file
require_once SS_PLUGIN_DIR . 'functions/function.php';
require_once SS_PLUGIN_DIR . 'functions/plugin.php';

//Admin UI file to show admin setting interface
function ss_admin_page()
{
    require_once SS_PLUGIN_DIR . 'admin/setting.php';
}