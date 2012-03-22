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
	
	
}

?>