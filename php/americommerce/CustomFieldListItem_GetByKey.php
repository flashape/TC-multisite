<?php

if (!class_exists("CustomFieldListItem_GetByKey", false)) 
{
class CustomFieldListItem_GetByKey
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
