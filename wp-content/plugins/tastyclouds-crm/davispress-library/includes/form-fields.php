<?php
if( ! class_exists( 'davispressFormFields' ) ):

abstract class davispressFormFields
{
	protected function get_text_input( $id, $value, $class = 'widefat', $disabled = false )
	{
		$id = isset( $this->setting ) ? $this->setting . '[' . $id . ']' : $id;
		return "<input type='text' id='{$id}' name='{$id}' class='{$class} davispress-text-input' value='{$value}' ".($disabled ? "disabled='true' " : '')." />";
	}
	
	protected function get_date_picker($id, $value = ''){
		// hijacking the cmb_Metabox date picker for now
		return "<input id='{$id}' name='{$id}' class='cmb_text_small cmb_datepicker' type='text'  value='{$value}' />";
	}
	
	protected function get_image_input( $id, $value, $click )
	{
		$id = isset( $this->setting ) ? $this->setting . '[' . $id . ']' : $id;
		$field = $this->get_text_input( $id, $value, "davispress-image-input" );
		$field .= "<input type='button' class='button-secondary' value='{$click}' class='davispress-image-cue' />";
		return $field;
	}
	
	protected function get_textarea( $id, $value, $class = 'widefat' )
	{
		$id = isset( $this->setting ) ? $this->setting . '[' . $id . ']' : $id;
		return "<textarea id='{$id}' name='{$id}' class='{$class}'>{$value}</textarea>";
	}
	
	protected function get_checkbox_input( $id, $value, $on = 'on' )
	{
		$id = isset( $this->setting ) ? $this->setting . '[' . $id . ']' : $id;
		return "<input type='checkbox' id='{$id}' name='{$id}' " . checked( $value, $on, false ) . " class='davispress-checkbox' />";
	}
	
	protected function get_select( $id, $options, $value )
	{
		$id = isset( $this->setting ) ? $this->setting . '[' . $id . ']' : $id;	
		$field = "<select id='{$id}' class='davispress-select' name='{$id}'>";
		foreach( $options as $val => $label )
		{
			$field .= "<option value='{$val}' " . selected( $val, $value, false ) . ">{$label}</option>";	
		}
		$field .= '</select>';
		return $field;
	}
	
	protected function get_multiselect( $id, $options, $values )
	{
		$id = isset( $this->setting ) ? $this->setting . '[' . $id . ']' : $id;	
		$field = "<select id='{$id}' name='{$id}' class='davispress-multiselect' multiple='multiple'>";
		foreach( $options as $val => $label )
		{
			$selected = in_array( $val, $values ) ? " selected='selected' " : '';
			$field .= "<option value='{$val}'{$selected}>{$label}</option>";	
		}
		$field .= '</select>';
		return $field;
	}
	
	protected function get_radio_buttons( $id, $options, $value )
	{
		$id = isset( $this->setting ) ? $this->setting . '[' . $id . ']' : $id;	
		$fields = '';
		foreach( $options as $val => $label )
		{
			$fields .= "<input type='radio' name='{$id }' id='{$id}{$val}' class='davispress-radio' value='{$val}' />";
			$fields .= $this->get_label( $id . $val, $label, false );
			$fields .= "<br />";
		}	
		return $fields;
	}
	
	protected function get_label( $id, $label, $setting = true )
	{
		if( $setting )
		{
			$id = isset( $this->setting ) ? $this->setting . '[' . $id . ']' : $id;	
		}
		return "<label for='{$id}'>{$label}</label>";
	}
	
	protected function form_table( $content )
	{
		return '<table class="form-table">' . $content . '</table>';	
	}
	
	protected function get_description($description){
		return "<p class='cmb_metabox_description'>$description</p>";
	}
	
	protected function form_row( $label, $field, $description = '' )
	{
		$label = '<th scope="row">' . $label . '</th>';
		
		if(!empty($description)){
			$description = $this->get_description($description);
		}
		
		
		$field = '<td>' . $field . $description.'</td>';
		

			
		return '<tr>' . $label . $field . '</tr>';	
	}
	
} // end class

endif;