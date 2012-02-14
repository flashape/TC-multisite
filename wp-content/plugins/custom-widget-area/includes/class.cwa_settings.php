<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/
class cwa_settings {
	var $plugin_id='custom_widget_area';
	var $prefix = 'side';
	function cwa_settings(){
		add_filter('pop-options_'.$this->plugin_id,array(&$this,'options'),10,1);
	}
	
	function get_cwa_ids(){
		global $wpdb;
		$sql = "SELECT COALESCE((SELECT M.meta_value FROM `{$wpdb->postmeta}` M WHERE M.post_id=P.ID AND M.meta_key=\"sidebar\" LIMIT 1),CONCAT('{$this->prefix}',ID)) as id";
		$sql.= " FROM `{$wpdb->posts}` P WHERE P.post_type='cwa' AND P.post_status='publish' ORDER BY P.post_title ASC";	
		$skip_ids = $wpdb->get_col($sql,0);
		return is_array($skip_ids)?$skip_ids:array();	
	}
	
	function options($t){
		$i = count($t);
		//--- default widget area
		global $wpdb,$cwa_plugin,$wp_registered_sidebars;
		$skip_ids = $this->get_cwa_ids();		
		//--- old versions --- will be removed
		$cus_sidebars = get_option('custside_sidebars');
		$cus_sidebars = is_array($cus_sidebars)?$cus_sidebars:array();
		if(count($cus_sidebars)>0){
			foreach($cus_sidebars as $cs){
				$skip_ids[]=$cs->id;
			}
		}
		//------
				
		foreach($cwa_plugin->configurables as $tab){
			$tab = (object)$tab;
			
			$i++;
			$t[$i]->id 			= $tab->id; 
			$t[$i]->label 		= $tab->label;
			$t[$i]->right_label	= sprintf(__('Default widgets for %s','cwa'),$tab->label);
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
					'type'		=> 'select',
					'options'	=> $this->get_sidebar_options(),
					'description'=> $desc,
					'el_properties'	=> array('class'=>'sidebar-list'),
					'save_option'=>true,
					'load_option'=>true
					);	
			}
	
			//$t[$i]->options[]=(object)array('label'=>'','value'=>__('*If the theme template does not shows a default sidebar, it will not show a custom either','custside'),'type'=>'label' );
			$t[$i]->options[]=(object)array('type'=>'submit','class'=>'button-primary', 'label'=> __('Save changes','custside') );
		}			
		//-- CSS -----------------------		
		$i++;
		$t[$i]->id 			= 'cwa-css'; 
		$t[$i]->label 		= __('Widget in content CSS','cwa');
		$t[$i]->right_label	= __('Modify the CSS for widgets in content','cwa');
		$t[$i]->page_title	= __('Widget in content CSS','cwa');
		$t[$i]->theme_option = true;
		$t[$i]->plugin_option = true;
		$t[$i]->options = array(
			(object)array(
				'id'	=> 'css_for_content',
				'name'	=> 'css_for_content',
				'type'	=> 'textarea',
				'default'=> $this->default_widget_in_content_css(),
				'label'	=> 'CSS',
				'description'=> __('Most be valid css, will be printed on the theme head section.','cwa'),
				'el_properties' => array('cols'=>70,'rows'=>10),
				'save_option'=>true,
				'load_option'=>true
			)
		);
		$t[$i]->options[]=(object)array(
				'type'=>'clear'
			);
		$t[$i]->options[]=(object)array(
				'type'	=> 'submit',
				'label'	=> __('Save','sws'),
				'class' => 'button-primary',
				'save_option'=>false,
				'load_option'=>false
			);	
		//--Advanced settings -----------------------		
		$i++;
		$t[$i]->id 			= 'cwa-advanced'; 
		$t[$i]->label 		= __('Advanced settings','cwa');
		$t[$i]->right_label	= __('Advanced settings','cwa');
		$t[$i]->page_title	= __('Advanced settings','cwa');
		$t[$i]->theme_option = true;
		$t[$i]->plugin_option = true;
		$t[$i]->options = array(
			(object)array(
				'id'	=> 'disable_jqueryui_theme',
				'name'	=> 'disable_jqueryui_theme',
				'type'	=> 'yesno',
				'default'=> '0',
				'label'	=> __('Disable jquery-ui theme','cwa'),
				'description'=> __('If another plugin is adding a jquery-ui theme, you can disable the one that this plugin is adding by choosing yes.','cwa'),
				'el_properties' => array(),
				'save_option'=>true,
				'load_option'=>true
			),
			(object)array(
				'id'	=> 'disable_editor_icon',
				'name'	=> 'disable_editor_icon',
				'type'	=> 'yesno',
				'default'=> '0',
				'label'	=> __('Disable cwa icon in the editor','cwa'),
				'description'=> __('Choose this option if you dont want the cwa icon displayed on the editor.','cwa'),
				'el_properties' => array(),
				'save_option'=>true,
				'load_option'=>true
			)			
		);
		$t[$i]->options[]=(object)array(
				'type'=>'clear'
			);
		$t[$i]->options[]=(object)array(
				'type'	=> 'submit',
				'label'	=> __('Save','cwa'),
				'class' => 'button-primary',
				'save_option'=>false,
				'load_option'=>false
			);			
		//--Custom Post Types -----------------------		
		$i++;
		$t[$i]->id 			= 'cwa-custom-types'; 
		$t[$i]->label 		= __('Custom Post Types','cwa');
		$t[$i]->right_label	= __('Enable Custom Widget Area for other post types.','cwa');
		$t[$i]->page_title	= __('Custom Post Types','cwa');
		$t[$i]->theme_option = true;
		$t[$i]->plugin_option = true;
		$t[$i]->options = array();
		
		//--------------
		$post_types=array();
		foreach(get_post_types(array(/*'public'=> true,*/'_builtin' => false),'objects','and') as $post_type => $pt){
			if('cwa'==$post_type)continue;
			$post_types[$post_type]=$pt;
		} 
		//--------------		
		if(count($post_types)==0){
			$t[$i]->options[]=(object)array(
				'id'=>'no_ctypes',
				'type'=>'description',
				'label'=>__("There are no additional Custom Post Types to enable.",'cwa')
			);
		}else{
			$j=0;
			foreach($post_types as $post_type => $pt){
				$tmp=(object)array(
					'id'	=> 'post_types_'.$post_type,
					'name'	=> 'post_types[]',
					'type'	=> 'checkbox',
					'option_value'=>$post_type,
					'label'	=> (@$pt->labels->name?$pt->labels->name:$post_type),
					'el_properties' => array(),
					'save_option'=>true,
					'load_option'=>true
				);
				if($j==0){
					$tmp->description = __("Custom Widget Area can be enabled for plugins using WordPress 3.0 Custom Post Types",'cwa');
					$tmp->description_rowspan = count($post_types);
				}
				$t[$i]->options[]=$tmp;
				$j++;
			}
		}
		
		
		$t[$i]->options[]=(object)array(
				'type'=>'clear'
			);
		$t[$i]->options[]=(object)array(
				'type'	=> 'submit',
				'label'	=> __('Save','cwa'),
				'class' => 'button-primary',
				'save_option'=>false,
				'load_option'=>false
			);			
		//--Custom Taxonomies -----------------------		
		$i++;
		$t[$i]->id 			= 'cwa-custom-taxonomies'; 
		$t[$i]->label 		= __('Custom Taxonomies','cwa');
		$t[$i]->right_label	= __('Enable Custom Taxonomies.','cwa');
		$t[$i]->page_title	= __('Custom Taxonomies','cwa');
		$t[$i]->theme_option = true;
		$t[$i]->plugin_option = true;
		$t[$i]->options = array();		
		
		$taxonomies = get_taxonomies( array(),'objects' );
		if(count($post_types)==0){
			$t[$i]->options[]=(object)array(
				'id'=>'no_taxonomies',
				'type'=>'description',
				'label'=>__("There are no Custom Taxonomies to enable.",'cwa')
			);
		}else{
			$j=0;
			foreach($taxonomies as $taxonomy => $tax){
				if($tax->_builtin==1)continue;
				if( is_array($tax->object_type) /*&& ( in_array('post',$tax->object_type) || in_array('page',$tax->object_type) )*/){	
					$label=(@$tax->labels->name?$tax->labels->name:$taxonomy);
					if(count($tax->object_type)>0){
						$label.="(".implode(',',$tax->object_type).")";
					}
					$tmp=(object)array(
						'id'	=> 'taxonomies_'.$taxonomy,
						'name'	=> 'taxonomies[]',
						'type'	=> 'checkbox',
						'option_value'=>$taxonomy,
						'label'	=> $label,
						'el_properties' => array(),
						'save_option'=>true,
						'load_option'=>true
					);
					if($j==0){
						$tmp->description = __("Custom Widget Areas for Custom Taxonomies can be enabled for WordPress 3.1",'cwa');
						$tmp->description_rowspan = count($post_types);
					}
					$t[$i]->options[]=$tmp;
					$j++;					
				}
			}		
		}

		$t[$i]->options[]=(object)array(
				'type'=>'clear'
			);
		$t[$i]->options[]=(object)array(
				'type'	=> 'submit',
				'label'	=> __('Save','cwa'),
				'class' => 'button-primary',
				'save_option'=>false,
				'load_option'=>false
			);		
		//-------------------------	
		return $t;
	}
	
	function get_sidebar_options(){
		global $wpdb;
		$options = array(
			''=>__("-default-","cwa"),
			'no-display'=>__("Do not display","cwa")
		);
		$sql = "SELECT COALESCE((SELECT M.meta_value FROM `{$wpdb->postmeta}` M WHERE M.post_id=P.ID AND M.meta_key=\"sidebar\" LIMIT 1),CONCAT('{$this->prefix}',ID)) as value, P.post_title as label";
		$sql.= " FROM `{$wpdb->posts}` P WHERE P.post_type='cwa' AND P.post_status='publish' ORDER BY P.post_title ASC";	
		if($wpdb->query($sql)&&$wpdb->num_rows>0){
			foreach($wpdb->last_result as $row){
				$options[$row->value]=$row->label;		
			}
		}
		return $options;	
	}
	
	function default_widget_in_content_css() {
?>
<style>
<?php ob_start(); ?>
/* Default CSS : this affects the style of widgets displayed in the content area */
/* vertical-left type of sidebar -rrr */
.vertical-left {
	display:block;
	float:left;
	width:40%;
	margin:0 10px 5px 0;
}

.vertical-left .widget-in-content {
	display:block;
	float:none;
	width:100%;
}
/* vertical right type of sidebar */
.vertical-right {
	display:block;
	float:right;
	width:40%;
	margin:0 0 5px 10px;
}

.vertical-right .widget-in-content {
	display:block;
	float:none;
	width:100%;
}

/* in place horizontal */
.sb-horizontal-1col {
	display:block;
	width:100%;
	clear:both;
	margin-top:5px;
	margin-bottom:10px;
}

.sb-horizontal-1col .widget-in-content:first-child {
	display:block;
	float:left;
	width:100%;
	margin-left:0px;
}

.sb-horizontal-1col .widget-in-content {
	display:block;
	width:100%;
	margin:0;
}


/* in place horizontal 2 col*/
.sb-horizontal-2col-left {
	display:block;
	float:left;
	width:100%;
	clear:both;
	margin-top:5px;
	margin-bottom:10px;
}

.sb-horizontal-2col-left .widget-in-content {
	display:block;
	float:left;
	width:48%;
}


/* in place horizontal 3 col left */
.sb-horizontal-3col-left {
	display:block;
	float:left;
	width:100%;
	clear:both;
	margin-top:5px;
	margin-bottom:10px;
}



.sb-horizontal-3col-left .widget-in-content {
	display:block;
	float:left;
	width:31%;
}

/* in place horizontal 2 col right*/
.sb-horizontal-2col-right {
	display:block;
	float:right;
	width:100%;
	clear:both;
	margin-top:5px;
	margin-bottom:10px;
}

.sb-horizontal-2col-right .widget-in-content {
	display:block;
	float:right;
	width:48%;
}

/* in place horizontal 3 col right*/
.sb-horizontal-3col-right {
	display:block;
	float:right;
	width:100%;
	clear:both;
	margin-top:5px;
	margin-bottom:10px;
}

.sb-horizontal-3col-right .widget-in-content {
	display:block;
	float:right;
	width:31%;
}
<?php $c = ob_get_contents();ob_end_clean();?>
</style>
<?php
		return $c;
	}		

}
?>