<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also includes all of the dependencies used by
 * the plugin, registers the activation and deactivation functions, and defines
 * a function that starts the plugin.
 *
 * @since             0.0.1
 * @package           task_management_system
 *
 * @wordpress-plugin
 * 
 * Plugin Name: Task Management System
 * Description: Custom task management system 
 * Version: 0.0.1
 * Author: Sheneille Patil, Shantanu Desai
 * Author URI: https://profiles.wordpress.org/sheneillepatil, https://profiles.wordpress.org/wpshades
 * Text Domain: task-management-system
 * Domain Path: /languages
 * License: GPL2
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) exit();

if ( !defined( 'TASK_MANAGEMENT_SYSTEM_PATH' ) ) {
	/**
	 * Path to the plugin directory.
	 *
	 * @since 0.0.1
	 */
	define( 'TASK_MANAGEMENT_SYSTEM_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}

if ( !defined( 'TASK_MANAGEMENT_SYSTEM_URL' ) ) {
	/**
	 * URL to the plugin directory.
	 *
	 * @since 0.0.1
	 */
	define( 'TASK_MANAGEMENT_SYSTEM_URL', trailingslashit( plugin_dir_url(  __FILE__ ) ) );
}
