<?php

if (!class_exists("CustomFieldListItem_ExistsResponse", false)) 
{
class CustomFieldListItem_ExistsResponse
{

  /**
   * 
   * @var boolean $CustomFieldListItem_ExistsResult
   * @access public
   */
  public $CustomFieldListItem_ExistsResult;

  /**
   * 
   * @param boolean $CustomFieldListItem_ExistsResult
   * @access public
   */
  public function __construct($CustomFieldListItem_ExistsResult)
  {
    $this->CustomFieldListItem_ExistsResult = $CustomFieldListItem_ExistsResult;
  }

}

}
