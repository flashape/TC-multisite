<?php

if (!class_exists("CustomFieldValueTrans", false)) 
{
class CustomFieldValueTrans
{

  /**
   * 
   * @var boolean $IsNew
   * @access public
   */
  public $IsNew;

  /**
   * 
   * @var boolean $MarkedToDelete
   * @access public
   */
  public $MarkedToDelete;

  /**
   * 
   * @var boolean $MarkedToDetach
   * @access public
   */
  public $MarkedToDetach;

  /**
   * 
   * @var Dictionary $AdditionalData
   * @access public
   */
  public $AdditionalData;

  /**
   * 
   * @var DataInt32 $CustomFieldValueID
   * @access public
   */
  public $CustomFieldValueID;

  /**
   * 
   * @var DataInt32 $CustomFieldID
   * @access public
   */
  public $CustomFieldID;

  /**
   * 
   * @var DataInt32 $EntityRecordID
   * @access public
   */
  public $EntityRecordID;

  /**
   * 
   * @var string $Value
   * @access public
   */
  public $Value;

  /**
   * 
   * @var DataDateTime $EditDate
   * @access public
   */
  public $EditDate;

  /**
   * 
   * @var string $EditedBy
   * @access public
   */
  public $EditedBy;

  /**
   * 
   * @var DataDateTime $EnterDate
   * @access public
   */
  public $EnterDate;

  /**
   * 
   * @var string $EnteredBy
   * @access public
   */
  public $EnteredBy;

  /**
   * 
   * @var base64Binary $DateTimeStamp
   * @access public
   */
  public $DateTimeStamp;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $CustomFieldValueID
   * @param DataInt32 $CustomFieldID
   * @param DataInt32 $EntityRecordID
   * @param string $Value
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $CustomFieldValueID, $CustomFieldID, $EntityRecordID, $Value, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->CustomFieldValueID = $CustomFieldValueID;
    $this->CustomFieldID = $CustomFieldID;
    $this->EntityRecordID = $EntityRecordID;
    $this->Value = $Value;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
