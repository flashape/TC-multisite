<?php

if (!class_exists("CustomField_FillCustomFieldListItemCollection", false)) 
{
class CustomField_FillCustomFieldListItemCollection
{

  /**
   * 
   * @var CustomFieldTrans $poCustomFieldTrans
   * @access public
   */
  public $poCustomFieldTrans;

  /**
   * 
   * @param CustomFieldTrans $poCustomFieldTrans
   * @access public
   */
  public function __construct($poCustomFieldTrans)
  {
    $this->poCustomFieldTrans = $poCustomFieldTrans;
  }

}

}
