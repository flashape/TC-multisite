<?php
/*
Script Name: 	Custom Metaboxes and Fields
Contributors: 	Andrew Norcross (@norcross / andrewnorcross.com)
				Jared Atchison (@jaredatch / jaredatchison.com)
				Bill Erickson (@billerickson / billerickson.net)
Description: 	This will create metaboxes with custom fields that will blow your mind.
Version: 		0.6
*/

/**
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

/************************************************************************
		You should not edit the code below or things might explode!
*************************************************************************/

$meta_boxes = array();
$meta_boxes = apply_filters ( 'cmb_meta_boxes' , $meta_boxes );
foreach ( $meta_boxes as $meta_box ) {
	$my_box = new cmb_Meta_Box( $meta_box );
}

/**
 * Validate value of meta fields
 * Define ALL validation methods inside this class and use the names of these 
 * methods in the definition of meta boxes (key 'validate_func' of each field)
 */

class cmb_Meta_Box_Validate {
	function check_text( $text ) {
		if ($text != 'hello') {
			return false;
		}
		return true;
	}
}

/*
 * url to load local resources.
 */

define( 'CMB_META_BOX_URL', trailingslashit( str_replace( WP_CONTENT_DIR, WP_CONTENT_URL, dirname(__FILE__) ) ) );

/**
 * Create meta boxes
 */

class cmb_Meta_Box {
	protected $_meta_box;

	function __construct( $meta_box ) {
		if ( !is_admin() ) return;

		$this->_meta_box = $meta_box;

		$upload = false;
		foreach ( $meta_box['fields'] as $field ) {
			if ( $field['type'] == 'file' || $field['type'] == 'file_list' ) {
				$upload = true;
				break;
			}
		}
		
		$current_page = substr(strrchr($_SERVER['PHP_SELF'], '/'), 1, -4);
		
		if ( $upload && ( $current_page == 'page' || $current_page == 'page-new' || $current_page == 'post' || $current_page == 'post-new' ) ) {
			add_action( 'admin_head', array(&$this, 'add_post_enctype') );
		}

		add_action( 'admin_menu', array(&$this, 'add'), 99999 );
		//add_action( 'add_meta_boxes', array(&$this, 'add'),99999 );
		add_action( 'save_post', array(&$this, 'save') );
	}

	function add_post_enctype() {
		echo '
		<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("#post").attr("enctype", "multipart/form-data");
			jQuery("#post").attr("encoding", "multipart/form-data");
		});
		</script>';
	}

	// Add metaboxes
	function add() {
		//echo "cmb_Meta_Box->add()<br/>\n";
		$this->_meta_box['context'] = empty($this->_meta_box['context']) ? 'normal' : $this->_meta_box['context'];
		$this->_meta_box['priority'] = empty($this->_meta_box['priority']) ? 'high' : $this->_meta_box['priority'];
		foreach ( $this->_meta_box['pages'] as $page ) {
			if( !isset( $this->_meta_box['show_on'] ) ) {
				add_meta_box( $this->_meta_box['id'], $this->_meta_box['title'], array(&$this, 'show'), $page, $this->_meta_box['context'], $this->_meta_box['priority']) ;
			} else {
				if ( 'id' == $this->_meta_box['show_on']['key'] ) {

					// If we're showing it based on ID, get the current ID					
					if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
					elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];

					// If current page id is in the included array, display the metabox
					if ( isset( $post_id) && in_array( $post_id, $this->_meta_box['show_on']['value'] ) )
						add_meta_box( $this->_meta_box['id'], $this->_meta_box['title'], array(&$this, 'show'), $page, $this->_meta_box['context'], $this->_meta_box['priority']) ;
				}
			}
		}
	}
	
	// Show fields
	function show() {
		
		
		if($this->_meta_box['id'] == 'tc_crm_order_items'){
			$this->_meta_box['fields'] = apply_filters ( 'tc_crm_init_products_metabox' , $this->_meta_box['fields'] );
			global $newCartID;
			global $isNewCart;
			if(isset($newCartID)){
				echo '<input type="hidden" name="cartID" id="cartID" value="'.$newCartID.'" />';
				echo '<input type="hidden" name="sessionID" id="sessionID" value="'.session_id().'" />';
				echo '<input type="hidden" name="isNewCart" id="isNewCart" value="'.$isNewCart.'" />';
			}
			
		}

		global $post;
		
		echo '<input type="hidden" name="wp_meta_box_nonce" value="', wp_create_nonce( basename(__FILE__) ), '" />';
		echo '<table class="widefat cmb_metabox">';

		foreach ( $this->_meta_box['fields'] as $field ) {
			// Set up blank values for empty ones
			if ( !isset($field['desc']) ) $field['desc'] = '';
			if ( !isset($field['std']) ) $field['std'] = '';
			
			$meta = get_post_meta( $post->ID, $field['id'], 'multicheck' != $field['type'] /* If multicheck this can be multiple values */ );

			echo '<tr>';
	
			if ( $field['type'] == "title" ) {
				echo '<td colspan="2">';
			} else {
				if( $this->_meta_box['show_names'] == true ) {
					echo '<th style="width:18%"><label for="', $field['id'], '">', $field['name'], '</label></th>';
				}			
				echo '<td>';
			}		
						
			switch ( $field['type'] ) {

				case 'text':
					echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" />','<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'text_small':
					echo '<input class="cmb_text_small" type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" /><span class="cmb_metabox_description">', $field['desc'], '</span>';
					break;
				case 'text_medium':
					echo '<input class="cmb_text_medium" type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" /><span class="cmb_metabox_description">', $field['desc'], '</span>';
					break;
				case 'text_date':
					echo '<input class="cmb_text_small cmb_datepicker" type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" /><span class="cmb_metabox_description">', $field['desc'], '</span>';
					break;
				case 'text_date_timestamp':
					echo '<input class="cmb_text_small cmb_datepicker" type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? date( 'm\/d\/Y', $meta ) : $field['std'], '" /><span class="cmb_metabox_description">', $field['desc'], '</span>';
					break;
				case 'text_money':
					echo '$ <input class="cmb_text_money" type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" /><span class="cmb_metabox_description">', $field['desc'], '</span>';
					break;
				case 'textarea':
					echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="10" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>','<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'textarea_small':
					echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>','<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'select':
					echo '<select name="', $field['id'], '" id="', $field['id'], '">'; 
					if(  isset($field['options']) && count($field['options']) > 0){
						foreach ($field['options'] as $option) {
							echo '<option value="', $option['value'], '"', $meta == $option['value'] ? ' selected="selected"' : '', '>', $option['name'], '</option>';
						}   
					}
					echo '</select>';
					echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'radio_inline':
					echo '<div class="cmb_radio_inline">';
					foreach ($field['options'] as $option) {
						echo '<div class="cmb_radio_inline_option"><input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'], '</div>';
					}
					echo '</div>';
					echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'radio':
					foreach ($field['options'] as $option) {
						echo '<p><input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'].'</p>';
					}
					echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'checkbox':
					echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
					echo '<span class="cmb_metabox_description">', $field['desc'], '</span>';
					break;
				case 'multicheck':
					echo '<ul>';
					foreach ( $field['options'] as $value => $name ) {
						// Append `[]` to the name to get multiple values
						// Use in_array() to check whether the current option should be checked
						echo '<li><input type="checkbox" name="', $field['id'], '[]" id="', $field['id'], '" value="', $value, '"', in_array( $value, $meta ) ? ' checked="checked"' : '', ' /><label>', $name, '</label></li>';
					}
					echo '</ul>';
					echo '<span class="cmb_metabox_description">', $field['desc'], '</span>';					
					break;		
				case 'title':
					echo '<h5 class="cmb_metabox_title">', $field['name'], '</h5>';
					echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'wysiwyg':
					echo '<div id="poststuff" class="meta_mce">';
					echo '<div class="customEditor"><textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="7" style="width:97%">', $meta ? wpautop($meta, true) : '', '</textarea></div>';
					echo '</div>';
			        echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'taxonomy_select':
					echo '<select name="', $field['id'], '" id="', $field['id'], '">';
					$names= wp_get_object_terms( $post->ID, $field['taxonomy'] );
					$terms = get_terms( $field['taxonomy'], 'hide_empty=0' );
					foreach ( $terms as $term ) {
						if (!is_wp_error( $names ) && !empty( $names ) && !strcmp( $term->slug, $names[0]->slug ) ) {
							echo '<option value="' . $term->slug . '" selected>' . $term->name . '</option>';
						} else {
							echo '<option value="' . $term->slug . '  ' , $meta == $term->slug ? $meta : ' ' ,'  ">' . $term->name . '</option>';
						}
					}
					echo '</select>';
					echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'taxonomy_radio':
					$names= wp_get_object_terms( $post->ID, $field['taxonomy'] );
					$terms = get_terms( $field['taxonomy'], 'hide_empty=0' );
					foreach ( $terms as $term ) {
						if ( !is_wp_error( $names ) && !empty( $names ) && !strcmp( $term->slug, $names[0]->slug ) ) {
							echo '<p><input type="radio" name="', $field['id'], '" value="'. $term->slug . '" checked>' . $term->name . '</p>';
						} else {
							echo '<p><input type="radio" name="', $field['id'], '" value="' . $term->slug . '  ' , $meta == $term->slug ? $meta : ' ' ,'  ">' . $term->name .'</p>';
						}
					}
					echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
					break;
				case 'file_list':
					echo '<input id="upload_file" type="text" size="36" name="', $field['id'], '" value="" />';
					echo '<input class="upload_button button" type="button" value="Upload File" />';
					echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
						$args = array(
								'post_type' => 'attachment',
								'numberposts' => null,
								'post_status' => null,
								'post_parent' => $post->ID
							);
							$attachments = get_posts($args);
							if ($attachments) {
								echo '<ul class="attach_list">';
								foreach ($attachments as $attachment) {
									echo '<li>'.wp_get_attachment_link($attachment->ID, 'thumbnail', 0, 0, 'Download');
									echo '<span>';
									echo apply_filters('the_title', '&nbsp;'.$attachment->post_title);
									echo '</span></li>';
								}
								echo '</ul>';
							}
						break;
				case 'file':
					echo '<input id="upload_file" type="text" size="45" class="', $field['id'], '" name="', $field['id'], '" value="', $meta, '" />';
					echo '<input class="upload_button button" type="button" value="Upload File" />';
					echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
					echo '<div id="', $field['id'], '_status" class="cmb_upload_status">';	
						if ( $meta != '' ) { 
							$check_image = preg_match( '/(^.*\.jpg|jpeg|png|gif|ico*)/i', $meta );
							if ( $check_image ) {
								echo '<div class="img_status">';
								echo '<img src="', $meta, '" alt="" />';
								echo '<a href="#" class="remove_file_button" rel="', $field['id'], '">Remove Image</a>';
								echo '</div>';
							} else {
								$parts = explode( "/", $meta );
								for( $i = 0; $i < sizeof( $parts ); ++$i ) {
									$title = $parts[$i];
								} 
								echo 'File: <strong>', $title, '</strong>&nbsp;&nbsp;&nbsp; (<a href="', $meta, '" target="_blank" rel="external">Download</a> / <a href="# class="remove_file_button" rel="', $field['id'], '">Remove</a>)';
							}	
						}
					echo '</div>'; 
				break;
				default:
					do_action('cmb_render_' . $field['type'] , $field, $meta);
			}
			
			echo '</td>','</tr>';
		}
		echo '</table>';

		
	}

	// Save data from metabox
	function save( $post_id)  {
		//error_log("SAVE _meta_box['id'] : ".$this->_meta_box['id']);
		
		// verify nonce
		if ( ! isset( $_POST['wp_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['wp_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id;
		}
		
		// check autosave
		if ( defined('DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}
		// The Contact info metabox is shared between Contact and Order / Ticket post types.
		// Check to see if we are saving an Order, and if so, update $post_id
		// to point to the Contact instead of the Order.
		if (is_order_post()){
			//echo "Metabox title : ".$this->_meta_box['title']."<br/>\n";
			//do_dump($_POST);
			
			if ( $this->_meta_box['id'] == 'client_information'){
				// because we might be saving a new Contact post at the same time
				// as we save the order, the save_post action gets triggered again,
				// so we need to test the for post type so we don't save unnecessary metadata with the contact post.
				//error_log("client_information metabox, post type: ".get_post_type($post_id) );
				
				if (get_post_type($post_id) == 'tc_crm_contact'){
					return;
				}
				
				$selected_contact = $_POST['panalo_selected_contact'];
				error_log("client_information metabox, selected_contact : ".$selected_contact );
				error_log("is_numeric($selected_contact) : ".is_numeric($selected_contact));
				
				//if ( $selected_contact == 'null'){
				if ( !is_numeric($selected_contact) ){
					//error_log("calling insertNewContact()");
					$this->insertNewContact();
				}else{
					$this->updateContactMeta($selected_contact);
				}
				
				
				return;
			}
			
			
			// if this is the payment metabox, and we're not in the save() handler for a new Contact post, save the payment.
			if ( $this->_meta_box['id'] == 'tc_crm_enter_payment_metabox' && get_post_type($post_id) != 'tc_crm_contact'){

				// NOTE:  Payment posts are now saved in tc_crm_on_transition_post_status()
				return;
			}
		}
		
		
		// because we're saving a new Payment post at the same time
		// as we save the order, the save_post action gets triggered again,
		// so we need to test the for post type so we don't save unnecessary metadata with the payment post.
		if (get_post_type($post_id) == 'tc_crm_payment'){
			return;
		}


		// check permissions
		if ( 'page' == $_POST['post_type'] ) {
			if ( !current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
		
		
		if ( $this->_meta_box['id'] == 'tc_crm_order_items'){
			update_post_meta( $post_id, '_panalo_order_type', $_POST['_panalo_order_type'] );
			wp_set_object_terms( $post_id, (int)$_POST['_panalo_order_type'], 'panalo_order_type' );
			
			if(isset($_POST['_panalo_event_type'])){
				update_post_meta( $post_id, '_panalo_event_type', $_POST['_panalo_event_type'] );	
				wp_set_object_terms( $post_id, (int)$_POST['_panalo_event_type'], 'panalo_event_type' );
				
			}
			if(isset($_POST['_panalo_event_date'])){
				update_post_meta( $post_id, '_panalo_event_date', $_POST['_panalo_event_date'] );					
			}
			
		}

		foreach ( $this->_meta_box['fields'] as $field ) {
			$name = $field['id'];
			
			
			$old = get_post_meta( $post_id, $name, 'multicheck' != $field['type'] /* If multicheck this can be multiple values */ );
			$new = isset( $_POST[$field['id']] ) ? $_POST[$field['id']] : null;

			if ( $field['type'] == 'wysiwyg' ) {
				$new = wpautop($new);
			}
			
			if ( $field['type'] == 'taxonomy_select' )  {	
				$new = wp_set_object_terms( $post_id, $new, $field['taxonomy'] );	
			}
			
			if ( $field['type'] == 'taxonomy_radio' )  {		
				$new = wp_set_object_terms( $post_id, $new, $field['taxonomy'] );
			}

			if ( ($field['type'] == 'textarea') || ($field['type'] == 'textarea_small') ) {
				$new = htmlspecialchars( $new );
			}
			
			if ( $field['type'] == 'text_date_timestamp' ) {
				$new = strtotime( $new );
			}
			
			$new = apply_filters('cmb_validate_' . $field['type'], $new, $post_id, $field);			
			
			// validate meta value
			if ( isset( $field['validate_func']) ) {
				$ok = call_user_func( array( 'cmb_Meta_Box_Validate', $field['validate_func']), $new );
				if ( $ok === false ) { // pass away when meta value is invalid
					continue;
				}
			} elseif ( 'multicheck' == $field['type'] ) {
				// Do the saving in two steps: first get everything we don't have yet
				// Then get everything we should not have anymore
				if ( empty( $new ) ) {
					$new = array();
				}
				$aNewToAdd = array_diff( $new, $old );
				$aOldToDelete = array_diff( $old, $new );
				foreach ( $aNewToAdd as $newToAdd ) {
					add_post_meta( $post_id, $name, $newToAdd, false );
				}
				foreach ( $aOldToDelete as $oldToDelete ) {
					delete_post_meta( $post_id, $name, $oldToDelete );
				}
			} elseif ( $new && $new != $old ) {
				update_post_meta( $post_id, $name, $new );
			} elseif ( '' == $new && $old ) {
				delete_post_meta( $post_id, $name, $old );
			}
		}
	}
	

	function updateContactMeta($post_id){
		error_log("updateContactMeta($post_id)");
		global $wpdb;
		// first check to see if our Contact's first and last names have changed,
		// if they have update the post title
		$oldFirstName = get_post_meta( $post_id,'_tc_crm_contact_first_name', true);
		$oldLastName = get_post_meta( $post_id,'_tc_crm_contact_last_name', true);
		
		$newFirstName = $_POST['_tc_crm_contact_first_name'];
		$newLastName = $_POST['_tc_crm_contact_last_name'];
		
		if ($newFirstName != $oldFirstName || $newLastName != $oldLastName ){
			$newTitle =   $_POST['_tc_crm_contact_first_name']. ' '.$_POST['_tc_crm_contact_last_name'];

			$mytitle = $wpdb->escape( $newTitle );
			//$myid    = absint( $myid );
			$wpdb->query( "UPDATE $wpdb->posts SET post_title = '$mytitle' WHERE ID = $post_id" );
		}
		

		
		$keys = array('_tc_crm_contact_first_name',
		'_tc_crm_contact_last_name',
		'_tc_crm_contact_company',
		'_tc_crm_contact_url',
		'_tc_crm_contact_personal_email',
		'_tc_crm_contact_personal_phone',
		'_tc_crm_contact_personal_address_1',
		'_tc_crm_contact_personal_address_2',
		'_tc_crm_contact_personal_address_city',
		'_tc_crm_contact_personal_address_state',
		'_tc_crm_contact_personal_address_zip');
		
		if (is_numeric($post_id)){
			foreach ( $keys as $key ) {
				update_post_meta( $post_id, $key, $_POST[$key] );
			}
			
			p2p_type( 'order_to_contact' )->connect( $_POST['post_ID'], $post_id, array(
				'date' => current_time('mysql'),			
			) );
			//$this->saveContactIDWithTicketMeta($post_id);
		}

		// the $_POST[tax_input] arrays come in with the ta term id's as a string, i.e.:
		// 		array (0 => '0', 1 => '17', 2 => '9')
		// we need to convert those string id's to ints before saving, 
		// or else WP will create new terms for the taxonomy using the id's as names
		
		if (isset($_POST['tax_input']['panalo_how_heard'])){
			$integers = array_map ('intval', $_POST['tax_input']['panalo_how_heard']);
			wp_set_object_terms( $post_id, $integers, 'panalo_how_heard' );
		};
		
		if (isset($_POST['tax_input']['panalo_inq_reason'])){
			$integers = array_map ('intval', $_POST['tax_input']['panalo_inq_reason']);
			wp_set_object_terms( $post_id, $integers, 'panalo_inq_reason' );
		};
		
		if (isset($_POST['tax_input']['panalo_inquirer_type'])){
			$integers = array_map ('intval', $_POST['tax_input']['panalo_inquirer_type']);
			
			wp_set_object_terms( $post_id, $integers, 'panalo_inquirer_type' );
		};
		
		if (isset($_POST['tax_input']['panalo_poc'])){
			$integers = array_map ('intval', $_POST['tax_input']['panalo_poc']);
			wp_set_object_terms( $post_id, $integers, 'panalo_poc' );
		};
		
	}

	
	function insertNewContact(){
		error_log("insertNewContact()");
		$newFirstName = $_POST['_tc_crm_contact_first_name'];
		$newLastName = $_POST['_tc_crm_contact_last_name'];
		$email = $_POST['_tc_crm_contact_personal_email'];
		
		if (!empty($newFirstName) || !empty($newLastName) || !empty($email) ){
		   $contact = array(
				'post_title' => 'temp_contact_title',
				'post_content' => ' ',
				'post_status' => 'publish',
				'post_type' => "tc_crm_contact"
		             );
				$contactID = wp_insert_post($contact);
				error_log("insertNewContact contactID : ".$contactID);
				$this->updateContactMeta($contactID);
		}

	}
	
	// function saveContactIDWithTicketMeta($contactID){
	// 	error_log("saveContactIDWithTicketMeta()");
	// 	//update_post_meta($_POST['post_ID'], '_panalo_contact_id', $contactID);
	// 	
	// 
	// 	
	// 	
	// }	

}

/**
 * Adding scripts and styles
 */

function cmb_scripts( $hook ) {
  	if ( $hook == 'post.php' OR $hook == 'post-new.php' OR $hook == 'page-new.php' OR $hook == 'page.php' ) {
		wp_register_script( 'cmb-scripts', CMB_META_BOX_URL.'jquery.cmbScripts.js', array( 'jquery','media-upload','thickbox' ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui-core' ); // Make sure and use elements form the 1.7.3 UI - not 1.8.9
		wp_enqueue_script( 'media-upload' );
		wp_enqueue_script( 'thickbox' );
		wp_enqueue_script( 'cmb-scripts' );
		wp_enqueue_style( 'thickbox' );
		// wp_enqueue_style( 'jquery-custom-ui' );
		add_action( 'admin_head', 'cmb_styles_inline' );
  	}
}
add_action( 'admin_enqueue_scripts', 'cmb_scripts', 10, 1 );

function editor_admin_init( $hook ) {
	if ( $hook == 'post.php' OR $hook == 'post-new.php' OR $hook == 'page-new.php' OR $hook == 'page.php' ) {
		wp_enqueue_script( 'word-count' );
		wp_enqueue_script( 'post' );
		wp_enqueue_script( 'editor' );
	}
}

function editor_admin_head( $hook ) {
	if ( $hook == 'post.php' OR $hook == 'post-new.php' OR $hook == 'page-new.php' OR $hook == 'page.php' ) {
  		wp_tiny_mce();
	}
}

add_action( 'admin_init', 'editor_admin_init' );
add_action( 'admin_head', 'editor_admin_head' );

function cmb_editor_footer_scripts() { ?>
		<script type="text/javascript">/* <![CDATA[ */
		jQuery(function($) {
			var i=1;
			$('.customEditor textarea').each(function(e) {
				var id = $(this).attr('id');
 				if (!id) {
					id = 'customEditor-' + i++;
					$(this).attr('id',id);
				}
 				tinyMCE.execCommand('mceAddControl', false, id);
 			});
		});
	/* ]]> */</script>
	<?php }
add_action( 'admin_print_footer_scripts', 'cmb_editor_footer_scripts', 99 );

function cmb_styles_inline() { 
	//echo '<link rel="stylesheet" type="text/css" href="' . CMB_META_BOX_URL.'style.css" />';
	?>	
		<style type="text/css">
			table.cmb_metabox {
				width:100%;
				border-style:none;
			}
			table.cmb_metabox td, table.cmb_metabox th { border-bottom: 0px solid #E9E9E9; }
			table.cmb_metabox td {font-size:11px}
			table.cmb_metabox th { text-align: right; font-weight:bold;}
			table.cmb_metabox th label { margin-top:6px; display:block;}
			p.cmb_metabox_description { color: #AAA; font-style: italic; margin: 2px 0 !important;}
			span.cmb_metabox_description { color: #AAA; font-style: italic;}
			input.cmb_text_small { width: 100px; margin-right: 15px;}
			input.cmb_text_tiny { width: 30px; }
			input.cmb_text_money { width: 90px; margin-right: 15px;}
			input.cmb_text_medium { width: 230px; margin-right: 15px;}
			table.cmb_metabox input, table.cmb_metabox textarea { font-size:11px; padding: 4px;}
			table.cmb_metabox li { font-size:11px; }
			table.cmb_metabox ul { padding-top:5px; }
			table.cmb_metabox select { font-size:11px; padding: 5px 10px;}
			table.cmb_metabox input:focus, table.cmb_metabox textarea:focus { background: #fffff8;}
			.cmb_metabox_title { margin: 0 0 5px 0; padding: 5px 0 0 0; font: italic 24px/35px Georgia,"Times New Roman","Bitstream Charter",Times,serif;}
			.cmb_radio_inline { padding: 4px 0 0 0;}
			.cmb_radio_inline_option {display: inline; padding-right: 18px;}
			table.cmb_metabox input[type="radio"] { margin-right:3px;}
			table.cmb_metabox input[type="checkbox"] { margin-right:6px;}
			table.cmb_metabox .mceLayout {border:1px solid #DFDFDF !important;}
			table.cmb_metabox .mceIframeContainer {background:#FFF;}
			table.cmb_metabox .meta_mce {width:97%;}
			table.cmb_metabox .meta_mce textarea {width:100%;}
			table.cmb_metabox .cmb_upload_status {  margin: 10px 0 0 0;}
			table.cmb_metabox .cmb_upload_status .img_status {  position: relative; }
			table.cmb_metabox .cmb_upload_status .img_status img { border:1px solid #DFDFDF; background: #FAFAFA; max-width:350px; padding: 5px; -moz-border-radius: 2px; border-radius: 2px;}
			table.cmb_metabox .cmb_upload_status .img_status .remove_file_button { text-indent: -9999px; background: url(<?php echo CMB_META_BOX_URL ?>images/ico-delete.png); width: 16px; height: 16px; position: absolute; top: -5px; left: -5px;}
		</style>
	<?php
}

// End. That's it, folks! //