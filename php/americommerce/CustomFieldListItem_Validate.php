<?php

if (!class_exists("CustomFieldListItem_Validate", false)) 
{
class CustomFieldListItem_Validate
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
