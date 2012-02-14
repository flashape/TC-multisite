<?php

if (!class_exists("CustomField_CloneResponse", false)) 
{
class CustomField_CloneResponse
{

  /**
   * 
   * @var CustomFieldTrans $CustomField_CloneResult
   * @access public
   */
  public $CustomField_CloneResult;

  /**
   * 
   * @param CustomFieldTrans $CustomField_CloneResult
   * @access public
   */
  public function __construct($CustomField_CloneResult)
  {
    $this->CustomField_CloneResult = $CustomField_CloneResult;
  }

}

}
