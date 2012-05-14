<?php
/*
Plugin Name: Foobar Notification Bars v2
Plugin URI: themergency.com/foobar-wordpress-plugin/
Description: Show awesome looking notification bars on specific pages
Version: 2.3.1
Author: Brad Vincent
Author URI: http://themergency.com/
License: GPL2
*/

define('FOOBAR_FILE_CSS', 'jquery.foobar.2.3.css');
define('FOOBAR_FILE_JS', 'jquery.foobar.2.3.min.js');
define('FOOBAR_UPDATE_URL', 'http://themergency.com/updates/foobar-version.xml');

if (!class_exists('FoobarNotifications')) {

    // Includes
    require_once "includes/WP_PluginBase.php";
    require_once "includes/foobarv2-js-generator.php";

    class FoobarNotifications extends WP_PluginBase_v1_5 {
      
        function admin_settings_init() {

          $foobar_name = $this->get_foobar_name();
          $plural = WPPBUtils::pluralize($foobar_name);

          $this->admin_settings_add( array(
              'id'      => 'foobar_disabled',
              'title'   => __( 'Disable ' . $plural ),
              'desc'    => __( 'Disable all '. $plural .' for the whole site. No ' . $plural . ' will be shown!' ),
              'std'     => 'off',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'General'
          ) );
        
          $this->admin_settings_add( array(
              'id'      => 'foobar_name',
              'title'   => sprintf( __( 'Rebrand %s' ), $foobar_name ),
              'desc'    => __( 'You can override what '. $foobar_name .' is called. We realise that "' . $foobar_name . '" is not the most intuitive name to display to website admins or clients, so you can rename ' . $foobar_name .' to something more meaningful, like "Bar Notifications". Please make sure this name is singular, not plural.' ),
              'type'    => 'text',
              'section' => '',
              'tab'     => 'General'
          ) );

          $this->admin_settings_add( array(
              'id'      => 'default_foobar_id',
              'title'   => __( 'Default ' . $foobar_name ),
              'std'     => '',
              'type'    => 'default_foobar',
              'section' => '',
              'tab'     => 'General'
          ) );
          
          $upload_dir = wp_upload_dir();

          $this->admin_settings_add( array(
              'id'      => 'foobar_references',
              'title'   => __( 'Dynamic JS &amp; CSS' ),
              'std'     => 'dynamic',
              'type'    => 'radio',
              'section' => '',
              'tab'     => 'General',
              'choices' => array(
                'dynamic' => 'Dynamic<br /><small>references dynamically generated, on-the-fly JS and CSS files. E.g. '.get_bloginfo( 'url' ) . '/?' . $this->_plugin_name . '-js-dynamic=js</small>',
                'inline' => 'Inline<br /><small>javsacript and CSS code is inluded inline, within the page. Therefore the javascript and CSS cannot be cached by the browser.</small>',
                'generated' => 'Generate to Disk<br /><small>javascript and CSS code is saved to static files on the server, resulting in the best possible performance<br />Write access is required in order to create and update the static files.<br />Files are saved to <strong>'.$upload_dir['baseurl'].'</strong><br /><strong>Please also note</strong> : shortcodes used within messages and custom HTML sections will not work with this option.</small>'
              )
          ) );
          

          $this->admin_settings_add( array(
              'id'      => 'foobar_scripts_in_footer',
              'title'   => __( 'Scripts In Footer' ),
              'desc'    => __( 'Load the javascript files in the site footer. This requires the theme to have the wp_footer() hook in the appropriate place.' ),
              'std'     => '',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Advanced'
          ) );

          $this->admin_settings_add( array(
              'id'      => 'foobar_exclude_jquery',
              'title'   => __( 'Exclude jQuery Script' ),
              'desc'    => __( 'Automatically exclude the jQuery script from the page. Only use this setting to overcome issues when your theme or other plugins automattically include their own version of jQuery, resulting in javascript errors.' ),
              'std'     => 'on',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Advanced'
          ) );

          $this->admin_settings_add( array(
              'id'      => 'foobar_include_easing',
              'title'   => __( 'Include Easing Script' ),
              'desc'    => __( 'Automatically include the jQuery easing script (jquery.easing.1.3.js) into the page.' ),
              'std'     => 'on',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Advanced'
          ) );
          
          $this->admin_settings_add( array(
              'id'      => 'foobar_encode_html',
              'title'   => __( 'Encode HTML' ),
              'desc'    => __( 'Encode any HTML that is used within the messages and custom HTML areas. This is to overcome issues when the HTML is minified (<strong>via plugins like wp-minify and W3 Total Cache</strong>) resulting in javascript errors. Please note that an extra javascript file is referenced in the page.' ),
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Advanced'
          ) );
          
          $this->admin_settings_add( array(
              'id'      => 'foobar_enable_conditional_logic',
              'title'   => __( 'Enable Conditional Logic' ),
              'desc'    => __( 'Enables conditional checks to place your foobars on specific pages, based on WordPress conditional tags. When enabled, a new input box will appear above the save button when editing a ' . $foobar_name . '. Please note that this feature does incur extra queries on your database (2 extra per page request).<br /><strong>Please Note:</strong> certain conditional tags will only work if Dynamic JS & CSS under the General tab is set to Inline.' ),
              'std'     => 'on',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Advanced'
          ) );
          
          $this->admin_settings_add( array(
              'id'      => 'foobar_disable_for_mobile',
              'title'   => __( 'Disable on Mobile Devices' ),
              'desc'    => __( 'Disables all ' . $plural . ' from showing on mobile devices.' ),
              'std'     => 'on',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Advanced'
          ) );
          
          $cpt_choices = array();
          foreach ( get_post_types() as $posttype ) {
            if ( in_array( $posttype, array('foobar', 'revision', 'nav_menu_item', 'post_format', 'attachment') ) )
              continue;
            $cpt_choices[$posttype] = $posttype;
          }

          $cpt_defaults = array();
          $cpt_defaults['post'] = 'true';
          $cpt_defaults['page'] = 'true';

          $this->admin_settings_add( array(
              'id'      => 'cpt_metabox_display',
              'title'   => __( 'Show Metabox for Post Types' ),
              'desc'    => __( 'Select which post types will display the '. $foobar_name .' metabox. By default it will be shown on pages and posts.' ),
              'std'     => $cpt_defaults,
              'type'    => 'checkboxlist',
              'section' => '',
              'tab'     => 'Meta Boxes',
              'class'   => '',
              'choices' => $cpt_choices
          ) );

          $this->admin_settings_add( array(
              'id'      => 'show_debug',
              'title'   => __( 'Show Debug Info' ),
              'desc'    => __( 'Shows debug information metabox on the add/edit page.' ),
              'std'     => 'off',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Admin'
          ) );
          
          $this->admin_settings_add( array(
              'id'      => 'foobar_admin_disable_colorpicker',
              'title'   => __( 'Disable Color Pickers' ),
              'desc'    => __( 'Disable the enhanced color picker controls on the add/edit page.' ),
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Admin'
          ) );

          $this->admin_settings_add( array(
              'id'      => 'foobar_admin_disable_jquery_input',
              'title'   => __( 'Disable Enhanced UI Controls' ),
              'desc'    => __( 'Disable enhanced sliders, radio buttons and checkboxes controls on the add/edit page.' ),
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'Admin'
          ) );
          
          if (is_super_admin()) {
            $this->admin_settings_add( array(
                'id'      => 'foobar_only_admin_edit',
                'title'   => __( 'Only Admin Can Manage '.$plural ),
                'desc'    => __( 'Check this to only allow administrators to edit '. $plural . ' in the WordPress admin.' ),
                'type'    => 'checkbox',
                'section' => '',
                'tab'     => 'Admin'
            ) );            
          }          

          $this->admin_settings_add( array(
              'id'      => 'socials',
              'title'   => __( 'Default Social Profiles' ),
              'std'     => '',
              'type'    => 'social_profiles',
              'section' => '',
              'tab'     => 'Social Profiles',
              'class'   => ''
          ) );

          $this->admin_settings_add( array(
              'id'      => 'custom_css',
              'title'   => __( 'Custom CSS' ),
              'desc'    => __( 'Any custom CSS you want to add' ),
              'std'     => '',
              'type'    => 'textarea',
              'section' => '',
              'tab'     => 'Custom CSS',
              'class'   => 'medium_textarea'
          ) );

          $this->admin_settings_add( array(
              'id'      => 'custom_js',
              'title'   => __( 'Custom JS Options' ),
              'desc'    => __( 'Any custom options you would like to add to ALL of the ' . $plural . '. This is for adding additional options that are not catered for by the current edit page.<br /><strong>WARNING</strong> : Only to be used by developers!' ),
              'std'     => '',
              'type'    => 'textarea',
              'section' => '',
              'tab'     => 'Custom JS',
              'class'   => 'medium_textarea'
          ) );

          if (is_super_admin()) {

            $this->admin_settings_add( array(
                'id'      => 'check_for_updates',
                'title'   => __( 'Check For Updates' ),
                'type'    => 'version_check',
                'section' => '',
                'tab'     => 'Updates'
            ) );
            
          }
        }
        
        function init() {
          $this->_plugin_title = $this->get_foobar_name();
          $this->_plugin_settings_summary = '<p><a target="_blank" href="'.$this->_plugin_url.'docs/documentation.html">View online documentation</a></p>';

          if (function_exists('is_admin_bar_showing') && function_exists('add_theme_support')) {
            add_theme_support( 'admin-bar', array( 'callback' => 'foobar_admin_bar_bump_cb') );
          }

          //call base init
          parent::init();

          if ( is_admin() ) {
            // Register custom post type JS Scripts
            add_action('admin_print_scripts',  array(&$this, "admin_cpt_foobar_js_enqueue") );

            // Render CPT CSS
            add_action('admin_print_styles', array(&$this, "admin_cpt_foobar_css_enqueue") );
            
            add_action('admin_print_scripts-post-new.php', array(&$this, 'admin_post_js_enqueue' ) );
            add_action('admin_print_scripts-post.php', array(&$this, 'admin_post_js_enqueue' ) );            

            add_action('admin_footer', array(&$this, 'inline_dynamic_js') );
            
            add_action('admin_head', array(&$this, 'inline_dynamic_css') );

            add_filter('plugin_action_links_'.plugin_basename(__FILE__), array(&$this, 'admin_plugin_actions'), -10);

            add_action('wp_ajax_foobarcheckupdates', array(&$this, 'admin_update_check') );
          }

          $this->register_cpt_foobar();
        }

        //plugin version
        function current_plugin_version() {
            return '2.3.1';
        }

        function admin_update_check() {
          check_ajax_referer('foobar_versioncheck');

          $xml = $this->check_plugin_version(FOOBAR_UPDATE_URL, 0);

          $latest = (string)$xml->latest;

          header( 'Content-Type: text/html' );

          if ( version_compare( $latest, $this->current_plugin_version(), '<=' ) ) {
?>
<div id="message" class="updated"><p>You are using the most recent version!</p></div>
<?php
          } else {
          ?>
<div id="message" class="updated"><p><strong>There is a new version available!</strong> You have version <?php echo $this->current_plugin_version(); ?> installed. Please update to version <?php echo $xml->latest; ?>.</p></div>

<div id="instructions">
    <h3>Update Instructions</h3>
    <p><strong>Please note:</strong> make a <strong>backup</strong> of the plugin before updating to the latest version.</p>
    <p>To update, follow these steps:</p>
    <ol>
      <li>Login to <a href="http://www.codecanyon.net/">CodeCanyon</a>, head over to your <strong>downloads</strong> section and re-download the plugin like you did when you bought it.</li>
      <li>Deactivate the current version of FooBar and then delete it. (Do not worry - all settings and FooBars will be preserved)</li>
      <li>Either upload the newly downloaded zip or FTP it to your server.</li>
      <li>Activate the FooBar plugin again.</li>
    </ol>
</div>

<h3 class="title">Changelog</h3>
          <?php
            echo $xml->changelog;
          }
          
          exit;
        }
        
        function admin_post_js_enqueue() {
          $this->register_and_enqueue_js('admin-post-meta.js');
        }

        // register foobar CPT CSS scripts
        function admin_cpt_foobar_css_enqueue() {
          global $wp_version;
          global $post_type;
          if ( $post_type !== 'foobar' && $_GET['page'] !== 'foobar') return;
          
          $this->register_and_enqueue_css('admin-cpt-foobar.css');
          $this->register_and_enqueue_css('inputs/jquery.inputs.css');
          $this->register_and_enqueue_css('jquery.miniColors.css');
          $this->register_and_enqueue_css(FOOBAR_FILE_CSS);
          
          //if WP 3.3
          if ( version_compare( $wp_version, '3.3', '>=' ) ) {
            $this->register_and_enqueue_css('wp33admin.css');
          }
        }

        // register foobar CPT JS scripts
        function admin_cpt_foobar_js_enqueue() {
          global $post_type;
          
          if ( $post_type !== 'foobar' && $_GET['page'] !== 'foobar') return;
          
          $this->register_and_enqueue_js('admin-cpt-foobar.js');

          if ($this->get_option('foobar_admin_disable_jquery_input') != 'on') {
            $this->register_and_enqueue_js('jquery.inputs.js');
          }

          if ($this->get_option('foobar_admin_disable_colorpicker') != 'on') {
            $this->register_and_enqueue_js('jquery.miniColors.min.js');
          }

          $this->register_and_enqueue_js('jquery.tablednd_0_5.js');
          $this->register_and_enqueue_js(FOOBAR_FILE_JS);
          
          if ($this->get_option('foobar_encode_html') == 'on') {
            $this->register_and_enqueue_js('encoder.js');
          }

          $this->register_and_enqueue_js('jquery.easing.1.3.js');
        }

        // Add the 'Settings' and 'Documentation' links to the plugin page
        function admin_plugin_actions($links) {
          $links[] = '<a href="options-general.php?page='.$this->_plugin_name.'"><b>Settings</b></a>';
          $links[] = '<a target="_blank" href="'.$this->_plugin_url.'docs/documentation.html"><b>Documentation</b></a>';
          return $links;
        }

        function get_foobar_name() {
            $whitelabel = $this->get_option( 'foobar_name' );
            if ( empty ( $whitelabel ) ) return 'FooBar';
            return $whitelabel;
        }
       
        function register_cpt_foobar() {
        
          $name = $this->get_foobar_name();
          $plural = WPPBUtils::pluralize($name);
          
          $visible = true;
          
          if (!is_super_admin()) {
              $visible = $this->get_option('foobar_only_admin_edit') != 'on';
          }
        
          $labels = array( 
            'name' => $plural,
            'singular_name' => $name,
            'add_new' => _x( 'Add New', 'foobar' ),
            'add_new_item' => _x( 'Add New ' . $name, 'foobar' ),
            'edit_item' => _x( 'Edit ' . $name, 'foobar' ),
            'new_item' => _x( 'New ' . $name, 'foobar' ),
            'view_item' => _x( 'View ' . $name, 'foobar' ),
            'search_items' => _x( 'Search ' . $plural, 'foobar' ),
            'not_found' => _x( 'No ' . $plural . ' found', 'foobar' ),
            'not_found_in_trash' => _x( 'No ' . $plural . ' found in Trash', 'foobar' ),
            'menu_name' => _x( $plural, 'foobar' )
          );

          $args = array( 
            'labels' => $labels,
            'hierarchical' => false,
            'supports' => array( 'title' ),
            'public' => $visible,
            'show_ui' => $visible,
            'show_in_menu' => $visible,
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'exclude_from_search' => true,
            'has_archive' => false,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => false,
            'capability_type' => 'page'
          );

          register_post_type( 'foobar', $args );
        }        
        
        function admin_init() {
          // Add custom post navigation columns
          add_filter('manage_edit-foobar_columns', array(&$this, 'foobar_custom_columns'));
          add_action('manage_posts_custom_column', array(&$this, 'foobar_custom_column_content'));

          //add filter to update save messages
          add_filter('post_updated_messages', array(&$this, 'foobar_updated_messages'));

          add_filter('post_row_actions', array(&$this, 'remove_foobar_row_actions') );

          add_action('add_meta_boxes', array(&$this, 'foobar_meta_boxes') );

          add_action('save_post', array(&$this, 'foobar_save_meta') );

          add_action('trash_post', array(&$this, 'foobar_trash') );
          
          add_action( 'wp_before_admin_bar_render', array(&$this, 'remove_admin_bar_foobar_links') );
        }
        
        function remove_admin_bar_foobar_links() {
          global $wp_admin_bar;
          global $post_type;
          
          if ( $post_type !== 'foobar' && $_GET['page'] !== 'foobar') return;          
          
          $wp_admin_bar->remove_menu('view');
        }

        function foobar_meta_boxes() {
          //remove the default publish metabox
          remove_meta_box( 'submitdiv', 'foobar', 'side' );

          $name = $this->get_foobar_name();

          //add our own publish metabox
          add_meta_box(
               'foobar_publish'
              ,__( 'Save ' . $name )
              ,array( &$this, 'render_foobar_publish_meta_box_content' )
              ,'foobar'
              ,'side'
              ,'high'
          );

          add_meta_box(
               'foobar_options'
              ,__( 'General Options' )
              ,array( &$this, 'render_foobar_options_meta_box_content' )
              ,'foobar'
              ,'normal'
              ,'high'
          );

          add_meta_box(
               'foobar_advanced_options'
              ,__( 'Advanced Options' )
              ,array( &$this, 'render_foobar_advanced_meta_box_content' )
              ,'foobar'
              ,'side'
              ,'default'
          );

          add_meta_box(
               'foobar_cookie_options'
              ,__( 'Client Side Cookies' )
              ,array( &$this, 'render_foobar_cookie_meta_box_content' )
              ,'foobar'
              ,'side'
              ,'default'
          );

          add_meta_box(
               'foobar_message_options'
              ,__( 'Message Options' )
              ,array( &$this, 'render_foobar_message_options_meta_box_content' )
              ,'foobar'
              ,'side'
              ,'default'
          );

          add_meta_box(
               'foobar_styling'
              ,__( 'Message Styling' )
              ,array( &$this, 'render_foobar_styling_meta_box_content' )
              ,'foobar'
              ,'normal'
              ,'default'
          );

          add_meta_box(
               'foobar_messages'
              ,__( $name . ' Messages' )
              ,array( &$this, 'render_foobar_messages_meta_box_content' )
              ,'foobar'
              ,'normal'
              ,'default'
          );

          add_meta_box(
              'foobar_widths',
              __( 'Widths' ),
              array( &$this, 'render_foobar_widths_metabox_content' ),
              'foobar',
              'normal',
              'default'
          );

          add_meta_box(
               'foobar_rss'
              ,__( 'RSS Options' )
              ,array( &$this, 'render_foobar_rss_meta_box_content' )
              ,'foobar'
              ,'normal'
              ,'default'
          );

          add_meta_box(
               'foobar_twitter'
              ,__( 'Twitter Options' )
              ,array( &$this, 'render_foobar_twitter_meta_box_content' )
              ,'foobar'
              ,'normal'
              ,'default'
          );

          add_meta_box(
               'foobar_social'
              ,__( 'Social Profiles' )
              ,array( &$this, 'render_foobar_social_meta_box_content' )
              ,'foobar'
              ,'normal'
              ,'default'
          );

          add_meta_box(
              'foobar_custom_html',
              __( 'Custom HTML' ),
              array( &$this, 'render_foobar_custom_html_metabox_content' ),
              'foobar',
              'normal',
              'default'
          );

          add_meta_box(
               'foobar_custom_css'
              ,__( 'Custom CSS' )
              ,array( &$this, 'render_foobar_custom_css_box_content' )
              ,'foobar'
              ,'normal'
              ,'default'
          );

          add_meta_box(
               'foobar_custom_js'
              ,__( 'Custom Javascript' )
              ,array( &$this, 'render_foobar_custom_js_box_content' )
              ,'foobar'
              ,'normal'
              ,'default'
          );

          if ($this->get_option('show_debug')) {
            add_meta_box(
                 'foobar_debug'
                ,__( 'Debug Information' )
                ,array( &$this, 'render_foobar_debug_meta_box_content' )
                ,'foobar'
                ,'normal'
                ,'low'
            );
          }

          $cpt_metaboxes = $this->get_option('cpt_metabox_display');
          if (empty($cpt_metaboxes)) {
            $cpt_metaboxes['page'] = 'true';
            $cpt_metaboxes['post'] = 'true';
          }

          foreach ( $cpt_metaboxes as $posttype=>$display_metabox ) {

            if ( $display_metabox == 'true') {

              add_meta_box(
                   $posttype . '_foobar_options'
                  ,__( $name . ' Options')
                  ,array( &$this, 'render_post_page_meta_box_content' )
                  ,$posttype
                  ,'normal'
                  ,'default'
              );

            }

          }

          //make sure we do not display yoast SEO metabox on our foobar post type page
          remove_meta_box('wpseo_meta', 'foobar', 'normal');
        }

        function foobar_save_meta($post_id) {

          // check autosave
          if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
              return $post_id;
          }

          // verify nonce
          if (array_key_exists('foobar_nonce', $_POST) &&
                  wp_verify_nonce($_POST['foobar_nonce'], plugin_basename(__FILE__))) {
            //if we get here, we are dealing with the foobar post type
            
            //get all the foobar data
            $data = $_POST['foobar'];
            
            //check we have a few values set, if they are left blank
            if (empty($data['cookieName'])) {
              $data['cookieName'] = 'foobar-state-' . $post_id;
            }
            if (empty($data['cookieDuration'])) {
              $data['cookieDuration'] = '20';
            }

            //and save it
            update_post_meta($post_id, 'foobar', $data);

            //get the default that is set
            $is_default = $_POST['foobar_is_default'];

            $default_foobar_id = $this->get_option('default_foobar_id');

            if ($is_default == 'on') {
              //save the default foobar ID to options table
              $this->save_option( 'default_foobar_id', $post_id);
              
            } else if ($post_id == $default_foobar_id) {
              //we are setting the current default to not be the default anymore
              $this->delete_option( 'default_foobar_id' );
            }
            
            if ($this->get_option('foobar_references') == 'generated') {
              //save any static files if needed
              $this->generate_references_to_disk($post_id);
            }

            //delete the transient, so the cache is cleared
            delete_transient( 'default_foobar' );

            //clear the conditional rules so they are loaded again
            delete_transient( 'foobar_conditional_rules' );

          } else if (array_key_exists('foobar_post_nonce', $_POST) &&
                  wp_verify_nonce($_POST['foobar_post_nonce'], plugin_basename(__FILE__))) {
            //we are dealing with a post or page
            $foobar_type = $_POST['foobar_type'];
            $foobar_select = $_POST['foobar_select'];
            update_post_meta($post_id, 'foobar_type', $foobar_type);
            update_post_meta($post_id, 'foobar_select', $foobar_select);
          }
        }

        function generate_test_reference_to_disk() {
          $js_file = 'foobar-static-test.js';
          $upload_dir = wp_upload_dir();
          $js_file_full = $upload_dir['path'] . DIRECTORY_SEPARATOR . $js_file;
          if ( file_exists ($js_file_full) ) { @unlink( $js_file_full ); }
          //write it!
          $new_js = wp_upload_bits($js_file, null, '//this is a test file');
          return empty($new_js['error']);
        }
        
        function generate_references_to_disk($foobar_id) {

          $data = $this->get_foobar_data($foobar_id);

          $js_file = 'foobar-static-' . $foobar_id . '.js';
          $css_file = 'foobar-static-' . $foobar_id . '.css';

          $upload_dir = wp_upload_dir();
          $js_file_full = $upload_dir['path'] . DIRECTORY_SEPARATOR . $js_file;
          $css_file_full = $upload_dir['path'] . DIRECTORY_SEPARATOR . $css_file;

          //delete the files if they exist
          if ( file_exists ($js_file_full) ) { @unlink( $js_file_full ); }
          if ( file_exists ($css_file_full) ) { @unlink( $css_file_full ); }

          $options = get_option( $this->_plugin_name );

          //get JS to be written
          $foobar_js = FoobarJSGenerator::generate($data, $options, $this->_plugin_url);

          //write it!
          $new_js = wp_upload_bits($js_file, null, $foobar_js);

          $errors = false;

          if ( ! empty($new_js['error']) ) {
            $errors[] = $new_js['error'];
            //throw new Exception($new_js['error']);
          } else {
            $data['js_url'] = $new_js['url'];
          }

          //get custom CSS from the settings page and the foobar custom CSS
          $foobar_css = $this->get_option( 'custom_css' ) . '

          ' . $this->get_meta($data, "customCSS", '');

          //write it!
          $new_css = wp_upload_bits($css_file, null, $foobar_css);

          if ( ! empty($new_css['error']) ) {
            $errors[] = $new_css['error'];
          } else {
            $data['css_url'] = $new_css['url'];
          }

          update_post_meta($foobar_id, 'foobar', $data);

          return !is_array($errors);
        }

        function foobar_trash($post_id) {
          if (get_post_type($post_id) === 'foobar') {
            //delete the transient, so the cache is cleared
            delete_transient( 'default_foobar' );            
          }
          return $post_id;        
        }

        function admin_settings_validate($input) {

          $input = parent::admin_settings_validate($input);

          if (array_key_exists('default_foobar_id', $input)) {

            //clear the default foobar transient so the cache is cleared
            delete_transient( 'default_foobar' );
          }
          
          //if we are setting the references to 'generate to disk' from another value, 
          // then generate all the needed JS and CSS files
          if ($this->get_option('foobar_references') != 'generated' &&
                  array_key_exists('foobar_references', $input ) &&
                  $input['foobar_references'] == 'generated' ) {

            $upload_dir = wp_upload_dir();
            $upload_path = $upload_dir['path'];
            $upload_url = $upload_dir['url'];
            
            $has_error = false;
            
            $files = 0;
            
            foreach ($this->get_all_foobars() as $foobar) {
              if ( ! $this->generate_references_to_disk( $foobar->ID )) {
                $has_error = true;
                break;
              } else { $files = $files + 2; }
            }
            
            //if we had no files to create, try to create a test file
            if ($files == 0 && !$this->generate_test_reference_to_disk()) {
              $has_error = true;
            }
            
            if (!$has_error) {
              if ($files == 0) {
                $msg = sprintf( __( 'Settings Saved.<br />Static JS &amp; CSS files will be saved to <em>%s</em>.'), $upload_url );
              } else {
                $msg = sprintf( __( 'Settings Saved.<br />%d static JS &amp; CSS files were saved to location <em>%s</em>.'), $files, $upload_url );
              }

              add_settings_error( 'foobar_references', 
                      'foobar_references_generated',
                      $msg,
                      'updated'
                      );
            }
            
            if ($has_error) {
              $error = sprintf( __( 'There was a problem saving the static JS &amp; CSS files to disk!<br /> 
                Please make sure the correct permissions have been setup for your upload folder (%s)<br /><br />
                As a precaution, the <em>Dyanmic JS &amp; CSS</em> setting has been set to <em>Inline</em> to prevent any display issues' ), $upload_path );

              add_settings_error( 'foobar_references',
                      'foobar_references_error',
                      $error,
                      'error'
                      );

              $input['foobar_references'] = 'inline';
            }
            
          }

          return $input;
        }

//        function admin_settings_validate_item ( $setting, $input ) {
//
//        }

//        function is_foobar_enabled() {
//          return $this->get_option('foobar_enabled');
//        }

        function custom_admin_settings_render( $args = array() ) {
          extract( $args );

          $foobar_name = $this->get_foobar_name();

          if ($type == 'version_check') {

            $url = esc_url(wp_nonce_url(admin_url('admin-ajax.php?action=foobarcheckupdates'), 'foobar_versioncheck'));

            echo '<div style="padding-right:10px" class="alignleft">Current Version : <strong>'.$this->current_plugin_version().'</strong></div>';
            echo '<a id="foobar_version_check" href="#foobar_version_check" title="Check Now" class="alignleft button-secondary save">Check Now!</a>';
            echo '<img id="foobar_version_check_throbber" style="display:none" class="alignleft" src="' . $this->_plugin_url . 'images/throbber.gif" />';
            echo '<input id="foobar_version_check_url" type="hidden" value="'. $url . '" />';
            echo '</td></tr><tr valign="top"><td colspan="2"><div style="display:none" id="foobar_version_check_container"></div>';

          } else if ($type == 'social_profiles') {
            $plural = WPPBUtils::pluralize($foobar_name);

            echo '</td></tr><tr valign="top"><td colspan="2">Setup your default social profiles below, so you can re-use them on all your ' .$plural . '.';

            $socials = $this->get_option($id);

            $this->render_social_profile_form($socials);
          } else if ( $type == 'default_foobar' ) {
            $foobars = $this->get_all_foobars();
            $default_foobar_id = $this->get_option($id);
            ?>
      <select name="foobar[default_foobar_id]">
        <option value="0">--no default set--</option>
        <?php foreach( $foobars as $foobar ) {
          echo '<option '. ( $default_foobar_id == $foobar->ID ? ' selected="selected" ': '' ) .' value="'. $foobar->ID . '">'. $foobar->post_title . '</option>';
        } ?>
      </select><br />
      <small>
        This is the default <?php echo $foobar_name; ?> that is shown on every page. You can also override which <?php echo $foobar_name; ?> is shown on individual posts and pages.<br />
        Also, by setting a default, that <?php echo $foobar_name; ?> will be shown on every page, unless overridden per post or page.
      </small>
          <?php
          }
        }
        
        function get_all_foobars() {
          $args = array(
              'post_type' => 'foobar', 
              'numberposts' => -1,
              'orderby' => 'post_date',
              'order' => 'DESC',
              'post_status' => 'publish'
              );
          return get_posts( $args );
        }

        function render_post_page_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $foobar_type = get_post_meta($post->ID, 'foobar_type', true);
          $foobar_select = get_post_meta($post->ID, 'foobar_select', true);
          if (empty ($foobar_type)) { $foobar_type = 'default'; }

          $foobars = $this->get_all_foobars();
          $default_foobar_id = $this->get_option('default_foobar_id');

          $default_foobar = get_post($default_foobar_id);
          if ($default_foobar && $default_foobar->post_status == "trash") {
            $default_foobar = false;
          }
?>
<input type="hidden" name="foobar_post_nonce" id="foobar_post_nonce" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
<table id="table_foobar_per_post_page" class="form-table">
<tbody>
  <thead>
    <tr>
      <td colspan="2">
        <input class="radio rad_foobar_type" name="foobar_type" id="rad_foobar_type_default"
            <?php if ($foobar_type=="default") { echo 'checked="checked"'; } ?> title="Let the default <?php echo $foobar_name; ?> be shown" type="radio"
            value="default" tabindex="1" /><label for="rad_foobar_type_default">Show default <?php echo $foobar_name; ?></label>
        <input class="radio rad_foobar_type" name="foobar_type" id="rad_foobar_type_select"
            <?php if ($foobar_type=="select") { echo 'checked="checked"'; } ?> title="Select which <?php echo $foobar_name; ?> you want shown" type="radio"
            value="select" tabindex="2" /><label for="rad_foobar_type_select">Select <?php echo $foobar_name; ?></label>
        <input class="radio rad_foobar_type" name="foobar_type" id="rad_foobar_type_none"
            <?php if ($foobar_type=="none") { echo 'checked="checked"'; } ?> title="Don't show any <?php echo $foobar_name; ?>" type="radio"
            value="none" tabindex="2" /><label for="rad_foobar_type_none">Don't show a <?php echo $foobar_name; ?></label>
      </td>
      <td>
    </tr>
  </thead>
  <tbody>
    <tr class="foobar_type_row foobar_type_row_default<?php if ($foobar_type!="default") { echo " hidden"; } ?>">
      <td colspan="2">
      The default <?php echo $foobar_name; ?> will be shown on this <?php echo $post->post_type; ?>.<br />
      <?php if ($default_foobar && $default_foobar->ID > 0) {?>
      That means <strong><?php echo $default_foobar->post_title; ?></strong> will be shown. <a href="edit.php?post_type=foobar">Change the default now</a>.
      <?php } else { ?>
        <strong>NO Default <?php echo $foobar_name; ?> has been set! This means no  <?php echo $foobar_name; ?> will be shown.</strong> <a href="options-general.php?page=foobar">Set the default now</a>.
      <?php } ?>
      </td>
    </tr>
    <tr class="foobar_type_row foobar_type_row_select<?php if ($foobar_type!="select") { echo " hidden"; } ?>">
      <td colspan="2">
      Select which <?php echo $foobar_name; ?> will be shown on this <?php echo $post->post_type; ?> :
      <select name="foobar_select">
        <option value="0">--select--</option>
        <?php foreach( $foobars as $foobar ) {
          echo '<option '. ( $foobar_select == $foobar->ID ? ' selected="selected" ': '' ) .' value="'. $foobar->ID . '">'. $foobar->post_title . '</option>';
        } ?>
      </select>
      </td>
    </tr>
    <tr class="foobar_type_row foobar_type_row_none<?php if ($foobar_type!="none") { echo " hidden"; } ?>">
      <td colspan="2">
      A <?php echo $foobar_name; ?> will not be shown on this <?php echo $post->post_type; ?>. We promise!
      </td>
    </tr>
  </tbody>
</table>
        <?php
        }

        function render_social_profile_form($socials, $row_class = '', $colspan = '2') {
          $foobar_name = $this->get_foobar_name();
          $img_src_dir_base = $this->_plugin_dir . 'images/social/';
          $img_src_url_base = $this->_plugin_url . 'images/social/';
          $social_icons = WPPBUtils::get_files_by_ext('png', $img_src_dir_base);

           ?>
    <tr class="row_social_profiles <?php echo $row_class; ?>">
        <td colspan="<?php echo $colspan; ?>">
            <div class="social_icon_selector">
              <ul>
                <?php foreach($social_icons as $icon) {
                  $name = str_replace('-', ' ', str_replace('.png', '', basename($icon)) );
                  $short_url = str_replace( $img_src_url_base, '', $icon );
                  echo '<li><a class="lnk_social_select_icon" href="#" ><img border="0" data-src="' . $short_url . '" title="' . $name . '" src="' . $img_src_url_base . basename($icon) . '" /></a></li>';
                }?>
              </ul>
              <div class="clear"></div>
            </div>
            <input id="hdn_social_icon_base" type="hidden" value="<?php echo $img_src_url_base; ?>" />
            <p class="no_social_profiles<?php if ($socials !== false) { echo " hidden"; } ?>">
              No social profiles have been added to this <?php echo $foobar_name; ?> yet. Please click the button below to add a new social profile.
            </p>
            <table class="widefat social_list<?php if ($socials === false) { echo " hidden"; } ?>">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if (is_array($socials)) {
                    foreach ($socials as $index => $social) {
                      $social_img_icon = $social['icon'];
                      if ( !WPPBUtils::str_contains ( $social_img_icon, '://' ) ) {
                        $social_img_icon = $img_src_url_base . $social_img_icon;
                      }
                      ?>
                  <tr class="row_edit">
                      <td class="post-title page-title column-title">
                          <div class="row_content">
                              <strong class="element_social_name"><?php echo $social['name']; ?></strong>
                              <div class="social-row-actions">
                                  <span class="inline hide-if-no-js"><a href="#" class="editinline foobar_social_edit" title="Edit this item">Edit</a> | </span>
                                  <span class="trash"><a class="submitdelete foobar_social_delete" title="Delete this item" href="#">Delete</a></span>
                              </div>
                          </div>
                          <div class="hidden">
                              <input name="foobar[socials][<?php echo $index; ?>][name]" class="txt_social_name" type="text" value="<?php echo $social['name']; ?>" />
                              <p>
                                  <a href="#inline-edit-update" title="Update" class="button-primary save alignleft foobar_social_update">Update</a>
                                  <a style="margin-left:10px" href="#inline-edit-cancel" title="Cancel" class="button-secondary cancel alignleft foobar_social_cancel">Cancel</a>
                              </p>
                          </div>
                      </td>
                      <td>
                          <div class="row_content"><img class="element_social_icon" src="<?php echo $social_img_icon ?>" /></div>
                          <div class="hidden">
                              <input name="foobar[socials][<?php echo $index; ?>][icon]" class="txt_social_icon input_mid" type="text" value="<?php echo $social['icon']; ?>" />
                              <a href="#" class="social_icon_select"><img title="select an existing icon" border="0" src="<?php echo $this->_plugin_url . 'images/icon_select.png'; ?>" /></a>
                          </div>
                      </td>
                      <td>
                          <div class="row_content"><span class="element_social_url"><?php echo $social['url']; ?></span></div>
                          <div class="hidden">
                              <input name="foobar[socials][<?php echo $index; ?>][url]" class="txt_social_url input_mid" type="text" value="<?php echo $social['url']; ?>" />
                          </div>
                      </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>
            </table>
            <table class="hidden social_list_add">
                <tr class="row_edit">
                    <td class="post-title page-title column-title">
                        <div class="row_content">
                            <strong class="element_social_name"></strong>
                            <div class="social-row-actions">
                                <span class="inline hide-if-no-js"><a href="#" class="editinline foobar_social_edit" title="Edit this item">Edit</a> | </span>
                                <span class="trash"><a class="submitdelete foobar_social_delete" title="Delete this item" href="#">Delete</a></span>
                            </div>
                        </div>
                        <div class="hidden">
                            <input class="txt_social_name" type="text" value="" />
                            <p>
                                <a href="#inline-edit-update" title="Update" class="button-primary save alignleft foobar_social_update">Update</a>
                                <a style="margin-left:10px" href="#inline-edit-cancel" title="Cancel" class="button-secondary cancel alignleft foobar_social_cancel">Cancel</a>
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="row_content"><img class="element_social_icon" src="" /></div>
                        <div class="hidden">
                            <input class="txt_social_icon input_mid" type="text" value="" />
                            <a href="#" class="social_icon_select"><img title="select an existing icon" border="0" src="<?php echo $this->_plugin_url . 'images/icon_select.png'; ?>" /></a>
                        </div>
                    </td>
                    <td>
                        <div class="row_content"><span class="element_social_url"></span></div>
                        <div class="hidden">
                            <input class="txt_social_url input_mid" type="text" value="" />
                        </div>
                    </td>
                </tr>
            </table>
            <p>
              <a href="#add" title="Add" class="button-secondary save alignleft foobar_social_add">Add Social Profile</a>
            </p>
        </td>
    </tr>
            <?php
        }

        function render_foobar_debug_meta_box_content($post) {
          $data = $this->parse_shortcodes(get_post_meta($post->ID, 'foobar', true));
          echo '<strong>Foobar Data</strong><br /><br /><pre>';
          $dump = htmlentities( print_r($data, true) );
          echo $dump;

          echo '</pre><br /><br /><br /><strong>jQuery Output</strong><br /><br /><pre>';

          $options = get_option( $this->_plugin_name );

          echo htmlentities( FoobarJSGenerator::generate($data, $options, $this->_plugin_url) );

          echo '</pre>';

          echo get_option( 'foobar_show_preview' );
        }

        function parse_shortcodes(&$data) {
          
          if ($data === false) return false;

          //parse shortcodes for the messages
          if (is_array($data)) {
            if (array_key_exists("messages", $data) && is_array($data["messages"])) {
              foreach ($data["messages"] as $message) {
                $messages[] = do_shortcode($message);
              }

              $data["messages"] = $messages;
            }

            //parse shortcodes for the custom HTML
            if (array_key_exists("leftHtml", $data) && !empty($data["leftHtml"])) {
              $data["leftHtml"] = do_shortcode($data["leftHtml"]);
            }

            if (array_key_exists("rightHtml", $data) && !empty($data["rightHtml"])) {
              $data["rightHtml"] = do_shortcode($data["rightHtml"]);
            }
          }

          return $data;
        }

        function get_meta($data, $key, $default) {
          if (!is_array($data)) return $default;
          $value = array_key_exists($key, $data) ? $data[$key] : NULL;
          if ($value === NULL)
            return $default;

          return $value;
        }

        function render_foobar_options_meta_box_content($post) {
            $foobar_name = $this->get_foobar_name();
            $data = get_post_meta($post->ID, 'foobar', true);
            $img_src_url_base = $this->_plugin_url . 'images/';
            $backgroundColor = $this->get_meta($data, "backgroundColor", "#dd0000");
            $borderColor = $this->get_meta($data, "borderColor", "#ffffff");
            $borderSize = $this->get_meta($data, "borderSize", "3");
            $height = $this->get_meta($data, "height", "30");
            $collapsedButtonHeight = $this->get_meta($data, "collapsedButtonHeight", "30");
            $positioning = $this->get_meta($data, "positioning", "fixed");
            $display = $this->get_meta($data, "display", "expanded");
            $buttonTheme = $this->get_meta($data, "buttonTheme", "triangle-arrow");
            $navigationTheme = $this->get_meta($data, "navigationTheme", "none");
            $hideShadow = $this->get_meta($data, "hideShadow", "");
            $forceTransparent = $this->get_meta($data, "forceTransparent", "");
            ?>
<table class="form-table">
<tbody>
<tr>
  <td class="first-column">Background Color</td>
  <td>
    <input type="text" name="foobar[backgroundColor]" class="colors" size="10" value="<?php echo $backgroundColor; ?>" />
    <br />
    <small>The background color of the <?php echo $foobar_name; ?></small>
  </td>
  <td width="100px" class="first-column">Force Transparent</td>
  <td width="250px">
    <input type="checkbox" name="foobar[forceTransparent]" class="checkbox-toggle" 
      data-textvisible="true" data-textchecked="Yes" data-leftwidth="40px" data-textunchecked="No"
      data-rightwidth="40px" <?php if ($forceTransparent == 'on') { echo " checked=\"checked\" "; } ?> />
    <br />
    <small>Only use this if you are wanting to customize your <?php echo $foobar_name; ?> with a background image using custom CSS.</small>
  </td>
</tr>
<tr>
  <td class="first-column">Border</td>
  <td colspan="3">
    <input title="border color" type="text" name="foobar[borderColor]" class="colors" size="10" value="<?php echo $borderColor; ?>" />
    <input title="border thickness" size="5" name="foobar[borderSize]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="6" data-valueformat="{0}px" type="text" value="<?php echo $borderSize; ?>" />
    <br />
    <small>The color and thickness of the border below the <?php echo $foobar_name; ?></small>
  </td>
</tr>
<tr>
  <td class="first-column"><label for="chkHideShadow">Hide Shadow</label></td>
  <td colspan="3">
      <input class="checkbox-toggle" data-textvisible="true" data-textchecked="Hide" data-leftwidth="40px" data-textunchecked="Show"
             data-rightwidth="40px" type="checkbox" <?php if ($hideShadow == 'on') { echo " checked=\"checked\" "; } ?> id="chkHideShadow" name="foobar[hideShadow]" /><br />
      <small>If the <?php echo $foobar_name; ?> has a shadow or not</small>
  </td>
</tr>
<tr>
  <td class="first-column">Height</td>
  <td colspan="3">
    <input name="foobar[height]" size="8" data-slidewidth="250px" class="num-slider" data-start="10" data-end="1000" data-step="1" data-valueformat="{0}px" type="text" value="<?php echo $height; ?>" />
    <br /><small>The height of the <?php echo $foobar_name; ?> in pixels</small>
  </td>
</tr>
<tr>
  <td class="first-column">Collapsed Height</td>
  <td colspan="3">
    <input name="foobar[collapsedButtonHeight]" size="8" class="num-slider" data-start="10" data-end="90" data-step="1"  data-valueformat="{0}px" type="text" value="<?php echo $collapsedButtonHeight; ?>" />
    <br /><small>The height of the <?php echo $foobar_name; ?> in pixels, when collapsed</small>
  </td>
</tr>
<tr>
  <td class="first-column">Positioning</td>
  <td colspan="3">
    <input class="radio" name="foobar[positioning]" id="rad_position_fixed" <?php if ($positioning=="fixed") { echo 'checked="checked"'; } ?> type="radio" value="fixed" tabindex="1" /><label class="padding-right" for="rad_position_fixed">Top</label>
    <input class="radio" name="foobar[positioning]" id="rad_position_inline" <?php if ($positioning=="inline") { echo 'checked="checked"'; } ?>type="radio" value="inline" tabindex="2" /><label class="padding-right" for="rad_position_inline">Inline</label>
    <input class="radio" name="foobar[positioning]" id="rad_position_bottom" <?php if ($positioning=="bottom") { echo 'checked="checked"'; } ?>type="radio" value="bottom" tabindex="3" /><label for="rad_position_bottom">Bottom</label>    
    <br /><small>Top means the <?php echo $foobar_name; ?> is always fixed at the top of the page.<br />
    Inline means the <?php echo $foobar_name; ?> will scroll out of view when the page is scrolled.<br />
    Bottom means the <?php echo $foobar_name; ?> is always visible at the bottom of the page.
    </small>
  </td>
</tr>
<tr>
  <td class="first-column">Display</td>
  <td colspan="3">
    <input class="radio" name="foobar[display]" id="rad_display_expanded" <?php if ($display=="expanded") { echo 'checked="checked"'; } ?> title="The default. The bar will be expanded when the page loads" type="radio" value="expanded" tabindex="1" /><label class="padding-right" for="rad_display_expanded">Expanded</label>
    <input class="radio" name="foobar[display]" id="rad_display_collapsed" <?php if ($display=="collapsed") { echo 'checked="checked"'; } ?> title="The bar will be collapsed when the page loads" type="radio" value="collapsed" tabindex="2" /><label class="padding-right" for="rad_display_collapsed">Collapsed</label>
    <input class="radio" name="foobar[display]" id="rad_display_delayed" <?php if ($display=="delayed") { echo 'checked="checked"'; } ?> title="The bar will be collapsed and will expand after a delay" type="radio" value="delayed" tabindex="3" /><label class="padding-right" for="rad_display_delayed">Delayed</label>
    <input class="radio" name="foobar[display]" id="rad_display_onscroll" <?php if ($display=="onscroll") { echo 'checked="checked"'; } ?> title="The bar will be collapsed and will only expand after the page has scrolled, after a delay" type="radio" value="onscroll" tabindex="4" /><label for="rad_display_onscroll">On Scroll</label>
    <br />
    <small>The initial state of the bar when the page loads. If set to <strong>Delayed</strong> or <strong>On Scroll</strong> then set the delay under Advanced Options</small>
  </td>
</tr>
<tr>
  <td class="first-column">Button Theme</td>
  <td colspan="3">
    <div class="hidden">
    <input class="radio" name="foobar[buttonTheme]" id="rad_buttonTheme_default" <?php if ($buttonTheme=="triangle-arrow") { echo 'checked="checked"'; } ?> type="radio" value="triangle-arrow" tabindex="1" />
    <input class="radio" name="foobar[buttonTheme]" id="rad_buttonTheme_long" <?php if ($buttonTheme=="long-arrow") { echo 'checked="checked"'; } ?> type="radio" value="long-arrow" tabindex="2" />
    <input class="radio" name="foobar[buttonTheme]" id="rad_buttonTheme_white" <?php if ($buttonTheme=="small-white-arrow") { echo 'checked="checked"'; } ?> type="radio" value="small-white-arrow" tabindex="3" />
    <input class="radio" name="foobar[buttonTheme]" id="rad_buttonTheme_close" <?php if ($buttonTheme=="x-close") { echo 'checked="checked"'; } ?> type="radio" value="x-close" tabindex="4" />
    <input class="radio" name="foobar[buttonTheme]" id="rad_buttonTheme_xwhite" <?php if ($buttonTheme=="x-white") { echo 'checked="checked"'; } ?> type="radio" value="x-white" tabindex="5" />
    </div>
    <label class="button_theme_radio" for="rad_buttonTheme_default"><a <?php if ($buttonTheme=="triangle-arrow") { echo 'class="selected"'; } ?> href="#" title="Short"><img src="<?php echo $img_src_url_base; ?>/triangle-arrow.png" /></a></label>
    <label class="button_theme_radio" for="rad_buttonTheme_long"><a <?php if ($buttonTheme=="long-arrow") { echo 'class="selected"'; } ?> href="#" title="Long"><img src="<?php echo $img_src_url_base; ?>/long-arrow.png" /></a></label>
    <label class="button_theme_radio" for="rad_buttonTheme_white"><a <?php if ($buttonTheme=="small-white-arrow") { echo 'class="selected"'; } ?> href="#" title="Small White"><img src="<?php echo $img_src_url_base; ?>/small-white-arrow.png" /></a></label>
    <label class="button_theme_radio" for="rad_buttonTheme_close"><a <?php if ($buttonTheme=="x-close") { echo 'class="selected"'; } ?> href="#" title="Close X"><img src="<?php echo $img_src_url_base; ?>/x-close.png" /></a></label>
    <label class="button_theme_radio" for="rad_buttonTheme_xwhite"><a <?php if ($buttonTheme=="x-white") { echo 'class="selected"'; } ?> href="#" title="X White"><img src="<?php echo $img_src_url_base; ?>/x-white.png" /></a></label>
    <br />
    <small>TIP : You can set the <?php echo $foobar_name; ?> to close when it is collapsed, rather than toggle (via Advanced Options). Setting it to close will allow your visitors to remove it from the page, and should probably be used in conjunction with the cookie settings.</small>
  </td>
</tr>
<tr>
  <td class="first-column">Navigation Theme</td>
  <td colspan="3">
    <div class="hidden">
    <input class="radio" name="foobar[navigationTheme]" id="rad_navigationTheme_none" <?php if ($navigationTheme=="none") { echo 'checked="checked"'; } ?> type="radio" value="none" tabindex="1" />
    <input class="radio" name="foobar[navigationTheme]" id="rad_navigationTheme_default" <?php if ($navigationTheme=="triangle-arrow") { echo 'checked="checked"'; } ?> type="radio" value="triangle-arrow" tabindex="2" />
    <input class="radio" name="foobar[navigationTheme]" id="rad_navigationTheme_long" <?php if ($navigationTheme=="long-arrow") { echo 'checked="checked"'; } ?> type="radio" value="long-arrow" tabindex="3" />
    <input class="radio" name="foobar[navigationTheme]" id="rad_navigationTheme_white" <?php if ($navigationTheme=="small-white-arrow") { echo 'checked="checked"'; } ?> type="radio" value="small-white-arrow" tabindex="4" />
    <input class="radio" name="foobar[navigationTheme]" id="rad_navigationTheme_xwhite" <?php if ($navigationTheme=="x-white") { echo 'checked="checked"'; } ?> type="radio" value="x-white" tabindex="5" />
    </div>
    <label class="navigation_theme_radio" for="rad_navigationTheme_none"><a <?php if ($navigationTheme=="none") { echo 'class="selected"'; } ?> href="#" title="None"><img src="<?php echo $img_src_url_base; ?>/nav_theme_none.png" /></a></label>
    <label class="navigation_theme_radio" for="rad_navigationTheme_default"><a <?php if ($navigationTheme=="triangle-arrow") { echo 'class="selected"'; } ?> href="#" title="Short"><img src="<?php echo $img_src_url_base; ?>/triangle-arrow-nav.png" /></a></label>
    <label class="navigation_theme_radio" for="rad_navigationTheme_long"><a <?php if ($navigationTheme=="long-arrow") { echo 'class="selected"'; } ?> href="#" title="Long"><img src="<?php echo $img_src_url_base; ?>/long-arrow-nav.png" /></a></label>
    <label class="navigation_theme_radio" for="rad_navigationTheme_white"><a <?php if ($navigationTheme=="small-white-arrow") { echo 'class="selected"'; } ?> href="#" title="Small White"><img src="<?php echo $img_src_url_base; ?>/small-white-arrow-nav.png" /></a></label>
    <label class="navigation_theme_radio" for="rad_navigationTheme_xwhite"><a <?php if ($navigationTheme=="x-white") { echo 'class="selected"'; } ?> href="#" title="Small White Shadow"><img src="<?php echo $img_src_url_base; ?>/x-white-nav.png" /></a></label>
  </td>
</tr>
</table>
            <?php
        }

        function render_foobar_message_options_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $messagesDelay = $this->get_meta($data, "messagesDelay", "2");
          $messagesFadeDelay = $this->get_meta($data, "messagesFadeDelay", "500");
          $messagesScrollSpeed = $this->get_meta($data, "messagesScrollSpeed", "50");
          $messagesScrollDelay = $this->get_meta($data, "messagesScrollDelay", "2");
          $messagesScrollDirection = $this->get_meta($data, "messagesScrollDirection", "left");

          $enableRandom = $this->get_meta($data, "enableRandomMessage", "");
          $disableScrolling = $this->get_meta($data, "disableScrolling", "");
          //$enableNavigation = $this->get_meta($data, "enableNavigation", "");
          ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column">Messages Delay</td>
    <td>
      <input size="8" name="foobar[messagesDelay]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="20" data-step="1" data-snap="snap"
             type="text" value="<?php echo $messagesDelay; ?>" />
      <br />
      <small>The delay (in seconds) between switching the messages (if more than 1 message is supplied)</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Messages Fade Delay</td>
    <td>
      <input size="8" name="foobar[messagesFadeDelay]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="2000" data-step="100" data-snap="snap"
             type="text" value="<?php echo $messagesFadeDelay; ?>" />
      <br />
      <small>The time (in milliseconds) it takes to transition to the next message (if more than 1 message is supplied)</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Messages Scroll Speed</td>
    <td>
      <input size="8" name="foobar[messagesScrollSpeed]" class="num-slider" data-slidewidth="80px" data-start="10" data-end="200" data-step="10" data-snap="snap"
             type="text" value="<?php echo $messagesScrollSpeed; ?>" />
      <br />
      <small>The pixels per second to scroll extra length messages into view (if the message does not fit by default)</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Messages Scroll Delay</td>
    <td>
      <input size="8" name="foobar[messagesScrollDelay]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="10" data-step="1" data-snap="snap"
             type="text" value="<?php echo $messagesScrollDelay; ?>" />
      <br />
      <small>The delay (in seconds) between initially displaying a long message and the beginning of scrolling it</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column"><label for="chkEnableRandomMessage">Random Message Order</label></td>
    <td>
        <input class="checkbox-toggle" data-textvisible="true" data-textchecked="On"
               data-leftwidth="30px" data-textunchecked="Off" data-rightwidth="30px"
               type="checkbox" <?php if ($enableRandom == 'on') { echo " checked=\"checked\" "; } ?>
               id="chkEnableRandomMessage" name="foobar[enableRandomMessage]" /><br />
        <small>Randomize the order in which the messages are displayed</small>
    </td>
  </tr>
  <tr>
    <td class="first-column"><label for="chkDisableScrolling">Disable Message Scrolling</label></td>
    <td>
        <input class="checkbox-toggle" data-textvisible="true" data-textchecked="On"
               data-leftwidth="30px" data-textunchecked="Off" data-rightwidth="30px"
               type="checkbox" <?php if ($disableScrolling == 'on') { echo " checked=\"checked\" "; } ?>
               id="chkDisableScrolling" name="foobar[disableScrolling]" /><br />
        <small>Disable all message scrolling, even if the messages are too long.</small>
    </td>
  </tr>
<?php /*  <tr>
    <td class="first-column">Messages Scroll Direction</td>
    <td>
      <select name="foobar[messagesScrollDirection]" id="drop_messages_scroll_direction">
        <option <?php if ($messagesScrollDirection=="left") { echo 'selected="selected"'; } ?> value="left">Left</option>
        <option <?php if ($messagesScrollDirection=="right") { echo 'selected="selected"'; } ?> value="right">Right</option>
      </select>
      <br />
      <small>The direction in which long messages are scrolled</small>
    </td>
    <td>
  </tr> */ ?>
</tbody>
</table>
  <?php }

        function render_foobar_cookie_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $enable_cookie = $this->get_meta($data, "enableCookie", "");
          $cookie_duration = $this->get_meta($data, "cookieDuration", "20");
          $cookie_name = $this->get_meta($data, "cookieName", "foobar-state-".$post->ID);

          ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column"><label for="chkEnableCookies">Enabled</label></td>
    <td>
        <input class="checkbox-toggle" data-textvisible="true" data-textchecked="On"
               data-leftwidth="40px" data-textunchecked="Off" data-rightwidth="40px"
               type="checkbox" <?php if ($enable_cookie == 'on') { echo " checked=\"checked\" "; } ?>
               id="chkEnableCookies" name="foobar[enableCookie]" /><br />
        <small>Should the state of the bar be stored in a client side cookie?</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Name</td>
    <td>
      <input size="20" name="foobar[cookieName]" type="text" value="<?php echo $cookie_name; ?>" />
      <br />
      <small>The name of the cookie as it is stored on the client machine. Change this value if you want to force the <?php echo $foobar_name; ?> to show.</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Duration</td>
    <td>
      <input size="3" name="foobar[cookieDuration]" type="text" value="<?php echo $cookie_duration; ?>" /> days
      <br />
      <small>The number of days the client side cookie remains active</small>
    </td>
  </tr>
</tbody>
</table>
  <?php }

        function render_foobar_advanced_meta_box_content($post) { 
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $speed = $this->get_meta($data, "speed", "100");
          $displayDelay = $this->get_meta($data, "displayDelay", "0");
          $easing = $this->get_meta($data, "easing", "swing");
          $positionClose = $this->get_meta($data, "positionClose", "right");
          $enable_cookie = $this->get_meta($data, "enableCookie", "");
          $ignoreHtmlMarginTop = $this->get_meta($data, "ignoreHtmlMarginTop", "");
          $disablePushDown = $this->get_meta($data, "disablePushDown", "");
          $rtl = $this->get_meta($data, "rtl", "");
          $buttonTypeClose = $this->get_meta($data, "buttonTypeClose", "");
          ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column">Collapse Type</td>
    <td>
        <input type="checkbox" data-textvisible="true" data-textchecked="Close"
               data-leftwidth="40px" data-textunchecked="Toggle" data-rightwidth="40px"
               <?php if ($buttonTypeClose == 'on') { echo " checked=\"checked\" "; } ?>
               class="checkbox-toggle" name="foobar[buttonTypeClose]" /><br />
        <small>If set to closed, the <?php echo $foobar_name; ?> will be closed when collapsed and cannot be expanded again.</small>
    </td>
  </tr>  
  <tr>
    <td class="first-column">Speed</td>
    <td>
      <input size="10" name="foobar[speed]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="1000" data-step="100" data-snap="snap"  data-format="{0}px" type="text" value="<?php echo $speed; ?>" />
      <br />
      <small>This time (in milliseconds) of how quickly the <?php echo $foobar_name; ?> opens and collapses</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Delay</td>
    <td>
      <input size="10" name="foobar[displayDelay]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="30" data-step="1" data-snap="snap"  data-format="{0} seconds" type="text" value="<?php echo $displayDelay; ?>" />
      <br />
      <small>The time to wait (in seconds) before showing the <?php echo $foobar_name; ?>. Used in conjunction with the <strong>Delayed</strong> and <strong>On Scroll</strong> display options</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Easing</td>
    <td>
      <select name="foobar[easing]" id="drop_easing">
        <option <?php if ($easing=="swing") { echo 'selected="selected"'; } ?> value="swing">Normal</option>
        <option <?php if ($easing=="easeOutSine") { echo 'selected="selected"'; } ?> value="easeOutSine">Sine</option>
        <option <?php if ($easing=="easeOutElastic") { echo 'selected="selected"'; } ?> value="easeOutElastic">Elastic</option>
        <option <?php if ($easing=="easeOutBack") { echo 'selected="selected"'; } ?> value="easeOutBack">Back</option>
        <option <?php if ($easing=="easeOutBounce") { echo 'selected="selected"'; } ?> value="easeOutBounce">Bounce</option>
      </select>
      <br />
      <small>The type of animation used when expanding and collapsing the <?php echo $foobar_name; ?></small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Button Position</td>
    <td>
      <select name="foobar[positionClose]" id="drop_positionClose">
        <option <?php if ($positionClose=="left") { echo 'selected="selected"'; } ?> value="left">Left</option>
        <option <?php if ($positionClose=="right") { echo 'selected="selected"'; } ?> value="right">Right</option>
        <option <?php if ($positionClose=="hidden") { echo 'selected="selected"'; } ?> value="hidden">Hidden</option>
      </select><br />
      <small>The position of the close / open button</small>
    </td>
  </tr>
  <tr>
    <td class="first-column"><label for="chk">Ignore HTML Top Margin</label></td>
    <td>
        <input type="checkbox" data-textvisible="true" data-textchecked="Ignore"
               data-leftwidth="45px" data-textunchecked="Default" data-rightwidth="40px"
               <?php if ($ignoreHtmlMarginTop == 'on') { echo " checked=\"checked\" "; } ?>
               class="checkbox-toggle" name="foobar[ignoreHtmlMarginTop]" /><br />
        <small>Ignore any HTML elements (including the Admin Bar) that set the top margin of the page. Setting this to ignore will force the <?php echo $foobar_name; ?> to be placed at the top of the page.</small>
    </td>
  </tr>
  <tr>
    <td class="first-column"><label for="chk">Disable Push Page Down</label></td>
    <td>
        <input type="checkbox" data-textvisible="true" data-textchecked="On"
               data-leftwidth="40px" data-textunchecked="Off" data-rightwidth="40px"
               <?php if ($disablePushDown == 'on') { echo " checked=\"checked\" "; } ?>
               class="checkbox-toggle" name="foobar[disablePushDown]" /><br />
        <small>By default, a <?php echo $foobar_name; ?> that is fixed at the top of the page, pushes the page down when it opens. To disable this, set this to option to <strong>On</strong></small>
    </td>
  </tr>
  <tr>
    <td class="first-column"><label for="chk">Right to Left alignment</label></td>
    <td>
        <input type="checkbox" data-textvisible="true" data-textchecked="On"
               data-leftwidth="40px" data-textunchecked="Off" data-rightwidth="40px"
               <?php if ($rtl == 'on') { echo " checked=\"checked\" "; } ?>
               class="checkbox-toggle" name="foobar[rtl]" /><br />
        <small>Change the alignment of the <?php echo $foobar_name; ?> to be right to left. This also changes the scroll direction.</small>
    </td>
  </tr>
</table>
  <?php }

        function render_foobar_twitter_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $enable_twitter = $this->get_meta($data, "twitterEnabled", "");
          $twitterUser = $this->get_meta($data, "twitterUser", "");
          $twitterMaxTweets = $this->get_meta($data, "twitterMaxTweets", "5");
            ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column"><label for="chkEnableTwitter">Enable Twitter</label></td>
    <td>
        <input  data-textvisible="true" data-textchecked="Enabled" data-textunchecked="Disabled" data-leftwidth="60px" data-rightwidth="60px" class="checkbox-toggle" type="checkbox" <?php if ($enable_twitter=="on") { echo " checked=\"checked\" "; } ?> id="chkEnableTwitter" name="foobar[twitterEnabled]" /><br />
        <small>Do you want to enable Twitter ticker?</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Twitter User</td>
    <td>
      <input name="foobar[twitterUser]" type="text" value="<?php echo $twitterUser; ?>" />
      <br />
      <small>The Twitter user whose tweets you want to load</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Max Tweets</td>
    <td>
      <input name="foobar[twitterMaxTweets]" class="num-slider" data-slidewidth="80px" type="text" value="<?php echo $twitterMaxTweets; ?>" />
      <br />
      <small>The maximum number of tweets to display in your <?php echo $foobar_name; ?></small>
    </td>
    <td>
  </tr>
</table>
            <?php
        }

        function render_foobar_rss_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $enable_rss = $this->get_meta($data, "rssEnabled", "");
          $rssUrl = $this->get_meta($data, "rssUrl", "");
          $rssMaxResults = $this->get_meta($data, "rssMaxResults", "5");
          $rssLinkText = $this->get_meta($data, "rssLinkText", "Read More");
          $rssLinkTarget = $this->get_meta($data, "rssLinkTarget", "_blank");
            ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column"><label for="chkEnableRss">Enable RSS</label></td>
    <td>
        <input data-textvisible="true" data-textchecked="Enabled" data-textunchecked="Disabled" data-leftwidth="60px" data-rightwidth="60px" class="checkbox-toggle" type="checkbox" <?php if ($enable_rss=="on") { echo " checked=\"checked\" "; } ?> id="chkEnableRss" name="foobar[rssEnabled]" /><br />
        <small>Do you want to enable the RSS ticker?</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">RSS URL</td>
    <td>
      <input name="foobar[rssUrl]" size="50" type="text" value="<?php echo $rssUrl; ?>" />
      <br />
      <small>The URL to the RSS feed you want to load</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Max Results</td>
    <td>
      <input name="foobar[rssMaxResults]" class="num-slider" data-slidewidth="80px" type="text" value="<?php echo $rssMaxResults; ?>" />
      <br />
      <small>The maximum number of RSS feed results to display in your <?php echo $foobar_name; ?></small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Link Text</td>
    <td>
      <input name="foobar[rssLinkText]" type="text" value="<?php echo $rssLinkText; ?>" />
      <br />
      <small>The text displayed in the link to the article</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Link Target</td>
    <td>
      <input name="foobar[rssLinkTarget]" type="text" value="<?php echo $rssLinkTarget; ?>" />
      <br />
      <small>The target for the rss links (e.g. _blank)</small>
    </td>
    <td>
  </tr>
</table>
            <?php
        }

        function render_foobar_messages_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $messages = $this->get_meta($data, "messages", false);

          if ($messages === false) {
            echo "<p>No messaged have been added to this " . $foobar_name . " yet. Please click the button below to add a new message.</p>";
          }
          ?>
<table class="form-table widefat message_list" <?php if ($messages === false) { echo "style='display:none'"; } ?>>
  <tbody>
    <?php
    if (is_array($messages)) {
      foreach ($messages as $index => $message) { ?>
    <tr>
      <td class="dragHandle">&nbsp;</td>
      <td>
        <div class="row_content">
          <span class="element_message"><?php echo $message; ?></span>
          <div class="message-row-actions">
              <span class="inline hide-if-no-js"><a href="#" class="editinline foobar_message_edit" title="Edit this message">Edit</a> | </span>
              <span class="trash"><a class="submitdelete foobar_message_delete" title="Delete this message" href="#">Delete</a></span>
          </div>
        </div>
        <div class="hidden">
          <textarea name="foobar[messages][<?php echo $index; ?>]" class="txt_message"><?php echo $message; ?></textarea>
          <p>
              <a href="#inline-edit-update" title="Update" class="button-primary save alignleft foobar_message_update">Update</a>
              <a style="margin-left:10px" href="#inline-edit-cancel" title="Cancel" class="button-secondary cancel alignleft foobar_message_cancel">Cancel</a>
          </p>
        </div>
      </td>
    </tr>
    <?php
      }
    }
    ?>
  </tbody>
</table>
<p>
  <a href="#add" title="Add" class="button-secondary save alignleft foobar_message_add">Add New Message</a>
</p>
<table class="hidden message_list_add">
  <tr>
    <td class="dragHandle">&nbsp;</td>
    <td>
      <div class="row_content">
        <span class="element_message"></span>
        <div class="message-row-actions">
            <span class="inline hide-if-no-js"><a href="#" class="editinline foobar_message_edit" title="Edit this message">Edit</a> | </span>
            <span class="trash"><a class="submitdelete foobar_message_delete" title="Delete this message" href="#">Delete</a></span>
        </div>
      </div>
      <div class="hidden">
        <textarea class="txt_message"></textarea>
        <p>
            <a href="#inline-edit-update" title="Update" class="button-secondary save alignleft foobar_message_update">Update</a>
            <a style="margin-left:10px" href="#inline-edit-cancel" title="Cancel" class="button-secondary cancel alignleft foobar_message_cancel">Cancel</a>
        </p>
      </div>
    </td>
  </tr>
</table>
<br class="clear"/>
          <?php
        }

        function render_foobar_social_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $plural = WPPBUtils::pluralize($foobar_name);

          $data = get_post_meta($post->ID, 'foobar', true);
          $overrideSocial = $this->get_meta($data, "overrideSocial", "");
          $positionSocial = $this->get_meta($data, "positionSocial", "left");
          $socialText = $this->get_meta($data, "socialText", "Follow us:");
          
          $socialFontFamily = $this->get_meta($data, "socialFontFamily", "Verdana");
          $socialFontSize = $this->get_meta($data, "socialFontSize", "10");
          $socialFontColor = $this->get_meta($data, "socialFontColor", "#ffffff");
          $socialUseFontShadow = $this->get_meta($data, "socialUseFontShadow", "");
          $socialFontShadow = $this->get_meta($data, "socialFontShadow", "#888888");          

          $socials = $this->get_meta($data, "socials", false);

          $img_src_dir_base = $this->_plugin_dir . 'images/social/';
          $img_src_url_base = $this->_plugin_url . 'images/social/';
          $social_icons = WPPBUtils::get_files_by_ext('png', $img_src_dir_base);
            ?>
<table class="form-table">
    <tr>
      <td class="first-column">Social Area Position</td>
      <td colspan="3">
        <select name="foobar[positionSocial]" id="drop_positionSocial">
          <option <?php if ($positionSocial == "left") { echo 'selected="selected"'; } ?> value="left">Left</option>
          <option <?php if ($positionSocial == "right") { echo 'selected="selected"'; } ?> value="right">Right</option>
          <option <?php if ($positionSocial == "hidden") { echo 'selected="selected"'; } ?> value="hidden">Hidden</option>
        </select><br />
        <small>Where do you want your social profiles positioned within the <?php echo $foobar_name; ?>?</small>
      </td>
    </tr>
    <tr>
      <td class="first-column">Social Text</td>
      <td>
        <input name="foobar[socialText]" type="text" value="<?php echo $socialText; ?>" />
        <br />
        <small>The text displayed before the social profile icons</small>
      </td>
      <td class="first-column">Social Text Color</td>
      <td valign="top">
        <input type="text" name="foobar[socialFontColor]" class="colors" size="10" value="<?php echo $socialFontColor; ?>" />
      </td>
    </tr>
    <tr>
      <td class="first-column">Social Text Font</td>
      <td>
        <select name="foobar[socialFontFamily]" id="drop_socialFontFamily">
          <option <?php if ($socialFontFamily=="Arial") { echo 'selected="selected"'; } ?> value="Arial">Arial</option>
          <option <?php if ($socialFontFamily=="Verdana") { echo 'selected="selected"'; } ?> value="Verdana">Verdana</option>
          <option <?php if ($socialFontFamily=="Tahoma") { echo 'selected="selected"'; } ?> value="Tahoma">Tahoma</option>
          <option <?php if ($socialFontFamily=="Trebuchet MS") { echo 'selected="selected"'; } ?> value="Trebuchet MS">Trebuchet MS</option>
          <option <?php if ($socialFontFamily=="Georgia") { echo 'selected="selected"'; } ?> value="Georgia">Georgia</option>
          <option <?php if ($socialFontFamily=="Times New Roman") { echo 'selected="selected"'; } ?> value="Times New Roman">Times New Roman</option>
          <option <?php if ($socialFontFamily=="Lucida Console") { echo 'selected="selected"'; } ?> value="Lucida Console">Lucida Console</option>
          <option <?php if ($socialFontFamily=="Courier New") { echo 'selected="selected"'; } ?> value="Courier New">Courier New</option>
          <option <?php if ($socialFontFamily=="Century Gothic") { echo 'selected="selected"'; } ?> value="Century Gothic">Century Gothic</option>
          <option <?php if ($socialFontFamily=="MS Sans Serif") { echo 'selected="selected"'; } ?> value="MS Sans Serif">MS Sans Serif</option>
        </select>
      </td>
      <td class="first-column">Social Text Size</td>
      <td>
        <input size="8" name="foobar[socialFontSize]" class="num-slider" data-valueformat="{0}pt" data-slidewidth="80px" data-start="8" data-end="30" data-step="1" data-snap="snap"  data-format="{0}px" type="text" value="<?php echo $socialFontSize; ?>" />
      </td>      
    </tr>
    <tr>
      <td class="first-column">Social Text Shadow</td>
      <td>
        <input type="checkbox" data-textvisible="true" data-textchecked="Yes" data-textunchecked="No"
               <?php if ($socialUseFontShadow == "on") { echo " checked=\"checked\" "; } ?>
               data-leftwidth="40px" data-rightwidth="40px" class="checkbox-toggle"
               name="foobar[socialUseFontShadow]" />
      </td>
      <td class="first-column">Social Shadow Color</td>
      <td>
        <input type="text" name="foobar[socialFontShadow]" class="colors" size="10" value="<?php echo $socialFontShadow; ?>" />
      </td>
    </tr>
    <tr>
      <td class="first-column">
        <label for="chk_override_social">Override default social profiles</label>
      </td>
      <td colspan="3">
          <input  data-textvisible="true" data-textchecked="Override" data-textunchecked="Use Defaults" data-leftwidth="80px" data-rightwidth="60px" class="checkbox-toggle"
                 type="checkbox" <?php if ($overrideSocial) { echo " checked=\"checked\" "; } ?> id="chk_override_social" name="foobar[overrideSocial]" /><br />
          <small>
            You can choose to override or inherit the default social profiles, so you only need to set them up once for all your <?php echo $plural; ?>.
            You can setup the default social profiles in the <a href="options-general.php?page=<?php echo $this->_plugin_name; ?>"><?php echo $foobar_name; ?> Settings</a>.
          </small>
      </td>
    </tr>
    <?php
      if (!$overrideSocial) { $row_class = " hidden "; }
      $this->render_social_profile_form($socials ,$row_class, '4');
    ?>
</table>
            <?php
        }

        function render_foobar_publish_meta_box_content($post) {
          global $action;

          $post_type = $post->post_type;
          $post_type_object = get_post_type_object($post_type);
          $can_publish = current_user_can($post_type_object->cap->publish_posts);

          $foobar_name = $this->get_foobar_name();

          $data = get_post_meta($post->ID, 'foobar', true);
          $hidePreview = $this->get_meta($data, "hidePreview", "");
          
          $conditional_logic = $this->get_meta($data, "conditionalLogic", "");

          $default_foobar_id = $this->get_option('default_foobar_id');

            ?>
            <style>
              #edit-slug-box { display: none !important;}
            </style>
            <div class="submitbox" id="submitpost">
            <input type="hidden" name="foobar_nonce" id="foobar_nonce" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
            <div id="minor-publishing">
              <table class="form-table">
                  <tr>
                    <td class="first-column"><label for="chk_foobar_default"><?php echo __( 'Default' ); ?></label></td>
                    <td>
                      <input data-textvisible="true" data-textchecked="Yes" data-textunchecked="No" data-leftwidth="40px" data-rightwidth="40px" class="checkbox-toggle" type="checkbox" <?php if ($default_foobar_id == $post->ID) { echo " checked=\"checked\" "; } ?>
                         id="chk_foobar_default" name="foobar_is_default" /><br />
                      <small>If you set this <?php echo $foobar_name; ?> to be the default, it will be displayed on all posts and pages.</small>
                    </td>
                  </tr>
                  <tr>
                    <td class="first-column"><label for="chk_foobar_preview"><?php echo __( 'Hide Preview' ); ?></label></td>
                    <td>
                      <input data-textvisible="true" data-textchecked="Hide" data-textunchecked="Show" data-leftwidth="40px" data-rightwidth="40px" class="checkbox-toggle"
                         type="checkbox" <?php if ($hidePreview == "on") { echo " checked=\"checked\" "; } ?>
                         id="chk_foobar_preview" name="foobar[hidePreview]" /><br />
                      <small>Hide the live functioning preview of the <?php echo $foobar_name; ?> on this page.</small>
                    </td>
                  </tr>
                  <?php if ($this->get_option('foobar_enable_conditional_logic') == 'on') { ?>
                  <tr>
                    <td class="first-column"><label for="txt_foobar_advshow"><?php echo __( 'Conditional Logic' ); ?></label></td>
                    <td>
                      <input type="text" value="<?php echo $conditional_logic; ?>" id="txt_foobar_advshow" name="foobar[conditionalLogic]" /><br />
                      <small>Conditionally display the <?php echo $foobar_name; ?> based on <a href="http://codex.wordpress.org/Conditional_Tags" target="_blank">conditional tags</a></small>
                    </td>                    
                  </tr>
                  <?php } ?>
              </table>

            <?php // Hidden submit button early on so that the browser chooses the right button when form is submitted with Return key ?>
            <div style="display:none;">
              <input type="submit" name="save" id="save" class="button" value="<?php echo __( 'Save' ); ?>" />
            </div>

            <div class="clear"></div>
            </div>

            <div id="major-publishing-actions">
            <?php do_action('post_submitbox_start'); ?>
            <div id="delete-action">
            <?php
            if ( current_user_can( "delete_post", $post->ID ) && ( 'publish' == $post->post_status ) ) {
                $delete_text = __('Delete ' . $foobar_name);
            ?>
            <a class="submitdelete deletion" href="<?php echo get_delete_post_link($post->ID); ?>"><?php echo $delete_text; ?></a><?php
            } ?>
            </div>

            <div id="publishing-action">
              <!-- this textarea is only added to accommodate the after the deadline plugin (becuase it is written to badly!) -->
              <textarea style="display:none" id="content"></textarea>
              <img style="display:none" src="<?php echo esc_url( admin_url( 'images/wpspin_light.gif' ) ); ?>" class="ajax-loading" id="ajax-loading" alt="" />
            <?php
            if ( !in_array( $post->post_status, array('publish') ) || 0 == $post->ID ) {
                    if ( $can_publish ) : ?>
                            <input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e('Create') ?>" />
                            <input name="publish" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __( 'Create' ); ?>" />
                            
                    <?php endif;
            } else { ?>
                            <input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e('Update') ?>" />
                            <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php esc_attr_e('Update') ?>" />
            <?php
            } ?>
            </div>
            <div class="clear"></div>
            </div>
            </div>

            <?php
        }

        function render_foobar_custom_css_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $customCSS = $this->get_meta($data, "customCSS", "");
          ?>
<table id="table_styling" class="form-table">
<tbody>
  <thead>
    <tr>
      <td class="first-column">Custom CSS</td>
      <td>
        <textarea class="textarea_xlarge" name="foobar[customCSS]" type="text"><?php echo $customCSS; ?></textarea>
        <br />
        <small>Any custom CSS that you want to be included with this <?php echo $foobar_name; ?></small>
      </td>
    </tr>
  </tbody>
</table>
  <?php }

        function render_foobar_custom_js_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $customJS = $this->get_meta($data, "customJS", "");
          ?>
<table id="table_styling" class="form-table">
<tbody>
  <thead>
    <tr>
      <td class="first-column">Custom Javascript</td>
      <td>
        <textarea class="textarea_xlarge" name="foobar[customJS]" type="text"><?php echo $customJS; ?></textarea>
        <br />
        <small>Any custom javascript / jQuery that you want to be included with this <?php echo $foobar_name; ?></small>
      </td>
    </tr>
  </tbody>
</table>
  <?php }

        function render_foobar_styling_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);

          $styling = $this->get_meta($data, "styling", "normal");

          $messageClass = $this->get_meta($data, "messageClass", "");

          $fontFamily = $this->get_meta($data, "fontFamily", "Verdana");
          $fontSize = $this->get_meta($data, "fontSize", "10");
          $fontColor = $this->get_meta($data, "fontColor", "#ffffff");
          $useFontShadow = $this->get_meta($data, "useFontShadow", "");
          $fontShadow = $this->get_meta($data, "fontShadow", "#888888");
          
          $aFontFamily = $this->get_meta($data, "aFontFamily", "Verdana");
          $aFontSize = $this->get_meta($data, "aFontSize", "10");
          $aFontColor = $this->get_meta($data, "aFontColor", "#ffffaa");
          $aFontDecoration = $this->get_meta($data, "aFontDecoration", "none");
          $useAFontShadow = $this->get_meta($data, "useAFontShadow", "");
          $aFontShadow = $this->get_meta($data, "aFontShadow", "#888888");

          $aHoverFontColor = $this->get_meta($data, "aHoverFontColor", "#ffffaa");
          $aHoverFontDecoration = $this->get_meta($data, "aHoverFontDecoration", "underline");
          $useAHoverFontShadow = $this->get_meta($data, "useAHoverFontShadow", "");
          $aHoverFontShadow = $this->get_meta($data, "aHoverFontShadow", "#888888");

          if ( $post->post_status == 'auto-draft' ) {
            //we can set some defaults for a new foobar
            $useFontShadow = $useAFontShadow = $useAHoverFontShadow = "on";
          }

          ?>
<table id="table_styling" class="form-table">
<tbody>
  <thead>
    <tr>
      <td colspan="2">
        <input class="radio rad_styling" name="foobar[styling]" id="rad_styling_custom"
            <?php if ($styling=="normal") { echo 'checked="checked"'; } ?> title="" type="radio"
            value="normal" tabindex="2" /><label for="rad_styling_custom">Normal Styling</label>
        <input class="radio rad_styling" name="foobar[styling]" id="rad_styling_customCSS"
            <?php if ($styling=="custom") { echo 'checked="checked"'; } ?> title="" type="radio"
            value="custom" tabindex="3" /><label for="rad_styling_customCSS">Custom CSS</label>
        <input class="radio rad_styling" name="foobar[styling]" id="rad_styling_none"
            <?php if ($styling=="none") { echo 'checked="checked"'; } ?> title="" type="radio"
            value="none" tabindex="3" /><label for="rad_styling_none">None</label>
      </td>
      <td>
    </tr>
  </thead>
  <tbody>
    <tr class="styling_row styling_row_normal<?php if ($styling!="normal") { echo " hidden"; } ?>">
      <td colspan="2">
        <table class="widefat" style="width:690px !important">
          <thead>
            <tr>
              <th>&nbsp;</th>
              <th><strong>Text</strong></th>
              <th><strong>Link</strong></th>
              <th><strong>Link Hover</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="first-column">Color</td>
              <td>
                <input type="text" name="foobar[fontColor]" class="colors" size="10" value="<?php echo $fontColor; ?>" />
              </td>
              <td>
                <input type="text" name="foobar[aFontColor]" class="colors" size="10" value="<?php echo $aFontColor; ?>" />
              </td>
              <td>
                <input type="text" name="foobar[aHoverFontColor]" class="colors" size="10" value="<?php echo $aHoverFontColor; ?>" />
              </td>
            </tr>
            <tr>
              <td class="first-column">Font Family</td>
              <td>
                <select name="foobar[fontFamily]" id="drop_fontFamily">
                  <option <?php if ($fontFamily=="Arial") { echo 'selected="selected"'; } ?> value="Arial">Arial</option>
                  <option <?php if ($fontFamily=="Verdana") { echo 'selected="selected"'; } ?> value="Verdana">Verdana</option>
                  <option <?php if ($fontFamily=="Tahoma") { echo 'selected="selected"'; } ?> value="Tahoma">Tahoma</option>
                  <option <?php if ($fontFamily=="Trebuchet MS") { echo 'selected="selected"'; } ?> value="Trebuchet MS">Trebuchet MS</option>
                  <option <?php if ($fontFamily=="Georgia") { echo 'selected="selected"'; } ?> value="Georgia">Georgia</option>
                  <option <?php if ($fontFamily=="Times New Roman") { echo 'selected="selected"'; } ?> value="Times New Roman">Times New Roman</option>
                  <option <?php if ($fontFamily=="Lucida Console") { echo 'selected="selected"'; } ?> value="Lucida Console">Lucida Console</option>
                  <option <?php if ($fontFamily=="Courier New") { echo 'selected="selected"'; } ?> value="Courier New">Courier New</option>
                  <option <?php if ($fontFamily=="Century Gothic") { echo 'selected="selected"'; } ?> value="Century Gothic">Century Gothic</option>
                  <option <?php if ($fontFamily=="MS Sans Serif") { echo 'selected="selected"'; } ?> value="MS Sans Serif">MS Sans Serif</option>
                </select>
              </td>
              <td>
                <select name="foobar[aFontFamily]" id="drop_aFontFamily">
                  <option <?php if ($aFontFamily=="Arial") { echo 'selected="selected"'; } ?> value="Arial">Arial</option>
                  <option <?php if ($aFontFamily=="Verdana") { echo 'selected="selected"'; } ?> value="Verdana">Verdana</option>
                  <option <?php if ($aFontFamily=="Tahoma") { echo 'selected="selected"'; } ?> value="Tahoma">Tahoma</option>
                  <option <?php if ($aFontFamily=="Trebuchet MS") { echo 'selected="selected"'; } ?> value="Trebuchet MS">Trebuchet MS</option>
                  <option <?php if ($aFontFamily=="Georgia") { echo 'selected="selected"'; } ?> value="Georgia">Georgia</option>
                  <option <?php if ($aFontFamily=="Times New Roman") { echo 'selected="selected"'; } ?> value="Times New Roman">Times New Roman</option>
                  <option <?php if ($aFontFamily=="Lucida Console") { echo 'selected="selected"'; } ?> value="Lucida Console">Lucida Console</option>
                  <option <?php if ($aFontFamily=="Courier New") { echo 'selected="selected"'; } ?> value="Courier New">Courier New</option>
                  <option <?php if ($aFontFamily=="Century Gothic") { echo 'selected="selected"'; } ?> value="Century Gothic">Century Gothic</option>
                  <option <?php if ($aFontFamily=="MS Sans Serif") { echo 'selected="selected"'; } ?> value="MS Sans Serif">MS Sans Serif</option>
                </select>
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="first-column">Font Size</td>
              <td>
                <input size="8" name="foobar[fontSize]" class="num-slider" data-valueformat="{0}pt" data-slidewidth="80px" data-start="8" data-end="30" data-step="1" data-snap="snap"  data-format="{0}px" type="text" value="<?php echo $fontSize; ?>" />
              </td>
              <td>
                <input size="8" name="foobar[aFontSize]" class="num-slider" data-valueformat="{0}pt" data-slidewidth="80px" data-start="8" data-end="30" data-step="1" data-snap="snap"  data-format="{0}px" type="text" value="<?php echo $aFontSize; ?>" />
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="first-column">Use Shadow</td>
              <td>
                <input type="checkbox" data-textvisible="true" data-textchecked="Yes" data-textunchecked="No"
                       <?php if ($useFontShadow == "on") { echo " checked=\"checked\" "; } ?>
                       data-leftwidth="40px" data-rightwidth="40px" class="checkbox-toggle"
                       name="foobar[useFontShadow]" />
              </td>
              <td>
                <input type="checkbox" data-textvisible="true" data-textchecked="Yes" data-textunchecked="No"
                       <?php if ($useAFontShadow == "on") { echo " checked=\"checked\" "; } ?>
                       data-leftwidth="40px" data-rightwidth="40px" class="checkbox-toggle"
                       name="foobar[useAFontShadow]" />
              </td>
              <td>
                <input type="checkbox" data-textvisible="true" data-textchecked="Yes" data-textunchecked="No"
                       <?php if ($useAHoverFontShadow == "on") { echo " checked=\"checked\" "; } ?>
                       data-leftwidth="40px" data-rightwidth="40px" class="checkbox-toggle"
                       name="foobar[useAHoverFontShadow]" />
              </td>
            </tr>
            <tr>
              <td class="first-column">Shadow Color</td>
              <td>
                <input type="text" name="foobar[fontShadow]" class="colors" size="10" value="<?php echo $fontShadow; ?>" />
              </td>
              <td>
                <input type="text" name="foobar[aFontShadow]" class="colors" size="10" value="<?php echo $aFontShadow; ?>" />
              </td>
              <td>
                <input type="text" name="foobar[aHoverFontShadow]" class="colors" size="10" value="<?php echo $aHoverFontShadow; ?>" />
              </td>
            </tr>
            <tr>
              <td class="first-column">Decoration</td>
              <td>&nbsp;</td>
              <td>
                <select name="foobar[aFontDecoration]" id="drop_fontFamily">
                  <option <?php if ($aFontDecoration=="none") { echo 'selected="selected"'; } ?> value="none">none</option>
                  <option <?php if ($aFontDecoration=="underline") { echo 'selected="selected"'; } ?> value="underline">underline</option>
                </select>
              </td>
              <td>
                <select name="foobar[aHoverFontDecoration]" id="drop_fontFamily">
                  <option <?php if ($aHoverFontDecoration=="none") { echo 'selected="selected"'; } ?> value="none">none</option>
                  <option <?php if ($aHoverFontDecoration=="underline") { echo 'selected="selected"'; } ?> value="underline">underline</option>
                </select>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr class="styling_row styling_row_custom<?php if ($styling!="custom") { echo " hidden"; } ?>">
      <td class="first-column">CSS Class Name</td>
      <td>
        <input name="foobar[messageClass]" type="text" value="<?php echo $messageClass; ?>" />
        <br />
        <small>You can apply a CSS class name to the messages.</small>
      </td>
    </tr>
  </tbody>
</table>
  <?php }

        function render_foobar_widths_metabox_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);

          $leftWidth = $this->get_meta($data, "leftWidth", "*");
          $rightWidth = $this->get_meta($data, "rightWidth", "*");
          $centerWidth = $this->get_meta($data, "centerWidth", "50%");
          $buttonWidth = $this->get_meta($data, "buttonWidth", "80px");
?>
<table class="form-table">
<tbody>
  <tr>
    <td colspan="2">
      <p>Widths for the <?php echo $foobar_name; ?> can be set using px (pixels), % (percentages) or *. Setting a width to * will auto fill the width to the remaining space.</p>
    </td>
  </tr>
  <tr>
    <td class="first-column">Left Width</td>
    <td>
      <input name="foobar[leftWidth]" type="text" size="10" value="<?php echo $leftWidth; ?>" />
      <br />
      <small>Define a custom width for the left side of the <?php echo $foobar_name; ?>. (Default : *)</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Center Width</td>
    <td>
      <input name="foobar[centerWidth]" size="10" type="text" value="<?php echo $centerWidth; ?>" />
      <br />
      <small>Define a custom width for the center message area of the <?php echo $foobar_name; ?>. (Default : 50%)</small>
    </td>
  </tr>

  <tr>
    <td class="first-column">Right Width</td>
    <td>
      <input name="foobar[rightWidth]" size="10" type="text" value="<?php echo $rightWidth; ?>" />
      <br />
      <small>Define a custom width for the right side of the <?php echo $foobar_name; ?>. (Default : *)</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Button Width</td>
    <td>
      <input name="foobar[buttonWidth]" size="10" type="text" value="<?php echo $buttonWidth; ?>" />
      <br />
      <small>Define a custom width for the close button of the <?php echo $foobar_name; ?>. (Default : 80px)</small>
    </td>
  </tr>
</table>
            <?php
        }

        function render_foobar_custom_html_metabox_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $rightHtml = $this->get_meta($data, "rightHtml", "");
          $leftHtml = $this->get_meta($data, "leftHtml", "");

            ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column">Left HTML</td>
    <td>
      <textarea class="textarea_xlarge" name="foobar[leftHtml]"><?php echo $leftHtml; ?></textarea>
      <br />
      <small>Any custom HTML that you want to append to the left side of the <?php echo $foobar_name; ?></small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Right HTML</td>
    <td>
      <textarea class="textarea_xlarge" name="foobar[rightHtml]"><?php echo $rightHtml; ?></textarea>
      <br />
      <small>Any custom HTML that you want to append to the right side of the <?php echo $foobar_name; ?></small>
    </td>
    <td>
  </tr>
</table>
            <?php
        }

        function remove_foobar_row_actions( $actions ) {
            if ( get_post_type() == 'foobar' ) {
                unset( $actions['view'] );
                unset( $actions['inline hide-if-no-js'] );
                $actions['trash'] = str_replace( 'Move this item to the Trash', 'Delete this item', $actions['trash'] );
                $actions['trash'] = str_replace( __('Trash'), __('Delete'), $actions['trash'] );
            }
            return $actions;
        }

        function foobar_updated_messages($messages ) {
            global $post, $post_ID;

            $name = $this->get_foobar_name();
            
            $messages['foobar'] = array(
                0 => '', // Unused. Messages start at index 1.
                1 => __($name . ' updated'),
                2 => '', //not used
                3 => '', //not used
                4 => __($name . ' updated.'),
                /* translators: %s: date and time of the revision */
                5 => '', //not used
                6 => __($name . ' created'),
                7 => __($name . ' saved.'),
                8 => '', //not used
                9 => sprintf( __($name . ' scheduled for: <strong>%1$s</strong>'),
                // translators: Publish box date format, see http://php.net/date
                date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ) ),
                10 => __($name . ' draft updated')
            );

            return $messages;
        }

        function foobar_custom_columns($columns) {
          $columns = array(
            "cb" => "<input type=\"checkbox\" />",
            "title" => "Title",
            "foobar_default" => "Default",
            'foobar_color' => 'BG Color',
            'foobar_style' => 'Position',
            'foobar_type' => 'Display',
            'foobar_theme' => 'Button Theme'
          );

          return $columns;
        }

        function foobar_custom_column_content($column) {
          global $post;
          $columns = array('foobar_default', 'foobar_color', 'foobar_style', 'foobar_type', 'foobar_theme', 'foobar_priority');
          if ( in_array( $column, $columns ) ) {
            $data = get_post_meta($post->ID, 'foobar', true);
            $default_foobar_id = $this->get_option('default_foobar_id');
            switch ($column) {
              case 'foobar_default':
                if ($default_foobar_id == $post->ID) {
                  echo "<strong>YES</strong>";
                } else {
                  echo "no";
                }
                break;
              case 'foobar_color':
                $color = $data["backgroundColor"];
                echo '<span style="font-weight:bold;color:'.$color.'">' . $color . '</span>';
                break;
              case 'foobar_style':
                echo $data["positioning"];
                break;
              case 'foobar_type':
                echo $data["display"];
                break;
              case 'foobar_theme':
                echo $data["buttonTheme"];
                break;
              case 'foobar_priority':
                echo '1';
                break;
            }
          }
        }

        function frontend_init() {

          $references = $this->get_option( 'foobar_references', 'dynamic' );
          
          if ($references == 'inline') {
            $where = 'wp_head';
            
            if ( $this->get_option( 'foobar_scripts_in_footer' ) == 'on' ) { $where = 'wp_print_footer_scripts'; }
            
            add_action($where, array(&$this, 'inline_dynamic_js') );
            
            add_action('wp_print_styles', array(&$this, 'inline_dynamic_css') );
            
          } else if ($references != 'generated') {
            add_action( 'parse_request', array(&$this, 'frontend_dynamic_js_request') );
            add_action( 'parse_request', array(&$this, 'frontend_dynamic_css_request') );
          }
          
        }
        

        function frontend_has_foobar($post) {
          global $has_checked_for_foobar;
          global $has_foobar;
          global $G_current_foobar_data;

          if (!empty($has_checked_for_foobar)) return $has_foobar;

          //if we have disabled foobar, then show nothing!
          if ( $this->get_option('foobar_disabled') == 'on' ) {
            $has_checked_for_foobar = true;
            $has_foobar = false;
            return $has_foobar;
          }
          
          //if we have disabled foobar for mobile, then check
          if ( $this->get_option('foobar_disable_for_mobile') == 'on' && 
              $this->_mobile->is_mobile() === true ) {
            $has_checked_for_foobar = true;
            $has_foobar = false;
            return $has_foobar;
          }

          $post_id = 0;
          if (is_singular()) {
            $post_id = $post->ID;
          }
          $data = $this->get_foobar_data_for_post($post_id);
          if (!empty($data))  {
            $has_foobar = true;
            $G_current_foobar_data = $data;
          }
          
          $has_checked_for_foobar = true;
          
          return $has_foobar;
        }

        function frontend_css_enqueue() {
          global $post;

          if ( !$this->frontend_has_foobar($post) ) return;

          //enqueue foobar CSS
          $this->register_and_enqueue_css(FOOBAR_FILE_CSS);
          
          $references = $this->get_option( 'foobar_references', 'dynamic' );
          
          if ($references == 'dynamic') {
            //the dynamic CSS handle
            $handle = $this->_plugin_name . '-css-dynamic';

            //get the URL to our dynamic CSS
            $css_url = get_bloginfo( 'url' ) . '/?' . $handle . '=css&ver='. $this->current_plugin_version();

            //if we are looking at a specific post or page then append the post ID to the URL
            if (is_singular()) {
              $css_url .= '&post_id=' . $post->ID;
            }

            //register it!
            wp_register_style(
                    $handle = $handle,
                    $src = $css_url,
                    $deps = false,
                    $ver = '',
                    $in_footer = $infooter);

            //enqueue it!
            wp_enqueue_style($handle);
          } else if ($references == 'generated') {
            //enqueue the generated css file
            
            $data = $this->get_foobar_data_for_post();
            
            $static_file = $data['css_url'];
            
            $this->register_and_enqueue_css($static_file);
          }
        }

        function frontend_dynamic_css_request() {
          global $foobar_css;

          $handle = $this->_plugin_name . '-css-dynamic';

          if ( !empty( $_GET[$handle] ) && $_GET[$handle] == 'css' ) {
            
            //get custom CSS from the settings page
            $foobar_css = $this->get_option( 'custom_css' );

            $post_id = intval($_GET['post_id']);

            //get foobar data for the specific page or post (or the default)
            $data = $this->get_foobar_data_for_post($post_id);

            if ($data !== false && !empty($data["customCSS"])) {
              if (!empty($foobar_css)) {
                //add a newline if needed
                $foobar_css .= '

';
              }
              $foobar_css .= $data["customCSS"];
            }

            $css_file = $this->_plugin_dir . 'css/' . $this->_plugin_name . '.css.php';

            require $css_file;
            exit;
          }
        }

        function frontend_js_enqueue() {
          global $post;

          if ( !$this->frontend_has_foobar($post) ) return;

          $infooter = ($this->get_option( 'foobar_scripts_in_footer' ) === 'on');
          
          //enqueue foobar script
          $this->register_and_enqueue_js(
                  $file = FOOBAR_FILE_JS, 
                  $d = $this->get_foobar_js_depends(),
                  $v = false,
                  $f = $infooter);
          
          if ($this->get_option('foobar_encode_html') == 'on') {
            //enqueue the encoding script
            $this->register_and_enqueue_js('encoder.js');
          }

          //enqueue easing script only if needed
          if ($this->get_option('foobar_include_easing') == 'on') {
            $this->register_and_enqueue_js(
                    $file = 'jquery.easing.1.3.js',
                    $d = $this->get_foobar_js_depends(),
                    $v = false,
                    $f = $infooter);
          }

          $references = $this->get_option( 'foobar_references', 'dynamic' );
          
          if ($references == 'dynamic') {
            //enqueue dynamic script if not disabled
            
            //the dynamic JS handle
            $handle = $this->_plugin_name . '-js-dynamic';

            //get the URL to our dynamic JS
            $js_url = get_bloginfo( 'url' ) . '/?' . $handle . '=js&ver=' . $this->current_plugin_version();

            //if we are looking at a specific post or page then append the post ID to the URL
            if (is_singular()) {
              $js_url .= '&post_id=' . $post->ID;
            }

            //register it!
            wp_register_script(
                $handle = $handle,
                $src = $js_url,
                $deps = false,
                $ver = '',
                $in_footer = $infooter);

            //enqueue it!
            wp_enqueue_script($handle);
          } else if ($references == 'generated') {
            //enqueue the generated static js file
            
            $data = $this->get_foobar_data_for_post();
            
            $static_file = $data['js_url'];
            
            $this->register_and_enqueue_js(
                    $file = $static_file,
                    $d = null,
                    $v = false,
                    $f = $infooter);
          }
        }

        function frontend_dynamic_js_request() {
          global $foobar_js;

          $handle = $this->_plugin_name . '-js-dynamic';

          if ( !empty( $_GET[$handle] ) && $_GET[$handle] == 'js' ) {
            
            // get what page we are one and see what foobar has been setup to display on that page
            // if none, then check if there is a default foobar

            $post_id = (array_key_exists('post_id', $_GET) &&
                  is_numeric($_GET['post_id'])) ? intval($_GET['post_id']) : 0;

            $data = $this->parse_shortcodes($this->get_foobar_data_for_post($post_id));

            if ($data !== false) {
            
              $options = get_option( $this->_plugin_name );

              //generate the JS needed for the foobar
              $foobar_js = FoobarJSGenerator::generate($data, $options, $this->_plugin_url);

            } else {
              $foobar_js = "//No foobar to show";
            }

            $js_file = $this->_plugin_dir . 'js/' . $this->_plugin_name . '.js.php';

            require $js_file;
            exit;
          }
        }

        function get_foobar_data_for_post($post_id = 0) {
          global $G_current_foobar_data;
          global $post;

          //if we have already got the foobar then return it!
          if (isset($G_current_foobar_data)) {
            return $G_current_foobar_data;
          }
          
          //then try get the current post Id
          if ($post_id == 0) {
            if (is_singular()) {
              $post_id = $post->ID;
            }
          }

          //if we have a post ID then check if the post has a specific foobar
          if ($post_id > 0) {
            $foobar_type = get_post_meta($post_id, 'foobar_type', true);

            if ($foobar_type == "none") {
              $G_current_foobar_data = false;
              return $G_current_foobar_data; //dont show a foobar
            } else if ($foobar_type == "select") {
              //get the specific foobar for the page/post
              $foobar_select_id = intval(get_post_meta($post_id, 'foobar_select', true));

              if ($foobar_select_id > 0) {
                $G_current_foobar_data = get_post_meta($foobar_select_id, 'foobar', true);
                return $G_current_foobar_data;
              }
            }
          }

          //load the foobar via conditional rules or get the default
          $G_current_foobar_data = $this->load_foobar_data();
          return $G_current_foobar_data;

        }

        function load_foobar_data() {

          if ($this->get_option('foobar_enable_conditional_logic') == 'on') {

            //get the conditional foobar rules
            $foobar_conditional_rules = $this->get_transient('foobar_conditional_rules', 60*60*24, array(&$this, 'load_foobar_conditional_rules'));

            if (is_array($foobar_conditional_rules)) {
              //loop thru the conditional rules. If the evaluated condition is met then return the data for the foobar
              foreach ( $foobar_conditional_rules as $rule ) {
                //check the foobar has advanced display conditional tags
                $check_value = stripslashes( $rule["rule"] );
                $check_value = ( stristr( $check_value, "return" ) ) ? $check_value : "return (" . $check_value . ");";
                if ( eval($check_value) ) {
                  //this foobar's conditional rules met our requirements
                  return $rule["data"];
                }
              }

            }

          }

          //get the cached default foobar (store for 24 hours, or until another default is set)
          //$foobar_data = $this->get_default_foobar_data(); //uncomment to get every request!
          $foobar_data = $this->get_transient('default_foobar', 60*60*24, array(&$this, 'load_default_foobar_data'));

          return $foobar_data;

        }

        function load_foobar_conditional_rules() {
          //get all foobar and store a key-value pair of the foobar id, and the foobar conditional logic and it's data
          $args = array(
            'numberposts'     => -1,
            'orderby'         => 'post_date',
            'order'           => 'DESC',
            'post_type'       => 'foobar',
            'post_status'     => 'publish' );

          $foobar_array = $this->get_all_foobars();

          foreach ( $foobar_array as $foobar ) {
            //if we have conditional logic then store it
            $data = get_post_meta($foobar->ID, 'foobar', true);
            $rule = $this->get_meta($data, "conditionalLogic", '');
            if (!empty($rule)) {

              $rule_data = array("rule" => $rule, "data" => $data);

              $foobar_rules[] = $rule_data;
              
            }
          }

          return $foobar_rules;
        }

        function load_default_foobar_data() {
          return $this->get_foobar_data( $this->get_option('default_foobar_id') );
        }
        
        function get_foobar_data($foobar_id) {
          if ($foobar_id > 0) {
            $foobar = get_post($foobar_id);
            if ( is_null($foobar) || 
                 ($foobar && $foobar->post_status == 'trash') ) { return false; }

            return get_post_meta($foobar_id, 'foobar', true);
          }
          
          return false;
        }

        function inline_dynamic_js() {
          global $post;

          $include_js = false;

          $post_id = 0;

          if (is_admin()) {

            $post_id = (array_key_exists('post', $_GET) &&
                    is_numeric($_GET['post'])) ? intval($_GET['post']) : 0;

            if ( !empty( $_GET['action'] )
                    && $_GET['action'] == 'edit'
                    && $post_id > 0 ) {

              $data = $this->parse_shortcodes(get_post_meta($post_id, 'foobar', true));

              $include_js = $this->get_meta($data, "hidePreview", false) != 'on';

            }
          } else if ($this->get_option( 'foobar_references' ) == 'inline') {

            if ( !$this->frontend_has_foobar($post) ) return;

            if (is_singular()) {
              $post_id = $post->ID;
            }

            $data = $this->parse_shortcodes($this->get_foobar_data_for_post($post_id));

            $include_js = true;
            
          }

          if ($include_js === true) {

            $options = get_option( $this->_plugin_name );

            $foobar_js = FoobarJSGenerator::generate($data, $options, $this->_plugin_url);

            echo '<script type="text/javascript">' . $foobar_js . '</script>';

          }

        }

        function inline_dynamic_css() {

          global $post;

          $include_css = false;

          $post_id = 0;

          if (is_admin()) {

            $post_id = (array_key_exists('post', $_GET) &&
                    is_numeric($_GET['post'])) ? intval($_GET['post']) : 0;

            if ( !empty( $_GET['action'] )
                    && $_GET['action'] == 'edit'
                    && $post_id > 0 ) {

              $data = $this->parse_shortcodes(get_post_meta($post_id, 'foobar', true));

              $include_css = $this->get_meta($data, "hidePreview", false) != 'on';

            }
          } else if ($this->get_option( 'foobar_references' ) == 'inline') {

            if ( !$this->frontend_has_foobar($post) ) return;

            if (is_singular()) {
              $post_id = $post->ID;
            }

            $data = $this->parse_shortcodes($this->get_foobar_data_for_post($post_id));

            $include_css = true;

          }

          if ($include_css === true) {

            $customCss = $this->get_meta($data, "customCSS", false);

            //get custom CSS from the settings page and the foobar custom CSS
            $foobar_css = $this->get_option( 'custom_css' ) . '

            ' . $customCss;

            echo '<style type="text/css">' . $foobar_css . '</style>';
          }

        }

        function get_foobar_js_depends() {
          if ($this->get_option('foobar_exclude_jquery') != 'on') {
            return array('jquery');
          }

          return false;
        }

    }

    load_plugin('FoobarNotifications', 5);
    
    //register_activation_hook( __FILE__, array('FoobarNotifications', 'install') );
}

function foobar_admin_bar_bump_cb() { ?>
<style type="text/css">
	html { margin-top: 28px; }
	* html body { margin-top: 28px; }
</style>
<?php
}

?>