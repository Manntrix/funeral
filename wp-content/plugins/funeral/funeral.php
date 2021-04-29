<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://medium.com/@manntrix
 * @since             1.0.0
 * @package           Funeral
 *
 * @wordpress-plugin
 * Plugin Name:       Funeral
 * Plugin URI:        https://github.com/manntrix
 * Description:       This plugin is created for internal use only.
 * Version:           1.0.0
 * Author:            Manish Mandal
 * Author URI:        https://medium.com/@manntrix
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       funeral
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FUNERAL_VERSION', '1.0.0' );
require_once plugin_dir_path( __FILE__ ) . 'includes/fields/acf.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-funeral-activator.php
 */
function activate_funeral() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-funeral-activator.php';
	Funeral_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-funeral-deactivator.php
 */
function deactivate_funeral() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-funeral-deactivator.php';
	Funeral_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_funeral' );
register_deactivation_hook( __FILE__, 'deactivate_funeral' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-funeral.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_funeral() {

	$plugin = new Funeral();
	$plugin->run();

}
run_funeral();
