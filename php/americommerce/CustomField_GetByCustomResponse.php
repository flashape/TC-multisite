<?php

if (!class_exists("CustomField_GetByCustomResponse", false)) 
{
class CustomField_GetByCustomResponse
{

  /**
   * 
   * @var array $CustomField_GetByCustomResult
   * @access public
   */
  public $CustomField_GetByCustomResult;

  /**
   * 
   * @param array $CustomField_GetByCustomResult
   * @access public
   */
  public function __construct($CustomField_GetByCustomResult)
  {
    $this->CustomField_GetByCustomResult = $CustomField_GetByCustomResult;
  }

}

}
