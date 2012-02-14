<?php

add_action('init', 'tc_crm_init_taxonomies');
add_action('admin_menu', 'tc_crm_init_taxonomy_terms');

function tc_crm_init_taxonomy_terms(){
	// wp_create_term('Log A Call', 'panalo_activity_type');
	// wp_create_term('Schedule An Event', 'panalo_activity_type');
	// wp_create_term('Track a Revenue Opportunity', 'panalo_activity_type');
	// wp_create_term('Add A Scheduled Email', 'panalo_activity_type');
	//wp_create_term('Add A Task List', 'panalo_activity_type');
}

function tc_crm_init_taxonomies() {
	tc_crm_init_order_type_taxonomy();
	tc_crm_init_poc_taxonomy();
	tc_crm_init_how_heard_taxonomy();
	tc_crm_init_inquiry_reason_taxonomy();
	tc_crm_init_event_type_taxonomy();
	tc_crm_init_who_are_they_taxonomy();
	panalo_init_activity_type_taxonomy();

}

function tc_crm_init_order_type_taxonomy(){
	$labels = array( 
        'name' => _x( 'Order Types', 'order type' ),
        'singular_name' => _x( 'Order Type', 'order type' ),
        'search_items' => _x( 'Search Order Types', 'order type' ),
        'popular_items' => _x( 'Popular Order Types', 'order type' ),
        'all_items' => _x( 'All Order Types', 'order type' ),
        'parent_item' => _x( 'Parent Order Type', 'order type' ),
        'parent_item_colon' => _x( 'Parent Order Type:', 'order type' ),
        'edit_item' => _x( 'Edit Order Type', 'order type' ),
        'update_item' => _x( 'Update Order Type', 'order type' ),
        'add_new_item' => _x( 'Add New Order Type', 'order type' ),
        'new_item_name' => _x( 'New Order Type Name', 'order type' ),
        'separate_items_with_commas' => _x( 'Separate order types with commas', 'order type' ),
        'add_or_remove_items' => _x( 'Add or remove order types', 'order type' ),
        'choose_from_most_used' => _x( 'Choose from the most used order types', 'order type' ),
        'menu_name' => _x( 'Order Types', 'order type' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => true,
        'hierarchical' => false,
		'rewrite' => array('slug' => 'tc_crm_order_type', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_crm_order_type'
    );

    register_taxonomy( 'panalo_order_type', array('tc_crm_order'), $args );
}


function tc_crm_init_event_type_taxonomy(){
	$labels = array( 
        'name' => _x( 'Event Type', 'event type' ),
        'singular_name' => _x( 'Event Type', 'event type' ),
        'search_items' => _x( 'Search Event Types', 'event type' ),
        'popular_items' => _x( 'Popular Event Types', 'event type' ),
        'all_items' => _x( 'All Event Types', 'event type' ),
        'parent_item' => _x( 'Parent Event Type', 'event type' ),
        'parent_item_colon' => _x( 'Parent Event Type:', 'event type' ),
        'edit_item' => _x( 'Edit Event Type', 'event type' ),
        'update_item' => _x( 'Update Event Type', 'event type' ),
        'add_new_item' => _x( 'Add New Event Type', 'event type' ),
        'new_item_name' => _x( 'New Event Type Name', 'event type' ),
        'separate_items_with_commas' => _x( 'Separate event types with commas', 'event type' ),
        'add_or_remove_items' => _x( 'Add or remove event types', 'event type' ),
        'choose_from_most_used' => _x( 'Choose from the most used event types', 'event type' ),
        'menu_name' => _x( 'Event Types', 'event type' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,
		'rewrite' => array('slug' => 'tc_crm_event_type', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_crm_event_type'
    );

    register_taxonomy( 'panalo_event_type', array('tc_crm_contact', 'tc_crm_order'), $args );
}




function tc_crm_init_poc_taxonomy(){
	$labels = array( 
        'name' => _x( 'Contact Method', 'point of contact' ),
        'singular_name' => _x( 'Contact Method', 'point of contact' ),
        'search_items' => _x( 'Search Contact Methods', 'point of contact' ),
        'popular_items' => _x( 'Popular Contact Methods', 'point of contact' ),
        'all_items' => _x( 'All Contact Methods', 'point of contact' ),
        'parent_item' => _x( 'Parent Contact Method', 'point of contact' ),
        'parent_item_colon' => _x( 'Parent Contact Method:', 'point of contact' ),
        'edit_item' => _x( 'Edit Contact Method', 'point of contact' ),
        'update_item' => _x( 'Update Contact Method', 'point of contact' ),
        'add_new_item' => _x( 'Add New Contact Method', 'point of contact' ),
        'new_item_name' => _x( 'New Contact Method Name', 'point of contact' ),
        'separate_items_with_commas' => _x( 'Separate contact methods with commas', 'point of contact' ),
        'add_or_remove_items' => _x( 'Add or remove contact method', 'point of contact' ),
        'choose_from_most_used' => _x( 'Choose from the most used methods of contact', 'point of contact' ),
        'menu_name' => _x( 'Contact Methods', 'point of contact' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,
		'rewrite' => array('slug' => 'tc_crm_poc', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_crm_poc'
    );

    register_taxonomy( 'panalo_poc', array('tc_crm_contact', 'tc_crm_order'), $args );
}

function tc_crm_init_how_heard_taxonomy(){
	$labels = array( 
        'name' => _x( 'How did they hear?', 'heard from' ),
        'singular_name' => _x( 'Heard From', 'heard from' ),
        'search_items' => _x( 'Search Heard Froms', 'heard from' ),
        'popular_items' => _x( 'Popular Heard Froms', 'heard from' ),
        'all_items' => _x( 'All Heard Froms', 'heard from' ),
        'parent_item' => _x( 'Parent Heard From', 'heard from' ),
        'parent_item_colon' => _x( 'Parent Heard From:', 'heard from' ),
        'edit_item' => _x( 'Edit Heard From', 'heard from' ),
        'update_item' => _x( 'Update Heard From', 'heard from' ),
        'add_new_item' => _x( 'Add New Heard From', 'heard from' ),
        'new_item_name' => _x( 'New Heard From Name', 'heard from' ),
        'separate_items_with_commas' => _x( 'Separate heard froms with commas', 'heard from' ),
        'add_or_remove_items' => _x( 'Add or remove heard froms', 'heard from' ),
        'choose_from_most_used' => _x( 'Choose from the most used heard froms', 'heard from' ),
        'menu_name' => _x( 'How Did they hear', 'heard from' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,
		'rewrite' => array('slug' => 'tc_crm_how_heard', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_crm_how_heard'
    );

    register_taxonomy( 'panalo_how_heard', array('tc_crm_contact', 'tc_crm_order'), $args );
	

	

}

function tc_crm_init_inquiry_reason_taxonomy(){
	$labels = array( 
        'name' => _x( 'Inquiring About?', 'inquiry reason' ),
        'singular_name' => _x( 'Inquiry Reason', 'inquiry reason' ),
        'search_items' => _x( 'Search Inquiry Reasons', 'inquiry reason' ),
        'popular_items' => _x( 'Popular Inquiry Reasons', 'inquiry reason' ),
        'all_items' => _x( 'All Inquiry Reasons', 'inquiry reason' ),
        'parent_item' => _x( 'Parent Inquiry Reason', 'inquiry reason' ),
        'parent_item_colon' => _x( 'Parent Inquiry Reason:', 'inquiry reason' ),
        'edit_item' => _x( 'Edit Inquiry Reason', 'inquiry reason' ),
        'update_item' => _x( 'Update Inquiry Reason', 'inquiry reason' ),
        'add_new_item' => _x( 'Add New Inquiry Reason', 'inquiry reason' ),
        'new_item_name' => _x( 'New Inquiry Reason Name', 'inquiry reason' ),
        'separate_items_with_commas' => _x( 'Separate inquiry reasons with commas', 'inquiry reason' ),
        'add_or_remove_items' => _x( 'Add or remove inquiry reasons', 'inquiry reason' ),
        'choose_from_most_used' => _x( 'Choose from the most used inquiry reasons', 'inquiry reason' ),
        'menu_name' => _x( 'Inquiry Reasons', 'inquiry reason' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,
		'rewrite' => array('slug' => 'tc_crm_inq_reason', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_crm_inq_reason'
    );

    register_taxonomy( 'panalo_inq_reason', array('tc_crm_contact', 'tc_crm_order'), $args );
}




function tc_crm_init_who_are_they_taxonomy(){
	$labels = array( 
        'name' => _x( 'Who are they?', 'inquirer type' ),
        'singular_name' => _x( 'Inquirer Type', 'inquirer type' ),
        'search_items' => _x( 'Search Inquirer Types', 'inquirer type' ),
        'popular_items' => _x( 'Popular Inquirer Types', 'inquirer type' ),
        'all_items' => _x( 'All Inquirer Types', 'inquirer type' ),
        'parent_item' => _x( 'Parent Inquirer Type', 'inquirer type' ),
        'parent_item_colon' => _x( 'Parent Inquirer Type:', 'inquirer type' ),
        'edit_item' => _x( 'Edit Inquirer Type', 'inquirer type' ),
        'update_item' => _x( 'Update Inquirer Type', 'inquirer type' ),
        'add_new_item' => _x( 'Add New Inquirer Type', 'inquirer type' ),
        'new_item_name' => _x( 'New Inquirer Type Name', 'inquirer type' ),
        'separate_items_with_commas' => _x( 'Separate inquirer types with commas', 'inquirer type' ),
        'add_or_remove_items' => _x( 'Add or remove inquirer types', 'inquirer type' ),
        'choose_from_most_used' => _x( 'Choose from the most used inquirer types', 'inquirer type' ),
        'menu_name' => _x( 'Inquirer Types', 'inquirer type' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,
		'rewrite' => array('slug' => 'tc_crm_inquirer_type', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_crm_inquirer_type'
    );

    register_taxonomy( 'panalo_inquirer_type', array('tc_crm_contact', 'tc_crm_order'), $args );
}



function panalo_init_activity_type_taxonomy(){
	$labels = array( 
        'name' => _x( 'Activity Types', 'activity type' ),
        'singular_name' => _x( 'Activity Type', 'activity type' ),
        'search_items' => _x( 'Search Activity Types', 'activity type' ),
        'popular_items' => _x( 'Popular Activity Types', 'activity type' ),
        'all_items' => _x( 'All Activity Types', 'activity type' ),
        'parent_item' => _x( 'Parent Activity Type', 'activity type' ),
        'parent_item_colon' => _x( 'Parent Activity Type:', 'activity type' ),
        'edit_item' => _x( 'Edit Activity Type', 'activity type' ),
        'update_item' => _x( 'Update Activity Type', 'activity type' ),
        'add_new_item' => _x( 'Add New Activity Type', 'activity type' ),
        'new_item_name' => _x( 'New Activity Type Name', 'activity type' ),
        'separate_items_with_commas' => _x( 'Separate activity types with commas', 'activity type' ),
        'add_or_remove_items' => _x( 'Add or remove activity types', 'activity type' ),
        'choose_from_most_used' => _x( 'Choose from the most used activity types', 'activity type' ),
        'menu_name' => _x( 'Activity Types', 'activity type' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => true,
        'hierarchical' => false,
		'rewrite' => array('slug' => 'panalo_activity_type', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'panalo_activity_type'
    );

    register_taxonomy( 'panalo_activity_type', array('panalo_activity'), $args );
}







?>