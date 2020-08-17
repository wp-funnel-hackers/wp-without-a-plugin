<?php
/**
 * Plugin Name: Removal All Dashboard Widgets
 * Plugin URI: https://wpfunnelhackers.com/wordpress/plugins
 * Description: Removal All Dashboard Widgets
 * Version: 1.0.0
 * Author: WP Funnel Hackers
 * Author URI: https://wpfunnelhackers.com
 * License:GPL2
 *
 */

function remove_pages_columns($defaults) {
  unset($defaults['date']); 
  return $defaults;    
} 
add_filter('manage_pages_columns', 'remove_pages_columns');
