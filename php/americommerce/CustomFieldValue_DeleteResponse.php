<?php

if (!class_exists("CustomFieldValue_DeleteResponse", false)) 
{
class CustomFieldValue_DeleteResponse
{

  /**
   * 
   * @var boolean $CustomFieldValue_DeleteResult
   * @access public
   */
  public $CustomFieldValue_DeleteResult;

  /**
   * 
   * @param boolean $CustomFieldValue_DeleteResult
   * @access public
   */
  public function __construct($CustomFieldValue_DeleteResult)
  {
    $this->CustomFieldValue_DeleteResult = $CustomFieldValue_DeleteResult;
  }

}

}
