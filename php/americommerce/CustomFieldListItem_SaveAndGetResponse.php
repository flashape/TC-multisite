<?php

if (!class_exists("CustomFieldListItem_SaveAndGetResponse", false)) 
{
class CustomFieldListItem_SaveAndGetResponse
{

  /**
   * 
   * @var CustomFieldListItemTrans $CustomFieldListItem_SaveAndGetResult
   * @access public
   */
  public $CustomFieldListItem_SaveAndGetResult;

  /**
   * 
   * @param CustomFieldListItemTrans $CustomFieldListItem_SaveAndGetResult
   * @access public
   */
  public function __construct($CustomFieldListItem_SaveAndGetResult)
  {
    $this->CustomFieldListItem_SaveAndGetResult = $CustomFieldListItem_SaveAndGetResult;
  }

}

}
