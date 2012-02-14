<?php

if (!class_exists("CustomFieldListItem_Save", false)) 
{
class CustomFieldListItem_Save
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
