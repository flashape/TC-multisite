<?php

/**
 * 
 * Pack options into a single option record.
 * @version $Id$
 * @copyright 2003 
 **/
class cwa_install {
	var $prefix = 'custom_widget_area';
	var $varname = 'cwa_options';
	function cwa_install(){
		global $wpdb;
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
		$packed_options = get_option($this->varname);
		$packed_options = is_array($packed_options)?$packed_options:array();
		$post_types = array();
		$delete_options = array();
		foreach($this->get_options() as $tab){
			foreach($tab->options as $option){
				if($option->type=='custom_post_type'){
					$old_option_name 	= $this->prefix."_".$option->id;
					if(get_option($old_option_name)=='1'){
						$post_types[]=$option->value;
					}
					continue;
				}
				
				if(property_exists($option,'save_option')&&$option->save_option==true){
					$old_option_name 	= $this->prefix."_".$option->id;
					$old_option_value 	= get_option($old_option_name);
					if(''!=trim($old_option_value)){
						$packed_options[$option->id]=$old_option_value;
					}
					$delete_options[]=$old_option_name;
				}
			}

		}
		if(count($post_types)>0){
			$packed_options['post_types']=$post_types;
		}
		if( update_option($this->varname,$packed_options) ){
			foreach($delete_options as $name){
				delete_option($old_option_name); 
			}			
		}		
		
		//--- import sidebars -----
		global $userdata;
		$custom = get_option('custside_sidebars');
		$custom = is_array($custom)?$custom:array();
		if(count($custom)>0){
			foreach($custom as $s){		
				$post_id = intval($wpdb->get_var("SELECT post_id FROM `{$wpdb->postmeta}` WHERE meta_key='sidebar' AND meta_value=\"{$s->id}\" LIMIT 1",0,0));
				if($post_id==0){
					 $post = array(
					    'post_title' => $s->name,
					    'post_content' => '',
					    'post_status' => 'publish',
					    'post_author' => $userdata->ID,
					 	'post_type' => 'cwa',
						'comment_status' => 'closed',
						'ping_status'=> 'closed'
					 );	
					 $post_id = wp_insert_post( $post );
					 update_post_meta($post_id,'sidebar',$s->id);			
				}	  
			}
		}
		delete_option('custside_sidebars');
	}
	
	function get_options($for_admin=true){
		$t = array();
		
		$i= 0;
		
		$i++;
		$t[$i]->id 			= 'sidebar'; 
		$t[$i]->label 		= __('Custom widgets area','custside');
		$t[$i]->right_label	= __('Add/Remove custom custom widget area','custside');
		$t[$i]->page_title	= __('Sidebar settings','custside');
		$t[$i]->options = array(
			(object)array(
				'id'		=> 'create_sidebar',
				'label'		=> __('Create&nbsp;sidebar','custside'),
				'type'		=> 'create_sidebar',
				//'description'=> sprintf("%s <a href=\"%s\">%s</a> %s",__('Go to','custside'),get_admin_url(null,'/widgets.php'),__('Widgets','custside'),__('in order to add Widgets to your new sidebars.','custside')),
				'el_properties'	=> array('size'=>'25','maxlength'=>'30'),
				'save_option'=>false,
				'load_option'=>false
				),
			(object)array(
				'type'=>'subtitle',
				'label'=>__('Created sidebars','custside')	
			),				
			(object)array(
				'id'		=> 'list_sidebar',
				'label'		=> '&nbsp;',
				'type'		=> 'list_sidebar',
				'description'=> sprintf("%s <a href=\"%s\">%s</a> %s",__('Go to','custside'),get_admin_url(null,'/widgets.php'),__('Widgets','custside'),__('in order to add Widgets to your new sidebars.','custside')),
				'el_properties'	=> array('size'=>'30','maxlength'=>'30'),
				'save_option'=>false,
				'load_option'=>false
				)	
		);
	//	$t[$i]->options[]=(object)array('type'=>'description', 'label'=> sprintf("%s <a href=\"%s\">%s</a> %s",__('Go to','custside'),get_admin_url(null,'/widgets.php'),__('Widgets','custside'),__('in order to add Widgets to your new sidebars.','custside')) );

		global $wp_registered_sidebars;

		$cus_sidebars = get_option('custside_sidebars');
		$cus_sidebars = is_array($cus_sidebars)?$cus_sidebars:array();
		$skip_ids = array();
		if(count($cus_sidebars)>0){
			foreach($cus_sidebars as $cs){
				$skip_ids[]=$cs->id;
			}
		}
		

		
		foreach($this->configurables as $tab){
			$tab = (object)$tab;
			
			$i++;
			$t[$i]->id 			= $tab->id; 
			$t[$i]->label 		= $tab->label;
			$t[$i]->page_title	= $tab->label;;
			
			$k=0;
			foreach($wp_registered_sidebars as $sb_id => $sb_prop){
				if($k++==0){
					$desc = __('*If the theme template does not shows a default sidebar, it will not show a custom either','custside');
				}else{
					$desc = "";
				}
				
				if(in_array($sb_id,$skip_ids))
					continue;
				$sb_prop = (object)$sb_prop;
				$t[$i]->options[] = (object)array(
					'id'		=> sprintf('%s_%s',$tab->prefix,$sb_id),
					'label'		=> $sb_prop->name,
					'type'		=> 'sidebar_dropdown',
					'description'=> $desc,
					'el_properties'	=> array('class'=>'sidebar-list'),
					'save_option'=>true,
					'load_option'=>true
					);	
			}
	
			//$t[$i]->options[]=(object)array('label'=>'','value'=>__('*If the theme template does not shows a default sidebar, it will not show a custom either','custside'),'type'=>'label' );
			$t[$i]->options[]=(object)array('label'=>'','type'=>'submit','class'=>'button-primary', 'value'=> __('Save changes','custside') );
		}	

		$i++;
		$t[$i]->id 			= 'widget-content-css'; 
		$t[$i]->label 		= __('Widget in content CSS','custside');
		$t[$i]->right_label	= __('Modify the CSS for widgets in content','custside');
		$t[$i]->page_title	= __('CSS for Widgets in content','custside');
		$t[$i]->options = array(
			(object)array(
				'id'		=> 'css_for_content',
				'label'		=> __('CSS','custside'),
				'type'		=> 'textarea',
				'description'=> __('Most be valid css, will be printed on the theme head section.','custside'),
				'default_value'=>'',
				'el_properties'	=> array('cols'=>'70','rows'=>'20'),
				'save_option'=>true,
				'load_option'=>true
				)
		);		

		$i++;
		$t[$i]->id 			= 'cwa-advanced'; 
		$t[$i]->label 		= __('Advanced settings','custside');
		$t[$i]->right_label	= __('Advanced settings','custside');
		$t[$i]->page_title	= __('Advanced settings','custside');
		$t[$i]->options = array(
			(object)array(
				'id'		=> 'disable_jqueryui_theme',
				'label'		=> __('Disable jquery-ui theme','custside'),
				'type'		=> 'select',
				'description'=> __('If another plugin is adding a jquery-ui theme, you can disable the one that this plugin is adding by choosing yes.','custside'),
				'default_value'=> 0,
				'el_properties'	=> array(),
				'save_option'=>true,
				'load_option'=>true,
				'options'=>array(0=>'No',1=>'Yes')
				)
		);	

		$i++;
		$t[$i]->id 			= 'cwa-custom-post-types'; 
		$t[$i]->label 		= __('Custom post types','custside');
		$t[$i]->right_label	= __('Custom post types','custside');
		$t[$i]->page_title	= __('Custom post types','custside');
		$t[$i]->options = array();	
		
		//--------------
		foreach(get_post_types(array('_builtin' => false),'objects','and') as $post_type => $pt){	
			$id = sprintf("enable_%s",$post_type);
			$name = isset($pt->label)&&trim($pt->label)!=''?$pt->label:$post_type;
			
			$t[$i]->options[]=(object)array(
				'id'				=> $id,
				'label'				=> sprintf(__('Enable %s custom post type','custside'),$name),
				'type'				=> 'custom_post_type',
				'value'				=> $post_type,
				'description'		=> '',
				'default_value'		=> 0,
				'el_properties'		=> array(),
				'save_option'		=>true,
				'load_option'		=>true,
				'options'			=>array(0=>'No',1=>'Yes')
				);
		} 
		
		return $t;
	}	

	function wp_head(){
	//echo "<style>".$this->default_widget_in_content_css()."</style>";
	//return;
		$css = get_option($this->id.'_css_for_content');
		if(trim($css)!=''):
?>
<style type="text/css">
<?php  echo $css ?>
</style>
<?php		
		endif;
	}
}

?>