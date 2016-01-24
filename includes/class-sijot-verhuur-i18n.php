<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.rientjeteen.be
 * @since      1.0.0
 *
 * @package    Sijot_Verhuur
 * @subpackage Sijot_Verhuur/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sijot_Verhuur
 * @subpackage Sijot_Verhuur/includes
 * @author     Tim Joosten <topairy@gmail.com>
 */
class Sijot_Verhuur_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sijot-verhuur',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
