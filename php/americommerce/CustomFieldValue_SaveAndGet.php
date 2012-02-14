<?php

if (!class_exists("CustomFieldValue_SaveAndGet", false)) 
{
class CustomFieldValue_SaveAndGet
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
