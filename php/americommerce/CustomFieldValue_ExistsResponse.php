<?php

if (!class_exists("CustomFieldValue_ExistsResponse", false)) 
{
class CustomFieldValue_ExistsResponse
{

  /**
   * 
   * @var boolean $CustomFieldValue_ExistsResult
   * @access public
   */
  public $CustomFieldValue_ExistsResult;

  /**
   * 
   * @param boolean $CustomFieldValue_ExistsResult
   * @access public
   */
  public function __construct($CustomFieldValue_ExistsResult)
  {
    $this->CustomFieldValue_ExistsResult = $CustomFieldValue_ExistsResult;
  }

}

}
