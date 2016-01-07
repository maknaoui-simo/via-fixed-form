<?php
/**
 * Partial for right form
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

<div id="right-form" class="wrap metabox-holder columns-2 vff-metaboxes hidden">
    
    <h2><?php esc_attr_e('Right Form Options', $this->plugin_name); ?></h2>
    <!-- Disabele form -->
    
    <h3><?php esc_attr_e('Toggle button Settings', $this->plugin_name); ?></h3>
    
    <!-- Toggle button settigns -->
    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Display right form', $this->plugin_name); ?></span></legend>
        <label for="<?php echo $this->plugin_name; ?>-disable_right">
            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-disable_right" name="<?php echo $this->plugin_name; ?>[disable_right]" value="1" <?php checked($disable_right, 1); ?>/>
            <span><?php esc_attr_e('By checking this box your Left Form will be disabled', $this->plugin_name); ?></span>
        </label>
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Title for toggle Button', $this->plugin_name); ?></span></legend>
        <h4><?php esc_attr_e('Toggle button title', $this->plugin_name); ?></h4>
        <input type="text" id="<?php echo $this->plugin_name; ?>-title-right" name="<?php echo $this->plugin_name; ?>[title_right]" value="<?php if(!empty($title_right)) echo $title_right; ?>" class="regular-text">
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Background Color', $this->plugin_name);?></span></legend>
        <h4><?php esc_attr_e('Toggle button Background Color', $this->plugin_name);?></h4>
        <input type="text" class="color-picker" data-alpha="true" id="<?php echo $this->plugin_name;?>-toggle_right_bg_color" name="<?php echo $this->plugin_name;?>[toggle_right_bg_color]" value="<?php echo $toggle_right_bg_color;?>" />
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Text Color', $this->plugin_name);?></span></legend>
        <h4><?php esc_attr_e('Toggle button Text Color', $this->plugin_name);?></h4>
        <input type="text" class="color-picker" data-alpha="true" id="<?php echo $this->plugin_name;?>-toggle_right_text_color" name="<?php echo $this->plugin_name;?>[toggle_right_text_color]" value="<?php echo $toggle_right_text_color;?>" />
    </fieldset>
    <!-- TODO : Icons choose -->

    <!-- END Toggle button settigns -->
    <hr>

    <!-- BEGIN form right content -->
    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Shortcode Contact form 7', $this->plugin_name); ?></span></legend>
        <h4><?php esc_attr_e('Contact Form Shortcode (Contact form 7)', $this->plugin_name); ?></h4>
        <textarea cols="80" rows="1" id="<?php echo $this->plugin_name; ?>-shortcode-right" name="<?php echo $this->plugin_name; ?>[shortcode_right]"><?php if(!empty($shortcode_right)) echo $shortcode_right; ?></textarea>
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Background Color', $this->plugin_name);?></span></legend>
        <h4><?php esc_attr_e('Form content Background Color', $this->plugin_name);?></h4>
        <input type="text" class="color-picker" data-alpha="true" id="<?php echo $this->plugin_name;?>-form_right_bg_color" name="<?php echo $this->plugin_name;?>[form_right_bg_color]" value="<?php echo $form_right_bg_color;?>" />
    </fieldset>

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Text Color', $this->plugin_name);?></span></legend>
        <h4><?php esc_attr_e('Form content Text Color', $this->plugin_name);?></h4>
        <input type="text" class="color-picker" data-alpha="true" id="<?php echo $this->plugin_name;?>-form_right_text_color" name="<?php echo $this->plugin_name;?>[form_right_text_color]" value="<?php echo $form_right_text_color;?>" />
    </fieldset>

    <!-- END form right content -->






</div>