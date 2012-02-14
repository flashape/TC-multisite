<?php

if (!class_exists("ProductVariantGroupTrans", false)) 
{
class ProductVariantGroupTrans
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
   * @var DataInt32 $groupID
   * @access public
   */
  public $groupID;

  /**
   * 
   * @var string $groupName
   * @access public
   */
  public $groupName;

  /**
   * 
   * @var DataInt32 $sortOrder
   * @access public
   */
  public $sortOrder;

  /**
   * 
   * @var boolean $hideFlag
   * @access public
   */
  public $hideFlag;

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
   * @var string $DefaultItem
   * @access public
   */
  public $DefaultItem;

  /**
   * 
   * @var VariantGroupDisplayType $DisplayType
   * @access public
   */
  public $DisplayType;

  /**
   * 
   * @var string $GroupHeaderHtml
   * @access public
   */
  public $GroupHeaderHtml;

  /**
   * 
   * @var string $PublicDescriptionHtml
   * @access public
   */
  public $PublicDescriptionHtml;

  /**
   * 
   * @var string $GroupFooterHtml
   * @access public
   */
  public $GroupFooterHtml;

  /**
   * 
   * @var boolean $NonInventory
   * @access public
   */
  public $NonInventory;

  /**
   * 
   * @var array $ProductVariantColTrans
   * @access public
   */
  public $ProductVariantColTrans;

  /**
   * 
   * @var array $VariantPackageColTrans
   * @access public
   */
  public $VariantPackageColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $groupID
   * @param string $groupName
   * @param DataInt32 $sortOrder
   * @param boolean $hideFlag
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $DefaultItem
   * @param VariantGroupDisplayType $DisplayType
   * @param string $GroupHeaderHtml
   * @param string $PublicDescriptionHtml
   * @param string $GroupFooterHtml
   * @param boolean $NonInventory
   * @param array $ProductVariantColTrans
   * @param array $VariantPackageColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $groupID, $groupName, $sortOrder, $hideFlag, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DefaultItem, $DisplayType, $GroupHeaderHtml, $PublicDescriptionHtml, $GroupFooterHtml, $NonInventory, $ProductVariantColTrans, $VariantPackageColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->groupID = $groupID;
    $this->groupName = $groupName;
    $this->sortOrder = $sortOrder;
    $this->hideFlag = $hideFlag;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DefaultItem = $DefaultItem;
    $this->DisplayType = $DisplayType;
    $this->GroupHeaderHtml = $GroupHeaderHtml;
    $this->PublicDescriptionHtml = $PublicDescriptionHtml;
    $this->GroupFooterHtml = $GroupFooterHtml;
    $this->NonInventory = $NonInventory;
    $this->ProductVariantColTrans = $ProductVariantColTrans;
    $this->VariantPackageColTrans = $VariantPackageColTrans;
  }

}

}
