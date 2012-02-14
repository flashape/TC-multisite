<?php

if (!class_exists("ThemeLayoutControlSettingsValueTrans", false)) 
{
class ThemeLayoutControlSettingsValueTrans
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
   * @var DataInt32 $ThemeLayoutControlID
   * @access public
   */
  public $ThemeLayoutControlID;

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
   * @var DataDateTime $EnterDate
   * @access public
   */
  public $EnterDate;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ID
   * @param DataInt32 $ThemeLayoutControlID
   * @param string $SettingKey
   * @param string $SettingValue
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataDateTime $EnterDate
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $ThemeLayoutControlID, $SettingKey, $SettingValue, $EditDate, $EditedBy, $EnteredBy, $DateTimeStamp, $EnterDate)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->ThemeLayoutControlID = $ThemeLayoutControlID;
    $this->SettingKey = $SettingKey;
    $this->SettingValue = $SettingValue;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->EnterDate = $EnterDate;
  }

}

}
