<?php

if (!class_exists("ProductListItemsTrans", false)) 
{
class ProductListItemsTrans
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
   * @var DataInt32 $ProductListItemID
   * @access public
   */
  public $ProductListItemID;

  /**
   * 
   * @var DataInt32 $ProductListID
   * @access public
   */
  public $ProductListID;

  /**
   * 
   * @var DataInt32 $ItemID
   * @access public
   */
  public $ItemID;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ProductListItemID
   * @param DataInt32 $ProductListID
   * @param DataInt32 $ItemID
   * @param DataInt32 $SortOrder
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ProductListItemID, $ProductListID, $ItemID, $SortOrder)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ProductListItemID = $ProductListItemID;
    $this->ProductListID = $ProductListID;
    $this->ItemID = $ItemID;
    $this->SortOrder = $SortOrder;
  }

}

}
