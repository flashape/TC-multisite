<?php

if (!class_exists("CustomField_Save", false)) 
{
class CustomField_Save
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
