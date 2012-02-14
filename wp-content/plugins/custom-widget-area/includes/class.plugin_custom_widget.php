<?php
//define('CWA_CAPABILITY','cwa_manage_sidebars');
define('CWA_CAPABILITY','manage_options');

if(!function_exists('property_exists')):
function property_exists($o,$p){
	return is_object($o) && 'NULL'!==gettype($o->$p);
}
endif;

class plugin_custom_widget {
	var $id;
	var $plugin_page;
	var $menu;
	var $submenu;
	var $options_parameters = array();
	var $CUSTWIDGETSidebars;
	var $configurables;
	var $options_varname = 'cwa_options';
	var $options = array();
	var $prefix = 'side';
	var $side_post_ids = array();
	var $theme_sidebars = array();
	function plugin_custom_widget($args=array()){
		$this->options = get_option($this->options_varname);
		$this->options = is_array($this->options)?$this->options:array();
		/*
		echo "<PRE>";
		print_r($this->options);
		echo "</PRE>";
		*/
		//------------
		$defaults = array(
			'id'=>'custom_widget_area',
			'options_parameters'=> array()
		);
		foreach($defaults as $property => $default){
			$this->$property = isset($args[$property])?$args[$property]:$default;
		}
		//-----------	
		add_action('plugins_loaded',array(&$this,'plugins_loaded'));
		add_action('wp_head',array(&$this,'wp_head'));
		
		$this->configurables = array(
			array(
				'id'		=> 'fp-assign-sidebar',
				'label' 	=> __('Frontpage Sidebars','custside'),
				'prefix' 	=> 'fp',
				'function'  => 'is_front_page'
			),
			array(
				'id'		=> 'home-assign-sidebar',
				'label' 	=> __('Home Sidebars','custside'),
				'prefix' 	=> 'home',
				'function'  => 'is_home'
			),
			array(
				'id'		=> 'archive-assign-sidebar',
				'label' 	=> __('Archive Sidebars','custside'),
				'prefix' 	=> 'archive',
				'function'  => 'is_archive'
			),
			array(
				'id'		=> 'category-assign-sidebar',
				'label' 	=> __('Category Sidebars','custside'),
				'prefix' 	=> 'cat',
				'function'  => 'is_category'
			),			
			array(
				'id'		=> 'page-assign-sidebar',
				'label' 	=> __('Page Sidebars','custside'),
				'prefix' 	=> 'page',
				'function'  => 'is_page'
			),	
			array(
				'id'		=> 'single-assign-sidebar',
				'label' 	=> __('Single Post Sidebars','custside'),
				'prefix' 	=> 'single',
				'function'  => 'is_single'
			),	
			array(
				'id'		=> 'notfound-assign-sidebar',
				'label' 	=> __('404 Sidebars','custside'),
				'prefix' 	=> 'notfound',
				'function'  => 'is_404'
			),
			array(
				'id'		=> 'search-assign-sidebar',
				'label' 	=> __('Search Sidebars','custside'),
				'prefix' 	=> 'search',
				'function'  => 'is_search'
			),
			array(
				'id'		=> 'attach-assign-sidebar',
				'label' 	=> __('Attachments Sidebars','custside'),
				'prefix' 	=> 'att',
				'function'  => 'is_attachment'
			),	
			array(
				'id'		=> 'tag-assign-sidebar',
				'label' 	=> __('Tag Sidebars','custside'),
				'prefix' 	=> 'tag',
				'function'  => 'is_tag'
			),			
			array(
				'id'		=> 'author-assign-sidebar',
				'label' 	=> __('Author Sidebars','custside'),
				'prefix' 	=> 'author',
				'function'  => 'is_author'
			)
		);
		
		add_action('admin_head-post.php',array(&$this,'admin_head'));
		add_action('admin_head-post-new.php',array(&$this,'admin_head'));
	}
	
	function admin_head(){
		global $post;
		$post_types = @$this->options['post_types'];
		$post_types = is_array($post_types)?$post_types:array();
		$post_types[]='page';
		$post_types[]='post';
		if(!in_array($post->post_type,$post_types))
			return;		
		if( isset($this->options['disable_jqueryui_theme'])&&intval($this->options['disable_jqueryui_theme'])==0 ){
			wp_print_styles('jquery-ui-smoothness');	
		}	
		wp_print_styles($this->id.'-tabs');
	}
	
	function plugins_loaded(){
		if(is_admin()):
			wp_register_style($this->id.'-tabs',CUSTWIDGET_URL.'css/toggle.css',array(),'1.0.10');
	    	wp_register_script('cwa-widget',CUSTWIDGET_URL.'js/widgets.dev.js',array( 'jquery-ui-sortable', 'jquery-ui-draggable', 'jquery-ui-droppable' ),'1.0.0');	
			wp_register_style('jquery-ui-smoothness',CUSTWIDGET_URL.'css/smoothness/jquery-ui-1.8.5.custom.css',array(),'1.8.5');			
			//$current_url = substr( $GLOBALS['PHP_SELF'], -18);
			require_once CUSTWIDGET_PATH.'includes/class.custom_widget_area.php';
			new custom_widget_area();
			//---
			wp_register_style( 'cwa-options', CUSTWIDGET_URL.'css/pop.css', array(),'1.0.0');
			require_once CUSTWIDGET_PATH.'includes/class.cwa_settings.php';new cwa_settings();
			require_once CUSTWIDGET_PATH.'includes/class.plugin_registration.php';
			new plugin_registration(array('plugin_id'=>$this->id,'tdom'=>'cwa','plugin_code'=>'CWA','options_varname'=>$this->options_varname));
			require_once CUSTWIDGET_PATH.'includes/class.PluginOptionsPanel.php';
			$settings = array(				
				'id'					=> $this->id,
				'plugin_id'				=> $this->id,
				'capability'			=> CWA_CAPABILITY,
				'options_varname'		=> $this->options_varname,
				'menu_id'				=> 'cwa-options',
				'page_title'			=> __('Options','cwa'),
				'menu_text'				=> __('Options','cwa'),
				'option_menu_parent'	=> 'edit.php?post_type=cwa',
				'notification'			=> (object)array(
					'plugin_version'=> CWA_VERSION,
					'plugin_code' 	=> 'CWA',
					'message'		=> __('Custom Widget Area update %s is available! <a href=\"%s\">Please update now</a>','cwa')
				),
				'theme'					=> false,
				'stylesheet'			=> 'cwa-options',
				'rangeinput'			=> false,
				'colorpicker'			=> false					
			);
			new PluginOptionsPanel($settings);						
		endif;
	
		require_once CUSTWIDGET_PATH.'includes/class.CUSTWIDGETSidebars.php';
		$this->CUSTWIDGETSidebars = new CUSTWIDGETSidebars($this);
		
		require_once CUSTWIDGET_PATH.'includes/class.CUSTWIDGETShortcode.php';
		new CUSTWIDGETShortcode($this);
	}

	function wp_head(){
		$css = $this->get_option('css_for_content');
		if(trim($css)!=''):
?><style type="text/css" rel="cwa"><?php  echo $css ?></style><?php		
		endif;
	}
		
	function _add_custom_widgets($custom=array()){
		global $wpdb;

		$sql = "SELECT COALESCE((SELECT M.meta_value FROM `{$wpdb->postmeta}` M WHERE M.post_id=P.ID AND M.meta_key=\"sidebar\" LIMIT 1),CONCAT('side',ID)) as id";
		$sql.= ",P.post_title as name,0 as wframe FROM `{$wpdb->posts}` P WHERE P.post_type='cwa' AND P.post_status='publish' ORDER BY P.post_title ASC";
		if($wpdb->query($sql)&&$wpdb->num_rows>0){
			foreach($wpdb->last_result as $row){
				$custom[]=$row;
			}
		}
		return $custom;
	}
		
	function add_custom_widgets($custom=array()){
		global $wpdb;

		$args = array(
			'post_type'=>'cwa',
			'post_status'=>'publish',
			'orderby'=>'post_title',
			'order'=>'ASC',
			'numberposts'=>-1
		);
		$posts = get_posts($args);
		if(is_array($posts)&&count($posts)>0){
			foreach($posts as $post){
				$sidebar = get_post_meta($post->ID,'sidebar',true);
				$sidebar = trim($sidebar)==''?$this->prefix.$post->ID:$sidebar;
				$custom[] = (object)array(
					'id'=>$sidebar,
					'name'=>$post->post_title,
					'wframe'=>0
				);
				$this->side_post_ids[$sidebar]=$post->ID;
			}
		}
		return $custom;
	}
	
	function get_option($name,$default=''){
		return isset($this->options[$name])?$this->options[$name]:$default;
	}
}  
?>