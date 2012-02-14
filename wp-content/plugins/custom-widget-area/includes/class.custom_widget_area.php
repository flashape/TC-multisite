<?php


class custom_widget_area {
	var $capability;
	var $show_ui=true;
	var $prefix='side';
	function custom_widget_area($args=array()){
		$defaults = array(
			'capability'			=> 'manage_cwa',
			'show_ui'				=> true
		);
		foreach($defaults as $property => $default){
			$this->$property = isset($args[$property])?$args[$property]:$default;
		}		
		if(current_user_can('manage_options')||current_user_can($this->capability)){
			add_action('init',array(&$this,'init'),100);	
			add_action('admin_head-post.php', array(&$this,'admin_head'));
			add_action('admin_head-post-new.php', array(&$this,'admin_head'));		
			add_action('admin_menu', array(&$this, 'post_meta_box') );	
			add_action('save_post', array(&$this,'save_post') );	
			add_action('wp_ajax_cwa-widgets-order', array(&$this,'cwa_widgets_order'));	
			
		}
	}
/* start ajax */
	function check_ajax(){
		if(current_user_can('manage_options')||current_user_can($this->capability)){
			return true;
		}else{
			return false;
		}
	}

/* end ajax */
	function save_post($post_id){
		if ( !wp_verify_nonce( @$_POST['cwa-nonce'], 'cwa-nonce' )) {
			return $post_id;
		}
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
			return $post_id;
		// Check permissions
     
		//add_post_meta
		if( !(current_user_can('manage_options')||current_user_can($this->capability) ) ){
			return $post_id;
		}
	
		foreach(array('cwa-position'=>'') as $field => $default){
			$value = isset($_REQUEST[$field])?$_REQUEST[$field]:$default;
			update_post_meta($post_id,$field,$value);
		}
	
		global $cwa_plugin;
		$options = get_option($cwa_plugin->options_varname);
		$options = is_array($options)?$options:array();
				
		$taxonomies = isset($options['taxonomies'])?$options['taxonomies']:array();
		$taxonomies[] = 'category';
		$options['taxonomy_sidebars'] = isset($options['taxonomy_sidebars'])&&is_array($options['taxonomy_sidebars'])?$options['taxonomy_sidebars']:array();

		$sidebar = get_post_meta($post_id,'sidebar',true);
		$sidebar = trim($sidebar)==''?$this->prefix.$post_id:$sidebar;
		
		if(count($options['taxonomy_sidebars'])>0){
			foreach($options['taxonomy_sidebars'] as $taxonomy => $term_ids){
				if(count($term_ids)>0){
					foreach($term_ids as $term_id => $array_of_sidebars){
						if(count($array_of_sidebars)>0){
							$new_array_of_sidebars = array();
							foreach($array_of_sidebars as $side){
								if($side==$sidebar)
									continue;
								$new_array_of_sidebars[]=$side;	
							}
							$options['taxonomy_sidebars'][$taxonomy][$term_id]=$new_array_of_sidebars;
						}
					}
				}
			}
		}

		foreach($taxonomies as $taxonomy){
			$the_terms = get_the_terms($post_id, $taxonomy);
			if(is_array($the_terms)&&count($the_terms)>0){
				foreach($the_terms as $term){
					if(!isset($options['taxonomy_sidebars'][$term->taxonomy]))
						$options['taxonomy_sidebars'][$term->taxonomy]=array();
					if(!isset($options['taxonomy_sidebars'][$term->taxonomy][$term->term_id]))
						$options['taxonomy_sidebars'][$term->taxonomy][$term->term_id]=array();	
					$options['taxonomy_sidebars'][$term->taxonomy][$term->term_id][]=$sidebar;
				}
			}			
		}
//error_log(print_r($options['taxonomy_sidebars'],true),3,ABSPATH.'/abc.log');		
		$result = update_option($cwa_plugin->options_varname,$options);
	}
	function cwa_widgets_order(){
		if(false===$this->check_ajax()){
			die('-1');
		}
		unset( $_POST['savewidgets'], $_POST['action'] );
	
		$current_sidebar = $_POST['current_sidebar'];
		// save widgets order for all sidebars
		if ( is_array($_POST['sidebars']) ) {
			$sidebars = wp_get_sidebars_widgets();
			foreach ( $_POST['sidebars'] as $key => $val ) {
				if($key!=$current_sidebar)continue;//only apply changes to current sidebar.
				$sb = array();
				if ( !empty($val) ) {
					$val = explode(',', $val);
					foreach ( $val as $k => $v ) {
						if ( strpos($v, 'widget-') === false )
							continue;
	
						$sb[$k] = substr($v, strpos($v, '_') + 1);
					}
				}
				$sidebars[$key] = $sb;
			}
			wp_set_sidebars_widgets($sidebars);
			die('1');
		}
	
		die('-1');	
	}

	function admin_head(){
		global $post,$sidebars_widgets;
		if($post->post_type!='cwa')
			return;
		wp_print_styles('widgets');
		wp_print_scripts('cwa-widget');
		require_once(ABSPATH . 'wp-admin/includes/widgets.php');
		register_sidebar(array(
			'name' => __('Inactive Widgets','cwa'),
			'id' => 'wp_inactive_widgets',
			'description' => '',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
		
		$sidebars_widgets = wp_get_sidebars_widgets();
		if ( empty( $sidebars_widgets ) )
			$sidebars_widgets = wp_get_widget_defaults();		
		
		$this->retrieve_widgets();
?>
<style>
#cwa-widgets {
z-index:1;
}
#edit-slug-box {display:none;}
div.widgets-sortables {
background-color:transparent;
}
div.widget-liquid-right {
	width:100%;
	z-index:1;
}
.widget-liquid-right .widgets-sortables {
	border:none;
}
</style>
<script type='text/javascript'>
jQuery(document).ready(function($){
	$(".wrap h2").html("");
	$(".wrap h2").html("<?php _e('Add New Custom Widget Area','cwa') ?>");
	$("#edit-slug-box").hide();
});
var post_id = '<?php echo $post->ID?>';
</script>
<?php			
	}
	
	function post_meta_box(){
		add_meta_box( 'cwa-settings', __('Custom Widget Area Settings','cwa'),	array( &$this, 'form_template' ), 'cwa', 'normal', 'high');
		add_meta_box( 'cwa-widgets', __('Widgets','cwa'),	array( &$this, 'form_widgets' ), 'cwa', 'side', 'core');
		add_meta_box( 'cwa-available-widgets', __('Available Widgets','cwa'),	array( &$this, 'form_available_widgets' ), 'cwa', 'normal', 'high');
		add_meta_box( 'cwa-inactive-widgets', __('Inactive Widgets','cwa'),	array( &$this, 'form_inactive_widgets' ), 'cwa', 'normal', 'high');
		//add_meta_box( 'cwa-css', __('Additional CSS','cwa'),	array( &$this, 'form_template_css' ), 'cwa', 'normal', 'high');
	}	
	
	function form_widgets($post){
?>
<input type="hidden" name="cwa-nonce" id="cwa-nonce" value="<?php echo wp_create_nonce( 'cwa-nonce' )?>" />
<?php
		global $sidebars_widgets;	
		$sidebars_widgets = wp_get_sidebars_widgets();
		if ( empty( $sidebars_widgets ) )
			$sidebars_widgets = wp_get_widget_defaults();
			
		global $wp_registered_sidebars;
		$sidebar = $this->get_sidebar_from_post_id($post->ID);
		if(!isset($wp_registered_sidebars[$sidebar])){
			_e('<p>The Custom Widget Area have to be published before you can add widgets.</p>','cwa');
			return;
		}
		
		wp_nonce_field( 'save-sidebar-widgets', '_wpnonce_widgets', false ); 
		
		//$registered_sidebar = $wp_registered_sidebars[$sidebar];
		ob_start();
		foreach($wp_registered_sidebars as $curr_sidebar => $registered_sidebar){		
?>
<?php if($curr_sidebar==$sidebar): ?>
<input id="current_sidebar" type="hidden" name="current_sidebar" value="<?php echo $curr_sidebar?>" />
<?php endif; ?>
<div class="widget-liquid-right" style="<?php echo $curr_sidebar==$sidebar?'':'display:none;'?>">
	<div id="current-widgets" class="widgets-holder-wrap">
		<?php wp_list_widget_controls( $curr_sidebar ); ?>
	</div>
</div>
<?php	
		}
?>
<div class="clear"></div>
<?php		
		$content = ob_get_contents();
		ob_end_clean();
		$content = preg_replace("/<form[^>]*>/i","<div class=\"widget-form\">",$content);
		$content = str_replace("</form>","</div>",$content);	
		echo $content;
	}	
	
	function form_available_widgets($post){
		global $wp_registered_sidebars;
		$sidebar = $this->get_sidebar_from_post_id($post->ID);
		if(!isset($wp_registered_sidebars[$sidebar])){
			_e('<p>After you publish the Custom Widget Area, you will be able to add widgets from this panel.</p>','cwa');
			return;
		}	
		ob_start();
?>
	<div id="available-widgets" class="widgets-holder-wrap">
		<div class="widget-holder">
		<p class="description"><?php _e('Drag widgets from here to the Widgets metabox to activate them. Drag widgets back here to deactivate them and delete their settings.','cwa'); ?></p>
		<div id="widget-list">
		<?php wp_list_widgets(); ?>
		</div>
		<br class='clear' />
		</div>
	</div>	
<?php
		$content = ob_get_contents();
		ob_end_clean();
		$content = preg_replace("/<form[^>]*>/i","<div class=\"widget-form\">",$content);
		$content = str_replace("</form>","</div>",$content);		
		echo $content;	
	}
	
	function form_inactive_widgets($post){
		global $wp_registered_sidebars;
		$sidebar = $this->get_sidebar_from_post_id($post->ID);
		if(!isset($wp_registered_sidebars[$sidebar])){
			_e('<p>After you publish the Custom Widget Area, you will be able to add widgets from this panel.</p>','cwa');
			return;
		}	
		ob_start();	
?>
	<div id="inactive-widgets" class="widgets-holder-wrap">
		<div class="widget-holder inactive">
		<p class="description"><?php _e('Drag widgets here to remove them from the sidebar but keep their settings.','cwa'); ?></p>
		<?php wp_list_widget_controls('wp_inactive_widgets'); ?>
		<br class="clear" />
		</div>
	</div>
<?php	
		$content = ob_get_contents();
		ob_end_clean();
		$content = preg_replace("/<form[^>]*>/i","<div class=\"widget-form\">",$content);
		$content = str_replace("</form>","</div>",$content);		
		echo $content;	
	}
	
	function form_template($post){
		global $cwa_plugin;
?>
<div id="cwa-settings" class="cwa-settings-<?php echo $post_id?>">
	<div class="description">
		<p>The position is only needed when displaying the custom widget area in a category or custom taxonomy page.</p>
	</div>
	<div class="cwa-fieldset">
		<label>Postion</label>
		<select name="cwa-position">
			<option value=""><?php _e('--choose--','cwa')?></option>
<?php if(count($cwa_plugin->theme_sidebars)>0):foreach($cwa_plugin->theme_sidebars as $sidebar => $s):?>		
			<option <?php echo $sidebar==get_post_meta($post->ID,'cwa-position',true)?'selected="selected"':''?> value="<?php echo $sidebar?>"><?php echo $s['name']?></option>
<?php endforeach;endif;?>
		</select>
	</div>
</div>
<?php
	}
	
	function form_template_css($post){
?>
<textarea class="css-extra" name="cwa-extra"><?php echo get_post_meta($post->ID,'cwa-extra',true)?></textarea>
<p>
<?PHP _e('You can use this field to add custom CSS. This will allow you to e.g. adjust the placement, padding, margin etc. of the custom widget area.','cwa')?>
</p>
<?php	
	}
		
	function init($install=false){
		$labels = array(
			'name' 				=> __('Custom Widget Area','cwa'),
			'singular_name' 	=> __('Custom Widget Area','cwa'),
			'add_new' 			=> __('Add new Custom Widget Area','cwa'),
			'edit_item' 		=> __('Edit Custom Widget Area','cwa'),
			'new_item' 			=> __('New Custom Widget Area','cwa'),
			'view_item'			=> __('View Custom Widget Area','cwa'),
			'search_items'		=> __('Search Custom Widget Area','cwa'),
			'not_found'			=> __('No Custom Widget Area found','cwa'),
			'not_found_in_trash'=> __('No Custom Widget Area found in trash','cwa')
		);
		
		register_post_type('cwa', array(
			'label' => __('Custom Widget Area','cwa'),
			'labels' => $labels,
			'public' => true,
			'show_ui' => ($install)?true:($this->show_ui?true:false),
			'capability_type' => 'post',
			'hierarchical' => true,
			'rewrite' => false,
			'query_var' => false,
			'supports' => array('title','page-attributes'),
			'exclude_from_search' => false,
			//'menu_position' => 5,
			'show_in_nav_menus' => false,
			'taxonomies' => array('category')
		));	
		global $cwa_plugin;
		if(is_array($cwa_plugin->options['taxonomies'])&&count($cwa_plugin->options['taxonomies'])>0){
			foreach($cwa_plugin->options['taxonomies'] as $taxonomy){
				register_taxonomy_for_object_type($taxonomy, 'cwa');
			}
		}		
	}
	
	function get_sidebar_from_post_id($post_id){
		$sidebar = get_post_meta($post_id,'sidebar',true);
		return trim($sidebar)==''?$this->prefix.$post_id:$sidebar;
	}
	
	function retrieve_widgets() {
		global $wp_registered_widget_updates, $wp_registered_sidebars, $sidebars_widgets, $wp_registered_widgets;
	
		$_sidebars_widgets = array();
		$sidebars = array_keys($wp_registered_sidebars);
	
		unset( $sidebars_widgets['array_version'] );
	
		$old = array_keys($sidebars_widgets);
		sort($old);
		sort($sidebars);
	
		if ( $old == $sidebars )
			return;
	
		// Move the known-good ones first
		foreach ( $sidebars as $id ) {
			if ( array_key_exists( $id, $sidebars_widgets ) ) {
				$_sidebars_widgets[$id] = $sidebars_widgets[$id];
				unset($sidebars_widgets[$id], $sidebars[$id]);
			}
		}
	
		// if new theme has less sidebars than the old theme
		if ( !empty($sidebars_widgets) ) {
			foreach ( $sidebars_widgets as $lost => $val ) {
				if ( is_array($val) )
					$_sidebars_widgets['wp_inactive_widgets'] = array_merge( (array) $_sidebars_widgets['wp_inactive_widgets'], $val );
			}
		}
	
		// discard invalid, theme-specific widgets from sidebars
		$shown_widgets = array();
		foreach ( $_sidebars_widgets as $sidebar => $widgets ) {
			if ( !is_array($widgets) )
				continue;
	
			$_widgets = array();
			foreach ( $widgets as $widget ) {
				if ( isset($wp_registered_widgets[$widget]) )
					$_widgets[] = $widget;
			}
			$_sidebars_widgets[$sidebar] = $_widgets;
			$shown_widgets = array_merge($shown_widgets, $_widgets);
		}
	
		$sidebars_widgets = $_sidebars_widgets;
		unset($_sidebars_widgets, $_widgets);
	
		// find hidden/lost multi-widget instances
		$lost_widgets = array();
		foreach ( $wp_registered_widgets as $key => $val ) {
			if ( in_array($key, $shown_widgets, true) )
				continue;
	
			$number = preg_replace('/.+?-([0-9]+)$/', '$1', $key);
	
			if ( 2 > (int) $number )
				continue;
	
			$lost_widgets[] = $key;
		}
	
		$sidebars_widgets['wp_inactive_widgets'] = array_merge($lost_widgets, (array) $sidebars_widgets['wp_inactive_widgets']);
		wp_set_sidebars_widgets($sidebars_widgets);
	}
}

?>