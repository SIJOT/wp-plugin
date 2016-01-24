<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.rientjeteen.be
 * @since             1.0.0
 * @package           Sijot_Verhuur
 *
 * @wordpress-plugin
 * Plugin Name:       Sint-Joris Verhuur
 * Plugin URI:        https://github.com/SIJOT/wp-plugin
 * Description:       Small rental system for the rentals.
 * Version:           1.0.0
 * Author:            Tim Joosten
 * Author URI:        http://www.rientjeteen.be
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sijot-verhuur
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sijot-verhuur-activator.php
 */
function activate_sijot_verhuur() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sijot-verhuur-activator.php';
	Sijot_Verhuur_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sijot-verhuur-deactivator.php
 */
function deactivate_sijot_verhuur() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sijot-verhuur-deactivator.php';
	Sijot_Verhuur_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sijot_verhuur' );
register_deactivation_hook( __FILE__, 'deactivate_sijot_verhuur' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sijot-verhuur.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sijot_verhuur() {

	$plugin = new Sijot_Verhuur();
	$plugin->run();

}
run_sijot_verhuur();
