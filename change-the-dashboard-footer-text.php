<?php
/**
 * Plugin Name: Change the Dashboard Footer Text
 * Plugin URI: https://wpfunnelhackers.com/wordpress/plugins
 * Description: Change the Dashboard Footer Text
 * Version: 1.0.0
 * Author: WP Funnel Hackers
 * Author URI: https://wpfunnelhackers.com
 * License:GPL2
 *
 */


function remove_footer_admin () {
    echo "Your own text";
} 
 
add_filter('admin_footer_text', 'remove_footer_admin');
