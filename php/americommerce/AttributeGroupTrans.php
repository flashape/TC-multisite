<?php

if (!class_exists("AttributeGroupTrans", false)) 
{
class AttributeGroupTrans
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
   * @var DataInt32 $AttributeGroupID
   * @access public
   */
  public $AttributeGroupID;

  /**
   * 
   * @var string $AttributeGroupName
   * @access public
   */
  public $AttributeGroupName;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @var boolean $Hide
   * @access public
   */
  public $Hide;

  /**
   * 
   * @var boolean $AllowDrillDown
   * @access public
   */
  public $AllowDrillDown;

  /**
   * 
   * @var boolean $AllowMultiple
   * @access public
   */
  public $AllowMultiple;

  /**
   * 
   * @var boolean $TieVariantInventory
   * @access public
   */
  public $TieVariantInventory;

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
   * @var array $AttributeColTrans
   * @access public
   */
  public $AttributeColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $AttributeGroupID
   * @param string $AttributeGroupName
   * @param DataInt32 $SortOrder
   * @param boolean $Hide
   * @param boolean $AllowDrillDown
   * @param boolean $AllowMultiple
   * @param boolean $TieVariantInventory
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param array $AttributeColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $AttributeGroupID, $AttributeGroupName, $SortOrder, $Hide, $AllowDrillDown, $AllowMultiple, $TieVariantInventory, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $AttributeColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->AttributeGroupID = $AttributeGroupID;
    $this->AttributeGroupName = $AttributeGroupName;
    $this->SortOrder = $SortOrder;
    $this->Hide = $Hide;
    $this->AllowDrillDown = $AllowDrillDown;
    $this->AllowMultiple = $AllowMultiple;
    $this->TieVariantInventory = $TieVariantInventory;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->AttributeColTrans = $AttributeColTrans;
  }

}

}
