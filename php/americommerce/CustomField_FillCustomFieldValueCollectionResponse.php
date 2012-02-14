<?php

if (!class_exists("CustomField_FillCustomFieldValueCollectionResponse", false)) 
{
class CustomField_FillCustomFieldValueCollectionResponse
{

  /**
   * 
   * @var CustomFieldTrans $CustomField_FillCustomFieldValueCollectionResult
   * @access public
   */
  public $CustomField_FillCustomFieldValueCollectionResult;

  /**
   * 
   * @param CustomFieldTrans $CustomField_FillCustomFieldValueCollectionResult
   * @access public
   */
  public function __construct($CustomField_FillCustomFieldValueCollectionResult)
  {
    $this->CustomField_FillCustomFieldValueCollectionResult = $CustomField_FillCustomFieldValueCollectionResult;
  }

}

}
