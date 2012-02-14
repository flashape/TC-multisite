<?php

if (!class_exists("CustomField_DeleteResponse", false)) 
{
class CustomField_DeleteResponse
{

  /**
   * 
   * @var boolean $CustomField_DeleteResult
   * @access public
   */
  public $CustomField_DeleteResult;

  /**
   * 
   * @param boolean $CustomField_DeleteResult
   * @access public
   */
  public function __construct($CustomField_DeleteResult)
  {
    $this->CustomField_DeleteResult = $CustomField_DeleteResult;
  }

}

}
