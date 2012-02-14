<?php

if (!class_exists("CustomField_GetByKeyResponse", false)) 
{
class CustomField_GetByKeyResponse
{

  /**
   * 
   * @var CustomFieldTrans $CustomField_GetByKeyResult
   * @access public
   */
  public $CustomField_GetByKeyResult;

  /**
   * 
   * @param CustomFieldTrans $CustomField_GetByKeyResult
   * @access public
   */
  public function __construct($CustomField_GetByKeyResult)
  {
    $this->CustomField_GetByKeyResult = $CustomField_GetByKeyResult;
  }

}

}
