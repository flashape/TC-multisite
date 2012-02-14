<?php

if (!class_exists("CustomFieldListItem_Delete", false)) 
{
class CustomFieldListItem_Delete
{

  /**
   * 
   * @var int $piCustomFieldListItemID
   * @access public
   */
  public $piCustomFieldListItemID;

  /**
   * 
   * @param int $piCustomFieldListItemID
   * @access public
   */
  public function __construct($piCustomFieldListItemID)
  {
    $this->piCustomFieldListItemID = $piCustomFieldListItemID;
  }

}

}
