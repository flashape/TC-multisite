<?php

if (!class_exists("CustomField_SetValue", false)) 
{
class CustomField_SetValue
{

  /**
   * 
   * @var CustomFieldTable $peCustomFieldType
   * @access public
   */
  public $peCustomFieldType;

  /**
   * 
   * @var int $piParentRecordID
   * @access public
   */
  public $piParentRecordID;

  /**
   * 
   * @var string $psCustomFieldName
   * @access public
   */
  public $psCustomFieldName;

  /**
   * 
   * @var string $psValue
   * @access public
   */
  public $psValue;

  /**
   * 
   * @param CustomFieldTable $peCustomFieldType
   * @param int $piParentRecordID
   * @param string $psCustomFieldName
   * @param string $psValue
   * @access public
   */
  public function __construct($peCustomFieldType, $piParentRecordID, $psCustomFieldName, $psValue)
  {
    $this->peCustomFieldType = $peCustomFieldType;
    $this->piParentRecordID = $piParentRecordID;
    $this->psCustomFieldName = $psCustomFieldName;
    $this->psValue = $psValue;
  }

}

}
