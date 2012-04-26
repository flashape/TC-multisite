<?php

class ProductVariationRulesAjax
{
	
	function __construct()
	{
		
	}
	
	function addVariationToProduct(){
		//$model = self::jsonDecodePostKey('model');
		$productID = $_POST['productID'];
		$variationID = $_POST['variationID'];
		$variationLabel = $_POST['variationLabel'];
		//$title = $_POST['title'];
		
		
		
		$p2p_id = p2p_type( "variation_to_product" )->connect( $variationID, $productID, array(
			'variationLabel' => $variationLabel
		));
		
		
		$model = array('title'=>$variationLabel, 'label'=>$variationLabel, 'id'=>$variationID, 'p2p_id'=>$p2p_id, 'itemCount'=>'');
		
		
		p2p_update_meta($p2p_id, 'variationToProduct_p2p_id', $p2p_id);
		
		//self::checkNotifications($model);
		
		$result = self::createResult('Variation assigned successfully', true, array('variationLabel'=>$variationLabel, 'model'=>$model) );
		self::returnJson($result);
	}	
	
	
	function updateVariationLabel(){
		$model = self::jsonDecodePostKey('model');
		// $productID = $_POST['productID'];
		// $variationID = $_POST['variationID'];
		$variationLabel = $_POST['variationLabel'];
		
		$p2p_id = $model->p2p_id;
				
		p2p_update_meta($p2p_id, 'variationLabel', $variationLabel);
		//$variationPosts[] = array('title'=>$title, 'label'=>$variationLabel, 'id'=>$variationPostID, 'p2p_id'=>$p2p_id);
		
		$model->label = $variationLabel;
		
		//self::checkNotifications($model);
		
		$result = self::createResult('Variation label updated successfully', true, array('variationLabel'=>$variationLabel, 'model'=>$model) );
		self::returnJson($result);
	}
			
	function updateVariationItemCount(){
		$model = self::jsonDecodePostKey('model');
		// $productID = $_POST['productID'];
		// $variationID = $_POST['variationID'];
		$itemCount = $_POST['variationItemCount'];				
		
		$p2p_id = $model->p2p_id;
		
		p2p_update_meta($p2p_id, 'itemCount', $itemCount);
		
		$model->itemCount = $itemCount;
		
		
		$result = self::createResult('Variation item count updated successfully', true, array('variationItemCount'=>$itemCount, 'model'=>$model) );
		self::returnJson($result);
	}
		
	function removeVariationFromProduct(){
		$model = self::jsonDecodePostKey('model');
		
		// $connections = p2p_get_connections( 'variation_to_product', array('to'=>$productID, 'from'=>$variationID, 'fields'=>'p2p_id') );
		// $p2p_id = $connections[0];
		
		p2p_delete_connection($model->p2p_id);
		
		
		//self::checkNotifications($model);
		
		$result = self::createResult('Variation removed successfully', true );
		self::returnJson($result);
	}
		
	function insertVariationRule($data){
		$model = self::jsonDecodePostKey('model');
		//$selectedItems = self::jsonDecodePostKey('selectedItems');
		$productID = $_POST['productID'];
		$variationID = $_POST['variationID'];
		$variationToProduct_p2p_id = $_POST['variationToProduct_p2p_id'];
		
		$variationRuleID = self::createVariationRulePost($model);
		
		if ($variationRuleID > 0){
			$model->id = $variationRuleID;
			
			update_post_meta($variationRuleID, '_variation_rule_model', json_encode($model));			
			
			$rule_p2p_id = p2p_type( "variation_rule_to_product" )->connect( $variationRuleID, $productID, array(
				'variationID' => $variationID,
				'variationToProduct_p2p_id' => $variationToProduct_p2p_id,
			));
			
		}
		
		
		//self::checkNotifications($model);
		
		$result = self::createResult('VariationRule saved successfully', true, array('model'=>$model, 'rule_p2p_id'=>$rule_p2p_id) );
		self::returnJson($result);
	}
	
	// Creates an VariationRule post.
	// We use this post as the variationItem id and attach meta to that.
	function createVariationRulePost($model){
		
		$variationRule = array(
			'post_content' => 'x',
			'post_status' => 'publish',
			'post_type' => "tc_variation_rule",
			'post_title' => 'Variation Rule'
			             );
		
		
		$variationRuleID = wp_insert_post($variationRule);
		
		return $variationRuleID;
	}
		
	function updateVariationRule($data){
		$model = self::jsonDecodePostKey('model');
		
		$variationItemID = $model->id;
		update_post_meta($variationItemID, '_variation_rule_model', json_encode($model));
		
		//self::checkNotifications($model);
		
		$result = self::createResult('VariationRule updated successfully.', true, array('model'=>$model) );
		self::returnJson($result);
	}
			
	function deleteVariationRule($data){
		$model = self::jsonDecodePostKey('model');
		
		
		$variationItemID = $model->id;
		wp_delete_post($variationItemID);
		
		$result = self::createResult('VariationRule deleted successfully.', true, array('model'=>$model) );
		self::returnJson($result);
	}
	

	
	private function checkNotifications($model){
		
	}
	
		
	public function getVariationsForProduct($productID = null, $returnArray = false){
		if (empty($productID)){
			$productID = $_POST['productID'];
		}
		
		$connections = p2p_get_connections( 'variation_to_product', array('to'=>$productID, 'fields'=>'*') );
		
		$variationPosts = array();
		
		if (count($connections) == 0){
			if ($returnArray){
				return $variationPosts;
			}else{
				$result = self::createResult("No Variations found for productID $productID", true, array('variations'=>$variationPosts));
			}
		}else{
			$variationPosts = self::getVariationPostsArray($connections);
			if ($returnArray){
				return $variationPosts;
			}else{
				$result = self::createResult("Variations found for productID $productID", true, array('variations'=>array_values($variationPosts)) );
				
			}
			
		}
		

		self::returnJson($result);
	}
	
	private function getVariationPostsArray($connections){
		
		$variationPosts = array();
		
		foreach($connections as $p2pConn){
			
			$variationPost = get_post($p2pConn->p2p_from);
			$title = $variationPost->post_title;
			$variationPostID = $variationPost->ID;
			$p2p_id = $p2pConn->p2p_id;
			$variationLabel = p2p_get_meta($p2pConn->p2p_id, 'variationLabel', true);
			$variationItemCount = p2p_get_meta($p2pConn->p2p_id, 'itemCount', true);
			$variationPosts[] = array('title'=>$title, 'label'=>$variationLabel, 'id'=>$variationPostID, 'p2p_id'=>$p2p_id, 'itemCount'=>$variationItemCount);
				
		}
		
		return $variationPosts;
	}
	
	
	public function getRulesForVariation($productID = null, $variationID = null, $variationToProduct_p2p_id = null, $returnArray = false){
		if (empty($productID)){
			$productID = $_POST['productID'];
			$variationID = $_POST['variationID'];
			$variationToProduct_p2p_id = $_POST['variationToProduct_p2p_id'];
		}
		
		
		$connected = new WP_Query( array(
			'connected_type' => 'variation_rule_to_product',
			'connected_items' => $productID,
			'connected_meta' => array( 'variationID' => $variationID, 'variationToProduct_p2p_id'=>$variationToProduct_p2p_id )
		) );
		
		//error_log(var_export($connected->posts, 1));
		
		$variationRules = array();
		
		foreach ($connected->posts as $rulePost){
			$variationRuleID = $rulePost->ID;
			$variationRules[(int)$variationRuleID] = json_decode(get_post_meta($variationRuleID, '_variation_rule_model', true));
			
		}
		
		
		ksort($variationRules, SORT_NUMERIC);
		
		if($returnArray){
			return $variationRules;
		}else{
			$result = self::createResult("Variation Rules found for productID: $productID", true, array('rules'=>array_values($variationRules)) );
			self::returnJson($result);			
		}

		
		
		
		// $connections = p2p_get_connections( 'variation_to_product', array('to'=>$productID, 'fields'=>'*') );
		// 
		// $variationPosts = array();
		// 
		// if (count($connections) == 0){
		// 	$result = self::createResult("No Variations found for productID $productID", true, array('variations'=>$variationPosts));
		// }else{
		// 	
		// 	$connectedIDs = array();
		// 	foreach($connections as $p2pConn){
		// 		
		// 		$variationPost = get_post($p2pConn->p2p_from);
		// 		$title = $variationPost->post_title;
		// 		$variationPostID = $variationPost->ID;
		// 		
		// 		$variationLabel = p2p_get_meta($p2pConn->p2p_id, 'variationLabel', true);
		// 		
		// 		
		// 		$variationPosts[] = array('title'=>$title, 'label'=>$variationLabel, 'id'=>$variationPostID);
		// 			
		// 	}
		// 	
		// 	$result = self::createResult("Variations found for productID $productID", true, array('variations'=>array_values($variationPosts)) );
		// 	
		// }
		

	}
	
			

	
	
	private static function jsonDecodePostKey($key){
		return json_decode(stripslashes($_POST[$key]));
	}

	
	private static function createResult($message = '', $isSuccess = true, $arrayToMerge = null){
		
		$result = array('success'=>$isSuccess, 'message'=>$message);
		if (!empty($arrayToMerge)){
			
			$result = array_merge($result, $arrayToMerge);
			

			
			
		}

		
		return $result;
	}
	
	
	
	
	
	private static function returnJson($toReturn){
		
		echo json_encode($toReturn);
		// always use die() when echoing content for ajax requests
		die();
	}
	
	
	
}	
?>