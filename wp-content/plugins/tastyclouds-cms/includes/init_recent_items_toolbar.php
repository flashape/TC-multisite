<?php

add_action( 'admin_bar_menu', 'create_recent_items_toolbar', 999 );

function create_recent_items_toolbar( $wp_admin_bar ) {

	$args = array(
	  'id' => 'tc_recent_items_menu',
	  'title' => 'Recent Items',
	);

	$wp_admin_bar->add_node($args);
	
	init_recent_orders_menu($wp_admin_bar );
	
	init_recent_contacts_menu($wp_admin_bar );
		
	init_recent_projects_menu($wp_admin_bar );
	
  

}



function init_recent_projects_menu($wp_admin_bar ){
	// add a child item to a our parent item
	$args = array('id' => 'tc_recent_projects_node', 'title' => 'Projects', 'parent' => 'tc_recent_items_menu');
	$wp_admin_bar->add_node($args);
	
	$recentProjectRows = get_recently_modified_post_ids('tc_project');
	if ($recentProjectRows){
		// error_log("RECENT PROJECT ROWS: ");
		// error_log(var_export($recentProjectRows, 1));
		$postIDs = array();
		
		foreach($recentProjectRows as $projectRow){
			$postIDs[] = $projectRow->ID;
		}
		
		$projectPosts = get_posts(array('post_type' => 'tc_project', 'include'=>$postIDs));
		// error_log("RECENT PROJECT POSTS: ");
		// error_log(var_export($projectPosts, 1));
		
		foreach($projectPosts as $projectPost){
			$projectID = $projectPost->ID;
			$projectTitle = $projectPost->post_title == "" ? "Project # $projectID": $projectPost->post_title;
			$href = "http://tastyclouds.com/wp-admin/post.php?post=$projectID&action=edit";
			$args = array('id' => "tc_project_node_$projectID", 'title' => $projectTitle, 'href'=>$href, 'parent' => 'tc_recent_projects_node'); 
			$wp_admin_bar->add_node($args);
		}
	}
	
	
}


function init_recent_contacts_menu($wp_admin_bar ){
	
	// add a child item to a our parent item
	$args = array('id' => 'tc_recent_contacts_node', 'title' => 'Contacts', 'parent' => 'tc_recent_items_menu'); 
	$wp_admin_bar->add_node($args);	
	
	$recentContactRows = get_recently_modified_post_ids('tc_contact');
	if ($recentContactRows){
		// error_log("RECENT CONTACT ROWS: ");
		// error_log(var_export($recentContactRows, 1));
		$postIDs = array();
		
		foreach($recentContactRows as $contactRow){
			$postIDs[] = $contactRow->ID;
		}
		
		$contactPosts = get_posts(array('post_type' => 'tc_contact', 'include'=>$postIDs));
		// error_log("RECENT CONTACT POSTS: ");
		// error_log(var_export($contactPosts, 1));
		
		foreach($contactPosts as $contactPost){
			$contactID = $contactPost->ID;
			$contactTitle = $contactPost->post_title == "" ? "Contact # $contactID": $contactPost->post_title;
			$href = "http://tastyclouds.com/wp-admin/post.php?post=$contactID&action=edit";
			$args = array('id' => "tc_contact_node_$contactID", 'title' => $contactTitle, 'href'=>$href, 'parent' => 'tc_recent_contacts_node'); 
			$wp_admin_bar->add_node($args);
		}
	}
}


function init_recent_orders_menu($wp_admin_bar ){
	
	// add a child item to a our parent item
	$args = array('id' => 'tc_recent_orders_node', 'title' => 'Orders', 'parent' => 'tc_recent_items_menu'); 
	$wp_admin_bar->add_node($args);
	
	
	$recentOrderRows = get_recently_modified_post_ids('tc_order');
	
	if ($recentOrderRows){
		// error_log("RECENT ORDER ROWS: ");
		// error_log(var_export($recentOrderRows, 1));
		$postIDs = array();
		foreach($recentOrderRows as $orderRow){
			$postIDs[] = $orderRow->ID;
		}
		$orderPosts = get_posts(array('post_type' => 'tc_order', 'include'=>$postIDs));
		// error_log("RECENT ORDER POSTS: ");
		// error_log(var_export($orderPosts, 1));
		
		foreach($orderPosts as $orderPost){
			$orderID = $orderPost->ID;
			$orderTotal = get_post_meta($orderID, 'tc_order_total', true);
			$orderType = get_post_meta($orderID, '_tc_order_type', true);
			$termObj = get_term_by('id', $orderType, 'tc_order_type', $output = OBJECT, $filter = 'raw');
			$orderTypeName = $termObj->name;
			// error_log("ORDER TERM: ");
			// error_log(var_export($termObj, 1));
			
			$orderTitle = "Order # $orderID ($orderTypeName, \$$orderTotal)";
			$href = "http://tastyclouds.com/wp-admin/post.php?post=$orderID&action=edit";
			$args = array('id' => "tc_order_node_$orderID", 'title' => $orderTitle, 'href'=>$href, 'parent' => 'tc_recent_orders_node'); 
			$wp_admin_bar->add_node($args);
		}
	}else{
		error_log("COULD NOT GET RECENT ORDERS");
		
	}
}

?>