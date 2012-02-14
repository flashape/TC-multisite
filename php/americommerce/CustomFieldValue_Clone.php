<?php

if (!class_exists("CustomFieldValue_Clone", false)) 
{
class CustomFieldValue_Clone
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
