<?php

if (!class_exists("OrderShipping_FillOrderItemCollectionResponse", false)) 
{
class OrderShipping_FillOrderItemCollectionResponse
{

  /**
   * 
   * @var OrderShippingTrans $OrderShipping_FillOrderItemCollectionResult
   * @access public
   */
  public $OrderShipping_FillOrderItemCollectionResult;

  /**
   * 
   * @param OrderShippingTrans $OrderShipping_FillOrderItemCollectionResult
   * @access public
   */
  public function __construct($OrderShipping_FillOrderItemCollectionResult)
  {
    $this->OrderShipping_FillOrderItemCollectionResult = $OrderShipping_FillOrderItemCollectionResult;
  }

}

}
