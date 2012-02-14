<?php

if (!class_exists("CustomField_GetByKey", false)) 
{
class CustomField_GetByKey
{

  /**
   * 
   * @var int $piCustomFieldID
   * @access public
   */
  public $piCustomFieldID;

  /**
   * 
   * @param int $piCustomFieldID
   * @access public
   */
  public function __construct($piCustomFieldID)
  {
    $this->piCustomFieldID = $piCustomFieldID;
  }

}

}
