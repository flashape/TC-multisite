<?php

if (!class_exists("CustomFieldValue_SaveAndGetResponse", false)) 
{
class CustomFieldValue_SaveAndGetResponse
{

  /**
   * 
   * @var CustomFieldValueTrans $CustomFieldValue_SaveAndGetResult
   * @access public
   */
  public $CustomFieldValue_SaveAndGetResult;

  /**
   * 
   * @param CustomFieldValueTrans $CustomFieldValue_SaveAndGetResult
   * @access public
   */
  public function __construct($CustomFieldValue_SaveAndGetResult)
  {
    $this->CustomFieldValue_SaveAndGetResult = $CustomFieldValue_SaveAndGetResult;
  }

}

}
