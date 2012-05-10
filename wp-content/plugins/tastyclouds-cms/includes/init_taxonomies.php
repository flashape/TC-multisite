<?php

add_action('init', 'tc_init_taxonomies');
//add_action('admin_menu', 'tc_init_taxonomy_terms');

function tc_init_taxonomy_terms(){
	
	// wp_create_term('Event Catering', 'tc_order_type');
	// wp_create_term('Machine Rental', 'tc_order_type');
	// wp_create_term('Pickup', 'tc_order_type');
	// wp_create_term('Shipping', 'tc_order_type');
	// wp_create_term('Walk In', 'tc_order_type');
	// 
	// 	
	// wp_create_term('Baby Shower', 'tc_event_type');
	// wp_create_term('Bachelorette Party', 'tc_event_type');
	// wp_create_term('Bar/Bat Mitzvah', 'tc_event_type');
	// wp_create_term('Birthday', 'tc_event_type');
	// wp_create_term('Bridal Shower', 'tc_event_type');
	// wp_create_term('Bride/Wedding', 'tc_event_type');
	// wp_create_term('Corporate', 'tc_event_type');
	// wp_create_term('Gift/Favor', 'tc_event_type');
	// wp_create_term('Holiday Party', 'tc_event_type');
	// wp_create_term('Photo Session', 'tc_event_type');
	// wp_create_term('School Event', 'tc_event_type');
	// wp_create_term('TV Show/Program', 'tc_event_type');
	// 
	// wp_create_term('Contact Form Submission', 'tc_poc');
	// wp_create_term('Email', 'tc_poc');
	// wp_create_term('Phone', 'tc_poc');
	// wp_create_term('Walk-In', 'tc_poc');
	// wp_create_term('Website', 'tc_poc');
	// 
	// wp_create_term('Beach Bunny Swimwear – Malibu', 'tc_how_heard');
	// wp_create_term('CRV', 'tc_how_heard');
	// wp_create_term('FPAC', 'tc_how_heard');
	// wp_create_term('Google', 'tc_how_heard');
	// wp_create_term('Networking Event – Adamson House/ Everything Wedding Bridal Show', 'tc_how_heard');
	// wp_create_term('Networking Event – Mountain Gate Country Club', 'tc_how_heard');
	// wp_create_term('Networking Event – Original Mixer', 'tc_how_heard');
	// wp_create_term('Networking Event – Other', 'tc_how_heard');
	// wp_create_term('Networking Event – Plate by Plate', 'tc_how_heard');
	// wp_create_term('Networking Event – The Knot', 'tc_how_heard');
	// wp_create_term('Online Deals – Daily Grommet', 'tc_how_heard');
	// wp_create_term('Online Deals – Groupon', 'tc_how_heard');
	// wp_create_term('Online Deals – Living Social', 'tc_how_heard');
	// wp_create_term('Online Deals – Screami Daily Deal', 'tc_how_heard');
	// wp_create_term('Rachael Ray Magazine', 'tc_how_heard');
	// wp_create_term('Referral', 'tc_how_heard');
	// wp_create_term('Social Media – Dining with Doreen', 'tc_how_heard');
	// wp_create_term('Social Media – Facebook', 'tc_how_heard');
	// wp_create_term('Social Media – Foursquare', 'tc_how_heard');
	// wp_create_term('Social Media – Twitter', 'tc_how_heard');
	// wp_create_term('The Knot', 'tc_how_heard');
	// wp_create_term('TV Show - David Tutera', 'tc_how_heard');
	// wp_create_term('TV Show - The Filipino Channel', 'tc_how_heard');
	// wp_create_term('TV Show - Fox News', 'tc_how_heard');
	// wp_create_term('TV Show - Penn & Teller', 'tc_how_heard');
	// wp_create_term('TV Show - The Price Is Right', 'tc_how_heard');
	// wp_create_term('We Worked With In The Past', 'tc_how_heard');
	// wp_create_term('Website', 'tc_how_heard');
	// wp_create_term('Wedding Wire', 'tc_how_heard');
	// wp_create_term('Yahoo', 'tc_how_heard');
	// wp_create_term('Yelp', 'tc_how_heard');
	// 
	// 
	// wp_create_term('Advertisement', 'tc_inq_reason');
	// wp_create_term('Catered Services', 'tc_inq_reason');
	// wp_create_term('Delivery', 'tc_inq_reason');
	// wp_create_term('Donation/Sponsorship', 'tc_inq_reason');
	// wp_create_term('Franchising', 'tc_inq_reason');
	// wp_create_term('Partnership', 'tc_inq_reason');
	// wp_create_term('Pick Up Order', 'tc_inq_reason');
	// wp_create_term('Pick Sample', 'tc_inq_reason');
	// wp_create_term('Wholesale Inquiry', 'tc_inq_reason');
	// 
	// 
	// wp_create_term('Brides', 'tc_inquirer_type');
	// wp_create_term('Business', 'tc_inquirer_type');
	// wp_create_term('Caterer/Manager', 'tc_inquirer_type');
	// wp_create_term('Charity/501c', 'tc_inquirer_type');
	// wp_create_term('Chef/Restaurant', 'tc_inquirer_type');
	// wp_create_term('Event Planner', 'tc_inquirer_type');
	// wp_create_term('Met at a Networking Event', 'tc_inquirer_type');
	// wp_create_term('Moms', 'tc_inquirer_type');
	// wp_create_term('PR/Marketer', 'tc_inquirer_type');
	// wp_create_term('Repeat Client', 'tc_inquirer_type');
	// wp_create_term('School', 'tc_inquirer_type');
	// wp_create_term('Supplier/Vendor', 'tc_inquirer_type');
	// wp_create_term('Vendor we\'ve worked with in the past', 'tc_inquirer_type');
	

	
	
	// wp_create_term('Log A Call', 'tc_activity_type');
	// wp_create_term('Schedule An Event', 'tc_activity_type');
	// wp_create_term('Track a Revenue Opportunity', 'tc_activity_type');
	// wp_create_term('Add A Scheduled Email', 'tc_activity_type');
	//wp_create_term('Add A Task List', 'tc_activity_type');
}

function tc_init_taxonomies() {
	tc_init_order_type_taxonomy();
	tc_init_poc_taxonomy();
	tc_init_how_heard_taxonomy();
	tc_init_inquiry_reason_taxonomy();
	tc_init_event_type_taxonomy();
	tc_init_who_are_they_taxonomy();
	//tc_init_activity_type_taxonomy();
	tc_init_product_type_taxonomy();
}

function tc_init_product_type_taxonomy(){
	$labels = array( 
        'name' => _x( 'Product Types', 'product type' ),
        'singular_name' => _x( 'Product Type', 'product type' ),
        'search_items' => _x( 'Search Product Types', 'product type' ),
        'popular_items' => _x( 'Popular Product Types', 'product type' ),
        'all_items' => _x( 'All Product Types', 'product type' ),
        'parent_item' => _x( 'Parent Product Type', 'product type' ),
        'parent_item_colon' => _x( 'Parent Product Type:', 'product type' ),
        'edit_item' => _x( 'Edit Product Type', 'product type' ),
        'update_item' => _x( 'Update Product Type', 'product type' ),
        'add_new_item' => _x( 'Add New Product Type', 'product type' ),
        'new_item_name' => _x( 'New Product Type Name', 'product type' ),
        'separate_items_with_commas' => _x( 'Separate product types with commas', 'product type' ),
        'add_or_remove_items' => _x( 'Add or remove product types', 'product type' ),
        'choose_from_most_used' => _x( 'Choose from the most used product types', 'product type' ),
        'menu_name' => _x( 'Product Types', 'product type' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => true,
        'hierarchical' => true,
		'rewrite' => array('slug' => 'products', 'hierarchical' => true, 'with_front' => true),
        // 'rewrite' => true,
        'query_var' => 'tc_product_type'
    );

    register_taxonomy( 'tc_product_type', array('tc_products'), $args );
}

function tc_init_order_type_taxonomy(){
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
		'rewrite' => array('slug' => 'tc_order_type', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_order_type'
    );

    register_taxonomy( 'tc_order_type', array('tc_order'), $args );
}


function tc_init_event_type_taxonomy(){
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
		'rewrite' => array('slug' => 'tc_event_type', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_event_type'
    );

    register_taxonomy( 'tc_event_type', array('tc_contact', 'tc_order'), $args );
}




function tc_init_poc_taxonomy(){
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
		'rewrite' => array('slug' => 'tc_poc', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_poc'
    );

    register_taxonomy( 'tc_poc', array('tc_contact', 'tc_order'), $args );
}

function tc_init_how_heard_taxonomy(){
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
		'rewrite' => array('slug' => 'tc_how_heard', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_how_heard'
    );

    register_taxonomy( 'tc_how_heard', array('tc_contact', 'tc_order'), $args );
	

	

}

function tc_init_inquiry_reason_taxonomy(){
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
		'rewrite' => array('slug' => 'tc_inq_reason', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_inq_reason'
    );

    register_taxonomy( 'tc_inq_reason', array('tc_contact', 'tc_order'), $args );
}




function tc_init_who_are_they_taxonomy(){
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
		'rewrite' => array('slug' => 'tc_inquirer_type', 'with_front' => false),
        // 'rewrite' => true,
        'query_var' => 'tc_inquirer_type'
    );

    register_taxonomy( 'tc_inquirer_type', array('tc_contact', 'tc_order'), $args );
}



// function tc_init_activity_type_taxonomy(){
// 	$labels = array( 
//         'name' => _x( 'Activity Types', 'activity type' ),
//         'singular_name' => _x( 'Activity Type', 'activity type' ),
//         'search_items' => _x( 'Search Activity Types', 'activity type' ),
//         'popular_items' => _x( 'Popular Activity Types', 'activity type' ),
//         'all_items' => _x( 'All Activity Types', 'activity type' ),
//         'parent_item' => _x( 'Parent Activity Type', 'activity type' ),
//         'parent_item_colon' => _x( 'Parent Activity Type:', 'activity type' ),
//         'edit_item' => _x( 'Edit Activity Type', 'activity type' ),
//         'update_item' => _x( 'Update Activity Type', 'activity type' ),
//         'add_new_item' => _x( 'Add New Activity Type', 'activity type' ),
//         'new_item_name' => _x( 'New Activity Type Name', 'activity type' ),
//         'separate_items_with_commas' => _x( 'Separate activity types with commas', 'activity type' ),
//         'add_or_remove_items' => _x( 'Add or remove activity types', 'activity type' ),
//         'choose_from_most_used' => _x( 'Choose from the most used activity types', 'activity type' ),
//         'menu_name' => _x( 'Activity Types', 'activity type' ),
//     );
// 
//     $args = array( 
//         'labels' => $labels,
//         'public' => true,
//         'show_in_nav_menus' => false,
//         'show_ui' => true,
//         'show_tagcloud' => true,
//         'hierarchical' => false,
// 		'rewrite' => array('slug' => 'tc_activity_type', 'with_front' => false),
//         // 'rewrite' => true,
//         'query_var' => 'tc_activity_type'
//     );
// 
//     register_taxonomy( 'tc_activity_type', array('tc_activity'), $args );
// }


//http://wordpress.stackexchange.com/questions/39500/how-to-create-a-permalink-structure-with-custom-taxonomies-and-custom-post-types
// add_filter('rewrite_rules_array', 'tc_rewrite_rules');
// function tc_rewrite_rules($rules) {
// 
//     $newRules  = array();
//     $newRules['products/(.+)/(.+)/(.+)/?$'] = 'index.php?custom_post_type_name=$matches[3]'; // my custom structure will also have the post name as the 5th uri segment
//     //$newRules['products/(.+)/(.+)/(.+)/(.+)/?$'] = 'index.php?custom_post_type_name=$matches[4]'; // my custom structure will also have the post name as the 5th uri segment
//     //$newRules['products/(.+)/?$'] = 'index.php?taxonomy_name=$matches[1]'; 
// 	$mergedRules = array_merge($newRules, $rules);
// 		error_log(var_export($mergedRules, 1));
//     return $mergedRules;
// }

function tc_filter_post_type_link($link, $post)
{
    if ($post->post_type != 'tc_products')
        return $link;

    if ($cats = get_the_terms($post->ID, 'tc_product_type'))
    {
		//error_log(var_export($cats, 1));
		$taxonomyParentsString = get_taxonomy_parents(array_pop($cats)->term_id, 'tc_product_type', false, '/', true);
		// trim the trailing slash, otherwise we wind up with a double slash before the post title
		$taxonomyParentsString = substr($taxonomyParentsString, 0, -1);
		//error_log("taxonomyParentsString : $taxonomyParentsString" );
		//error_log("before link : $link");
        $link = str_replace('%taxonomy_name%', $taxonomyParentsString, $link); // see custom function defined below
		//error_log("after link : $link");
    }else{
		//error_log("no taxonomies found for : $link");
		$link = str_replace('%taxonomy_name%/', '', $link); // see custom function defined below
        
	}
    return $link;
}
add_filter('post_type_link', 'tc_filter_post_type_link', 10, 2);


// my own function to do what get_category_parents does for other taxonomies
function get_taxonomy_parents($id, $taxonomy, $link = false, $separator = '/', $nicename = false, $visited = array()) {    
    $chain = '';   
    $parent = &get_term($id, $taxonomy);

    if (is_wp_error($parent)) {
		error_log("is_wp_error : ");
		error_log(var_export($parent));
	
        return $parent;
    }

    if ($nicename){
        $name = $parent -> slug;        
	}else{    
        $name = $parent -> name;
	}

    if ($parent -> parent && ($parent -> parent != $parent -> term_id) && !in_array($parent -> parent, $visited)) {    
        $visited[] = $parent -> parent;    
        $chain .= get_taxonomy_parents($parent -> parent, $taxonomy, $link, $separator, $nicename, $visited);

    }

    if ($link) {
        // nothing, can't get this working :(
    } else {
        $chain .= $name . $separator;    
	}
	
	error_log("get_taxonomy_parents : $chain");
    return $chain;    
}


/**
 * Define default terms for custom taxonomies in WordPress 3.0.1
 *
 * @author    Michael Fields     http://wordpress.mfields.org/
 * @link http://wordpress.mfields.org/2010/set-default-terms-for-your-custom-taxonomies-in-wordpress-3-0/
 */
// function tc_set_default_object_terms( $post_id, $post ) {
//     if ( 'publish' === $post->post_status ) {
//         $defaults = array(
//             'tc_products' => array( '' ),
//             );
//         $taxonomies = get_object_taxonomies( $post->post_type );
//         foreach ( (array) $taxonomies as $taxonomy ) {
//             $terms = wp_get_post_terms( $post_id, $taxonomy );
//             if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
//                 wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
//             }
//         }
//     }
// }







?>