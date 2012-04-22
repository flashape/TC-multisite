<?php
class AjaxUtils
{
	
	function __construct()
	{
		# code...
	}
	
	


		
	
	public static function jsonDecodePostKey($key){
		return json_decode(stripslashes($_POST[$key]));
	}

	
	public static function createResult($message = '', $isSuccess = true, $arrayToMerge = null){
		
		$result = array('success'=>$isSuccess, 'message'=>$message);
		if (!empty($arrayToMerge)){
			$result = array_merge($result, $arrayToMerge);
		}

		return $result;
	}
	
	public static function returnJson($toReturn){
		
		echo json_encode($toReturn);
		// always use die() when echoing content for ajax requests
		die();
	}
	
	
}

?>