<?php
/**
 * Plugin Name:     	WP TODO Admin 2
 * Plugin URI:      	https://github.com/jpham93/wp-admin-todo-2
 * Description:     	A simple WP TODO plugin for the admin dashboard.
 * Author:          	James Pham
 * Author URI:      	https://jamespham.io
 * Version:            	0.1.0
 * Requires at least:	6.4.2
 * Requires PHP: 		8.2
 * Text Domain:     	wp-todo-admin-2
 * Domain Path:     	/languages
 *
 * @package         	Wp_Todo_Admin_2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// ACTIVATION
register_activation_hook(
	__FILE__,
	'wta2_activate'
);
function wta2_activate() {

}

// DEACTIVATION
register_deactivation_hook(
	__FILE__,
	'wta2_deactivate'
);
function wta2_deactivate() {

}

