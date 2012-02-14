<?php

if (!class_exists("ThemePageTrans", false)) 
{
class ThemePageTrans
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
   * @var DataInt32 $ThemePageSettingsID
   * @access public
   */
  public $ThemePageSettingsID;

  /**
   * 
   * @var StorePageTypes $StorePageType
   * @access public
   */
  public $StorePageType;

  /**
   * 
   * @var DataInt32 $ThemeID
   * @access public
   */
  public $ThemeID;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var string $DefaultPageTitle
   * @access public
   */
  public $DefaultPageTitle;

  /**
   * 
   * @var boolean $DisplayLeftColumn
   * @access public
   */
  public $DisplayLeftColumn;

  /**
   * 
   * @var boolean $DisplayRightColumn
   * @access public
   */
  public $DisplayRightColumn;

  /**
   * 
   * @var boolean $DisplaySubHeader
   * @access public
   */
  public $DisplaySubHeader;

  /**
   * 
   * @var boolean $DisplaySubFooter
   * @access public
   */
  public $DisplaySubFooter;

  /**
   * 
   * @var boolean $UseCustomFile
   * @access public
   */
  public $UseCustomFile;

  /**
   * 
   * @var string $CustomFile
   * @access public
   */
  public $CustomFile;

  /**
   * 
   * @var string $SubHeaderHtml
   * @access public
   */
  public $SubHeaderHtml;

  /**
   * 
   * @var string $SubFooterHtml
   * @access public
   */
  public $SubFooterHtml;

  /**
   * 
   * @var string $CustomStyleSheet
   * @access public
   */
  public $CustomStyleSheet;

  /**
   * 
   * @var string $CustomContent
   * @access public
   */
  public $CustomContent;

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
   * @var string $SettingsSetName
   * @access public
   */
  public $SettingsSetName;

  /**
   * 
   * @var boolean $IsDefaultSet
   * @access public
   */
  public $IsDefaultSet;

  /**
   * 
   * @var string $LayoutFilePath
   * @access public
   */
  public $LayoutFilePath;

  /**
   * 
   * @var DataDateTime $LayoutFileLastModified
   * @access public
   */
  public $LayoutFileLastModified;

  /**
   * 
   * @var array $ThemePageSettingsValueColTrans
   * @access public
   */
  public $ThemePageSettingsValueColTrans;

  /**
   * 
   * @var array $ThemeLayoutControlColTrans
   * @access public
   */
  public $ThemeLayoutControlColTrans;

  /**
   * 
   * @var array $ThemePageSettingColTrans
   * @access public
   */
  public $ThemePageSettingColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ThemePageSettingsID
   * @param StorePageTypes $StorePageType
   * @param DataInt32 $ThemeID
   * @param DataInt32 $StoreID
   * @param string $DefaultPageTitle
   * @param boolean $DisplayLeftColumn
   * @param boolean $DisplayRightColumn
   * @param boolean $DisplaySubHeader
   * @param boolean $DisplaySubFooter
   * @param boolean $UseCustomFile
   * @param string $CustomFile
   * @param string $SubHeaderHtml
   * @param string $SubFooterHtml
   * @param string $CustomStyleSheet
   * @param string $CustomContent
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $SettingsSetName
   * @param boolean $IsDefaultSet
   * @param string $LayoutFilePath
   * @param DataDateTime $LayoutFileLastModified
   * @param array $ThemePageSettingsValueColTrans
   * @param array $ThemeLayoutControlColTrans
   * @param array $ThemePageSettingColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ThemePageSettingsID, $StorePageType, $ThemeID, $StoreID, $DefaultPageTitle, $DisplayLeftColumn, $DisplayRightColumn, $DisplaySubHeader, $DisplaySubFooter, $UseCustomFile, $CustomFile, $SubHeaderHtml, $SubFooterHtml, $CustomStyleSheet, $CustomContent, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $SettingsSetName, $IsDefaultSet, $LayoutFilePath, $LayoutFileLastModified, $ThemePageSettingsValueColTrans, $ThemeLayoutControlColTrans, $ThemePageSettingColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ThemePageSettingsID = $ThemePageSettingsID;
    $this->StorePageType = $StorePageType;
    $this->ThemeID = $ThemeID;
    $this->StoreID = $StoreID;
    $this->DefaultPageTitle = $DefaultPageTitle;
    $this->DisplayLeftColumn = $DisplayLeftColumn;
    $this->DisplayRightColumn = $DisplayRightColumn;
    $this->DisplaySubHeader = $DisplaySubHeader;
    $this->DisplaySubFooter = $DisplaySubFooter;
    $this->UseCustomFile = $UseCustomFile;
    $this->CustomFile = $CustomFile;
    $this->SubHeaderHtml = $SubHeaderHtml;
    $this->SubFooterHtml = $SubFooterHtml;
    $this->CustomStyleSheet = $CustomStyleSheet;
    $this->CustomContent = $CustomContent;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->SettingsSetName = $SettingsSetName;
    $this->IsDefaultSet = $IsDefaultSet;
    $this->LayoutFilePath = $LayoutFilePath;
    $this->LayoutFileLastModified = $LayoutFileLastModified;
    $this->ThemePageSettingsValueColTrans = $ThemePageSettingsValueColTrans;
    $this->ThemeLayoutControlColTrans = $ThemeLayoutControlColTrans;
    $this->ThemePageSettingColTrans = $ThemePageSettingColTrans;
  }

}

}
