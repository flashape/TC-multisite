<?php
/*
Plugin Name: Foobar Notification Bars
Plugin URI: http://themergency.com/
Description: Show awesome looking notification bars on specific pages
Version: 1.0
Author: Brad Vincent
Author URI: http://themergency.com/
License: GPL2
*/

define('FOOBAR_FILE_CSS', 'jquery.foobar.1.4.css');
define('FOOBAR_FILE_JS', 'jquery.foobar.1.4.1.min.js');

if (!class_exists('FoobarNotifications')) {

    // Includes
    require_once "includes/WP_PluginBase.php";
    require_once "includes/foobar-js-generator.php";

    class FoobarNotifications extends WP_PluginBase {
	
        function admin_settings_init() {

          $foobar_name = $this->get_foobar_name();
        
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

          $this->admin_settings_add( array(
              'id'      => 'show_debug',
              'title'   => __( 'Show Debug Info' ),
              'desc'    => __( 'Shows debug information on the add/edit page.' ),
              'std'     => 'off',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'General'
          ) );

          $this->admin_settings_add( array(
              'id'      => 'foobar_include_easing',
              'title'   => __( 'Include Easing Script' ),
              'desc'    => __( 'Automatically include the jQuery easing script (jquery.easing.1.3.js) into the page.' ),
              'std'     => 'on',
              'type'    => 'checkbox',
              'section' => '',
              'tab'     => 'General'
          ) );

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

        }
        
        function init() {
          $this->_plugin_title = $this->get_foobar_name();

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

            // Add foobar custom post type settings menu
            //add_action('admin_menu', array(&$this, "admin_add_menus"));

            add_action('admin_footer', array(&$this, 'admin_footer_dynamic_js') );
          }

          $this->register_cpt_foobar();
        }

        //plugin version
        function current_plugin_version() {
            return '1.0';
        }

        // register foobar CPT CSS scripts
        function admin_cpt_foobar_css_enqueue() {
          $this->register_and_enqueue_css('admin-cpt-foobar.css');
          $this->register_and_enqueue_css('jquery.inputs.css');
          $this->register_and_enqueue_css('jquery.miniColors.css');
          $this->register_and_enqueue_css(FOOBAR_FILE_CSS);
        }

        // register foobar CPT JS scripts
        function admin_cpt_foobar_js_enqueue() {
          $this->register_and_enqueue_js('admin-cpt-foobar.js');
          $this->register_and_enqueue_js('jquery.inputs.js');
          $this->register_and_enqueue_js('jquery.miniColors.min.js');
          $this->register_and_enqueue_js('jquery.tablednd_0_5.js');
          $this->register_and_enqueue_js(FOOBAR_FILE_JS);

          if ($this->get_option('foobar_include_easing') == 'on') {
            $this->register_and_enqueue_js('jquery.easing.1.3.js');
          }
        }

        function get_foobar_name() {
            $whitelabel = $this->get_option( 'foobar_name' );
            if ( empty ( $whitelabel ) ) return 'FooBar';
            return $whitelabel;
        }
       
        function register_cpt_foobar() {
        
          $name = $this->get_foobar_name();
          $plural = WPPBUtils::pluralize($name);
        
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
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
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

          add_filter('page_row_actions', array(&$this, 'remove_foobar_row_actions') );

          add_action('add_meta_boxes', array(&$this, 'foobar_meta_boxes') );

          add_action('save_post', array(&$this, 'foobar_save_meta') );
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
                array( &$this, 'render_foobar_custom_html_content' ),
                'foobar',
                'normal',
                'default'
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

            add_meta_box(
                 'post_foobar_options'
                ,__( $name . ' Options')
                ,array( &$this, 'render_post_page_meta_box_content' )
                ,'post'
                ,'normal'
                ,'default'
            );

            add_meta_box(
                 'page_foobar_options'
                ,__( $name . ' Options')
                ,array( &$this, 'render_post_page_meta_box_content' )
                ,'page'
                ,'normal'
                ,'default'
            );
        }

        function foobar_save_meta($post_id) {

          // check autosave
          if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
              return $post_id;
          }

          // verify nonce
          if (array_key_exists('foobar_nonce', $_POST) &&
                  wp_verify_nonce($_POST['foobar_nonce'], plugin_basename(__FILE__))) {

            //get all the foobar data
            $data = $_POST['foobar'];

            //and save it
            update_post_meta($post_id, 'foobar', $data);

            //we are dealing with the foobar post type
            $is_default = $_POST['foobar_is_default'];

            $default_foobar_id = $this->get_option('default_foobar_id');

            if ($is_default == 'on') {
              //save the default foobar ID to options table
              $this->save_option( 'default_foobar_id', $post_id);
              
            } else if ($post_id == $default_foobar_id) {
              //we are setting the current default to not be the default anymore
              delete_option( 'default_foobar_id' );
            }

            //delete the transient, so the cache is cleared
            delete_transient( 'default_foobar' );

          } else if (array_key_exists('foobar_post_nonce', $_POST) &&
                  wp_verify_nonce($_POST['foobar_post_nonce'], plugin_basename(__FILE__))) {
            //we are dealing with a post or page
            $foobar_type = $_POST['foobar_type'];
            $foobar_select = $_POST['foobar_select'];
            update_post_meta($post_id, 'foobar_type', $foobar_type);
            update_post_meta($post_id, 'foobar_select', $foobar_select);
          }
        }

        function admin_settings_validate($input) {

          if (array_key_exists('default_foobar_id', $input)) {

            //clear the default foobar transient so the cache is cleared
            delete_transient( 'default_foobar' );
          }

          return $input;
        }

//        function is_foobar_enabled() {
//          return $this->get_option('foobar_enabled');
//        }

        function custom_admin_settings_render( $args = array() ) {
          extract( $args );

          $foobar_name = $this->get_foobar_name();

          if ($type == 'social_profiles') {
            $plural = WPPBUtils::pluralize($foobar_name);

            echo '</td></tr><tr valign="top"><td colspan="2">Setup your default social profiles below, so you can re-use them on all your ' .$plural . '.';

            $socials = $this->get_option($id);

            $this->render_social_profile_form($socials);
          } else if ( $type == 'default_foobar' ) {
            $foobars = get_posts( array('post_type' => 'foobar', 'numberposts' => -1) );
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

        function render_post_page_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $foobar_type = get_post_meta($post->ID, 'foobar_type', true);
          $foobar_select = get_post_meta($post->ID, 'foobar_select', true);
          if (empty ($foobar_type)) { $foobar_type = 'default'; }

          $foobars = get_posts( array('post_type' => 'foobar', 'numberposts' => -1) );
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

        function render_social_profile_form($socials, $row_class = '') {
          $foobar_name = $this->get_foobar_name();
          $img_src_dir_base = $this->_plugin_dir . 'images/social/';
          $img_src_url_base = $this->_plugin_url . 'images/social/';
          $social_icons = WPPBUtils::get_files_by_ext('png', $img_src_dir_base);

           ?>
    <tr class="row_social_profiles <?php echo $row_class; ?>">
        <td colspan="2">
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
          $value = array_key_exists($key, $data) ? $data[$key] : '';
          if (empty($value))
            return $default;

          return $value;
        }

        function render_foobar_options_meta_box_content($post) {
            $foobar_name = $this->get_foobar_name();
            $data = get_post_meta($post->ID, 'foobar', true);
            $img_src_url_base = $this->_plugin_url . 'css/images/';
            $backgroundColor = $this->get_meta($data, "backgroundColor", "#dd0000");
            $borderColor = $this->get_meta($data, "borderColor", "#ffffff");
            $borderSize = $this->get_meta($data, "borderSize", "3");
            $height = $this->get_meta($data, "height", "30");
            $collapsedButtonHeight = $this->get_meta($data, "collapsedButtonHeight", "30");
            $positioning = $this->get_meta($data, "positioning", "fixed");
            $display = $this->get_meta($data, "display", "expanded");
            $buttonTheme = $this->get_meta($data, "buttonTheme", "triangle-arrow");
            $hideShadow = $this->get_meta($data, "hideShadow", "");
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
</tr>
<tr>
  <td class="first-column">Border</td>
  <td>
    <input type="text" name="foobar[borderColor]" class="colors" size="10" value="<?php echo $borderColor; ?>" />
    <input name="foobar[borderSize]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="10" data-valueformat="{0}px" type="text" value="<?php echo $borderSize; ?>" />
    <br />
    <small>The color and thickness of the border below the <?php echo $foobar_name; ?></small>
  </td>
</tr>
<tr>
  <td class="first-column"><label for="chkHideShadow">Shadow</label></td>
  <td>
      <input class="checkbox-toggle" data-textvisible="true" data-textchecked="Hide" data-leftwidth="40px" data-textunchecked="Show"
             data-rightwidth="40px" type="checkbox" <?php if ($hideShadow == 'on') { echo " checked=\"checked\" "; } ?> id="chkHideShadow" name="foobar[hideShadow]" /><br />
      <small>If the <?php echo $foobar_name; ?> has a shadow or not</small>
  </td>
</tr>
<tr>
  <td class="first-column">Height</td>
  <td>
    <input name="foobar[height]" class="num-slider" data-start="10" data-end="300" data-step="1" data-valueformat="{0}px" type="text" value="<?php echo $height; ?>" />
    <br /><small>The height of the <?php echo $foobar_name; ?> in pixels</small>
  </td>
</tr>
<tr>
  <td class="first-column">Collapsed Height</td>
  <td>
    <input name="foobar[collapsedButtonHeight]" class="num-slider" data-start="10" data-end="100" data-step="1"  data-valueformat="{0}px" type="text" value="<?php echo $collapsedButtonHeight; ?>" />
    <br /><small>The height of the <?php echo $foobar_name; ?> in pixels, when collapsed</small>
  </td>
</tr>
<tr>
  <td class="first-column">Positioning</td>
  <td>
    <input class="radio" name="foobar[positioning]" id="rad_position_fixed" <?php if ($positioning=="fixed") { echo 'checked="checked"'; } ?> type="radio" value="fixed" tabindex="2" /><label for="rad_position_fixed">Fixed</label>
    <input class="radio" name="foobar[positioning]" id="rad_position_inline" <?php if ($positioning=="inline") { echo 'checked="checked"'; } ?>type="radio" value="inline" tabindex="1" /><label for="rad_position_inline">Inline</label>
    <br /><small>Fixed means the <?php echo $foobar_name; ?> is always visible at the top of the page.<br />
    Inline means the <?php echo $foobar_name; ?> will scroll out of view when the page is scrolled</small>
  </td>
</tr>
<tr>
  <td class="first-column">Display</td>
  <td>
    <input class="radio" name="foobar[display]" id="rad_display_expanded" <?php if ($display=="expanded") { echo 'checked="checked"'; } ?> title="The default. The bar will be expanded when the page loads" type="radio" value="expanded" tabindex="1" /><label for="rad_display_expanded">Expanded</label>
    <input class="radio" name="foobar[display]" id="rad_display_collapsed" <?php if ($display=="collapsed") { echo 'checked="checked"'; } ?> title="The bar will be collapsed when the page loads" type="radio" value="collapsed" tabindex="2" /><label for="rad_display_collapsed">Collapsed</label>
    <input class="radio" name="foobar[display]" id="rad_display_delayed" <?php if ($display=="delayed") { echo 'checked="checked"'; } ?> title="The bar will be collapsed and will expand after a delay" type="radio" value="delayed" tabindex="3" /><label for="rad_display_delayed">Delayed</label>
    <input class="radio" name="foobar[display]" id="rad_display_onscroll" <?php if ($display=="onscroll") { echo 'checked="checked"'; } ?> title="The bar will be collapsed and will only expand after the page has scrolled, after a delay" type="radio" value="onscroll" tabindex="4" /><label for="rad_display_onscroll">On Scroll</label>
    <br />
    <small>The initial state of the bar when the page loads</small>
  </td>
</tr>
<tr>
  <td class="first-column">Button Theme</td>
  <td>
    <div class="hidden">
    <input class="radio" name="foobar[buttonTheme]" id="rad_buttonTheme_default" <?php if ($buttonTheme=="triangle-arrow") { echo 'checked="checked"'; } ?> type="radio" value="triangle-arrow" tabindex="1" />
    <input class="radio" name="foobar[buttonTheme]" id="rad_buttonTheme_long" <?php if ($buttonTheme=="long-arrow") { echo 'checked="checked"'; } ?> type="radio" value="long-arrow" tabindex="2" />
    <input class="radio" name="foobar[buttonTheme]" id="rad_buttonTheme_white" <?php if ($buttonTheme=="small-white-arrow") { echo 'checked="checked"'; } ?> type="radio" value="small-white-arrow" tabindex="3" />
    </div>
    <label class="button_theme_radio" for="rad_buttonTheme_default"><a <?php if ($buttonTheme=="triangle-arrow") { echo 'class="selected"'; } ?> href="#" title="Short"><img src="<?php echo $img_src_url_base; ?>/triangle-arrow/foobar-open-arrow2.png" /></a></label>
    <label class="button_theme_radio" for="rad_buttonTheme_long"><a <?php if ($buttonTheme=="long-arrow") { echo 'class="selected"'; } ?> href="#" title="Long"><img src="<?php echo $img_src_url_base; ?>/long-arrow/foobar-open-arrow.png" /></a></label>
    <label class="button_theme_radio" for="rad_buttonTheme_white"><a <?php if ($buttonTheme=="small-white-arrow") { echo 'class="selected"'; } ?> href="#" title="Small White"><img src="<?php echo $img_src_url_base; ?>/small-white-arrow/foobar-open-arrow.png" /></a></label>
  </td>
</tr>
</table>
            <?php
        }

        function render_foobar_message_options_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $messagesDelay = $this->get_meta($data, "messagesDelay", "4");
          $messagesFadeDelay = $this->get_meta($data, "messagesFadeDelay", "500");
          $messagesScrollSpeed = $this->get_meta($data, "messagesScrollSpeed", "50");
          $messagesScrollDelay = $this->get_meta($data, "messagesScrollDelay", "2");
          $messagesScrollDirection = $this->get_meta($data, "messagesScrollDirection", "left");
          ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column">Messages Delay</td>
    <td>
      <input name="foobar[messagesDelay]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="20" data-step="1" data-snap="snap"
             type="text" value="<?php echo $messagesDelay; ?>" />
      <br />
      <small>The delay (in seconds) between switching the messages (if more than 1 message is supplied)</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Messages Fade Delay</td>
    <td>
      <input name="foobar[messagesFadeDelay]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="2000" data-step="100" data-snap="snap"
             type="text" value="<?php echo $messagesFadeDelay; ?>" />
      <br />
      <small>The time (in milliseconds) it takes to transition to the next message (if more than 1 message is supplied)</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Messages Scroll Speed</td>
    <td>
      <input name="foobar[messagesScrollSpeed]" class="num-slider" data-slidewidth="80px" data-start="10" data-end="200" data-step="10" data-snap="snap"
             type="text" value="<?php echo $messagesScrollSpeed; ?>" />
      <br />
      <small>The pixels per second to scroll extra length messages into view (if the message does not fit by default)</small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Messages Scroll Delay</td>
    <td>
      <input name="foobar[messagesScrollDelay]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="10" data-step="1" data-snap="snap"
             type="text" value="<?php echo $messagesScrollDelay; ?>" />
      <br />
      <small>The delay (in seconds) between initially displaying a long message and the beginning of scrolling it</small>
    </td>
    <td>
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

        function render_foobar_advanced_meta_box_content($post) { 
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $speed = $this->get_meta($data, "speed", "100");
          $displayDelay = $this->get_meta($data, "displayDelay", "0");
          $easing = $this->get_meta($data, "easing", "swing");
          $positionClose = $this->get_meta($data, "positionClose", "right");
          $enable_cookie = $this->get_meta($data, "enableCookie", "");
          ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column">Speed</td>
    <td>
      <input name="foobar[speed]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="1000" data-step="100" data-snap="snap"  data-format="{0}px" type="text" value="<?php echo $speed; ?>" />
      <br />
      <small>This time (in milliseconds) of how quickly the <?php echo $foobar_name; ?> opens and collapses</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Delay</td>
    <td>
      <input name="foobar[displayDelay]" class="num-slider" data-slidewidth="80px" data-start="0" data-end="30" data-step="1" data-snap="snap"  data-format="{0} seconds" type="text" value="<?php echo $displayDelay; ?>" />
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
    <td class="first-column"><label for="chkEnableCookies">Enable Cookies</label></td>
    <td>
        <input class="checkbox-toggle" data-textvisible="true" data-textchecked="Enabled" data-leftwidth="60px" data-textunchecked="Disabled" data-rightwidth="50px" type="checkbox" <?php if ($enable_cookie == 'on') { echo " checked=\"checked\" "; } ?> id="chkEnableCookies" name="foobar[enableCookie]" /><br />
        <small>Should the state of the bar be stored in a client side cookie</small>
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
          $rssGoogleAPIKey = $this->get_meta($data, "rssGoogleAPIKey", "");
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
    <td class="first-column">Google API Key</td>
    <td>
      <input name="foobar[rssGoogleAPIKey]" size="50" type="text" value="<?php echo $rssGoogleAPIKey; ?>" />
      <br />
      <small>Your Google API key. The API key is needed in order to pull RSS feed results. <a href="http://code.google.com/apis/loader/signup.html" target="_blank">Sign up for a free Google API key</a></small>
    </td>
    <td>
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

          $socials = $this->get_meta($data, "socials", false);

          $img_src_dir_base = $this->_plugin_dir . 'images/social/';
          $img_src_url_base = $this->_plugin_url . 'images/social/';
          $social_icons = WPPBUtils::get_files_by_ext('png', $img_src_dir_base);
            ?>
<table class="form-table">
    <tr>
      <td class="first-column">Social Area Position</td>
      <td>
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
    <tr>
      <td class="first-column">
        <label for="chk_override_social">Override default social profiles</label>
      </td>
      <td>
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
      $this->render_social_profile_form($socials ,$row_class);
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

          $default_foobar_id = $this->get_option('default_foobar_id');

            ?>
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
                    <td class="first-column"><label for="chk_foobar_preview"><?php echo __( 'Preview' ); ?></label></td>
                    <td>
                      <input data-textvisible="true" data-textchecked="Hide" data-textunchecked="Show" data-leftwidth="40px" data-rightwidth="40px" class="checkbox-toggle"
                         type="checkbox" <?php if ($hidePreview == "on") { echo " checked=\"checked\" "; } ?>
                         id="chk_foobar_preview" name="foobar[hidePreview]" /><br />
                      <small>Show a live functioning preview of the <?php echo $foobar_name; ?> on this page.</small>
                    </td>
                  </tr>
              </table>

            <?php // Hidden submit button early on so that the browser chooses the right button when form is submitted with Return key ?>
            <div style="display:none;">
            <?php submit_button( __( 'Save' ), 'button', 'save' ); ?>
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
            <img src="<?php echo esc_url( admin_url( 'images/wpspin_light.gif' ) ); ?>" class="ajax-loading" id="ajax-loading" alt="" />
            <?php
            if ( !in_array( $post->post_status, array('publish') ) || 0 == $post->ID ) {
                    if ( $can_publish ) : ?>
                            <input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e('Create') ?>" />
                            <?php submit_button( __( 'Create' ), 'primary', 'publish', false, array( 'tabindex' => '5', 'accesskey' => 'c' ) ); ?>
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

        function render_foobar_styling_meta_box_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);

          $styling = $this->get_meta($data, "styling", "normal");

          $messageClass = $this->get_meta($data, "messageClass", "");
          $customCSS = $this->get_meta($data, "customCSS", "");

          $fontFamily = $this->get_meta($data, "fontFamily", "Verdana");
          $fontSize = $this->get_meta($data, "fontSize", "12");
          $fontColor = $this->get_meta($data, "fontColor", "#ffffff");
          $useFontShadow = $this->get_meta($data, "useFontShadow", "");
          $fontShadow = $this->get_meta($data, "fontShadow", "#888888");
          
          $aFontFamily = $this->get_meta($data, "aFontFamily", "Verdana");
          $aFontSize = $this->get_meta($data, "aFontSize", "12");
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
                <input name="foobar[fontSize]" class="num-slider" data-valueformat="{0}pt" data-slidewidth="80px" data-start="8" data-end="30" data-step="1" data-snap="snap"  data-format="{0}px" type="text" value="<?php echo $fontSize; ?>" />
              </td>
              <td>
                <input name="foobar[aFontSize]" class="num-slider" data-valueformat="{0}pt" data-slidewidth="80px" data-start="8" data-end="30" data-step="1" data-snap="snap"  data-format="{0}px" type="text" value="<?php echo $aFontSize; ?>" />
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
    <tr class="styling_row styling_row_custom<?php if ($styling!="custom") { echo " hidden"; } ?>">
      <td class="first-column">Custom CSS</td>
      <td>
        <textarea class="textarea_large" name="foobar[customCSS]" type="text"><?php echo $customCSS; ?></textarea>
        <br />
        <small>Any custom CSS that you want to be included</small>
      </td>
    </tr>
  </tbody>
</table>
  <?php }

        function render_foobar_custom_html_content($post) {
          $foobar_name = $this->get_foobar_name();
          $data = get_post_meta($post->ID, 'foobar', true);
          $rightHtml = $this->get_meta($data, "rightHtml", "");
          $rightWidth = $this->get_meta($data, "rightWidth", "");
          $leftHtml = $this->get_meta($data, "leftHtml", "");
          $leftWidth = $this->get_meta($data, "leftWidth", "");
            ?>
<table class="form-table">
<tbody>
  <tr>
    <td class="first-column">Left HTML</td>
    <td>
      <textarea class="textarea_large" name="foobar[leftHtml]"><?php echo $leftHtml; ?></textarea>
      <br />
      <small>Any custom HTML that you want to append to the left side of the <?php echo $foobar_name; ?></small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Left Width</td>
    <td>
      <input name="foobar[leftWidth]" class="num-slider" data-valueformat="{0}px" data-slidewidth="180px" data-start="0" data-end="1000" data-step="5" data-format="{0}px" type="text" value="<?php echo $leftWidth; ?>" />
      <br />
      <small>Define a custom width (in pixels) for the left side of the <?php echo $foobar_name; ?>. Leave it at zero to use the default width.</small>
    </td>
  </tr>
  <tr>
    <td class="first-column">Right HTML</td>
    <td>
      <textarea class="textarea_large" name="foobar[rightHtml]"><?php echo $rightHtml; ?></textarea>
      <br />
      <small>Any custom HTML that you want to append to the right side of the <?php echo $foobar_name; ?></small>
    </td>
    <td>
  </tr>
  <tr>
    <td class="first-column">Right Width</td>
    <td>
      <input name="foobar[rightWidth]" class="num-slider" data-valueformat="{0}px" data-slidewidth="180px" data-start="0" data-end="1000" data-step="5" data-format="{0}px" type="text" value="<?php echo $rightWidth; ?>" />
      <br />
      <small>Define a custom width (in pixels) for the right side of the <?php echo $foobar_name; ?>. Leave it at zero to use the default width.</small>
    </td>
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
                1 => __($name . ' updated.'),
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
          add_action( 'parse_request', array(&$this, 'frontend_dynamic_css_request') );
          add_action( 'parse_request', array(&$this, 'frontend_dynamic_js_request') );

//          add_action( 'wp_head', array(&$this, 'frontend_adminbar_css') );
        }

        function frontend_adminbar_css() {
          global $post;

          //only add this custom CSS if the admin bar is showing
          if (function_exists('is_admin_bar_showing') && is_admin_bar_showing() ) {

            if ( !$this->frontend_has_foobar($post) ) return;

            if (is_singular()) {
              $post_id = $post->ID;
            }

            $data = $this->get_foobar_data_for_post($post_id);

            $height = 28; //default admin bar height

            if ($data !== false && !empty($data["height"])) {
              $height = $height + intval($data["height"]);
            }

            echo '<style type="text/css">html { margin-top: '.$height.'px !important; }* html body { margin-top: '.$height.'px !important; }</style>';

          }
        }

        function frontend_has_foobar($post) {
          global $has_checked_for_foobar;
          global $has_foobar;

          if (!empty($has_checked_for_foobar)) return $has_foobar;

          $post_id = 0;
          if (is_singular()) {
            $post_id = $post->ID;
          }
          $data = $this->get_foobar_data_for_post($post_id);
          if (empty($data)) $data = false;

          $has_foobar = ($data !== false);
          
          $has_checked_for_foobar = true;
          
          return $has_foobar;
        }

        function frontend_css_enqueue() {
          global $post;

          if ( !$this->frontend_has_foobar($post) ) return;

          //enqueue foobar CSS
          $this->register_and_enqueue_css(FOOBAR_FILE_CSS);
          
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
                  $ver = '' );

          //enqueue it!
          wp_enqueue_style($handle);
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

          //make sure jQuery is loaded
          //wp_enqueue_script( 'jquery' );

          //enqueue foobar script
          $this->register_and_enqueue_js(FOOBAR_FILE_JS, array('jquery'));

          //enqueue easing script only if needed
          if ($this->get_option('foobar_include_easing') == 'on') {
            $this->register_and_enqueue_js('jquery.easing.1.3.js');
          }

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
              $ver = '' );

          //enqueue it!
          wp_enqueue_script($handle);
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

        function get_foobar_data_for_post($post_id) {
          //if we have a post ID then check if the post has a specific foobar
          if ($post_id > 0) {
            $foobar_type = get_post_meta($post_id, 'foobar_type', true);

            if ($foobar_type == "none") {
              return false; //dont show a foobar
            } else if ($foobar_type == "select") {
              //get the specific foobar for the page/post
              $foobar_select_id = intval(get_post_meta($post_id, 'foobar_select', true));

              if ($foobar_select_id > 0) {
                return get_post_meta($foobar_select_id, 'foobar', true);
              }
            }
          }

          //get the cached default foobar (store for 24 hours, or until another default is set)
          //$foobar_data = $this->get_default_foobar_data();
          $foobar_data = $this->get_transient('default_foobar', 60*60*24, array(&$this, 'get_default_foobar_data'));

          return $foobar_data;
        }

        function get_default_foobar_data() {
          $default_foobar_id = $this->get_option('default_foobar_id');

          if ($default_foobar_id > 0) {

            //load the foobar and make sure it exists and is not trashed
            $default_foobar = get_post($default_foobar_id);
            if ($default_foobar && $default_foobar->post_status == "trash") {
              return false;
            }
            
            return get_post_meta($default_foobar_id, 'foobar', true);
          }

          return false;
        }

        function admin_footer_dynamic_js() {

          $post_id = (array_key_exists('post', $_GET) &&
                  is_numeric($_GET['post'])) ? intval($_GET['post']) : 0;

          if ( !empty( $_GET['action'] )
                  && $_GET['action'] == 'edit'
                  && $post_id > 0 ) {

            $data = $this->parse_shortcodes(get_post_meta($post_id, 'foobar', true));
            $hidePreview = $this->get_meta($data, "hidePreview", false);

            if ($hidePreview != 'on') {
              $options = get_option( $this->_plugin_name );

              $foobar_admin_js = FoobarJSGenerator::generate($data, $options, $this->_plugin_url);

              echo '<script type="text/javascript">' . $foobar_admin_js . '</script>';
            }
          }

        }

    }

    load_plugin('FoobarNotifications', 5);
}

function foobar_admin_bar_bump_cb() { ?>
<style type="text/css">
	html { margin-top: 28px; }
	* html body { margin-top: 28px; }
</style>
<?php
}

?>