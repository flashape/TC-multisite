<?php

if (!class_exists("CustomField_FillCustomFieldListItemCollectionResponse", false)) 
{
class CustomField_FillCustomFieldListItemCollectionResponse
{

  /**
   * 
   * @var CustomFieldTrans $CustomField_FillCustomFieldListItemCollectionResult
   * @access public
   */
  public $CustomField_FillCustomFieldListItemCollectionResult;

  /**
   * 
   * @param CustomFieldTrans $CustomField_FillCustomFieldListItemCollectionResult
   * @access public
   */
  public function __construct($CustomField_FillCustomFieldListItemCollectionResult)
  {
    $this->CustomField_FillCustomFieldListItemCollectionResult = $CustomField_FillCustomFieldListItemCollectionResult;
  }

}

}
