<?php

if (!class_exists("ManufacturerTrans", false)) 
{
class ManufacturerTrans
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
   * @var DataInt32 $MfgID
   * @access public
   */
  public $MfgID;

  /**
   * 
   * @var string $MfgName
   * @access public
   */
  public $MfgName;

  /**
   * 
   * @var string $MfgDesc
   * @access public
   */
  public $MfgDesc;

  /**
   * 
   * @var boolean $hideFlag
   * @access public
   */
  public $hideFlag;

  /**
   * 
   * @var DataInt32 $sortOrder
   * @access public
   */
  public $sortOrder;

  /**
   * 
   * @var string $MfgLogoURL
   * @access public
   */
  public $MfgLogoURL;

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
   * @var string $HeadTags
   * @access public
   */
  public $HeadTags;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $MfgID
   * @param string $MfgName
   * @param string $MfgDesc
   * @param boolean $hideFlag
   * @param DataInt32 $sortOrder
   * @param string $MfgLogoURL
   * @param string $PageTitle
   * @param string $Keywords
   * @param string $MetaDesc
   * @param string $ReWriteUrl
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $HeadTags
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $MfgID, $MfgName, $MfgDesc, $hideFlag, $sortOrder, $MfgLogoURL, $PageTitle, $Keywords, $MetaDesc, $ReWriteUrl, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $HeadTags)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->MfgID = $MfgID;
    $this->MfgName = $MfgName;
    $this->MfgDesc = $MfgDesc;
    $this->hideFlag = $hideFlag;
    $this->sortOrder = $sortOrder;
    $this->MfgLogoURL = $MfgLogoURL;
    $this->PageTitle = $PageTitle;
    $this->Keywords = $Keywords;
    $this->MetaDesc = $MetaDesc;
    $this->ReWriteUrl = $ReWriteUrl;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->HeadTags = $HeadTags;
  }

}

}
