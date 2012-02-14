<?php

if (!class_exists("CustomField_ExistsResponse", false)) 
{
class CustomField_ExistsResponse
{

  /**
   * 
   * @var boolean $CustomField_ExistsResult
   * @access public
   */
  public $CustomField_ExistsResult;

  /**
   * 
   * @param boolean $CustomField_ExistsResult
   * @access public
   */
  public function __construct($CustomField_ExistsResult)
  {
    $this->CustomField_ExistsResult = $CustomField_ExistsResult;
  }

}

}
