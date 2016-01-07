<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.mondomaine.com/
 * @since      1.0.0
 *
 * @package    Via_Fixed_Form
 * @subpackage Via_Fixed_Form/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Via_Fixed_Form
 * @subpackage Via_Fixed_Form/includes
 * @author     Maknaoui Mohamed <simo.viaprestige@gmail.com>
 */
class Via_Fixed_Form_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'via-fixed-form',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
