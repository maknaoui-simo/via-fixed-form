<?php
/**
 * Partial for left form
 *
 *
 *
 * @link       http://mondomaine.com
 * @since      1.0.0
 *
 * @package    via-fixed-form
 * @subpackage via-fixed-form/admin/partials
 */
?>

<div id="left-form" class="wrap metabox-holder columns-2 vff-metaboxes">
	
	<h2><?php esc_attr_e('Left Form Options', $this->plugin_name); ?></h2>
    <!-- Disabele form -->
    
    <h3><?php esc_attr_e('Toggle button Settings', $this->plugin_name); ?></h3>
    
    <!-- Toggle button settigns -->
	<fieldset>
        <legend class="screen-reader-text"><span><?php _e('Display left form', $this->plugin_name); ?></span></legend>
        <label for="<?php echo $this->plugin_name; ?>-disable_left">
            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-disable_left" name="<?php echo $this->plugin_name; ?>[disable_left]" value="1" <?php checked($disable_left, 1); ?>/>
            <span><?php esc_attr_e('By checking this box your Left Form will be disabled', $this->plugin_name); ?></span>
        </label>
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Title for toggle Button', $this->plugin_name); ?></span></legend>
        <h4><?php esc_attr_e('Toggle button title', $this->plugin_name); ?></h4>
        <input type="text" id="<?php echo $this->plugin_name; ?>-title-left" name="<?php echo $this->plugin_name; ?>[title_left]" value="<?php if(!empty($title_left)) echo $title_left; ?>" class="regular-text">
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Background Color', $this->plugin_name);?></span></legend>
        <h4><?php esc_attr_e('Toggle button Background Color', $this->plugin_name);?></h4>
        <input type="text" class="color-picker" data-alpha="true" id="<?php echo $this->plugin_name;?>-toggle_left_bg_color" name="<?php echo $this->plugin_name;?>[toggle_left_bg_color]" value="<?php echo $toggle_left_bg_color;?>" />
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Text Color', $this->plugin_name);?></span></legend>
        <h4><?php esc_attr_e('Toggle button Text Color', $this->plugin_name);?></h4>
        <input type="text" class="color-picker" data-alpha="true" id="<?php echo $this->plugin_name;?>-toggle_left_text_color" name="<?php echo $this->plugin_name;?>[toggle_left_text_color]" value="<?php echo $toggle_left_text_color;?>" />
    </fieldset>
    <!-- TODO : Icons choose -->

    <!-- END Toggle button settigns -->
    <hr>

    <!-- BEGIN form left content -->
    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Shortcode Contact form 7', $this->plugin_name); ?></span></legend>
        <h4><?php esc_attr_e('Contact Form Shortcode (Contact form 7)', $this->plugin_name); ?></h4>
        <textarea cols="80" rows="1" id="<?php echo $this->plugin_name; ?>-shortcode-left" name="<?php echo $this->plugin_name; ?>[shortcode_left]"><?php if(!empty($shortcode_left)) echo $shortcode_left; ?></textarea>
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Background Color', $this->plugin_name);?></span></legend>
        <h4><?php esc_attr_e('Form content Background Color', $this->plugin_name);?></h4>
        <input type="text" class="color-picker" data-alpha="true" id="<?php echo $this->plugin_name;?>-form_left_bg_color" name="<?php echo $this->plugin_name;?>[form_left_bg_color]" value="<?php echo $form_left_bg_color;?>" />
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Text Color', $this->plugin_name);?></span></legend>
        <h4><?php esc_attr_e('Form content Text Color', $this->plugin_name);?></h4>
        <input type="text" class="color-picker" data-alpha="true" id="<?php echo $this->plugin_name;?>-form_left_text_color" name="<?php echo $this->plugin_name;?>[form_left_text_color]" value="<?php echo $form_left_text_color;?>" />
    </fieldset>

    <!-- END form left content -->
    
    <hr>
    <h3>Second form left</h3>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Shortcode Contact form 7', $this->plugin_name); ?></span></legend>
        <h4><?php esc_attr_e('Contact Form Shortcode (Contact form 7)', $this->plugin_name); ?></h4>
        <textarea cols="80" rows="1" id="<?php echo $this->plugin_name; ?>-shortcode-ext-left" name="<?php echo $this->plugin_name; ?>[shortcode_ext_left]"><?php if(!empty($shortcode_ext_left)) echo $shortcode_ext_left; ?></textarea>
    </fieldset>


</div>