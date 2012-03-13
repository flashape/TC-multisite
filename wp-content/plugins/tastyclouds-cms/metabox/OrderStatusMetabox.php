<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
	

	
?>
<div class="tc_metabox">

	<?php $mb->the_field('status'); ?>
	<p>
	<label>Status : </label>
	<select name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" >
		<option value="1" <?php $mb->the_select_state('1'); ?>>New</option>
		<option value="2" <?php $mb->the_select_state('2'); ?>>Pending Processing</option>
		<option value="3" <?php $mb->the_select_state('3'); ?>>Approved, Pending Shipping</option>
		<option value="4" <?php $mb->the_select_state('4'); ?>>Shipped</option>
		<option value="5" <?php $mb->the_select_state('5'); ?>>Credit Declined</option>
		<option value="6" <?php $mb->the_select_state('6'); ?>>Cancel Order</option>
		<option value="7" <?php $mb->the_select_state('7'); ?>>Awaiting Payment</option>
		<option value="8" <?php $mb->the_select_state('8'); ?>>Placeholder</option>
		<option value="9" <?php $mb->the_select_state('9'); ?>>Ready To Ship</option>
		<option value="10"<?php $mb->the_select_state('10'); ?>>Packed, Ready For Label</option>	
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
				//$selected = selected($user->ID, $panalo_options['orders']['new_order_assignee'], false);
				
				$selected = selected($user->ID, "3", false);
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

