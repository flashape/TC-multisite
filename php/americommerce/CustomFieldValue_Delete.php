<?php

if (!class_exists("CustomFieldValue_Delete", false)) 
{
class CustomFieldValue_Delete
{

  /**
   * 
   * @var int $piCustomFieldValueID
   * @access public
   */
  public $piCustomFieldValueID;

  /**
   * 
   * @param int $piCustomFieldValueID
   * @access public
   */
  public function __construct($piCustomFieldValueID)
  {
    $this->piCustomFieldValueID = $piCustomFieldValueID;
  }

}

}
