<?php

if (!class_exists("Order_FillOrderExtendedShippingCollectionResponse", false)) 
{
class Order_FillOrderExtendedShippingCollectionResponse
{

  /**
   * 
   * @var OrderTrans $Order_FillOrderExtendedShippingCollectionResult
   * @access public
   */
  public $Order_FillOrderExtendedShippingCollectionResult;

  /**
   * 
   * @param OrderTrans $Order_FillOrderExtendedShippingCollectionResult
   * @access public
   */
  public function __construct($Order_FillOrderExtendedShippingCollectionResult)
  {
    $this->Order_FillOrderExtendedShippingCollectionResult = $Order_FillOrderExtendedShippingCollectionResult;
  }

}

}
