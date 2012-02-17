<?php

class VariationItemAjax
{
	
	function __construct()
	{
	}
	
	function insertVariationItem($data){
		$model = self::jsonDecodePostKey('model');
		
		$variationItemID = self::createVariationItemPost($model);

		if ($variationItemID > 0){
			$model->id = $variationItemID;
			
			update_post_meta($variationItemID, '_variation_item_model', json_encode($model));			
			
			p2p_type( "variation_item_to_variation" )->connect( $variationItemID, $_POST['postID'] );
			
			
		}
		
		
		self::checkNotifications($model);
		
		$result = self::createResult('VariationItem saved successfully', true, array('model'=>$model) );
		self::returnJson($result);
	}
	
	// Creates an VariationItem post.
	// We use this post as the variationItem id and attach meta to that.
	function createVariationItemPost($model){
		$post_title = $model->title;
		
		$variationItem = array(
			'post_content' => 'x',
			'post_status' => 'publish',
			'post_type' => "tc_variation_item",
			'post_title' => $post_title
	             );

		
		$variationItemID = wp_insert_post($variationItem);
		
		return $variationItemID;
	}
		
	function updateVariationItem($data){
		$model = self::jsonDecodePostKey('model');
		
		$variationItemID = $model->id;
		update_post_meta($variationItemID, '_variation_item_model', json_encode($model));

		self::checkNotifications($model);
		
		$result = self::createResult('VariationItem updated successfully.', true, array('model'=>$model) );
		self::returnJson($result);
	}
			
	function deleteVariationItem($data){
		$model = self::jsonDecodePostKey('model');
		

		$variationItemID = $model->id;
		wp_delete_post($variationItemID);
		
		$result = self::createResult('VariationItem deleted successfully.', true, array('model'=>$model) );
		self::returnJson($result);
	}
	

	
	private function checkNotifications($model){

	}
	
		
	public function getItemsForVariation(){
		$thePostID = $_POST['postID'];
		
		$connectedIDs = p2p_get_connections( 'variation_item_to_variation', array('to'=>$thePostID, 'fields'=>'p2p_from') );
		
		$variationItems = array();
		
		foreach($connectedIDs as $variationItemID){
			$variationItems[(int)$variationItemID] = json_decode(get_post_meta($variationItemID, '_variation_item_model', true));
		}
		ksort($variationItems, SORT_NUMERIC);
		$result = self::createResult("Variation Items found for $postType", true, array('variationItems'=>array_values($variationItems)) );
		self::returnJson($result);
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