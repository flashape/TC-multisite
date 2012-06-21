<?php
/**
* 
*/
class ProductProxy
{
	
	function __construct()
	{
		
	}
	
	public function getProductByID($productID)
	{
		$productPost = get_post($productID);
		
		if(!$productPost){
			return null;
		}
		
		$productModel = array();
		$productModel['type'] = 'tc_products';
		$productModel['productName'] = $productPost->post_title;
		$productModel['productID'] = $productID;
		$productModel['sku'] = get_post_meta( $productID, '_tc_product_details_sku', true );
		$productModel['price'] = get_post_meta( $productID, '_tc_product_details_price', true );
		$productModel['width'] = get_post_meta( $productID, '_tc_product_details_width', true );
		$productModel['height'] = get_post_meta( $productID, '_tc_product_details_height', true );
		$productModel['length'] = get_post_meta( $productID, '_tc_product_details_length', true );
		$productModel['weight'] = get_post_meta( $productID, '_tc_product_details_weight', true );
		
		//error_log(var_export($productModel, 1));
			
		return $productModel;
	}
		
	public function getServiceByID($productID)
	{
		$servicePost = get_post($productID);
		$serviceModel = array();
		$serviceModel['type'] = 'tc_service';
		$serviceModel['productName'] = $servicePost->post_title;
		$serviceModel['productID'] = $productID;
		$serviceDetails = get_post_meta( $productID, 'service_details', true );
		// error_log("service details:");
		// error_log(var_export($serviceDetails, 1));
		
		$serviceModel['default_hours'] = $serviceDetails['default_hours'];
		$serviceModel['default_servings'] = $serviceDetails['default_servings'];

		
		// error_log(var_export($serviceModel, 1));
			
		return $serviceModel;
	}
	
	public static function getVariationItemByID($variationItemID){
		return get_post_meta($variationItemID, '_variation_item_model', true);
	}
	
	
	
	// generates the autocomplete data used in the product autosuggest input in the admin order input form.
	public static function createAutocompleteModel($json = true){
		$productPosts = get_posts(array('post_type' => 'tc_products', 'numberposts'=>-1, 'meta_key'=>'_tc_product_details_autocompleteEnabled', 'meta_value'=>'on'));

		$autocompleteItems = array();

		foreach ($productPosts as $product) {
			$productName = $product->post_title;
			$productID = $product->ID;
			// $postMeta = get_post_custom($productID);
			// error_log(var_export($postMeta, 1));
			$productItem = array('label'=>$productName, 'value'=>$productID, 'type'=>'tc_products');

			$productItem['sku'] = get_post_meta( $productID, '_tc_product_details_sku', true );
			$productItem['price'] = get_post_meta( $productID, '_tc_product_details_price', true );
			$productItem['width'] = get_post_meta( $productID, '_tc_product_details_width', true );
			$productItem['height'] = get_post_meta( $productID, '_tc_product_details_height', true );
			$productItem['length'] = get_post_meta( $productID, '_tc_product_details_length', true );
			$productItem['weight'] = get_post_meta( $productID, '_tc_product_details_weight', true );

			$variations = ProductVariationRulesAjax::getVariationsForProduct($productID, true);

			//$variation is array: array('title'=>$title, 'label'=>$variationLabel, 'id'=>$variationPostID, 'p2p_id'=>$p2p_id);

			foreach($variations as &$variation){
				$variation['items'] = VariationItemAjax::getItemsForVariation($variation['id'], true);
				$variation['rules'] = ProductVariationRulesAjax::getRulesForVariation($productID, $variation['id'], $variation['p2p_id'], true);
			}

			$productItem['variations'] = $variations;

			$autocompleteItems[] = $productItem;
		}


		$servicePosts = get_posts(array('post_type' => 'tc_service', 'numberposts'=>-1));
		foreach ($servicePosts as $service) {
			$serviceName = $service->post_title;
			$serviceID = $service->ID;
			$serviceItem = array('label'=>$serviceName, 'value'=>$serviceID, 'type'=>'tc_service');
			$serviceItem['defaults'] = get_post_meta( $serviceID, 'service_details', true );

			$autocompleteItems[] = $serviceItem;
		}
		
		return $json ? json_encode($autocompleteItems) : $autocompleteItems;
		
	}
	
	public static function getAdjustedPriceFromRules($itemPrice, $variationItemID, $p2pid, $rules){
		// $variationRule['id']
		// $variationRule['offsetAmount'] 
		// $variationRule['offsetType'] 
		// $variationRule['selectedItems'] // array
		// $variationRule['ruleName']
		// $variationRule['variationID']
		// $variationRule['variationToProduct_p2p_id']
		
		
		$variationRule;
		foreach($rules as $rule){
			if ($rule->variationToProduct_p2p_id == $p2pid){
				$variationRule = $rule;
				break;
			}
		}
		
		
		if ( in_array( $variationItemID, $variationRule->selectedItems) ){
			//process rule
			$offsetAmount = $variationRule->offsetAmount; 
			$offsetType = $variationRule->offsetType;
		
			switch($offsetType){
				case "total":
					//charge specified price for item, overriding any rules
					$itemPrice  = $offsetAmount;
					break;
				break;

				case "addPercent":
					// add specified percent to item
					$percent = ($offsetAmount/100);
					$amountToAdd = $itemPrice * $percent;
					$itemPrice += $amountToAdd;
				break;

				case "addDollars":
					// add specified dollar amount to item
					$itemPrice += $offsetAmount;
				break;


				case "addDollarsOnce":
					// add specified dollar amount to item, if another product row has not done so already
					//TODO:  add map for "once" items already calculated
					$itemPrice += $offsetAmount;
				break;
			}
		}
		
		return $itemPrice;
		
	}
	
	
}

?>