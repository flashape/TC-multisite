<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
	

	
?>
<div class="my_meta_control">

	<?php $mb->the_field('status'); ?>
	<p>
	<label>Status : </label>
	<select name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" >
	
	<?php
		global $panalo_options;
		$order_statuses = $panalo_options['orders']['order_statuses'];
		
		$statuslist = '';

		foreach ($order_statuses as $key => $status) {
			
			if ($mb->have_value('status')){
				$selected =	$mb->get_the_select_state($key);
			}else{
				$selected = selected($key, $panalo_options['orders']['default_order_status'], false);
			}
			
			
	        $statuslist .= '<option value="'.$key.'" '.$selected.'>'. $status .'</option>';
		}
		
		echo $statuslist;
	?>
		
	</select>
	</p>

	<p>
	<?php $mb->the_field('assignee');
		$blogusers = get_users();
		
		$userlist = '';
		
		

		foreach ($blogusers as $user) {
			$selected = '';
			
			if ($mb->have_value('assignee')){
				$selected =	$mb->get_the_select_state($user->ID);
			}else{
				$selected = selected($user->ID, $panalo_options['orders']['new_order_assignee'], false);
			}
			
			
			
	        $userlist .= '<option value="'.$user->ID.'" '.$selected.'>'. $user->user_nicename .'</option>';
		}
	
	?>
	
	<label>Assigned To : </label>
	<select name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>">
		<?php echo $userlist ?>
	</select>
	</p>
	<a href="#" id="saveOrderButton" class="button-primary alignright">Save Order</a>
	<div style="clear:both" ></div> 


	
</div>

