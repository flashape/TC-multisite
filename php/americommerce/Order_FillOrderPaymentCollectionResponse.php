<?php

if (!class_exists("Order_FillOrderPaymentCollectionResponse", false)) 
{
class Order_FillOrderPaymentCollectionResponse
{

  /**
   * 
   * @var OrderTrans $Order_FillOrderPaymentCollectionResult
   * @access public
   */
  public $Order_FillOrderPaymentCollectionResult;

  /**
   * 
   * @param OrderTrans $Order_FillOrderPaymentCollectionResult
   * @access public
   */
  public function __construct($Order_FillOrderPaymentCollectionResult)
  {
    $this->Order_FillOrderPaymentCollectionResult = $Order_FillOrderPaymentCollectionResult;
  }

}

}
