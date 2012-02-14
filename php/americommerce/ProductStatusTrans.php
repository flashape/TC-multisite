<?php

if (!class_exists("ProductStatusTrans", false)) 
{
class ProductStatusTrans
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
   * @var DataInt32 $productStatusID
   * @access public
   */
  public $productStatusID;

  /**
   * 
   * @var string $productStatus
   * @access public
   */
  public $productStatus;

  /**
   * 
   * @var string $timeFrame
   * @access public
   */
  public $timeFrame;

  /**
   * 
   * @var boolean $unavailable
   * @access public
   */
  public $unavailable;

  /**
   * 
   * @var boolean $hide
   * @access public
   */
  public $hide;

  /**
   * 
   * @var boolean $backOrder
   * @access public
   */
  public $backOrder;

  /**
   * 
   * @var boolean $ShowQuantity
   * @access public
   */
  public $ShowQuantity;

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
   * @param DataInt32 $productStatusID
   * @param string $productStatus
   * @param string $timeFrame
   * @param boolean $unavailable
   * @param boolean $hide
   * @param boolean $backOrder
   * @param boolean $ShowQuantity
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $productStatusID, $productStatus, $timeFrame, $unavailable, $hide, $backOrder, $ShowQuantity, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->productStatusID = $productStatusID;
    $this->productStatus = $productStatus;
    $this->timeFrame = $timeFrame;
    $this->unavailable = $unavailable;
    $this->hide = $hide;
    $this->backOrder = $backOrder;
    $this->ShowQuantity = $ShowQuantity;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
