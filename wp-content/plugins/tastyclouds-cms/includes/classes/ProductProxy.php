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
}

?>