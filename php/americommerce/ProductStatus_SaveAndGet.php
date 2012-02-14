<?php

if (!class_exists("ProductStatus_SaveAndGet", false)) 
{
class ProductStatus_SaveAndGet
{

  /**
   * 
   * @var ProductStatusTrans $poProductStatusTrans
   * @access public
   */
  public $poProductStatusTrans;

  /**
   * 
   * @param ProductStatusTrans $poProductStatusTrans
   * @access public
   */
  public function __construct($poProductStatusTrans)
  {
    $this->poProductStatusTrans = $poProductStatusTrans;
  }

}

}
