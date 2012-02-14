<?php

if (!class_exists("Product_FillShippingRateAdjustmentsCollection", false)) 
{
class Product_FillShippingRateAdjustmentsCollection
{

  /**
   * 
   * @var ProductTrans $poProductTrans
   * @access public
   */
  public $poProductTrans;

  /**
   * 
   * @param ProductTrans $poProductTrans
   * @access public
   */
  public function __construct($poProductTrans)
  {
    $this->poProductTrans = $poProductTrans;
  }

}

}
