<?php
/**
 * Plugin Name: Remove WordPress Page Columns
 * Plugin URI: https://wpfunnelhackers.com/wordpress/plugins
 * Description: Remove WordPress Page Columns
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
