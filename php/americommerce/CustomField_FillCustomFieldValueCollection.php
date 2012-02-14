<?php

if (!class_exists("CustomField_FillCustomFieldValueCollection", false)) 
{
class CustomField_FillCustomFieldValueCollection
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
