<?php

if (!class_exists("CustomFieldListItem_CloneResponse", false)) 
{
class CustomFieldListItem_CloneResponse
{

  /**
   * 
   * @var CustomFieldListItemTrans $CustomFieldListItem_CloneResult
   * @access public
   */
  public $CustomFieldListItem_CloneResult;

  /**
   * 
   * @param CustomFieldListItemTrans $CustomFieldListItem_CloneResult
   * @access public
   */
  public function __construct($CustomFieldListItem_CloneResult)
  {
    $this->CustomFieldListItem_CloneResult = $CustomFieldListItem_CloneResult;
  }

}

}
