<?php

if (!class_exists("CustomFieldListItem_Exists", false)) 
{
class CustomFieldListItem_Exists
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
