<?php

if (!class_exists("OrderShippingOrderItemsTrans", false)) 
{
class OrderShippingOrderItemsTrans
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
   * @var DataInt32 $OrderShippingOrderItemsID
   * @access public
   */
  public $OrderShippingOrderItemsID;

  /**
   * 
   * @var DataInt32 $OrderShippingID
   * @access public
   */
  public $OrderShippingID;

  /**
   * 
   * @var DataInt32 $OrderItemsID
   * @access public
   */
  public $OrderItemsID;

  /**
   * 
   * @var DataInt32 $QuantityShipped
   * @access public
   */
  public $QuantityShipped;

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
   * @param DataInt32 $OrderShippingOrderItemsID
   * @param DataInt32 $OrderShippingID
   * @param DataInt32 $OrderItemsID
   * @param DataInt32 $QuantityShipped
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $OrderShippingOrderItemsID, $OrderShippingID, $OrderItemsID, $QuantityShipped, $EnterDate, $EnteredBy, $EditDate, $EditedBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->OrderShippingOrderItemsID = $OrderShippingOrderItemsID;
    $this->OrderShippingID = $OrderShippingID;
    $this->OrderItemsID = $OrderItemsID;
    $this->QuantityShipped = $QuantityShipped;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
