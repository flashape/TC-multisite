<?php

if (!class_exists("CustomFieldValue_GetByCustomResponse", false)) 
{
class CustomFieldValue_GetByCustomResponse
{

  /**
   * 
   * @var array $CustomFieldValue_GetByCustomResult
   * @access public
   */
  public $CustomFieldValue_GetByCustomResult;

  /**
   * 
   * @param array $CustomFieldValue_GetByCustomResult
   * @access public
   */
  public function __construct($CustomFieldValue_GetByCustomResult)
  {
    $this->CustomFieldValue_GetByCustomResult = $CustomFieldValue_GetByCustomResult;
  }

}

}
