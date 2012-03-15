<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
	

	
?>

<style>
	#toolbar {
		padding: 6px 4px;
		font-size:10px;
		color:#000000;
		display:block;
	}
	
	.dateInput{
		width:100px;
	}
	.timeInput{
		width:100px;
	}
	
	#activityTable{
		font-size:12px;
		
	}	
		
	.revenueOppStatus{
		font-weight:bold;
	}	
			
	.revenueOppAssignee{
		font-weight:bold;
	}
				
	.revenueValue{
		font-weight:bold;
	}	
					
	.tasklistTitle{
		font-weight:bold;
	}	
	
	#activityTable td {
		vertical-align:top;
		padding-bottom:5px;
		padding-top:5px;
	}
	
	#activityTable span{
/*		display:inline;
*/	}	
	.tasklistItemsContainer ul{
		list-style:none;
		margin-left:20px;
	}
	
	#activityTable tr.callLogRow td {
		border-bottom: 1px solid #CCC;
	}
		
	#activityTable tr.revenueRow td {
		border-bottom: 1px solid #CCC;
	}
	
			
	#activityTable tr.noteRow td {
		border-bottom: 1px solid #CCC;
	}
				
	#activityTable tr.tasklistRow td {
		border-bottom: 1px solid #CCC;
	}
					
	#activityTable td {
	}
	
	
	.callLogRow td.icon{
		background: url(<?php echo plugins_url('/tastyclouds-crm/images/icons/call.png') ?>) center 5px no-repeat;
	}
	
	.revenueRow td.icon{
		background: url(<?php echo plugins_url('/tastyclouds-crm/images/icons/idea.png') ?>) center 5px no-repeat;
	}
	
	.tasklistRow td.icon{
		background: url(<?php echo plugins_url('/tastyclouds-crm/images/icons/todo.png') ?>) center 5px no-repeat;
	}
	
	.noteRow td.icon{
		background: url(<?php echo plugins_url('/tastyclouds-crm/images/icons/notes.png') ?>) center 5px no-repeat;
	}
		
	.followupRow td.icon{
		background: url(<?php echo plugins_url('/tastyclouds-crm/images/icons/clock.png') ?>) center 5px no-repeat;
	}
	
	.deleteColumn{
		background: url(<?php echo plugins_url('/tastyclouds-crm/images/icons/trash.png') ?>) center 5px no-repeat;
	}
	
	.icon, .deleteColumn {
		width:32px;
		background-size: 16px 16px;

	}
	
	.activityScroller{
		max-height:250px;
		overflow:auto;
	}	
	.mailScroller{
		max-height:250px;
		overflow:auto;
	}	
	
	.mailSubject{
		max-width:450px;
		word-wrap: break-word;
	}
</style>







<div class="my_meta_control">
	<div id="contactHistoryTabs" >
		<ul id="contactHistoryTabsList" style="display:none;">
			<li><a href="#activityTab">Activity</a></li>
			<li><a href="#mailTab">Mail</a></li>
		</ul>
		
		<div id="activityTab" style="padding-left:0px;padding-right:0px;padding-top:0px;">
			<span id="toolbar" class="ui-widget-header">
				<button id="logCallButton">Log A Call</button>
				<button id="addRevenueOpportunityButton">Add Revenue Opportunity</button>
				<button id="addTaskListButton">Add Task List</button>
				<button id="addNoteButton">Add Note</button>
				<button id="addFollowupButton">Add Follow-Up</button>
				<!-- <button id="scheduleEmailButton">Add Scheduled Email</button> -->
				<!-- <button id="scheduleEventButton">Schedule An Event</button> -->
		
			</span>
			<div class="activityScroller">
				<table id="activityTable">
					<thead> 
						<tr> 
						    <th></th> 
						    <th style="width:80%;"></th> 
						    <th></th> 
						    <th></th> 
						    <th></th> 
						</tr> 
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
		
		
		<div id="mailTab">
			<div class="mailScroller">
			
				<div id="fetchingMail">
					<p>Fetching mail...</p>
				</div>
			
				<table id="mailTable" class="tablesorter">
					<thead> 
						<tr>
						    <th>User</th> 
						    <th>Mailbox</th> 
						    <th>Subject</th> 
						    <th>Date</th> 
						</tr> 
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>										
		</div>
		
	</div>
</div>




<?php





function onActivityMetaboxFooterAction() {
	?>
	<script type="text/javascript">

	jQuery(document).ready(function($){
		
		debug.log('ready');
		debug.log('typenow : '+typenow);
		
		
		
		if (typenow == 'tc_contact'){
			$('#contactHistoryTabsList').show();
			
			$( "#contactHistoryTabs" ).tabs({
				show: onTabsShow

			});
			
		}
		
		if (typenow == 'tc_project'){
			$('#mailTab').hide();
			
		}
		
		$('#logCallButton').button();
		$('#addRevenueOpportunityButton').button();
		$('#addTaskListButton').button();
		$('#scheduleEmailButton').button();
		$('#addNoteButton').button();
		$('#addFollowupButton').button();
		//$('#scheduleEventButton').button();
		
		$('#logCallButton').data('activityType', 'call');
		$('#addRevenueOpportunityButton').data('activityType', 'revenue');
		$('#addTaskListButton').data('activityType', 'tasklist');
		$('#addNoteButton').data('activityType', 'note');
		$('#addFollowupButton').data('activityType', 'followup');
		
		
		$("#toolbar").on("click", "button", function(event){
			addActivityRow( createActivityModel( $(this).data('activityType') ) );
			return false;
		});
		
		
		$("#activityTable").on("dblclick", "tr", function(event){
			var taskRow = $(event.target).parents('.taskRow');
			if ( taskRow.length == 0){
				editActivity($(this));
			}else{
				editActivity(taskRow);
			}
			return false;
		});
		
		
		$("#activityTable").on("click", "td.deleteColumn", function(event){
			deleteActivity($(this).closest('tr'));
			return false;
		});
		

		
		$(document).click(function(e){
		    var visibleEditStates = $('.editState').filter(':visible');
			visibleEditStates.each(function(index, element) {
				var editDiv = $(this);
				if(!editDiv.hasClass('within') && $(e.target).parents('#ui-datepicker-div').length == 0){	
					editDiv.hide();
					var parent = editDiv.parent();
					var row = parent.hasClass('taskRow') ? parent : editDiv.closest('tr');
					onActivityEditEnd(row);
				}
			})
		});
		
		

		
		
		getActivities();
	});
	
	function onTabsShow(event, ui) {
		debug.log('onTabsShow event : ', event, 'Ui : ', ui);
		
		if (ui.panel.id == "mailTab" && jQuery('#mailTable').data('mailLoaded') != true ){
			//jQuery('#mailTab').show();
			jQuery('#mailScroller').show();
			loadMail();
		}
			
			
	}
	
	
	function loadMail(){
		
		var data = {};
		data.action = 'tc_get_mail_for_contact';
		data.contactID = jQuery('#post_ID').val();
		
		
		jQuery.post(ajaxurl, data, 
			function (result){
				// debug.log('loadMail result:'+result.message);
				// debug.log(result);	
				onMailLoaded(result.emails.emails)			
			},
			'json'
		);
		
	}
	function onMailLoaded(emails) {
		
		jQuery('#mailTable').data('mailLoaded', true);
		debug.log('emails : ',emails);
		
		jQuery('#fetchingMail').remove();
		
		
		var num = emails.length;
		var row;
		for (var i=0; i<num; i++){
			row = addMailRow(emails[i]);
		}
		
		//jQuery("mailTable").trigger("update"); 
		
		jQuery('#mailTable').tablesorter( 
				{
					headers: 
					{ 
						3: {sorter:"isoDate"} 
					}
				}
			);

	}
	
	
	function addMailRow(model, targetTaskList){
		debug.log('addMailRow : ', model);
		var newRow = jQuery('#mailRowTemplate').clone();
		newRow.removeAttr("id");
		
		
		jQuery('#mailTable > tbody').prepend(newRow);

		newRow.data("model", model);
		
		//initializeNewRow(newRow, model);
		
		
		newRow.find('.mailSubject').html( '<p>'+model.overview.subject+'</p>' );
		newRow.find('.mailUser').text( model.name );
		newRow.find('.mailLocation').text( model.mailbox );
		newRow.find('.mailDate').text( model.overview.date );
		//newRow.find('.mailBody').text( model.body );
		//newRow.find('.mailSubject').append( '<div class="mailBody">'+model.body+'</div>' );
		var mailBodyDiv = jQuery('<div class="mailBody"></div>');
		mailBodyDiv.innerText(model.body);
		newRow.find('.mailSubject').append(mailBodyDiv)
		
		// newRow.find('.defaultState').hide();
		// 
		// newRow.find('.editState')
		// 	.mouseenter(function() { jQuery(this).addClass('within') })
		//         	.mouseleave(function() { jQuery(this).removeClass('within') })

		//populateActivity(newRow);
		
		return newRow;
	}
	
	
	
	function getFormattedTime(){
		var currentTime = new Date();

		var minute = currentTime.getMinutes();
		var hour = currentTime.getHours();

        var printMinute = minute;
		if (minute < 10) printMinute = '0' + minute;

		var printHour = hour % 12;
		if (printHour == 0) printHour = 12;
		var half = (hour < 12) ? 'am' : 'pm';

		var formattedTime = printHour + ':' + printMinute + half;
		
		return formattedTime;	
	}
	
	function getTemplateRowIDByType(type) {
		var typeIDMap = {};
		typeIDMap['call'] = '#callLogRowTemplate';
		typeIDMap['revenue'] = '#revenueRowTemplate';
		typeIDMap['tasklist'] = '#tasklistRowTemplate';
		typeIDMap['task'] = '#taskRowTemplate';
		typeIDMap['note'] = '#noteRowTemplate';
		typeIDMap['followup'] = '#followupRowTemplate';
		
		return typeIDMap[type];
	}
	
	
	function addActivityRow(model, targetTaskList){
		debug.log('addActivityRow : '+model.type, targetTaskList);
		var newRow = jQuery( getTemplateRowIDByType(model.type) ).clone();
		newRow.removeAttr("id");
		
		
		if(targetTaskList){
			if (!model.hasOwnProperty('taskListId')){		
				var parentRow = targetTaskList.closest('tr');
				var taskListId = parentRow.data("model").id;
				model.taskListId = taskListId;
			}
			var li = jQuery('<li>')
			li.append(newRow);
			targetTaskList.append(li);
		}else{
			jQuery('#activityTable > tbody').prepend(newRow);
		}
		
		newRow.data("model", model);
		
		initializeNewRow(newRow, model);
		
		
		
		newRow.find('.defaultState').hide();
		
		newRow.find('.editState')
			.mouseenter(function() { jQuery(this).addClass('within') })
        	.mouseleave(function() { jQuery(this).removeClass('within') })

		populateActivity(newRow);
		
		return newRow;
	}
	
	function initializeNewRow(newRow, model) {
		switch(model.type){
			case 'call':
				newRow.find('.timeInput').calendricalTime({defaultTime:{hour:10, minute:30}, timeInterval: 15 });
				newRow.find('.dateInput').datepicker({ defaultDate: new Date() });
			break;
			
			case 'revenue':
				newRow.find('.timeInput').calendricalTime({defaultTime:{hour:10, minute:30}, timeInterval: 15 });
				newRow.find('.dateInput').datepicker({ defaultDate: new Date() });
				newRow.find('.revenueValueInput').ForcePriceOnly();
			break;
			
			case 'followup':
				newRow.find('.timeInput').calendricalTime({defaultTime:{hour:10, minute:30}, timeInterval: 15 });
				newRow.find('.dateInput').datepicker({ defaultDate: new Date() });
				newRow.find('.followupCompleteDefaultCheckbox').on('change', function(){
					var row = jQuery(this).closest('tr');
					
					row.find('.followupCompleteCheckbox').attr('checked', jQuery(this).is(':checked'));
					onActivityEditEnd(row);				
				})
			break;
			
			case 'tasklist':
				newRow.find('.addTaskButton').button();
				newRow.find('.addTaskButton').on('click', function (){
					addActivityRow( createActivityModel( 'task' ),  jQuery(this).closest('tr').find('.taskItems') );
					return false;
				})
			break;
			
			
			case 'task':
				newRow.find('.taskTimeDueInput').calendricalTime({defaultTime:{hour:10, minute:30}, timeInterval: 15 });
				newRow.find('.taskDateDueInput').datepicker({ defaultDate: new Date() });
			break;
			
			case 'note':

			break;
			
			
		}
	}
	
	
	
	function editActivity(row){
		debug.log("editActivity", row);
		setRowStateToEdit(row);
	}
	
	function onActivityEditEnd(row){
		debug.log("onActivityEditEnd", row);
		var changed;
		if(row.hasClass('callLogRow')){
			changed = callLogChanged(row);
		}

		
		if(row.hasClass('revenueRow')){
			changed = revenueOpportunityChanged(row);
		}
				
		if(row.hasClass('followupRow')){
			changed = followupChanged(row);
		}
		
		if(row.hasClass('tasklistRow')){
			changed = tasklistChanged(row);
		}

				
		if(row.hasClass('taskRow')){
			changed = taskChanged(row);
		}

						
		if(row.hasClass('noteRow')){
			changed = noteChanged(row);
		}

		
		if( changed ){
			saveActivity(row);
		}else{
			// remove the log if it was newly added but no changes were made
			if (row.data('model').id == 0){
				row.remove();
			}else{
				setRowStateToDefault(row);
			}
		}
	}
	
	function setRowStateToDefault(row){
		row.find('.editState').hide();
		row.find('.defaultState').show();
	}
		
	function setRowStateToEdit(row){
		row.find('.editState').show();
		row.find('.defaultState').hide();
	}
	
	function createActivityModel(activityType){
		
		var model = {};
		model.id = 0;
		model.time = getFormattedTime();
		model.creationDate = getNewActivityCreationDateString();
		model.date = getNewActivityCreationDateString();
		model.type = activityType;
		
		switch(activityType){
			
			case 'call':
				model.duration = '1m';
				model.notes = '';
			break;
			
			case 'revenue':
				model.description = '';
				model.value = '';
				model.expectedClosing = '';
				model.assignee = 0;
				model.status = 'discussion';
			break;
						
			case 'followup':
				model.description = '';
				model.expectedClosing = '';
				model.assignee = 0;
				model.completed = false;
				model.sendEmailNow = false;
			break;
						
			
			case 'tasklist':
				model.description = '';
				model.title = '';
				model.completed = false;
			break;
			
			case 'task':
				
			break;
			
			case 'note':
				
			break;
		}
		
		return model;
		
	}
	
	

	function populateActivity(row){
		var model = row.data("model");
		switch(model.type){
			case 'call':
				row.find('.timeInput').val( model.time );
				row.find('.dateInput').datepicker('setDate', model.date);
				
				if (model.id != 0 ){
					row.find('.callDateTime').text(model.date)
					row.find('.callNotes').text(model.notes);
					row.find('.callNotesInput').text(model.notes);
					row.find('.activityCreatedTimeColumn').text(model.creationDate);
				}

			break;			
			
			case 'revenue':
			
				row.find('.dateInput').datepicker('setDate', (model.expectedClosing == '' ? model.date : model.expectedClosing));
				row.find('.revenueDescriptionInput').val( model.description );

				if (model.id != 0 ){
					row.find('.revenueDescription').text( model.description );
					row.find('.revenueValue').text( '$'+(model.value == '' ? '0' : model.value) );
					row.find('.revenueValueInput').val( (model.value == '' ? '0' : model.value) );
					row.find('.revenueExpectedDate').text( model.expectedClosing );
					
					row.find('.revenueOppAssigneeSelect').val( model.assignee );
					row.find('.revenueOppAssignee').text( row.find('.revenueOppAssigneeSelect').find('option:selected').text() );
					
					row.find('.revenueOppStatusSelect').val( model.status );
					row.find('.revenueOppStatus').text( row.find('.revenueOppStatusSelect').find('option:selected').text() );
					
					row.find('.activityCreatedTimeColumn').text(model.creationDate);
				}				
			break;
			
			case 'followup':
			
				row.find('.dateInput').datepicker('setDate', (model.date == '' ? model.date : model.date));
				row.find('.followupDescriptionInput').val( model.description );
				row.find('.timeInput').val( model.time );

				if (model.id != 0 ){
					row.find('.followupDescription').text( model.description );
					row.find('.followupDueDate').text( model.date );
					//row.find('.date').text( model.date );
					
					row.find('.followupAssigneeSelect').val( model.assignee );
					row.find('.followupAssignee').text( row.find('.followupAssigneeSelect').find('option:selected').text() );
					
					row.find('.followupCompleteCheckbox').attr('checked', model.completed);
					row.find('.followupCompleteDefaultCheckbox').attr('checked', model.completed);
					row.find('.followupSendEmailCheckbox').attr('checked', model.sendEmailNow);
					
					row.find('.activityCreatedTimeColumn').text(model.creationDate);
				}				
			break;
			
			case 'tasklist':
				if(model.id != 0){
					
					row.find('.tasklistTitle').text(model.title);
					row.find('.tasklistDescription').text(model.description);
					
					row.find('.tasklistTitleInput').val(model.title);
					row.find('.tasklistDescriptionInput').val(model.description);
					row.find('.tasklistCompleteCheckbox').attr('checked', model.completed);
				}
			break;
			
			case 'task':
				if(model.id != 0){
					
					row.find('.taskTitle').text(model.title);
					row.find('.taskDescription').text(model.description);
					row.find('.taskAssigneeSelect').val( model.assignee );
								  
					row.find('.taskTitleInput').val(model.title);
					row.find('.taskDescriptionInput').val(model.description);
					row.find('.taskDateDueInput').datepicker('setDate', model.dueDate);
					row.find('.taskTimeDueInput').val( model.dueTime );
					row.find('.taskSendEmailNowCheckbox').attr('checked', model.sendEmailNow);
					
					row.find('.taskCompleteCheckbox').attr('checked', model.completed);
				}
			break;
						
			case 'note':
				if(model.id != 0){
					debug.log('populating note id : '+model.id, 'desc : '+model.description);
					row.find('.noteDescription').text(model.description);
					row.find('.noteDescriptionInput').val(model.description);
					
				}
			break;
			
			
		}
		
	}
	
	function getNewActivityCreationDateString(){
		var d = new Date();
		var month = d.getMonth() + 1;
		if (month < 10){
			month = "0"+month;
		}
		
		var date = d.getDate();
		if (date < 10){
			date = "0"+date;
		}
		
		var dateString = month+'/'+date+'/'+d.getFullYear();
		return dateString;
	}
	
	function getUpdatedCallLogData(row){
		var newData = {};
		newData.time = row.find('.timeInput').val();
		newData.date = row.find('.dateInput').val();
		newData.duration = row.find('.callDuration').val();
		newData.notes = row.find('.callNotesInput').val();
		return newData;
	}
	
	
	function getUpdatedRevenueOpportunityData(row){
		var newData = {};
		
		newData.description = row.find('.revenueDescriptionInput').val();
		newData.value = row.find('.revenueValueInput').val();
		newData.expectedClosing = row.find('.dateInput').val();
		newData.assignee = row.find('.revenueOppAssigneeSelect').val();
		newData.status = row.find('.revenueOppStatusSelect').val();

		return newData;
	}
			
	function getUpdatedFollowupData(row){
		var newData = {};
		
		newData.description = row.find('.followupDescriptionInput').val();
		newData.date = row.find('.dateInput').val();
		newData.time = row.find('.timeInput').val();
		newData.assignee = row.find('.followupAssigneeSelect').val();
		newData.completed = row.find('.followupCompleteCheckbox').is(':checked');
		//newData.completed = row.find('.followupCompleteCheckbox').attr('checked');
		newData.sendEmailNow = row.find('.followupSendEmailCheckbox').is(':checked');

		return newData;
	}
		
	
	function getUpdatedTaskListData(row){
		var newData = {};
		
		newData.title = row.find('.tasklistTitleInput').val();
		newData.description = row.find('.tasklistDescriptionInput').val();
		newData.completed = row.find('.tasklistCompleteCheckbox').is(':checked');

		return newData;
	}
			
	
	function getUpdatedTaskData(row){
		var newData = {};
		
		newData.title = row.find('.taskTitleInput').val();
		newData.description = row.find('.taskDescriptionInput').val();
		newData.completed = row.find('.taskCompleteCheckbox').is(':checked');
		newData.dueDate = row.find('.taskDateDueInput').val();
		newData.dueTime = row.find('.taskTimeDueInput').val();
		newData.assignee = row.find('.taskAssigneeSelect').val();
		newData.sendEmailNow = row.find('.taskSendEmailNowCheckbox').is(':checked');
		newData.taskListId = row.data("model").taskListId;
		return newData;
	}
		
	function getUpdatedNoteData(row){
		var newData = {};
		newData.description = row.find('.noteDescriptionInput').val();

		return newData;
	}
	
	
	
	
	function callLogChanged(row){
		var model = row.data("model");
		var newData = getUpdatedCallLogData(row);
		if(

			newData.time != model.time ||
			newData.date != model.date ||
			newData.duration != model.duration ||
			newData.notes != model.notes
			){
			return true;
		}else{
			return false;
		}
	}
	
		
	function revenueOpportunityChanged(row){
		var model = row.data("model");
		var newData = getUpdatedRevenueOpportunityData(row);
		if(
			newData.description != model.description ||
			newData.title != model.value ||
			newData.expectedClosing != model.expectedClosing ||
			newData.assignee != model.assignee ||
			newData.status != model.status

			){
			return true;
		}else{
			return false;
		}
	}
					
	function followupChanged(row){
		var model = row.data("model");
		var newData = getUpdatedFollowupData(row);
		if(
			newData.description != model.description ||
			newData.assignee != model.assignee ||
			newData.completed != model.completed ||
			newData.sendEmailNow != model.sendEmailNow ||
			newData.time != model.time ||
			newData.date != model.date
			){
			return true;
		}else{
			return false;
		}
	}
			
	function tasklistChanged(row){
		var model = row.data("model");
		var newData = getUpdatedTaskListData(row);
		if(
			newData.description != model.description ||
			newData.title != model.title ||
			newData.completed != model.completed
			){
			return true;
		}else{
			return false;
		}
	}
				
	function taskChanged(row){
		var model = row.data("model");
		var newData = getUpdatedTaskData(row);
		if(
			newData.description != model.description ||
			newData.title != model.title ||
			newData.assignee != model.assignee ||
			newData.completed != model.completed ||
			newData.sendEmailNow != model.sendEmailNow ||
			newData.time != model.time ||
			newData.date != model.date
			){
			return true;
		}else{
			return false;
		}
	}
					
	function noteChanged(row){
		var model = row.data("model");
		var newData = getUpdatedNoteData(row);
		if(
			newData.description != model.description
			){
			return true;
		}else{
			return false;
		}
	}
	
	function saveActivity(row){
		var oldModel = row.data("model");
		var newModel;
		
		switch (oldModel.type){
			case 'call':
				newModel = getUpdatedCallLogData(row);
			break;
			
			case 'revenue':
				newModel = getUpdatedRevenueOpportunityData(row);
			break;
						
			
			case 'followup':
				newModel = getUpdatedFollowupData(row);
			break;
						
			case 'tasklist':
				newModel = getUpdatedTaskListData(row);
			break;						
			
			case 'task':
				newModel = getUpdatedTaskData(row);
			break;
			
			
			case 'note':
				newModel = getUpdatedNoteData(row);
			break;
			
		}
		//debugger;
		newModel.creationDate = oldModel.creationDate;
		newModel.id = oldModel.id;
		newModel.type = oldModel.type;
		
		var data = {};
		data.action = newModel.id == 0 ? 'tc_insert_activity' : 'tc_update_activity'
		
		data.model = JSON.stringify(newModel);
		data.postID = jQuery('#post_ID').val();
		data.post_type = typenow;
		
		jQuery.post(ajaxurl, data, 
			function (result){
				debug.log('saveActivity result:'+result.message);
				debug.log(result);
				row.data("model", result.model);
				populateActivity(row);
				setRowStateToDefault(row);
				
			},
			'json'
		);
	}
	
	function deleteActivity(row) {
		var data = {};
		data.action = 'tc_delete_activity';
		
		data.model = JSON.stringify(row.data("model"));
		data.postID = jQuery('#post_ID').val();
		row.remove();
		
		jQuery.post(ajaxurl, data, 
			function (result){
				debug.log('deleteActivity result:'+result.message);
				debug.log(result);				
			},
			'json'
		);
	}
	
	
	
		
	function getActivities() {
		var data = {};
		data.action = 'tc_get_activities_for_post';
		
		data.postID = jQuery('#post_ID').val();
		data.post_type = typenow;
		
		jQuery.post(ajaxurl, data, 
			function (result){
				debug.log('getActivities result:'+result.message);
				debug.log(result);	
				onActivitiesLoaded(result.activities)			
			},
			'json'
		);
	}
	
	
	function onActivitiesLoaded(activities){
		var activity;
		var num = activities.length;
		var taskMap = {};
		var row;
		
		var taskListRow;
		
		for (var i = 0; i< num; i++){
			activity = activities[i];
			
			if ( activity.type == 'task'){
				taskListRow = taskMap[activity.taskListId];
				row = addActivityRow(activity, taskListRow.find('.taskItems')); 
				
			}else{

				row = addActivityRow(activity);
				
				if (  activity.type == 'tasklist'){
					taskMap[activity.id] = row;
				}
				
				
			}
			
			setRowStateToDefault(row);
			
			
		}
		
		debug.log('taskMap : ', taskMap);
	}
	
	
	(function($){
	   $.fn.innerText = function(msg) {
	         if (msg) {
	            if (document.body.innerText) {
	               for (var i in this) {
	                  this[i].innerText = msg;
	               }
	            } else {
	               for (var i in this) {
	                  this[i].innerHTML.replace(/\&lt;br\&gt;/gi,"\n").replace(/(&lt;([^&gt;]+)&gt;)/gi, "");
	               }
	            }
	            return this;
	         } else {
	            if (document.body.innerText) {
	               return this[0].innerText;
	            } else {
	               return this[0].innerHTML.replace(/\&lt;br\&gt;/gi,"\n").replace(/(&lt;([^&gt;]+)&gt;)/gi, "");
	            }
	         }
	   };

	})(jQuery);
	 
	</script>
	<?php
}

?>


<table id="mailTableTemplate" style="display:none;">
	<tr id="mailRowTemplate" class="mailRow">
		<td class="mailUser"></td>
		<td class="mailLocation"></td>
		<td class="mailSubject"></td>
		<td class="mailDate"></td>
	</tr>
</table>



<table id="activityTableTemplate" style="display:none;">
	<tr id="callLogRowTemplate" class="callLogRow">
		<td class="icon"></td>

		<td>
			<div class="defaultState" style="display:none;">
				<span class="callDateTime"></span><br /><span class="callNotes"></span><br />
			</div>
			<div class="editState" style="">
				Call took place <input type="text" class="dateInput" /><input type="text" class="timeInput" /> and lasted
				<select class="callDuration" size="1">
					<option value="1m">1 min</option>
					<option value="5m">5 mins</option>
					<option value="10m">10 mins</option>
					<option value="15m">15 mins</option>
					<option value="20m">20 mins</option>
					<option value="30m">30 mins</option>
					<option value="40m">40 mins</option>
					<option value="45m">45 mins</option>
					<option value="50m">50 mins</option>
					<option value="1h">1 hr</option>
					<option value="gt1h">> 1 hr</option>
				</select>
				<br />
				<textarea style="width:100%;height:60px;" autocomplete="off" class="callNotesInput"></textarea>
				
			</div>
		</td>

		<td class="activityCreatedByColumn">Nina Rodecker</td>
		<td class="activityCreatedTimeColumn"></td>
		<td class="deleteColumn"></td>
	<tr>
		
	<tr id="revenueRowTemplate" class="revenueRow">
		<td class="icon"></td>

		<td>
			<div class="defaultState" style="display:none;">
				<span class="revenueDescription"></span> worth <span class="revenueValue"></span> expected <span class="revenueExpectedDate"></span> <br />
				<span class="revenueOppAssignee"></span> is managing<br />
				Status : <span class="revenueOppStatus"></span><br />
			</div>
			<div class="editState" style="">
				Description: <input type="text" class="revenueDescriptionInput" /><br />
				Value: <input type="text" class="revenueValueInput" maxlength="7" /><br />
				Expected Closing: <input type="text" class="dateInput" /><br />
				Responsible: <?php wp_dropdown_users(array('class'=>'revenueOppAssigneeSelect', 'selected'=>get_current_user_id())); ?><br />
				Status: 
				<select class="revenueOppStatusSelect" size="1">
					<option value="discussion">Discussion</option>
					<option value="pending">Pending</option>
					<option value="won">Won</option>
					<option value="lost">Lost</option>
					<option value="onhold">On Hold</option>
				</select>
				<br />
			</div>
		</td>

		<td class="activityCreatedByColumn">Nina Rodecker</td>
		<td class="activityCreatedTimeColumn"></td>
		<td class="deleteColumn"></td>
	<tr>
		
				
	<tr id="followupRowTemplate" class="followupRow">
		<td class="icon"></td>

		<td>
			<div class="defaultState" style="display:none;">
				<input type="checkbox" class="followupCompleteDefaultCheckbox" />
				<span class="followupDescription"></span><br />
				<span class="followupAssignee"></span> <span class="followupDueDate"></span><br />
			</div>
			<div class="editState" style="">
				
				Description: <textarea style="width:100%;height:60px;" autocomplete="off" class="followupDescriptionInput"></textarea><br />
				Responsible: <?php wp_dropdown_users(array('class'=>'followupAssigneeSelect', 'selected'=>get_current_user_id())); ?><br />
				<input type="checkbox" class="followupCompleteCheckbox" /><label class="followupCompleteCheckboxLabel" />Completed</label><br />
				<input type="checkbox" class="followupSendEmailCheckbox" /><label class="followupSendEmailCheckboxLabel" />Send email notification now</label><br />
				
				Schedule for: <input type="text" class="dateInput" /><input type="text" class="timeInput" /> 
				Remind: 
				<select class="followupReminderSelect" size="1">
					<option value="1d">1 Day</option>
					<option value="2d">2 Days</option>
					<option value="7d">1 Week</option>
				</select>
				before the follow-up is due
				<br />
			</div>
		</td>

		<td class="activityCreatedByColumn">Nina Rodecker</td>
		<td class="activityCreatedTimeColumn"></td>
		<td class="deleteColumn"></td>
	<tr>
		
		
	<tr id="tasklistRowTemplate" class="tasklistRow">
		<td class="icon"></td>

		<td>

			<div class="defaultState" style="display:none;">
				<div class="addTaskButtonDiv" style="float:right;">
					<button class="addTaskButton">Add A Task</button>
				</div>
				<span class="tasklistTitle"></span><br />
				<span class="tasklistDescription"></span><br />
				<div class="tasklistItemsContainer">
					<ul class="taskItems"></ul>
				</div>
			</div>

			
			<div class="editState" style="">
				Title: <input type="text" class="tasklistTitleInput" /><br />
				Description: <input type="text" class="tasklistDescriptionInput" /><br />
				<input type="checkbox" class="tasklistCompleteCheckbox" /><label class="taskCompleteCheckboxLabel" />Completed</label>
				<br />
			</div>
			
			
			
		</td>

		<td class="activityCreatedByColumn">Nina Rodecker</td>
		<td class="activityCreatedTimeColumn"></td>
		<td class="deleteColumn"></td>
	<tr>		

	<tr>
		<td colspan="4">
			<div id="taskRowTemplate" class="taskRow">
				<div class="defaultState" style="display:none;">
					<span class="taskTitle"></span><br />
					<span class="taskDescription"></span><br />
				</div>


				<div class="editState" style="">
					Title: <input type="text" class="taskTitleInput" /><br />
					Description: <input type="text" class="taskDescriptionInput" /><br />
					Responsible: <?php wp_dropdown_users(array('class'=>'taskAssigneeSelect', 'selected'=>get_current_user_id())); ?><br />
					<input type="checkbox" class="taskSendEmailNowCheckbox" /><label class="taskSendEmailNowCheckbox" />Send email notification now</label><br />
					Due: <input type="text" class="taskDateDueInput" /><input type="text" class="taskTimeDueInput" />		
					<br />
				</div>
			<div>
		</td>
	</tr>
	
	<tr id="noteRowTemplate" class="noteRow">
		<td class="icon"></td>

		<td>

			<div class="defaultState" style="display:none;">
				<span class="noteDescription"></span><br />
			</div>

			
			<div class="editState" style="">
				Description: <input type="text" class="noteDescriptionInput" /><br />
				<br />
			</div>
		</td>

		<td class="activityCreatedByColumn">Nina Rodecker</td>
		<td class="activityCreatedTimeColumn"></td>
		<td class="deleteColumn"></td>
	<tr>
		
</table>


