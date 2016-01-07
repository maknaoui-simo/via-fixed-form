<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://www.mondomaine.com/
 * @since      1.0.0
 *
 * @package    Via_Fixed_Form
 * @subpackage Via_Fixed_Form/public/partials
 */
?>

<!-- :: Via Fixed Form :: Developped by Viaprestige web agency @url: viaprestige-agency.com  -->

<style type="text/css">
	#vff-trigger-left,
	#vff-left-ext{
		background-color: <?php echo $this->vff_options['toggle_left_bg_color']; ?>;
		color: <?php echo $this->vff_options['toggle_left_text_color']; ?>;
	}
	#vff-trigger-left span.toggle-icon{
		border-color: <?php echo $this->vff_options['toggle_left_bg_color']; ?>;
		color: <?php echo $this->vff_options['toggle_left_bg_color']; ?>;
	}
	#vff-left{
		background: <?php echo $this->vff_options['form_left_bg_color']; ?>;
		background-color: <?php echo $this->vff_options['form_left_bg_color']; ?>;
		color: <?php echo $this->vff_options['form_left_text_color']; ?>;
	}
	#vff-right{
		background: <?php echo $this->vff_options['form_right_bg_color']; ?>;
		background-color: <?php echo $this->vff_options['form_right_bg_color']; ?>;
		color: <?php echo $this->vff_options['form_right_text_color']; ?>;
	}
	#vff-trigger-right{
		background-color: <?php echo $this->vff_options['toggle_right_bg_color']; ?>;
		color: <?php echo $this->vff_options['toggle_right_text_color']; ?>;
	}
	#vff-trigger-right span.toggle-icon{
		border-color: <?php echo $this->vff_options['toggle_right_bg_color']; ?>;
		color: <?php echo $this->vff_options['toggle_right_bg_color']; ?>;
	}
	/* Placeholder text color -- selectors need to be separate to work. */
	#vff-right ::-webkit-input-placeholder {
	  color: <?php echo $this->vff_options['toggle_right_text_color']; ?>;
	  font-size: 13px;
	}

	#vff-right :-moz-placeholder {
	  color: <?php echo $this->vff_options['toggle_right_text_color']; ?>;
	  font-size: 13px;
	}

	#vff-right ::-moz-placeholder {
	  color: <?php echo $this->vff_options['toggle_right_text_color']; ?>;
	  font-size: 13px;
	  opacity: 1;
	  /* Since FF19 lowers the opacity of the placeholder by default */
	}

	#vff-right :-ms-input-placeholder {
	  color: <?php echo $this->vff_options['toggle_right_text_color']; ?>;
	  font-size: 13px;
	}
</style>
<div id="vff">
	<!-- Left Side -->
	<?php if ( $this->vff_options['disable_left'] === 0 ): ?>
	<div class="left-form">
		<div id="vff-trigger-left">
			<span class="toggle-icon icon-up-open-big"></span>
			<span><?php echo $this->vff_options['title_left']; ?></span>
		</div>
		<div id="vff-left">
			<?php echo do_shortcode( $this->vff_options['shortcode_left'] ); ?>
			<div id="vff-left-ext">
				<h4>Nous vous rappelons</h4>
				<?php echo do_shortcode( $this->vff_options['shortcode_ext_left'] ); ?>
			</div>
		</div>
	</div>
	<?php endif ?>
	<!-- Left Side -->
	<!-- Right Side -->
	<?php if ( $this->vff_options['disable_right'] === 0 ): ?>
		<div class="right-form">
			<div id="vff-trigger-right">
				<span class="toggle-icon icon-up-open-big"></span>
				<span><?php echo $this->vff_options['title_right']; ?></span>
			</div>
			<div id="vff-right">
				<?php echo do_shortcode( $this->vff_options['shortcode_right'] ); ?>
			</div>
		</div>
	<?php endif ?>
	<!-- Right Side -->
</div>

<div id="vff-overlay-wrapper">
	<div id="vff-overlay"></div>
</div>