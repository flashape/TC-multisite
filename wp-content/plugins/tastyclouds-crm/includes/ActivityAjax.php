<?php

class ActivityAjax
{
	
	function __construct()
	{
	}
	
	function insertActivity($data){
		$model = self::jsonDecodePostKey('model');
		
		$activityID = self::createActivityPost($model);

		if ($activityID > 0){
			$model->id = $activityID;
			
			update_post_meta($activityID, '_panalo_activity_model', json_encode($model));
			
			
			$postType = $_POST['post_type'] == 'panalo_project' ? 'project' : 'contact';
			$p2pConnectionType = "activity_to_{$postType}";
			
			
			
			
			//update_post_meta($activityID, '_panalo_contact_id', $_POST['postID']);
			
			p2p_type( $p2pConnectionType )->connect( $activityID, $_POST['postID'], array(
				'date' => current_time('mysql'),
				'activity_type' => $model->type,
				
			) );
			
			self::updateActivityMetaByType($activityID, $model);
			
		}
		
		//hardcoded map of model.type values to term ids.
		$activityTypeIds = array(
			'call'=>144,
			'revenue'=>146,
			'followup'=>151,
			'tasklist'=>148,
			'task'=>149,
			'scheduledemail'=>147,
			'note'=>150
			);
		
		
		wp_set_object_terms( $activityID, $activityTypeIds[$model->type], 'panalo_activity_type' );
		
		self::checkNotifications($model);
		
		$result = self::createResult('Activity saved successfully', true, array('model'=>$model) );
		self::returnJson($result);
	}
	
	// Creates an Activity post.
	// We use this post as the activity id and attach meta to that.
	function createActivityPost($model){
		
		$activity = array(
			'post_content' => 'x',
			'post_status' => 'publish',
			'post_type' => "panalo_activity"
	             );
	
	
		switch ($model->type){
			case "call":
				$activity['post_title'] = 'Call Log';
			break;
			case "revenue":
				$activity['post_title'] = 'Revenue Opportunity';
			break;
			case "followup":
				$activity['post_title'] = 'Follow-Up';
			break;
			case "tasklist":
				$activity['post_title'] = 'Task List';
			break;
			case "task":
				$activity['post_title'] = 'Task';
			break;
			case "scheduledemail":
				$activity['post_title'] = 'Scheduled Email';
			break;
			case "note":
				$activity['post_title'] = 'Note';
			break;
		}
		
		$activityID = wp_insert_post($activity);
		
		return $activityID;
	}
		
	function updateActivity($data){
		$model = self::jsonDecodePostKey('model');
		
		$activityID = $model->id;
		update_post_meta($activityID, '_panalo_activity_model', json_encode($model));

		self::checkNotifications($model);
		
		$result = self::createResult('Activity updates successfully.', true, array('model'=>$model) );
		self::returnJson($result);
	}
			
	function deleteActivity($data){
		$model = self::jsonDecodePostKey('model');
		

		$activityID = $model->id;
		wp_delete_post($activityID);
		
		$result = self::createResult('Activity deleted successfully.', true, array('model'=>$model) );
		self::returnJson($result);
	}
	
	private function updateActivityMetaByType($activityID, $model){
		switch($model->type){
			case 'task':
				update_post_meta($activityID, '_panalo_task_list_id', $model->taskListId);
			break;
			
		}
	}
	
	private function checkNotifications($model){
		switch ($model->type){
			case "call":
				
			break;
			
			case "revenue":
				
			break;
			
			case "followup":
				if ($model->sendEmailNow){
					panalo_send_followup_assigned_email($model->assignee, $model,  $_POST['postID']);
				}
				
				wp_schedule_single_event(time()+20, 'panalo_followup_reminder_cron_hook', array($model->assignee, $model,  $_POST['postID']));
			break;
			
			case "tasklist":
				
			break;
			
			case "task":
			if ($model->sendEmailNow){
				panalo_send_task_assigned_email($model->assignee, $model,  $_POST['postID']);
			}			
			break;
			
			case "scheduledemail":
			
			break;
			
			case "note":
			
			break;
		}
		
	}
	
		
	public function getActivitiesForPost(){
		$thePostID = $_POST['postID'];
		$postType = $_POST['post_type'] == 'panalo_project' ? 'project' : 'contact';
		$p2pConnectionType = "activity_to_{$postType}";
		
		$connectedIDs = p2p_get_connections( $p2pConnectionType, array('to'=>$thePostID, 'fields'=>'p2p_from') );
		
		$activities = array();
		
		foreach($connectedIDs as $activityID){
			$activities[(int)$activityID] = json_decode(get_post_meta($activityID, '_panalo_activity_model', true));
		}
		ksort($activities, SORT_NUMERIC);
		$result = self::createResult("Activities found for $postType", true, array('activities'=>array_values($activities)) );
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