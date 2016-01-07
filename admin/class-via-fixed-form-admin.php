<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.mondomaine.com/
 * @since      1.0.0
 *
 * @package    Via_Fixed_Form
 * @subpackage Via_Fixed_Form/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Via_Fixed_Form
 * @subpackage Via_Fixed_Form/admin
 * @author     Maknaoui Mohamed <simo.viaprestige@gmail.com>
 */
class Via_Fixed_Form_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Via_Fixed_Form_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Via_Fixed_Form_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		if( 'settings_page_via-fixed-form' == get_current_screen()->id ){
			// CSS stylesheet for Color Picker
			wp_enqueue_style( 'wp-color-picker' );

			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/via-fixed-form-admin.css', array('wp-color-picker'), $this->version, 'all' );
		}


	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Via_Fixed_Form_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Via_Fixed_Form_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		if ( 'settings_page_via-fixed-form' == get_current_screen()->id ) {
			wp_enqueue_script( 'wp-color-picker-alpha', plugin_dir_url( __FILE__ ) . 'js/wp-color-picker-alpha.min.js', array( 'wp-color-picker' ), '1.2', false );
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/via-fixed-form-admin.js', array( 'jquery' ), $this->version, false );
		}


	}


	/**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 *
	 * @since    1.0.0
	 */
	 
	public function add_plugin_admin_menu() {

	    /*
	     * Add a settings page for this plugin to the Settings menu.
	     *
	     * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
	     *
	     *        Administration Menus: http://codex.wordpress.org/Administration_Menus
	     *
	     */
	    add_options_page( 'Via Fixed Form Long', 'Via Fixed Form', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
	    );
	}


	/**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */
	 
	public function add_action_links( $links ) {
	    /*
	    *  Documentation : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
	    */
	   $settings_link = array(
	    '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
	   );
	   return array_merge(  $settings_link, $links );

	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */
	 
	public function display_plugin_setup_page() {
	    include_once( 'partials/via-fixed-form-admin-display.php' );
	}

	public function options_update() {
		register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
	}

	/**
	 * [validate validate all values entered in the form options panel from the admin area]
	 * @param  [type] $input [get all value from Options panel]
	 * @return [type] array()       [description]
	 */
	public function validate($input) {
		$valid = array();
		// Left Form
		$valid['disable_left'] = ( isset($input['disable_left']) && !empty($input['disable_left']) ) ? 1 : 0;

		$valid['title_left'] = (isset($input['title_left']) && !empty($input['title_left'])) ? sanitize_text_field($input['title_left']) : '';
		$valid['toggle_left_bg_color'] = (isset($input['toggle_left_bg_color']) && !empty($input['toggle_left_bg_color'])) ? sanitize_text_field($input['toggle_left_bg_color']) : '';
		$valid['toggle_left_text_color'] = (isset($input['toggle_left_text_color']) && !empty($input['toggle_left_text_color'])) ? sanitize_text_field($input['toggle_left_text_color']) : '';
		
		$valid['shortcode_left'] = (isset($input['shortcode_left']) && !empty($input['shortcode_left'])) ? sanitize_text_field($input['shortcode_left']) : '';
		$valid['form_left_bg_color'] = (isset($input['form_left_bg_color']) && !empty($input['form_left_bg_color'])) ? sanitize_text_field($input['form_left_bg_color']) : '';
		$valid['form_left_text_color'] = (isset($input['form_left_text_color']) && !empty($input['form_left_text_color'])) ? sanitize_text_field($input['form_left_text_color']) : '';

		$valid['shortcode_ext_left'] = (isset($input['shortcode_ext_left']) && !empty($input['shortcode_ext_left'])) ? sanitize_text_field($input['shortcode_ext_left']) : '';
		// Right Form
		$valid['disable_right'] = ( isset($input['disable_right']) && !empty($input['disable_right']) ) ? 1 : 0;

		$valid['title_right'] = (isset($input['title_right']) && !empty($input['title_right'])) ? sanitize_text_field($input['title_right']) : '';
		$valid['toggle_right_bg_color'] = (isset($input['toggle_right_bg_color']) && !empty($input['toggle_right_bg_color'])) ? sanitize_text_field($input['toggle_right_bg_color']) : '';
		$valid['toggle_right_text_color'] = (isset($input['toggle_right_text_color']) && !empty($input['toggle_right_text_color'])) ? sanitize_text_field($input['toggle_right_text_color']) : '';
		
		$valid['shortcode_right'] = (isset($input['shortcode_right']) && !empty($input['shortcode_right'])) ? sanitize_text_field($input['shortcode_right']) : '';
		$valid['form_right_bg_color'] = (isset($input['form_right_bg_color']) && !empty($input['form_right_bg_color'])) ? sanitize_text_field($input['form_right_bg_color']) : '';
		$valid['form_right_text_color'] = (isset($input['form_right_text_color']) && !empty($input['form_right_text_color'])) ? sanitize_text_field($input['form_right_text_color']) : '';

                /*if ( !empty($valid['left_background_color']) && !preg_match( '/^#[a-f0-9]{6}$/i', $valid['left_background_color']  ) ) { 
                // if user insert a HEX color with #
                    add_settings_error(
                            'left_background_color',                     // Setting title
                            'left_background_color_texterror',            // Error ID
                            'Please enter a valid hex value color',     // Error message
                            'error'                         // Type of message
                    );
                }*/

		return $valid;
	}

}
