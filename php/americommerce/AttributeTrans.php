<?php

if (!class_exists("AttributeTrans", false)) 
{
class AttributeTrans
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
   * @var DataInt32 $AttributeID
   * @access public
   */
  public $AttributeID;

  /**
   * 
   * @var DataInt32 $AttributeGroupID
   * @access public
   */
  public $AttributeGroupID;

  /**
   * 
   * @var string $AttributeName
   * @access public
   */
  public $AttributeName;

  /**
   * 
   * @var boolean $Hide
   * @access public
   */
  public $Hide;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

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
   * @var string $PageTitle
   * @access public
   */
  public $PageTitle;

  /**
   * 
   * @var string $Keywords
   * @access public
   */
  public $Keywords;

  /**
   * 
   * @var string $MetaDesc
   * @access public
   */
  public $MetaDesc;

  /**
   * 
   * @var string $ReWriteUrl
   * @access public
   */
  public $ReWriteUrl;

  /**
   * 
   * @var ProductAttributeTrans $ProductAttributeTrans
   * @access public
   */
  public $ProductAttributeTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $AttributeID
   * @param DataInt32 $AttributeGroupID
   * @param string $AttributeName
   * @param boolean $Hide
   * @param DataInt32 $SortOrder
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $PageTitle
   * @param string $Keywords
   * @param string $MetaDesc
   * @param string $ReWriteUrl
   * @param ProductAttributeTrans $ProductAttributeTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $AttributeID, $AttributeGroupID, $AttributeName, $Hide, $SortOrder, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $PageTitle, $Keywords, $MetaDesc, $ReWriteUrl, $ProductAttributeTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->AttributeID = $AttributeID;
    $this->AttributeGroupID = $AttributeGroupID;
    $this->AttributeName = $AttributeName;
    $this->Hide = $Hide;
    $this->SortOrder = $SortOrder;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->PageTitle = $PageTitle;
    $this->Keywords = $Keywords;
    $this->MetaDesc = $MetaDesc;
    $this->ReWriteUrl = $ReWriteUrl;
    $this->ProductAttributeTrans = $ProductAttributeTrans;
  }

}

}
