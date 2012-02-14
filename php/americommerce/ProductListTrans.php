<?php

if (!class_exists("ProductListTrans", false)) 
{
class ProductListTrans
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
   * @var DataInt32 $ProductListID
   * @access public
   */
  public $ProductListID;

  /**
   * 
   * @var string $ProductListName
   * @access public
   */
  public $ProductListName;

  /**
   * 
   * @var array $ProductListItemsColTrans
   * @access public
   */
  public $ProductListItemsColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ProductListID
   * @param string $ProductListName
   * @param array $ProductListItemsColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ProductListID, $ProductListName, $ProductListItemsColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ProductListID = $ProductListID;
    $this->ProductListName = $ProductListName;
    $this->ProductListItemsColTrans = $ProductListItemsColTrans;
  }

}

}
