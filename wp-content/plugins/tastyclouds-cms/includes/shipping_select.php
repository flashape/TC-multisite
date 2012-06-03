<div style="width:400px;">
	<?php
		$count = 1;
		foreach($shippingCharges as $shippingCharge){
			echo '<label class="shipmentTypeRadio"><input class="shipmentTypeRadioInput" type="radio" id="shipmentTypeRadioInput1" name="shipmentType" value="'.$shippingCharge['serviceType'].'"  />'.$shippingCharge['label'].' <span class="shippingAmount">($'.$shippingCharge['amount'].')</span></label><br />';
			$count++;
		}
	?>
</div>