<?php

if (!class_exists("CustomField_SaveResponse", false)) 
{
class CustomField_SaveResponse
{

  /**
   * 
   * @var boolean $CustomField_SaveResult
   * @access public
   */
  public $CustomField_SaveResult;

  /**
   * 
   * @param boolean $CustomField_SaveResult
   * @access public
   */
  public function __construct($CustomField_SaveResult)
  {
    $this->CustomField_SaveResult = $CustomField_SaveResult;
  }

}

}
