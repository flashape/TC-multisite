<?php

if (!class_exists("ProductStatus_Validate", false)) 
{
class ProductStatus_Validate
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
