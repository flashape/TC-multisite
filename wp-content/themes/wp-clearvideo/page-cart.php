<?php


$cartKey = CartAjax::hasCartInSession();
error_log("page_cart, cartKey : $cartKey");

if ($cartKey !== FALSE){
	$cartID = str_replace('cart_', '', $cartKey);
	$cart = CartAjax::getCartById( $cartID );

	
}

$orderSummary = OrderProxy::getOrderSummary($cart);

$orderTotal = 0;

$summaryRows = '';

foreach ($orderSummary['lines']['line'] as $lineItem){
	$row = '<tr>';
		$row  .= '<td style="text-align:left">'.$lineItem['name'].' <input class="cartItemID" type="hidden" value="'.$lineItem['cartItemID'].'"</td>';
		$row  .= '<td style="text-align:left">'.$lineItem['description'].'</td>';
		$row  .= '<td style="text-align:left">'.$lineItem['unit_cost'].'</td>';
		$row  .= '<td style="text-align:left"><input type="text" class="quantity" value="'.$lineItem['quantity'].'" style="width:20px;" maxlength="2" /> <button class="updateQuantityButton">Update</button> <button class="removeProductButton">Remove</button></td>';
		$itemPrice = ($lineItem['unit_cost'] * $lineItem['quantity'] );
		$row  .= '<td style="text-align:left">'.number_format($itemPrice, 2, '.', '').'</td>';
	$row  .= '</tr>';
	
	$summaryRows .= $row;
	
	$orderTotal += $itemPrice;
}




?>




<?php get_header(); ?>

<div id="page" class="clearfix">

	<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
	<div>
		<?php if (!CartAjax::isEmpty($cart) ) : ?>
		
		<table id="orderItemsTable">
			<tr>
				<th class="row-title" style="text-align:left">Item</th>
				<th style="text-align:left">Description</th>
				<th style="text-align:left">Price</th>
				<th style="text-align:left">Quantity</th>				
				<th style="text-align:right">Total</th>
			</tr>					
			<?php echo $summaryRows ?>
			
			<tr id="totalRow">
				<td colspan="4" style="text-align:right">Order Total</td>
				<td style="text-align:right" id="totalField">$<?php echo number_format($orderTotal, 2, '.', '')?></td>
			</tr>

		</table>
		<?php else : ?>
			Your cart is currently empty.
		<?php endif; ?>
		
</div>



<?php get_footer(); ?>