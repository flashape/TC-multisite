<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/

class CUSTWIDGETShortcode {
	function CUSTWIDGETShortcode(){
		add_shortcode('custom-widget-area', array(&$this,'shortcode_handler'));
		//--rtf editor button
		add_action('init', array(&$this,'add_cwa_button') );
		add_filter( 'tiny_mce_version', array(&$this,'refresh_mce'));
		add_action('admin_footer',array(&$this,'admin_footer'));
		
		if(is_admin()){
			wp_enqueue_script('jquery');
			wp_enqueue_script('jquery-ui-core');
			wp_enqueue_script('jquery-ui-dialog'); 
			wp_enqueue_style('jquery-ui-dialog'); 		
		}
	}
	
	function admin_footer(){
		global $wp_registered_sidebars;
?>
<div id="cwa-dialog" style="display:none;" title="<?php _e('Insert Widget Area','custside')?>">
<?php if(count($wp_registered_sidebars)>0): ?>

<form>
	<div class="cwa-description"><?php _e('Choose the sidebar you want to insert in the content and customize optional html','custside')?></div>

	<div class="cwa-input">
		<label><?php _e('Custom Widget Area:','custside')?></label>
		<select id="cwa-sidebar-option">
		<?php foreach($wp_registered_sidebars as $id => $row): ?>
			<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
		<?php endforeach?>
		</select>
	</div>
	
	<div class="cwa-input">
		<label><?php _e('Default styles:','custside')?></label>
		<select id="cwa-sidebar-style">
			<option value=""><?php _e("--choose--",'custside')?></option>
			<option value="vertical-left" selected="selected"><?php _e("1 Column Left",'custside')?></option>
			<option value="vertical-right"><?php _e("1 Column Right",'custside')?></option>
			<option value="sb-horizontal-1col"><?php _e("1 Column (100% width)",'custside')?></option>
			<option value="sb-horizontal-2col-left"><?php _e("Horizontal 2 Columns Left",'custside')?></option>
			<option value="sb-horizontal-3col-left"><?php _e("Horizontal 3 Columns Left",'custside')?></option>
			<option value="sb-horizontal-2col-right"><?php _e("Horizontal 2 Columns Right",'custside')?></option>
			<option value="sb-horizontal-3col-right"><?php _e("Horizontal 3 Columns Right",'custside')?></option>
		</select>
	</div>
	
	<div style="clear:both;"></div>
	
	<div id="cwa-options-cont">
		<div class="advanced-settings toggle-option">
			<h3 class="cwa-option-title"><?php _e('Advanced settings','custside')?><span><?php _e('Click to open','custside')?></span></h3>
			<div class="option-content">
				<div class="cwa-input">
					<label><?php _e('Before Title','custside')?></label>
					<input type="text" id="cwa-before-title" value="<?php echo htmlentities('<h2>')?>" />	
				</div>
				<div class="cwa-input">
					<label><?php _e('After Title','custside')?></label>
					<input type="text" id="cwa-after-title" value="<?php echo htmlentities('</h2>')?>" />	
				</div>
				<div class="cwa-input">
					<label><?php _e('Before widget','custside')?></label>
					<input type="text" id="cwa-before-widget" value="<?php echo htmlentities('<div id="%1$s" class="widget-in-content %2$s">')?>" />	
				</div>
				<div class="cwa-input">
					<label><?php _e('After widget','custside')?></label>
					<input type="text" id="cwa-after-widget" value="<?php echo htmlentities('</div>')?>" />	
				</div>		
				<div class="cwa-input">
					<label><?php _e('Before sidebar','custside')?></label>
					<input type="text" id="cwa-before-sidebar" value="<?php echo htmlentities('<div class="sidebar-in-content">')?>" />	
				</div>
				<div class="cwa-input">
					<label><?php _e('After sidebar','custside')?></label>
					<input type="text" id="cwa-after-sidebar" value="<?php echo htmlentities('</div>')?>" />	
				</div>				
				<div class="clearer"></div>
			</div>

		</div>
	</div>
	
</form>
<?php else: ?>
<p>Add some sidebars before proceding. <a href="<?php echo admin_url('/options-general.php?page=custom_widget_area-options');?>">Click Here</a></p>
<?php endif ?>
</div>
<script>
jQuery(document).ready(function($){
	$(".cwa-option-title").click(function(){
		$(this).toggleClass('open').next().slideToggle();
	});	
});</script>
<script>
jQuery(document).ready(function($){
	$('#cwa-sidebar-style').val('');
	$('#cwa-sidebar-style').change(function(){
		var _s = $(this).val();
		$('#cwa-before-sidebar').val('<div class="sidebar-in-content '+_s+'">');
		$('#cwa-after-sidebar').val('</div>');		
	});
});
</script>
<?php	
	}
	
	function add_cwa_button(){
   		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     		return;
   		if ( get_user_option('rich_editing') == 'true') {
     		global $cwa_plugin;
			if(1==intval($cwa_plugin->get_option('disable_editor_icon')))
				return;
			add_filter('mce_external_plugins', array(&$this,'add_cwa_tinymce_plugin') );
     		add_filter('mce_buttons', array(&$this,'register_cwa_button') );
   		}
	}
	
	function add_cwa_tinymce_plugin($plugin_array){
		$plugin_array['custom_widget_area'] = CUSTWIDGET_URL.'js/editorplugin/cwa_plugin.js';
		return $plugin_array;
	}
	
	function register_cwa_button($buttons){
		array_push($buttons, "|", "custom_widget_area");
		return $buttons;
	}
	
	function refresh_mce($ver) {
	  	return $ver++;
	}
	
	function shortcode_handler($atts,$content=null,$code=""){
		extract(shortcode_atts(array(
			'id' => false,
			'before_widget'=> '<div id="%1$s" class="widget-in-content %2$s">',
			'after_widget'=> '</div>',
			'before_title'=> '<h2>',
			'after_title'=> '</h2>',
			'before_sidebar'=>'<div class="sidebar-in-content">',
			'after_sidebar'=>'</div>'
		), $atts));

		
//		extract(shortcode_atts(array(
//			'id' => false,
//			'before_widget'=> '',
//			'after_widget'=> '',
//			'before_title'=> '',
//			'after_title'=> '',
//			'before_sidebar'=>'',
//			'after_sidebar'=>''
//		), $atts));

		global $wp_registered_sidebars,$wp_registered_widgets;
		if(false===$sidebar_name)
			return;
		$content = '';
		if ( is_active_sidebar( $id ) && isset($wp_registered_sidebars[$id])){
			$backup = $wp_registered_sidebars[$id];
			foreach(array('before_widget','after_widget','before_title','after_title') as $prop){
				$wp_registered_sidebars[$id][$prop]=$this->_rep($$prop);
			}	
			ob_start();			
			echo $this->_rep($before_sidebar);
			dynamic_sidebar( $id );
			echo $this->_rep($after_sidebar);
			$content = ob_get_contents();
			ob_end_clean();
			$wp_registered_sidebars[$id]=$backup;
		}
		return $content;
	}
	
	function _rep($str){
		return rawurldecode($str);
	}
	
}
?>