<?php

if (!class_exists("Cart_PlaceOrder", false)) 
{
class Cart_PlaceOrder
{

  /**
   * 
   * @var int $piSessionID
   * @access public
   */
  public $piSessionID;

  /**
   * 
   * @var PlaceOrderTrans $poOrderInformation
   * @access public
   */
  public $poOrderInformation;

  /**
   * 
   * @param int $piSessionID
   * @param PlaceOrderTrans $poOrderInformation
   * @access public
   */
  public function __construct($piSessionID, $poOrderInformation)
  {
    $this->piSessionID = $piSessionID;
    $this->poOrderInformation = $poOrderInformation;
  }

}

}
