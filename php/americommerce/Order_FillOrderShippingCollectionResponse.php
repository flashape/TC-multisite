<?php

if (!class_exists("Order_FillOrderShippingCollectionResponse", false)) 
{
class Order_FillOrderShippingCollectionResponse
{

  /**
   * 
   * @var OrderTrans $Order_FillOrderShippingCollectionResult
   * @access public
   */
  public $Order_FillOrderShippingCollectionResult;

  /**
   * 
   * @param OrderTrans $Order_FillOrderShippingCollectionResult
   * @access public
   */
  public function __construct($Order_FillOrderShippingCollectionResult)
  {
    $this->Order_FillOrderShippingCollectionResult = $Order_FillOrderShippingCollectionResult;
  }

}

}
