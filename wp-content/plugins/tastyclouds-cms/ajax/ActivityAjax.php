<?php

class ActivityAjax
{
	
	function __construct()
	{
	}
	
	function insertActivity($data){
		$model = AjaxUtils::jsonDecodePostKey('model');
		
		$activityID = self::createActivityPost($model);

		if ($activityID > 0){
			$model->id = $activityID;
			
			update_post_meta($activityID, '_tc_activity_model', json_encode($model));
			
			
			$postType = $_POST['post_type'] == 'tc_project' ? 'project' : 'contact';
			$p2pConnectionType = "activity_to_{$postType}";
			
			//update_post_meta($activityID, '_tc_p2p_connection_type', $p2pConnectionType);
			update_post_meta($activityID, '_tc_parent_post_id', $_POST['postID']);
			
			
			
			//update_post_meta($activityID, '_tc_contact_id', $_POST['postID']);
			
			p2p_type( $p2pConnectionType )->connect( $activityID, $_POST['postID'], array(
				'date' => current_time('mysql'),
				'activity_type' => $model->type,
				
			) );
			
			self::updateActivityMetaByType($activityID, $model);
			updatePostModifiedTime($_POST['postID']);
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
		
		
		wp_set_object_terms( $activityID, $activityTypeIds[$model->type], 'tc_activity_type' );
		
		self::linkActivityToUser($activityID, $model);
		
		self::checkNotifications($model);
		
		$result = AjaxUtils::createResult('Activity saved successfully', true, array('model'=>$model) );
		AjaxUtils::returnJson($result);
	}
	
	// Creates an Activity post.
	// We use this post as the activity id and attach meta to that.
	function createActivityPost($model){
		
		$activity = array(
			'post_content' => 'x',
			'post_status' => 'publish',
			'post_type' => "tc_activity"
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
		$model = AjaxUtils::jsonDecodePostKey('model');
		
		$activityID = $model->id;
		update_post_meta($activityID, '_tc_activity_model', json_encode($model));

		self::checkNotifications($model);
		
		$result = AjaxUtils::createResult('Activity updates successfully.', true, array('model'=>$model) );
		AjaxUtils::returnJson($result);
	}
			
	function deleteActivity($data){
		$model = AjaxUtils::jsonDecodePostKey('model');
		

		$activityID = $model->id;
		wp_delete_post($activityID);
		
		$result = AjaxUtils::createResult('Activity deleted successfully.', true, array('model'=>$model) );
		AjaxUtils::returnJson($result);
	}
	
	private function updateActivityMetaByType($activityID, $model){
		switch($model->type){
			case 'task':
				update_post_meta($activityID, '_tc_task_list_id', $model->taskListId);
			break;
			
		}
	}
	
	private function linkActivityToUser($activityID, $model){
		
		$doLink = false;
		
		switch ($model->type){
			case "call":
				//
			break;
			
			case "revenue":
				$doLink = true;
			break;
			
			case "followup":
				$doLink = true;
			break;
			
			case "tasklist":
				//
			break;
			
			case "task":
				$doLink = true;
			break;
			
			case "scheduledemail":
				//
			break;
			
			case "note":
				//
			break;
		}
		
		if ($doLink){
			$userID = $model->assignee;
			
			p2p_type( 'activity_to_user' )->connect( $activityID, $userID, array(
				'activity_type' => $model->type,
			) );
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
					$data = array(
						'userID'=>$model->assignee,
						'activityModel'=>$model,
						'postID'=>$_POST['postID'],
					);
					tc_send_followup_assigned_email($data);
				}
				
				wp_schedule_single_event(time()+20, 'tc_followup_reminder_cron_hook', array($model->assignee, $model,  $_POST['postID']));
			break;
			
			case "tasklist":
				
			break;
			
			case "task":
			if ($model->sendEmailNow){
				$data = array(
					'userID'=>$model->assignee,
					'activityModel'=>$model,
					'postID'=>$_POST['postID'],
				);
				tc_send_task_assigned_email($data);
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
		$postType = $_POST['post_type'] == 'tc_project' ? 'project' : 'contact';
		$p2pConnectionType = "activity_to_{$postType}";
		
		$connectedIDs = p2p_get_connections( $p2pConnectionType, array('to'=>$thePostID, 'fields'=>'p2p_from') );
		
		$activities = array();
		
		foreach($connectedIDs as $activityID){
			$activities[(int)$activityID] = json_decode(get_post_meta($activityID, '_tc_activity_model', true));
		}
		ksort($activities, SORT_NUMERIC);
		$result = AjaxUtils::createResult("Activities found for $postType", true, array('activities'=>array_values($activities)) );
		AjaxUtils::returnJson($result);
	}

	
}	
?>