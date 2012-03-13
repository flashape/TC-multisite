<?php
/**
* 
*/
class AutocompleteUtils
{
	
	function __construct()
	{
	}
	
	public function createContactModel($json = true)
	{
		$autoCompleteContacts = get_posts(array('post_type' => 'tc_contact', 'numberposts'=>-1));

		$contactAutocompleteItems = array();

		foreach ($autoCompleteContacts as $contact) {
			$contactName = $contact->post_title;
			$contactID = $contact->ID;
			$contactAutocompleteItems[] = array('label'=>$contactName, 'value'=>$contactID);
		}
		
		$contactAutocompleteItems[] = array('label'=>'Test Contact 1', 'value'=>"1");
		$contactAutocompleteItems[] = array('label'=>'Rich Rodecker', 'value'=>"2");
		$contactAutocompleteItems[] = array('label'=>'Tom Brady', 'value'=>"3");
		
		return $json ? json_encode($contactAutocompleteItems) : $contactAutocompleteItems;
		
		
	}
	
	public static function createProductModel($json = true){
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
}

?>