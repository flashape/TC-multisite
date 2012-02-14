<?php

if (!class_exists("CustomField_SetValueResponse", false)) 
{
class CustomField_SetValueResponse
{

  /**
   * 
   * @var string $CustomField_SetValueResult
   * @access public
   */
  public $CustomField_SetValueResult;

  /**
   * 
   * @param string $CustomField_SetValueResult
   * @access public
   */
  public function __construct($CustomField_SetValueResult)
  {
    $this->CustomField_SetValueResult = $CustomField_SetValueResult;
  }

}

}
