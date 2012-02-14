<?php

if (!class_exists("CustomFieldTrans", false)) 
{
class CustomFieldTrans
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
   * @var DataInt32 $CustomFieldID
   * @access public
   */
  public $CustomFieldID;

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
   * @var string $Name
   * @access public
   */
  public $Name;

  /**
   * 
   * @var string $EntityName
   * @access public
   */
  public $EntityName;

  /**
   * 
   * @var string $InputType
   * @access public
   */
  public $InputType;

  /**
   * 
   * @var string $ValueType
   * @access public
   */
  public $ValueType;

  /**
   * 
   * @var DataInt32 $FieldWidth
   * @access public
   */
  public $FieldWidth;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @var string $FormatString
   * @access public
   */
  public $FormatString;

  /**
   * 
   * @var boolean $IsSearchable
   * @access public
   */
  public $IsSearchable;

  /**
   * 
   * @var boolean $IsEditable
   * @access public
   */
  public $IsEditable;

  /**
   * 
   * @var boolean $IsMultiSelect
   * @access public
   */
  public $IsMultiSelect;

  /**
   * 
   * @var string $Label
   * @access public
   */
  public $Label;

  /**
   * 
   * @var boolean $IsPrivate
   * @access public
   */
  public $IsPrivate;

  /**
   * 
   * @var boolean $IsRequired
   * @access public
   */
  public $IsRequired;

  /**
   * 
   * @var array $CustomFieldValueColTrans
   * @access public
   */
  public $CustomFieldValueColTrans;

  /**
   * 
   * @var array $CustomFieldListItemColTrans
   * @access public
   */
  public $CustomFieldListItemColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $CustomFieldID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $Name
   * @param string $EntityName
   * @param string $InputType
   * @param string $ValueType
   * @param DataInt32 $FieldWidth
   * @param DataInt32 $SortOrder
   * @param string $FormatString
   * @param boolean $IsSearchable
   * @param boolean $IsEditable
   * @param boolean $IsMultiSelect
   * @param string $Label
   * @param boolean $IsPrivate
   * @param boolean $IsRequired
   * @param array $CustomFieldValueColTrans
   * @param array $CustomFieldListItemColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $CustomFieldID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $Name, $EntityName, $InputType, $ValueType, $FieldWidth, $SortOrder, $FormatString, $IsSearchable, $IsEditable, $IsMultiSelect, $Label, $IsPrivate, $IsRequired, $CustomFieldValueColTrans, $CustomFieldListItemColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->CustomFieldID = $CustomFieldID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->Name = $Name;
    $this->EntityName = $EntityName;
    $this->InputType = $InputType;
    $this->ValueType = $ValueType;
    $this->FieldWidth = $FieldWidth;
    $this->SortOrder = $SortOrder;
    $this->FormatString = $FormatString;
    $this->IsSearchable = $IsSearchable;
    $this->IsEditable = $IsEditable;
    $this->IsMultiSelect = $IsMultiSelect;
    $this->Label = $Label;
    $this->IsPrivate = $IsPrivate;
    $this->IsRequired = $IsRequired;
    $this->CustomFieldValueColTrans = $CustomFieldValueColTrans;
    $this->CustomFieldListItemColTrans = $CustomFieldListItemColTrans;
  }

}

}
