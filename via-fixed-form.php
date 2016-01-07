<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.mondomaine.com/
 * @since             1.0.0
 * @package           Via_Fixed_Form
 *
 * @wordpress-plugin
 * Plugin Name:       Via Fixed Form
 * Plugin URI:        http://www.mondomaine.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Maknaoui Mohamed
 * Author URI:        http://www.mondomaine.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       via-fixed-form
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-via-fixed-form-activator.php
 */
function activate_via_fixed_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-via-fixed-form-activator.php';
	Via_Fixed_Form_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-via-fixed-form-deactivator.php
 */
function deactivate_via_fixed_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-via-fixed-form-deactivator.php';
	Via_Fixed_Form_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_via_fixed_form' );
register_deactivation_hook( __FILE__, 'deactivate_via_fixed_form' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-via-fixed-form.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_via_fixed_form() {

	$plugin = new Via_Fixed_Form();
	$plugin->run();

}
run_via_fixed_form();
