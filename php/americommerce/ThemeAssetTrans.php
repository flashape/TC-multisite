<?php

if (!class_exists("ThemeAssetTrans", false)) 
{
class ThemeAssetTrans
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
   * @var DataInt32 $ThemeAssetID
   * @access public
   */
  public $ThemeAssetID;

  /**
   * 
   * @var DataInt32 $ThemeAssetBundleID
   * @access public
   */
  public $ThemeAssetBundleID;

  /**
   * 
   * @var string $Identifier
   * @access public
   */
  public $Identifier;

  /**
   * 
   * @var string $SourceType
   * @access public
   */
  public $SourceType;

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
   * @var string $Path
   * @access public
   */
  public $Path;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ThemeAssetID
   * @param DataInt32 $ThemeAssetBundleID
   * @param string $Identifier
   * @param string $SourceType
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $Path
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ThemeAssetID, $ThemeAssetBundleID, $Identifier, $SourceType, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $Path)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ThemeAssetID = $ThemeAssetID;
    $this->ThemeAssetBundleID = $ThemeAssetBundleID;
    $this->Identifier = $Identifier;
    $this->SourceType = $SourceType;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->Path = $Path;
  }

}

}
