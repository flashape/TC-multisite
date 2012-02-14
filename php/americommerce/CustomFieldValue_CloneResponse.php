<?php

if (!class_exists("CustomFieldValue_CloneResponse", false)) 
{
class CustomFieldValue_CloneResponse
{

  /**
   * 
   * @var CustomFieldValueTrans $CustomFieldValue_CloneResult
   * @access public
   */
  public $CustomFieldValue_CloneResult;

  /**
   * 
   * @param CustomFieldValueTrans $CustomFieldValue_CloneResult
   * @access public
   */
  public function __construct($CustomFieldValue_CloneResult)
  {
    $this->CustomFieldValue_CloneResult = $CustomFieldValue_CloneResult;
  }

}

}
