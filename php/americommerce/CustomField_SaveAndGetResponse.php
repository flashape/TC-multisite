<?php

if (!class_exists("CustomField_SaveAndGetResponse", false)) 
{
class CustomField_SaveAndGetResponse
{

  /**
   * 
   * @var CustomFieldTrans $CustomField_SaveAndGetResult
   * @access public
   */
  public $CustomField_SaveAndGetResult;

  /**
   * 
   * @param CustomFieldTrans $CustomField_SaveAndGetResult
   * @access public
   */
  public function __construct($CustomField_SaveAndGetResult)
  {
    $this->CustomField_SaveAndGetResult = $CustomField_SaveAndGetResult;
  }

}

}
