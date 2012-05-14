<?php
/*
WP PluginBase
A simple base class for WordPress plugins. This class makes it really easy and straight forward to create useful plugins.
Simply inherit from WP_Pluginbase and override the methods of your choice.
Version: 1
Author: Brad Vincent
Author URI: http://themergency.com/
License: GPL2

TODO:

extract all overridable functions out into another file somehow

*/

if (!class_exists('WP_PluginBase_v1_5')) {

    abstract class WP_PluginBase_v1_5 {
        protected $_file;                 //the filename of the plugin
        protected $_plugin_dir;           //the folder path of the plugin
        protected $_plugin_dir_name;      //the folder name of the plugin
        protected $_plugin_url;           //the plugin url
        protected $_plugin_name;          //the name of the plugin (derived from the file)
        protected $_plugin_title;	//the friendly title of the plugin
        protected $_plugin_settings_summary;	//the summary html that is displayed on the default settings page
        private $_default_js_exists;    //if the default plugin js file exists
        private $_default_css_exists;   //if the default plugin css file exists
        private $_settings = array();           //the plugin settings array
        private $_settings_sections = array();	//the plugin sections array
        private $_settings_section_keys = array(); //the uniqie section keys used when tabs are included
        private $_settings_tabs = array();	//the plugin tabs array

        /* overridable variables */
        protected $_has_settings = true;     //does the plugin have options?
        protected $_when_to_load_default_js = 2;	//only load the default js on the settings page
        protected $_when_to_load_default_css = 2;	//only load the default css on the settings page
        /* 
         * 1 = load in admin
         * 2 = load on admin settings page
         * 4 = load on front
         * 8 = load on front page
         */
        
        protected $_load_dynamic_css = true;
        protected $_load_dynamic_js = true;
        
        protected $_admin_errors = false;
        
        protected $_mobile = false;

        //PHP 4 constructor
        function WP_PluginBase() {
            $this->__construct();
        }

        /*
         * Constructor used to set some initial vars.
         * If the subclass makes use of a constructor, make sure the subclass calls parent::__construct()
         */
        function __construct() {
        
            //check we are using php 5
            $this->check_php_version('5.0.0');

            //use reflection to get the filename of the subclass that is inheriting from WP_PluginBase
            $reflector = new ReflectionObject($this);
            $this->_file = $reflector->getFilename();
            $this->_plugin_dir = dirname($this->_file) . '/';
            $this->_plugin_dir_name = plugin_basename($this->_plugin_dir);
            $this->_plugin_url = trailingslashit(plugins_url('', $this->_file));
            
            //load any plugin base deps
            $this->load_dependancies();
            
            //get the plugin name from the filename. we assume the name of the plugin is the same as the file
            $name_parts = explode("/", plugin_basename( $this->_file ));
            $this->_plugin_name = WPPBUtils::to_key($name_parts[0]);
            $this->_plugin_title = WPPBUtils::to_title($name_parts[0]);
            $this->init();
        }
        
        //load dependancies        
        function load_dependancies() {
          include_once( $this->_plugin_dir . 'includes/WPPBUtils.php' );          
          include_once( $this->_plugin_dir . 'includes/mobile.php' );
          
          if (class_exists('WPPBMobile')) {
            $this->_mobile = new WPPBMobile();
          }
        }

        // check the version of PHP running on the server
        function check_php_version($ver) {
            $php_version = phpversion();
            if (version_compare($php_version, $ver) < 0) {
                throw new Exception("This plugin requires at least version $ver of PHP. You are running an older version ($php_version). Please upgrade!");
            }
        }

        // check the version of WP running
        function check_wp_version($ver) {
            global $wp_version;
            if (version_compare($wp_version, $ver) < 0) {
                throw new Exception("This plugin requires at least version $ver of WordPress. You are running an older version ($php_version). Please upgrade!");
            }
        }

        //plugin version
        function current_plugin_version() {
            return '0.0.1';
        }

        // initialize the plugin here!
        function init() {
            //set some default hooks for the WP admin
            if (is_admin()) {
                // Dashboard stuff
                add_action("wp_dashboard_setup", array(&$this, "admin_dashboard") );

                // Register admin JS Scripts
                add_action('admin_init', array(&$this, "admin_js_register"));

                // Register admin CSS Stylesheets
                add_action('admin_init', array(&$this, "admin_css_register"));

                // Register options for the plugin
                add_action('admin_init', array(&$this, "admin_settings_init"));

                // Render CSS to the admin pages
                add_action('admin_print_styles', array(&$this, "admin_css_enqueue") );

                // Render JS to the admin pages
                add_action('admin_print_scripts',  array(&$this, "admin_js_enqueue") );

                // Add or alter any admin menus
                add_action('admin_menu', array(&$this, "admin_add_menus"));
                
                
                add_action('admin_notices', array(&$this, "admin_show_messages"));
                
                $this->admin_init();
                
            } else {
                //register any shortcodes for the plugin
                $this->register_shortcodes();

                // Render JS to the front-end pages
                add_action( 'wp_enqueue_scripts', array( &$this, 'frontend_js_enqueue'), 20 );
                
                // Render CSS to the front-end pages
                add_action('wp_print_styles', array(&$this, 'frontend_css_enqueue'));

                $this->frontend_init();
            }
        }

        function check_can_load($input) {
            $can_load = false;
            
            if ($input === (1 & $input)) {
                $can_load = is_admin();
            } 
            if ($input === (2 & $input)) {
                $can_load = $this->check_admin_settings_page();
            }
            if ($input === (4 & $input)) {
                $can_load = !is_admin();
            }
            if ($input === (8 & $input)) {
                $can_load = is_front_page();
            }

            return $can_load;
        }
        
        function check_admin_settings_page() {
          return is_admin() && array_key_exists('page', $_GET) && ($_GET['page'] == $this->_plugin_name);
        }

        // register and enqueue a CSS
        function register_and_enqueue_css($file, $d = '', $v = false) {
            if ($v === false) {
              $v = $this->current_plugin_version();
            }

            $css_src_url = $file;
            if ( ! WPPBUtils::str_contains($file, '://') ) {
              $css_src_url = $this->_plugin_url . 'css/' . $file;
            }
            
            $h = str_replace('.', '-', pathinfo( $file, PATHINFO_FILENAME ) );

            wp_register_style(
                    $handle = $h,
                    $src = $css_src_url,
                    $deps = $d,
                    $ver = $v);

            wp_enqueue_style($h);
        }

        // register and enqueu a script
        function register_and_enqueue_js($file, $d = array(), $v = false, $f = false) {
            if ($v === false) {
              $v = $this->current_plugin_version();
            }

            $js_src_url = $file;
            if ( ! WPPBUtils::str_contains($file, '://') ) {
              $js_src_url = $this->_plugin_url . 'js/' . $file;
            }            
            $h = str_replace('.', '-', pathinfo( $file, PATHINFO_FILENAME ) );

            wp_register_script(
                    $handle = $h,
                    $src = $js_src_url,
                    $deps = $d,
                    $ver = $v,
                    $in_footer = $f);

            wp_enqueue_script($h);
        }

        // register any admin JS scripts
        function admin_js_register() {

            if ($this->check_can_load($this->_when_to_load_default_js)) {

                //if a file named /js/admin-[plugin_name].js is found then add it automatically
                $js_src_path = $this->_plugin_dir . 'js/admin-' . $this->_plugin_name . '.js';

                if (file_exists($js_src_path)) {

                    $this->_default_js_exists = true; //stored for later use

                    $js_src_url = $this->_plugin_url . 'js/admin-' . $this->_plugin_name . '.js';

                    wp_register_script(
                            $handle = $this->admin_js_default_handle(),
                            $src = $js_src_url,
                            $deps = $this->admin_js_default_deps(),
                            $ver = $this->current_plugin_version());
                }
            }
            
        }

        // default plugin js handle
        function admin_js_default_handle() {
            return 'admin-' . $this->_plugin_name . '-js';
        }

        //default plugin js dependancies
        function admin_js_default_deps() {
            return array("jquery");
        }

        // enqueue the script
        function admin_js_enqueue() {
            if ($this->check_can_load($this->_when_to_load_default_js) && $this->_default_js_exists) {
                wp_enqueue_script($this->admin_js_default_handle());
            }
        }

        // regsiter the plugin stylesheets
        function admin_css_register() {
            if ($this->check_can_load($this->_when_to_load_default_css)) {
                //if a file named /css/admin-[plugin_name].css is found then add it automatically
                $css_src_path = $this->_plugin_dir . 'css/admin-' . $this->_plugin_name . '.css';

                if (file_exists($css_src_path)) {

                    $this->_default_css_exists = true; //stored for later use

                    $css_src_url = $this->_plugin_url . 'css/admin-' . $this->_plugin_name . '.css';

                    wp_register_style(
                            $handle = $this->admin_css_default_handle(),
                            $src = $css_src_url,
                            $deps = $this->admin_css_default_deps(),
                            $ver = $this->current_plugin_version());
                }
            }
        }

        // default plugin css handle
        function admin_css_default_handle() {
            return 'admin-' . $this->_plugin_name . '-css';
        }

        //default plugin css dependancies
        function admin_css_default_deps() {
            return false;
        }

        // enqueue the stylesheet
        function admin_css_enqueue() {
            if ($this->check_can_load($this->_when_to_load_default_css) && $this->_default_css_exists) {
                wp_enqueue_style($this->admin_css_default_handle());
            }
        }
        
        function admin_add_error_message($message, $session = false) {
          if ($session) {
            //save the errors to the sessions;
            $errors = $_SESSION[$this->_plugin_name . '_admin_errors'];
            //add the error
            $errors[] = $message;
            //save it back to the session
            $_SESSION[$this->_plugin_name . '_admin_errors'] = $errors;
          } else {
            //store it normally
            $this->_admin_errors[] = $message;
          }
        }
        
        function admin_show_messages() {
          
          //first check the session
          $session_error_messages = $_SESSION[$this->_plugin_name . '_admin_errors'];
          if (is_array($session_error_messages)) {
            foreach ( $session_error_messages as $error ) {
              $this->admin_show_message($message, true);
            }
            
            //now clear the session
            $_SESSION[$this->_plugin_name . '_admin_errors'] = null;
          }
          
          if (is_array($this->_admin_errors)) {
            foreach ( $this->_admin_errors as $error ) {
              $this->admin_show_message($message, true);
            }
          }
        }
        
        function admin_show_message($message, $error = false) {
          if ($error) {
            echo '<div id="message" class="error">';
          } else {
            echo '<div id="message" class="updated fade">';
          }

          echo "<p><strong>$message</strong></p></div>";
        }

        // register any options/settings we may want to store for this plugin
        function admin_settings_init() { }

        // add a setting tab
        function admin_settings_add_tab( $args = array() ) {
            $defaults = array(
                    'id'      => 'tab_id',
                    'title'   => 'Settings Tab'
            );

            extract( wp_parse_args( $args, $defaults ) );

            $tab = array(
                    'id'	=> $id,
                    'title'	=> $title
            );

            $this->_settings_tabs[$id] = $tab;
        }

        // add a setting section
        function admin_settings_add_section( $args = array() ) {
            $defaults = array(
                    'id'      => '',
                    'title'   => 'Section Title',
                    'desc'    => ''
            );

            extract( wp_parse_args( $args, $defaults ) );

            $section = array(
                    'id'	=> $id,
                    'title'	=> $title,
                    'desc'	=> $desc
            );

            $this->_settings_sections[] = $section;

            $section_callback = create_function('',
                    'echo "' . $desc . '";');

            add_settings_section($id, $title, $section_callback, $this->_plugin_name);
        }

        // add a settings field
        function admin_settings_add( $args = array() ) {

            $defaults = array(
                'id'      => 'default_field',
                'title'   => 'Default Field',
                'desc'    => '',
                'std'     => '',
                'type'    => 'text',
                'section' => '',
                'choices' => array(),
                'class'   => '',
                'tab'     => ''
            );

            extract( wp_parse_args( $args, $defaults ) );

            $field_args = array(
                'type'      => $type,
                'id'        => $id,
                'desc'      => $desc,
                'std'       => $std,
                'choices'   => $choices,
                'label_for' => $id,
                'class'     => $class
            );

            if (count($this->_settings) == 0){
                //only do this once
                register_setting($this->_plugin_name, $this->_plugin_name, array(&$this, 'admin_settings_validate'));
            }

            $this->_settings[] = $args;

            $section_id = WPPBUtils::to_key($section);

            //check we have the tab
            if (!empty($tab)) {
                $tab_id = WPPBUtils::to_key($tab);
                
                if (!array_key_exists($tab_id, $this->_settings_tabs)) {
                    //no such tab exists, so create one please
                    $this->admin_settings_add_tab( array(
                            'id'	=> WPPBUtils::to_key($tab),
                            'title'	=> WPPBUtils::to_title($tab)
                    ) );
                }

                $section_id = $tab . '-' . $section_id;

                //add the section to the tab
                $this->_settings_tabs[$tab_id]['sections'][] = $section_id;
            }

            //check we have the section
            if (!array_key_exists($section_id, $this->_settings_sections)) {

                //no such section exists, so create one please
                $this->admin_settings_add_section( array(
                        'id'	=> $section_id,
                        'title'	=> WPPBUtils::to_title($section)
                ) );
            }
            
            add_settings_field( $id, $title, array(&$this, 'admin_settings_render'), $this->_plugin_name, $section_id, $field_args );
        }

        // render HTML for individual settings
        function admin_settings_render( $args = array() ) {

            extract( $args );

            $options = get_option( $this->_plugin_name );

            if ( !isset( $options[$id] ) && $type != 'checkbox' )
                $options[$id] = $std;

            $field_class = '';
            if ( $class != '' )
                $field_class = ' class="' . $class . '"';

            $errors = get_settings_errors($id);

            switch ( $type ) {

                case 'heading':
                  echo '</td></tr><tr valign="top"><td colspan="2">' . $desc;
                  break;

                case 'checkbox':
                  $checked = '';
                  if ( isset( $options[$id] ) && $options[$id] == 'on' )
                      $checked = ' checked="checked"';
                  //else if ( )

                  echo '<input' . $field_class . ' type="checkbox" id="' . $id . '" name="'.$this->_plugin_name.'[' . $id . ']" value="on"' . $checked . ' /> <label for="' . $id . '"><small>' . $desc . '</small></label>';

                  break;

                case 'select':
                  echo '<select' . $field_class . ' name="'.$this->_plugin_name.'[' . $id . ']">';

                  foreach ( $choices as $value => $label ) {
                      $selected = '';
                      if ( $options[$id] == $value )
                          $selected = ' selected="selected"';
                      echo '<option '.$selected.' value="' . $value . '">' . $label . '</option>';
                  }

                  echo '</select>';

                  break;

                case 'radio':
                  $i = 0;
                  $saved_value = $options[$id];
                  if (empty($saved_value)) { $saved_value = $std; }
                  foreach ( $choices as $value => $label ) {
                      $selected = '';
                      if ( $saved_value == $value )
                          $selected = ' checked="checked"';
                      echo '<input' . $field_class . $selected . ' type="radio" name="'.$this->_plugin_name.'[' . $id . ']" id="' . $id . $i . '" value="' . $value . '"> <label for="' . $id . $i . '">' . $label . '</label>';
                      if ( $i < count( $choices ) - 1 )
                          echo '<br />';
                      $i++;
                  }

                  break;

                case 'textarea':
                  echo '<textarea' . $field_class . ' id="' . $id . '" name="'.$this->_plugin_name.'[' . $id . ']" placeholder="' . $std . '">' . $options[$id] . '</textarea>';

                  break;

                case 'password':
                  echo '<input' . $field_class . ' type="password" id="' . $id . '" name="'.$this->_plugin_name.'[' . $id . ']" value="' . $options[$id] . '" />';

                  break;

                case 'text':
                  echo '<input' . $field_class . ' type="text" id="' . $id . '" name="'.$this->_plugin_name.'[' . $id . ']" placeholder="' . $std . '" value="' . $options[$id] . '" />';

                  break;

                case 'checkboxlist':
                  $i = 0;
                  foreach ( $choices as $value => $label ) {

                    $checked = '';
                    if ( isset($options[$id][$value]) && $options[$id][$value] == 'true') {
                      $checked = 'checked="checked"';
                    }

                    echo '<input' . $field_class . ' ' . $checked . ' type="checkbox" name="'.$this->_plugin_name.'[' . $id . '|' . $value . ']" id="' . $id . $i . '" value="on"> <label for="' . $id . $i . '">' . $label . '</label>';
                    if ( $i < count( $choices ) - 1 )
                      echo '<br />';
                    $i++;
                  }

                  //echo '<div style="display:none"><input type="checkbox" checked="checked" name="'.$this->_plugin_name.'[' . $id . '|_none_]" id="' . $id . '_none" value="on"></div>';

                  break;

                default:
                  $this->custom_admin_settings_render($args);

                  break;
            }

            if (is_array($errors)) {
                foreach ( $errors as $key => $details ) {
                    echo "<span class='error'>{$details['message']}</span>";
                }
            }

            if ( $type != 'checkbox' && $type != 'heading' && $desc != '' )
                echo '<br /><small>' . $desc . '</small>';
        }

        function custom_admin_settings_render( $args = array() ) {
          
        }

        // validate our settings
        function admin_settings_validate($input) {

//            if (empty($input['sample_text'])) {
//
//                add_settings_error(
//                    'sample_text',           // setting title
//                    'sample_text_error',            // error ID
//                    'Please enter some sample text',   // error message
//                    'error'                        // type of message
//                );
//
//            }

          foreach ($this->_settings as $setting) {
            $this->admin_settings_validate_item( $setting, $input );
          }

          return $input;
        }

        function admin_settings_validate_item( $setting, &$input ) {
          //validate a single setting

          if ($setting['type'] == 'checkboxlist') {

            unset($checkboxarray);
            $check_values = array();
            foreach ($setting['choices'] as $value => $label ) {
              if ( !empty( $input[$setting['id'] . '|' . $value] ) ) {
                  // If it's not null, make sure it's true, add it to an array
                  $checkboxarray[$value] = 'true';
              }
              else {
                  $checkboxarray[$value] = 'false';
              }
            }

            if (!empty($checkboxarray)) {
              $input[$setting['id']] = $checkboxarray;
            }
          }


        }

        // add a settings admin menu
        function admin_settings_add_menu() {
            if (!empty($this->_has_settings)) {
                add_options_page($this->_plugin_title . ' Settings', $this->_plugin_title . ' Settings',
                        'manage_options', $this->_plugin_name, array(&$this, "admin_settings_render_page"));
            }
        }

        // render the setting page
        function admin_settings_render_page() {
            //check if an settings.php file exists and if so, include it
            if (file_exists($this->_plugin_dir . "settings.php")) {
                    include_once($this->_plugin_dir . "settings.php");
            } else {
                //render the settings using our default page
                include_once($this->_plugin_dir . "includes/default_settings.php");
                admin_settings_render_default_page($this->_plugin_title . ' Settings', $this->_plugin_settings_summary, $this->_plugin_name, $this->_settings_tabs);
            }
        }

        // override to register custom admin menus
        function admin_add_menus() {
            $this->admin_settings_add_menu();
        }

        // make any changes to the admin dashboard here
        function admin_dashboard() { }
        
        function admin_init() { }

        //override to register custom frontend CSS
        function frontend_css_enqueue() { }
        
        //override to register custom frontend JS
        function frontend_js_enqueue() { }

        function frontend_init() { }

        // register any custom shortcodes
        function register_shortcodes() { }

        // Get the remote XML file contents and return its data (Version and Changelog)
        // Uses the cached version if available and inside the time interval defined
        // original code found here : https://github.com/mordauk/WordPress-Plugin-Update-Notifier-for-Code-Canyon
        function check_plugin_version($check_url, $interval = 0) {
          $db_cache_field = 'updatecheck-cache';
          $db_cache_field_last_updated = 'updatecheck-last-updated';

          $last = $this->get_option( $db_cache_field_last_updated );
          $now = time();
          // check the cache
          if ( !$last || $interval == 0 || (( $now - $last ) > $interval) ) {
            // cache doesn't exist, or is old, so refresh it
            if( function_exists('curl_init') ) { // if cURL is available, use it...
              $ch = curl_init($check_url);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_HEADER, 0);
              curl_setopt($ch, CURLOPT_TIMEOUT, 10);
              $cache = curl_exec($ch);
              curl_close($ch);
            } else {
              $cache = file_get_contents($check_url); // ...if not, use the common file_get_contents()
            }

            if ($cache) {
              // we got good results
              $this->save_option( $db_cache_field, $cache );
              $this->save_option( $db_cache_field_last_updated, time() );
            }
            // read from the cache file
            $update_data = $this->get_option( $db_cache_field );
          }
          else {
            // cache file is fresh enough, so read from it
            $update_data = $this->get_option( $db_cache_field );
          }

          // Let's see if the $xml data was returned as we expected it to.
          // If it didn't, use the default 1.0 as the latest version so that we don't have problems when the remote server hosting the XML file is down
          if( strpos((string)$update_data, '<notifier>') === false ) {
            $update_data = '<?xml version="1.0" encoding="UTF-8"?><notifier><latest>1.0</latest><changelog></changelog></notifier>';
          }

          // Load the remote XML data into a variable and return it
          $xml = simplexml_load_string($update_data);

          return $xml;
        }

        // get a value using the transient API by the key
        // if the key does not exist, then call the function to get the value and store that
        function get_transient($key, $expiration, $function, $args = array()) {
          if ( false === ( $value = get_transient( $key ) ) ) {

            //nothing found, call the function
            $value = call_user_func_array( $function, $args );

            //store the transient
            set_transient( $key, $value, $expiration);

          }

          return $value;
        }

        // returns the current URL
        function current_url() {
            $isHTTPS = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on");
            $port = (isset($_SERVER["SERVER_PORT"]) && ((!$isHTTPS && $_SERVER["SERVER_PORT"] != "80") || ($isHTTPS && $_SERVER["SERVER_PORT"] != "443")));
            $port = ($port) ? ':'.$_SERVER["SERVER_PORT"] : '';
            $url = ($isHTTPS ? 'https://' : 'http://').$_SERVER["SERVER_NAME"].$port.$_SERVER["REQUEST_URI"];
            return $url;
        }

        // returns the current page name
        function current_page_name() {
            return basename($_SERVER['SCRIPT_FILENAME']);
        }

        // save a WP option for the plugin. Stores and array of data, so only 1 option is saved for the whole plugin to save DB space and so that the options table is not poluted
        function save_option($key, $value) {
          $options = get_option( $this->_plugin_name );
          if (!options) {
            //no options have been saved for this plugin
            add_option($this->_plugin_name, array($key => $value));
          } else {
            $options[$key] = $value;
            update_option($this->_plugin_name, $options);
          }
        }

        //get a WP option value for the plugin
        function get_option($key, $default = false) {
          $options = get_option( $this->_plugin_name );
          if ($options) {
            return ( array_key_exists($key, $options) ) ? $options[$key] : $default;
          }

          return $default;
        }

        function delete_option($key) {
          $options = get_option( $this->_plugin_name );
          if (options) {
            unset($options[$key]);
            update_option($this->_plugin_name, $options);
          }
        }
    }
}

if (!function_exists('load_plugin')) {
    function load_plugin($plugin_class, $priority = 10) {
        if (class_exists($plugin_class)) {
            add_action("init",
                    create_function('', "global \$$plugin_class; \$$plugin_class = new $plugin_class();"),
                    $priority);
        }
    }
}
?>