<?php

if (!class_exists("CustomField_Delete", false)) 
{
class CustomField_Delete
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
