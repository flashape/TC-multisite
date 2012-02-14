<?php
/**
* 
*/

require_once(WP_PLUGIN_DIR.'/tastyclouds-crm/americommerce/AmeriCommerceDatabaseIO.php');       

class AmericommerceService
{
	public $ns = "http://www.americommerce.com";
	public $user = 'rich';
	public $pass = 'M1ll10n$';
	public $token = '2da0e279-c42f-48aa-afe6-ed3195221f08';
	
	public $api;
	
	function __construct()
	{
		//Body of the Soap Header. 
		$headerbody = array('UserName' => $this->user, 
		                    'Password' => $this->pass, 
		                    'SecurityToken'=>$this->token);
		
		
		$this->api = new AmeriCommerceDatabaseIO(array('trace'=>1));




		//$orderID = 10008;//$_GET['orderID'];

		//Create Soap Header.        
		$header = new SOAPHeader($this->ns, 'AmeriCommerceHeaderInfo', $headerbody);        

		//set the Headers of Soap Client. 
		$this->api->__setSoapHeaders($header);
	}
	
	
	public function getAllProducts()
	{
		$products = array();
		
		$categoryGetByNameResponse = $this->api->Category_GetByName(new Category_GetByName('Cotton Candy'));
		
		$categoryGetByNameResponse->Category_GetByNameResult;
		$categoryFillProductCollectionResponse = $this->api->Category_FillProductCollection(new Category_FillProductCollection($categoryGetByNameResponse->Category_GetByNameResult));


		$productColTrans = $categoryFillProductCollectionResponse->Category_FillProductCollectionResult->ProductColTrans;
		// //var_dump($productColTrans);
		// //echo "number producs : ".count($productColTrans->ProductTrans);
		$productTransArray = $productColTrans->ProductTrans;
		
		foreach ($productTransArray as $productTrans) {
			$product = array();
			$product['itemID'] = $productTrans->itemID->Value;
			$product['itemName'] = $productTrans->itemName;
			$product['price'] = $productTrans->price->Value;
			$product['categoryID'] = $productTrans->catID->Value;
			$product['itemNr'] = $productTrans->itemNr;
			$product['sizeHeight'] = $productTrans->sizeHeight;
			$product['sizeLength'] = $productTrans->sizeLength;
			$product['sizeWidth'] = $productTrans->sizeWidth;
			$product['weight'] = $productTrans->weight->Value;
			
			$product['variantGroups'] = $this->geVariantGroupsForProduct($productTrans);
			$products[] = $product;
		}
		
		
		//do_dump($products);
		
		
		
		//echo $this->api->__getLastResponse();
		//$productsJson = json_encode($object); 
		add_option('tc_crm_product_order_items', $products, '', 'no');
		return $products;
	}
	
	private function geVariantGroupsForProduct($productTrans){
		
		if(!$productTrans->HasVisibleVariants){
			return array();
		}
		
		$productFillListedCollectionsResponse = $this->api->Product_FillListedCollections(new Product_FillListedCollections($productTrans, 'PRODUCTVARIANTCOL,PRODUCTPRICINGCOL'));
		
		$productVariantColTrans = $productFillListedCollectionsResponse->Product_FillListedCollectionsResult->ProductVariantColTrans->ProductVariantTrans;

		//  Create an array to hold a collection of variant group info items
		$variantGroupsById = array();
		
		// loop through the list of available product variations to get the unique group ids
		foreach ($productVariantColTrans as $productVariationTrans) {
			
			$variantGroupID = $productVariationTrans->groupID->Value;
			
			if(!array_key_exists($variantGroupID, $variantGroupsById)){
				$variantGroupsById[$variantGroupID] = array('groupID'=>$variantGroupID, 'items'=>array());
			}
			
			// store the product variant in the items array for this group id
			$variationInfo = array();
			$variationInfo['itemID'] = $productVariationTrans->itemID->Value;
			$variationInfo['variantID'] = $productVariationTrans->variantID->Value;
			$variationInfo['groupID'] = $productVariationTrans->groupID->Value;
			$variationInfo['shortDesc'] = $productVariationTrans->shortDesc;
			$variationInfo['priceOffset'] = $productVariationTrans->priceOffset->Value;
			$variationInfo['offsetType'] = $productVariationTrans->offsetType;
			
			$variantGroupsById[$variantGroupID]['items'][] = $variationInfo;
		}
		
		foreach ($variantGroupsById as $variantGroupID => $variantGroupInfo) {
			$productVariantGroupGetByKeyResponse = $this->api->ProductVariantGroup_GetByKey (new ProductVariantGroup_GetByKey($variantGroupID));
			$groupName = $productVariantGroupGetByKeyResponse->ProductVariantGroup_GetByKeyResult->groupName;
			$displayType = $productVariantGroupGetByKeyResponse->ProductVariantGroup_GetByKeyResult->DisplayType;
			$variantGroupsById[$variantGroupID]['groupName'] = $groupName;
			$variantGroupsById[$variantGroupID]['displayType'] = $displayType;
		}
		
		return $variantGroupsById;
	}
}
?>