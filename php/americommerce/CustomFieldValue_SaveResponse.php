<?php

if (!class_exists("CustomFieldValue_SaveResponse", false)) 
{
class CustomFieldValue_SaveResponse
{

  /**
   * 
   * @var boolean $CustomFieldValue_SaveResult
   * @access public
   */
  public $CustomFieldValue_SaveResult;

  /**
   * 
   * @param boolean $CustomFieldValue_SaveResult
   * @access public
   */
  public function __construct($CustomFieldValue_SaveResult)
  {
    $this->CustomFieldValue_SaveResult = $CustomFieldValue_SaveResult;
  }

}

}
