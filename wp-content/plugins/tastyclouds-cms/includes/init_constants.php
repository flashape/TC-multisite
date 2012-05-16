<?php



if (!defined('TASTY_CMS_PLUGIN_INC_DIR')) {
    define('TASTY_CMS_PLUGIN_INC_DIR', TASTY_CMS_PLUGIN_DIR . 'includes/');
    define('TASTY_CMS_PLUGIN_METABOX_DIR', TASTY_CMS_PLUGIN_DIR . 'metabox/');
    define('TASTY_CMS_PLUGIN_LIBS_DIR', TASTY_CMS_PLUGIN_DIR . 'libs/');

}

if (!defined('TASTY_CMS_PLUGIN_LIBS_DIR')) {
}

if(!defined('TC_CMS_JS_URL')){
    define('TC_CMS_JS_URL', plugins_url('tastyclouds-cms/js/'));
}

if(!defined('TC_SHARED_DIR')){
    define('TC_SHARED_DIR', WP_CONTENT_DIR.'/tc_shared/');
}

if(!defined('TC_SHARED_JS_URL')){
    //define('TC_SHARED_JS_URL', WP_CONTENT_URL . '/tc_shared/js/');
    define('TC_SHARED_JS_URL', content_url('/tc_shared/js/'));
}

if(!defined('TC_SHARED_CSS_URL')){
    //define('TC_SHARED_CSS_URL', WP_CONTENT_URL . '/tc_shared/css/');
    define('TC_SHARED_CSS_URL', content_url('/tc_shared/css/'));

}

define('SWIFTMAIL_REQUIRED_FILE', ABSPATH . 'swiftmailer/lib/swift_required.php');




?>