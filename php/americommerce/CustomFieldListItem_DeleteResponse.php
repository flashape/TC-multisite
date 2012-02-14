<?php

if (!class_exists("CustomFieldListItem_DeleteResponse", false)) 
{
class CustomFieldListItem_DeleteResponse
{

  /**
   * 
   * @var boolean $CustomFieldListItem_DeleteResult
   * @access public
   */
  public $CustomFieldListItem_DeleteResult;

  /**
   * 
   * @param boolean $CustomFieldListItem_DeleteResult
   * @access public
   */
  public function __construct($CustomFieldListItem_DeleteResult)
  {
    $this->CustomFieldListItem_DeleteResult = $CustomFieldListItem_DeleteResult;
  }

}

}
