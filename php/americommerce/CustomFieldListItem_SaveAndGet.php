<?php

if (!class_exists("CustomFieldListItem_SaveAndGet", false)) 
{
class CustomFieldListItem_SaveAndGet
{

  /**
   * 
   * @var CustomFieldListItemTrans $poCustomFieldListItemTrans
   * @access public
   */
  public $poCustomFieldListItemTrans;

  /**
   * 
   * @param CustomFieldListItemTrans $poCustomFieldListItemTrans
   * @access public
   */
  public function __construct($poCustomFieldListItemTrans)
  {
    $this->poCustomFieldListItemTrans = $poCustomFieldListItemTrans;
  }

}

}
