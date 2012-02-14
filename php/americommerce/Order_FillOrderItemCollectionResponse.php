<?php

if (!class_exists("Order_FillOrderItemCollectionResponse", false)) 
{
class Order_FillOrderItemCollectionResponse
{

  /**
   * 
   * @var OrderTrans $Order_FillOrderItemCollectionResult
   * @access public
   */
  public $Order_FillOrderItemCollectionResult;

  /**
   * 
   * @param OrderTrans $Order_FillOrderItemCollectionResult
   * @access public
   */
  public function __construct($Order_FillOrderItemCollectionResult)
  {
    $this->Order_FillOrderItemCollectionResult = $Order_FillOrderItemCollectionResult;
  }

}

}
