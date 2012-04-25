<?php

add_action('wp_dashboard_setup', 'tc_init_dashboard_widgets');

function tc_init_dashboard_widgets(){
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'side' );
	
	wp_add_dashboard_widget('tc_activities_dashboard_widget', 'My Activities', 'tc_generate_my_activities_widget');	
	wp_add_dashboard_widget('tc_my_orders_dashboard_widget', 'My Orders', 'tc_generate_my_orders_widget');	
	wp_add_dashboard_widget('tc_order_flavors_dashboard_widget', 'Today\'s Flavors', 'tc_generate_flavors_widget');	
  
}

function tc_generate_my_activities_widget(){
	$connectedActivities = ActivityProxy::getActivitesForUser(1);
	$posts =& $connectedActivities->posts;
	
	if ( $posts && is_array( $posts ) ) {
	  	
		$list = array();
		foreach($posts as $activityPost){
			$activityID = $activityPost->ID;
			$activityModel = get_post_meta($activityID, '_tc_activity_model', true);
			//error_log(var_export($activityModel, 1));

			$title = $activityPost->post_title;


			$activityParentPostID = get_post_meta($activityID, '_tc_parent_post_id', true);
			$editPostLink = get_edit_post_link($activityParentPostID);
			$editPostLink = add_query_arg( 'activityID', $activityID, $editPostLink);

			$item = "<h4><a href='$editPostLink' title='" . esc_attr( $title )  . "'>" . esc_html($title) . "</a></h4>";
			$list[] = $item;
		}
?>
<ul>
  <li><?php echo join( "</li>\n<li>", $list ); ?></li>
</ul>
<?php
	
	} else{
	  _e('You have no activities assigned.');
	}

}


function tc_generate_my_orders_widget(){
	$posts = OrderProxy::getOrdersForUser(3);
	
	if ( $posts && is_array( $posts ) ) {
	  	
		$list = array();
		foreach($posts as $orderPost){
			$orderID = $orderPost->ID;
			$orderTotal = get_post_meta($orderID, 'tc_order_total', true);
			$orderType = get_post_meta($orderID, '_tc_order_type', true);
			$termObj = get_term_by('id', $orderType, 'tc_order_type', $output = OBJECT, $filter = 'raw');
			$orderTypeName = $termObj->name;
			
			$title = "Order # $orderID ($orderTypeName, \$$orderTotal)";
			

			$editPostLink = get_edit_post_link($orderID);

			$item = "<h4><a href='$editPostLink' title='" . esc_attr( $title )  . "'>" . esc_html($title) . "</a></h4>";
			$eventDate = get_post_meta($orderID, '_tc_event_date', true);
			
			if(!empty($eventDate)){
				$item .= "<p>Scheduled date : $eventDate</p>";
			}
			
			
			$list[] = $item;
		}
?>
<ul>
  <li><?php echo join( "</li>\n<li>", $list ); ?></li>
</ul>
<?php
	
	} else{
	  _e('You have no orders assigned.');
	}
	
}


function tc_generate_flavors_widget(){
	$posts = OrderProxy::getOrdersForToday();
	
	if ( $posts && is_array( $posts ) ) {
	  	
		$list = array();
		$flavorMap = array();
		
		foreach($posts as $orderPost){
			$cart = OrderProxy::getCartForOrder($orderPost->ID);
			error_log(var_export($cart, 1));
			
			
			$cartItems = $cart['items'];
			
			


			foreach ($cartItems as $cartItem) {
				if ( !empty($cartItem->variations) ){

					foreach ($cartItem->variations as $variation) {
						if($variation->variationID == '1151'){ //1151 is 'flavors'
							$variationItemID = $variation->selected[0]; //for now, selected items will only be a single element array
							$variationItemModel = json_decode(ProductProxy::getVariationItemByID($variationItemID));
							
							if (!array_key_exists($variationItemID, $flavorMap)){
								$flavorMap[$variationItemID] = array('variationItemModel'=>$variationItemModel, 'count'=>0);
							}
							
							$flavorMap[$variationItemID]['count'] += 1;
						}
			           
					}
					
				}
				error_log("Flavor map : ");
				error_log(var_export($flavorMap, 1));
				
			}
				
				
				
			$list[] = $item;
		}
?>
<ul>
  <li><?php echo join( "</li>\n<li>", $list ); ?></li>
</ul>
<?php
	
	} else{
		error_log("No orders for today : ");
		
	  _e('No orders for today .');
	}

}



?>