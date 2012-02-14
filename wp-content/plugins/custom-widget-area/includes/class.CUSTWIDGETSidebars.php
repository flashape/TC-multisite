<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class CUSTWIDGETSidebar {
	var $name;
	var $id='undefined';
	var $before_widget 	= '<div id="%1$s" class="block area-widget1 %2$s"><div class="whitebox">';
	var $after_widget	= '</div></div>';
	var $before_title	= '<h3>';
	var $after_title	= '</h3>';
	var $default		= true;
	var $settings;
	function CUSTWIDGETSidebar($s){	
		$this->settings = $s;	
		$this->id 		= $s->id==''?$this->get_id_from_name($s->name):$s->id;
		$this->id		= false===$this->id?'undefined':$this->id;
		$this->name 	= $this->set_name($s->name);
		$this->default 	= true;
	}
	
	function set_name($name){
		if(is_object($name)){
			foreach(array('before_widget','after_widget','before_title','after_title') as $property){
				$this->$property = property_exists($name,$property)? $name->$property : $this->$property ;
			}
			return property_exists($name,'name')? $name->name : $this->get_name_from_id($this->id) ;
		}else{
			return $name==''?$this->get_name_from_id($this->id):$name;
		}
	}
	
	function get_array(){
		return (array)$this;
	}
	function get_name_from_id($id){
		if(trim($id)!=''){
			$name = str_replace('-',' ',$id);
			return ucfirst($name);
		}
		return false;
	}
	function get_id_from_name($name){
		if(trim($name)!=''){
			$id = str_replace('  ',' ',$name);
			$id = str_replace('  ',' ',$id);
			return str_replace(' ','-',strtolower($id));		
		}
		return false;
	}
} 
 
class CUSTWIDGETSidebars {
	var $sidebars = array();
	var $id;
	var $plugin;
	var $theme_sidebars = array();
	var $prefix = 'side';
	var $sidebars_widgets = false;
	function CUSTWIDGETSidebars($args=array()){
		global $cwa_plugin;
		$this->id = $cwa_plugin->id;
		//custom sidebars:	
		$custom = $cwa_plugin->add_custom_widgets();	
		if(count($custom)>0){
			foreach($custom as $row){
				$this->Add($row);			
			}
		}			
		//register sidebars
		add_action('wp_loaded',array(&$this,'setup_theme'));
		//modifying page and posts screens:
		add_action('admin_menu', array(&$this, 'post_meta_box') );
		add_action('save_post', array(&$this,'save_post') );			
		add_filter('sidebars_widgets',array(&$this,'sidebars_widgets'),1000);
	}

	function sidebars_widgets($sidebars_widgets){
		global $cwa_plugin;
		$theme_sidebars = is_array($this->theme_sidebars)?array_keys($this->theme_sidebars):false;
		if(false===$theme_sidebars||count($sidebars_widgets)==0)
			return $sidebars_widgets;

		foreach($cwa_plugin->configurables  as $tab){
			$tab = (object)$tab;
			$fn = $tab->function;
			if(function_exists($fn)){
				if($fn()){					
					foreach($theme_sidebars as $index){
						$name = sprintf('%s_%s',$tab->prefix,$index);
						$sidebar = $cwa_plugin->get_option( $name );
						$sidebar = trim($sidebar)==''?false:$sidebar;
						if(false===$sidebar)
							continue;						

						if(array_key_exists($sidebar,$sidebars_widgets)){
							//$sidebars_widgets[$index] = $sidebars_widgets[$sidebar];
							$sidebars_widgets[$index] = $this->get_sidebar_widgets_array($sidebars_widgets,$sidebar);
						}else if($sidebar=='no-display'){												
							$sidebars_widgets[$index] = array();												
						}						
					}
				}
			}
		}	
		
		if(is_archive()){
			//---handle taxonomy
			global $wp_query;
			$cat = $wp_query->get_queried_object();
			$taxonomy_sidebars = $cwa_plugin->get_option('taxonomy_sidebars',array());
			//handle specific taxonomies and categories.
			if(property_exists($cat,'term_id')&&property_exists($cat,'taxonomy')){
				if(isset($taxonomy_sidebars[$cat->taxonomy])){
					if(isset($taxonomy_sidebars[$cat->taxonomy][$cat->term_id])){
						$done_positions=array();
						foreach($taxonomy_sidebars[$cat->taxonomy][$cat->term_id] as $side){
							$position = get_post_meta($cwa_plugin->side_post_ids[$side],'cwa-position',true);							
							if(array_key_exists($position,$sidebars_widgets)){
								if(in_array($position,$done_positions))continue;
								$done_positions[]=$position;
								$sidebars_widgets[$position] =  $this->get_sidebar_widgets_array($sidebars_widgets,$side);
							}
						}
					}
				}					
			}
			//todo handle authors
		}
		//---handle specific page widget
		if(is_page()||is_single()){	
			global $wp_query;
			$post = $wp_query->get_queried_object();	
			//---------------
			$taxonomies = isset($cwa_plugin->options['taxonomies'])?$cwa_plugin->options['taxonomies']:array();
			$taxonomies[] = 'category';			
			foreach($taxonomies as $taxonomy){
				$the_terms = get_the_terms($post->ID, $taxonomy);
				if(is_array($the_terms)&&count($the_terms)>0){
					$taxonomy_sidebars = $cwa_plugin->get_option('taxonomy_sidebars',array());
					$term = array_shift($the_terms);		
					if(isset($taxonomy_sidebars[$term->taxonomy])){
						if(isset($taxonomy_sidebars[$term->taxonomy][$term->term_id])){					
							$sides = $taxonomy_sidebars[$term->taxonomy][$term->term_id];
							if(count($sides)>0){
								$side=array_shift($sides);						
								$position = get_post_meta($cwa_plugin->side_post_ids[$side],'cwa-position',true);	
								$sidebars_widgets[$position] =  $this->get_sidebar_widgets_array($sidebars_widgets,$side);							
							}
						}
					}
				}				
			}
			//---------------
			$smap = get_post_meta($post->ID,'custside-smap',true);
			if(is_array($smap)&&count($smap)>0){
				foreach($theme_sidebars as $index){		
					if(array_key_exists($index,$smap)){					
						if($smap[$index]=='no-display'){
							$sidebars_widgets[$index]=array();
						}else{
							if(array_key_exists($smap[$index],$sidebars_widgets)){
								//$sidebars_widgets[$index] = $sidebars_widgets[$smap[$index]];
								$sidebars_widgets[$index] =  $this->get_sidebar_widgets_array($sidebars_widgets,$smap[$index]);
							}
						}
					}
				}			
			}
		}

		return $sidebars_widgets;
	}
	
	function get_sidebar_widgets_array($sidebars_widgets,$sidebar){
		global $cwa_plugin;
		$sidebars_widgets[$sidebar]=isset($sidebars_widgets[$sidebar])?$sidebars_widgets[$sidebar]:array();
		if(isset($cwa_plugin->side_post_ids[$sidebar])&&$cwa_plugin->side_post_ids[$sidebar]>0){
			$args = array(
				'post_type'=>'cwa',
				'post_status'=>'publish',
				'post_parent'=>$cwa_plugin->side_post_ids[$sidebar],
				'orderby'=>'menu_order',
				'order'=>'ASC'
			);
			$children = get_children($args);

			if(is_array($children)&&count($children)>0){
				foreach($children as $post){
					$side = get_post_meta($post->ID,'sidebar',true);
					$side = trim($side)==''?$this->prefix.$post->ID:$side;
					if(isset($sidebars_widgets[$side])&&!empty($sidebars_widgets[$side])){
						$sidebars_widgets[$sidebar] = array_merge($sidebars_widgets[$sidebar],$sidebars_widgets[$side]);	
					}
				}
			}
		}
		return $sidebars_widgets[$sidebar];
	}
	
	function setup_theme (){
		global $cwa_plugin,$wp_registered_sidebars;
		$cwa_plugin->theme_sidebars = $this->theme_sidebars = $wp_registered_sidebars; 
		$this->register_sidebars();		
	}
	
	function Add($settings){
		$s = new CUSTWIDGETSidebar($settings);
		if(!array_key_exists($s->id,$this->sidebars)){
			$this->sidebars[$s->id]=$s;
		}
	}	
	
	function register_sidebars(){
		foreach($this->sidebars as $s){
			register_sidebar( (array)$s );
		}
	}	
	
	//--Add meta post to page editor
	function post_meta_box(){
		global $cwa_plugin;
		add_meta_box( 'custside-custom-sidebar', __('Page sidebars','cwa'),	array( &$this, 'form_template' ), 'page', 'normal', 'high');
		add_meta_box( 'custside-custom-sidebar', __('Page sidebars','cwa'),	array( &$this, 'form_template' ), 'post', 'normal', 'high');
		$post_types = is_array($cwa_plugin->options['post_types'])&&count($cwa_plugin->options['post_types'])>0?$cwa_plugin->options['post_types']:false;
		if(false!=$post_types){
			foreach($post_types as $post_type){	
				add_meta_box( 'cwa-postmeta', __('Page sidebars','cwa'),	array( &$this, 'form_template' ), $post_type, 'normal', 'high');
			}		
		} 		
	}	
	function form_template($post){
		
		echo '<input type="hidden" name="custsidenonce" id="custsidenonce" value="' . wp_create_nonce( 'custsidenonce' ) . '" />';
?><table><?php		

		$smap = get_post_meta($post->ID,'custside-smap',true);
		$smap = is_array($smap)?$smap:array();

		global $wp_registered_sidebars;
		$wp_registered_sidebars = is_array($wp_registered_sidebars)?$wp_registered_sidebars:array();
		if(count($wp_registered_sidebars)==0){
			echo __('There are no registered sidebars.','cwa');
		}else{
			foreach($wp_registered_sidebars as $id => $sidebar){	
				if(array_key_exists($id,$this->sidebars))
					continue;
			
				$sidebar = (object)$sidebar;
				
				echo "<tr>";
				echo "<td>".$sidebar->name."</td>";
				echo "<td>";
				echo sprintf("<select id=\"smap_%s\" name=\"smap[%s]\">",$sidebar->id,str_replace('-','::',$sidebar->id));
				$checked = !isset($smap[$sidebar->id])||$smap[$sidebar->id]==$sidebar->id?'selected="1"':'';
				echo "<option value=\"\" $checked>Default</option>";
				$checked = isset($smap[$sidebar->id])&&$smap[$sidebar->id]=='no-display'?'selected="1"':'';
				echo "<option value=\"no-display\" $checked>".__("No widget (theme default)",'cwa')."</option>";
				foreach($this->sidebars as $s){
					if($s->id==$sidebar->id)
						continue;
					$checked = isset($smap[$sidebar->id])&&$smap[$sidebar->id]==$s->id?'selected="1""':'';	
					echo sprintf("<option value=\"%s\" %s>%s</option>",$s->id,$checked,$s->name);
				}
				echo "</select>";
				echo "</td>";
				echo "</tr>";				
			}		
		}

?></table><?php			
	}		
	
	function save_post($post_id){

		if ( !wp_verify_nonce( @$_POST['custsidenonce'], 'custsidenonce' )) {
			return $post_id;
		}
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
			return $post_id;
		// Check permissions

		if ( 'page' == $_POST['post_type'] ) {
		  if ( !current_user_can( 'edit_page', $post_id ) )
		    return $post_id;
		} else {
		  if ( !current_user_can( 'edit_post', $post_id ) )
		    return $post_id;
		}

		if(isset($_POST['smap'])&&count($_POST['smap'])>0){

			$smap = array();
			foreach($_POST['smap'] as $s => $r){
				$s = str_replace('::','-',$s);
				if(trim($r)=='')
					continue;
				$smap[$s]=$r;
			}
		
			$res = update_post_meta($post_id,'custside-smap',$smap);		
		}
	}		
}
?>