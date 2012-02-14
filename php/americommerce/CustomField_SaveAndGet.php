<?php

if (!class_exists("CustomField_SaveAndGet", false)) 
{
class CustomField_SaveAndGet
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
