<?php

if (!class_exists("ThemeLayoutControlStyleTrans", false)) 
{
class ThemeLayoutControlStyleTrans
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
   * @var DataInt32 $ThemeID
   * @access public
   */
  public $ThemeID;

  /**
   * 
   * @var DataInt32 $ThemeLayoutControlID
   * @access public
   */
  public $ThemeLayoutControlID;

  /**
   * 
   * @var string $ControlsControl
   * @access public
   */
  public $ControlsControl;

  /**
   * 
   * @var string $ControlsControlHeader
   * @access public
   */
  public $ControlsControlHeader;

  /**
   * 
   * @var string $ControlsControlText
   * @access public
   */
  public $ControlsControlText;

  /**
   * 
   * @var string $ControlsControlLink0a
   * @access public
   */
  public $ControlsControlLink0a;

  /**
   * 
   * @var string $ControlsControlLink0a00hover
   * @access public
   */
  public $ControlsControlLink0a00hover;

  /**
   * 
   * @var string $ControlsControlLinkSeperator
   * @access public
   */
  public $ControlsControlLinkSeperator;

  /**
   * 
   * @var string $ControlsControlInput
   * @access public
   */
  public $ControlsControlInput;

  /**
   * 
   * @var string $ControlsControlItem
   * @access public
   */
  public $ControlsControlItem;

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
   * @param DataInt32 $ID
   * @param DataInt32 $ThemeID
   * @param DataInt32 $ThemeLayoutControlID
   * @param string $ControlsControl
   * @param string $ControlsControlHeader
   * @param string $ControlsControlText
   * @param string $ControlsControlLink0a
   * @param string $ControlsControlLink0a00hover
   * @param string $ControlsControlLinkSeperator
   * @param string $ControlsControlInput
   * @param string $ControlsControlItem
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $ThemeID, $ThemeLayoutControlID, $ControlsControl, $ControlsControlHeader, $ControlsControlText, $ControlsControlLink0a, $ControlsControlLink0a00hover, $ControlsControlLinkSeperator, $ControlsControlInput, $ControlsControlItem, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->ThemeID = $ThemeID;
    $this->ThemeLayoutControlID = $ThemeLayoutControlID;
    $this->ControlsControl = $ControlsControl;
    $this->ControlsControlHeader = $ControlsControlHeader;
    $this->ControlsControlText = $ControlsControlText;
    $this->ControlsControlLink0a = $ControlsControlLink0a;
    $this->ControlsControlLink0a00hover = $ControlsControlLink0a00hover;
    $this->ControlsControlLinkSeperator = $ControlsControlLinkSeperator;
    $this->ControlsControlInput = $ControlsControlInput;
    $this->ControlsControlItem = $ControlsControlItem;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
