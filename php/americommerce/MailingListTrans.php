<?php

if (!class_exists("MailingListTrans", false)) 
{
class MailingListTrans
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
   * @var DataInt32 $MailingListID
   * @access public
   */
  public $MailingListID;

  /**
   * 
   * @var MailingListType $MailingListType
   * @access public
   */
  public $MailingListType;

  /**
   * 
   * @var string $AdminListName
   * @access public
   */
  public $AdminListName;

  /**
   * 
   * @var string $PublicListName
   * @access public
   */
  public $PublicListName;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var boolean $IsStoreDefault
   * @access public
   */
  public $IsStoreDefault;

  /**
   * 
   * @var boolean $AutoOptIn
   * @access public
   */
  public $AutoOptIn;

  /**
   * 
   * @var boolean $Hide
   * @access public
   */
  public $Hide;

  /**
   * 
   * @var string $UrlBasedSubscribeUrl
   * @access public
   */
  public $UrlBasedSubscribeUrl;

  /**
   * 
   * @var string $ExactTargetLogin
   * @access public
   */
  public $ExactTargetLogin;

  /**
   * 
   * @var string $ExactTargetPassword
   * @access public
   */
  public $ExactTargetPassword;

  /**
   * 
   * @var string $ExactTargetListID
   * @access public
   */
  public $ExactTargetListID;

  /**
   * 
   * @var string $ExactTargetTriggerID
   * @access public
   */
  public $ExactTargetTriggerID;

  /**
   * 
   * @var string $ExactTargetProfileAttributeMappings
   * @access public
   */
  public $ExactTargetProfileAttributeMappings;

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
   * @var DataInt32 $WelcomeEmailID
   * @access public
   */
  public $WelcomeEmailID;

  /**
   * 
   * @var DataInt32 $DEKID
   * @access public
   */
  public $DEKID;

  /**
   * 
   * @var array $MailingListRuleColTrans
   * @access public
   */
  public $MailingListRuleColTrans;

  /**
   * 
   * @var array $MailingListMemberColTrans
   * @access public
   */
  public $MailingListMemberColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $MailingListID
   * @param MailingListType $MailingListType
   * @param string $AdminListName
   * @param string $PublicListName
   * @param DataInt32 $StoreID
   * @param boolean $IsStoreDefault
   * @param boolean $AutoOptIn
   * @param boolean $Hide
   * @param string $UrlBasedSubscribeUrl
   * @param string $ExactTargetLogin
   * @param string $ExactTargetPassword
   * @param string $ExactTargetListID
   * @param string $ExactTargetTriggerID
   * @param string $ExactTargetProfileAttributeMappings
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $WelcomeEmailID
   * @param DataInt32 $DEKID
   * @param array $MailingListRuleColTrans
   * @param array $MailingListMemberColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $MailingListID, $MailingListType, $AdminListName, $PublicListName, $StoreID, $IsStoreDefault, $AutoOptIn, $Hide, $UrlBasedSubscribeUrl, $ExactTargetLogin, $ExactTargetPassword, $ExactTargetListID, $ExactTargetTriggerID, $ExactTargetProfileAttributeMappings, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $WelcomeEmailID, $DEKID, $MailingListRuleColTrans, $MailingListMemberColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->MailingListID = $MailingListID;
    $this->MailingListType = $MailingListType;
    $this->AdminListName = $AdminListName;
    $this->PublicListName = $PublicListName;
    $this->StoreID = $StoreID;
    $this->IsStoreDefault = $IsStoreDefault;
    $this->AutoOptIn = $AutoOptIn;
    $this->Hide = $Hide;
    $this->UrlBasedSubscribeUrl = $UrlBasedSubscribeUrl;
    $this->ExactTargetLogin = $ExactTargetLogin;
    $this->ExactTargetPassword = $ExactTargetPassword;
    $this->ExactTargetListID = $ExactTargetListID;
    $this->ExactTargetTriggerID = $ExactTargetTriggerID;
    $this->ExactTargetProfileAttributeMappings = $ExactTargetProfileAttributeMappings;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->WelcomeEmailID = $WelcomeEmailID;
    $this->DEKID = $DEKID;
    $this->MailingListRuleColTrans = $MailingListRuleColTrans;
    $this->MailingListMemberColTrans = $MailingListMemberColTrans;
  }

}

}
