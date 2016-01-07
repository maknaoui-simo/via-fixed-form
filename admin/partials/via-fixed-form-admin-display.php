<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.mondomaine.com/
 * @since      1.0.0
 *
 * @package    Via_Fixed_Form
 * @subpackage Via_Fixed_Form/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

	<h2><?php echo esc_html(get_admin_page_title()); ?></h2>

	<h2 class="nav-tab-wrapper">
            <a href="#left-form" class="nav-tab nav-tab-active"><?php _e('Left Form', $this->plugin_name);?></a>
            <a href="#right-form" class="nav-tab"><?php _e('Right Form', $this->plugin_name);?></a>
	</h2>

	<form method="post" name="vff_options" action="options.php">
	
		<?php

			$options = get_option($this->plugin_name);

			// Left Form
			$disable_left = ($options['disable_left'] != "") ? $options['disable_left'] : "";
			$title_left = ($options['title_left'] != "") ? $options['title_left'] : "";
			$toggle_left_bg_color = ($options['toggle_left_bg_color'] != "") ? $options['toggle_left_bg_color'] : "";
			$toggle_left_text_color = ($options['toggle_left_text_color'] != "") ? $options['toggle_left_text_color'] : "";

			$shortcode_left = ($options['shortcode_left'] != "") ? $options['shortcode_left'] : "";
			$form_left_bg_color = ($options['form_left_bg_color'] != "") ? $options['form_left_bg_color'] : "";
			$form_left_text_color = ($options['form_left_text_color'] != "") ? $options['form_left_text_color'] : "";
			
			$shortcode_ext_left = ($options['shortcode_ext_left'] != "") ? $options['shortcode_ext_left'] : "";

			// Right Form
			$disable_right = ($options['disable_right'] != "") ? $options['disable_right'] : "";
			$title_right = ($options['title_right'] != "") ? $options['title_right'] : "";
			$toggle_right_bg_color = ($options['toggle_right_bg_color'] != "") ? $options['toggle_right_bg_color'] : "";
			$toggle_right_text_color = ($options['toggle_right_text_color'] != "") ? $options['toggle_right_text_color'] : "";

			$shortcode_right = ($options['shortcode_right'] != "") ? $options['shortcode_right'] : "";
			$form_right_bg_color = ($options['form_right_bg_color'] != "") ? $options['form_right_bg_color'] : "";
			$form_right_text_color = ($options['form_right_text_color'] != "") ? $options['form_right_text_color'] : "";

			// Settings field (Required for options to be saved)
			// hidden
			settings_fields($this->plugin_name);
			do_settings_sections($this->plugin_name);

			// Include tabs partials
			require_once('via-fixed-form-left.php');
			require_once('via-fixed-form-right.php');
		?>


        <?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>

	</form>
</div>