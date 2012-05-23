<div style="width:400px;">
	<h3>Item successfully added to cart.</h3>
	<p>Your cart contains <?php echo count($cart['items'])?> items.</p>
	<p>What would you like to do now?</p>
	
	<div style="float:right;margin-left:10px">
	<?php echo do_shortcode('[maxbutton id="3"]') ?>
	</div>
	
	<div style="float:right;">
		<?php echo do_shortcode('[maxbutton id="4"]') ?>
	</div>

</div>
