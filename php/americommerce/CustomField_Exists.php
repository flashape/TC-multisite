<?php

if (!class_exists("CustomField_Exists", false)) 
{
class CustomField_Exists
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
