<?php

if (!class_exists("CustomFieldValue_Save", false)) 
{
class CustomFieldValue_Save
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
