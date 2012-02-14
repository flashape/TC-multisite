<?php


function panalo_add_options_page() {
     add_options_page('Panalo', 'Panalo', 'manage_options', 'panalo-settings', 'panalo_admin_options_page');
}
// Load the Admin Options page
add_action('admin_menu', 'panalo_add_options_page');




add_action('admin_init', 'panalo_options_admin_init');
function panalo_options_admin_init(){
	register_setting( 'panalo_options', 'panalo_options', 'panalo_options_validate' );
}

function panalo_options_validate(){
	
}




function panalo_admin_options_page() { 
?>
	<div class="wrap">
		<?php screen_icon() ?>
		<?php panalo_admin_options_page_tabs(); ?>
		
		<?php 
			if ( isset( $_GET['settings-updated'] ) ) {
		    	echo "<div class='updated'><p>Theme settings updated successfully.</p></div>";
			} 
		?>
		
		<form action="" method="post">
		<?php wp_nonce_field('palano-update-options'); ?>
		
		<?php echo panalo_get_tab_content(); ?>
		
		<?php
		
		$current = panalo_get_current_tab_name();
        
		

		if ($current != '')
		{
			echo '<p class="submit">';
			echo '<input class="button-primary" type="submit" name="save" value="'.__('Save the options','WATS').'" /></p><br />';
		}
		?>
		</form>
	</div>
<?php 
}

function panalo_get_current_tab_name(){
	if ( isset ( $_GET['tab'] ) ) :
         $current = $_GET['tab'];
    else:
         $current = 'orders';
    endif;

	return $current;
}

function panalo_get_tab_content(){
	$current = panalo_get_current_tab_name();
	
	$content = '';
	
	switch ($current){
		case 'general':
			$content = panalo_get_general_tab_content();
		break;
		
		case 'orders':
			$content = panalo_get_orders_tab_content();
		break;		
		
		case 'notifications':
			$content = panalo_get_notifications_tab_content();
		break;
	}
	
	return $content;
}

function panalo_get_general_tab_content(){
	$content = '<div>';

	$inner = <<<HTML
	<table id="generalSettingsTable" class="form-table" style="text-align:left;">
	</table>
HTML;

	$content .= $inner;
	$content .= '</div>';
	return $content;
}


function panalo_get_notifications_tab_content(){
	$content = '<div>';

	$inner = <<<HTML
	<table id="generalSettingsTable" class="form-table" style="text-align:left;">
		<tr>
			<td><input type="checkbox" id="panalo_enable_notify" name="panalo_enable_notify" checked="checked"><label for="panalo_enable_notify">Enable Notifications</label></td>
		</tr>	
	</table>
HTML;

	$content .= $inner;
	$content .= '</div>';
	return $content;
}


function panalo_get_orders_tab_content(){
	$content = '<div>';
	global $panalo_options;
	
	$users = wp_dropdown_users(array('echo' => 0, 'selected' => $panalo_options['orders']['new_order_assignee']));
	
	
	$orderStatusRows = '';
	
	foreach($panalo_options['orders']['order_statuses'] as $key => $value){
		$orderStatusRows .= "<tr><td>$key</td><td>$value</td><td><a class='button-secondary' href='#'>X</a></td></tr>";
	}
	
	$inner = <<<HTML
	
	<table id="generalSettingsTable" class="form-table" style="text-align:left;">
		<tr>
			<td>Default New Orders to User : $users</td>
		</tr>
	</table>
	
	<h3>Order Statuses</h3>	
	<table id="orderStatusesTable" class="widefat" style="width:250px;" style="text-align:left;">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Delete</th>
			</tr>
		</thead>
		$orderStatusRows
	</table>
	Add new Order Status : <input type="text" /><input type="button" value="Add">
	
		
		
HTML;

	$content .= $inner;
	$content .= '</div>';
	return $content;
}


function panalo_admin_options_page_tabs( $current = 'general' ) {
	 $current = panalo_get_current_tab_name();
     $tabs = panalo_get_settings_page_tabs();
     $links = array();
     foreach( $tabs as $tab => $name ) :
          if ( $tab == $current ) :
               $links[] = "<a class='nav-tab nav-tab-active' href='?page=panalo-settings&tab=$tab'>$name</a>";
          else :
               $links[] = "<a class='nav-tab' href='?page=panalo-settings&tab=$tab'>$name</a>";
          endif;
     endforeach;
     echo '<h2 class="nav-tab-wrapper">';
     foreach ( $links as $link )
          echo $link;
     echo '</h2>';
}



function panalo_options_init() {
     // set options equal to defaults
     global $panalo_options;
	 delete_option('panalo_options');
     $panalo_options = get_option( 'panalo_options' );
     if ( false === $panalo_options ) {
          $panalo_options = panalo_get_default_options();
     }
     update_option( 'panalo_options', $panalo_options );
}

add_action('plugins_loaded','panalo_options_init', 9 );




function panalo_get_default_options() {

	
	
     $options = array(
		'general' => array(
          	'panalo_version' => '0.1'
		),
		'orders' => array(
			'new_order_assignee' => 2,
			'default_order_status'=>1,
			'order_statuses'=>array(
				1 => 'New',
				2 => 'Pending Processing',
				3 => 'Approved, Pending Shipping',
				4 => 'Shipped',
				5 => 'Credit Declined',
				6 => 'Cancel Order',
				7 => 'Awaiting Payment',
				8 => 'Placeholder',
				9 => 'Ready To Ship',
				10 =>'Packed, Ready For Label'
			)
		),
		'notifications'=>array(
			'enabled' => 1,
		)
		
			
     );
	//error_log(print_r($options, 1));
    return $options;
}




function panalo_get_settings_page_tabs() {
     $tabs = array(
	     'orders' => 'Orders',
         'general' => 'General',
         'notifications' => 'Notifications'
     );
     return $tabs;
}

?>