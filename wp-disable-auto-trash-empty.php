<?php

/*
Plugin Name: Ralex Disable WordPress Auto Trash Empty
Plugin URI: https://github.com/disable-wordpress-auto-trash
Description: Prevent WordPress from automatically empty trash every 30 days.
Version: 1.0
Author: ralex
Author URI: https://github.com/rossalexander
License: GPL2
*/

add_action('init', 'viabold_disable_schedule_delete');
function viabold_disable_schedule_delete()
{
    remove_action('wp_scheduled_delete', 'wp_scheduled_delete');
}

