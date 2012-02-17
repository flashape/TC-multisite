<div class="tc_metabox">
	<div id="submitErrorBox" class="form-invalid"> 
	  <ul></ul> 
	</div>
	
	<label>Group:</label>
	
	<?php $mb->the_field('variantGroup'); ?>
	<select name="<?php $mb->the_name(); ?>">

	</select>
	
	Amount:
	<?php $mb->the_field('offsetAmount'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="cmb_text_small"/>
	
	
	
	<?php $mb->the_field('priceOffsetType'); ?>
	<select name="<?php $mb->the_name(); ?>">
		<option value="total"<?php $mb->the_select_state('total'); ?>>Fixed Price</option>
		<option value="addPercent"<?php $mb->the_select_state('addPercent'); ?>>+ Percent</option>
		<option value="addDollars"<?php $mb->the_select_state('addDollars'); ?>>+ Dollars</option>
		<option value="addDollarsOnce"<?php $mb->the_select_state('addDollarsOnce'); ?>>+ Dollars Once</option>
		<option value="minusPercent"<?php $mb->the_select_state('minusPercent'); ?>>- Percent</option>
		<option value="minusDollars"<?php $mb->the_select_state('minusDollars'); ?>>- Dollars</option>
		<option value="minusDollarsOnce"<?php $mb->the_select_state('minusDollarsOnce'); ?>>- Dollars Once</option>
	</select>
	
	SKU Extenstion:
	<?php $mb->the_field('variantExtension'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="cmb_text_small"/>

	<p>
	<a href="#" id="saveVariationButton" class="button-primary">Save Variation</a>
	</p>
	
	<div style="clear:both" ></div>
</div>