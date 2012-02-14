<?php

class TaskList
{
	
	function __construct()
	{
	}
	
	function insertTaskList($data){
		$model = self::jsonDecodePostKey('model');
		


		$taskListID = self::createTaskListPost($model);

		if ($taskListID > 0){
			$model->id = $taskListID;
			update_post_meta($taskListID, '_panalo_activity_model', $model);
			update_post_meta($taskListID, '_panalo_contact_id', $_POST['postID']);
		}
		
		$result = self::createResult('Task List saved successfully', true, array('model'=>$model) );
		self::returnJson($result);
	}
	
	// Creates an TaskList post.
	// We use this post as the TaskList id and attach meta to that.
	function createTaskListPost($model){
		
		$activity = array(
			'post_content' => 'x',
			'post_status' => 'publish',
			'post_type' => "panalo_activity"
	             );
	
	
		switch ($model->type){
			case "call":
				$activity['post_title'] = 'Call Log';
			break;
		}
		
		$taskListID = wp_insert_post($activity);
		
		return $taskListID;
	}
		
	function updateTaskList($data){
		$model = self::jsonDecodePostKey('model');
		

		if ($taskListID > 0){
			$taskListID = $model->id;
			update_post_meta($taskListID, '_panalo_activity_model', $model);
		}
		
		$activityTypeIds = array(
			'call'=>144,
			'revenue'=>146,
			'tasklist'=>148,
			'task'=>149,
			'scheduledemail'=>147
			);
		
		
		$result = self::createResult('TaskList updates successfully.', true, array('model'=>$model) );
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