<?php

if (!class_exists("PlaceOrderResponseTrans", false)) 
{
class PlaceOrderResponseTrans
{

  /**
   * 
   * @var int $OrderID
   * @access public
   */
  public $OrderID;

  /**
   * 
   * @var boolean $OrderLoggingSuccessful
   * @access public
   */
  public $OrderLoggingSuccessful;

  /**
   * 
   * @var boolean $OrderApproved
   * @access public
   */
  public $OrderApproved;

  /**
   * 
   * @var string $RedirectToUrl
   * @access public
   */
  public $RedirectToUrl;

  /**
   * 
   * @var boolean $RedirectShouldEndResponse
   * @access public
   */
  public $RedirectShouldEndResponse;

  /**
   * 
   * @var string $ResponseMessage
   * @access public
   */
  public $ResponseMessage;

  /**
   * 
   * @param int $OrderID
   * @param boolean $OrderLoggingSuccessful
   * @param boolean $OrderApproved
   * @param string $RedirectToUrl
   * @param boolean $RedirectShouldEndResponse
   * @param string $ResponseMessage
   * @access public
   */
  public function __construct($OrderID, $OrderLoggingSuccessful, $OrderApproved, $RedirectToUrl, $RedirectShouldEndResponse, $ResponseMessage)
  {
    $this->OrderID = $OrderID;
    $this->OrderLoggingSuccessful = $OrderLoggingSuccessful;
    $this->OrderApproved = $OrderApproved;
    $this->RedirectToUrl = $RedirectToUrl;
    $this->RedirectShouldEndResponse = $RedirectShouldEndResponse;
    $this->ResponseMessage = $ResponseMessage;
  }

}

}
