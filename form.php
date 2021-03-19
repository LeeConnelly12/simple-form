<?php
/**
 *
 * A Simple Form
 *
 * @package     SimpleForm
 * @author      Lee Connelly
 * @copyright   2021 Lee Connelly
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Simple Form
 * Description: A simple form plugin
 * Version:     0.1.0
 * Author:      Lee Connelly
 * Author URI:  leeconnelly.dev
 * License:     GPL-2.0-or-later
 */

add_action( 'admin_menu', 'simple_form_setup_menu' );

function simple_form_setup_menu() {
	add_menu_page( 'Simple Form', 'Simple Form', 'manage_options', 'simple-form', 'simple_form_init' );
}

function simple_form_init() {
	echo '<h1>Hello World!</h1>';
}
