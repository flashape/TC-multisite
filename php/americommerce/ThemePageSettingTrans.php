<?php

if (!class_exists("ThemePageSettingTrans", false)) 
{
class ThemePageSettingTrans
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
   * @var DataInt32 $ID
   * @access public
   */
  public $ID;

  /**
   * 
   * @var DataInt32 $ThemePageID
   * @access public
   */
  public $ThemePageID;

  /**
   * 
   * @var string $SettingKey
   * @access public
   */
  public $SettingKey;

  /**
   * 
   * @var string $SettingValue
   * @access public
   */
  public $SettingValue;

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
   * @var DataInt32 $SettingInfoID
   * @access public
   */
  public $SettingInfoID;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ID
   * @param DataInt32 $ThemePageID
   * @param string $SettingKey
   * @param string $SettingValue
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $SettingInfoID
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $ThemePageID, $SettingKey, $SettingValue, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $SettingInfoID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->ThemePageID = $ThemePageID;
    $this->SettingKey = $SettingKey;
    $this->SettingValue = $SettingValue;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->SettingInfoID = $SettingInfoID;
  }

}

}
