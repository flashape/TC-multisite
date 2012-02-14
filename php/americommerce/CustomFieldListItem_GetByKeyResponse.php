<?php

if (!class_exists("CustomFieldListItem_GetByKeyResponse", false)) 
{
class CustomFieldListItem_GetByKeyResponse
{

  /**
   * 
   * @var CustomFieldListItemTrans $CustomFieldListItem_GetByKeyResult
   * @access public
   */
  public $CustomFieldListItem_GetByKeyResult;

  /**
   * 
   * @param CustomFieldListItemTrans $CustomFieldListItem_GetByKeyResult
   * @access public
   */
  public function __construct($CustomFieldListItem_GetByKeyResult)
  {
    $this->CustomFieldListItem_GetByKeyResult = $CustomFieldListItem_GetByKeyResult;
  }

}

}
