<?php

if (!class_exists("CustomFieldListItem_Clone", false)) 
{
class CustomFieldListItem_Clone
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
