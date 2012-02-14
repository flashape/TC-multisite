<?php

if (!class_exists("CustomField_Validate", false)) 
{
class CustomField_Validate
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
