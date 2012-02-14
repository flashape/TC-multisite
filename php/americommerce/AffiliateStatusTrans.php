<?php

if (!class_exists("AffiliateStatusTrans", false)) 
{
class AffiliateStatusTrans
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
   * @var DataInt32 $affiliateStatusID
   * @access public
   */
  public $affiliateStatusID;

  /**
   * 
   * @var string $affiliateStatus
   * @access public
   */
  public $affiliateStatus;

  /**
   * 
   * @var string $affiliateStatusColor
   * @access public
   */
  public $affiliateStatusColor;

  /**
   * 
   * @var DataInt32 $affiliateStatusEnabled
   * @access public
   */
  public $affiliateStatusEnabled;

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
   * @param DataInt32 $affiliateStatusID
   * @param string $affiliateStatus
   * @param string $affiliateStatusColor
   * @param DataInt32 $affiliateStatusEnabled
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $affiliateStatusID, $affiliateStatus, $affiliateStatusColor, $affiliateStatusEnabled, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->affiliateStatusID = $affiliateStatusID;
    $this->affiliateStatus = $affiliateStatus;
    $this->affiliateStatusColor = $affiliateStatusColor;
    $this->affiliateStatusEnabled = $affiliateStatusEnabled;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
