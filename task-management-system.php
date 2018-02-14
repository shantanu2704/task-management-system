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

if ( !defined( 'TMS_PATH' ) ) {
	/**
	 * Path to the plugin directory.
	 *
	 * @since 0.0.1
	 */
	define( 'TMS_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}

if ( !defined( 'TMS_URL' ) ) {
	/**
	 * URL to the plugin directory.
	 *
	 * @since 0.0.1
	 */
	define( 'TMS_URL', trailingslashit( plugin_dir_url(  __FILE__ ) ) );
}

function register_custom_post_type() {
	register_post_type( 'tms_task', array(
		'labels'		 => array(
			'name'		=> __( 'Tasks' ),
			'singular_name'	=> __( 'Task' ),
			'add_new_item'	=> __( 'Add New Task' ),
			'edit_item'		=> __( 'Edit Task' ),
		),
		'public'		 => true,
		'has_archive'	 => true,
		'capability_type'	=> __( 'task', 'tasks' )

		)
	);
}

add_action( 'init', 'register_custom_post_type' );

/**
 * The core plugin class
 */
require_once TSV_PATH . 'includes/class-task-management-system.php';

$tsv = new TMS_Task();
$tsv->init();
