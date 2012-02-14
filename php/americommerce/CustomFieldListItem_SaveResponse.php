<?php

if (!class_exists("CustomFieldListItem_SaveResponse", false)) 
{
class CustomFieldListItem_SaveResponse
{

  /**
   * 
   * @var boolean $CustomFieldListItem_SaveResult
   * @access public
   */
  public $CustomFieldListItem_SaveResult;

  /**
   * 
   * @param boolean $CustomFieldListItem_SaveResult
   * @access public
   */
  public function __construct($CustomFieldListItem_SaveResult)
  {
    $this->CustomFieldListItem_SaveResult = $CustomFieldListItem_SaveResult;
  }

}

}
