<?php

if (!class_exists("ThemeAssetBundleTrans", false)) 
{
class ThemeAssetBundleTrans
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
   * @var DataInt32 $ThemeAssetBundleID
   * @access public
   */
  public $ThemeAssetBundleID;

  /**
   * 
   * @var DataInt32 $ThemeID
   * @access public
   */
  public $ThemeID;

  /**
   * 
   * @var string $BundleName
   * @access public
   */
  public $BundleName;

  /**
   * 
   * @var string $BundleType
   * @access public
   */
  public $BundleType;

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
   * @var array $ThemeAssetColTrans
   * @access public
   */
  public $ThemeAssetColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ThemeAssetBundleID
   * @param DataInt32 $ThemeID
   * @param string $BundleName
   * @param string $BundleType
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param array $ThemeAssetColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ThemeAssetBundleID, $ThemeID, $BundleName, $BundleType, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $ThemeAssetColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ThemeAssetBundleID = $ThemeAssetBundleID;
    $this->ThemeID = $ThemeID;
    $this->BundleName = $BundleName;
    $this->BundleType = $BundleType;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->ThemeAssetColTrans = $ThemeAssetColTrans;
  }

}

}
