<?php

if (!class_exists("CustomFieldValue_GetByKeyResponse", false)) 
{
class CustomFieldValue_GetByKeyResponse
{

  /**
   * 
   * @var CustomFieldValueTrans $CustomFieldValue_GetByKeyResult
   * @access public
   */
  public $CustomFieldValue_GetByKeyResult;

  /**
   * 
   * @param CustomFieldValueTrans $CustomFieldValue_GetByKeyResult
   * @access public
   */
  public function __construct($CustomFieldValue_GetByKeyResult)
  {
    $this->CustomFieldValue_GetByKeyResult = $CustomFieldValue_GetByKeyResult;
  }

}

}
