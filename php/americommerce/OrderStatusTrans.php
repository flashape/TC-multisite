<?php

if (!class_exists("OrderStatusTrans", false)) 
{
class OrderStatusTrans
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
   * @var DataInt32 $orderStatusID
   * @access public
   */
  public $orderStatusID;

  /**
   * 
   * @var string $orderStatus
   * @access public
   */
  public $orderStatus;

  /**
   * 
   * @var boolean $orderOpen
   * @access public
   */
  public $orderOpen;

  /**
   * 
   * @var boolean $orderDeclined
   * @access public
   */
  public $orderDeclined;

  /**
   * 
   * @var boolean $orderCanceled
   * @access public
   */
  public $orderCanceled;

  /**
   * 
   * @var boolean $orderShipped
   * @access public
   */
  public $orderShipped;

  /**
   * 
   * @var string $orderStatusColor
   * @access public
   */
  public $orderStatusColor;

  /**
   * 
   * @var DataInt32 $emailID
   * @access public
   */
  public $emailID;

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
   * @var boolean $orderFullyReturned
   * @access public
   */
  public $orderFullyReturned;

  /**
   * 
   * @var boolean $orderPartiallyReturned
   * @access public
   */
  public $orderPartiallyReturned;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $orderStatusID
   * @param string $orderStatus
   * @param boolean $orderOpen
   * @param boolean $orderDeclined
   * @param boolean $orderCanceled
   * @param boolean $orderShipped
   * @param string $orderStatusColor
   * @param DataInt32 $emailID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $orderFullyReturned
   * @param boolean $orderPartiallyReturned
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $orderStatusID, $orderStatus, $orderOpen, $orderDeclined, $orderCanceled, $orderShipped, $orderStatusColor, $emailID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $orderFullyReturned, $orderPartiallyReturned)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->orderStatusID = $orderStatusID;
    $this->orderStatus = $orderStatus;
    $this->orderOpen = $orderOpen;
    $this->orderDeclined = $orderDeclined;
    $this->orderCanceled = $orderCanceled;
    $this->orderShipped = $orderShipped;
    $this->orderStatusColor = $orderStatusColor;
    $this->emailID = $emailID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->orderFullyReturned = $orderFullyReturned;
    $this->orderPartiallyReturned = $orderPartiallyReturned;
  }

}

}
