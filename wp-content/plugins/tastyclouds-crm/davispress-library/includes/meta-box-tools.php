<?php

if( ! class_exists( 'davispressMetaBoxTools' ) ):
abstract class davispressMetaBoxTools extends davispressFormFields
{
	protected function textinput( $id, $label, $post_id, $default = '', $class = 'widefat', $description = '' )
	{
		$meta = get_post_meta( $post_id, $id, true );
		$value = $meta ? $meta : $default;
		$field = $this->get_text_input( $id, esc_attr( $value ) );
		$label = $this->get_label( $id, $label );
		return $this->form_row( $label, $field, $description );
	}
	
	protected function datePickerRange($startID, $startLabel, $endID, $endLabel, $post_id, $default = ''){
		$startMeta = get_post_meta( $post_id, $startID, true );
		$startValue = $startMeta ? $startMeta : $default;
		$startField = $this->get_date_picker( $startID, esc_attr( $startValue ) );
		$startLabel = $this->get_label( $startID, $startLabel );
		
		
		$endMeta = get_post_meta( $post_id, $endID, true );
		$endValue = $endMeta ? $endMeta : $default;
		$endField = $this->get_date_picker( $endID, esc_attr( $endValue ) );
		$endLabel = $this->get_label( $endID, $endLabel );
		
		// $enabledCheckboxID = '_tc_crm_coupon_enabled';
		// $meta = get_post_meta( $post_id, $enabledCheckboxID, true );
		// $enabledValue = $meta ? $meta : 'on';
		// $checkBoxField = $this->get_checkbox_input( $enabledCheckboxID, esc_attr( $value  ) );
		// $checkBoxField = "<input type='checkbox' id='{$enabledCheckboxID}' name='{$enabledCheckboxID}' " . checked( esc_attr( $enabledValue  ), 'on', false ) . " class='davispress-checkbox' />";
		// $checkBoxLabel = "<label for='{$enabledCheckboxID}'>Enabled : </label> ";
		// //$enabledCheckBox = "
		// $enabledDiv = "<div class='alignright'>$checkBoxLabel $checkBoxField</div>";
		$th = '<th scope="row">Valid Dates</th>';
		$td = '<td>' . $startLabel .$startField . $endLabel . $endField .'</td>';
		return '<tr>' . $th . $td .'</tr>';
		
	}
	
	
	protected function datepicker( $id, $label, $post_id, $default = '', $class = 'widefat' )
	{
		
		// $meta = get_post_meta( $post_id, $id, true );
		// $value = $meta ? $meta : $default;
		// $field = $this->get_text_input( $id, esc_attr( $value ) );
		// $label = $this->get_label( $id, $label );
		// return $this->form_row( $label, $field );
		// 
		
		$meta = get_post_meta( $post_id, $id, true );
		$value = $meta ? $meta : $default;
		$field = $this->get_date_picker( $id, esc_attr( $value ) );
		$label = $this->get_label( $id, $label );
		return $this->form_row( $label, $field );
	}

	protected function image( $id, $label, $post_id, $click = '', $default = '' )
	{
		$meta = get_post_meta( $post_id, $id, true );
		$value = $meta ? $meta : $default;
		if( ! $click ) $click = __( 'Upload an Image' );
		$field = $this->get_image_input( $id, esc_url( $value ), $click );
		$label = $this->get_label( $id, $label );
		return $this->form_row( $label, $field );
	}
	
	protected function checkbox( $id, $label, $post_id, $default = 'off' )
	{
		$meta = get_post_meta( $post_id, $id, true );
		$value = $meta ? $meta : $default;
		$field = $this->get_checkbox_input( $id, esc_attr( $value  ) );
		$label = $this->get_label( $id, $label );
		return $this->form_row( $label, $field );
	}
	
	protected function checkboxWithTextInput( $checkboxID, $checkboxLabelString, $textInputID, $rowLabelString, $post_id, $checkboxDefault = 'off', $textInputDefault = '0' )
	{
		
		$checkboxMeta = get_post_meta( $post_id, $checkboxID, true );
		$checkboxValue = $checkboxMeta ? $checkboxMeta : $checkboxDefault;
		$checkboxField = $this->get_checkbox_input( $checkboxID, esc_attr( $checkboxValue ) );
		$checkboxLabel = $this->get_label( $checkboxID, $checkboxLabelString );
		$rowLabel = $this->get_label( $checkboxID, $rowLabelString );
		
		
		$textInputMeta = get_post_meta( $post_id, $textInputID, true );
		$textInputValue = $textInputMeta ? $textInputMeta : $textInputDefault;
		$textInputField = $this->get_text_input( $textInputID, esc_attr( $textInputValue ), 'cmb_text_small', ($checkboxValue == 'off') );
		//$textInputLabel = $this->get_label( $endID, $endLabel );
		$rowContent = $checkboxLabel . $checkboxField . $textInputField;
		return $this->form_row($rowLabel, $rowContent);
		
		// $meta = get_post_meta( $post_id, $id, true );
		// $value = $meta ? $meta : $default;
		// $field = $this->get_checkbox_input( $id, esc_attr( $value  ) );
		// $label = $this->get_label( $id, $label );
		// return $this->form_row( $label, $field );
	}
	
	protected function textarea( $id, $label, $post_id, $default = '' )
	{
		$meta = get_post_meta( $post_id, $id, true );
		$value = $meta ? $meta : $default;
		$field = $this->get_textarea( $id, esc_attr( $value ) );
		$label = $this->get_label( $id, $label, false );
		return $this->form_row( $label, $field );
	}
	
	protected function alt_checkbox( $id, $label, $post_id, $default = 'off' )
	{
		$meta = get_post_meta( $post_id, $id, true );
		$value = $meta ? $meta : $default;
		$field = $this->get_checkbox_input( $id, esc_attr( $value ) );
		$label = $this->get_label( $id, $label );
		return '<p>' . $field . $label . '</p>';
	}
	
	protected function radio( $id, $label, $options, $post_id, $default = '' )
	{
		$meta = get_post_meta( $post_id, $id, true );
		$value = $meta ? $meta : $default;
		$fields = $this->get_radio_buttons( $id, $options, esc_attr( $value ) );
		return $this->form_row( $label, $fields );
	}
	
	protected function alt_radio( $id, $label, $options, $post_id, $default = '' )
	{
		$meta = get_post_meta( $post_id, $id, true );
		$value = $meta ? $meta : $default;
		$fields = $this->get_radio_buttons( $id, $options, esc_attr( $value ) );
		$out = "<div class='pmg-radio-container'>";
		$out .= "<p>" . $label . "</p>";
		$out .= $fields;
		$out .= '</div>';
		return $out;
	}
	
	protected function tab( $id, $content, $title = false )
	{
		?>
		<div class="davispress-tab" id="<?php echo esc_attr( $id ); ?>-tab">
			<?php if( $title ): ?>
				<h4><?php echo esc_attr( $title ); ?></h4>
			<?php endif; ?>
			<?php echo $content; ?>
		</div>	
		<?php
	}
	
	protected function tab_nav( $tabs = array( 'id' => 'label' ) )
	{
		?>
		<ul class="davispress-meta-box-nav">
			<?php
			foreach( $tabs as $id => $label )
			{
				echo '<li id="' . esc_attr( $id ) . '"><a href="javascript:null(void);">' . $label . '</a></li>';
			}
			do_action( 'davispress_meta_box_nav_tabs' );
			?>
		</ul>
		<?php
	}
} // end class
endif;