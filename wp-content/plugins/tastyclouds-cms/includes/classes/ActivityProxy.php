<?php

class ActivityProxy	
{
	
	function __construct()
	{
	}




	public static function getActivitesForUser($userID){
		// Find connected posts
		// $connectedActivities = get_posts( array(
		//   'connected_type' => 'activity_to_user',
		//   'connected_items' => $userID,
		//   'nopaging' => true,
		//   'suppress_filters' => false
		// ) );
	
		$connectedActivities = new WP_Query( array(
		  'connected_type' => 'activity_to_user',
		  'connected_items' => $userID,
		  'nopaging' => true
		) );
	
		return $connectedActivities;
	
	}
}


?>