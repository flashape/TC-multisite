<?php

if (!class_exists("PageRedirectTrans", false)) 
{
class PageRedirectTrans
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
   * @var DataInt32 $PageRedirectID
   * @access public
   */
  public $PageRedirectID;

  /**
   * 
   * @var string $RedirectFromUrl
   * @access public
   */
  public $RedirectFromUrl;

  /**
   * 
   * @var string $RedirectToUrl
   * @access public
   */
  public $RedirectToUrl;

  /**
   * 
   * @var boolean $IsSystemRedirectSoHide
   * @access public
   */
  public $IsSystemRedirectSoHide;

  /**
   * 
   * @var boolean $Active
   * @access public
   */
  public $Active;

  /**
   * 
   * @var string $RegExRulesToExecute
   * @access public
   */
  public $RegExRulesToExecute;

  /**
   * 
   * @var RedirectType $RedirectType
   * @access public
   */
  public $RedirectType;

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
   * @param DataInt32 $PageRedirectID
   * @param string $RedirectFromUrl
   * @param string $RedirectToUrl
   * @param boolean $IsSystemRedirectSoHide
   * @param boolean $Active
   * @param string $RegExRulesToExecute
   * @param RedirectType $RedirectType
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $PageRedirectID, $RedirectFromUrl, $RedirectToUrl, $IsSystemRedirectSoHide, $Active, $RegExRulesToExecute, $RedirectType, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->PageRedirectID = $PageRedirectID;
    $this->RedirectFromUrl = $RedirectFromUrl;
    $this->RedirectToUrl = $RedirectToUrl;
    $this->IsSystemRedirectSoHide = $IsSystemRedirectSoHide;
    $this->Active = $Active;
    $this->RegExRulesToExecute = $RegExRulesToExecute;
    $this->RedirectType = $RedirectType;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
