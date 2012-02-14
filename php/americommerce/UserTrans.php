<?php

if (!class_exists("UserTrans", false)) 
{
class UserTrans
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
   * @var DataInt32 $userID
   * @access public
   */
  public $userID;

  /**
   * 
   * @var string $userName
   * @access public
   */
  public $userName;

  /**
   * 
   * @var string $userPass
   * @access public
   */
  public $userPass;

  /**
   * 
   * @var string $userEmail
   * @access public
   */
  public $userEmail;

  /**
   * 
   * @var string $phoneNum
   * @access public
   */
  public $phoneNum;

  /**
   * 
   * @var string $lastAttempt
   * @access public
   */
  public $lastAttempt;

  /**
   * 
   * @var string $lastLogon
   * @access public
   */
  public $lastLogon;

  /**
   * 
   * @var DataDecimal $failedAttempts
   * @access public
   */
  public $failedAttempts;

  /**
   * 
   * @var string $loggedOnNow
   * @access public
   */
  public $loggedOnNow;

  /**
   * 
   * @var string $lastUID
   * @access public
   */
  public $lastUID;

  /**
   * 
   * @var DataInt32 $viewCards
   * @access public
   */
  public $viewCards;

  /**
   * 
   * @var boolean $AcceptedAgreement
   * @access public
   */
  public $AcceptedAgreement;

  /**
   * 
   * @var boolean $HiddenAdmin
   * @access public
   */
  public $HiddenAdmin;

  /**
   * 
   * @var DataInt32 $userRoleID
   * @access public
   */
  public $userRoleID;

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
   * @var string $CustomerGridColumns
   * @access public
   */
  public $CustomerGridColumns;

  /**
   * 
   * @var string $OrderGridColumns
   * @access public
   */
  public $OrderGridColumns;

  /**
   * 
   * @var string $ProductGridColumns
   * @access public
   */
  public $ProductGridColumns;

  /**
   * 
   * @var string $CategoryGridColumns
   * @access public
   */
  public $CategoryGridColumns;

  /**
   * 
   * @var string $StoreGridColumns
   * @access public
   */
  public $StoreGridColumns;

  /**
   * 
   * @var string $SessionGridColumns
   * @access public
   */
  public $SessionGridColumns;

  /**
   * 
   * @var string $SingleSignonKey
   * @access public
   */
  public $SingleSignonKey;

  /**
   * 
   * @var DataDateTime $SingleSignonExp
   * @access public
   */
  public $SingleSignonExp;

  /**
   * 
   * @var string $GiftCertificateGridColumns
   * @access public
   */
  public $GiftCertificateGridColumns;

  /**
   * 
   * @var string $FirstName
   * @access public
   */
  public $FirstName;

  /**
   * 
   * @var string $LastName
   * @access public
   */
  public $LastName;

  /**
   * 
   * @var string $PhoneExtension
   * @access public
   */
  public $PhoneExtension;

  /**
   * 
   * @var string $AltPhone
   * @access public
   */
  public $AltPhone;

  /**
   * 
   * @var string $FaxNumber
   * @access public
   */
  public $FaxNumber;

  /**
   * 
   * @var boolean $ForcePasswordResetOnNextLogin
   * @access public
   */
  public $ForcePasswordResetOnNextLogin;

  /**
   * 
   * @var boolean $ResetVerifiedByEmail
   * @access public
   */
  public $ResetVerifiedByEmail;

  /**
   * 
   * @var string $PasswordVerificationHash
   * @access public
   */
  public $PasswordVerificationHash;

  /**
   * 
   * @var array $UserGroupColTrans
   * @access public
   */
  public $UserGroupColTrans;

  /**
   * 
   * @var array $UserSettingColTrans
   * @access public
   */
  public $UserSettingColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $userID
   * @param string $userName
   * @param string $userPass
   * @param string $userEmail
   * @param string $phoneNum
   * @param string $lastAttempt
   * @param string $lastLogon
   * @param DataDecimal $failedAttempts
   * @param string $loggedOnNow
   * @param string $lastUID
   * @param DataInt32 $viewCards
   * @param boolean $AcceptedAgreement
   * @param boolean $HiddenAdmin
   * @param DataInt32 $userRoleID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $CustomerGridColumns
   * @param string $OrderGridColumns
   * @param string $ProductGridColumns
   * @param string $CategoryGridColumns
   * @param string $StoreGridColumns
   * @param string $SessionGridColumns
   * @param string $SingleSignonKey
   * @param DataDateTime $SingleSignonExp
   * @param string $GiftCertificateGridColumns
   * @param string $FirstName
   * @param string $LastName
   * @param string $PhoneExtension
   * @param string $AltPhone
   * @param string $FaxNumber
   * @param boolean $ForcePasswordResetOnNextLogin
   * @param boolean $ResetVerifiedByEmail
   * @param string $PasswordVerificationHash
   * @param array $UserGroupColTrans
   * @param array $UserSettingColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $userID, $userName, $userPass, $userEmail, $phoneNum, $lastAttempt, $lastLogon, $failedAttempts, $loggedOnNow, $lastUID, $viewCards, $AcceptedAgreement, $HiddenAdmin, $userRoleID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $CustomerGridColumns, $OrderGridColumns, $ProductGridColumns, $CategoryGridColumns, $StoreGridColumns, $SessionGridColumns, $SingleSignonKey, $SingleSignonExp, $GiftCertificateGridColumns, $FirstName, $LastName, $PhoneExtension, $AltPhone, $FaxNumber, $ForcePasswordResetOnNextLogin, $ResetVerifiedByEmail, $PasswordVerificationHash, $UserGroupColTrans, $UserSettingColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->userID = $userID;
    $this->userName = $userName;
    $this->userPass = $userPass;
    $this->userEmail = $userEmail;
    $this->phoneNum = $phoneNum;
    $this->lastAttempt = $lastAttempt;
    $this->lastLogon = $lastLogon;
    $this->failedAttempts = $failedAttempts;
    $this->loggedOnNow = $loggedOnNow;
    $this->lastUID = $lastUID;
    $this->viewCards = $viewCards;
    $this->AcceptedAgreement = $AcceptedAgreement;
    $this->HiddenAdmin = $HiddenAdmin;
    $this->userRoleID = $userRoleID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->CustomerGridColumns = $CustomerGridColumns;
    $this->OrderGridColumns = $OrderGridColumns;
    $this->ProductGridColumns = $ProductGridColumns;
    $this->CategoryGridColumns = $CategoryGridColumns;
    $this->StoreGridColumns = $StoreGridColumns;
    $this->SessionGridColumns = $SessionGridColumns;
    $this->SingleSignonKey = $SingleSignonKey;
    $this->SingleSignonExp = $SingleSignonExp;
    $this->GiftCertificateGridColumns = $GiftCertificateGridColumns;
    $this->FirstName = $FirstName;
    $this->LastName = $LastName;
    $this->PhoneExtension = $PhoneExtension;
    $this->AltPhone = $AltPhone;
    $this->FaxNumber = $FaxNumber;
    $this->ForcePasswordResetOnNextLogin = $ForcePasswordResetOnNextLogin;
    $this->ResetVerifiedByEmail = $ResetVerifiedByEmail;
    $this->PasswordVerificationHash = $PasswordVerificationHash;
    $this->UserGroupColTrans = $UserGroupColTrans;
    $this->UserSettingColTrans = $UserSettingColTrans;
  }

}

}
