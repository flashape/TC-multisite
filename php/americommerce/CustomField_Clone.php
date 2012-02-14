<?php

if (!class_exists("CustomField_Clone", false)) 
{
class CustomField_Clone
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
