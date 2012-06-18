<?php

//TODO:  Sanitize $_GET['oid'], disallow direct loading of this page

$orderID = $_GET['oid'];
$cartID = get_post_meta( $orderID, '_cartID', true);
$serializedCart = get_post_meta( $orderID, '_tc_cart', true);
error_log("page_thankyou, cartID : $cartID");

$cart = unserialize(base64_decode($serializedCart));


//global $cartID;
//global $post;
$orderSummary = OrderProxy::getOrderSummary($cart);


foreach ($orderSummary['lines']['line'] as $lineItem){
	$row = '<tr>';
		$row  .= '<td style="text-align:left">'.$lineItem['quantity'].'</td>';
		$row  .= '<td style="text-align:left">'.$lineItem['name'].'</td>';
		$row  .= '<td style="text-align:left">'.$lineItem['description'].'</td>';
		$itemPrice = ($lineItem['unit_cost'] * $lineItem['quantity'] );
		$row  .= '<td style="text-align:left">'.number_format($itemPrice, 2, '.', '').'</td>';
	$row  .= '</tr>';
	
	$summaryRows .= $row;
}

if (isset($orderSummary['discount'])){
	$row = '<tr>';
		$row  .= '<td style="text-align:left">'.$lineItem['quantity'].'</td>';
		$row  .= '<td style="text-align:left">'.$lineItem['name'].'</td>';
		$row  .= '<td style="text-align:left">Discount</td>';
		$row  .= '<td style="text-align:left">'.$orderSummary['discount'].'</td>';
	$row  .= '</tr>';
}

$payments = OrderProxy::getPaymentsForOrder($orderID);
foreach ($payments as $paymentModel){
	$row = '<tr>';
		$row  .= '<td style="background-color:#CCCCCC;text-align:left"></td>';
		$row  .= '<td style="background-color:#CCCCCC;text-align:left">Payment ('.$paymentModel['paymentType'].')</td>';
		$row  .= '<td style="background-color:#CCCCCC;text-align:left">'.$paymentModel['paymentNote'].'</td>';
		$row  .= '<td style="background-color:#CCCCCC;text-align:left">'.number_format($paymentModel['paymentAmount'], 2, '.', '').'</td>';
	$row  .= '</tr>';
	
	$summaryRows .= $row;
}

$contactID = OrderProxy::getContactIDForOrder($orderID);

//$contact = ContactProxy::getContactByID($contactID);

$savedBillingAddressID = OrderProxy::getBillingAddressIDForOrder($orderID);
$savedShippingAddressID = OrderProxy::getShippingAddressIDForOrder($orderID);

$billingAddress = null;
$shippingAddress = null;

if (!empty($savedBillingAddressID)){
	$billingAddress = ContactProxy::getAddressByID($savedBillingAddressID);
	
	$billingSummary = '';
	$billingFirstName = $billingAddress['firstName'];
	$billingLastName = $billingAddress['lastName'];
	$billingCompany = $billingAddress['company'];
	$billingAddressLine1 = $billingAddress['addressLine1'];
	$billingAddressLine2 = $billingAddress['addressLine2'];
	$billingCity = $billingAddress['city'];
	$billingState = $billingAddress['state'];
	$billingZip = $billingAddress['zip'];
	
	$billingSummary .= "<b>Billing Address:</b><br />\n";
	$billingSummary .= "$billingFirstName<br />\n";
	$billingSummary .= "$billingLastName<br />\n";
	$billingSummary .= "$billingCompany<br />\n";
	$billingSummary .= "$billingAddressLine1<br />\n";
	$billingSummary .= "$billingAddressLine2<br />\n";
	$billingSummary .= "$billingCity<br />\n";
	$billingSummary .= "$billingState<br />\n";
	$billingSummary .= "$billingZip<br />\n";
	
	
	$billingSummaryRow = '<tr>';
		$billingSummaryRow  .= '<td style="text-align:left" colspan="4">'.$billingSummary.'</td>';
		// $billingSummaryRow  .= '<td style="background-color:#CCCCCC;text-align:left"></td>';
		// $billingSummaryRow  .= '<td style="background-color:#CCCCCC;text-align:left"></td>';
		// $billingSummaryRow  .= '<td style="background-color:#CCCCCC;text-align:left"></td>';
	$billingSummaryRow  .= '</tr>';
	$summaryRows .= $billingSummaryRow;
}

if (!empty($savedShippingAddressID)){
	$shippingAddress = ContactProxy::getAddressByID($savedShippingAddressID);

	$shippingFirstName = $shippingAddress['firstName'];
	$shippingLastName = $shippingAddress['lastName'];
	$shippingCompany = $shippingAddress['company'];
	$shippingAddressLine1 = $shippingAddress['addressLine1'];
	$shippingAddressLine2 = $shippingAddress['addressLine2'];
	$shippingCity = $shippingAddress['city'];
	$shippingState = $shippingAddress['state'];
	$shippingZip = $shippingAddress['zip'];
	
	$shippingSummary = '';
	$shippingSummary .= "<b>Shipping Address:</b><br />\n";
	$shippingSummary .= "$shippingFirstName<br />\n";
	$shippingSummary .= "$shippingLastName<br />\n";
	$shippingSummary .= "$shippingCompany<br />\n";
	$shippingSummary .= "$shippingAddressLine1<br />\n";
	$shippingSummary .= "$shippingAddressLine2<br />\n";
	$shippingSummary .= "$shippingCity<br />\n";
	$shippingSummary .= "$shippingState<br />\n";
	$shippingSummary .= "$shippingZip<br />\n";
	
	$shippingSummaryRow = '<tr>';
		$shippingSummaryRow  .= '<td style="text-align:left" colspan="4">'.$shippingSummary.'</td>';
		// $shippingSummaryRow  .= '<td style="background-color:#CCCCCC;text-align:left"></td>';
		// $shippingSummaryRow  .= '<td style="background-color:#CCCCCC;text-align:left"></td>';
		// $shippingSummaryRow  .= '<td style="background-color:#CCCCCC;text-align:left"></td>';
	$shippingSummaryRow  .= '</tr>';
	$summaryRows .= $shippingSummaryRow;
	
}
// TODO: is this supposed to be here?
//$shippingSummary = '';


	


?>




<?php get_header(); ?>

<div id="page" class="clearfix">

	<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
	<div>
		<table id="orderSummaryTable">
			<tbody>
				<?php echo $summaryRows ?>
			</tbody>
		</table>
</div>
<?php get_footer(); ?>