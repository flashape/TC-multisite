<?php

if (!class_exists("CustomFieldValue_Validate", false)) 
{
class CustomFieldValue_Validate
{

  /**
   * 
   * @var CustomFieldValueTrans $poCustomFieldValueTrans
   * @access public
   */
  public $poCustomFieldValueTrans;

  /**
   * 
   * @param CustomFieldValueTrans $poCustomFieldValueTrans
   * @access public
   */
  public function __construct($poCustomFieldValueTrans)
  {
    $this->poCustomFieldValueTrans = $poCustomFieldValueTrans;
  }

}

}
