<?php
/**
 * Functions
 *
 * @package      genesis-crm
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

/**
 * Theme Setup
 *
 * This setup function attaches all of the site-wide functions 
 * to the correct hooks and filters. All the functions themselves
 * are defined below this setup function.
 *
 */

function all_settings_link() {
 add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
add_action('admin_menu', 'all_settings_link');

function is_ticket_post(){
	global $pagenow;
	
	$isTicketPage = (isset($_REQUEST['post_type']) && $_REQUEST['post_type'] == 'ticket');
	if (!$isTicketPage){
		$isTicketPage = $pagenow == 'post-new.php' && $_GET['post_type'] == 'ticket';
	}	
	
	if (!$isTicketPage){
		global $post;
		$isTicketPage = isset($post) && $post->post_type == 'ticket';
	}
	return $isTicketPage;
}


function is_order_post(){
	global $pagenow;
	
	$isOrderPage = (isset($_REQUEST['post_type']) && $_REQUEST['post_type'] == 'tc_crm_order');
	if (!$isOrderPage){
		$isOrderPage = $pagenow == 'post-new.php' && $_GET['post_type'] == 'tc_crm_order';
	}	
	
	if (!$isOrderPage){
		global $post;
		$isOrderPage = isset($post) && $post->post_type == 'tc_crm_order';
	}
	return $isOrderPage;
}

/** Remove Genesis widgets */
add_action( 'widgets_init', 'remove_genesis_widgets', 20 );
function remove_genesis_widgets() {
    unregister_widget( 'Genesis_eNews_Updates' );
    unregister_widget( 'Genesis_Featured_Page' );
    unregister_widget( 'Genesis_User_Profile_Widget' );
    unregister_widget( 'Genesis_Menu_Pages_Widget' );
    unregister_widget( 'Genesis_Widget_Menu_Categories' );
    unregister_widget( 'Genesis_Featured_Post' );
    unregister_widget( 'Genesis_Latest_Tweets_Widget' );
	
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_Text');
	unregister_widget('WP_Widget_Categories');
	//unregister_widget('WP_Widget_Recent_Posts');
	//unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
}


add_action('genesis_setup','child_theme_setup', 15);
function child_theme_setup() {
	
	// ** Backend **
	// Remove Unused Menu Items
	add_action('admin_menu', 'be_remove_menus');
	
	// Customize Menu Order
	//add_filter( 'custom_menu_order', 'be_custom_menu_order' );
	add_filter( 'menu_order', 'be_custom_menu_order' );
	
	// Set up Taxonomies
	add_action( 'init', 'be_create_my_taxonomies' );
	
	// Set up Taxonomy Default Terms
	//add_action( 'save_post', 'mfields_set_default_object_terms', 100, 2 );

	// Set up Meta Boxes
	//add_action( 'init' , 'be_create_metaboxes' );
	// add_action( 'init' , 'init_be_create_metaboxes' );
	// add_filter( 'cmb_meta_boxes', 'be_create_metaboxes' );

	// Setup Sidebars
	genesis_register_sidebar(array('name' => 'Home Column 1', 'id' => 'home-column-1'));
	genesis_register_sidebar(array('name' => 'Home Column 2', 'id' => 'home-column-2'));
	genesis_register_sidebar(array('name' => 'Home Column 3', 'id' => 'home-column-3'));
	
	// Setup Default Layout
	genesis_set_default_layout( 'full-width-content' );

	// Setup Widgets
	include_once( 'lib/widgets/widget-old-prospects.php' );
	include_once( 'lib/widgets/widget-new-prospects.php' );
	include_once( 'lib/widgets/widget-active-projects.php' );
	include_once( 'lib/widgets/widget-other-stats.php' );
	include_once( 'lib/widgets/widget-poc.php' );
	include_once( 'lib/widgets/widget-inquiry.php' );
	include_once( 'lib/widgets/widget-inquiry-result.php' );
	include_once( 'lib/widgets/widget-forwarded.php' );
	include_once( 'lib/widgets/widget-project-sources.php' );
	include_once( 'lib/widgets/widget-referral.php' );
	include_once( 'lib/widgets/widget-activity-graph.php' );
	include_once( 'lib/widgets/widget-quotes.php' );
	
	// Move Post Editor to Metabox
	add_action( 'admin_enqueue_scripts', 'crm_move_posteditor', 10, 1 );
	
	// Don't update theme
	add_filter( 'http_request_args', 'be_dont_update_theme', 5, 2 );
		
	//add_action( 'admin_menu', 'crm_change_post_menu_label' );
	
	// Change post title text
	//add_action( 'gettext', 'crm_change_title_text' );
	
	// Modify post column layout
	add_filter( 'manage_posts_columns', 'crm_add_new_columns' );	
	
	// Add taxonomies to post column
	//add_action( 'manage_posts_custom_column', 'crm_manage_columns', 10, 2 );

	// Remove post meta fields
	add_action( 'admin_menu' , 'crm_remove_page_fields' );
	
	// Remove Genesis SEO Metabox
	remove_action('admin_menu', 'genesis_add_inpost_seo_box');
	
	// Use Genesis Layout Metabox only on pages
	remove_action('admin_menu', 'genesis_add_inpost_layout_box');
	add_action('admin_menu', 'be_genesis_add_inpost_layout_box');
	
	// ** Frontend **		

	// Exclude Form from login
	add_filter('registered-users-only_exclusions', 'crm_form_exclusion');
	
	// Remove Footer
	remove_action('genesis_footer', 'genesis_do_footer');
	
	//add_action('wats_ticket_saved_meta', 'tc_crm_on_wats_ticket_saved_meta');
	//$output = apply_filters('wats_fire_ticket_update_notification_filter',$output,$postID);
}




function tc_crm_on_wats_ticket_saved_meta($postID){

}

// ** Backend Functions ** //

/**
 * Remove Menu Items
 *
 * Remove unused menu items by adding them to the array.
 * See the commented list of menu items for reference.
 *
 * @author Bill Erickson
 * @link https://github.com/billerickson/BE-Genesis-Child
 */

function be_remove_menus () {
	global $menu;
	//$restricted = array(__('Links'), __('Comments'), __('Posts'), __('Tools'), __('Pages'));
	$restricted = array(__('Links'), __('Comments'), __('Posts'),  __('Pages'));
	// Example:
	//$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}

/**
 * Customize Menu Order
 *
 * @param $menu_ord. Current order.
 * @return $menu_ord. New order.
 *
 * @author Bill Erickson
 * @link https://github.com/billerickson/BE-Genesis-Child
 */

function be_custom_menu_order( $menu_ord ) {
	//do_dump($menu_ord);
	if ( !$menu_ord ) return true;
	return array(
		'index.php', // this represents the dashboard link
		// 'edit.php?post_type=page', //the page tab
		// 'edit.php', //the posts tab
		// 'edit-comments.php', // the comments tab
		// 'upload.php', // the media manager
    );
}

/**
 * Create Taxonomies
 *
 * @author Bill Erickson
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 *
 */

function be_create_my_taxonomies() {
	register_taxonomy( 
		'poc', 
		'post', 
		array( 
			'hierarchical' => true, 
			'labels' => array(
				'name' => 'Points of Contact',
				'singlular_name' => 'Point of Contact'
			),
			'query_var' => true, 
			'rewrite' => true 
		) 
	);
	register_taxonomy( 
		'sources', 
		'post', 
		array( 
			'hierarchical' => true, 
			'labels' => array(
				'name' => 'Source',
				'singlular_name' => 'Source'
			),
			'query_var' => true, 
			'rewrite' => true 
		) 
	);		
}

/**
 * Define default terms for custom taxonomies in WordPress 3.0.1
 *
 * @author    Michael Fields     http://wordpress.mfields.org/
 * @link http://wordpress.mfields.org/2010/set-default-terms-for-your-custom-taxonomies-in-wordpress-3-0/
 */
// function mfields_set_default_object_terms( $post_id, $post ) {
//     if ( 'publish' === $post->post_status ) {
//         $defaults = array(
//             'poc' => array( 'email-form' ),
//             );
//         $taxonomies = get_object_taxonomies( $post->post_type );
//         foreach ( (array) $taxonomies as $taxonomy ) {
//             $terms = wp_get_post_terms( $post_id, $taxonomy );
//             if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
//                 wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
//             }
//         }
//     }
//}




/**
 * Move Post Editor
 *
 * @author Jared Atchison
 * @link http://www.billerickson.net/twentyten-crm/
 */
 
function crm_move_posteditor( $hook ) {
  	if ( $hook == 'post.php' OR $hook == 'post-new.php' ) {
		wp_enqueue_script( 'jquery' );
		add_action('admin_print_footer_scripts','crm_move_posteditor_scripts');
  	}
}

function crm_move_posteditor_scripts() {
	// This javascript will move the post editor into a "Notes" metabox and
	// hide the 'Select contact' dropdown if we are editing a Contact.
	
	?>
	<script type="text/javascript">

		jQuery('#postdiv, #postdivrich').prependTo('#tc_crm_notes .inside');
		//jQuery('#tc_crm_poc div.inside').prependTo('#tagsdiv-tc_crm_order_type .inside');

		
		if(pagenow == 'tc_crm_contact' && adminpage == 'post-php'){
			jQuery('#panalo_selected_contact').parent().parent().hide();
		}
		
	</script>
	<style type="text/css">
			#normal-sortables {margin-top: 20px;}
			#titlediv { margin-bottom: 0px; }
			#postdiv.postarea, #postdivrich.postarea { margin:0; }
			#post-status-info { line-height:1.4em; font-size:13px; }
			#custom_editor .inside { margin:2px 6px 6px 6px; }
			#ed_toolbar { display:none; }
			#postdiv #ed_toolbar, #postdivrich #ed_toolbar { display:block; }
	</style>
	<?php
}


/**
 * Don't Update Theme
 * If there is a theme in the repo with the same name, 
 * this prevents WP from prompting an update.
 *
 * @author Mark Jaquith
 * @link http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 */

function be_dont_update_theme( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.
	$themes = unserialize( $r['body']['themes'] );
	unset( $themes[ get_option( 'template' ) ] );
	unset( $themes[ get_option( 'stylesheet' ) ] );
	$r['body']['themes'] = serialize( $themes );
	return $r;
}


/**
 * Modify post column layout
 *
 * @author Andrew Norcross
 * @link http://www.billerickson.net/twentyten-crm/
 */
 
function crm_add_new_columns( $crm_columns ) {
	//global $post;
	if(get_post_type() == 'tc_crm_contact'){
		
		$new_columns['cb'] = '<input type="checkbox" />';
		$new_columns['title'] = _x('Contact Name', 'column name');
		$new_columns['status'] = __('Status');	
		$new_columns['poc'] = __('Point Of Contact');
		$new_columns['source'] = __('Source');		
		$new_columns['date'] = _x('Date', 'column name');
		return $new_columns;
	}else{
		return $crm_columns;
	}
}

/**
 * Add taxonomies to post column
 *
 * @author Andrew Norcross
 * @link http://www.billerickson.net/twentyten-crm/
 */
 
// function crm_manage_columns ($column_name, $id ) {
// 	global $post;
// 	switch ($column_name) {
// 		case 'status':
// 			$category = get_the_category(); 
// 			echo $category[0]->cat_name;
// 	    	    break;
// 		case 'poc':
// 			echo get_the_term_list( $post->ID, 'poc', '', ', ', '');
// 		        break;
//  		case 'source':
// 			echo get_the_term_list( $post->ID, 'sources', '', ', ', '');
// 		        break;
// 		default:
// 			break;
// 	} // end switch
// }

/**
 * Remove post meta fields
 *
 * @author Andrew Norcross
 * @link http://www.billerickson.net/twentyten-crm/
 */
 
function crm_remove_page_fields() {
	remove_meta_box( 'commentstatusdiv' , 'post' , 'normal' ); //removes comments status
	remove_meta_box( 'commentsdiv' , 'post' , 'normal' ); //removes comments
	remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
	remove_meta_box( 'trackbacksdiv' , 'post' , 'normal' );
	remove_meta_box( 'authordiv' , 'post' , 'normal' );
	remove_meta_box( 'postcustom' , 'post' , 'normal' );
	remove_meta_box( 'revisionsdiv'	, 'post' , 'normal' );
	remove_meta_box( 'tagsdiv-post_tag', 'post', 'normal' );
	//do_dump($GLOBALS['wp_query']);
}
/**
 * Use Genesis Layout Metabox only on pages
 * Submitted patch to Genesis (#190) so this can be replaced with
 * remove_post_type_support('post', 'genesis-layouts');
 *
 * @author Bill Erickson
 * @props Thomas Griffin
 */
 
function be_genesis_add_inpost_layout_box() {

	if ( !current_theme_supports('genesis-inpost-layouts') )
		return;

	foreach ( (array)get_post_types( array( 'public' => true ) ) as $type ) {
		if ( post_type_supports( $type, 'genesis-layouts' ) || $type = 'page' ) {
			add_meta_box('genesis_inpost_layout_box', __('Genesis Layout Settings', 'genesis'), 'genesis_inpost_layout_box', $type, 'normal', 'high');
		}
	}

}

// ** Frontend Functions ** //

/**
 * Exclude Form from login
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/contact-form-to-wordpress-crm/
 */
 
function crm_form_exclusion($exclusion) {
	$exclusion[] = 'form';
	return $exclusion;
}

/**
 * Disable RSS Feed
 *
 * @author Frank Bultge
 * @link http://wpengineer.com/287/disable-wordpress-feed/
 */
	
// ** Helper Functions ** //

/**
 * Percent Function
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/twentyten-crm/
 */
 
function crm_percent($num_amount, $num_total) {
	$count1 = $num_amount / $num_total;
	$count2 = $count1 * 100;
	$count = number_format($count2, 0);
	return $count.'%';
}

/**
 * Get Post Meta Shorthand
 * Carryover from TwentyTen CRM. You could also use genesis_get_custom_field().
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/twentyten-crm/
 */

function get_custom_field($field) {
	global $post;
	$value = get_post_meta($post->ID, $field, true);
	if ($value) return esc_attr( $value );
	else return false;
}

/**
 * Project Name
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/twentyten-crm/
 */

function be_get_project_name() {
	global $prefix;
	$project_name = get_custom_field($prefix.'project_name');
	if (!empty($project_name)) $name = $project_name .' ('.get_the_title().')';
	else $name = get_the_title();
	return $name;
}

