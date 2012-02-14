<?php

if (!class_exists("PersonalizeTrans", false)) 
{
class PersonalizeTrans
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
   * @var DataInt32 $personalizeID
   * @access public
   */
  public $personalizeID;

  /**
   * 
   * @var string $question
   * @access public
   */
  public $question;

  /**
   * 
   * @var DataInt32 $itemID
   * @access public
   */
  public $itemID;

  /**
   * 
   * @var boolean $IsRequired
   * @access public
   */
  public $IsRequired;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @var boolean $MultiLine
   * @access public
   */
  public $MultiLine;

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
   * @var string $DisplayType
   * @access public
   */
  public $DisplayType;

  /**
   * 
   * @var DataInt32 $MaxLength
   * @access public
   */
  public $MaxLength;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $personalizeID
   * @param string $question
   * @param DataInt32 $itemID
   * @param boolean $IsRequired
   * @param DataInt32 $SortOrder
   * @param boolean $MultiLine
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $DisplayType
   * @param DataInt32 $MaxLength
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $personalizeID, $question, $itemID, $IsRequired, $SortOrder, $MultiLine, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DisplayType, $MaxLength)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->personalizeID = $personalizeID;
    $this->question = $question;
    $this->itemID = $itemID;
    $this->IsRequired = $IsRequired;
    $this->SortOrder = $SortOrder;
    $this->MultiLine = $MultiLine;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DisplayType = $DisplayType;
    $this->MaxLength = $MaxLength;
  }

}

}
