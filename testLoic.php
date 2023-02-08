<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://http://TestLoic.com
 * @since             1.0.0
 * @package           TestLoic
 *
 * @wordpress-plugin
 * Plugin Name:       TestLoic
 * Plugin URI:        https://http://TestLoic.com
 * Description:       Allow video upload to the listing form Listing Form
 * Version:           1.0.0
 * Author:            Loic Ernest
 * Author URI:        https://http://TestLoic.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       TestLoic
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
define( 'TestLoic_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-TestLoic-activator.php
 */
function activate_TestLoic() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-testLoic-activator.php';
	TestLoic_Activator::activate();

}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-testLoic-deactivator.php
 */
function deactivate_TestLoic() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-testLoic-deactivator.php';
	TestLoic_Deactivator::deactivate();

}

register_activation_hook( __FILE__, 'activate_TestLoic' );
register_deactivation_hook( __FILE__, 'deactivate_TestLoic' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-testLoic.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_TestLoic() {

	$plugin = new TestLoic();
	$plugin->run();

}
run_TestLoic();
