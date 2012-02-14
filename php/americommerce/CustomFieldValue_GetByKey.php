<?php

if (!class_exists("CustomFieldValue_GetByKey", false)) 
{
class CustomFieldValue_GetByKey
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
