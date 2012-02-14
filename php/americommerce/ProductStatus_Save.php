<?php

if (!class_exists("ProductStatus_Save", false)) 
{
class ProductStatus_Save
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
